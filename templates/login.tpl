<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{$url}css/style.css">
    <base href={$url}>
    <title>{$title}</title>
</head>

<body>
    {include file= "header.tpl"}
    <main class="main">
        <section class="login">
            <div class="login-form">
                <form action="verifyUser">
                    <div>
                        <label for="">Nombre de usuario</label required>
                        <input type="text" name="username">
                    </div>
                    <div>
                        <label for="">Password</label>
                        <input type="password" name="password" pleaceholder="Password" required>
                    </div>
                    <div id="destacar">
                        <label for="">{$error}</label>
                    </div>
                    <input type="submit" value="LogIn">
                </form>
                <p>¿No tienes cuenta?<a href="loginCreate" id="loguear-crear"> Crear usuario</a></p>
            </div>
        </section>
    </main>
    {include file= "footer.tpl"}
</body>

</html>