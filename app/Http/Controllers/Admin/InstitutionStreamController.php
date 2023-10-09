<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\InstitutionStreamResource;
use App\Models\InstitutionStream;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class InstitutionStreamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $streams = InstitutionStreamResource::collection(InstitutionStream::latest()->paginate(50));

        $streamData = $streams->map(function ($stream) {
            return [
                'id' => $stream->id,
                'slug' => $stream->slug,
                'stream' => $stream->stream,
                'created_at' => $stream->created_at->diffForHumans(),
            ];
        });

        return response()->json([
            'data' => $streamData,
            'current_page' => $streams->currentPage(),
            'last_page' => $streams->lastPage()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeInstitutionStream(Request $request)
    {
        $request->validate([
            'uniqueId' => 'required',
            'streamName' => 'required',
        ]);

        $institutionStream = new InstitutionStream();

        $institutionStream->slug = $request->input('uniqueId');
        $institutionStream->stream = $request->input('streamName');

        $institutionStream->save();

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
            'streamName' => 'required',
        ]);

        try {
            $institution = InstitutionStream::findOrFail($id);

            $institution->stream = $request->streamName;

            $institution->save();

            return response()->json(['message' => 'Update successful.'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Update failed.'], 500);
        }
    }

    // public function show(InstitutionStream $institutionStream)
    // {
    //     $data = [
    //         "data" => $institutionStream,
    //     ];

    //     return response()->json($data);
    // }

    public function show(InstitutionStream $institutionStream)
    {
        $institutionStreams = InstitutionStream::find($institutionStream->id);
        $data = [
            "data" => $institutionStreams,
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
        $setting = InstitutionStream::findOrFail($id);
        $setting->delete();

        return response()->json(['message' => 'Data deleted successfully'], 200);
    }
}
