<html>
<body>
<h1>Lista studenti</h1>


    @foreach ($students as $student)
<p>
    <a href="/students/{{$student->id}}">
    {{ $student->id }} {{ $student->first_name }} {{ $student->last_name }}
</a>
</p>
    @endforeach

<a href="/">Înapoi la meniul principal</a>

</body>
</html>


