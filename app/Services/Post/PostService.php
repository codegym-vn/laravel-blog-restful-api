<?php
namespace App\Services\Post;
use App\Repositories\Eloquent\Post\PostRepositoryInterface;

/**
 * Created by PhpStorm.
 * User: nhat
 * Date: 12/12/17
 * Time: 11:03 AM
 */

class PostService implements PostServiceInterface
{
    private $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function all(){
        return $this->postRepository->all();
    }

    public function create($data)
    {
        return $this->postRepository->create($data);
    }

    public function delete($id)
    {
        return $this->postRepository->delete($id);
    }

    public function update($id, $data)
    {
        return $this->postRepository->update($id, $data);
    }

    public function find($id)
    {
        return $this->postRepository->find($id);
    }
}