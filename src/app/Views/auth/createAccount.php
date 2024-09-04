<?php
require '../../../autoload.php';
/*../../Controllers/CreateAccountController.php*/
use app\Services\CheckAccountCreator;

$check = new CheckAccountCreator();
$message = $message ?? '';

if(isset($_POST['submit'])){
    $message = $check->checkForm($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="../../../public/css/Base/reset.css">
    <link rel="stylesheet" href="../../../public/css/Base/header.css">
    <link rel="stylesheet" href="../../../public/css/Layout/login.css">
    <title>Login</title>
</head>
<body>
    <main class="main__content__container">
        <section class="main__content__create-account__container">
            <div class="main__content__create-account">
                <h1 class="main__content__create-account__title">Crie sua conta</h1>
                <p>Não perca tempo e comece a pedalar pelo mundo!</p>
                <form class="create-account__form" action="createAccount.php" method="post">
                    <input class="create-account__form__input" type="text" name="firstName" placeholder="Nome">
                    <input class="create-account__form__input" type="text" name="lastName" placeholder="Sobrenome">
                    <input class="create-account__form__input" type="email" name="email" placeholder="Email">
                    <input class="create-account__form__input" type="password" name="password" placeholder="Senha" required>
                    <input class="create-account__form__input" type="password" name="confirmedPassword" placeholder="Confirme sua senha" required>
                    <input class="create-account__form__input-submit" type="submit" name="submit" value="Cadastrar">
                </form>
                <p> <?php echo $message; ?></p>
            </div>
        </section>
    </main>
</body>
</html>