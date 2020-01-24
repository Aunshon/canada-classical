<?php

namespace App\Http\Controllers;

use App\Logo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function mainPage()
    {
        return view('dashboard\mainPage');
    }
    function logosettings()
    {
        $allLogo = Logo::all();
        return view('dashboard.logoSetting',compact('allLogo'));
    }
    function saveNewLogo(Request $request)
    {
        $request->validate([
            'photo' => 'required'
        ]);

        $lastId = Logo::insertGetId([
            'photo' => "default.jpg",
            'status' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->photo;
            $photoName = $lastId . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->resize(100, 103)->save(base_path("public/uploads/logo/" . $photoName), 100);
            Logo::findOrFail($lastId)->update([
                'photo' => $photoName,
            ]);
        }

        return back()->with('greenStatus','Product Added Successfully 👍');
        // return redirect('manage_product')->with('greenStatus', 'Product Added Successfully 👍');
    }
    function activeThisLogo($id)
    {
        $allLogo = Logo::all();
        foreach ($allLogo as $item ) {
            $item->status = 0;
            $item->save();
        }
        Logo::findOrFail($id)->update([
            'status' => 1,
        ]);
        return back();
    }
    function deleteThisLogo($id)
    {
        $photo = Logo::findOrFail($id)->photo;
        // echo $photo;
        unlink(base_path("public/uploads/logo/" . $photo));
        Logo::findOrFail($id)->delete();
        return back()->with('greenStatus', 'Logo Deleted');

    }
}
