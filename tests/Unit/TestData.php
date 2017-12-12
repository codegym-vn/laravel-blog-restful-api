<?php
/**
 * Created by PhpStorm.
 * User: nhat
 * Date: 12/12/17
 * Time: 2:03 PM
 */

namespace Tests\Unit;


use App\Post;

trait TestData
{
    public $postTitle = 'hola';
    public $postContent = 'My Content';

    public function getPostData(){
        return ['title' => $this->postTitle, 'content' => $this->postContent];
    }

    public function getPostObject(){
        $post = new Post();
        $post->title = $this->postTitle;
        $post->content = $this->postContent;
        return $post;
    }
}