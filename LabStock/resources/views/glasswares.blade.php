<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LabStock</title>
</head>
<body>
    <a href="{{ route ('index') }}">Voltar</a>
    <h1>VIDRARIAS</h1>
    <a href="{{ route('glasswares.create') }}">Adicionar vidraria</a>
    <ul>
        @foreach ($glasswares as $glassware)
            <li>{{ $glassware -> name }} | <a href="{{ route ('glasswares.edit', ['glassware' => $glassware->id]) }}">Editar</a> | <a href="">Excluir</a> </li>
        @endforeach
        
    </ul>
</body>
</html>