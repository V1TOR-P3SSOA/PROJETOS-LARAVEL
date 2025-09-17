<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LabStock</title>
</head>
<body>
    <h2>Adicionar vidraria</h2>

    @if (session()->has('message'))
        {{ session()->get('message') }}
    @endif

    <br><br>

    <form action="{{ route('glasswares.store') }}" method="POST">

        @csrf
        <label for="name">Nome:</label>
        <input type="text" name="name">

        <br><br>                
        <label for="capacity">Capacidade (ml):</label>
        <input type="text" name="capacity">
        
        <br><br>
        <label for="type">Tipo:</label>
        <input type="text" name="type">

        <br><br>
        <label for="batch_number">Lote:</label>
        <input type="text" name="batch_number">

        <br><br>
        <label for="quantity">Quantidade (uni):</label>
        <input type="number" name="quantity">

        <br><br>
        <label for="notes">Observções:</label>
        <input type="text" name="notes">

        <br><br>

        <button type="submit">Adicionar</button>
        <button><a href="{{ route ('glasswares.index') }}">Voltar</a></button>
</body>
</html>