<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Cars App</title>
    </head>
    <body class="antialiased">
        <div>
            <a href="{{ route('cars.index') }}">All Cars</a>
            <a href="{{ route('cars.create') }}">Add Car</a>
            <a href="{{ route('cars.show', 1) }}">Show Car</a>
        </div>
    </body>
</html>
