<?php

namespace App\Modules\Category\Http\Controllers;

use App\Modules\Tree\Helpers\Breadcrumbs;
use Illuminate\Routing\Controller;

use Illuminate\Http\Request;
use App\Modules\Category\Models\Category as Model;


class IndexController extends Controller{

    public $perPage = 12;

    public function __construct(){
        $this->middleware('og');
        $this->middleware('meta');
    }

    public function index(Request $request){

        $id =  $request->route('id');

        $model = new Model();

        $category = $model->where('id',$id)->first();

        if ( $category->children()->get()->isEmpty() ) {
            return 'Тут будет список продуктов';
        }
        else {

            Breadcrumbs::add('Главная', home());

            if ( $category->depth > 1 ) {
                $parent = $model->where('id', $category->parent_id)->first();
                Breadcrumbs::add($parent->title, route('category.index', ['id' => $parent->id]));
            }
            Breadcrumbs::add($category->title, route('category.index', ['id' => $category->id]));

            return view('category::index', ['items' => $category->children()->active()->paginate($this->perPage), 'entity' => $category]);

        }


    }

}