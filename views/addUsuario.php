<h1>Cadastro de Usuário</h1>
<form method="POST" >
	Cadastrar Usuário:<br/>
	<input type="text" name="user_number" required /><br/><br/>

	Cadastrar Senha:<br/>
	<input type="password" name="user_pass" required /><br/><br/>

	<input type="submit" value="Salvar" />
</form>

<?php if(!empty($msg)): ?>
<h2><?php echo $msg; ?></h2>
<?php endif; ?>	


