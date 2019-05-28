<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="../sass/app.scss" class="scss">
        <link rel="stylesheet" href={{ URL::asset('css/app.css') }}  class="scss">
    </head>
    <body>
 <div id="app">
 
    <aside class='menu'>
        <router-link class='menu__link' to="/">Home</router-link>
        <router-link class='menu__link' to="about">About</router-link>
        <router-link class='menu__link' to="data">Data</router-link>
        @foreach ($data as $data)
            <p>{{ $data }}</p>
        @endforeach
    </aside>
    <main class="container">
    <router-view></router-view>
    </main>

 </div>
 <script src='/js/app.js' ></script>

    </body>
</html>
