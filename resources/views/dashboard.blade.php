<!DOCTYPE html>
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
</html>