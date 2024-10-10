<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EditLevel extends Component
{
    public $level;
    public $code;
    public $libelle;
    public $scolarite;

    // Etape où la composante est montée
    public function mount()
    {
        $this->code = $this->level->code;
        $this->libelle = $this->level->libelle;
        $this->scolarite = $this->level->scolarite;
    }

    public function render()
    {
        return view('livewire.edit-level');
    }
}
