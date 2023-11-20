<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Institutes;
use App\Models\MasterDistricts;
use App\Models\MasterTeis;
use App\Models\Notification;
use App\Models\Sliders;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Spatie\ImageOptimizer\OptimizerChainFactory;
use Illuminate\Support\Facades\Log;     //logging

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    // manage dashbaord
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    // --------------------------------------------------------------------------------
    // ------------------------ Manage Slider Image Section start ---------------------
    public function view_Slider()
    {
        $slider = Sliders::orderBy('id', 'DESC')->paginate(12);
        return view('admin.slider', compact('slider'));
    }
    // Crop Image Upload
    public function uploadCropImage(Request $request)
    {
        if ($request->ajax()) {
            $folderPath = 'assets/Documents/Slider_images/';
            $image_parts = explode(";base64,", $request->image);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_base64 = base64_decode($image_parts[1]);

            $imageName = uniqid() . '.webp'; // Change the extension to .webp
            $imageFullPath = $folderPath . $imageName;

            // Save the original image
            file_put_contents($imageFullPath, $image_base64);

            // Optimize and resize the image before further processing
            $optimizerChain = OptimizerChainFactory::create();
            $optimizerChain->optimize($imageFullPath);

            // Load the original image for further processing
            $originalImage = Image::make($imageFullPath);

            // Crop and save as WebP
            $originalImage->encode('webp', 90)->save($imageFullPath);

            $saveFile = new Sliders();
            $saveFile->image_path = $imageName;
            $saveFile->save();

            return response()->json(['success' => 'Crop Image Uploaded Successfully']);
        }
    }
    // Crop Image Upload End


    //Delete Slider
    public function slider_delete($id)
    {
        // Find the slider image by ID
        $sliderImage = Sliders::find($id);

        if (!$sliderImage) {
            return redirect()->back()->with('error', 'Slider image not found');
        }

        // Delete the image file from the server
        // $imagePath = public_path('Documents/Slider_images/' . $sliderImage->image_path);
        $imagePath = 'assets/Documents/Slider_images/' . $sliderImage->image_path;
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        // Delete the database record
        $sliderImage->delete();

        return redirect()->back()->with('success', 'Slider image deleted successfully');
    }
    // ------------------------ Manage Slider Image Section end -----------------------
    // --------------------------------------------------------------------------------


    // --------------------------------------------------------------
    // ------------------------ institutes start---------------------
    public function institutes()
    {
        $members = Institutes::join('master_districts', 'institutes.district', '=', 'master_districts.id')
            ->join('master_teis', 'institutes.teis', '=', 'master_teis.id')
            ->select('institutes.*', 'master_districts.district_name', 'master_teis.teis_name')
            ->orderBy('institutes.id', 'desc')
            ->get();

        $teisNames = MasterTeis::pluck('teis_name', 'id');
        $districts = MasterDistricts::pluck('district_name', 'id');

        return view('admin.manage_institutes', compact('members', 'teisNames', 'districts'));
    }
    //institutes Members Add 
    public function postInstitutesMember(Request $request)
    {
        $data = new Institutes();
        $data->teis = $request->teis;
        $data->district = $request->district;
        $data->institute_name = $request->institute_name;
        // dd($data);
        $data->save();
        return redirect('admin/institutes')->with('success', 'Member Successfully Added');
    }
    // institute edit
    public function institutes_edit(Request $request)
    {
        $institutes = Institutes::join('master_districts', 'institutes.district', '=', 'master_districts.id')
            ->join('master_teis', 'institutes.teis', '=', 'master_teis.id')
            ->select('institutes.*', 'master_districts.district_name', 'master_teis.teis_name')
            ->find($request->id);

        return response()->json([
            'institutes' => $institutes,
        ]);
    }
    // institute update
    public function institutes_update(Request $request)
    {
        $data = [
            'institute_name' => $request->institute_name,
            'district' => $request->district,
            'teis' => $request->teis
        ];
        Institutes::where('id', $request->id)->update($data);
        return response()->json(['msg' => '1']);
    }
    //Delete Institute
    public function institute_delete($id)
    {
        Institutes::where('id', $id)->delete();
        // Log::info('Institutes Deleted');
        return redirect()->back()->with('error', 'Institutes Deleted');
    }
    // -------------------------- institutes end-------------------------
    // ------------------------------------------------------------------

    // ------------------------------------------------------------------
    //----------------------- ALternate About Start ---------------------
    public function manage_about()
    {
        $data = About::get();
        return view('admin.manage_about', compact('data'));
    }
    // manage about post
    public function manage_about_post(Request $request)
    {
        $data = new About();
        $data->about_name = $request->about_name;

        $data->about_description = $request->about_description;

        $data->save();
        return redirect('/admin/manage_about')->with('success', 'About added');
    }
    // manage about edit
    public function manage_about_edit(Request $request)
    {
        $data = About::find($request->id);
        return $data;
    }
    // manage about update
    public function manage_about_update(Request $request)
    {
        $data = About::where('id', $request->id)->update(['about_name' => $request->about_name, 'about_description' => $request->about_description]);

        if ($data) {
            return response()->json(['msg' => '1']);
        }
    }
    //Delete About
    public function manage_about_delete($id)
    {
        About::where('id', $id)->delete();
        return redirect()->back()->with('error', 'About Deleted');
    }
    //---------------------- Alternate About End --------------------------
    // ------------------------------------------------------------------


    // --------------------------------------------------------------------
    // ------------------------- manage districts start--------------------
    public function master_districts()
    {
        $members = MasterDistricts::orderBy('id', 'desc')->get();

        return view('admin.manage_districts', compact('members'));
    }
    //districts Add 
    public function postDistrictsMember(Request $request)
    {
        $data = new MasterDistricts();
        $data->district_name = $request->district_name;
        $data->save();

        return redirect('admin/master_districts')->with('success', 'District Successfully Added');
    }
    // district edit
    public function master_districts_edit(Request $request)
    {
        $data = MasterDistricts::find($request->id);
        return $data;
    }
    // district update
    public function master_districts_update(Request $request)
    {
        try {
            $data = MasterDistricts::find($request->id);
            $data->district_name = $request->districtNameEdit;
            $data->save();

            return redirect('admin/master_districts')->with('success', 'District Successfully Updated');
        } catch (\Exception $e) {
            return redirect('admin/master_districts')->with('error', 'An error occurred while updating the district.');
        }
    }
    //Delete district
    public function districts_delete($id)
    {
        try {
            MasterDistricts::where('id', $id)->delete();
            return response()->json(['message' => 'District Deleted'], 200);
        } catch (QueryException $e) {
            // Handle foreign key constraint violation
            if ($e->errorInfo[1] == 1451) {
                // Foreign key constraint violation (SQLSTATE[23000]: Integrity constraint violation)
                return response()->json(['error' => 'This district is associated with other records and cannot be deleted.'], 500);
            }

            // Handle other exceptions
            return response()->json(['error' => 'An error occurred while deleting the district.'], 500);
        }
    }
    // --------------------------------------------------------------------
    // ------------------------- manage districts end----------------------


    // --------------------------------------------------------------------------
    // ------------------------- manage notification start ----------------------
    public function manage_notifications()
    {
        $notifications = Notification::orderByDesc('updated_at')->get();
        return view('admin.manage_notifications', compact('notifications'));
    }
    // edit Notification
    public function getNotifications(Request $request)
    {
        $notification = Notification::find($request->id);
        return $notification;
    }
    // Add Notification
    public function postNotificationMember(Request $request)
    {
        $notification = new Notification();
        $notification->notification_type = $request->notification_type;
        $notification->notification_description = $request->notification_description;
        $notification->save();
        return redirect('admin/manage_notifications')->with('success', 'Notification Successfully Added');
    }
    // update Notification
    public function updateNotification(Request $request)
    {
        $notification = Notification::find($request->id);
        $notification->notification_type = $request->NotificationTypeEdit;
        $notification->notification_description = $request->NotificationDescriptionEdit;
        $notification->save();

        return response()->json(['message' => 'Notification Successfully Updated']);
    }
    // delete Notification
    public function notificationDelete($id)
    {
        Notification::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Notification Deleted');
    }
    // ------------------------- manage notification end ----------------------
    // ------------------------------------------------------------------------

    // manage_contact
    public function manage_contact()
    {
        $contacts = Contact::orderByDesc('id')->get();
        return view('admin.manage_contact', compact('contacts'));
    }
    public function postManageContact(Request $request)
    {

        $contacts = new Contact();
        $contacts->mastermind = $request->mastermind;
        $contacts->name = $request->name;
        $contacts->designation = $request->designation;
        $contacts->address = $request->address;
        $contacts->district = $request->district;
        $contacts->telephone_number = $request->telephone_number;
        $contacts->email = $request->email;

        $contacts->save();
        return redirect('admin/manage_contact')->with('success', 'Contacts Successfully Added');
    }

    public function manage_contact_edit(Request $request)
    {
        $contacts = Contact::find($request->id);
        return $contacts;
    }

    public function manage_contact_update(Request $request)
    {
        try {
            $contacts = Contact::find($request->id);
            $contacts->mastermind = $request->MastermindEdit;
            $contacts->name = $request->NameEdit;
            $contacts->designation = $request->DesignationEdit;
            $contacts->address = $request->AddressEdit;
            $contacts->district = $request->DistrictEdit;
            $contacts->telephone_number = $request->TelephoneEdit;
            $contacts->email = $request->EmailEdit;
            $contacts->save();

            return redirect('admin/manage_contact')->with('success', 'Contact Successfully Updated');
        } catch (\Exception $e) {
            return redirect('admin/manage_contact')->with('error', 'An error occurred while updating the contact.');
        }
    }

    public function contact_delete($id)
    {
        Contact::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Contact Deleted');
    }






    // manage diet after going in to TEIS
    public function manage_diet()
    {
        return view('admin.diet');
    }

    // manage_teis
    public function manage_teis()
    {
        return view('admin.manage_teis');
    }
}
