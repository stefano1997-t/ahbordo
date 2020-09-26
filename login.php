
<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="UTF-8">

      <title>login / cadastro</title>
      
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="CSS/style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<link rel="stylesheet" type="text/css" href="../estilos/bootstrap/css/login.css"> 
<!-- estilo CSS do Login -->
   

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


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
      background: url(https://png.pngtree.com/thumb_back/fw800/background/20190223/ourmid/pngtree-black-gold-background-golden-streamer-commendation-assembly-background-material-goldgolden-streameraward-image_73706.jpg) no-repeat 50% 50%;
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
      color: white;
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
      color: white;
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
      color: black;
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

</style>
<!------ estilo nav-bar ---------->
   
   </head>
   <body>
    
      <div class="wrapper"> 

         <header>
            <nav> <!------ inicio conteudo nav-bar ---------->
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
                     <li><a href="#">Login</a></li>
                     <li><a href="../blog.html">Blog</a></li>
                     <li><a href="../contato.html">Contato</a></li>
                     <li><a href="../sobrenos.html">Sobre nós</a></li>
                  </ul>
               </div>
            </nav> 
    <!------ inicio conteudo nav-bar ---------->
  

    <!------ inicio conteudo login ---------->
  <div class="cotn_principal"> 
  <div class="cont_login">
<div class="cont_info_log_sign_up">
      <div class="col_md_login">
<div class="cont_ba_opcitiy">
        
        <h2>LOGIN</h2>  
  <p></p> 
  <button class="btn_login" onclick="cambiar_login()">LOGIN</button>
  </div>
  </div>
<div class="col_md_sign_up">
<div class="cont_ba_opcitiy">
  <h2>CADASTRAR</h2>

  
  <p></p>

  <button class="btn_sign_up" onclick="cambiar_sign_up()">CADASTRAR </button>
</div>
  </div>
       </div>

   
    <div class="cont_centrar">
    <div class="cont_back_info">
       
       <div class="cont_img_back_grey">
       <img src="https://www.gtagangwars.de/suite/images/styleLogo-6bd77433ddf78bd8477ea7306e804f677bc925d0.png" alt="" />
       </div>
       
    </div>
<div class="cont_forms" >
    <div class="cont_img_back_">
       <img src="https://www.gtagangwars.de/suite/images/styleLogo-6bd77433ddf78bd8477ea7306e804f677bc925d0.png" alt="" />
       </div>
       
 <div class="cont_form_login">
<a href="#" onclick="ocultar_login_sign_up()" ><i class="material-icons"></i></a>
   <h2>LOGIN</h2>
 <input type="text" placeholder="Nome do usuário" />
<input type="password" placeholder="senha" />
<button class="btn_login" onclick="cambiar_login()">LOGIN</button>
  </div>
   
   <div class="cont_form_sign_up">
<a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons"></i></a>
     <h2>CADASTRAR</h2>
<input type="text" placeholder="Nome do usuário" />
<input type="password" placeholder="Senha" />
<input type="password" placeholder="Confirmar senha" />
<a href="./cadastro.php"><button class="btn_sign_up" onclick="cambiar_sign_up()">CADASTRAR</button></a>

  </div>

    </div>
    
  </div>
 </div>



         </div>
      </div> 
    <!------ fim conteudo login ---------->

         </header>
         <script>
    /* ------------------------------------ Clique em Login e Cadastre-se para mudar e ver o efeito
---------------------------------------
*/

function cambiar_login() {
  document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_login";  
document.querySelector('.cont_form_login').style.display = "block";
document.querySelector('.cont_form_sign_up').style.opacity = "0";               

setTimeout(function(){  document.querySelector('.cont_form_login').style.opacity = "1"; },400);  
  
setTimeout(function(){    
document.querySelector('.cont_form_sign_up').style.display = "none";
},200);  
  }

function cambiar_sign_up(at) {
  document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_sign_up";
  document.querySelector('.cont_form_sign_up').style.display = "block";
document.querySelector('.cont_form_login').style.opacity = "0";
  
setTimeout(function(){  document.querySelector('.cont_form_sign_up').style.opacity = "1";
},100);  

setTimeout(function(){   document.querySelector('.cont_form_login').style.display = "none";
},400);  


}    



function ocultar_login_sign_up() {

document.querySelector('.cont_forms').className = "cont_forms";  
document.querySelector('.cont_form_sign_up').style.opacity = "0";               
document.querySelector('.cont_form_login').style.opacity = "0"; 

setTimeout(function(){
document.querySelector('.cont_form_sign_up').style.display = "none";
document.querySelector('.cont_form_login').style.display = "none";
},500);  
  
  }

$(document).ready(function() { 
  $(".menu-icon").on("click", function() {
  $("nav ul").toggleClass("showing");
    });
      });

      // Efeito rolagem nav-bar

      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('black');
            }

            else {
                  $('nav').removeClass('black');
            }
      })
</script>

   
   </body>
</html>