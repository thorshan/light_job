<x-layout>

    <div class="container">
        <div class="card my-3">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="{{asset('uploads/' . $listing->img)}}" width="300px">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{$listing->title}}</h5>
                  <h6 class="card-title">{{$listing->name}}</h6>
                  <small class="card-text mb-3 text-muted">{{$listing->tags}}</small>
                  <hr>
                  <p class="card-text">{{$listing->description}}</p>
                  <p class="card-text"><small class="text-muted">Last updated {{$listing->updated_at}}</small></p>
                </div>
              </div>
            </div>
          </div>
    </div>

</x-layout>
