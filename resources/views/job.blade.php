<x-layout>

    <x-slot:heading>
        {{ $job['title'] }}
    </x-slot:heading>

    
    <p>Most common salary for {{ $job['title'] }} is {{ $job['salary'] }}</p>

</x-layout>