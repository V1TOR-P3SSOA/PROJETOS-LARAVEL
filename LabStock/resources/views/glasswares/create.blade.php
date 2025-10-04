<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ADICIONAR NOVA VIDRARIA</h1>
    <form class="form" action="{{ route('glasswares.store') }}" method="POST">
        @csrf
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name"><br>

        <label for="type">Tipo:</label>
        <input type="text" id="type" name="type"><br>

        <label for="capacity">Capacidade:</label>
        <input type="text" id="capacity" name="capacity"><br>

        <label for="quantity">Quantidade:</label>
        <input type="number" id="quantity" name="quantity"><br>

        <label for="batch">Lote:</label>
        <input type="number" id="batch" name="batch"><br>

        <label for="notes">Notas:</label>
        <input type="number" id="notes" name="notes"><br>

        <br>
        <button type="submit">Cadastrar</button>
        <a href="{{ route('glasswares.index') }}">Voltar</a>
</form>
</body>
</html>