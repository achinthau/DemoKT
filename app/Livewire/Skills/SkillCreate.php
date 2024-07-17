<?php

namespace App\Livewire\Skills;

use App\Models\Skill;
use Livewire\Attributes\Validate;
use Livewire\Component;

class SkillCreate extends Component
{
    #[Validate('required|unique:skills,title')]
    public $title;

    public function render()
    {
        return view('livewire.skills.skill-create');
    }

    public function save()
    {
        $this->validate();
        Skill::create(
            [
                'title' => $this->title
            ]
        );

        $this->title = null;
        $this->resetErrorBag();
        $this->dispatch('update-skills');
    }
}
