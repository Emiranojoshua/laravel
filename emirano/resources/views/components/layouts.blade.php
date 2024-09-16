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

    {{ $heading }}

</html>
