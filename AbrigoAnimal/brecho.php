<?php
$title = "Brechó";
include_once "header.php"; // Inclui o cabeçalho do site

// Conexão com o banco de dados
include_once "config/db.php"; // Aqui você inclui seu arquivo de conexão com o banco de dados

// Inicializando as variáveis de filtro
$cor = isset($_GET['cor']) ? $_GET['cor'] : '';
$tamanho = isset($_GET['tamanho']) ? $_GET['tamanho'] : '';
$min_preco = isset($_GET['min_preco']) ? $_GET['min_preco'] : '';
$max_preco = isset($_GET['max_preco']) ? $_GET['max_preco'] : '';

// Consultas para buscar as cores e tamanhos distintos no banco de dados
$corQuery = "SELECT DISTINCT cor_principal FROM roupas";
$tamanhoQuery = "SELECT DISTINCT tamanho FROM roupas";

// Preparar e executar as consultas
$corStmt = $pdo->query($corQuery);
$tamanhoStmt = $pdo->query($tamanhoQuery);

// Construção da query com filtros
$query = "SELECT * FROM roupas WHERE 1=1"; // Começa com um WHERE genérico

// Adiciona filtros se existirem
if ($cor) {
    $query .= " AND cor_principal = :cor";
}

if ($tamanho) {
    $query .= " AND tamanho = :tamanho";
}

if ($min_preco && $max_preco) {
    $query .= " AND preco BETWEEN :min_preco AND :max_preco";
} elseif ($min_preco) {
    $query .= " AND preco >= :min_preco";
} elseif ($max_preco) {
    $query .= " AND preco <= :max_preco";
}

// Preparando a query
$stmt = $pdo->prepare($query);

// Vinculando parâmetros dinamicamente
if ($cor) {
    $stmt->bindParam(':cor', $cor);
}

if ($tamanho) {
    $stmt->bindParam(':tamanho', $tamanho);
}

if ($min_preco && $max_preco) {
    $stmt->bindParam(':min_preco', $min_preco);
    $stmt->bindParam(':max_preco', $max_preco);
} elseif ($min_preco) {
    $stmt->bindParam(':min_preco', $min_preco);
} elseif ($max_preco) {
    $stmt->bindParam(':max_preco', $max_preco);
}

// Executando a consulta
$stmt->execute();
?>

<body>
    <!-- Menu -->
    <?php include_once "menu.php"; ?>

    <div class="brecho-container">
        <h1>Brechó Abrigo Animal</h1>

        <!-- Subtítulos (Acima dos filtros) -->
        <div class="subtitulos">
            <h2>Se interessou? Basta acessar nosso <a href="https://www.instagram.com/brechoabrigoanimaloficial/" target="_blank">Insta</a> e mandar uma mensagem!</h2>
        </div>

        <!-- Formulário de Filtro -->
        <form method="GET" action="brecho.php">
            <div class="filtro-container">
                <label for="cor">Cor:</label>
                <select name="cor" id="cor">
                    <option value="">Selecione</option>
                    <?php
                    // Exibindo as opções de cor disponíveis no banco
                    while ($corRow = $corStmt->fetch()) {
                        echo "<option value='{$corRow['cor_principal']}' " . ($cor == $corRow['cor_principal'] ? 'selected' : '') . ">{$corRow['cor_principal']}</option>";
                    }
                    ?>
                </select>

                <label for="tamanho">Tamanho:</label>
                <select name="tamanho" id="tamanho">
                    <option value="">Selecione</option>
                    <?php
                    // Exibindo as opções de tamanho disponíveis no banco
                    while ($tamanhoRow = $tamanhoStmt->fetch()) {
                        echo "<option value='{$tamanhoRow['tamanho']}' " . ($tamanho == $tamanhoRow['tamanho'] ? 'selected' : '') . ">{$tamanhoRow['tamanho']}</option>";
                    }
                    ?>
                </select>

                <label for="min_preco">Preço Mínimo:</label>
                <input type="number" name="min_preco" id="min_preco" value="<?= $min_preco ?>" step="0.01">

                <label for="max_preco">Preço Máximo:</label>
                <input type="number" name="max_preco" id="max_preco" value="<?= $max_preco ?>" step="0.01">

                <button type="submit">Filtrar</button>
                <!-- Botão para limpar os filtros -->
                <button type="reset" class="limpar-btn" onclick="window.location.href='brecho.php';">Limpar Filtros</button>
            </div>
        </form>

        <!-- Exibição das roupas -->
        <div class="roupas-list">
            <?php
            if ($stmt->rowCount() > 0) {
                while ($row = $stmt->fetch()) {
                    echo "
                        <div class='roupa'>
                            <img src='assets/roupas/{$row['imagem']}' alt='{$row['nome']}' />
                            <h3>{$row['nome']}</h3>
                            <p>Cor: {$row['cor_principal']}</p>
                            <p>Tamanho: {$row['tamanho']}</p>
                            <p>Preço: R$ {$row['preco']}</p>
                        </div>
                    ";
                }
            } else {
                echo "<p>Não há roupas disponíveis no momento.</p>";
            }
            ?>
        </div>
    </div>

    <!-- Footer -->
    <?php include_once "footer.php"; ?>
</body>

<?php
include_once "footer.php"; // Inclui o rodapé do site
?>
