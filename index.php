<html>
    <head>
        <title>Meu simples site...</title>

    </head>
	<style>
.login{
	background-color: blueviolet;
	width: 300px;
	height: 500px;
	background-size: center;
	background-position: center;
	padding: 30px;
	border-radius: 30px;
}
 .form{
flex-direction: column;
width: 100%;
height: 100%;
display: flex;

}
.form2{
	flex-direction: column;
width: 100%;
height: 100%;
display: flex;
}
.centro{
	display: flex;
	align-items: center;
	height: 800px;
	justify-content: space-around;
	
}


.divLogin {
	background-color: #8cff1a ;
	width: 300px;
	height: 500px;

	padding: 30px;
	border-radius: 30px;
}
.centroLogin{
	margin-top: 120px;
}
.botao{
	height: 40px;
	width: 40px;
	border-radius: 50%;
	font-size: x-small;
	margin-left: 260px;
	margin-top: 230px;

}
.pesquisa{
width: 100px;
}
.buscar{
	height: 40px;
	width: 40px;
	border-radius: 50%;
	font-size: x-small;
	margin-left: 260px;
	margin-top: 230px;
}
	</style>
	
	
    <body>
		<div class="centro">
		<div class="login">
			<form class="form"  method="post" action="processamento.php" id="formlogin" name="formlogin" >>
			<H1>LOGIN</H1>
			<label for="">Usuario</label>
			<input type="text">
			<label for="">Senha</label>
			<input type="text">
			<button>Enviar</button>
			</form>
			
		</div>

		<div class="divLogin">
			<div class="centroLogin">
			<form class="form2" method="post" action="processamento.php" id="formlogin" name="formlogin" >
			  <label>Nome: </label>
				<input type="text" name="nome" id="nome" size="20"><br />
				<label>técnico: </label>
				<input type="text" name="tecnico" id="tecnico" size="20"><br />
				<label>cidade: </label>
				<input type="text" name="cidade" id="cidade" size="20"><br />
				
				<input class="pesquisa" type="text"nome= "txtbusca" placeholder="buscar...">
				<button class="buscar">buscar</button>
				<button class="botao">enviar</button>
				</form>
				</div>
				</div>
				</div>
		<!--
<center>
	
	<div class="login">
			<form method="post" action="processamento.php" id="formlogin" name="formlogin" >
			<label>E-Mail: </label>
				<input type="text" name="email" id="email" size="20"><br />
				<label>Senha: </label>
				<input type="text"name="senha" id ="senha"size="20"><br/>
</form>
				</div>
</center>
		
				<div class="divLogin">
			<form method="post" action="processamento.php" id="formlogin" name="formlogin" >
			  <label>Nome: </label>
				<input type="text" name="nome" id="nome" size="20"><br />
				<label>técnico: </label>
				<input type="text" name="tecnico" id="tecnico" size="20"><br />
				<label>cidade: </label>
				<input type="text" name="cidade" id="cidade" size="20"><br />
				
				<br>
				<center>
					<input type="submit" value="Salvar" class='botao' />
				</center>
				<br>
				<center>
					<input type="submit" value="pesquisar" class='botao' />
				</center>
			</form>
		</div>
	--!>

    </body>
</html>
