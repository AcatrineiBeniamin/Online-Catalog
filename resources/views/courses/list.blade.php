<html>
<body>
@foreach ($courses as $course)
    <p>
        {{
        $course->name. ' '.$course->timestamps
        }}
    </p>
@endforeach
</body>
</html>


