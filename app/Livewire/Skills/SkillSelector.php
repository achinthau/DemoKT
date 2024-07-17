<?php

namespace App\Livewire\Skills;

use App\Models\Skill;
use Illuminate\Support\Facades\Cache;
use Livewire\Attributes\On;
use Livewire\Component;

class SkillSelector extends Component
{
    public $skills;
    public $selectedSkills;

    public function mount()
    {
        $this->skills = Skill::all();
        $this->selectedSkills =  Cache::remember('selected-skills', 60, function () {
            return [];
        });;
    }

    public function render()
    {
        return view('livewire.skills.skill-selector');
    }

    public function  updatedSelectedSkills($value)
    {
        $this->dispatch('update-selected-skills', $this->selectedSkills);
        Cache::put('selected-skills', $this->selectedSkills, 60);
    }

    #[On('update-skills')]
    public function updateSkills()
    {
        $this->skills = Skill::all();
    }
    // update-selected-skills
}
