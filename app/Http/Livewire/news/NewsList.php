<?php

namespace App\Http\Livewire\News;

use Livewire\Component;
use App\Models\News;
use Livewire\withPagination;
class NewsList extends Component
{
    use withPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('livewire.news.news-list',  [
            'newsmanage'=>News::where('user_id','=',auth()->user()->id)->paginate(5)]);
    }
}
