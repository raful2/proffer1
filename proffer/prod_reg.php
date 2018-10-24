<!doctype html>
<html lang="en">
  <head>
   
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Proferta - Registro de Produto</title>
  </head>
  <body background="img/reis-default-header-background-light-5x7-2400.jpg">
  <script>
		function validarSenha(pass, pass2)
{
    var senha1 = document.getElementById(pass).value;
    var senha2 = document.getElementById(pass2).value;
		
    if (senha1 != "" && senha2 != "" && senha1 === senha2)
    {
    	alert('senha iguais');
    }
    else
    {
      	alert('senhas diferentes');
    }
}
	</script>
   
    <div class="logo" align="center" style="width: 403"> <img src="img/LOGO.png" width="70%" style="align-content: center" ></div>
<div>
 <div align="center" ><ul class="navbar">
  <li role="presentation" class="active" ><a href="index.html">INICIO <div class="container"></div></a></li>
  <li role="presentation" class="active" ><a href="reg.php">  <font >QUERO ME CADASTRAR</font> </a></li>
  <li role="presentation" class="active" ><a href="PROD_reg.php" STYLE="background-color: aliceblue">  <font color="#000000"  >REGISTRAR PRODUTO</font> </a></li>
     <li role="presentation" class="active" ><a href="login.html" >  <font   >FAZER LOGIN</font> </a></li> 
 
   <li role="presentation" class="active"><a href="about.php">  QUEM SOMOS
</a>
 </li>
  
</ul><div>

 <div></div>


  <div style="background-color: "><font size="+5" style="font-family: Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana,' sans-serif'">
  <p align="center">↓REGISTRO DE PRODUTO↓</p></font></div>

<div  class="container"  style="position: relative;
	text-transform: uppercase; display: inline-block;" align="center">
	
	<form method="post" action="reg_prod.php" class="form-control">
	ENTRE COM OS DADOS
	<div>
	  <p>	 </p>
	  <p>Nome do Produto:<br>
  <input type="text" name="prod" placeholder="Informe o Nome do Produto">
	    </p>
	</div>
		<div>
		  <p></p>
		  <p>Proprietario:<br>
  <input type="number" name="owner" placeholder="Informe o CPF do Proprietário">
	      </p>
		</div>
		<div>
		  <p>valor do produto<br>
  <input type="number" name="valor" placeholder="Informe o valor">
	      </p>
		</div>
		<div>
		  <p>categoria<br>
  <input type="text" name="category" placeholder="EX: Agronegocios">
	      </p>
		</div>
		  	<div><font color="#000000"><input  style="background-color: yellowgreen; " type="submit" value="CADASRTAR" name="valor" placeholder="Informe o valor"></font>
		  </div><br>
		
	</form>

	
	
</td>
	</tr></div></div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

