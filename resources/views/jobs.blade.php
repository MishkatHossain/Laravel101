<x-layout>

    <x-slot:title>
        Jobs
    </x-slot:title>
    
    <x-slot:heading>
        Jobs Listings
    </x-slot:heading>

    <ul>
        @foreach($jobs as $job)
        <li>
            <a href="/jobs/{{$job['id']}}" class='text-blue-500 hover:text-red-600 underline'>
                <strong>{{$job['title']}}: </strong> gets paid {{$job['salary']}} per year
            </a>
        </li>
        @endforeach
    </ul>

</x-layout>