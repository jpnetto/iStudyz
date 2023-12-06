
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iStudyz Login Page</title>
    <link rel="stylesheet" href="http://localhost/iStudyz/assets/style.css">
    

</head>

<body>
    
      <header>
        <h2 class="logo">iStudyz</h2>
        <nav class="navigation">
            <a href="http://localhost/iStudyz/view/index.php">Home</a>
            <a href="http://localhost/iStudyz/view/materias.php">Matérias</a>
            <a href="http://localhost/iStudyz/view/rotina.php">Rotina</a>
            <a href="http://localhost/iStudyz/view/suporte.php">Suporte</a>
            <a href="http://localhost/iStudyz/view/duvidas.php">Dúvidas</a>
            <button class="btnLogin-popup">Login</button>
        </nav>
      </header>
    <div class="wrapper">
        <span class="icon-close"><ion-icon name="close-outline"></ion-icon></span>
        <div class="form-box login">
            <h2>Login</h2>
            <form action="http://localhost/iStudyz/model/CRUDlogin.php" method="POST">
            <div class="input-group">
                    <div class="input-box">
                        <label for="id"></label>
                        <input id="id" type="int" name="id" placeholder="Digite o id" required>
                    </div>

                    <div class="input-box">
                        <label for="senha"></label>
                        <input id="senha" type="password" name="senha" placeholder="Digite a senha" required>
                    </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Lembrar Senha</label>
                    <a href="#">Esqueceu a Senha?</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="registro-login">
                    <p>Não tem uma conta?<a href="#" class="link-register">Registre-se</a></p>
                </div>
            </form>
        </div>


        <div class="form-box register">
            <h2>Registre-se</h2>
            <form action="http://localhost/iStudyz/model/CRUDcadastro.php" method="POST">
                <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="mail" type="mail" name="mail" placeholder="Digite o e-mail" required>
                    </div>

                    <div class="input-box">
                        <label for="CPF">ID</label>
                        <input id="person" type="int" name="person" placeholder="Digite o ID" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="senha" type="password" name="senha" placeholder="Digite a senha" required>
                    </div>

                <div class="remember-forgot">
                    <label><input type="checkbox">Li e concordo com os termos e condições</label>
                   
                </div>

                <button type="submit" class="btn">Registre-se</button>
                <div class="registro-login">
                    <p>Já tem uma conta?<a href="#" class="link-login">Login</a></p>
                </div>
            </form>
        </div>


    </div>

    <script src="http://localhost/istudyz/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>