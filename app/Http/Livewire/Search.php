<?php

namespace App\Http\Livewire;

use App\Models\Craft;
use App\Models\Locality;
use Livewire\Component;

class Search extends Component
{
    public $localitySearch = '';
    public $craftSearch = '';

    public function mount()
    {
        $craftId = request()->query('craft');
        $localityId = request()->query('locality');

        if ($craftId) {
            $craft = Craft::find($craftId);
            $this->craftSearch = $craft ? $craft->name : '';
        }

        if ($localityId) {
            $locality = Locality::find($localityId);
            $this->localitySearch = $locality ? $locality->name : '';
        }
    }

    public function render()
    {
        $crafts = collect(); // create an empty collection
        $localities = collect();

        if (strlen($this->craftSearch) >= 2) {
            $crafts = Craft::where('name', 'like', '%'.$this->craftSearch.'%')
                        ->orWhere('synonyms', 'like', '%'.$this->craftSearch.'%')
                        ->get();
        }

        if (strlen($this->localitySearch) >= 1) {
            $localities = Locality::where('name', 'like', $this->localitySearch.'%')->get();
        }

        return view('livewire.search', [
            'crafts' => $crafts,
            'localities' => $localities,
        ]);
    }
}
