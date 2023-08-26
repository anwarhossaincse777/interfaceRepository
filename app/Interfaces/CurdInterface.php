<?php


namespace App\Interfaces;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface CurdInterface
{

    public function get():Collection;

    public function show(int $id): Model|Collection|static|null;


    public function create(array $data): Model|Collection|static|null;


    public function update(array $data, int $id): Model|Collection|static|null;


    public function delete(int $id): Model|Collection|static|null;

}
