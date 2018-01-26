<!DOCTYPE html>
<html lang="en" >

<head>

  <meta charset="UTF-8">
  <link rel="shortcut icon" type="image/x-icon" href="./images-eaa732349046d8416e00a9dec26eb7fd347590fbced3/icons/favicon.ico" />
  <title>Bienvenido a Caffee</title>
  <link rel='stylesheet prefetch' href='./slick.css'>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand:500">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-green.min.css" />
  

<style>
      /* @import url('https://fonts.googleapis.com/css?family=Roboto:100,300,400,700'); */

@import url('https://fonts.googleapis.com/css?family=Raleway:200,300,400,700');

/************ Pagina principal **************/
*{
  margin: 0;
  padding: 0;
  outline: none;
  box-sizing: border-box;
  /*font-family: 'Roboto', sans-serif; */
  font-family: 'Quicksand', 'Quicksand';
}

body{background: #222;}

.main-box{
  position: absolute;
  display: flex;
  width: 98%;
  height: 650px;
  left: 1%;
  top: 1.5%;
  overflow: hidden;
  -webkit-box-shadow: 0px 0px 48px -2px rgba(0,0,0,0.77);
  -moz-box-shadow: 0px 0px 48px -2px rgba(0,0,0,0.77);
  box-shadow: 0px 0px 48px -2px rgba(0,0,0,0.77);
  background-color:#000;
}

.lined-link{
  position: relative;
  text-decoration: none;
  transition: all 0.2s linear
}

.lined-link:hover{
  opacity: 0.5
}

.lined-link:after {
  position: absolute;
  content: "";
  width: 100%;
  left: 0;
  bottom: -2px;
  border: none;
  border-bottom: 1px solid #fff;
}


/************ Contenedor deslizante **************/
.slider-cont,
.form-cont{
  width: 60%;
  height: 100%;
  float: left;
}

.slick-slide,
.slick-slider{
  width: 100%;
  height: 100% 
}

.clear-fix{
  clear: both;
}

.slick-dots {
  position: absolute;
  bottom: 10px;
  display: block;
  width: 100%;
  padding: 0px;
  list-style: none;
  text-align: center;
}

.slick-dots li {
  position: relative;
  display: inline-block;
  width: 20px;
  height: 20px;
  margin: 0 10px;
  padding: 0;
  cursor: pointer;
}
.slick-dots li button {
  font-size: 0;
  display: block;
  width: 20px;
  height: 5px;
  padding: 1px;
  cursor: pointer;
  border: 0;
  outline: none;
  background: #111;
  box-shadow: 0 0 10px #1b1b1b;
  transition: all 0.3s ease;
}

.slick-dots li.slick-active button{
  background-color: #fff;
  transform: scale(1.6);
  box-shadow: 0 0 10px #1b1b1b
}

.img-txt{
  position: relative;
}

.img-layer {
  position: absolute;
  width: 100%;
  height: 100%;
  background: rgba(47, 63, 85, 0.65);
}

.img-txt h1{
  position: absolute;
  display: block;
  top: 50%;
  color: #fff;
  width: 100%;
  padding: 50px 0;
  font-size: 45px;
  font-weight: 100;
  text-align: center;
  transform: translateY(-50%);
  background-color: transparent;
}

.logo{
  padding: 30px; 
  position: absolute; 
  z-index: 99; 
  width: 110px; 
  height: 110px; 
  max-height: 110px;
  max-width: 110px; 
}

h3{
  position: absolute;
  z-index: 99;
  padding: 12px 90px;
  color:#FFF;
  font-size: 30px;
}

/************ Contenedor de formulario **************/

/*.top-buttons {
  position: relative;
  display: block;
  width: 100%;
  height: 15%;
  padding: 25px;
  text-align: right;
}

.top-buttons button {
  color: #cacaca;
  border: none;
  width: 95px;
  margin: -2px;
  padding: 10px;
  font-size: 16px;
  font-weight: 300;
  background: #4c5c72;
  cursor: pointer;
}


.top-active-button {
  color: #fff !important;
  background-color:#0097A7 !important;
  transition: all 0.3s ease;
}*/

.form{
  width: 100%;
  height: 85%;
  padding: 30px 50px;
}

.form form {
  width: 100%;
  height: 100%;
}

.form form 
lable,
input[type="text"],
input[type="email"],
input[type="password"]
 {
  display: block;
}

.form form lable {
  color: #fff;
  font-size: 14px;
  font-weight: 300;
  margin: -5px 0;
}

.form form 
input[type="text"],
input[type="email"], 
input[type="password"] {
  color: #fff;
  width: 100%;
  border: none;
  font-size: 16px;
  font-weight: 200;
  margin-bottom: 45px;
  padding: 7px 0px 10px 0px;
  background: transparent;
  border-bottom: 1px solid #333;
}

.form form input::placeholder{
  color: #cecece;
}

.form form a {
  color: #fff;
}

input.form-btn {
  color: #000;
  font-size: 18px;
  font-weight: 300;
  padding: 10px 22px;
  margin-right: 20px;
  margin-top: 100px;
  border: none;
  cursor: pointer;
  transition: all 0.3s linear;
  box-shadow: 0 0 40px rgba(0, 0, 0, 0.55);
  background-color:#fff;
}

input.form-btn:hover{
  box-shadow: none
}

/*.form-signin{
  display: none;
  margin-top: 120px;
}*/


/*  ESTILOS DE CHECKBOX  */

.label-checkbox{
    color:#fff;
    padding: 5px 6px 5px 34px;
    display: inline-block;
    position: absolute;
    font-size: 1em;
    border-radius: 3px;
    cursor: pointer;
    -webkit-transition: all 0.3s ease ;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
    float: left;

}

.checkbox-formulario{
  display: none;
}

.label-checkbox:hover{
  background: rgba(61, 153, 112, 0.1);
}

.label-checkbox:before{
  content: "";
  width: 17px; height: 17px;
  display: inline-block;
  background:none;
  border:3px solid #fff;
  border-radius: 0px;
  position: absolute;
  left: 3px;
  top:3px;
}

#checkbox1:checked + .label-checkbox{
  padding: 5px 15px;
  background-color: #3D9970;
  color:#fff;
  border-radius: 2px;
}


