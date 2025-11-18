<x-layout>

    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <h1>Available Jobs</h1>

    <br>
    <ul>
    @foreach ($jobs as $job)
         <li><a class="hover:underline hover:text-blue-500" href="/jobs/{{ $job['id'] }}">
            <b>{{ $job['title'] }}</b> : {{ $job['salary'] }}
         </a></li>   
    @endforeach
    </ul>

</x-layout>