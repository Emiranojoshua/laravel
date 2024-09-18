<x-layouts>
    <x-slot:heading>
        <h1>Job</h1>
        <ul>
            <li>{{ $job->title }}: {{ $job->salary }}</li>
        </ul>
    </x-slot:heading>

</x-layouts>
