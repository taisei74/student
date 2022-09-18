<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <a href='/create/'>create</a>
        <div class='student'>
        @foreach($students as $student)
            名前:
            <h2 class='name'> {{ $student->name }}</h2>
            学籍番号:
            <h5 class='id'>{{ $student->id }}</h5>
            学年:
            <h5 class='grade'>{{ $student->grade }}</h5>
            年齢:
            <h5 class='age'>{{ $student->age }}</h5>
       
        <h5 class='subjects'> 
      @foreach($student->subjects as $subject)
     {{ $subject->subject_name }}
      @endforeach
      </h5>
      @endforeach
      </div>
    </body>
</html>
