<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <h1>Create Employee</h1>
    ///validation error display
     @if ($errors -> any())
        <ul> 
       @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul> 
    @endif

    <form action="{{route('employee.store')}}" method="POST">
        @csrf
        @method('post')

    <label for="name" class="">Name:</label>
    <input type="text" name="name" id="name"> 
    <br/>
    <br/>
    <label for="age" >Age:</label>
    <input type="text" name="age" id="age"  >
    <br/>
    <br/>
    <label for="position" class="">Position:</label>
    <input type="text" name="position" id="position">
    <br/>
    <br/>
    <label for="salary" class="">Salary:</label>
    <input type="text" name="salary" id="salary">
    <br/>
    <br/>
    <button type="submit">Create Employee</button>
</form>
</body>
</html>