<!DOCTYPE html>
<html>
<head>
    <title>Create Data</title>
</head>
<body>
    <h2>Create Data</h2>
    <form method="POST" action="/abudemen/add">
        @csrf
        <label for="id">id:</label>
        <input type="text" name="id" id="id">
        <br><br>

        <label for="jumlah_abudemen">jumlah_abudemen:</label>
        <input type="text" name="jumlah_abudemen" id="jumlah_abudemen">
        <br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
