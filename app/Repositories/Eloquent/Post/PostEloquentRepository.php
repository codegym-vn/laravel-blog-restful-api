<?php
namespace App\Repositories\Eloquent\Post;
use App\Repositories\Eloquent\EloquentRepository;

/**
 * Created by PhpStorm.
 * User: nhat
 * Date: 12/12/17
 * Time: 11:01 AM
 */

class PostEloquentRepository extends EloquentRepository implements PostRepositoryInterface
{

    public function getMotel()
    {
        return \App\Post::class;
    }
}