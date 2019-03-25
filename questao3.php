<!DOCTYPE html>


<html>

	<head>

		<meta charset="utf-8">

		<title>Cadastro.html</title>

	</head>

	<body>

    

                

		<h1>Abra uma conta</h1>

		<p><strong>É gratuito e sempre será.</strong></p>

		<form action="" method="">

			<input type="text" name="nome" placeholder="Nome">

			<input type="text" name="sobrenome" placeholder="Sobrenome">

			<br><br>

			<input type="text" name="cadastro" placeholder="E-mail ou número do celular">

			<br><br>

			<input type="text" name="cadastro" placeholder="Insira novamente o email ou o celular">

			<br><br>

			<input type="password" nome="senha" placeholder="Nova senha">

			<br><br>

			<label><strong>Aniversário</strong></label>

			<br><br>

                        

			  <select name="dia">

                              <option> Dia </option>

              <?php 

                   for ($i=1;$i<=31;$i++) {

                 ?>

                <option>

                   <?php 

                   echo $i;

                } ?>

                     </option>

           

  

          

            </select>


			<select name="mes">

				<option>Mês</option>

				<option>jan</option>

				<option>fev</option>

				<option>mar</option>

				<option>abr</option>

				<option>mai</option>

				<option>jun</option>

				<option>jul</option>

				<option>ago</option>

				<option>set</option>

				<option>out</option>

				<option>nov</option>

				<option>dez</option>

			</select>

			  <select name="ano"> 

                              <option> Ano </option>

                         <?php 

                            for ($i=1905;$i<=2019;$i++) {

                           ?>

                         <option>

                           <?php 

                           echo $i;

                           } ?>

                          </option>

           

  

          

            </select>


			Por que preciso informar minha data de nascimento?

			<br><br>

			<input type="radio" name="sexo">

			<label>Feminino</label>

			<input type="radio" name="sexo" >

			<label>Masculino</label>

			<br>

			<p>Ao clicar em Abrir uma conta, você concorda com os nossos <br>

			Termos e que leu a nossa Política de Dados, incluindo o nosso <br>

			Uso de Cookies</p>

			<br>

			<button type="submit">Abrir uma conta</button>

		

	


    </body>

</html>
