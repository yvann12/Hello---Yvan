<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello Yvan</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

       
    </head>
    <body>

       <h1>Salut la Formation !</h1>

       <p>It's current {{ date('H:i') }} .</p>

       <footer>
           <p>&copy;*Copyright*{{ date('M/Y') }}*&middot; <a href="#">About_Us</a></p> 
       </footer>

    </body>
</html>
