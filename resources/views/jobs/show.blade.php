<x-layout>

    <x-slot:title>
        Jobs
    </x-slot:title>
    
    <x-slot:heading>
        Jobs
    </x-slot:heading>

    <h2 class='font-bold text-lg'>{{ $job['title'] }}</h1>
    <p>
        This job pays {{ $job['salary'] }} per year
    </p>

    <p class='mt-6'>
        <x-button href="/jobs/create">Edit Jobs</x-button>
    </p>




</x-layout>