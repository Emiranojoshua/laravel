<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<style>
    .navLink {
        background-color: green;
        color: white;
        padding: 5px;
    }
</style>

<body>
    <x-nav-link href="/" :active="request()->is('/')">home</x-nav-link>
    <x-nav-link href="/jobs" :active="request()->is('jobs')">jobs</x-nav-link>
    <x-nav-link href="/contact" :active="request()->is('contact')">contact </x-nav-link>
    @auth

    <form action="/logout" method="post">
        @csrf
        <button type="submit">Logout</button>
    </form>
    @endauth

    @guest
        <x-nav-link href="/login" :active="request()->is('login')">login </x-nav-link>
        <x-nav-link href="/register" :active="request()->is('register')">register </x-nav-link>
    @endguest

    {{-- <x-nav-link href="/jobs/create@" :active="request()->is('create')">create </x-nav-link> --}}

    {{ $heading }}
</body>

</html>
