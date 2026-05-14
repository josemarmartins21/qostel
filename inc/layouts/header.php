<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars(str_replace('_', ' ', $_ENV['APP_NAME'])) ?></title>
    <link rel="stylesheet" href="../../assets/css/index.css">

    <link rel="shortcut icon" href="../../assets/images/qos-logo-sem-fundo.png" type="image/x-icon">

    <!-- Link de icones do bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!-- Link de icones do font awesome --> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Link do Google Font  -->
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>
<body id="corpo" onload="trocarBanner()">
<div id="background" >
        <header id="header-container">
            <div id="logo">
                <a href="https://qostel.co.ao/">
                    <img src="../../assets/images/qos-logo-sem-fundo.png" alt="logo da qos_tel" id="logo-lg">

                    <img src="../../assets/images/qos-logo-sem-fundo-pq.png" alt="logo da qos_tel" id="logo-pq">
                </a>

            </div>
            
            <div class="hamburguer-container">
                <i class="fa-solid fa-bars hamburguer" id="menu-hamburguer"></i>
            </div>
            
            <menu id="menu-container">
                <ul class="lista-links">
                    <li class="link-target">
                        <a href="#background" class="link">Home</a>
                    </li>
                    <li class="link-target">
                        <a href="https://qostel.co.ao/?page=sobre#sobre" class="link">Quem Somos</a>
                    </li>
                    <li class="link-target">
                        <a href="#diferenciais" class="link">Serviços</a>
                    </li>
                    <li class="link-target">
                        <a href="#prova-social-container" class="link">Clientes</a>
                    </li>
                    <li class="link-target">
                        <a href="http://app.qostel.co.ao/visitors/create" class="link">Contacto</a>
                    </li>
                    <li class="link-target">
                        <a href="#perguntas" class="link">Perguntas Frequentes</a>
                    </li>
                </ul>
            </menu>

        </header>
    
        <section id="hero">
            <h1>Internet ultra rápida para a sua casa</h1>
            <h3>
                Internet sem fios, sem limites e sem interrupções. Velocidade máxima para tudo o que você precisa, com planos ilimitados que cabem no seu bolso
            </h3>
            <a href="#diferenciais">Ver Serviços</a>
        </section>

        <a href="https://wa.me/244924910904?text=Ol%C3%A1%2C%20gostaria%20de%20saber%20mais%20sobre%20os%20planos%20de%20internet." class="float-btn">
            <i class="bi bi-whatsapp"></i>  
        </a>
</div>