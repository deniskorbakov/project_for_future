<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\NoteBookRequest;
use App\Http\Resources\NoteBookResource;
use App\Models\NoteBook;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class NoteBookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): AnonymousResourceCollection
    {

        $page = ($request->page ?? 1) * 10;

        $skip = $page - 10;

        return NoteBookResource::collection(NoteBook::orderBy('id', 'desc')->skip($skip)->paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NoteBookRequest $request): NoteBookResource
    {
        $notebook = NoteBook::create($request->validated());

        return new NoteBookResource($notebook);
    }

    /**
     * Display the specified resource.
     */
    public function show(NoteBook $notebook): NoteBookResource
    {
        return new NoteBookResource(NoteBook::findOrFail($notebook->id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NoteBookRequest $request, NoteBook $notebook): NoteBookResource
    {
        $notebook->update($request->validated());

        return new NoteBookResource($notebook);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NoteBook $notebook): Application|Response|\Illuminate\Contracts\Foundation\Application|ResponseFactory
    {
        $notebook->delete();

        return response(null, ResponseAlias::HTTP_NO_CONTENT);
    }
}
