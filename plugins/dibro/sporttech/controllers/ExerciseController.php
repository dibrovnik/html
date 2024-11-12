<?php namespace Dibro\SportTech\Controllers;

use Backend;
use BackendMenu;
use Backend\Classes\Controller;
use Dibro\SportTech\Models\Exercise;


class ExerciseController extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();
    }

     /**
     * Get exercise data by ID
     * @param int $id
     * @return JsonResponse
     */
    public function getExercise($id)
    {
        $exercise = Exercise::find($id);

        if (!$exercise) {
            return response()->json(['error' => 'Exercise not found'], 404);
        }

        return response()->json([
            'id' => $exercise->id,
            'photo_url' => $exercise->photo_url,
            'name' => $exercise->name,
            'link' => $exercise->link
        ]);
    }

    /**
     * Get all exercises
     * @return JsonResponse
     */
    public function getAllExercises()
    {
        $exercises = Exercise::all(['id', 'photo_url', 'name', 'link']);

        return response()->json($exercises);
    }

}
