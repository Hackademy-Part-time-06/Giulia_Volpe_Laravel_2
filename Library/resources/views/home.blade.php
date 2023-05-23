<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
</head>

<body>
    <ul>
        <h1>roba</h1>
        @foreach ($books as $book)
        
            <li>{{ $book['title'] }} - {{ $book['author'] }}</li>
        @endforeach
    </ul>
</body>

</html>
