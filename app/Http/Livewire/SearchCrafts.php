<?php

namespace App\Http\Livewire;

use App\Models\Craft;
use Livewire\Component;

class SearchCrafts extends Component
{
    public $search = '';

    public function render()
    {
        $crafts = collect(); // create an empty collection

        if (strlen($this->search) >= 1) {
            $crafts = Craft::where('name', 'like', $this->search.'%')
                        ->orWhere('synonyms', 'like', '%'.$this->search.'%')
                        ->get();
        }

        return view('livewire.search-crafts', [
            'crafts' => $crafts,
        ]);
    }
}