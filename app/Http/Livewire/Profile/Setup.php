<?php

namespace App\Http\Livewire\Profile;

use Illuminate\Validation\Rule;
use Livewire\Component;

class Setup extends Component
{
    /** @var string */
    public $accountType = '';

    public function selectAccountType()
    {
        $this->validate([
            'accountType' => ['required', Rule::in(['contractor', 'client'])],
        ]);

        if ($this->accountType === 'contractor') {
            return redirect()->route('profile.edit');
        }

        else if ($this->accountType === 'client') {
            return redirect()->intended(route('home'));
        }

        else {
            return "404";
        }
    }

    public function render()
    {
        return view('livewire.profile.setup')->extends('layouts.auth');
    }
}
