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
    <form action='/' method='POST'>
        @csrf
        <div class='name_crate'>
            <h2>name</h2>
            <input type='text' name='student[name]' placeholder='name'/>
        </div>
        <div class='grade_create'>
            <h2>grade</h2>
            <input type='text' name='student[grade]' placeholder='grade'/>
        </div>
        <div class='age_create'>
            <h2>age</h2>
            <input type='text' name='student[age]' placeholder='age'/>
        </div>
        
        <div>
            <h2>好きな教科</h2>
            @foreach($subjects as $subject)
            
            <label>
                <input type='checkbox' value='{{ $subject->id }}' name='subjects_array[]'>
                {{ $subject->subject_name }}
                
            </label>
            @endforeach
        </div>
        <input type='submit' value='保存'/>
    </form>
    </body>
</html>
