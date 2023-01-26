<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PeoplePostRequest;
use App\Models\People;
use Illuminate\Http\Request;
use Illuminate\Http\Support\Facades\DB;
use Illuminate\Http\JsonResponse;
use App\Http\Resources\PostResource;


class PeopleController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(People::all(), 200);
    }

    public function show($people): JsonResponse
    {
        $people = People::find($people);
        if (is_null($people)) 
            return response()->json(Null,204);
        
        return response()->json($people, 200);
    }

    public function update(Request $request, People $people): JsonResponse
    {
        $people->update($request->all());
        return response()->json($people, 200);
    }

    public function delete(People $people): JsonResponse
    {
        $people->delete();
        return response()->json($people, 204);
    }

    public function store(Request $request, People $people): JsonResponse
    {
        $people = People::create($request->all());
        return response()->json($people, 201);
    }
}
