<?php

namespace App\Services\Post;
/**
 * Created by PhpStorm.
 * User: nhat
 * Date: 12/12/17
 * Time: 11:02 AM
 */


interface PostServiceInterface
{
    public function all();
    public function create($data);
    public function delete($id);
    public function update($id, $data);
    public function find($id);
}