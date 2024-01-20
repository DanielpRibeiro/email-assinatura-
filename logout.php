<?php
// Inicia a sessão
session_start();

// Destroi todas as variáveis de sessão
session_destroy();

// Redireciona de volta para a página de login
header("Location: login.php");
exit();
?>
