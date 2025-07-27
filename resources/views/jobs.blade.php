<x-layout>
    
    <x-slot:title>
        Jobs
    </x-slot:title>

    <x-slot:heading>
        Jobs Listings
    </x-slot:heading>

    <ul>
        @foreach($jobs as $job)
            <a href='/jobs/'>
                <strong>{{$job['title']}}</strong> gets paid {{$job['salary']}} per year
            </a>
        @endforeach
    </ul>

</x-layout>