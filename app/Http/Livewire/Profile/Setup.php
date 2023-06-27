<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;

class Setup extends Component
{
    public function render()
    {
        return view('livewire.profile.setup')->extends('layouts.auth');
    }
}