#checkbox1:checked + .label-checkbox:before{
  display: none;
}

    </style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>

<body translate="no" >

  <div class="main-box">

  <div class="slider-cont">
    <img class="logo" src="./images-eaa732349046d8416e00a9dec26eb7fd347590fbced3/logo.png">
    <h3>Caffee</h3>
    <div class="signup-slider">
      <div class="img-txt">
        <div class="img-layer"></div>
        <h1>Bienvenido a Caffee</h1>
        <img src="./images-eaa732349046d8416e00a9dec26eb7fd347590fbced3/uno-com.jpg"/>
      </div>
      <div class="img-txt">
        <div class="img-layer"></div>
        <h1>Conecta con tus amigos</h1>
        <img src="./images-eaa732349046d8416e00a9dec26eb7fd347590fbced3/dos-com.jpg"/>
      </div>
      <div class="img-txt">
        <div class="img-layer"></div>
        <h1>Entérate de lo que pasa</h1>
        <img src="./images-eaa732349046d8416e00a9dec26eb7fd347590fbced3/tres-com.jpg"/>
      </div>
    </div>
  </div>
  
  
  <div class="form-cont">

    <!--<div class="top-buttons">
      <button href="registro.html" class="to-signup top-active-button">
        Regístrate
      </button>
      
      <button class="to-signin">
        Ingresa
      </button>
    </div>-->

    <div class="form form-signup" style="margin-top: 200px;">
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="POST" class="formulario" name="login">
        <lable></lable>
        <input type="text" name="username" id="username" 
               placeholder="Nombre de usuario o correo electrónico" required autofocus=""/>
        <lable></lable>
        <input type="password" name="password" id="password" 
               placeholder="Contraseña" required/>

               <?php if (!empty($errores)):?>

                 <div class="error" >
                  
                  <ul style="list-style: none; color:#ff0000; margin-top:-30px">
                    
                    <?php echo $errores; ?>

                  </ul>

                 </div>


              <?php endif;?>

               <div class="checkbox">
        <input class="checkbox-formulario" type="checkbox" name="checkbox" id="checkbox1" >
        <label class="label-checkbox" for="checkbox1">Recordar contraseña</label>
        </div>

        

        <input type="submit" onclick="login.submit()" 
               class="form-btn"
               value="Ingresa" style="position: static;" />
        <a href="./signup.php" class="lined-link to-signup-link">Crea una nueva cuenta</a>




      </form>
    </div>
    
    <!--<div class="form form-signup"><div class="form form-signin">
      <form action="" style="margin-top: -15px">
        <lable></lable>
        <input type="text" 
               placeholder="Nombre de Usuario" required autofocus="">
        <lable></lable>
        <input type="email" 
               placeholder="Correo electrónico" required>
        <lable></lable>
        <input type="password" 
               placeholder="Contraseña" required>
        <lable></lable>
        <input type="password" 
               placeholder="Confirma tu contraseña" required>

        <div class="checkbox">
        <input class="checkbox-formulario" type="checkbox" name="checkbox" id="checkbox1" >
        <label class="label-checkbox" for="checkbox1">Acepto los  <a href="#">términos y condiciones</a></label>
        </div>
               

        <input type="submit"
               class="form-btn"
               value="Regístrate"/>
        <a href="#" class="lined-link to-signin-link">Ya tengo cuenta</a>

      </form>
    </div>-->
  </div>
  
</div>

  <script src="./stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script src='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js'></script>

  

    <script >
      $(document).ready(function(){
  $('.signup-slider').slick({
    dots: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 3000
  });

  $("img").height($(".main-box").height());

  $(".to-signin").on("click", function () {
    $(this)
      .addClass("top-active-button")
      .siblings()
      .removeClass("top-active-button");
    $(".form-signup").slideUp(200);
    $(".form-signin").slideDown(200);
  });

  

  $(".to-signin-link").on("click", function () {
    $(".to-signin")
      .addClass("top-active-button")
      .siblings()
      .removeClass("top-active-button");
    $(".form-signup").slideUp(200);
    $(".form-signin").slideDown(200);
  });

  
});
      //# sourceURL=pen.js
    </script>

</body>

</html>
 