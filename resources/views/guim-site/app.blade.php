<!DOCTYPE html>
<html lang="en-US" dir="ltr">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- ===============================================-->
        <!--    Document Title-->
        <!-- ===============================================-->
        <title>GuiM | {{ $title }}</title>

        <!-- ===============================================-->
        @include('guim-site.partials.head')
    </head>

    <body>
        @include('guim-site.partials.header')
        @yield('content')

        @include('guim-site.partials.footer')
        <!-- ===============================================-->
        @include('guim-site.partials.foot')
    </body>
</html>
