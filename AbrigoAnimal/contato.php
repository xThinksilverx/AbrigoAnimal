<?php
$title = "Contato";
include_once "header.php";
?>

<body>
    <!-- Menu -->
    <?php include_once "menu.php"; ?>

    <!-- Seção do Google Maps -->
    <div class="map-section">
        <h1>Localização</h1>
        <div class="map-container">
            <!-- Incorporar mapa do Google Maps -->
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3575.9529407950613!2d-48.95522158814531!3d-26.32802327690452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dea4de470b8ef5%3A0x2af99f0c33470ca8!2sEstrada%20Blumenau%20-%20Joinville%2C%20SC%2C%2089237-820!5e0!3m2!1spt-BR!2sbr!4v1733110081290!5m2!1spt-BR!2sbr" 
                width="600" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>

    <!-- Seção de Informações Adicionais -->
    <div class="info-section">
        <div class="logo-container">
            <img src="https://sp-ao.shortpixel.ai/client/to_auto,q_lossy,ret_img,w_1024,h_1024/https://abrigoanimal.org.br/wp-content/uploads/2019/05/cropped-Logo_Abrigo-Animal-Joinville-2.png" alt="Logo do Abrigo Animal">
        </div>
        <div class="info-text">
            <h2>Horário de Funcionamento</h2>
            <p>Segunda à Sábado<br>das 9h às 11h e 14h às 17h<br>Domingo fechado!</p>
            <h3>Venha nos fazer uma visita.<br>Esperamos você!</h3>
        </div>
    </div>

    <!-- Footer -->
    <?php include_once "footer.php"; ?>
</body>
