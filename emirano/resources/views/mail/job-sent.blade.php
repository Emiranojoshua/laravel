<h2>
    {{ $job->title }}
</h2>

<p>
    Congrats job posted.
</p>

<button><a href="{{ url('/jobs/' . $job->id) }}">View Job</a></button>
