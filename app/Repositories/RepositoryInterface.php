<?php

namespace App\Repositories;
/**
 * Created by PhpStorm.
 * User: nhat
 * Date: 12/12/17
 * Time: 10:49 AM
 */

interface RepositoryInterface
{
    public function getMotel();

    public function all();
    public function create($data);
    public function delete($id);
    public function update($id, $data);
    public function find($id);
}