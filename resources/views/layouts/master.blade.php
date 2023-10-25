<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')| my blog</title>
</head>

<body>
    @include('layouts.partials.navigation')
    <div class="container">
        @yield('content')
    </div>
</body>

</html>