<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{$title}}</h1>
    <a href="#">Home</a>
    <a href="#">About</a>
    <a href="#">Contact</a>
    <a href="#">Setting</a>

    {{-- Body should be here --}}
    {{ $slot }}
</body>
</html>