<?php
namespace App\Modules\Category\Models;

use App\Models\Tree as ParentTree;
use Kyslik\ColumnSortable\Sortable;
use App\Models\Image as Img;

class Category extends ParentTree{

    use Sortable,Img;

    protected $table = 'category';





}