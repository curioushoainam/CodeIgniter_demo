<div id='contents'>
	<h4>this is the home page.</h4>
	<div>
		<table>
			<tr>
				<th>ID</th><th>Ten</th><th>TenKhongDau</th>
			</tr>
			<?php 
				if (isset($catalog) && $catalog){
					foreach($catalog as $item){
			?>
					<tr>
						<td><?= $item['id'] ?></td>
						<td><?= $item['Ten'] ?></td>
						<td><?= $item['TenKhongDau'] ?></td>
					</tr>
			<?php
					}
				}
			?>

		</table>	
	</div>	
</div>

<?php 
if (isset($_SESSION['username']) && $_SESSION['username'])
	echo $_SESSION['username'];	
else 
	echo 'No session username';
	
echo '<br>';
if (isset($_SESSION['email']) && $_SESSION['email'])
	echo $_SESSION['email'];
else 
	echo 'No session email';

echo '<br>';
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'])
	echo $_SESSION['logged_in'];
else 
	echo 'No session logged_in';

?>


