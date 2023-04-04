<?php

namespace App\Http\Livewire\Certificate;

use Livewire\Component;
use App\Models\certificate;
use Livewire\withPagination;
class CertificationsManagement extends Component
{
    use withPagination;
    protected $paginationTheme = 'bootstrap';

    protected $listeners = [
        'AddedCertification'=>'$refresh'
    ];
    public function render()
    {
        return view('livewire.certificate.certifications-management', [
            'certification'=>certificate::paginate(4)]);
    }
}
  