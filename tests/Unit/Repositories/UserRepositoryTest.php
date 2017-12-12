<?php

namespace Tests\Unit;

use App\Post;
use Tests\TestCase;

class UserRepositoryTest extends TestCase
{
    use TestData;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $postMock = \Mockery::mock(Post::class);
        $postMock->shouldReceive('create')
            ->with($this->getPostData())
            ->once()
            ->andReturn($this->getPostObject());

        $this->app->instance(Post::class, $postMock);

        $postRepository = $this->app->make('App\Repositories\Eloquent\Post\PostRepositoryInterface');

        $post = $postRepository->create($this->getPostData());

        $this->assertEquals($post->title, $this->postTitle);
        $this->assertEquals($post->content, $this->postContent);
    }
}
