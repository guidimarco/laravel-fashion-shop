@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>VESTITI</h1>
        <a href="{{ route('home') }}">Torna alla homepage</a>
        <ul>
            @foreach ($all_dresses as $dress)
                <li>{{ $dress -> type }} della {{ $dress -> brand }} al prezzo di {{ $dress -> price }} €</li>
            @endforeach
        </ul>
    </div>
@endsection
