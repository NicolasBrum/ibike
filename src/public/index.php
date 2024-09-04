<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="css/Base/reset.css">
    <link rel="stylesheet" href="css/Base/header.css">
    <link rel="stylesheet" href="css/Layout/main.css">
    <title>i-Bike</title>
</head>
<body>
    <header class="header__container" id="start">
        <nav class="header__container__navbar">
            <a class="header__container__navbar__link" href="index.html">Inicio</a>
            <a class="header__container__navbar__link" href="#how-to-use">Como funciona</a>
            <a class="header__container__navbar__link" href="../app/Views/auth/createAccount.php">Login</a>
        </nav>
    </header>
    <main class="main__content">
        <section class="main__content__section-initial">
            <h1 class="main__content__section__title">IMAGINE PODER SE LOCOMOVER E AINDA AJUDAR O <span class="green__text">PLANETA</span>?</h1>
            <p class="main__content__section__text">Com a <span class="green__text">I-Bike</span> isso é possível, com nossas bicicletas feitas de material reciclável, você anda e a cada 1km percorrido
                plantaremos uma árvore.
            </p>
        </section>
        <section class="main__content__section__img"></section>
        <section class="main__content__section-secundary" id="how-to-use">
            <h1 class="main__content__section__title">Mas...<span class="green__text">Como funciona</span>?</h1>
            <p class="main__content__section__text">O <span class="green__text">I-Bike</span> possuí <span class="green__text">3</span> tipos de <span class="green__text">planos</span> conforme abaixo:</p>
            <div class="section-secundary__plans__container">
                <div class="section-secundary__plan__container">
                    <div class="section-secundary__plan">
                        <h1 class="section-secundary__plan__title">Diário</h1>
                        <p class="section-secundary__plan__price">R$109,90</p>
                    </div>
                    <hr>
                    <h1>Vantagens</h1>
                    <ul class="section-secundary__plan__container__list-of-advantages">
                        <li>Acesso ao aplicativo por 24 horas.</li>
                        <li>Para situações especifícas.</li>
                    </ul>
                </div>
                
                <div class="section-secundary__plan__container">
                    <div class="section-secundary__plan">
                        <h1 class="section-secundary__plan__title">Mensal</h1>
                        <p class="section-secundary__plan__price">R$109,90</p>
                    </div>
                    <hr>
                    <h1>Vantagens</h1>
                    <ul class="section-secundary__plan__container__list-of-advantages">
                        <li>Acesso ao aplicativo por 30 dias.</li>
                        <li>Limite a 4 viagens por dia.</li>
                    </ul>
                </div>

                <div class="section-secundary__plan__container">
                    <div class="section-secundary__plan">
                        <h1 class="section-secundary__plan__title">Anual</h1>
                        <p class="section-secundary__plan__price">R$109,90</p>
                    </div>
                    <hr>
                    <h1>Vantagens</h1>
                    <ul class="section-secundary__plan__container__list-of-advantages">
                        <li>Acesso ao aplicativo por 360 dias.</li>
                        <li>Viagens imilitadas por dia.</li>
                    </ul>
                </div>

            </div>
            <p class="section-secundary__station__container__observations">Basta localizar a estação mais próxima, escanear o QRCODE e pronto.</p>
            <p class="section-secundary__station__container__observations">Por questões de segurança, independente do plano, a cada 1 hora de viagem, será obrigado a passar em alguma estação para dar um check-in.</p>
        </section>
    </main>
</body>
</html>