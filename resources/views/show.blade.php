<x-layout>

    <div class="container">
        <div class="card my-3">
            <img class="card-img-top p-3 bg-light" src="{{ asset('uploads/' . $listing->img) }}">
            <div class="card-body">
                <h5 class="card-title">{{ $listing->title }}</h5>
                <h6 class="card-title text-primary">{{ $listing->name }}</h6>
                <small class="card-text text-muted">{{ $listing->tags }}</small>
                <br>
                <strong class="card-text">Basic Salary : <span
                        class="text-primary">${{ $listing->salary }}</span></strong>
                <hr>
                <strong class="card-text">Job Detail :</strong>
                <p class="card-text mt-3">{{ $listing->description }}</p>
                <p class="card-text"><small class="text-muted">Last updated {{ $listing->updated_at }}</small></p>
                <hr>
                @php
                    $url = $listing->website;
                    // Check if the URL doesn't start with http:// or https://
                    if (!preg_match('~^(?:f|ht)tps?://~i', $url)) {
                    $url = 'http://' . $url; // Prepend http:// if missing
                    }
                @endphp
                <span class="card-text">Company website : <a class="text-primary" target="_blank"
                        href="{{ $url }}">{{ $listing->website }}</a></span>
                <hr>
                <span class="card-text">Send your cv to : <a class="text-primary"
                        href="mailto:">{{ $listing->email }}</a></span>
            </div>
        </div>
    </div>

</x-layout>
