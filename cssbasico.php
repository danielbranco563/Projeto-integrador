<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Notícias</title>
		<meta charset="UTF-8">
		<meta http-equiv="refresh" content="120">
		<link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
	    <meta name="viewport" content="width=device-width, inital-scale=1.0">
	    <link rel="stylesheet" href="css/carne.css">
	</head>
	<body>
			<div class="margem">
		      <div class="container">

				<div class="row nav">
		        	<ul>
			        	<li><div class="col-xs-12 col-md-4">
			        		<a href="index.html">Home</a>
			            </div></li>
			            <li><div class="col-xs-12 col-md-4">
			            	<a href="Noticias.php">Arquivos</a>
			            </div></li>
			            <li><div class="col-xs-12 col-md-4">
			            	<a href="sobre.html">Sobre</a>
			            </div></li>
		            </ul>
		        </div>
		        <div class="imagem">
						<div class="row ">
							<div class="col-xs-12 col-md-4 imagem">
							</div>
							<div class="col-xs-12 col-md-4 imagem">
								<img src="img/logo.png">
							</div>
							<div class="col-xs-12 col-md-4 imagem">
								<a href="https://pt-br.facebook.com/" target="_blank"><img src="img/fac.png" height="20px" width="20px"></a>
								<a href="https://www.google.com" target="_blank"><img src="img/goo.png" height="20px" width="20px"></a>
								<a href="https://www.instagram.com/?hl=pt-br" target="_blank"><img src="img/inst.png" height="20px" width="20px"></a>
							</div>
						</div>
					</div>
				     <div class="row arq">
				      	<div class="col-xs-12 col-md-9 arq">
				      		 Lista de comandos CSS
				      		 <br>
				      		 CSS é a sigla para o termo em inglês Cascading Style Sheets que, traduzido para o português, significa Folha de Estilo em Cascatas. O CSS é fácil de aprender e entender e é facilmente utilizado com as linguagens de marcação HTML ou XHTML.<br>
				      		 CSS é chamado de linguagem Cascading Style Sheet e é usado para estilizar elementos escritos em uma linguagem de marcação como HTML. O CSS separa o conteúdo da representação visual do site. Pense  na decoração da sua página. Utilizando o CSS é possível alterar a cor do texto e do fundo, fonte e espaçamento entre parágrafos. Também pode criar tabelas, usar variações de layouts, ajustar imagens para suas respectivas telas e assim por diante.<br>

                             CSS foi desenvolvido pelo W3C (World Wide Web Consortium) em 1996, por uma razão bem simples. O HTML não foi projetado para ter tags que ajudariam a formatar a página. Você deveria apenas escrever a marcação para o site.<br>
                             <img src="img\exemplocss.jpg">
				      	</div>
			            <div class="col-xs-12 col-md-3 arq">
			               	 	<h2>Arquivos Atualizados</h2>
				      		    <ul>
				      		    	<li><a href="http://localhost/Daniel%20HTML%20basico%202.0/htmlbasico.php">Html básico</a></li>
				      		    	<li><a href="http://localhost/Daniel%20HTML%20basico%202.0/phpbasico.php">php básico</a></li>
				      		    	<li><a href="http://localhost/Daniel%20HTML%20basico%202.0/cssbasico.php">css básico</a></li>
				      		    	<li><a href="http://localhost/Daniel%20HTML%20basico%202.0/javabasico.php">java básico</a></li>
				      		    </ul>
				      		    <h2>Arquivo</h2>
			               	 	<ul>
			               	 		<li></li>
			               	 		<li></li>
			               	 		<li></li>
			               	 	    <li></li>
			               	 	</ul>
			            </div>
			        </div>

				    <div class="row cometario">
					    <div class="col-xs-12 col-md-6 cometario">
					    	<form method="post" action="log.php">
					    		<div class="form-group">
								    	nome:
								    	<input type="text" name="nome" class="form-control" required>
					    		</div>
					    		<div class="form-group">
								    	e-mail:
								    	<input type="text" name="email" class="form-control" required>
								</div>
					    	    <div class="form-group">	
									    Comentário:
									    <textarea rows="4" cols="50" name="comentario" class="form-control md-textarea" required></textarea><br>
									    <input type="submit" name="enviar" value="Enviar" class="form-control botao">
								</div>
							</form>
						</div>
					</div>
					
						
							<?php

			               
			                       $conn = mysql_connect("127.0.0.1", "root", "") or die ("Nao foi possivel conectar!");
				           
				                   mysql_select_db("pj") or die ("Tabela nao encontrada!");

				           
				                  $publicar = "SELECT *FROM cadastro";
				           
				                  $consulta = mysql_query($publicar) or die ("Falha na execução da consulta!");

				           
				                 while ($li = mysql_fetch_assoc($consulta)) {
					       
					               if ($li["visivel"] == "Y") {
					       
					                  $nome = $li["nome"];
					       
					                  $email = $li["email"];
					       
					                  $com = $li["Comentario"];
					       
					                  $data = $li["data"];
					       
					            	  
					            		echo "<div class='row cometario'>
					            					<div class='col-xs-12 col-md-4 cometario'>
					            		 				$nome <br>";
												  echo "$data </div>";
						
										echo "<div class='col-xs-12 col-md-8 cometario'>
						
								  				 <p>$com</p>
						   
								  		</div></div>";
				           
				                 }
			               
			                     }
						
							?>
					
					
		            <div class="row roda">
						<div class="col-xs-12 col-md-4 roda">
							<h3>Site</h3>
								<ul>
									<li>Home</li>
									<li>Arquivos</li>
									<li>Sobre</li>
								</ul>
						</div>
						<div class="col-xs-12 col-md-4 roda">
							<h3>Endereço</h3>
							Rua: ********* ******* nº ***
							<br>
							Cidade: ******* ******** UF: **
							<br>
						</div>
						<div class="col-xs-12 col-md-4 roda">
							<h3>Contatos</h3>
							Carla Gabriela B. de Andrade
							<br>
							e-mail: winte7@gmail.com
							<br>
							Tel.: (22) 9-9****-6***
							<br>
							<br>
							Marcela
							<br>
							e-mail: marcelathomaz13@gmail.com
							<br>
							Tel.: (**) *-****-****
							<br>
							<br>
							Daniel Ribeiro Dos Santos Branco
							<br>
							e-mail: drsbranco@gmail.com
							<br>
							Tel.: (22) *-****-****
						</div>
					</div>
		      </div>
		    </div>
	      <script src="js/jquery-3.2.1.min.js"></script>
		  <script src="js/bootstrap.min.js"></script>
	</body>
</html>