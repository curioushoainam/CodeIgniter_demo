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
