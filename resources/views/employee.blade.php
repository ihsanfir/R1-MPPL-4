<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IFISH | {{ $title }}</title>
    </head>
    <body>
        <h1>EMPLOYEE</h1>
        <table border = "1">
            <tr>
            <td>ID</td>
            <td>name</td>
            <td>email</td>
            <td>salary</td>
            <td>role</td>
            </tr>
            @foreach ($data as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->salary }}</td>
                <td>{{ $employee->role }}</td>
                <td><a href = '/employee/{{ $employee->id }}'>Detail</a></td>
                <td><a href = '/employee/edit/{{ $employee->id }}'>Edit</a></td>
            </tr>
            @endforeach
    </table>
    </body>
</html>
