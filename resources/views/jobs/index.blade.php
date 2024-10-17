<x-layouts>
    <x-slot:heading>

        <h1>Jobs page</h1> 
        @auth
        <br>
            <x-button href="jobs/create">Create Job</x-button><br> <br>
        @endauth
        <ul>
            @foreach ($jobs as $job)
               
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
