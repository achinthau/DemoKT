<?php

namespace App\Livewire\Campaigns;

use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class SelectMode extends Component
{
    public $option;
    public $campaign;

    public function render()
    {
        return view('livewire.campaigns.select-mode');
    }

    public function updatedOption($value)
    {
        $this->campaign = null;
    }

    public function updatedCampaign($value)
    {
    
        
    }
}
