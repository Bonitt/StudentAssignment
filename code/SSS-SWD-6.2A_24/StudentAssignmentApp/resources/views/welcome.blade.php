<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body class="antialiased">
        <div>
            <a href="{{ route('students.index') }}">Students</a>
            <a href="{{ route('students.create') }}">Create New Student</a>
            <a href="{{ route('students.show', 1) }}">Show Student</a>
        </div>
    </body>
</html>
