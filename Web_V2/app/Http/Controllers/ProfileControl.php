<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Customer;
use App\Models\Vendor;
use Illuminate\Http\Request;

class ProfileControl extends Controller
{
    //
    public function updateProfilePicture(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = $request->email . '.' . $request->image->extension();
        $request->image->move(public_path('images/profile-pictures/' . $request->user), $imageName);

        switch ($request->user) {
            case 'customer':
                $model = new Customer;
                break;

            case 'vendor':
                $model = new Vendor;
                break;

            case 'admin':
                $model = new Admin;
                break;

            default:
                //
                break;
        }

        $model::where('email', $request->email)->update([
            'image' => 'images/profile-pictures/' . $request->user . '/' . $imageName,
        ]);

        return back()
            ->with('image-update-success', 'You have successfully updated your profile picture.');
        //->with('image', $imageName);
    }

    public function removeProfilePicture(Request $request)
    {
        switch ($request->user) {
            case 'customer':
                $model = new Customer;
                break;

            case 'vendor':
                $model = new Vendor;
                break;

            case 'admin':
                $model = new Admin;
                break;

            default:
                //
                break;
        }

        if ($model::where('email', $request->email)->first()->image != 'images/profile-pictures/default/default.png') {
            $model::where('email', $request->email)->update([
                'image' => 'images/profile-pictures/default/default.png',
            ]);

            return back()
                ->with('image-update-success', 'You have successfully removed your profile picture.');
        } else {
            return back()
                ->with('image-update-success', 'You have no profile picture to remove.');
        }
    }
}
