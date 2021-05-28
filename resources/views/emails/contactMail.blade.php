<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact form</title>
</head>
<body>
    <h1>
        Contact Message
    </h1>
    <p>
       <strong> Email: {{$details['email'] }}</strong> <br><br>
     <em>   Requete: {{ $details['requete'] }}</em> <br><br>
        Message: {{ $details['message'] }}
    </p>
</body>
</html>