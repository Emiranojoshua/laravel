<x-layouts>
    <x-slot:heading>
        <h1>Login</h1>

        <form action="/login" method="POST">
            @csrf

            <x-form-label for="email">Email</x-form-label>
            <x-form-input name="email" type="text"></x-form-input>
            <x-form-error name="email"></x-form-error>


            <x-form-label for="password">Password</x-form-label>
            <x-form-input name="password" type="password"></x-form-input>
            <x-form-error name="password"></x-form-error>



            <br><input type="submit" value="Create">
        </form>

    </x-slot:heading>

</x-layouts>
