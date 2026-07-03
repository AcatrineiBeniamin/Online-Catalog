<html>
<body>
<h1>Modifica studentul</h1>

<form>

    <label>First name </label>
    <input name="first_name"
           value="{{ $student->first_name }}">
    <br>

    <label>Last name </label>
    <input name="last_name"
           value="{{ $student->last_name }}">
    <br>

    <label>Email </label>
    <input name="email"
           value="{{ $student->email }}">
    <br>

    <label>Phone </label>
    <input name="phone"
           value="{{ $student->phone }}">
    <br>

    <label>Date of birth </label>
    <input name="date_of_birth"
           value="{{ $student->date_of_birth }}">
    <br>

    <label>Address </label>
    <input name="address"
           value="{{ $student->address }}">
    <br>

    <label>Parent name </label>
    <input name="parent_name"
           value="{{ $student->parent_name }}">
    <br>

    <label>Parent phone </label>
    <input name="parent_phone"
           value="{{ $student->prent_phone }}">
    <br>

    <label>Enrollment date </label>
    <input name="enrollment_date"
           value="{{ $student->enrollment_date }}">
    <br>

    <label>Status </label>
    <input name="status"
           value="{{ $student->status }}">
    <br><br>


    <input type="submit" value="Salvează modificările">

</form>
</body>
</html>
