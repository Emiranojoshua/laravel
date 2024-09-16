<x-layouts>
    <x-slot:heading>
        <h1>Jobs page</h1>
       
        @foreach ($jobs as $job)
            <li>{{ $job['title'] }} pays {{ $job['salary'] }}</li>
        @endforeach

    </x-slot:heading>


</x-layouts>
