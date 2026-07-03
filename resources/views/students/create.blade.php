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

    <label>Phone</label>
    <input type="phone" name="phone">

    <br><br>

    <label>Date of Birth</label>
    <input type="date_of_birth" name="date_of_birth">

    <br><br>

    <label>Address</label>
    <input type="address" name="address">

    <br><br>

    <label>Parent Name</label>
    <input type="parent_name" name="parent_name">

    <br><br>

    <label>Parent Phone</label>
    <input type="parent phone" name="parent phone">

    <br><br>

    <label>Enrollment Date</label>
    <input type="enrollment_date" name="enrollment_date">

    <br><br>

    <label>Status</label>
    <input type="status" name="status">

    <br><br>

    <button type="submit">
        Salvează
    </button>

</form>
<a href="/">Înapoi la meniul principal</a>
</body>
</html>
