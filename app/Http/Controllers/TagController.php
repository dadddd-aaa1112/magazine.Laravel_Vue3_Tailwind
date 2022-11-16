<?php

namespace App\Http\Controllers;

use App\Http\Requests\Tag\StoreRequest;
use App\Http\Requests\Tag\UpdateRequest;
use App\Http\Resources\TagResource;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(){
        $tags = Tag::all();
        return TagResource::collection($tags);
    }

    public function show(Tag $tag) {
        return new TagResource($tag);
    }

    public function destroy(Tag $tag) {
        $tag->delete();
        return response([]);
    }

    public function store(StoreRequest $request) {
        $data = $request->validated();
        $tag = Tag::firstOrCreate($data);
        return $tag;
    }

    public function update(UpdateRequest $request, Tag $tag) {
        $data = $request->validated();
        $newTag = $tag->update($data);
        return $newTag;
    }




}
