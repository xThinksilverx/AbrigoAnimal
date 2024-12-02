<?php
$title = "Brecho Abrigo Animal";
include_once "header.php";
?>

<body>
    <div class="content">
        <!-- Seção da Logo -->
        <div class="logo-section">
            <div class="logo-circle"></div>
            <h1>Abrigo Animal</h1>
            <p class="subtitle">Brechó</p>
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
