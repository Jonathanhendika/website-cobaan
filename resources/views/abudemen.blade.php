<!DOCTYPE html>
<html>
<head>
    <title>Data Abudemen</title>
</head>
<body>
    <h2>Data Abudemen</h2>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Jumlah</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
    @foreach($abudemens as $abudemen)
    <tr>
        <td>{{ $abudemen->id }}</td>
        <td>{{ $abudemen->jumlah_abudemen }}</td>
        <td>
            <a href="/abudemen/edit"><button class="btn btn-primary">edit</button></a>
            <form action="/abudemen/delete" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</tbody>
    </table>

    <a href="abudemen/add">Add Data</a>
</body>
</html>
