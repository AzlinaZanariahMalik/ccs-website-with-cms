<?php

namespace App\Http\Livewire\Website\Home;

use Livewire\Component;
use App\Models\News;
use Livewire\withPagination;
class HomeHighlightNews extends Component
{
    use withPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('livewire.website.home.home-highlight-news',[
            'newsmanage'=>News::paginate(1)]);
    }
}
