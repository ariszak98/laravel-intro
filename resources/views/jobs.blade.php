<x-layout>

    <x-slot:heading>
        Job Listings
    </x-slot:heading>


    <br>
    <div class="space-y-2">
        @foreach ($jobs as $job)
            <div>
                <a class="hover:border-gray-600 block px-4 py-6 border border-gray-200 rounded-lg" href="/jobs/{{ $job['id'] }}">
                    <div>
                        <small class="font-bold text-blue-500">{{ $job->employer->name }}</small>
                    </div>
                    <b>{{ $job['title'] }}</b> : {{ $job['salary'] }}
                </a>
            </div>  
        @endforeach
    </div>

</x-layout>