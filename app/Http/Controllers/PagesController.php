<?php

namespace App\Http\Controllers;

use App\Models\Craft;
use App\Models\Locality;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $crafts = Craft::orderBy('priority', 'desc')->get();
        $localities = Locality::orderBy('name', 'asc')->get();

        return view('welcome', [
            'crafts' => $crafts,
            'craftsA' => $crafts->where('priority', 3),
            'craftsB' => $crafts->where('priority', 2),
            'craftsC' => $crafts->where('priority', 1),
            'localities' => $localities,
        ]);
    }
}
