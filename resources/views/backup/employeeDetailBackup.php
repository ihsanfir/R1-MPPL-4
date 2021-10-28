<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IFISH | {{ $title }}</title>
    </head>
    <body>
        <h1>EMPLOYEE DETAIL</h1>
        <article>
            {{ $data->id }}
            {{ $data->name }}
            {{ $data->email }}
            {{ $data->salary }}
            {{ $data->role }}
            {{ $data->joined_at }}
        </article>
    </body>
</html>


