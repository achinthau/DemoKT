<?php

namespace App\Livewire\Skills;

use App\Models\Skill;
use Illuminate\Support\Facades\Cache;
use Livewire\Attributes\On;
use Livewire\Component;

class SkillContainer extends Component
{
    public $selectedSkills = [];
    public $selectedSkillName = [];

    public function mount()
    {
        $this->selectedSkills = Cache::remember('selected-skills', 60, function () {
            return [];
        });
    }

    public function render()
    {
        $this->selectedSkillName = Skill::whereIn('id', $this->selectedSkills)->get();
        return view('livewire.skills.skill-container');
    }

    #[On('update-selected-skills')]
    public function updateSelectedSkills($updatedSkills)
    {
        $this->selectedSkills = $updatedSkills;
       
    }
}
