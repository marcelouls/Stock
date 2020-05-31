<<<<<<< HEAD
<?php
	
	session_start();

	if(!isset($_SESSION['nome_usuario'])){
		header('Location: index.php?erro=1');
	}

	
	$erro_usuario = isset($_GET['erro_usuario']) ? $_GET['nome_usuario'] : "";
	

	


?>


<!DOCTYPE html>
<html>
<head>
	<title> HOME STOCK</title>

		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn  lind para o bootstrap-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

</head>
<body  style="background-image: url('imagens/back.png'); opacity:0.9">

	<nav class="navbar navbar-default navbar-static-top" style="background: rgb(80,188,223)">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <img src="imagens/logo.png" />
	        </div>
	     
	    

	  <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="index.php" class="glyphicon glyphicon-share">Sair</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->


	</div>
</nav>
	<div class="container">	

		<div class="col-md-1" border=1>
			<button type="button" class="btn btn-primary glyphicon glyphicon-user" data-toggle="modal" data-target="#myModal" name="ingresa_usuarios "> Usuarios </button>
			
		</div>
		<br />
		<br />
		<br />
		<div class="col-md-1" border=1>
			<button type="button" class="btn btn-primary glyphicon glyphicon-book" data-toggle="modal" data-target="#myModal" name="ingresa_usuarios ">  Produtos </button>
			
		</div>

		 <!-- Modal -->
  		<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="container col-md-12" style="background:white"	>

  			<form method="post" action="cadastro_usuarios.php">
  				<br />
  				<label style="color:#04769B">	CADASTRO DE USUARIOS</label>
  				<br />
    			<div class="input-group col-xs-10">
      			<span  class="glyphicon glyphicon-user input-group-addon"></span>
      			<input id="nome" type="text"  class="form-control"  name="nome" placeholder="Nome Usuario" >
      						<?php 
							if ($erro_usuario) {
								echo '<font style="color:#FF0000">Usuario ja existe</font>';
							}
						 	?>
      			<br />
    			</div>
    			<div class="input-group col-xs-10"> 
      			<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      			<input id="senha" type="password" class="form-control" name="senha" placeholder="Senha" maxlength="32">
      			<br />
    			</div>

    			<div class="input-group col-xs-10">
      			<span class="input-group-addon glyphicon glyphicon-phone"></span>
      			<input id="fone" type="text" class="form-control" name="fone" placeholder="Fone">
      			</div>
    			
    			<div class="input-group col-xs-10">
   					
					<select class="form-control" name="funcao">
						<option value="">Selecione uma função</option>
						<option value="1">Usuario</option>
						<option value="2">Cajero</option>
						<option value="3">Cajero2</option>
						<option value="4">Administrador</option>
						<option value="5">Supervisor</option>
						<option value="6">Administrator</option>
						<option value="7">Dba</option>
						<option value="8">Usuario2</option>
						<option value="9">Usuario3</option>
					</select>
					<br />
      				<br />
				</div>
   				<br />
      			<br />
  				</div>
      			<button class="btn btn-default glyphicon glyphicon-floppy-saved" type="submit"> Salvar</button>
      			<button class="btn btn-default glyphicon glyphicon-remove-circle"> Cancelar</button>

      			<br />
      			<br />


  			</form>
  			


 			 
			</div>
      
    		</div>
  			</div>


		   <section id="servicos">
          <div class="container">
           <div class="row"> <!-- row albuns-->
           <!-- albuns -->
          

            
            <div class="row albuns"> <!-- row albuns-->
              <div class="col-md-2">
                
             
           </div>

           <!-- servicos -->
           <div class=" col-md-10" style="background: white " >
            <form method="post" action="cadastro_produtos.php" style="display:show">
  				<br />
  				<label style="color:#04769B">	CADASTRO DE PRODUTOS</label>

  				<div class="input-group col-xs-3">
      			<span class="input-group-addon glyphicon glyphicon-paperclip"></span>
      			<input id="cd_produto" type="text" class="form-control" name="cd_produto" placeholder="Codigo">
      			    </div>
  				<br />
    			<div class="input-group col-xs-10">
      			<span  class="glyphicon glyphicon-tag input-group-addon"></span>
      			<input id="nome_produto" type="text"  class="form-control"  name="nome_produto" placeholder="Descrição produto" >
      				
      			<br />
    			</div>

    			
    				<div>
    			<div class="input-group col-xs-10"> 
      			<span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
      			<input id="cd_barras" type="text" class="form-control" name="cd_barras" placeholder="Codigo de barras" >
      				</div>
    			
      				
    			<div class="input-group col-xs-5">
      			<span class="input-group-addon glyphicon glyphicon-resize-vertical"></span>
      			<input id="medida" type="text" class="form-control" name="medida" placeholder="Cantidad medida">
      			    </div>

      			 <div class="input-group col-xs-5">
      			<span class="input-group-addon glyphicon glyphicon-book"></span>
      			<input id="categoria" type="text" class="form-control" name="categoria" placeholder="categoria">
      			    </div>

      			    <div class="input-group col-xs-5">
      			<span class="input-group-addon glyphicon glyphicon-book"></span>
      			<input id="sub_categoria" type="text" class="form-control" name="sub_categoria" placeholder="Sub categoria">
      			    </div>
      			
      			
      			</div>
      			
    			
    			<div class="input-group col-xs-4">
   					
					<select class="form-control" name="unidad_medida">
						<option value="">Selecione uma unidad de medida</option>
						<option value="1">GR - Gramos</option>
						<option value="2">ML - Milimetros</option>
						<option value="3">KG - Kilos</option>
						<option value="4">LT - Litros</option>
						<option value="5">S - Small</option>
						<option value="6">M - Medium</option>
						<option value="7">L = Large</option>
						<option value="8">UNIDAD</option>
						<option value="9">FRASCO</option>
					</select>
					<br />
      				<br />
				</div>
   				<br />
      			<br />
      			<button class="btn btn-default glyphicon glyphicon-floppy-saved" type="submit"> Salvar</button>
      			<button class="btn btn-default glyphicon glyphicon-remove-circle"> Cancelar</button>
      			<br />
      			<br />
  				</div>
      			

      			<br />
      			<br />


  			</form>
           </div>
          </div>
          </div> 
        </section>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</body>
