<?php namespace Dibro\SportTech\Components;

use Cms\Classes\ComponentBase;
use Dibro\SportTech\Models\Exercise;
use Dibro\SportTech\Models\Location;
use Dibro\SportTech\Models\News;
use Log;

class ExerciseComponent extends ComponentBase
{
    public $exercises;

    public function componentDetails()
    {
        return [
            'name'        => 'Exercise List',
            'description' => 'Displays a collection of all exercises.'
        ];
    }

    public function onRun()
    {
        // Загружаем все упражнения в переменную $exercises для использования в шаблоне компонента
        Log::info($this->loadExercises());
        $this->page['exercises'] = $this->loadExercises();
        $this->page['locations'] = $this->loadLocations();

        $news_id = $this->param('id'); // Получаем параметр id из URL, если он есть
        $this->page['news'] = $this->loadNews($news_id);
    }

    protected function loadExercises()
    {
        // Получаем все упражнения из модели Exercise
        
         return Exercise::all(['id', 'name', 'photo_url', 'link']);
    }

    protected function loadLocations()
    {
        // Загружаем все записи Location и связанные фотографии
        return Location::with('photos')->get(['id', 'name', 'latitude', 'longitude', 'content'])->map(function ($location) {
            // Добавляем URL всех фотографий в массив
            $location->photo_urls = $location->photos->map(function ($photo) {
                return $photo->getPath();
            });
            return $location;
        });
    }

    protected function loadNews($id = null)
    {
        // Если указан id, загружаем только одну новость, иначе загружаем все
        $query = News::with('photos')->select(['id', 'title', 'content']);

        if ($id) {
            $query->where('id', $id);
        }

        return $query->get()->map(function ($news) {
            // Добавляем URL всех фотографий в массив
            $news->photo_urls = $news->photos->map(function ($photo) {
                return $photo->getPath();
            });
            return $news;
        });
    }


}
