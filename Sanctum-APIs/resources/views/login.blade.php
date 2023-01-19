<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Login</title>
    </head>
    <body>
        <div>
            <form action="/api/login" method="POST">
                @csrf
                <input type="email" />
                <input type="password" />
                <button type="submit">Sign in</button> 
            </form>
        </div>
    </body>
</html>
