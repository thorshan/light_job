<x-layout>
    <form action="{{ route('listing.store') }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('POST')
        <div class="mb-2">
            <label for="name">Company Name</label>
            <input type="text" name="name" id="name">
        </div>
        <div class="mb-2">
            <label for="title">Job Title</label>
            <input type="text" name="title" id="title">
        </div>
        <div class="mb-2">
            <label for="city">City</label>
            <input type="text" name="city" id="city">
        </div>
        <div class="mb-2">
            <label for="tags">Tags</label>
            <input type="text" name="tags" id="tags">
        </div>
        <div class="mb-2">
            <label for="salary">Basic Salary</label>
            <input type="text" name="salary" id="salary">
        </div>
        <div class="mb-2">
            <label for="website">Website</label>
            <input type="text" name="website" id="website">
        </div>
        <div class="mb-2">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>
        <div class="mb-2">
            <label for="img">Company Logo</label>
            <input type="file" name="img" id="img">
        </div>
        <div class="mb-2">
            <label for="description">Job Description</label>
            <textarea name="description" id="description" rows="4"></textarea>
        </div>
        <button type="submit">Create</button>
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
