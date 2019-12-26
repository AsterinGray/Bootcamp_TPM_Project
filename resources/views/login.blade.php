<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="/style/styles/Login-Regis.css">
    <link rel="stylesheet" href="/style/style.css">
	<link rel="stylesheet" href="/style/Bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="area">
        <div class="Login-Regis">
            <div class="extra">
                <img src="/style/assets/Login.png" alt="">
            </div>
            <div class="form">
                <form>
                    <h1>Login</h1>
                    <div class="box-input form-group">
                        <label for="validationDefault01"></label>
                        <img src="/style/assets/users-solid.svg" alt="">
                        <input type="text" class="form-control" id="validationDefault01" placeholder="Username" required>
                    </div>
                    <div class="box-input form-group">
                        <label for="validationDefault02"></label>
                        <img src="/style/assets/key-solid.svg" alt="">
                        <input type="password" class="form-control" id="validationDefault02" placeholder="Password" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
                
                <a href="regis">Create an Account</a>
            </div>
        </div>
    </div>
    <script src="/style/jquery.js"></script>
</body>
</html>