<!doctype html>
<html lang="en">
  <head>
   
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Proferta - Registro</title>
  </head>
  <body background="img/reis-default-header-background-light-5x7-2400.jpg">
  

   
    <div class="logo" align="center" style="width: 403;"> <img src="img/LOGO.png" width="70%" style="align-content: 100%" ></div>
<div>
 <div align="center" ><ul class="navbar">
  <li role="presentation" class="active" ><a href="index.html">INICIO </a></li>
  <li role="presentation" class="active" STYLE="background-color: aliceblue"><a href="reg.php">  <font color="#000000" >QUERO ME CADASTRAR</font> </a></li>

  <li role="presentation" class="active" ><a href="PROD_reg.php">  <font  >REGISTRAR PRODUTO</font> </a></li>
     <li role="presentation" class="active" ><a href="login.html" >  <font   >FAZER LOGIN</font> </a></li>
 
   <li role="presentation" class="active"><a href="about.php">  QUEM SOMOS
</a>
 </li>
  
</ul><div>


  <div><font size="+5" style="font-family: Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana,' sans-serif'">
  <p align="center">↓REGISTRO DE CLIENTE↓</p></font></div>

<div id="form" class="container-fluid"  style="position: relative;
	text-transform: uppercase; display: inline-block;" align="center">
	

  
    
     <form action="action.php" method="post" class="form-control" style="width: 100%">
	<div>
	  <p align="center" style="width: 80%%"> informe os dados</p>
	  <p>Nome :	<br>
	    <input required="required" width="100%" type="text" name="nome" style="background-color: white"  placeholder="Informe o nome do produto">
	    </p>
	</div><br>
	  <div>
	    <p>numero de inscriÇÃO:</p>
	    <p>
  <input required="required" width="100%" type"number" name="cpf" class="align-content-lx-between" style="background-color: white"  placeholder="Informe um numero de sua escolha" />
			<br><font size="1"> nao esqueça</font><br>
        </p>
      </div>
	
	
	<div>
 
	  <p>Email:  </p>
	  <p>
	    <input required="required" width="100%" type"text" name="email" style="background-color: white"  placeholder="informe o Email" />
	    </p>
	</div>
	   <div>
	     <p>Telefone:  </p>
	     <p>
	       <input required="required" width="100%" type"text" name="phone" style="background-color: white"  placeholder="informe o Telefone" />
         </p>
	   </div>

		<div> 
		  <p>nome de Login:  </p>
		  <p>
		    <input required="required" width="100%" type"text" name="user" style="background-color: white"  placeholder="informe o nome de login" />
	      </p>
		</div>
	    <div> 
	      <p>Senha :  </p>
	      <p>
	        <input required="required" width="100%" id="pass" type="password" name="pass" style="background-color: white"  placeholder="informe a senha" />
          </p>
	    </div>
	    <div> 
	      <p>Repita a senha:  </p>
	      <p>
	        <input oninput="valida_senha(this)" id="pass2" required="required" width="100%" type="password" name="pass2" style="background-color: white"  placeholder="informe o nome de login" maxlength="10" requiredsize="10" />
          </p>
	    </div>
	    
		

			<div><table width="99%" border="2">
  <tbody>
    <tr>
      <td><input onclick"validarSenha('pass','pass2')" class="badge-info"  type="submit" value="Cadastrar" size="3" style="background-color: yellowgreen; width: 99%" ><input class="badge-info"  type="reset" value="Limpar campos" size="3" style="background-color: coral; width: 99%">
</td>
    </tr>
  </tbody>
</table>

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

