<?php

namespace App\Http\Controllers;

use App\Http\Resources\HospitalResource;
use App\Models\Hospital;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class HospitalController extends Controller
{
    /**
     * The endpoint to get all hospitals with related city.
     *
     * @return AnonymousResourceCollection
     */
    public function hospitals(): AnonymousResourceCollection
    {
        $hospitals = Hospital::with('city')->get();
        return HospitalResource::collection($hospitals);
    }
}
