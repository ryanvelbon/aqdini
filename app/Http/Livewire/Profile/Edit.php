<?php

namespace App\Http\Livewire\Profile;

use App\Models\Craft;
use App\Models\Locality;
use Livewire\Component;

class Edit extends Component
{
    public $crafts;
    public $localities;

    public $first_name;
    public $last_name;
    public $bio;
    public $profile_pic;
    public $years_xp;
    public $availability;
    public $craft_id;
    public $locality_id;
    public $phone;
    public $facebook;

    public function mount() {

        $profile = auth()->user()->profile;

        $this->crafts = Craft::all();
        $this->localities = Locality::all();

        // Set initial values
        $this->first_name = $profile->first_name;
        $this->last_name = $profile->last_name;
        $this->bio = $profile->bio;
        $this->profile_pic = $profile->profile_pic;
        $this->years_xp = $profile->years_xp;
        $this->availability = $profile->availability;
        $this->craft_id = $profile->craft_id;
        $this->locality_id = $profile->locality_id;
        $this->phone = $profile->phone;
        $this->facebook = $profile->facebook;
    }

    public function update()
    {
        $data = $this->validate([
            'first_name' => ['required', 'string', 'max:35'],
            'last_name' => ['required', 'string', 'max:35'],
            'bio' => ['nullable', 'string'],
            // 'profile_pic' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            // 'years_xp' => ['nullable', 'integer', 'min:0'],
            'availability' => ['nullable', 'string'],
            'craft_id' => ['exists:crafts,id'],
            'locality_id' => ['exists:localities,id'],
            'phone' => ['nullable', 'regex:/^(77|79|98|99)[0-9]{6}$/'],
            // 'facebook' => ['nullable', 'url'],
        ]);

        auth()->user()->profile()->update($data);

        session()->flash('message', 'Your profile has been updated successfully.');

        return redirect(url()->previous());
    }

    public function render()
    {
        return view('livewire.profile.edit')->extends('layouts.auth');
    }
}
