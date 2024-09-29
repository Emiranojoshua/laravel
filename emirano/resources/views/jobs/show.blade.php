<x-layouts>
    <x-slot:heading>
        <h2>{{ $job->title }}</h2>
        <p>This job pays <b>{{ $job->salary }}</b></p><x-button href="/jobs/{{ $job->id }}/edit">edit Job</x-button>
    </x-slot:heading>

</x-layouts>
