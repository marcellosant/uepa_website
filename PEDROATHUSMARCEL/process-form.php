<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $mensagem = $_POST["mensagem"];
    $btnSend = isset($_POST["btnSend"]);


    $host = "localhost";
    $dbname = "mensagem_db";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($host, $username, $password, $dbname);

    if (mysqli_connect_errno()) {
        die("Connection error: " . mysqli_connect_errno());
    }
    $sql = "INSERT INTO mensagem (nome, email, telefone, mensagem)
             VALUES (?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);

    if ( ! mysqli_stmt_prepare($stmt, $sql)){
        die(mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, "ssis",
    $nome,
    $email,
    $telefone,
    $mensagem);

    mysqli_stmt_execute($stmt);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <title>Página Não Encontrada | UEPA</title>
</head>
<body>
    
  <header>

    <div class="uppernavbar">
        <a href="paginanaoencontrada.html"><i class="fa-solid fa-wheelchair"></i> Acessibilidade</a> <a href=""><i class="fa-solid fa-circle-half-stroke"></i> Alto Contraste </a> <a href="deniedacess.html"><i class="fa-solid fa-sitemap"></i> Mapa do site</a>
        
        <div class="uppernavbarbuttom">
            
        </div>   
    
    
    </div>

    <div id="teste" class="maindivnavbar">

        <nav class="navbar" style="background-color: #ffffff;">
            <div class="container-fluid" style="justify-content: center; gap: 80px;">
              <a href="index.html" class="navbar-brand"><img id="uepalogo" src="assets/img/uepalogo.png" alt="LogoDaUEPA"></a>
              <form id="botaodebuscanavbar" class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="" aria-label="Search">
                <button class="btn btn-outline-success" style="background-color: #312783; color: #ffffff;" type="submit">Buscar</button>
              </form>
              <a href="https://www.sistemas.pa.gov.br/esic/public/main/index.xhtml" class="siclink"><img id="siclogo" src="assets/img/logo-sic.svg" alt="logosic"> </a>
            </div>
          </nav>

    </div>

    <div class="bottomnavbar">
        <div class="bottomnavbuttons">
            <ul>
                <li>
                    <a href="#">SOBRE</a>
                </li>
                <li>
                    <a href="docente.html">CORPO DOCENTE</a>
                </li>
                <li>
                    <a href="#">ESTRUTURA</a>
                </li>
                <li>
                  <a href="faleconosco.html">SUPORTE</a>
              </li>
            </ul>
        </div>
    </div>

</header>

<main class="emptypage">
  
    <div class="minorcontainer">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">INÍCIO</a></li>
              <li class="breadcrumb-item active" aria-current="page">Página não encontrada</li>
            </ol>
          </nav>
    </div>

    <div class="textdeniedcontainer">
        <div class="textdenieddiv">
           <span id="acessonegado">Fale conosco</span>
        </div>

        <div class="deniedredline">
        </div>

        <div class="subtextdenieddiv">
            <h2 id="subtextodeniedtext">
                sua mensagem foi enviada com sucesso
            </h2>
        </div>

        <div class="textdeniedcontactbuttons">

            <span style="font-size: 38px; color: #0166ff;">
                <i id="plusshare" class="fa-solid fa-square-plus"></i>
                <i id="facebook" class="fa-brands fa-square-facebook"></i>
            </span>    

            <span style="font-size: 38px; color: #1d9bf0;">
                <i id="deniedacesstwitter" class="fa-brands fa-square-twitter"></i>
            </span>

            <span style="font-size: 38px; color: #888990;">
            <i id="email" class="fa-solid fa-square-envelope"></i>
            </span>

        </div>

    </div>

</main>

<footer>

    <div class="superiorfooterredline"></div>

    <div class="mainfooterdiv">
        <div class="trecovermelho">

        </div>
      <div class="mainimagefooterdiv">
        <div class="footerimg">
            <img id="governopa" src="assets/img/logo-uepa-branco.png" alt="governodoparalogo">
        </div>
      </div>

        <div class="footercontacts">
            <ul>
              <span style="font-size: 24px; color: #837db5;">
                 <a style="color: #837db5;" id="youtubea" href="https://www.youtube.com/channel/UCiW52AgF7Y62gvDw500haAw"><i class="fa-brands fa-youtube"></i></a>
                  
                  <a style="color: #837db5;" href="https://twitter.com/uepaoficial"><i id="deniedacesstwitter" class="fa-brands fa-twitter"></i></a>

                  <a style="color: #837db5;" href="https://www.instagram.com/uepaoficial/"><i class="fa-brands fa-instagram"></i></a>

                  <a style="color: #837db5;" href="https://www.facebook.com/UepaOficial"><i class="fa-brands fa-facebook"></i></a>
              </span>

              

            </ul>    
        </div>

        <div class="rightinfodiv">
          <div class="secondbottomtext">
            <span><i class="fa-solid fa-location-dot" style="color: #E30613;"></i>ㅤTv. Dr. Enéas Pinheiro, 2626 - Marco - Belém, Pará, Brasil | CEP: <br>66050-540</span>
        </div>
      </div>
        
    </div>

    <div class="bottomfooterdiv">
      <div class="copyrightdiv">
          <p>&copy; 2024 UEPA CAMPUS ANANINDEUA</p>
      </div>
    </div>

</footer>

</body>
</html>