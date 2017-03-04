<?php
namespace App\Modules\Category\Http\ViewComposers;

use Illuminate\View\View;
use App\Modules\Category\Models\CategoryRepository;

class MenuComposer
{

    protected $repository;

    public function __construct(CategoryRepository $repository){
        $this->repository = $repository;
    }

    public function compose(View $view){
        $view->with('items', $this->repository->getMainMenu());
    }
}