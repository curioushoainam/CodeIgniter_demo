<div>
	<table>
		<thead>
			<tr><th>ID</th><th>Tiêu đề</th></tr>	
		</thead>
		<tbody>
		<?php 
		if (isset($data) && $data){
			foreach ($data as $item){
		?>
				<tr>
					<td><?= $item['id'] ?></td><td><?= $item['TieuDe'] ?></td>
				</tr>
		<?php
			}
		}

		?>			
		</tbody>
	</table>

	<?php 
		if(isset($pagination) && $pagination){
			echo '<pre>';
			print_r($pagination);
			echo '</pre>';	
		}					 
	?>
</div>
  