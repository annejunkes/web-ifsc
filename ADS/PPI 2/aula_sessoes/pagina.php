<?php
$tema = $_COOKIE['tema'] ?? 'claro';

if ($tema !== 'claro' && $tema !== 'escuro') {
    $tema = 'claro';
}

$classeBody = $tema === 'escuro'
    ? 'escuro'
    : 'claro';
?>

<body class="<?php
  echo htmlspecialchars($classeBody, ENT_QUOTES, 'UTF-8');
?>">
  <h1>Preferência de tema com PHP</h1>

  <p>Tema atual: <?php
    echo htmlspecialchars($tema, ENT_QUOTES, 'UTF-8');
  ?></p>
  <a href="tema.php?tema=claro">Tema claro</a>
  |
  <a href="tema.php?tema=escuro">Tema escuro</a>
</body>
</html>