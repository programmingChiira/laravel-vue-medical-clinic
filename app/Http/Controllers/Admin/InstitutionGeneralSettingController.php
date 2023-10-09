<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\InstitutionGeneralSettingResource;
use App\Models\InstitutionGeneralSetting;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class InstitutionGeneralSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $institutionGeneralSettings = InstitutionGeneralSetting::latest()->paginate(50);

        return response()->json([
            'data' => InstitutionGeneralSettingResource::collection($institutionGeneralSettings),
            'pagination' => [
                'current_page' => $institutionGeneralSettings->currentPage(),
                'last_page' => $institutionGeneralSettings->lastPage(),
                'per_page' => $institutionGeneralSettings->perPage(),
                'total' => $institutionGeneralSettings->total(),
            ]
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeSchoolSettings(Request $request)
    {
        $request->validate([
            'institution_logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg,avif,webp,bmp,eps,heif,psd,tiff|max:2048',
            'nameOfInstitution' => 'required',
            'yearOfStartingInstitution' => 'required',
            'institutionFirstEmail' => 'required',
            'institutionSecondEmail' => 'nullable',
            'institutionFirstPhone' => 'required',
            'institutionSecondPhone' => 'nullable',
            'institutionCountyOfOrigin' => 'required',
            'addressOfInstitution' => 'required',
            'institutionLocation' => 'required',
            'typeOfInstitution' => 'required',
            'modeOfInstitution' => 'required',
            'institutionGenderDistribution' => 'required',
            'institutionWelcomeMessage' => 'required',
            'institutionMissionAndVision' => 'required',
        ]);

        $institutionGeneralSetting = new InstitutionGeneralSetting();

        // Upload and process image
        if ($request->hasFile('institution_logo')) {
            $image1 = $request->file('institution_logo');
            $imagePath = 'img/institutionSettings/' . time() . '.' . $image1->getClientOriginalExtension();
            $img = Image::make($image1)->resize(600, 600, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save(public_path($imagePath));
            $institutionGeneralSetting->institution_logo = $imagePath;
        }

        // Set other fields
        $institutionGeneralSetting->institution_name = $request->input('nameOfInstitution');
        $institutionGeneralSetting->institution_year_of_starting = $request->input('yearOfStartingInstitution');
        $institutionGeneralSetting->institution_email_one = $request->input('institutionFirstEmail');
        $institutionGeneralSetting->institution_email_two = $request->input('institutionSecondEmail');
        $institutionGeneralSetting->institution_phone_one = $request->input('institutionFirstPhone');
        $institutionGeneralSetting->institution_phone_two = $request->input('institutionSecondPhone');
        $institutionGeneralSetting->institution_county = $request->input('institutionCountyOfOrigin');
        $institutionGeneralSetting->institution_address = $request->input('addressOfInstitution');
        $institutionGeneralSetting->institution_pinned_location = $request->input('institutionLocation');
        $institutionGeneralSetting->institution_type = $request->input('typeOfInstitution');
        $institutionGeneralSetting->institution_mode = $request->input('modeOfInstitution');
        $institutionGeneralSetting->institution_gender_distro = $request->input('institutionGenderDistribution');
        $institutionGeneralSetting->institution_welcome_message = $request->input('institutionWelcomeMessage');
        $institutionGeneralSetting->institution_mission_and_vision = $request->input('institutionMissionAndVision');

        $institutionGeneralSetting->save();

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
            'institution_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,avif,webp,bmp,eps,heif,psd,tiff|max:2048',
            'nameOfInstitution' => 'required',
            'yearOfStartingInstitution' => 'required',
            'institutionFirstEmail' => 'required',
            'institutionSecondEmail' => 'nullable',
            'institutionFirstPhone' => 'required',
            'institutionSecondPhone' => 'nullable',
            'institutionCountyOfOrigin' => 'required',
            'addressOfInstitution' => 'required',
            'institutionLocation' => 'required',
            'typeOfInstitution' => 'required',
            'modeOfInstitution' => 'required',
            'institutionGenderDistribution' => 'required',
            'institutionWelcomeMessage' => 'required',
            'institutionMissionAndVision' => 'required',
        ]);

        try {
            $institution = InstitutionGeneralSetting::findOrFail($id);

            if ($request->hasFile('institution_logo')) {
                $image1 = $request->file('institution_logo');
                $imagePath = 'img/institutionSettings/' . time() . '.' . $image1->getClientOriginalExtension();
                $img = Image::make($image1)->resize(600, 600, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $img->save(public_path($imagePath));
                $institution->institution_logo = $imagePath;
            }

            $institution->institution_name = $request->nameOfInstitution;
            $institution->institution_year_of_starting = $request->yearOfStartingInstitution;
            $institution->institution_email_one = $request->institutionFirstEmail;
            $institution->institution_email_two = $request->institutionSecondEmail;
            $institution->institution_phone_one = $request->institutionFirstPhone;
            $institution->institution_phone_two = $request->institutionSecondPhone;
            $institution->institution_county = $request->institutionCountyOfOrigin;
            $institution->institution_address = $request->addressOfInstitution;
            $institution->institution_pinned_location = $request->institutionLocation;
            $institution->institution_type = $request->typeOfInstitution;
            $institution->institution_mode = $request->modeOfInstitution;
            $institution->institution_gender_distro = $request->institutionGenderDistribution;
            $institution->institution_welcome_message = $request->institutionWelcomeMessage;
            $institution->institution_mission_and_vision = $request->institutionMissionAndVision;

            $institution->save();

            return response()->json(['message' => 'Update successful.'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Update failed.']);
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $setting = InstitutionGeneralSetting::findOrFail($id);
        $setting->delete();

        return response()->json(['message' => 'Setting deleted successfully'], 200);
    }
}
