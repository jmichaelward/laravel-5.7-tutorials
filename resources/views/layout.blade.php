<!doctype html>
<html lang="en">
<head>
    <title>@yield('title', 'Laravel')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
    <style>
        .button {
            margin-top: 1rem;
        }

        .is-complete {
            text-decoration: line-through;
        }
    </style>
</head>
<body>
<div class="links">
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About Us</a></li>
        <li><a href="/contact">Contact Us</a></li>
        <li><a href="/projects">Projects</a></li>
    </ul>
</div>

<div class="container">
    @yield('content')
</div>
</body>
</html>

