<?php

namespace Tests\Unit;

use Tests\TestCase;

class UserServiceTest extends TestCase
{
    use TestData;

    protected function setUp()
    {
        parent::setUp();
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $postRepository = \Mockery::mock("App\Repositories\Eloquent\Post\PostRepositoryInterface");

        $postRepository->shouldReceive('create')
            ->once()
            ->andReturn($this->getPostObject());
        $this->app->instance("App\Repositories\Eloquent\Post\PostRepositoryInterface", $postRepository);

        $postService = $this->app->make('App\Services\Post\PostServiceInterface');

        $post = $postService->create($this->getPostData());

        $this->assertEquals($post->title, $this->postTitle);

        $this->assertEquals($post->content, $this->postContent);
    }
}