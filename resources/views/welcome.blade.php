<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bagaskara</title>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    @if (Auth::check())
        <h2>Welcome {{ Auth::user()->name }}!!!</h2>

        <a href="{{ route('auth.logout') }}">logout</a>
    @else
        <h2>Please login first!</h2>

        <a href="{{ route('auth.login') }}">login</a>
    @endif
    <a href="https://maps.app.goo.gl/SqGff3Yg4EUSeL6a7?g_st=aw">link gmaps</a>

</body>

</html>
