<x-layouts>
    <x-slot:heading>
        <h1>Edit Jobs page</h1>

        <form action="/jobs/{{ $job->id }}" method="POST">
            @csrf
            @method('PATCH')

            <div>Title</div>
            <input type="text" name="title" id="" value="{{ $job->title }}"> <br> </br>
            @error('title')
                {{ $message }} <br><br>
            @enderror
            <div>Salary</div>
            <input type="text" name="salary" id="" value="{{ $job->salary }}"> <br> </br>
            @error('salary')
                {{ $message }}<br>
            @enderror
            <br><input type="submit" value="Update">
            <button form="delete-form">Delete</button>
            <x-button href="/jobs/{{ $job->id }}">Cancel</x-button>
        </form>

        <br><br>
        <form action="/jobs/{{ $job->id }}" method="post" hidden id="delete-form">
            @csrf
            @method('delete')
        </form>

    </x-slot:heading>

</x-layouts>
