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

    public function show(People $people): JsonResponse
    {
        return response()->json($people, 200);
    }

    public function update(People $people): JsonResponse
    {
        return response()->json($people, 201);
    }

    public function delete(People $people): JsonResponse
    {
        return response()->json($people, 204);
    }

    public function store(People $people): JsonResponse
    {
        return response()->json($people, 201);
    }
}aaa
