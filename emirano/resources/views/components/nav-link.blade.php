@props(['active' => true])

<a {{ $attributes }}  style="{{$active ?  "background-color: blue" : '' }}" >{{ $slot}}</a>