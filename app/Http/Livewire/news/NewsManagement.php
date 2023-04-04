<?php

namespace App\Http\Livewire\News;

use Livewire\Component;
use App\Models\News;
use Livewire\withPagination;
class NewsManagement extends Component
{
    use withPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('livewire.news.news-management',  [
            'newsmanage'=>News::paginate(5)]);
    }
}
   