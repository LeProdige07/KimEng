<table>
    <thead>
    <tr>
        <th>Num.</th>
        <th>Nom</th>
        <th>Postnom</th>
        <th>Prénom</th>
        <th>Fonction</th>
        <th>Email</th>
        <th>Téléphone</th>
        <th>Commune</th>
        <th>Quartier</th>
        <th>Rue et N°</th>
    </tr>
    </thead>
    <tbody>
    @foreach($logette_infos as $key => $logette_info)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{ $logette_info->nom }}</td>
            <td>{{ $logette_info->postnom }}</td>
            <td>{{ $logette_info->prenom }}</td>
            <td>{{ $logette_info->fonction }}</td>
            <td>{{ $logette_info->email }}</td>
            <td>{{ $logette_info->tel }}</td>
            <td>{{ $logette_info->commune }}</td>
            <td>{{ $logette_info->quartier }}</td>
            <td>{{ $logette_info->rue }}</td>
        </tr>
    @endforeach
    </tbody>
</table>