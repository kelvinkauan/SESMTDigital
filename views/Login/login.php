<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/../SESMTDigital/views/Login/Style/login.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>SESMT Digital</title>
</head>

<body>  
    <div class= "circle"></div>
       
    <div class="principal"><img  src="/../SESMTDigital/views/imagens/SESMTDigital-logo.png" alt=""></div>
    <div class="fundo"> <img src="/../SESMTDigital/views/imagens/logBranca_SESMT.png" alt=""></div>  
     <div class="container-log">
        <form action="../Controller/controller.php?action=PaginaPrincipal" method="POST">   
        <div class="h3"><h3>Sign in</h3></div>
        <label for="login">Login</label>
        <div >
            <input class="log" type="email"  id="login"  >
        </div>
        <label for="senha">Senha</label>
        <div >
            <input class="log" type="password" id="senha">
        </div>
        <a href="#"><span>Esqueceu a senha?</span></a>
        <br>
        <br>
        <div>
        <input  class="btn-log" type="submit" value="Entrar">
     </div>
     </form>
</body>

</html>