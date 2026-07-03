<html>
<body>

<h1>Detalii student</h1>

<table border="1" cellpadding="5">
    <tr>
        <td><strong>Prenume</strong></td>
        <td>{{ $student->first_name }}</td>
    </tr>

    <tr>
        <td><strong>Nume</strong></td>
        <td>{{ $student->last_name }}</td>
    </tr>

    <tr>
        <td><strong>Email</strong></td>
        <td>{{ $student->email }}</td>
    </tr>

    <tr>
        <td><strong>Telefon</strong></td>
        <td>{{ $student->phone }}</td>
    </tr>

    <tr>
        <td><strong>Data nașterii</strong></td>
        <td>{{ $student->date_of_birth }}</td>
    </tr>

    <tr>
        <td><strong>Adresă</strong></td>
        <td>{{ $student->address }}</td>
    </tr>

    <tr>
        <td><strong>Părinte</strong></td>
        <td>{{ $student->parent_name }}</td>
    </tr>

    <tr>
        <td><strong>Telefon părinte</strong></td>
        <td>{{ $student->parent_phone }}</td>
    </tr>

    <tr>
        <td><strong>Data înscrierii</strong></td>
        <td>{{ $student->enrollment_date }}</td>
    </tr>

    <tr>
        <td><strong>Status</strong></td>
        <td>{{ $student->status }}</td>
    </tr>
</table>

<br>
<button onclick="window.location.href='/students/{{ $student->id }}/edit'">
    Editează studentul
</button>

<a href="/students">Înapoi la listă</a>

</body>
</html>
