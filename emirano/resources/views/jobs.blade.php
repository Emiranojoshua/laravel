<x-layouts>
    <x-slot:heading>
        <h1>Jobs page</h1>
       
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}"><li>{{ $job['title'] }} pays {{ $job['salary'] }}</li></a>
        @endforeach

    </x-slot:heading>


</x-layouts>
