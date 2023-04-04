<?php

namespace App\Http\Livewire\Website\Home;

use Livewire\Component;
use App\Models\News;
use Livewire\withPagination;
class HomeFeaturedNews extends Component
{
    use withPagination;
    public $sortDirection='desc';
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('livewire.website.home.home-featured-news',  [
            'newsmanage'=>News::where('status', 'like', '1')->orderBy('id', $this->sortDirection)->paginate(4)]);
    }
}
  