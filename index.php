<?php
declare(strict_types=1);

ini_set('display_errors', '1');
header('Content-Type: text/html; charset=UTF-8');

$dbHost = getenv('DB_HOST') ?: 'mysql';
$dbUser = getenv('DB_USER') ?: 'root';
$dbPass = getenv('DB_PASSWORD') ?: 'root';
$dbName = getenv('DB_NAME') ?: 'meubanco';
$dbPort = (int) (getenv('DB_PORT') ?: 3306);

$hostName = gethostname() ?: 'unknown-host';
$insertMessage = '';
$dbError = '';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $connection = new mysqli($dbHost, $dbUser, $dbPass, $dbName, $dbPort);
    $connection->set_charset('utf8mb4');

    $studentId = random_int(1, 999);
    $randomValue = strtoupper(substr(bin2hex(random_bytes(4)), 0, 8));

    $stmt = $connection->prepare(
        'INSERT INTO dados (AlunoID, Nome, Sobrenome, Endereco, Cidade, Host) VALUES (?, ?, ?, ?, ?, ?)'
    );
    $stmt->bind_param(
        'isssss',
        $studentId,
        $randomValue,
        $randomValue,
        $randomValue,
        $randomValue,
        $hostName
    );
    $stmt->execute();

    $insertMessage = 'Novo registro criado com sucesso.';
    $stmt->close();
    $connection->close();
} catch (Throwable $exception) {
    http_response_code(500);
    $dbError = $exception->getMessage();
}
?>
<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Toshiro Shibakita - Microsservicos com Docker</title>
  <style>
    :root {
      color-scheme: light;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }
    body {
      margin: 0;
      min-height: 100vh;
      display: grid;
      place-items: center;
      background: linear-gradient(120deg, #f4f7ff, #f8fff4);
      color: #1f2937;
    }
    .card {
      width: min(92vw, 560px);
      background: #ffffff;
      border: 1px solid #dbe3ef;
      border-radius: 16px;
      padding: 24px;
      box-shadow: 0 12px 35px rgba(15, 23, 42, 0.08);
    }
    h1 {
      margin-top: 0;
      font-size: 1.35rem;
    }
    .ok {
      color: #0f766e;
      font-weight: 600;
    }
    .error {
      color: #b91c1c;
      font-weight: 600;
    }
    .meta {
      margin-top: 10px;
      font-size: 0.95rem;
    }
    code {
      background: #f3f4f6;
      padding: 2px 6px;
      border-radius: 6px;
    }
  </style>
</head>
<body>
  <section class="card">
    <h1>Projeto Toshiro Shibakita</h1>
    <p>Versao atual do PHP: <code><?= htmlspecialchars(phpversion(), ENT_QUOTES, 'UTF-8') ?></code></p>
    <p>Container host: <code><?= htmlspecialchars($hostName, ENT_QUOTES, 'UTF-8') ?></code></p>

    <?php if ($dbError === ''): ?>
      <p class="ok"><?= htmlspecialchars($insertMessage, ENT_QUOTES, 'UTF-8') ?></p>
    <?php else: ?>
      <p class="error">Falha ao conectar ou gravar no banco.</p>
      <p class="meta"><code><?= htmlspecialchars($dbError, ENT_QUOTES, 'UTF-8') ?></code></p>
    <?php endif; ?>
  </section>
</body>
</html>
