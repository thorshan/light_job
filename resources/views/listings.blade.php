<x-layout>
    <div class="container-fluid">
        <form action="{{ route('listings') }}" method="GET">
            @csrf
            @method('GET')
            <div class="row my-3 justify-content-center align-item-around">
                <div class="form-group">
                    <input type="search" name="search" id="search" class="form-control shadow-none w-100" />
                </div>
                <div class="">
                    <button class="btn btn-primary mx-2" type="submit">Search</button>
                </div>
            </div>
        </form>

        <hr>

        <div class="container mt-3">
            <div class="row">
                @foreach ($listings as $listing)
                    <div class="col-md-6">
                        <div class="card w-100">
                            <div class="card-body">
                                <h5 class="card-title">{{ $listing->title }}</h5>
                                <small class="card-text"></small>
                                <p class="card-text">{{ Str::limit($listing->description, 20, '  ...') }}</p>
                                <a href="{{ route('listing.show', $listing->id) }}" class="btn btn-primary btn-sm">View Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
