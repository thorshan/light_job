<x-layout>
    <div class="container m-3">
        <h2 class="mt-3 mb-4">Create new job</h2>
        <form action="{{ route('listing.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('POST')
            <div class="form-row mt-3">
                <div class="form-group col-md-4">
                    <label for="name">Company Name</label>
                    <input class="form-control" type="text" name="name" id="name">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-4">
                    <label for="title">Job Title</label>
                    <input class="form-control" type="text" name="title" id="title">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="city">City</label>
                    <input class="form-control" type="text" name="city" id="city">
                    @error('city')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-4">
                    <label for="tags">Tags</label>
                    <input class="form-control" type="text" name="tags" id="tags">
                    @error('tags')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="salary">Basic Salary</label>
                    <input class="form-control" type="text" name="salary" id="salary">
                    @error('salary')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-4">
                    <label for="website">Website</label>
                    <input class="form-control" type="text" name="website" id="website">
                    @error('website')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-row align-items-center">
                <div class="form-group col-md-4">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" id="email">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="custom-file col-md-4 mx-1 mt-3">
                    <input class="custom-file-input" type="file" name="img" id="img">
                    <label class="custom-file-label" for="img">Upload logo</label>
                    @error('img')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="description">Job Description</label>
                    <textarea class="form-control w-100" name="description" id="description" rows="3"></textarea>
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Create</button>
        </form>
    </div>
</x-layout>
