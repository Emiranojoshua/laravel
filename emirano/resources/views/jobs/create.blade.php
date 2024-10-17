<x-layouts>
    <x-slot:heading>
        <h1>Create Jobs page</h1>

        <form action="/jobs" method="POST">
            @csrf

            <x-form-label for="title">Title</x-form-label>
            <x-form-input name="title" type="text"></x-form-input>
            <x-form-error name="title"></x-form-error>


            <x-form-label for="salary">Salary</x-form-label>
            <x-form-input name="salary" type="text"></x-form-input>
            <x-form-error name="salary"></x-form-error>


            <br><input type="submit" value="Create">
        </form>

    </x-slot:heading>

</x-layouts>
