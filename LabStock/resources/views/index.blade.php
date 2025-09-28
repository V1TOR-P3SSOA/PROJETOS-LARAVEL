<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LabStock</title>
</head>
<body>
    <h1>Bem vindo(a) ao LabStock!</h1>
    <p><i>"A organização é a base da ciência..."</i></p>

    <h1>VIDRARIAS</h1>
    <table>
        <tr>
            <td>NOME</td>
            <td>LOTE</td>
            <td>QUANTIDADE</td>
            <td>AÇÕES</td>
        </tr>
        @foreach ($glasswares as $glassware)
            <tr>
                <td>{{ $glassware -> name }}</td>
                <td>{{ $glassware -> batch }}</td>
                <td>{{ $glassware -> quantity }}</td>
                <td><a href="#">Editar</a> | <a href="#">Excluir</a></td>
            </tr>
        @endforeach
    </table>
</body>
</html>