<x-layout>
    <form action="{{route('listings')}}" method="GET">
        @csrf
        @method('GET')
        <input type="search" name="search" id="search" />
        <button type="submit">Search</button>
    </form>
    <table class="table">
        <thead>
            <th>No.</th>
            <th>Job Title.</th>
            <th>Company</th>
            <th>Eamil</th>
            <th>Tags</th>
            <th>City</th>
            <th>Website.</th>
            <th>Salary</th>
            <th>Job Description</th>
            <th>Comapny Logo</th>
        </thead>
        <tbody>
            @foreach ($listings as $listing)
            <tr>
                <td>{{$loop->index +1}}</td>
                <td>{{$listing->title}}</td>
                <td>{{$listing->name}}</td>
                <td>{{$listing->email}}</td>
                <td>{{$listing->tags}}</td>
                <td>{{$listing->city}}</td>
                <td>{{$listing->website}}</td>
                <td>{{$listing->salary}}</td>
                <td>{{Str::limit($listing->description, 20, '  ...')}}</td>
                <td>
                    <img src="{{asset('uploads/' . $listing->img)}}" width="30">
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
