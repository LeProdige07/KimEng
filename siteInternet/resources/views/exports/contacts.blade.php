<table>
    <thead>
    <tr>
        <th>Num.</th>
        <th>Nom</th>
        <th>Email</th>
        <th>Téléphone</th>
        <th>Sujet</th>
        <th>Message</th>

    </tr>
    </thead>
    <tbody>
    @foreach($contacts as $key => $contact)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->phone }}</td>
            <td>{{ $contact->subject }}</td>
            <td>{{ $contact->message }}</td>

        </tr>
    @endforeach
    </tbody>
</table>