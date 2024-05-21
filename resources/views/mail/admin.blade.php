<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gruppo&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Contact Mail</title>
</head>
<body>
    <div class="w-full h-full mt-3">
        <h1 class="font-title text-xl font-bold text-center">Nuova Mail ricevuta</h1>
        <h3 class="font-text text-lg font-normal mt-5 ps-3">Ciao cucu' hai ricevuto una nuova mail, qui sotto i dettagli</h3>
        <div class="mt-3 ms-3">
            <p>Nome: {{$userData['name']}}</p>
            <p>E-mail: {{$userData['email']}}</p>
            <p>Subject: {{$userData['subject']}}</p>
            <p>Message: {{$userData['message']}}</p>
        </div>
    </div>
</body>
</html>