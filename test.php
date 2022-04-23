<form method=POST action="">
	<select name="code_cycle" class="form-control">
		<?php
			include 'ajoutClasse.php';
			$sql="select * from cycle";
			$res=mysql_query($sql);
			while($enr=mysql_fetch_array($res));
			{
			echo "<option value=".$enr['code_cycle'].">".$enr['code_cycle']."</option>";
			}
			mysql_close();
		?>
	</select>
</form>