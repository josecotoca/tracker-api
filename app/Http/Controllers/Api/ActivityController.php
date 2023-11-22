<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\Models\Activity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ApiResource;
use App\Http\Resources\Api\ApiErrorResource;
use App\Http\Requests\Api\ActivityCreateRequest;
use App\Http\Requests\Api\ActivityFilterRequest;

class ActivityController extends Controller
{
    protected function loadDataCreateActivity($data)
    {
        return new Activity([
            'start_date' =>  $data->start_date,
            'end_date' => $data->end_date,
            'description' => $data->description,
            'person_id' => $data->person_id
        ]);
    }

    public function register(ActivityCreateRequest $request)
    {
        try {

            $data = $this->loadDataCreateActivity($request);
            $activity = $data->save();

            if (is_null($activity) || is_null($activity->id)) {
                throw new Exception('Ha ocurrido un error al crear actividad');
            }
            return (new ApiResource($activity, 201));
        } catch (Exception $ex) {

            return (new ApiErrorResource($ex->getMessage(), 500));
        }
    }

    public function viewActivities(ActivityFilterRequest $request)
    {

    }
}
