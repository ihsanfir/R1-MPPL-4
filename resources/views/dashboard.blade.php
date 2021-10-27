<!-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IFISH | {{ $title }}</title>
    </head>
    <body>
        <h1>Dashboard</h1>
        @foreach ($expanse as $expanses)
        <article>
            {{ $expanses->amount }}
            {{ $expanses->date }}
        </article>
        @endforeach
        <h1> Income </h1>
        @foreach ($income as $incomes)
        <article>
            {{ $incomes->amount }}
            {{ $incomes->date }}
        </article>
        @endforeach
    </body>
</html> -->

@extends('master')
@section('title') IFISH | {{ $title }} @endsection
@section('heading_1') DASHBOARD @endsection
@section('content')
    <div class="row">
    @foreach ($expanse as $expanses)
        <article>
            {{ $expanses->amount }}
            {{ $expanses->date }}
        </article>
        @endforeach
    </div>

    <div class="row">
        <h2 class="m-2 text-dark"> Income </h2>
        @foreach ($income as $incomes)
            <article>
                {{ $incomes->amount }}
                {{ $incomes->date }}
            </article>
        @endforeach
    </div>
@endsection