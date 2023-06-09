<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.partials.head')

<main>
    @yield('content')
</main>

</body>

</html>
