<?php

namespace App\Http\Livewire;
use Carbon\Carbon;
use App\Models\SchoolYear;

use Livewire\Component;

class CreateSchoolYear extends Component
{
    public $libelle;

    public function store(SchoolYear $schoolYear)
    {
        $this->validate([
            'libelle' => 'string|required|unique:school_years,school_year'
        ]);

        try {
            $currentYear = Carbon::now()->format('Y');

            $schoolYear->school_year = $this->libelle;
            $schoolYear->current_year = $currentYear;

            $schoolYear->save();

            if ($schoolYear)
            {
                $this->libelle = '';
            }
            return redirect()->back()->with('success', 'Année scolaire ajoutée');
        } catch (Exception $e) {
            // Sera pris en compte si on a un problème

        }
    }

    public function render()
    {
        return view('livewire.create-school-year');
    }
}
