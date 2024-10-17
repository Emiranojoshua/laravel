<x-layouts>
    <x-slot:heading>
        <h2>{{ $job->title }}</h2>
        <p>This job pays <b>{{ $job->salary }}</b></p>
        @can('edit', $job)
            <x-button href="/jobs/{{ $job->id }}/edit">edit Job</x-button>
        @endcan
    </x-slot:heading>

</x-layouts>
