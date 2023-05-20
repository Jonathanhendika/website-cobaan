<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
</head>
<body>
    <h2>Edit Data</h2>
    <tbody>
    @foreach($abudemens as $abudemen)
    <tr>
        <td>{{ $abudemen->id }}</td>
        <td>{{ $abudemen->jumlah_abudemen }}</td>
        <td>
            <a href="/abudemen/edit/{{ $abudemen->id }}"><button class="btn btn-primary">Edit</button></a>
            <form action="/abudemen/delete/{{ $abudemen->id }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</tbody>
</body>
</html>
