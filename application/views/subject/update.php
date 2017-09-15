

<?php if (isset($_GET["index"])): ?>
	<?php $index=$_GET['index']; ?>

	<div class="col-md-12">

			<div class="panel panel-default">

				<div class="panel-body">


			    <form action="" method="POST">

			    	<h3><?php echo $name?></h3>
			        <input type="hidden"  value="<?php echo $index?>" name="index" >

					<div class="form-group">
					<label>Meno</label>
					<input type="text" class="form-control"  value="<?php echo $name ?>" name="name" required> 
					</div>

					<div class="form-group">
					<label>Vek</label>
					<input type="number" class="form-control"  value="<?php echo $age ?>" name="age" required>
					</div>

					<div class="form-group">
					<label>Vaha</label>
			        <input type="number" class="form-control"  value="<?php echo $weight ?>" name="weight" required>
					</div>

					<div class="form-group">
					<label>Vyska</label>
			        <input type="number"  class="form-control"  value="<?php echo $height ?>" name="height" required>
					</div>

					<div class="form-group">
					<label>Krvna skupina</label>
			        <input type="text"  class="form-control"  value="<?php echo $bloodtype ?>" name="bloodtype">
					</div>

					<div class="form-group">
					<label>Alergie</label>
			        <input type="text" class="form-control"  value="<?php echo $alergies ?>" name="alergies">
					</div>

					<div class="form-group">

			        <input class="btn btn-primary" type="submit" >
					</div>

			    </form>
		</div>
	</div>
</div>
<?php endif;?>
