<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Users List</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <table border="1">
        <thead>
            <tr>
                <td>#ID</td>
                <td>Name</td>
                <td>Email</td>
                <td>Password</td>
                <td>Created at</td>
                <td>Updated at</td>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                @foreach(json_decode($user) as $val)
                    <td>{{$val}}</td>
                @endforeach
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
