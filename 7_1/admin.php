<?php if(!isset($_POST['admin'])){?>

<form action="index.php?page=4" method="POST" enctype="multipart/form-data">
	<div class="form-group">
		<label for="catid">Категория:</label>
		<select class="form-control" name="catid">
			<?php
				$pdo = Tools::connect();
				$list = $pdo->query("SELECT * FROM Categories");
				while($row = $list->feach()){
					echo '<option value="'.$row['id'].'">'.$row['category'].'</option>';
				}?>
			</select>
	</div>
</form>
<?php
	} else{}
	?>