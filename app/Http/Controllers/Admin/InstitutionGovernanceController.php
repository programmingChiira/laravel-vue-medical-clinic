<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\InstitutionGovernanceResource;
use App\Models\InstitutionGovernance;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class InstitutionGovernanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $governances = InstitutionGovernanceResource::collection(InstitutionGovernance::latest()->paginate(50));

        $governanceData = $governances->map(function ($governance) {
            return [
                'id' => $governance->id,
                'slug' => $governance->slug,
                'first_name' => $governance->first_name,
                'middle_name' => $governance->middle_name,
                'last_name' => $governance->last_name,
                'phone_no' => $governance->phone_no,
                'email' => $governance->email,
                'created_at' => $governance->created_at->diffForHumans(),
            ];
        });

        return response()->json([
            'data' => $governanceData,
            'current_page' => $governances->currentPage(),
            'last_page' => $governances->lastPage()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeInstitutionGovernance(Request $request)
    {
        $request->validate([
            'uniqueId' => 'required',
            'userFirstName' => 'required',
            'userSecondName' => 'required',
            'userSurName' => 'required',
            'userMobileNumber' => 'required',
            'userEmail' => 'required',
        ]);

        $institutionGovernance = new InstitutionGovernance();

        $institutionGovernance->slug = $request->input('uniqueId');
        $institutionGovernance->first_name = $request->input('userFirstName');
        $institutionGovernance->middle_name = $request->input('userSecondName');
        $institutionGovernance->last_name = $request->input('userSurName');
        $institutionGovernance->phone_no = $request->input('userMobileNumber');
        $institutionGovernance->email = $request->input('userEmail');

        $institutionGovernance->save();

        return response()->json(['message' => 'Setting saved successfully'], 200);
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
            'firstName' => 'required',
            'secondName' => 'required',
            'surName' => 'required',
            'mobileNumber' => 'required',
            'email' => 'required',
        ]);

        try {
            $institution = InstitutionGovernance::findOrFail($id);

            $institution->first_name = $request->firstName;
            $institution->middle_name = $request->secondName;
            $institution->last_name = $request->surName;
            $institution->phone_no = $request->mobileNumber;
            $institution->email = $request->email;

            $institution->save();

            return response()->json(['message' => 'Update successful.'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Update failed.'], 500);
        }
    }

    // public function show(InstitutionGovernance $institutionGovernance)
    // {
    //     $data = [
    //         "data" => $institutionGovernance,
    //     ];

    //     return response()->json($data);
    // }
    public function show(InstitutionGovernance $institutionGovernance)
    {
        $institutionGovernances = InstitutionGovernance::find($institutionGovernance->id);
        $data = [
            "data" => $institutionGovernances,
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
        $setting = InstitutionGovernance::findOrFail($id);
        $setting->delete();

        return response()->json(['message' => 'Data deleted successfully'], 200);
    }
}
