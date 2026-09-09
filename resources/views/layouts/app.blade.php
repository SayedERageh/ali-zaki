<!DOCTYPE html>
<html
    lang="{{ app()->getLocale() }}"
    dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}"
>
<head>

    @include('includes.header')

</head>

<body>

    @include('includes.navbar')

    <main>
        @yield('content')
    </main>

    @include('includes.footer')

    @include('includes.scripts')

</body>
</html>