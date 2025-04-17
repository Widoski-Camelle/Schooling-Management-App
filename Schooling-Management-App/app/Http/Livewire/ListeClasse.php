<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Classe;
use Livewire\WithPagination;

class ListeClasse extends Component
{
    use WithPagination;

    public $search = '';

    public function render()
    {
        if (!empty($this->search))
        {
            $classesList = Classe::where('libelle', 'like', '%' . $this->search . '%')
                ->orWhere('code', 'like', '%' . $this->search . '%')->paginate(10);
        } else
        {
            // $activeSchoolYear = SchoolYear::where('active', '1')->first();
            // where('school_year_id', $activeSchoolYear->id)->
            $classesList = Classe::paginate(10);
        }

        return view('livewire.liste-classe', compact('classesList'));
    }
}
