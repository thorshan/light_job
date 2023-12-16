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
            "title" => "required|max:25",
            "city" => "required",
            "tags" => "required",
            "description" => "required",
            "website" => "required",
            "email" => "required|email",
            "salary" => "required",
            "img" => "required",
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

        $list->save();

        return redirect()->route("listings")->with("message", "Listing created successfully");
    }
}
