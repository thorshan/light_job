<x-layout>
    <form action="{{ route('listing.update', $listing->id) }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-2">
            <label for="name">Company Name</label>
            <input type="text" name="name" id="name" value="{{$listing->name}}">
        </div>
        <div class="mb-2">
            <label for="title">Job Title</label>
            <input type="text" name="title" id="title" value="{{$listing->title}}">
        </div>
        <div class="mb-2">
            <label for="city">City</label>
            <input type="text" name="city" id="city" value="{{$listing->city}}">
        </div>
        <div class="mb-2">
            <label for="tags">Tags</label>
            <input type="text" name="tags" id="tags" value="{{$listing->tags}}">
        </div>
        <div class="mb-2">
            <label for="salary">Basic Salary</label>
            <input type="text" name="salary" id="salary" value="{{$listing->salary}}">
        </div>
        <div class="mb-2">
            <label for="website">Website</label>
            <input type="text" name="website" id="website" value="{{$listing->website}}">
        </div>
        <div class="mb-2">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{$listing->email}}">
        </div>
        <div class="mb-2">
            <label for="img">Company Logo</label>
            <input type="file" name="img" id="img" value="{{$listing->img}}">
            <br>
            <img src="{{asset('uploads/' . $listing->img)}}" width="50px">
        </div>
        <div class="mb-2">
            <label for="description">Job Description</label>
            <textarea name="description" id="description" rows="4">{{$listing->description}}</textarea>
        </div>
        <button type="submit">Update</button>
        <br>
        <br>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
</x-layout>
