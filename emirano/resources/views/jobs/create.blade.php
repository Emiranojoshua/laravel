<x-layouts>
    <x-slot:heading>
        <h1>Create Jobs page</h1>
        <h2>Create new job</h2>

        <form action="/jobs" method="POST">
            @csrf
            
            <div>Title</div>
            <input type="text" name="title" id=""> <br> </br>
            <div>Salary</div>
            <input type="text" name="salary" id=""> <br> </br>
            <input type="submit" value="Create">
        </form>
    </x-slot:heading>

</x-layouts>
