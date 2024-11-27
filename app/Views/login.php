<html>
    <body>
        <h2>Login</h2>
        <?php if (isset($error) && $error): ?>
            <p style="color: red;"><?= esc($error) ?></p>
        <?php endif; ?>
        <form action="/login_action" method="POST">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <button type="submit">Signin</button>
        </form>
    </body>
</html>
