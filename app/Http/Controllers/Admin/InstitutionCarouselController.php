<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\InstitutionCarouselResource;
use App\Models\InstitutionCarousel;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class InstitutionCarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $institutionCarousels = InstitutionCarousel::latest()->paginate(50);

        return response()->json([
            'data' => InstitutionCarouselResource::collection($institutionCarousels),
            'pagination' => [
                'current_page' => $institutionCarousels->currentPage(),
                'last_page' => $institutionCarousels->lastPage(),
                'per_page' => $institutionCarousels->perPage(),
                'total' => $institutionCarousels->total(),
            ]
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeSchoolCarousels(Request $request)
    {
        $request->validate([
            'institution_first_carousel' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,avif,webp,bmp,eps,heif,psd,tiff|max:2048',
            'institution_second_carousel' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,avif,webp,bmp,eps,heif,psd,tiff|max:2048',
            'institution_third_carousel' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,avif,webp,bmp,eps,heif,psd,tiff|max:2048',
        ]);

        $institutionCarousel = new InstitutionCarousel();

        // Upload and process image
        if ($request->hasFile('institution_first_carousel')) {
            $image1 = $request->file('institution_first_carousel');
            $extension1 = $image1->getClientOriginalExtension();
            $newFileName1 = time() . '_' . Str::random(8) . '.' . $extension1;
            $imagePath1 = 'img/institutionCarousels/' . $newFileName1;

            $img1 = Image::make($image1)->resize(1000, 1000, function ($constraint1) {
                $constraint1->aspectRatio();
            });
            $img1->save(public_path($imagePath1));

            $institutionCarousel->institution_first_carousel = $imagePath1;
        }

        if ($request->hasFile('institution_second_carousel')) {
            $image2 = $request->file('institution_second_carousel');
            $extension2 = $image2->getClientOriginalExtension();
            $newFileName2 = time() . '_' . Str::random(8) . '.' . $extension2;
            $imagePath2 = 'img/institutionCarousels/' . $newFileName2;

            $img2 = Image::make($image2)->resize(1000, 1000, function ($constraint2) {
                $constraint2->aspectRatio();
            });
            $img2->save(public_path($imagePath2));

            $institutionCarousel->institution_second_carousel = $imagePath2;
        }

        if ($request->hasFile('institution_third_carousel')) {
            $image3 = $request->file('institution_third_carousel');
            $extension3 = $image3->getClientOriginalExtension();
            $newFileName3 = time() . '_' . Str::random(8) . '.' . $extension3;
            $imagePath3 = 'img/institutionCarousels/' . $newFileName3;

            $img3 = Image::make($image3)->resize(1000, 1000, function ($constraint3) {
                $constraint3->aspectRatio();
            });
            $img3->save(public_path($imagePath3));

            $institutionCarousel->institution_third_carousel = $imagePath3;
        }

        $institutionCarousel->save();

        return response()->json(['message' => 'Carousel saved successfully'], 200);
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
            'institution_first_carousel' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,avif,webp,bmp,eps,heif,psd,tiff|max:2048',
            'institution_second_carousel' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,avif,webp,bmp,eps,heif,psd,tiff|max:2048',
            'institution_third_carousel' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,avif,webp,bmp,eps,heif,psd,tiff|max:2048',
        ]);

        try {
            $institution = InstitutionCarousel::findOrFail($id);

            if ($request->hasFile('institution_first_carousel')) {
                $image1 = $request->file('institution_first_carousel');
                $extension1 = $image1->getClientOriginalExtension();
                $newFileName1 = time() . '_' . Str::random(8) . '.' . $extension1;
                $imagePath1 = 'img/institutionCarousels/' . $newFileName1;

                $img1 = Image::make($image1)->resize(1000, 1000, function ($constraint1) {
                    $constraint1->aspectRatio();
                });
                $img1->save(public_path($imagePath1));

                $institution->institution_first_carousel = $imagePath1;
            }

            if ($request->hasFile('institution_second_carousel')) {
                $image2 = $request->file('institution_second_carousel');
                $extension2 = $image2->getClientOriginalExtension();
                $newFileName2 = time() . '_' . Str::random(8) . '.' . $extension2;
                $imagePath2 = 'img/institutionCarousels/' . $newFileName2;

                $img2 = Image::make($image2)->resize(1000, 1000, function ($constraint2) {
                    $constraint2->aspectRatio();
                });
                $img2->save(public_path($imagePath2));

                $institution->institution_second_carousel = $imagePath2;
            }

            if ($request->hasFile('institution_third_carousel')) {
                $image3 = $request->file('institution_third_carousel');
                $extension3 = $image3->getClientOriginalExtension();
                $newFileName3 = time() . '_' . Str::random(8) . '.' . $extension3;
                $imagePath3 = 'img/institutionCarousels/' . $newFileName3;

                $img3 = Image::make($image3)->resize(1000, 1000, function ($constraint3) {
                    $constraint3->aspectRatio();
                });
                $img3->save(public_path($imagePath3));

                $institution->institution_third_carousel = $imagePath3;
            }

            $institution->save();

            return response()->json(['message' => 'Update successful.'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Update failed.'], 500);
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
        $setting = InstitutionCarousel::findOrFail($id);
        $setting->delete();

        return response()->json(['message' => 'Carousel deleted successfully'], 200);
    }
}
