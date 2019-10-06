<?php 
	include '../template/header.php';

require_once '../assets/Classes/PHPExcel.php'; // Memanggil library PhpExcel
// load file excel
$excel = PHPExcel_IOFactory::load('../excel/data.xlsx');

// Menjalankan atau mengaktifkan lembar kerja excel
$excel->setActiveSheetIndex(0);

echo "<table>";

//ambil data disini
$i = 4; //samakan dengan baris data pertama di file excel

// perulangan data per baris
while ($excel->getActiveSheet()->getCell('A'.$i)->getValue() != "") { //selagi ada data
	$nama = $excel->getActiveSheet()->getCell('A'.$i)->getValue();
	$jenis_kelamin = $excel->getActiveSheet()->getCell('B'.$i)->getValue();

	echo "
			<tr>
				<td>".$nama."</td>
				<td>".$jenis_kelamin."</td>
			</tr>
		";
	$i++;
}

echo "</table>";

?>
<?php 
	include '../template/footer.php';
	
