<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jody_Blog</title>

    <link rel="icon" 
      type="png" 
      href="{{ asset('image/blog_image.png') }}"/>

    <!-- GOOGLE FONT -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=REM&display=swap');

        *{
            font-family: 'REM', sans-serif;
        }

    </style>
    
    <!-- IMPORTO IL PACCHETTO VITE CON BOOTSTRAP ED IL MIO CSS/JS -->
    @vite('resources/css/app.css', 'resources/js/app.js')

</head>
<body>
    
  <x-navbar/>

    {{ $slot }}

  <x-footer/>



    <script src="https://kit.fontawesome.com/7145949cc6.js" crossorigin="anonymous"></script>    
</body>
</html>