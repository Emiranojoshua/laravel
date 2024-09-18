<x-layouts>
    <x-slot:heading>
        <h1>Jobs page</h1>
        <ul>
            @foreach ($jobs as $job)
                <li><a href="/jobs/{{ $job['id'] }}">
                        {{ $job['title'] }} pays {{ $job['salary'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </x-slot:heading>

</x-layouts>
