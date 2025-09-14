<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar vidraria</title>
</head>
<body>
    <h2>Editar</h2>

    @if (session()->has('message'))
        {{ session()->get('message') }}
    @endif

    <br><br>

    <form action="{{ route('glasswares.update', ['glassware' => $glassware -> id]) }}" method="POST">

        @csrf
        <input type="hidden" name="_method" value="PUT">
        <input type="text" name="name" value="{{ $glassware -> name}}">

        <br><br>                

        <input type="text" name="capacity" value="{{ $glassware -> capacity}}">
        
        <br><br>

        <input type="text" name="type" value="{{ $glassware -> type}}">

        <br><br>

        <input type="text" name="batch_number" value="{{ $glassware -> batch_number}}">

        <br><br>

        <input type="number" name="quantity" value="{{ $glassware -> quantity}}">

        <br><br>

        <input type="text" name="notes" value="{{ $glassware -> notes}}">

        <br><br>

        <button type="submit">Atualizar</button>
        <button><a href="{{ route ('glasswares.index') }}">Voltar</a></button>
    </form>
</body>
</html>