<?php

namespace App\Modules\Category\Http\Controllers\Admin;

use App\Modules\Admin\Http\Controllers\Admin;
use App\Modules\Category\Models\Category;
use Illuminate\Support\Facades\Request;
use App\Modules\Admin\Http\Controllers\Image;
use Illuminate\Validation\Rule;

class IndexController extends Admin
{

    use Image;

    public $perPage = 100;

    public function getModel()
    {
        return new Category();
    }

    public function getRules($request, $id = false)
    {
        $rules = [];
        $rules['title'] = 'sometimes|required|max:255';

        return $rules;
    }

    protected function after($entity)
    {
        if (action() == 'store' || action() == 'update') {

            $parentId = (int)Request::get('parent_id');

            if ($parentId && $parentId!=$entity->parent_id) {

                $parent = $this->getModel()->findOrFail($parentId);
                try {
                    $entity->makeChildOf($parent);
                } catch (\Baum\MoveNotPossibleException $e) {
                    redirect()->back()->withErrors([trans('category::admin.unable_to_move')]);
                }
            }
            $this->upload($entity);
        }
    }

    public function priority($id, $direction)
    {

        $entity = $this->getModel()->findOrFail($id);

        try {
            if ($direction == 'up') {
                $entity->moveLeft();
            } else {
                $entity->moveRight();
            }

        } catch (\Baum\MoveNotPossibleException $e) {
            redirect()->back();
        }


        $this->after($entity);

        return redirect()->back();
    }


}
