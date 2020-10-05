<html>
<head>
	<title>Cetak PDF</title>
	<style>


table tr {
  text-align: center;
}


	</style>
</head>
<body>
    <b><?php echo $ket; ?></b><br /><br />
    
<table border='2'>
	<tr>
	<th width:'10%' text-align: 'center'>Tanggal</th>
	<th width:'20%' text-align: 'center'>No Nota</th>
	<th width:'25%' text-align: 'center'>Customer</th>
	<th width:'15%' text-align: 'center'>Invoice</th>               
	<th width:'15%' text-align: 'center'>Cetak</th>
	<th width:'15%' text-align: 'center'>Tertulis</th>   
	</tr>

    <?php
    if( ! empty($kwit)){
    	$no = 1;
    	foreach($kwit as $data){
            $tanggal_b = date('d-m-Y', strtotime($data->tanggal_b));

    		echo "<tr>";
    		echo "<td >".$tanggal_b."</td>";
    		echo "<td>".$data->no_nota."</td>";
    		echo "<td>".$data->customer."</td>";
    		echo "<td>".$data->invoice."</td>";
    		echo "<td>".$data->tanggal_c."</td>";
    		echo "<td>".$data->tertulis."</td>";
    		echo "</tr>";
    		$no++;
    	}
    }
    ?>
	</table>
</body>
</html>
