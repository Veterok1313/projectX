<?php
namespace App\Modules\News\Http\ViewComposers;
use Carbon\Carbon;
use Illuminate\View\View;
use App\Modules\News\Models\News;

class MainComposer
{

    public  $months = [
        'Января',
        'Февраля',
        'Марта',
        'Апреля',
        'Мая',
        'Июня',
        'Июля',
        'Августа',
        'Сентября',
        'Октября',
        'Ноября',
        'Декабря'
    ];

    public function compose(View $view){

        $news = News::active()->where('on_main', 1)->get();
        if (!$news->isEmpty()) {
            $news->each(function ($item, $key) {
                $day = Carbon::parse($item->date)->day;
                $month = Carbon::parse($item->date)->month;
                $year = Carbon::parse($item->date)->year;
                $item->date = $day . " " . $this->months[$month - 1] . " " . $year;
            });
        }
        $view->with('items', $news);
    }
}