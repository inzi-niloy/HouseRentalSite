<?php

namespace App\Http\Controllers;

use App\AddAdvertisement;
use App\Categories;
use App\subImages;
use Illuminate\Http\Request;
use ReflectionClass;



class AdvertisementController extends Controller
{

    public function index()
    {
        $advertisement= AddAdvertisement::distinct()->get(['type']); //category for header
        $properties=AddAdvertisement::all();
        return view('front.home', ['advertisement'=>$advertisement], ['properties'=>$properties]);
    }


    public function addAdvertisementInfo()
    {


        return view('admin.home.advertisements.add-advertisement');
    }



    private function savePropertyImage($request)
    {
        $propertyImage = $request->file('property_image');


        $imageName     = $propertyImage->getClientOriginalName();
        $directory     = 'property-images/';
        $imageUrl= $directory.$imageName;
        $propertyImage->move($directory, $imageName);

        return $imageUrl;

    }

//    private function savePropertySubImage($request)
//    {
//
//        $propertySubImages = $request->file('sub_images');
//
//        foreach ($propertySubImages as $propertySubImage) {
//            $subImageName = $propertySubImage->getClientOriginalName();
//            $directory = 'property-sub-images/';
//            $subImageUrl = $directory . $subImageName;
//            $propertySubImage->move($directory, $subImageName);
//
//
//        }
//
//        return $subImageUrl;
//    }

    public function storeAdvertisement(Request $request)
    {
//-----------------------------------------------multiple images--------------------------------------------------------------------------------------------------------------------





        $imageUrl= $this->savePropertyImage($request);


        $advertisements= new AddAdvertisement();
        $advertisements->property_title= $request->property_title;
        $advertisements->type= $request->type;
        $advertisements->location= $request->location;
        $advertisements->email= $request->email;
        $advertisements->phone_number= $request->phone_number;
        $advertisements->short_details= $request->short_details;
        $advertisements->property_cost= $request->property_cost;
        $advertisements->ad_type= $request->ad_type;
        $advertisements->details= $request->details;
        $advertisements->property_image= $imageUrl;
        $advertisements->save();



        $propertySubImages = $request->file('sub_images');

        foreach ($propertySubImages as $propertySubImage) {
            $subImageName = $propertySubImage->getClientOriginalName();
            $directory = 'property-sub-images/';
            $subImageUrl = $directory . $subImageName;
            $propertySubImage->move($directory, $subImageName);


            $subImage= new subImages();
            $subImage->sub_image= $subImageUrl;
            $subImage->property_id= $advertisements->id;
            $subImage->save();

        }



        return back()->with('message', 'advertisement added successfully');
    }

    public function manageAdvertisement()
    {
        //$advertisements= AddAdvertisement::all();
        return view('admin.home.advertisements.manage-advertisement', [
            'advertisements'=>AddAdvertisement::all()
        ]);
    }


    public function deleteAdvertisement(Request $request)
    {

        $deleteAdvertisement=AddAdvertisement::find($request->id);
        $deleteAdvertisement->delete();
        return back()->with('message', 'Advertisement successfully deleted');
    }

    public function editAdvertisements($id)
    {
        return view('admin.home.advertisements.edit-advertisements', [
            'advertisement' => AddAdvertisement::find($id)]);
    }

    public function updateAdvertisements(Request $request)
    {


        $advertisement= AddAdvertisement::find($request->advertisement_id);
        $advertisement->type=$request->type;
        $advertisement->location=$request->location;
        $advertisement->details=$request->details;
        $advertisement->save();

        return redirect()->route('manage-advertisement')->with('message', 'Advertisement Updated successfully');
    }

    public function showAdvertisement()
    {
        $advertisement= AddAdvertisement::all();
        return view('front.property-details',[
            'advertisement'=>$advertisement

        ]);
    }




}
