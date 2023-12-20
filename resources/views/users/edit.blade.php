<x-layout>
    <div class="container m-3">
<<<<<<< HEAD
        <h2 class="mt-3 mb-4">Update the {{$listing->title}}</h2>
=======
        <h2 class="mt-3 mb-4">Update the {{ $listing->title }}</h2>
>>>>>>> 4cef8579af27648008ebe5dfa329fd8cd09d9c91
        <form action="{{ route('listing.update', $listing->id) }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <div class="form-row mt-3">
                <div class="form-group col-md-4">
                    <label for="name">Company Name</label>
<<<<<<< HEAD
                    <input class="form-control" type="text" name="name" id="name" value="{{$listing->name}}">
=======
                    <input class="form-control" type="text" name="name" id="name" value="{{ $listing->name }}">
>>>>>>> 4cef8579af27648008ebe5dfa329fd8cd09d9c91
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-4">
                    <label for="title">Job Title</label>
<<<<<<< HEAD
                    <input class="form-control" type="text" name="title" id="title" value="{{$listing->title}}">
=======
                    <input class="form-control" type="text" name="title" id="title"
                        value="{{ $listing->title }}">
>>>>>>> 4cef8579af27648008ebe5dfa329fd8cd09d9c91
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="city">City</label>
<<<<<<< HEAD
                    <input class="form-control" type="text" name="city" id="city" value="{{$listing->city}}">
=======
                    <input class="form-control" type="text" name="city" id="city"
                        value="{{ $listing->city }}">
>>>>>>> 4cef8579af27648008ebe5dfa329fd8cd09d9c91
                    @error('city')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-4">
                    <label for="tags">Tags</label>
<<<<<<< HEAD
                    <input class="form-control" type="text" name="tags" id="tags" value="{{$listing->tags}}">
=======
                    <input class="form-control" type="text" name="tags" id="tags"
                        value="{{ $listing->tags }}">
>>>>>>> 4cef8579af27648008ebe5dfa329fd8cd09d9c91
                    @error('tags')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="salary">Basic Salary</label>
<<<<<<< HEAD
                    <input class="form-control" type="text" name="salary" id="salary" value="{{$listing->salary}}">
=======
                    <input class="form-control" type="text" name="salary" id="salary"
                        value="{{ $listing->salary }}">
>>>>>>> 4cef8579af27648008ebe5dfa329fd8cd09d9c91
                    @error('salary')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-4">
                    <label for="website">Website</label>
<<<<<<< HEAD
                    <input class="form-control" type="text" name="website" id="website" value="{{$listing->website}}">
=======
                    <input class="form-control" type="text" name="website" id="website"
                        value="{{ $listing->website }}">
>>>>>>> 4cef8579af27648008ebe5dfa329fd8cd09d9c91
                    @error('website')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-row align-items-center">
                <div class="form-group col-md-4">
                    <label for="email">Email</label>
<<<<<<< HEAD
                    <input class="form-control" type="email" name="email" id="email" value="{{$listing->email}}">
=======
                    <input class="form-control" type="email" name="email" id="email"
                        value="{{ $listing->email }}">
>>>>>>> 4cef8579af27648008ebe5dfa329fd8cd09d9c91
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="custom-file col-md-4 mx-1 mt-3">
<<<<<<< HEAD
                    <input class="custom-file-input" type="file" name="img" id="img" value="{{$listing->img}}">
=======
                    <input class="custom-file-input" type="file" name="img" id="img"
                        value="{{ $listing->img }}">
>>>>>>> 4cef8579af27648008ebe5dfa329fd8cd09d9c91
                    <label class="custom-file-label" for="img">Upload logo</label>
                    @error('img')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="description">Job Description</label>
<<<<<<< HEAD
                    <textarea class="form-control w-100" name="description" id="description" rows="3">{{$listing->description}}"</textarea>
=======
                    <textarea class="form-control w-100" name="description" id="description" rows="3">{{ $listing->description }}"</textarea>
>>>>>>> 4cef8579af27648008ebe5dfa329fd8cd09d9c91
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Update</button>
        </form>
<<<<<<< HEAD
=======

>>>>>>> 4cef8579af27648008ebe5dfa329fd8cd09d9c91
    </div>
</x-layout>
