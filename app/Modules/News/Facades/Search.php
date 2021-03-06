<?php

namespace App\Modules\News\Facades;

use App\Modules\Search\Http\Controllers\Search as BaseSearch;
use Caffeinated\Modules\Facades\Module;

class Search extends BaseSearch
{
    public $tableName = 'news';
    public $routeName = 'news.show';

    public $dateField = 'date';

    public function getResult()
    {
        $sql = $this->getTable()
            ->select()
            ->where(function ($query){
                $query->where($this->getSearchSqlWhere(
                    $this->getQuery(),
                    array('title', 'preview', 'content','meta_h1', 'meta_title', 'meta_keywords', 'meta_description')
                ));
            })
            ->where('active', 1)
            ->where('lang', \Lang::locale())
            ->get();

        return $this->addNodes($sql, 'news', trans('news::index.title'));
    }
}