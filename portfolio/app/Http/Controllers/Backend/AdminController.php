<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewDashboard () 
    {
    	$basicInfo = \App\Models\BasicInfo::first();
    	return view('backend.dashboard', compact('basicInfo'));
    }

    public function viewBasicInfoForm () 
    {
    	$basicInfo = \App\Models\BasicInfo::first();
    	return view('backend.basic_info_form', compact('basicInfo'));
    }

    public function submitBasicInfoForm ()
    {
    	$basicInfo = \App\Models\BasicInfo::first();
    	if ( !$basicInfo ) {
    		$basicInfo = new \App\Models\BasicInfo();
    	}
    	$attributes = [
    		'name' => request()->name,
    		'designation' => request()->designation,
    		'short_description' => request()->short_description,
    		'facebook' => request()->facebook,
    		'twitter' => request()->twitter,
    		'linkedin' => request()->linkedin,
    		'github' => request()->github,
    		'who_am_i' => request()->who_am_i,
    		'address' => request()->address,
    		'phone' => request()->phone,
    		'email' => request()->email,
     	];
     	$basicInfo->fill($attributes);
     	$basicInfo->save();

    	return view('backend.basic_info_form', compact('basicInfo'));
    }


    public function viewAboutMeForm () 
    {
        $infos = \App\Models\AboutMeInfo::first();
        return view('backend.about_me_form', compact('infos'));
    }

    public function saveAboutMeForm(Request $request)
    {
        $img        = $request->picture;
        $imgName    = time().'.'.$img->extension();


        try {
            $img->storeAs('images', $imgName);
            $aboutMe = \App\Models\AboutMeInfo::first() ?? new \App\Models\AboutMeInfo();

            $aboutMe->picture_link = $imgName;
            $aboutMe->status       = 1;
            $aboutMe->save();

            return back()->with('success', 'Info created successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Something went wrong.'.$e->getMessage());
        }
    }

    public function deleteAboutMe ($id)
    {
        try {
            \App\Models\AboutMeInfo::first()->delete();
            return back()->with('success', 'Successfully deleted !');
        } catch (\Exception $e) {
            return back()->with('error', 'Something went wrong !');
        }
    }


    public function viewWorkedForForm ()
    {
        $workedCompanies = \App\Models\WorkedCompany::where('status', 1)->get();
        return view('backend.worked_companies', compact('workedCompanies'));
    }

    public function saveWorkedForForm (Request $request) 
    {
        $company_name       = $request->company_name;
        $company_website    = $request->company_website;
        $company_logo       = $request->company_logo;

        $company_logo_name  = time().'.'.$company_logo->extension();  



        try {
            $company_logo->storeAs('images', $company_logo_name);
            $createdCompany = \App\Models\WorkedCompany::create([
                'company_name'      => $company_name,
                'company_website'   => $company_website,
                'company_logo'      => $company_logo_name,
            ]);
            if ( $createdCompany ) {
                return back()->with('success', 'Worked Company created successfully.');
            } else {
                return back()->with('warning', 'Something went wrong.');
            }
        } catch ( \Exception $e ) {
            return back()->with('error', 'Error:: '.$e->getMessage());
        }
        
    }

    public function deleteWorkedForCompany ($id) 
    {
        try {
            $deletedCompany = \App\Models\WorkedCompany::find($id)
                ->delete();
            if ( $deletedCompany ) {
                return back()->with('success', 'Company Info deleted successfully.');
            }
        } catch (\Exception $e) {
            return back()->with('error', 'Error:: '.$e->getMassage() );
        }
    }

    public function getContacts()
    {
        $contacts = \App\Models\Contact::all();
        return view('backend.contacts', compact('contacts'));
    }
}
