<?php

namespace App\Http\Livewire\Website\Page;

use Livewire\Component;
use App\Models\News;
use Livewire\withPagination;
class PageNews extends Component
{
    use withPagination;
    public $sortDirection='desc';
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('livewire.website.page.page-news',  [
            'newsmanage'=>News::where('status', 'like', '1')->orderBy('id', $this->sortDirection)->paginate(5)]);
    }
}
  