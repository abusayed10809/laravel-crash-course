<h1>
    {{ $heading }}
</h1>

@php
    $test = 2;
@endphp


{{ $test }}

@if (count($listings) == 0)
    <p>No listings found</p>
@else
    @foreach ($listings as $listing)
        <h2>
            <a href="/listing/{{ $listing['id'] }}">
                {{ $listing['title'] }}
            </a>
        </h2>
        <p>
            {{ $listing['description'] }}
        </p>
    @endforeach
@endif
