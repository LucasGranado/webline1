<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css" >
    <title>WEB| Web Lines Sistemas </title>
</head>

<body>

    <div class="barranav">
        <div class="nav-logo">
            <a><img src="logo300x85.png"></a>
        </div>
        <!--Logo-->
        <div class="nav-menu">
            <ul>
                <li><a href="#">INSTITUCIONAL</a></li>
                <li><a href="#">SOLUÇÕES</a></li>
                <li><a href="#">REQUISIÇÃO</a></li>
                <li><a href="#">CONTATO</a></li>
                <li><a href="#">SAC</a></li>
                <li style="border: none;"><a href="#">TRABALHE CONOSCO</a></li>
            </ul>
        </div>
        <!--Menu-->
    </div>
    <!--Barra de navegação-->

    <div class="container">
    
    <div class="cabecalho">
        <h1>Cadastro de aluno</h1>
        <hr>    
    </div><!--Cabeçalho-->
    
    <div class="formulario">
        <form action="#">
            <div class="campo">
                <label for="nome"><strong>Nome</strong></label>
                <input type="text" id="nome" placeholder="Digite seu nome">
            </div>

            <div class="campo">
                <label for="ra"><strong>R.A</strong></label>
                <input type="text" id="ra" placeholder="Digite o r.a">
            </div>

            <div class="campo">
                <label for="email"><strong>Email</strong></label>
                <input type="email" id="ra" placeholder="Digite o seu e-mail">
            </div>

            <div class="campo">
                <label for="turma"><strong>Turma</strong></label>
                <select  id="turma">
                    <option disabled selected>Selecione sua turma</option>
                    <option>Turma A</option>
                    <option>Turma B</option>
                    <option>Turma C</option>
                </select>
            </div>
            
        </form>       
        <button type="submit" class="btn">Enviar</button>        
    </div><!--Formulario-->

</body>


</html>