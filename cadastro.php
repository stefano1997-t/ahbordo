<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<?php  

include_once("conexao.php");

?>


<!DOCTYPE html>


<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Cadastro</title>
      <link rel="stylesheet" href="CSS/style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



<style type="text/css"> 
   html, body {
      margin: 0;
      padding: 0;
      width: 100%;
}

body {
      font-family: "Helvetica Neue",sans-serif;
      font-weight: lighter;
}

header {
      width: 100%;
      height: 100vh;
      background-color: white no-repeat 50% 50%;
      background-size: cover;
      position: fixed;

}

.content {
      width: 94%;
      margin: 4em auto;
      font-size: 20px;
      line-height: 30px;
      text-align: justify;
}

.logo {
      line-height: 60px;
      position: fixed;
      float: left;
      margin: 16px 46px;
      color: black;
      font-weight: bold;
      font-size: 20px;
      letter-spacing: 2px;
}

nav {
      position: fixed;
      width: 100%;
      line-height: 60px;
}

nav ul {
      line-height: 60px;
      list-style: none;
      background: rgba(0, 0, 0, 0);
      overflow: hidden;
      color: #fff;
      padding: 0;
      text-align: right;
      margin: 0;
      padding-right: 40px;
      transition: 1s;

}

nav.black ul {
      background: white;
}

nav ul li {
      display: inline-block;
      padding: 16px 40px;;
}

nav ul li a {
      text-decoration: none;
      color: black;
      font-size: 16px;
}

.menu-icon {
      line-height: 60px;
      width: 100%;
      background: #000;
      text-align: right;
      box-sizing: border-box;
      padding: 15px 24px;
      cursor: pointer;
      color: #fff;
      display: none;
}

@media(max-width: 786px) {

      .logo {
            position: fixed;
            top: 0;
            margin-top: 16px;
      }

      nav ul {
            max-height: 0px;
            background: #000;
      }

      nav.black ul {
            background: #000;
      }

      .showing {
            max-height: 34em;
      }

      nav ul li {
            box-sizing: border-box;
            width: 100%;
            padding: 24px;
            text-align: center;
      }

      .menu-icon {
            display: block;
      }

}

.row
{
  margin-top: 40px;

}

.blue {
    color: #2CAFFD;
}

#inputDado {
    border-radius: 30px;
    border: 1px solid #000;
} 

</style>
<!------ estilo nav-bar e formulário  ---------->

   </head>
   <body>

     
    
      <div class="wrapper">
         <header>
            <nav>
               <div class="menu-icon">
                  <i class="fa fa-bars fa-2x"></i>
               </div>
               <div class="logo">
                  AH BORDO
               </div>
               <div class="menu">
                  <ul>
                     <li><a href="../index.html">Iníco</a></li>
                     <li><a href="../pacotes.html">Pacotes</a></li>
                     <li><a href="login.html">Login</a></li>
                     <li><a href="../blog.html">Blog</a></li>
                     <li><a href="../contato.html">Contato</a></li>
                     <li><a href="../sobrenos.htm">Sobre nós</a></li>
                  </ul>
               </div>
            </nav>
<!------ conteudo nav-bar ---------->


  <section id="form"><!------ inicio conteudo formulario ---------->
    
     <div class="container pt-5 pb-5">
       <div class="row">
         <div class="col-md-12 text-center">
           <h4 class="text-uppercase">
          
             <span class="blue"> faça seu cadastro</span>
           </h4>
          
           <p>É muito importante que você preencha todos os campos para realizar o seu cadastro</p>
          
          <div class="row">
            <div class="col-md-12">
              
                  <div class="form-row">
                    <div class="form-group col-md-6">
                     <h5 class="text-left">Dados cadastrais</h5>
                     <form method="POST" action="processa.php">
                      <input type="name" name="nome" class="form-control" id="inputDado" placeholder="Seu nome">
                    </div>
                    <div class="form-group col-md-6">
                    <h5 class="text-left">Dados de acesso</h5>
                      <input type="email" name="email"class="form-control" id="inputDado" placeholder="Seu e-mail">
                    </div>
                    <div class="form-group col-md-3">
                      <input type="cpf" name="cpf" class="form-control" id="inputDado" placeholder="Seu cpf">
                    </div>
                    <div class="form-group col-md-3">
                      <input type="age" name="idade"class="form-control" id="inputDado" placeholder="Sua idade">
                    </div>
                    <div class="form-group col-md-6">
                      <input type="password" name="senha" class="form-control" id="inputDado" placeholder="Senha">
                    </div>
                    <div class="form-group col-md-1">
                      <input type="ddd" name="ddd" class="form-control" id="inputDado" placeholder="DDD">
                    </div>
                    <div class="form-group col-md-3">
                      <input type="number" name="telefone" class="form-control" id="inputDado" placeholder="Seu telefone">
                    </div>
                    <div class="form-group col-md-2">
                      <input type="cep" name="cep" class="form-control" id="inputDado" placeholder="Seu cep">
                    </div>
                    <div class="form-group col-md-6">
                      <input type="password" name="confsenha" class="form-control" id="inputDado" placeholder="Confirme a senha">
                    </div>

              </div>
                 
                  <h5>Endereço</h5>
                  
                  <div class="form-group">
                    <label for="inputAddress"> Rua </label>
                    <input type="text" name="rua" class="form-control" id="inputAddress" placeholder="nome/cep da rua">
                  </div>
                  <div class="form-group">
                    <label for="inputAddress2"> Bairro </label>
                    <input type="text" name="bairro" class="form-control" id="inputAddress2" placeholder="seu bairro">
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="inputCity"> Cidade </label>
                      <input type="text" name="cidade" class="form-control" id="inputCity" placeholder="sua cidade">
                    </div>
                    <div class="form-group col-md-2">
                      <label for="inputZip">Número</label>
                      <input type="text" name="numero"class="form-control" id="inputZip" >
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputState">Complemento</label>
                      <select id="inputState" class="form-control">
                        <option selected>Sim</option>
                        <option selected>Não</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="inputZip">Complemento</label>
                      <input type="text" name="complemento" class="form-control" id="inputZip" >
                    </div>
                  </div>
                  
                  <button type="submit" class="btn btn-primary">cadastrar</button>
           </div>
          </div>
        </div>
      </div>
    </div>

    </form>
  </section><!------ fim do formularip ---------->

         </header>
       

         <script> 

$(document).ready(function() {
  $(".menu-icon").on("click", function() {
  $("nav ul").toggleClass("showing");
    });
      });

      // Efeito rolagem

      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('black');
            }

            else {
                  $('nav').removeClass('black');
            }
      })
</script> <!------ script nav-bar ---------->
   </body>
</html>