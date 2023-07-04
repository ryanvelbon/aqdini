<?php

namespace App\Http\Controllers;

use App\Models\Craft;
use App\Models\Locality;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * This method returns a list of professionals based on the craft and locality provided.
     * The craft and locality can be provided either as path parameters (e.g., /search/plumber/berlin)
     * or as query parameters (e.g., /search?craft=plumber&locality=berlin).
     *
     * @param  string|null  $craft     The craft as a slug (optional).
     * @param  string|null  $locality  The locality as a slug (optional).
     * @return Response                Returns a response containing the list of professionals.
     */
    public function index(Request $request, $craft = null, $locality = null)
    {
        // Get the craft and locality values from the path parameters or the query parameters
        $craft = $craft ?? $request->get('craft');
        $locality = $locality ?? $request->get('locality');

        $craftModel = is_numeric($craft)
                            ? Craft::findOrFail($craft)
                            : Craft::where('slug', $craft)->firstOrFail();

        $localityModel = is_numeric($locality)
                            ? Locality::findOrFail($locality)
                            : Locality::where('slug', $locality)->firstOrFail();

        // Use the ids of the models in your query
        $profiles = Profile::query()
            ->when($craftModel, function ($query, $craftModel) {
                return $query->where('craft_id', $craftModel->id);
            })
            ->when($localityModel, function ($query, $localityModel) {
                return $query->where('locality_id', $localityModel->id);
            })
            ->get();

        return view('profiles.index', [
            'craft' => $craftModel,
            'locality' => $localityModel,
            'profiles' => $profiles
        ]);
    }

    public function show($username)
    {
        $profile = User::where('username', $username)->firstOrFail()->profile;

        if ($profile->user->account_type !== 'contractor') {
            return abort(404);
        }

        return view('profiles.show', [
            'profile' => $profile,
        ]);
    }
}
