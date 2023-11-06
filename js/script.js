
$(document).ready(function () {
  $('.banner').slick({
    slidesToShow: 1,
    dots: true,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
  });
});

$('.galeria').slick({
  centerMode: true,
  centerPadding: '5%',
  slidesToShow: 7,
  responsive: [
    {
      breakpoint: 1001,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 7
      }
    },
    {
      breakpoint: 601,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 7
      }
    }
  ]
});

new WOW().init();

window.onscroll = function () {
  let top = window.scrollY;
  if (top > 140) {
    document.getElementById("menufixo").classList.add("menufixo")
  } else {
    document.getElementById("menufixo").classList.remove("menufixo")

  }

}


/* MENU MOBILE*/


document.querySelector(".abri-menu").onclick = function () {
  document.documentElement.classList.add("menu-mobile")

}
document.querySelector(".botao-fecha").onclick = function () {
  document.documentElement.classList.remove("menu-mobile")

}

/* FIIIIMMM MOBILE*/

// Enviar dados do form por Whtas //

function Enviarwhats() {
  let assunto = '* Site - Viva Bem Academia *';
  let nome = '* Nome : *' + document.querySelector('#nome').value;
  let email = '* E-mail :*' + document.querySelector('#email').value
  let fone = '* telefone : *' + document.querySelector('#fone').value
  let mens = '* Mensagem : *' + document.querySelector('#mens').value
  
  let numeroWhats = '+5511987660162';

  let quabraDeLinha = '%0A' // uma quebra de linha 

  window.open ('https://api.whatsapp.com/send?phone=  ' + numeroWhats +'&text=' +
  assunto + quabraDeLinha + quabraDeLinha + 
  nome + quabraDeLinha + 
  email + quabraDeLinha +
  fone + quabraDeLinha +
  mens , '_black' // desparar para outro local (pagina)
  
  
  );

}