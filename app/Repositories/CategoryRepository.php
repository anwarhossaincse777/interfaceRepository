<?php


namespace App\Repositories;


use App\Interfaces\CurdInterface;
use App\Interfaces\SlugInterface;
use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use stdClass;

class CategoryRepository implements CurdInterface,SlugInterface {

    public function get():Collection

    {

        return Category::get();
    }


    public function show(int $id): Category|null
    {

       return Category::find($id);
    }


    public function showBySlug(string $slug): Category|null
    {

        return Category::where('slug',$slug)->first();
    }


    public function create($data):Category|null
    {
        // create


        $id=1;


//        data return

        return $this->show($id);

    }


    public function update(array $data, int $id):Category|null

    {
        // update

//        data return

        return $this->show($id);

    }


    public function delete(int $id):Category|null

    {
        $category=$this->show($id);
        if (!empty($category)){
            $category->delete();
            return $category;
        }

        return  null;
    }


}
