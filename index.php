<?php
// Inicia a sessão
session_start();

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica as credenciais (neste exemplo, usuário: admin, senha: senha123)
    $usuario_correto = "xxxxxxx";
    $senha_correta = "xxxxxxxx";

    // Verifica se as credenciais correspondem
    if ($_POST["usuario"] == $usuario_correto && $_POST["senha"] == $senha_correta) {
        // Credenciais válidas, inicia a sessão
        $_SESSION["usuario"] = $_POST["usuario"];
        header("Location: main/assinatura.php");
        exit();
    } else {
        $erro = "Credenciais inválidas. Tente novamente.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- brr -->

<!-- sobe pro git dsgç -->
<!-- tmnv -->

    <?php
    if (isset($erro)) {
        echo "<p style='color:red;'>$erro</p>";
    }
    ?>

   
    <div class="form-card">
      
      <div class="form-card-2">
          
          <form class="form" method="post" action="">
            
                <img src="main/Logo Pacto LLC Branca.png" width="150" alt="">
          
              <h2 style="margin-top:0px" class="title-login">Login</h2>
               
              <div class="field">
           
                  <span class="input-icon icon icon-user-1"></span>
                  <input type="text" name="usuario" class="input-field" placeholder="Usuario" autocomplete="off">
              
              </div>

              <div class="field">
                  
                  <span class="input-icon icon icon-locked"></span>
                  <input type="password" name="senha" class="input-field" placeholder="Senha">
              
              </div>

              <div class="box-btn">
                  
                  <button type="submit" class="btn-login">Entrar</button>
              
              </div>
                                      
          </form>
          
      </div>

  </div><!--form-card-->

</body>
</html>
