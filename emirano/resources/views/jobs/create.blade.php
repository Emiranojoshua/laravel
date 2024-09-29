<x-layouts>
    <x-slot:heading>
        <h1>Create Jobs page</h1>

        <form action="/jobs" method="POST">
            @csrf

            <div>Title</div>
            <input type="text" name="title" id=""> <br> </br>
            @error('title')
                {{ $message}} <br><br>
            @enderror
            <div>Salary</div>
            <input type="text" name="salary" id=""> <br> </br>
            @error('salary')
                {{ $message }}<br>
            @enderror
            <br><input type="submit" value="Create">
        </form>
       
    </x-slot:heading>

</x-layouts>
