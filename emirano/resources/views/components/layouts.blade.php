<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<style>     
    .navLink{
        background-color: green;
        color: white;
        padding: 5px;
    }
</style>
<body>
    <x-nav-link class="{{ request()->is('/') ? 'navLink' : ''}}" href="/" :active="false">home </x-nav-link>
    <x-nav-link class="{{ request()->is('about') ? 'navLink' : ''}}" href="/about">about</x-nav-link>
    <x-nav-link class="{{ request()->is('contact') ? 'navLink' : ''}}" href="contact" :active="true">contact</x-nav-link>
    {{$heading }}

    {{ $slot }}

</html>