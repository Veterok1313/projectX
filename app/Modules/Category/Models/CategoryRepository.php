<?php
namespace App\Modules\Category\Models;

use App\Modules\Category\Models\Category as Model;

class CategoryRepository
{

    public function get($id)
    {
        return Model::where('id', $id)->first();
    }

    public function getRoot()
    {
        return Model::where('parent_id', null)->first();
    }

    public function getMainMenu()
    {
        return Model::active()->where('depth', 1)->get();
    }

    public function getSelect($root = true)
    {

        $keyed = collect();
        if ($root) {
            Model::admin()->get()->mapWithKeys(function ($item) use ($keyed) {
                    $keyed[$item->id] = str_repeat('-', $item->depth) . $item->title;
            });
        }
        else {
            Model::admin()->get()->mapWithKeys(function ($item) use ($keyed) {
                if ($item->depth) {
                    $keyed[$item->id] = str_repeat('-', $item->depth) . $item->title;
                }
            });
        }

        return $keyed;
    }



}