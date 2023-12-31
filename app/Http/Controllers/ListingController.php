<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //Show all Listings
    public function listings()
    {
        $listings = Listing::latest()->filter(request(['tag', 'search']))->get();
        return view("listings", compact("listings"));
    }

    //Show create form for new listing
    public function create()
    {
        return view("users.create");
    }

    //Store new listing
    public function store(Request $request)
    {

        $formData = $request->validate([
            "name" => "required|max:50",
            "title" => "required|max:50",
            "city" => "required",
            "tags" => "required",
            "description" => "required",
            "website" => "required",
            "email" => "required|email",
            "salary" => "required",
            'img' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $list = new Listing();

        $list->name = $formData["name"];
        $list->title = $formData["title"];
        $list->city = $formData["city"];
        $list->description = $formData["description"];
        $list->email = $formData["email"];
        $list->tags = $formData["tags"];
        $list->salary = $formData["salary"];
        $list->website = $formData["website"];
        $list->img = $formData["img"];

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $ext = $file->getClientOriginalExtension();
            $file_name = time() . '.' . $ext;
            $file->move('uploads/', $file_name);
            $list->img = $file_name;
        }

        $list['user_id'] = auth()->id();

        $list->save();

        return redirect()->route("dashboard")->with("message", "Listing created successfully");
    }

    // Edit the listing
    public function edit(Listing $listing){

        $listing = Listing::find($listing->id);
        return view('users.edit', compact('listing'));
    }

    // Update the listing
    public function update(Request $request, Listing $listing){

        if($listing->user_id != auth()->id()){
            abort(403,'Unauthorized Action');
        }

        $formData = $request->validate([
            "name" => "required|max:50",
            "title" => "required|max:50",
            "city" => "required",
            "tags" => "required",
            "description" => "required",
            "website" => "required",
            "email" => "required|email",
            "salary" => "required",
            "img" => "image|mimes:jpeg,png,jpg,gif|max:2048",
        ]);

        $listing->name = $formData["name"];
        $listing->title = $formData["title"];
        $listing->city = $formData["city"];
        $listing->description = $formData["description"];
        $listing->email = $formData["email"];
        $listing->tags = $formData["tags"];
        $listing->salary = $formData["salary"];
        $listing->website = $formData["website"];

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $ext = $file->getClientOriginalExtension();
            $file_name = time() . '.' . $ext;
            $file->move('uploads/', $file_name);
            $listing->img = $file_name;
        }

        $listing->save();

        return redirect()->route("dashboard")->with("message", "Listing updated successfully");
    }

    // Show the listing
    public function show(Listing $listing){
        $listing = Listing::find($listing->id);
        return view('show', compact('listing'));
    }

    // Delete the listing
    public function destroy(Listing $listing){

        if($listing->user_id != auth()->id()){
            abort(403,'Unauthorized Action');
        }
        Listing::destroy($listing->id);
        return redirect()->route("dashboard")->with("message", "Listing deleted successfully");
    }
}
