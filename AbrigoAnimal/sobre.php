<?php
$title = "Brecho Abrigo Animal";
include_once "header.php";
?>

<body>
    <div class="content">
        <!-- Seção da Logo -->
        <div class="logo-section">
            <div class="logo-circle"></div>
            <div class="text-section">
            <h1>Quem Somos?</h1>
            <p>
                Somos uma ONG sem fins lucrativos fundada em julho de 2001 e administrada pela Sra. Osnilda Bachtold. 
                Cuidamos de mais de 300 cães e gatos abandonados, oferecendo abrigo, alimentação, vacinação, castração 
                e cuidados veterinários. Nos mantemos com doações da comunidade e um brechó. Nosso espaço é limitado, 
                e temos muitos animais esperando um lar responsável. Sua ajuda é fundamental para continuarmos nosso 
                trabalho e dar a esses animais uma nova chance.
            </p>
        </div>
        </div>

        <!-- Seção do Slider -->
        <div class="slider-section">
            <div class="slider-container">
                <div class="slider">
                    <img src="assets/imagens/im1.jpg" alt="Cachorro do Abrigo 1">
                    <img src="assets/imagens/im2.jpg" alt="Cachorro do Abrigo 2">
                    <img src="assets/imagens/im3.jpg" alt="Cachorro do Abrigo 3">
                    <img src="assets/imagens/im4.jpg" alt="Cachorro do Abrigo 4">
                    <img src="assets/imagens/im5.jpg" alt="Cachorro do Abrigo 5">
                    <img src="assets/imagens/im6.jpg" alt="Cachorro do Abrigo 6">
                    <img src="assets/imagens/im7.jpg" alt="Cachorro do Abrigo 7">
                    <img src="assets/imagens/im8.jpg" alt="Cachorro do Abrigo 8">
                    <img src="assets/imagens/im9.jpg" alt="Cachorro do Abrigo 9">
                    <img src="assets/imagens/im10.jpg" alt="Cachorro do Abrigo 10">
                </div>
            </div>
        </div>
    </div>

    <script>
        // Script para rodar o carrossel
        document.addEventListener("DOMContentLoaded", () => {
            const slider = document.querySelector('.slider');
            let index = 0;

            setInterval(() => {
                index++;
                if (index >= slider.children.length) {
                    index = 0;
                }
                slider.style.transform = `translateX(-${index * 100}%)`;
            }, 3000); // Muda a imagem a cada 3 segundos
        });
    </script>
</body>

<?php
include_once "footer.php";
?>
