<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
            width: 80%;
            color: white;
            background-color: white; 
            margin:auto ;
        }
        .content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 10px;
            text-align: center;
            background-color: green;
            width: 50vh;
            height: 50vh;
            font-size: 1rem;
            font-family: 'Segoe UI', Tahoma, 'Geneva', Verdana, sans-serif;
            border-radius: 20px;
        }
        button {
            font-size: 1rem;
            background-color: red;
            border-radius: 10px;
            padding: 5px;
            border: 2px solid black;
            width: 100px;
            cursor: pointer;
        }
        a {
            text-decoration: none;
            color: white;
        }
        p {
            color: black;
        }
        .profile {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            background-image: url(img/alucard2.jpg);
            background-size: cover;
            background-position: center;
            border: 3px solid black;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="profile"></div>            
            <h2>Selamat datang Admin</h2>        
            <button><a href="login.php">Logout</a></button>
        </div>
    </div>
</body>
</html>