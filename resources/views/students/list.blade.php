<html>
<body>
<h1>Hello</h1>
    @foreach ($students as $student)
<p>
    {{
    $student->first_name. ' '. $student->last_name. ' '.
    $student->id. ' '. $student->email. ' '. $student->enrollment_date. ' '.
    $student->status. ' '. $student->phone_number. ' '. $student->parent_name
    }}
</p>
    @endforeach
</body>
</html>


