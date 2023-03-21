<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>
    <header style="text-align: center">
        <h1>Welcome to the SQLI Demo application</h1>
    </header>
    <main style="width:20%; text-align:center; margin: 0 auto">
        <h2>Log in to your account</h2>
        <form style="display: flex; flex-direction:column" method="POST" action="{{ route('storeData') }}">
            <label for="username">Username</label>
            <input type="text" name="username" placeholder="Username">
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Password">
            <input type="submit" value="Log in">
        </form>
    </main>
</body>

</html>
