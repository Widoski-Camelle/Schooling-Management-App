<?php

namespace App\Http\Livewire;
use App\Models\SchoolYear;

use Livewire\Component;
use Livewire\WithPagination;

class Settings extends Component
{
    use WithPagination;

    public function render()
    {
        $schoolYearList = SchoolYear::paginate(1);
        return view('livewire.settings', compact('schoolYearList'));
    }
}