=======
<?php
	
	session_start();

	if(!isset($_SESSION['nome_usuario'])){
		header('Location: index.php?erro=1');
	}

	
	$erro_usuario = isset($_GET['erro_usuario']) ? $_GET['nome_usuario'] : "";
	

	


?>


<!DOCTYPE html>
<html>
<head>
	<title> HOME STOCK</title>

		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

</head>
<body  style="background-image: url('imagens/back.png'); opacity:0.9">

	<nav class="navbar navbar-default navbar-static-top" style="background: rgb(80,188,223)">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <img src="imagens/logo.png" />
	        </div>
	     
	    

	  <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="index.php" class="glyphicon glyphicon-share">Sair</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->


	</div>
</nav>
	<div class="container">	

		<div class="col-md-1" border=1>
			<button type="button" class="btn btn-primary glyphicon glyphicon-user" data-toggle="modal" data-target="#myModal" name="ingresa_usuarios "> Usuarios </button>
			
		</div>

		 <!-- Modal -->
  		<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="container col-md-12" style="background:white"	>

  			<form method="post" action="cadastro_usuarios.php">
  				<br />
  				<label style="color:#04769B">	CADASTRO DE USUARIOS</label>
  				<br />
    			<div class="input-group col-xs-10">
      			<span  class="glyphicon glyphicon-user input-group-addon"></span>
      			<input id="nome" type="text"  class="form-control"  name="nome" placeholder="Nome Usuario" >
      						<?php 
							if ($erro_usuario) {
								echo '<font style="color:#FF0000">Usuario ja existe</font>';
							}
						 	?>
      			<br />
    			</div>
    			<div class="input-group col-xs-10"> 
      			<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      			<input id="senha" type="password" class="form-control" name="senha" placeholder="Senha" maxlength="32">
      			<br />
    			</div>

    			<div class="input-group col-xs-10">
      			<span class="input-group-addon glyphicon glyphicon-phone"></span>
      			<input id="fone" type="text" class="form-control" name="fone" placeholder="Fone">
      			</div>
    			
    			<div class="input-group col-xs-10">
   					
					<select class="form-control" name="funcao">
						<option value="">Selecione uma função</option>
						<option value="1">Usuario</option>
						<option value="2">Cajero</option>
						<option value="3">Cajero2</option>
						<option value="4">Administrador</option>
						<option value="5">Supervisor</option>
						<option value="6">Administrator</option>
						<option value="7">Dba</option>
						<option value="8">Usuario2</option>
						<option value="9">Usuario3</option>
					</select>
					<br />
      				<br />
				</div>
   				<br />
      			<br />
  				</div>
      			<button class="btn btn-default glyphicon glyphicon-floppy-saved" type="submit"> Salvar</button>
      			<button class="btn btn-default glyphicon glyphicon-remove-circle"> Cancelar</button>

      			<br />
      			<br />


  			</form>
  			


 			 
			</div>
      
    		</div>
  			</div>


		<div class="col-md-11">  </div>
	</div>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</body>
>>>>>>> 210038de17d753259a84b28156fc1c341ee3bf29
</html>