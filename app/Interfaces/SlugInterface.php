<?php


namespace App\Interfaces;


use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface SlugInterface
{

    public function showBySlug(string $slug): Model|Collection|static|null;

}
