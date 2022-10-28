<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заметки</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="/js/register.js" defer ></script>
</head>

<body>
    <div class="wrapper">
        <header>
            <img src="img/logo.png" alt="logo">
            <a class="button" href="index.php">Вход</a>
        </header>
        <main>
            <img src="img/register.png" alt="notebook">
            <form action="controllers/registercontroller.php" method="POST" id="registerForm">
                <input type="text" placeholder="Логин" name="login" id="login" required>
                <input type="password" placeholder="Пароль" name="password" id="password" required>
                <input type="password" placeholder="Подтверждение пароля" id="confirm">
                <button>Регистрация</button>
            </form>
        </main>
        <footer>
            <h2>Заметки</h2>
        </footer>
    </div>
</body>

</html>