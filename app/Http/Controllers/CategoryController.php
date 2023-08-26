<?php

namespace App\Http\Controllers;

use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

//    private CategoryRepository $categoryRepository;
//
//    public function  __construct(CategoryRepository $categoryRepository){
//
//        $this->categoryRepository=$categoryRepository;
//
//    }


//    private CategoryRepository $categoryRepository;


    public function  __construct(private CategoryRepository $categoryRepository){

        $this->categoryRepository=$categoryRepository;

    }


 public function index(){

        return $this->categoryRepository->get();
 }


 public function show($id){

        $category=$this->categoryRepository->show($id);

        dd($category);

 }



}
