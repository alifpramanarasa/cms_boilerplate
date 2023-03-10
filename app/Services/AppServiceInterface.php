<?php


namespace App\Services;


interface AppServiceInterface
{
    public function getAll();

    public function getById($id);

    public function getPaginated($search, $perPage, $page);

    public function create($data);

    public function update($id, $data);

    public function delete($id);
}
