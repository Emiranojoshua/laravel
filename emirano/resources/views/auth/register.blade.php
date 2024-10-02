<x-layouts>
    <x-slot:heading>
        <h1>Register</h1>

        <form action="/register" method="POST">
            @csrf

            <x-form-label for="first_name">First Name</x-form-label>
            <x-form-input name="first_name" type="text"></x-form-input>
            <x-form-error name="first_name"></x-form-error>

            <x-form-label for="last_name">Last Name</x-form-label>
            <x-form-input name="last_name" type="text"></x-form-input>
            <x-form-error name="last_name"></x-form-error>

            <x-form-label for="email">Email</x-form-label>
            <x-form-input name="email" type="text"></x-form-input>
            <x-form-error name="email"></x-form-error>


            <x-form-label for="password">Password</x-form-label>
            <x-form-input name="password" type="password"></x-form-input>
            <x-form-error name="password"></x-form-error>

            <x-form-label for="password_confirmation">Confirm Password</x-form-label>
            <x-form-input name="password_confirmation" type="password"></x-form-input>
            <x-form-error name="password_confirmation"></x-form-error>


            <br><input type="submit" value="Create">
        </form>

    </x-slot:heading>

</x-layouts>
