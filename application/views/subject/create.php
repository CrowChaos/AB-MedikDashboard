

	<div class="container">
		<?php echo validation_errors();?>
		<div class="col-md-12">

			<div class="panel panel-default">

				<div class="panel-body">

	<?php if($this->session->flashdata('error_create')): ?>
	<?php echo '<p class="alert alert-warning">'.$this->session->flashdata('error_create').'</p>'; ?>
	<?php endif; ?>

		<?php echo form_open('subject/create');?>
	<h4 >Vytvor noveho pacienta</h4>

	<div class="form-group">

	<div class="form-group">
			<label>Index</label>
			<input type="number" name="index" class="form-control" placeholder="index" required unique>
	</div>

			<label>Meno</label>
			<input type="name" name="name" class="form-control" placeholder="Name" required >
	</div>
	<div class="form-group">
			<label>Vek</label>
			<input type="number" name="age" class="form-control" placeholder="Vek" required >
	</div>
	<div class="form-group">
			<label>Vyska</label>
			<input type="number" name="height" class="form-control" placeholder="Vyska" required > 

	</div>
	<div class="form-group">
			<label>Vaha</label>
			<input type="number" name="weight" class="form-control" placeholder="Vaha" required >
	</div>
	<div class="form-group">
			<label>Krvna skupina</label>
		     <input type="text" name="bloodtype" class="form-control" placeholder="Krvna skupina">
	</div>
	<div class="form-group">
		     <label>Alergie</label><br>
		<label>Ano</label><input type="checkbox" value="ano" name="alergies" class="checkbox" ><br>

		<label>Nie</label><input type="checkbox" value="nie" name="alergies" class="checkbox" >
	</div>
	</div>

	<button type="submit" name="add" class="btn btn-primary">Vytvor noveho pacienta</button>
	<label><a href="<?php echo base_url();?>">Spat</a></label> 

	<?php echo form_close();?>
</div>

		</div>
	</div>
	</div>