<h1>Editar Fornecedor</h1>

<?php if(!empty($warning)): ?>
<div class="warning"><?php echo $warning; ?></div>
<?php endif; ?>

<form method="POST" class="form">

	Nome do Fornecedor:<br/>
	<input type="text" name="nome" value="<?php echo $info['nome']; ?>" required /><br/><br/>

	Endereço:<br/>
	<input type="text" class="endereco" name="endereco" value="<?php echo $info['endereco']; ?>" required /><br/><br/>

	Telefone:<br/>
	<input type="text" class="fone" name="fone" value="<?php echo $info['fone']; ?>" required /><br/><br/>

	CNPJ:<br/>
	<input type="text" class="cnpj" name="cnpj" value="<?php echo $info['cnpj']; ?>" required /><br/><br/>

	<input type="submit" value="Salvar" />

</form>

