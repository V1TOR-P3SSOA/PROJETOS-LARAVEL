<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LabStock</title>
</head>
<body>
    <h1>VIDRARIAS</h1>
    <ul>
        @foreach ($glasswares as $Glassware)
            <li>{{ $Glassware -> name }}</li>
        @endforeach
        
    </ul>
</body>
</html>