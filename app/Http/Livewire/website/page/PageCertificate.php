<?php

namespace App\Http\Livewire\Website\Page;

use Livewire\Component;
use App\Models\certificate;
use Livewire\withPagination;
class PageCertificate extends Component
{
    
    use withPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'AddedCertification'=>'$refresh'
    ];

    public function render()
    {
        return view('livewire.website.page.page-certificate', [
            'certification'=>certificate::paginate(3)]);
    }
}
