<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LabStock</title>
    <style>
        table{
            border-collapse: collapse;
            width: 70%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h2>Vidraria - {{ $glassware->name }}</h2>

    <form action="{{ route('glasswares.destroy', $glassware->id) }}" method="post">
        @csrf
        @method('DELETE')

        <table>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Capacidade</th>
                <th>Tipo</th>
                <th>Lote</th>
                <th>Quantidade</th>
                <th>Observações</th>
            </tr>
            <tr>
                <td>{{ $glassware-> id }}</td>
                <td>{{ $glassware-> name }}</td>
                <td>{{ $glassware-> capacity }}</td>
                <td>{{ $glassware-> type }}</td>
                <td>{{ $glassware-> batch_number }}</td>
                <td>{{ $glassware-> quantity }}</td>
                <td>{{ $glassware-> notes }}</td>
            </tr>

        </table>

        <button type="submit">Excluir vidraria</button>

    </form>
    
</body>
</html>