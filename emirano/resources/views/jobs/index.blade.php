<x-layouts>
    <x-slot:heading>
        <h1>Jobs page</h1> <br><x-button href="jobs/create">Create Job</x-button>
        <ul>
            @foreach ($jobs as $job)
            <br><br>
            {{ $job->employer->name }}<br>
                <li><a href="/jobs/{{ $job['id'] }}">
                        {{ $job['title'] }} pays {{ $job['salary'] }}
                    </a>
                </li>
            @endforeach
        </ul>

        {{ $jobs->links() }}
    </x-slot:heading>

</x-layouts>
