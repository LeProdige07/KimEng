<!DOCTYPE html>
<html>

<head>
    <style>
        .page-break {
            page-break-after: always;
        }

        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #ff8000;
            color: white;
        }
    </style>
</head>

<body>
    <h1>Liste des précommandes de la logette</h1>
    <table id="customers">
        <tr>
            <th>Num.</th>
            <th>Nom</th>
            <th>Postnom</th>
            <th>Prénom</th>
            <th>Fonction</th>
            <th>Email</th>
            <th>Commune</th>
        </tr>
        @if (count($logette_infos))
            @foreach ($logette_infos as $key => $logette_info)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $logette_info->nom }}</td>
                    <td>{{ $logette_info->postnom }}</td>
                    <td>{{ $logette_info->prenom }}</td>
                    <td>{{ $logette_info->fonction }}</td>
                    <td>{{ $logette_info->email }}</td>
                    <td>{{ $logette_info->commune }}</td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="3">Aucune précommande !</td>
            </tr>
        @endif
    </table>
</body>

</html>
