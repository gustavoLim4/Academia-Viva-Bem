<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/reset.css">


    <!--    link   "js"    -->


    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/lity.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- regra do   "smp o ultimo"   css -->

    <link rel="stylesheet" href="css/styleClass.css">

    <!--  RESPONSIVO  -->

    <link rel="stylesheet" href="/css/responsivo.css">
</head>

<body>
    <main>

        <div id="loginModal" class="modal">
            <div class="modal-content">
                <img src="img/logoVivaBem.svg" alt="">  
                <h2>Login</h2>
                <form id="loginForm">
                    <div class="input-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="input-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="buttologar">
                        <button type="button" onclick="carregarLogar()">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </main>


    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <script src="js/slick.min.js"></script>
    <script src="js/lity.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/scriptSS.js"></script>

</body>

</html>