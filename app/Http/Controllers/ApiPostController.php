<?php

namespace App\Http\Controllers;

use App\Services\Post\PostServiceInterface;
use Illuminate\Http\Request;

class ApiPostController extends Controller
{
    protected $postService;

    public function __construct(PostServiceInterface $postService)
    {
        $this->postService = $postService;
    }

    public function index()
    {
        $posts = $this->postService->all();
        return response()->json($posts);
    }

    public function store(Request $request)
    {
        $post = $this->postService->create($request->all());
        return response()->json($post, 201);
    }
}
