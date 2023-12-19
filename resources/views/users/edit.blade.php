<x-layout>
    <div class="container m-3">
        <h2 class="mt-3 mb-4">Update the {{ $listing->title }}</h2>
        <form action="{{ route('listing.update', $listing->id) }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <div class="form-row mt-3">
                <div class="form-group col-md-4">
                    <label for="name">Company Name</label>
                    <input class="form-control" type="text" name="name" id="name" value="{{ $listing->name }}">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-4">
                    <label for="title">Job Title</label>
                    <input class="form-control" type="text" name="title" id="title"
                        value="{{ $listing->title }}">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="city">City</label>
                    <input class="form-control" type="text" name="city" id="city"
                        value="{{ $listing->city }}">
                    @error('city')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-4">
                    <label for="tags">Tags</label>
                    <input class="form-control" type="text" name="tags" id="tags"
                        value="{{ $listing->tags }}">
                    @error('tags')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="salary">Basic Salary</label>
                    <input class="form-control" type="text" name="salary" id="salary"
                        value="{{ $listing->salary }}">
                    @error('salary')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-4">
                    <label for="website">Website</label>
                    <input class="form-control" type="text" name="website" id="website"
                        value="{{ $listing->website }}">
                    @error('website')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-row align-items-center">
                <div class="form-group col-md-4">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" id="email"
                        value="{{ $listing->email }}">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="custom-file col-md-4 mx-1 mt-3">
                    <input class="custom-file-input" type="file" name="img" id="img"
                        value="{{ $listing->img }}">
                    <label class="custom-file-label" for="img">Upload logo</label>
                    @error('img')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="description">Job Description</label>
                    <textarea class="form-control w-100" name="description" id="description" rows="3">{{ $listing->description }}"</textarea>
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Update</button>
        </form>

    </div>
</x-layout>
