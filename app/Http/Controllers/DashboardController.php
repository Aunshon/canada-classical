<?php

namespace App\Http\Controllers;

use App\AboutSection;
use App\BannerVideo;
use App\Logo;
use App\Social;
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
    function socialLinks()
    {
        $allSocial = Social:: all();
        return view('dashboard.socialLinks', compact('allSocial'));
    }
    function saveSocial(Request $request)
    {
        $request->validate([
            'icon' => 'required',
            'link' => 'required',
        ]);

        Social::insert([
            'icon' => $request->icon,
            'link' => $request->link,
        ]);
        return back()->with('greenStatus',"Social Added");
    }
    function deleteThisIcon($id)
    {
        Social::findOrFail($id)->delete();
        return back()->with('greenStatus', 'Social Deleted');
    }

    // banner video
    function bannerVideo()
    {
        $allBanner = BannerVideo::all();
        return view('dashboard.bannerVideo', compact('allBanner'));
    }
    function savebannerVideo(Request $request)
    {
        $request->validate([
            'link' => 'required',
        ]);
        foreach (BannerVideo::all() as $value) {
            $value->delete();
        }
        BannerVideo::insert([
            'link' => $request->link,
        ]);
        return back()->with('greenStatus', "Video Added");
    }
    // About
    function aboutSection()
    {
        $allAbout = AboutSection::all();
        return view('dashboard.aboutSection', compact('allAbout'));
    }
    function saveaboutSection(Request $request)
    {
        $request->validate([
            'titie' => 'required',
            'photo' => 'required',
            'dis' => 'required',
        ]);
        foreach (AboutSection::all() as $value) {
            $value->delete();
        }
        $lastId = AboutSection::insertGetId([
            'titie' => $request->titie,
            'photo' => "default.jpg",
            'dis' => $request->dis,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->photo;
            $photoName = $lastId . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->resize(540, 520)->save(base_path("public/uploads/about/" . $photoName), 100);
            AboutSection::findOrFail($lastId)->update([
                'photo' => $photoName,
            ]);
        }

        return back()->with('greenStatus', 'Product Added Successfully 👍');
    }

    //.. End Here
}
