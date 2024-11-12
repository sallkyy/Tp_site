<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Авторизация</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
      }

      body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f4f4f9;
      }

      .login-container {
        width: 100%;
        max-width: 350px;
        padding: 2rem;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
      }

      .login-container h1 {
        font-size: 1.5rem;
        color: #333333;
        margin-bottom: 1.5rem;
      }

      .login-container input[type="text"],
      .login-container input[type="password"] {
        width: 100%;
        padding: 0.8rem;
        margin-bottom: 1rem;
        border: 1px solid #dddddd;
        border-radius: 4px;
        background-color: #f9f9f9;
        font-size: 1rem;
      }

      .login-container input[type="text"]:focus,
      .login-container input[type="password"]:focus {
        outline: none;
        border-color: #6c63ff;
        background-color: #ffffff;
      }

      .login-container button {
        width: 100%;
        padding: 0.8rem;
        background-color: #6c63ff;
        color: #ffffff;
        font-size: 1rem;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }

      .login-container button:hover {
        background-color: #5752d7;
      }

      .login-container p {
        margin-top: 1rem;
        font-size: 0.9rem;
        color: #666666;
      }

      .login-container a {
        color: #6c63ff;
        text-decoration: none;
        transition: color 0.3s ease;
      }

      .login-container a:hover {
        color: #4d45b2;
      }
    </style>
  </head>
  <body>
    <div class="login-container">
      <h1>Вход в систему</h1>
      <form action="login.php" method="POST">
        <input type="text" name="login" placeholder="Логин" required/>
        <input type="password" name="password" placeholder="Пароль" required />
        <button type="submit">Войти</button>
      </form>
    </div>
  </body>
</html>
