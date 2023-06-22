<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index(Request $request)
    {
        $craft = $request->get('craft');
        $locality = $request->get('locality');

        $profiles = Profile::query()
            ->when($craft, function ($query, $craft) {
                return $query->where('craft_id', $craft);
            })
            ->when($locality, function ($query, $locality) {
                return $query->where('locality_id', $locality);
            })
            ->get();

        // $profiles->load('craft');

        return view('profiles.index', ['profiles' => $profiles]);
    }
}
