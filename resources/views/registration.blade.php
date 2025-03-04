<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    @if($errors->any())
        <div style="color: red;">
            @foreach($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
    @elseif(isset($status))
        <div style="color: green">
            {{ $status }}
        </div>
    @endif
    <form action="/register" method="POST">
        @csrf
        <input type="text" name="name" id="name" placeholder="Name">
        <input type="text" name="email" id="email" placeholder="Email">
        <input type="password" name="password" id="password" placeholder="Password">
        <input type="submit" value="Submit">
    </form>
</body>
</html>