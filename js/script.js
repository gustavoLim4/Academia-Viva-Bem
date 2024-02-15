$(document).ready(function () {
  $(".banner").slick({
    slidesToShow: 1,
    dots: true,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
  });
});

$(".galeria").slick({
  centerMode: true,
  centerPadding: "5%",
  slidesToShow: 7,
  responsive: [
    {
      breakpoint: 1001,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: "40px",
        slidesToShow: 7,
      },
    },
    {
      breakpoint: 601,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: "40px",
        slidesToShow: 7,
      },
    },
  ],
});

new WOW().init();

window.onscroll = function () {
  let top = window.scrollY;
  if (top > 140) {
    document.getElementById("menufixo").classList.add("menufixo");
  } else {
    document.getElementById("menufixo").classList.remove("menufixo");
  }
};

/* MENU MOBILE*/

document.querySelector(".abri-menu").onclick = function () {
  document.documentElement.classList.add("menu-mobile");
};
document.querySelector(".botao-fecha").onclick = function () {
  document.documentElement.classList.remove("menu-mobile");
};

/* FIIIIMMM MOBILE*/

// Enviar dados do form por Whtas //

function Enviarwhats() {
  let assunto = "* Site - Viva Bem Academia *";
  let nome = "* Nome : *" + document.querySelector("#nome").value;
  let email = "* E-mail :*" + document.querySelector("#email").value;
  let fone = "* telefone : *" + document.querySelector("#fone").value;
  let mens = "* Mensagem : *" + document.querySelector("#mens").value;

  let numeroWhats = "+5511987660162";

  let quabraDeLinha = "%0A"; // uma quebra de linha

  window.open(
    "https://api.whatsapp.com/send?phone=  " +
      numeroWhats +
      "&text=" +
      assunto +
      quabraDeLinha +
      quabraDeLinha +
      nome +
      quabraDeLinha +
      email +
      quabraDeLinha +
      fone +
      quabraDeLinha +
      mens,
    "_black" // desparar para outro local (pagina)
  );
}

var modal = document.getElementById("loginModal");
var loginButton = document.getElementById("loginButton");
var cloose = document.getElementById("cloose");

loginButton.onclick = function () {
  modal.style.display = "block";
};

function closeModal() {
  modal.style.display = "none";
}


function carregarLogin(){

  $('#loginForm').click(function () {
      var formData = $('#loginForm').serialize();

      //Enviar a solicitação - class Login

      $.ajax({
          url: './admin/class/alunos.php',
          method: 'POST',
          data: formData,
          dataType: 'json',
          success: function (data) {

              console.log(data);
              if (data.success) {
                  // Login Bem Sucedido
                  $('#msgLogin').html('<div class = "msgSuccess">' + data.message + '</div>');
                  var idAluno = data.idAluno;
                  window.location.href = 'http://localhost/vivabem/admin/index.php?p=alunos';
              } else {
                  $('#msgLogin').html('<div class = "msgInvalido">' + data.message + '</div>');
              }
          },
          error: function (xhr, status, error) {

              console.log(error);

          }
      })

      $.ajax({
          url: './admin/class/instrutores.php',
          method: 'POST',
          data: formData,
          dataType: 'json',
          success: function (data) {

              console.log(data);
              if (data.success) {
                  // Login Bem Sucedido
                  $('#msgLogin').html('<div class = "msgSucess">' + data.message + '</div>');
                  var idFuncionario = data.idFuncionario;
                  window.location.href = 'http://localhost/vivabem/admin/index.php?p=instrutores';
              } else {
                  $('#msgLogin').html('<div class = "msgInvalido">' + data.message + '</div>');
              }
          },
          error: function (xhr, status, error) {

              console.log(error);

          }
      })
  });
}


  //Verificar se o form está pegando os dados

  // método usando o Jquery
  var formData = $("#loginForm").serialize();
  console.log("Dados do Formulário:" + formData);

  // método normal
  var email = document.getElementById("email").value;
  var senha = document.getElementById("password").value;
  console.log("Email:" + email);
  console.log("Senha:" + senha);


// Get the modal
var modal = document.getElementById("loginModal");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("closeBtn")[0];

// When the user clicks the button, open the modal
document.getElementById("loginBtn").addEventListener("click", function () {
  modal.style.display = "block";
});

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
  modal.style.display = "none";
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};

// Handle form submission
document
  .getElementById("loginForm")
  .addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent form from submitting

    // You can add your login logic here, like sending the form data to a server via AJAX
    // For now, let's just display the entered email and password
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    console.log("Email:", email);
    console.log("Password:", password);

    // Close the modal
    modal.style.display = "none";
  });

// Get the login button
