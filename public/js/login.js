const d=document;
const usuario = d.getElementById("usuario"),
    contraseña = d.getElementById("contraseña");

const campoCaptcha=d.getElementById("campoCaptcha");
const btnCaptcha=d.getElementById("btnCaptcha"),
      btnEnviar=d.getElementById("btnEnviar"),
      campoError=d.getElementById("error");
let valorCaptcha=false;

btnCaptcha.addEventListener("click",(e)=>{
  e.preventDefault();
  const template = `
  <img src="./public/img/git-cargando.gif" width="40px">
  <p>No soy un robot</p>
  <img src="./public/img/logo-captcha.png" width="40px">
  `;
  campoCaptcha.innerHTML=template;
  const temporizador = setTimeout(() => {
    campoCaptcha.innerHTML=`
    <img src="./public/img/logo-aspa-verde.png" width="30px">
    <p>No soy un robot</p>
    <img src="./public/img/logo-captcha.png" width="40px">
    `;
    valorCaptcha=true;
  }, 2000 || 3000);  
  //clearInterval(temporizador);
});

btnEnviar.addEventListener("click", (e) => {
  if(usuario.value=="" || contraseña.value==""){
    e.preventDefault()
    campoError.innerHTML=`
    <p>Ingrese todo los campos</p>
    `;
  }
  else if(!valorCaptcha){
    e.preventDefault();
    campoError.innerHTML=`
    <p>Acepte captcha</p>
    `;
  }
})

