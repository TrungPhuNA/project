<?php 
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=data.xls");
header("Pragma: no-cache");
header("Expires: 0");
?> 
<?php 
$lists = array(
	         array(
                'name' => 'Nobita', 
                'email' => 'nobitacnt@gmail.com',
                'phone' => '0123.456.789',
             ),
			 array(
				'name' => 'Xuka',
				'email' => 'xuka@gmail.com',
				'phone' => '0222.333.444',
			 ),
			array(
				'name' => 'Chaien',
				'email' => 'chaien@gmail.com',
				'phone' => '0111.333.444',
			),
)
?> 
<meta charset="utf-8" /> 
<table>
	<thead>
		<tr>
			<td>Tên</td>
			<td>Email</td>
			<td>Số điện thoại</td>
		</tr>
	</thead>
	<tbody>
	    <?php foreach ($lists as $row):?>
	    <tr>
			<td><?php echo $row['name']?></td>
			<td><?php echo $row['email']?></td>
			<td><?php echo $row['phone']?></td>
		</tr>
		<?php endforeach;?>
	</tbody>
</table>	
	
	
