<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\InstitutionEnrollmentResource;
use App\Models\InstitutionEnrollment;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class InstitutionEnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $institutionEnrollments = InstitutionEnrollment::latest()->paginate(50);

        return response()->json([
            'data' => InstitutionEnrollmentResource::collection($institutionEnrollments),
            'pagination' => [
                'current_page' => $institutionEnrollments->currentPage(),
                'last_page' => $institutionEnrollments->lastPage(),
                'per_page' => $institutionEnrollments->perPage(),
                'total' => $institutionEnrollments->total(),
            ]
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeInstitutionEnrollment(Request $request)
    {
        $request->validate([
            'uniqueId' => 'required',
            'logoOfInstitution' => 'required',
            'nameOfInstitution' => 'required',
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
            'yearOfEnrollment' => 'required',
            'monthOfEnrollment' => 'required',
            'dayOfEnrollment' => 'required',
            'enrollmentFirstRequirment' => 'required',
            'enrollmentSecondRequirment' => 'required',
            'enrollmentThirdRequirment' => 'required',
            'enrollmentFourthRequirment' => 'required',
            'enrollmentFifthRequirment' => 'required',
            'enrollment_requirment_6' => 'nullable',
            'enrollment_requirment_7' => 'nullable',
            'enrollment_requirment_8' => 'nullable',
            'enrollment_requirment_9' => 'nullable',
            'enrollment_requirment_10' => 'nullable',
            'enrollment_requirment_11' => 'nullable',
            'enrollment_requirment_12' => 'nullable',
            'enrollment_requirment_13' => 'nullable',
            'enrollment_requirment_14' => 'nullable',
            'enrollment_requirment_15' => 'nullable',
            'enrollment_requirment_16' => 'nullable',
            'enrollment_requirment_17' => 'nullable',
            'enrollment_requirment_18' => 'nullable',
            'enrollment_requirment_19' => 'nullable',
            'enrollment_requirment_20' => 'nullable',
            
        ]);

        $institutionEnrollment = new InstitutionEnrollment();

        $institutionEnrollment->slug = $request->input('uniqueId');
        $institutionEnrollment->institution_logo = $request->input('logoOfInstitution');
        $institutionEnrollment->institution_name = $request->input('nameOfInstitution');
        $institutionEnrollment->institution_email_one = $request->input('institutionFirstEmail');
        $institutionEnrollment->institution_email_two = $request->input('institutionSecondEmail');
        $institutionEnrollment->institution_phone_one = $request->input('institutionFirstPhone');
        $institutionEnrollment->institution_phone_two = $request->input('institutionSecondPhone');
        $institutionEnrollment->institution_county = $request->input('institutionCountyOfOrigin');
        $institutionEnrollment->institution_address = $request->input('addressOfInstitution');
        $institutionEnrollment->institution_pinned_location = $request->input('institutionLocation');
        $institutionEnrollment->institution_type = $request->input('typeOfInstitution');
        $institutionEnrollment->institution_mode = $request->input('modeOfInstitution');
        $institutionEnrollment->institution_gender_distro = $request->input('institutionGenderDistribution');
        $institutionEnrollment->institution_welcome_message = $request->input('institutionWelcomeMessage');
        $institutionEnrollment->institution_mission_and_vision = $request->input('institutionMissionAndVision');
        $institutionEnrollment->year_of_enrollment = $request->input('yearOfEnrollment');
        $institutionEnrollment->month_of_enrollment = $request->input('monthOfEnrollment');
        $institutionEnrollment->day_of_enrollment = $request->input('dayOfEnrollment');
        $institutionEnrollment->enrollment_requirment_1 = $request->input('enrollmentFirstRequirment');
        $institutionEnrollment->enrollment_requirment_2 = $request->input('enrollmentSecondRequirment');
        $institutionEnrollment->enrollment_requirment_3 = $request->input('enrollmentThirdRequirment');
        $institutionEnrollment->enrollment_requirment_4 = $request->input('enrollmentFourthRequirment');
        $institutionEnrollment->enrollment_requirment_5 = $request->input('enrollmentFifthRequirment');
        $institutionEnrollment->enrollment_requirment_6 = $request->input('enrollment_requirment_6');
        $institutionEnrollment->enrollment_requirment_7 = $request->input('enrollment_requirment_7');
        $institutionEnrollment->enrollment_requirment_8 = $request->input('enrollment_requirment_8');
        $institutionEnrollment->enrollment_requirment_9 = $request->input('enrollment_requirment_9');
        $institutionEnrollment->enrollment_requirment_10 = $request->input('enrollment_requirment_10');
        $institutionEnrollment->enrollment_requirment_11 = $request->input('enrollment_requirment_11');
        $institutionEnrollment->enrollment_requirment_12 = $request->input('enrollment_requirment_12');
        $institutionEnrollment->enrollment_requirment_13 = $request->input('enrollment_requirment_13');
        $institutionEnrollment->enrollment_requirment_14 = $request->input('enrollment_requirment_14');
        $institutionEnrollment->enrollment_requirment_15 = $request->input('enrollment_requirment_15');
        $institutionEnrollment->enrollment_requirment_16 = $request->input('enrollment_requirment_16');
        $institutionEnrollment->enrollment_requirment_17 = $request->input('enrollment_requirment_17');
        $institutionEnrollment->enrollment_requirment_18 = $request->input('enrollment_requirment_18');
        $institutionEnrollment->enrollment_requirment_19 = $request->input('enrollment_requirment_19');
        $institutionEnrollment->enrollment_requirment_20 = $request->input('enrollment_requirment_20');

        $institutionEnrollment->save();

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
            'logoOfInstitution' => 'nullable',
            'nameOfInstitution' => 'required',
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
            'yearOfEnrollment' => 'required',
            'monthOfEnrollment' => 'required',
            'dayOfEnrollment' => 'required',
            'enrollmentFirstRequirment' => 'required',
            'enrollmentSecondRequirment' => 'required',
            'enrollmentThirdRequirment' => 'required',
            'enrollmentFourthRequirment' => 'required',
            'enrollmentFifthRequirment' => 'required',
            'enrollment_requirment_6' => 'nullable',
            'enrollment_requirment_7' => 'nullable',
            'enrollment_requirment_8' => 'nullable',
            'enrollment_requirment_9' => 'nullable',
            'enrollment_requirment_10' => 'nullable',
            'enrollment_requirment_11' => 'nullable',
            'enrollment_requirment_12' => 'nullable',
            'enrollment_requirment_13' => 'nullable',
            'enrollment_requirment_14' => 'nullable',
            'enrollment_requirment_15' => 'nullable',
            'enrollment_requirment_16' => 'nullable',
            'enrollment_requirment_17' => 'nullable',
            'enrollment_requirment_18' => 'nullable',
            'enrollment_requirment_19' => 'nullable',
            'enrollment_requirment_20' => 'nullable',
        ]);

        try {
            $institution = InstitutionEnrollment::findOrFail($id);

            $institution->institution_logo = $request->logoOfInstitution;
            $institution->institution_name = $request->nameOfInstitution;
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
            $institution->year_of_enrollment = $request->yearOfEnrollment;
            $institution->month_of_enrollment = $request->monthOfEnrollment;
            $institution->day_of_enrollment = $request->dayOfEnrollment;
            $institution->enrollment_requirment_1 = $request->enrollmentFirstRequirment;
            $institution->enrollment_requirment_2 = $request->enrollmentSecondRequirment;
            $institution->enrollment_requirment_3 = $request->enrollmentThirdRequirment;
            $institution->enrollment_requirment_4 = $request->enrollmentFourthRequirment;
            $institution->enrollment_requirment_5 = $request->enrollmentFifthRequirment;
            $institution->enrollment_requirment_6 = $request->enrollment_requirment_6;
            $institution->enrollment_requirment_7 = $request->enrollment_requirment_7;
            $institution->enrollment_requirment_8 = $request->enrollment_requirment_8;
            $institution->enrollment_requirment_9 = $request->enrollment_requirment_9;
            $institution->enrollment_requirment_10 = $request->enrollment_requirment_10;
            $institution->enrollment_requirment_11 = $request->enrollment_requirment_11;
            $institution->enrollment_requirment_12 = $request->enrollment_requirment_12;
            $institution->enrollment_requirment_13 = $request->enrollment_requirment_13;
            $institution->enrollment_requirment_14 = $request->enrollment_requirment_14;
            $institution->enrollment_requirment_15 = $request->enrollment_requirment_15;
            $institution->enrollment_requirment_16 = $request->enrollment_requirment_16;
            $institution->enrollment_requirment_17 = $request->enrollment_requirment_17;
            $institution->enrollment_requirment_18 = $request->enrollment_requirment_18;
            $institution->enrollment_requirment_19 = $request->enrollment_requirment_19;
            $institution->enrollment_requirment_20 = $request->enrollment_requirment_20;

            $institution->save();

            return response()->json(['message' => 'Update successful.'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Update failed.']);
        }
    }

    public function show(InstitutionEnrollment $institutionEnrollment)
    {
        $institutionEnrollments = InstitutionEnrollment::find($institutionEnrollment->id);
        $data = [
            "data" => $institutionEnrollments,
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
        $setting = InstitutionEnrollment::findOrFail($id);
        $setting->delete();

        return response()->json(['message' => 'Setting deleted successfully'], 200);
    }
}
