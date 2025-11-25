<x-layout>

    <x-slot:title>
        Job
    </x-slot:title>

    <x-slot:heading>
        {{ $job['title'] }}
    </x-slot:heading>

    
    <p><b>{{ $job['title'] }}</b> : {{ $job['salary'] }}</p>

    <p class="mt-6">
        <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
    </p>

</x-layout>