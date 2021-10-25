<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IFISH | {{ $title }}</title>
    </head>
    <body>
        <h1>EMPLOYEE</h1>
        @foreach ($data as $employee)
        <article>
            {{ $employee->id }}
            {{ $employee->name }}
            {{ $employee->email }}
            {{ $employee->salary }}
            {{ $employee->role }}
        </article>
        @endforeach
    </body>
</html>