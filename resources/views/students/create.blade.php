<html>
<body>

<h1>Adaugă student</h1>

<form method="POST" action="/students">
    @csrf

    <label>Prenume</label>
    <input type="text" name="first_name">

    <br><br>

    <label>Nume</label>
    <input type="text" name="last_name">

    <br><br>

    <label>Email</label>
    <input type="email" name="email">

    <br><br>

    <button type="submit">
        Salvează
    </button>

</form>

</body>
</html>
