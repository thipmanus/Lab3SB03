<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login Screen Interaction</title>
</head>
<style>
  @import url('https://fonts.googleapis.com/css?family=Lato:300,400,700');

* {
  box-sizing: border-box;
}

html, 
body {
  margin: 0;
  padding: 0;
  height: 100%;
}

body {
  font-family: 'Lato', sans-serif;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
  background: url('https://images.wallpaperscraft.com/image/line_background_bright_stripes_44001_2560x1600.jpg');
  overflow: hidden;
}

input {
  font-family: inherit;
  -webkit-appearance: none;
  -moz-appearance: none;
  border: 0;
  border-bottom: 1px solid #AAAAAA;
  font-size: 16px;
  color: #000;
  border-radius: 0;
}

input[type="text"],
input[type="password"] {
  width: 100%;
  height: 40px;
}

button,
input:focus {
  outline: 0;
}

::-webkit-input-placeholder { 
  font-size: 16px;
  font-weight: 300;
  letter-spacing: -0.00933333em;
}

.form-group {
  position: relative;
  padding-top: 15px;
  margin-top: 10px;
}

label {
  position: absolute;
  top: 0;
  opacity: 1;
  -webkit-transform: translateY(5px);
          transform: translateY(5px);
  color: #aaa;
  font-weight: 300;
  font-size: 13px;
  letter-spacing: -0.00933333em;
  transition: all 0.2s ease-out;
}

input:placeholder-shown  + label {
  opacity: 0;
  -webkit-transform: translateY(15px);
          transform: translateY(15px);
}

.h1 {
  color: #fff;
  opacity: 0.8;
  font-size: 20px;
  font-weight: 400;
  text-transform: uppercase;
  letter-spacing: 0.2405em;
  transition: all 770ms cubic-bezier(0.51, 0.04, 0.12, 0.99);
  text-align: center;
  cursor: pointer;
  position: absolute;
  background-color: HotPink;
}

.open .h1 {
  -webkit-transform: translateX(200px) translateZ(0);
          transform: translateX(200px) translateZ(0);
}

.h2 {
  color: #000;
  font-size: 20px;
  letter-spacing: -0.00933333em;
  font-weight: 600;
  padding-bottom: 15px;
}

.login-wrapper {
  width: 960px;
  height: 540px;
  background-color: #fff;
  box-shadow: 0px 2px 50px rgba(0, 0, 0, 0.2);
  border-radius: 4px;
  overflow: hidden;
  position: relative;
}

.login-left {
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: all 770ms cubic-bezier(0.51, 0.04, 0.12, 0.99);
  overflow: hidden;
}

.login-left img {
  object-fit: cover;
  width: 100%;
  height: 100%;
  display: block;
  transition: all 770ms cubic-bezier(0.51, 0.04, 0.12, 0.99);
  object-position: left;
}

.open .login-left img {
  -webkit-transform: translateX(280px) translateZ(0);  
          transform: translateX(280px) translateZ(0);  
}

.open .login-left {
  -webkit-transform: translateX(-400px) translateZ(0);
          transform: translateX(-400px) translateZ(0);
} 

.login-right {
  padding: 40px;
  position: absolute;
  top: 0;
  right: 0;
  width: 400px;
  -webkit-transform: translateX(400px) translateZ(0);
          transform: translateX(400px) translateZ(0);
  transition: all 770ms cubic-bezier(0.51, 0.04, 0.12, 0.99);
}

.open .login-right {
  -webkit-transform: translateX(0px) translateZ(0);
          transform: translateX(0px) translateZ(0);
}

.button-area {
  display: flex;
  justify-content: space-between;
  margin-top: 30px;
}

.btn {
  font-family: inherit;
  -webkit-appearance: none;
  -moz-appearance: none;  
  background-color: transparent;
  border: none;
  border-radius: 2px;
  height: 40px;
  display: flex;
  padding: 0 35px;
  cursor: pointer;
  font-size: 16px;
  text-transform: uppercase;
  letter-spacing: -0.00933333em;
}

.btn-primary {
  color: #fff;
  background: linear-gradient(198.08deg, #B4458C 45.34%, #E281E7 224.21%);
  box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
}

.btn-secondary {
  color: #C359AA;  
}
</style>
<body>

  <!------------ Thanks Daniel Almeida for the reference  ----------->
  <!-- https://dribbble.com/shots/4027518-Login-screen-interaction -->

<div class="login-wrapper">
  <div class="login-left">
    <img src="https://images.wallpaperscraft.com/image/tree_fog_nature_beautiful_84257_1920x1080.jpg">
    <div class="h1">Enter send to E-mail</div>
  </div>
  <form action="/Send_to_email" method="POST">
  @csrf
  <div class="login-right">
    <div class="h2">You're welcome</div>
    <div class="h2">Thipmanus rattananupong 5910110148</div>
    <div class="form-group">
      <input name = "Subject" type="text"  placeholder="Subject">
      <label for="Subject">Subject</label>    
    </div>
    <div class="form-group">
      <input name = "Email" type="text"  placeholder="Email">
      <label for="Email">Email</label>    
    </div>
    <textarea class="form-group" name="Messager" cols="48" rows="8" id="Messager" placeholder="Messager"></textarea>
    <div class="button-area">
      <button class="btn btn-primary">Send</button>
    </div>
  </div>
  </form>
</div>
  
  

    <script>
        var openLoginRight = document.querySelector('.h1');
        var loginWrapper = document.querySelector('.login-wrapper');

        openLoginRight.addEventListener('click', function(){
        loginWrapper.classList.toggle('open'); 
        });
    </script>




</body>

</html>
