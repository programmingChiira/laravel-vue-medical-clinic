<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\InstitutionClubResource;
use App\Models\InstitutionClub;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class InstitutionClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $clubs = InstitutionClubResource::collection(InstitutionClub::latest()->paginate(50));

        $clubData = $clubs->map(function ($club) {
            return [
                'id' => $club->id,
                'slug' => $club->slug,
                'club' => $club->club,
                'created_at' => $club->created_at->diffForHumans(),
            ];
        });

        return response()->json([
            'data' => $clubData,
            'current_page' => $clubs->currentPage(),
            'last_page' => $clubs->lastPage()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeInstitutionClub(Request $request)
    {
        $request->validate([
            'uniqueId' => 'required',
            'clubName' => 'required',
        ]);

        $institutionClub = new InstitutionClub();

        $institutionClub->slug = $request->input('uniqueId');
        $institutionClub->club = $request->input('clubName');

        $institutionClub->save();

        return response()->json(['message' => 'Class saved successfully'], 200);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, $id)
    {
        $request->validate([
            'clubName' => 'required',
        ]);

        try {
            $institution = InstitutionClub::findOrFail($id);

            $institution->club = $request->clubName;

            $institution->save();

            return response()->json(['message' => 'Update successful.'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Update failed.'], 500);
        }
    }

    // public function show(InstitutionClub $institutionClub)
    // {
    //     $data = [
    //         "data" => $institutionClub,
    //     ];

    //     return response()->json($data);
    // }

    public function show(InstitutionClub $institutionClub)
    {
        $institutionClubs = InstitutionClub::find($institutionClub->id);
        $data = [
            "data" => $institutionClubs,
        ];
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $setting = InstitutionClub::findOrFail($id);
        $setting->delete();

        return response()->json(['message' => 'Data deleted successfully'], 200);
    }
}
