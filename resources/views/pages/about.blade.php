@extends('layouts/application')

@section('title', 'Learn to Laravel')

@section('main')
    <h1>Hi</h1>

    @if (count($heroes) > 0)
        @foreach ($heroes as $hero)
            @if ($loop->first || $loop->last)
                <li>
                    <strong>{{ $hero }}</strong>
                </li>
            @else
                <li>
                    {{ $hero }}
                </li>
            @endif
        @endforeach
    @endif
@endsection