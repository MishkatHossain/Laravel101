<x-layout>

    <x-slot:title>
        Jobs
    </x-slot:title>
    
    <x-slot:heading>
        Jobs Listings
    </x-slot:heading>

    <h1>{{ $job['title'] }}</h1>
    <p>Salary: {{ $job['salary'] }}</p>


</x-layout>