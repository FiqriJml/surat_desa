<?php
$conn = mysqli_connect("localhost","root","","data_surat_desa");

require_once '../assets/Classes/PHPExcel.php'; // Memanggil library PhpExcel

if (isset($_POST["import"]))
{
       
  $allowedFileType = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
  
  if(in_array($_FILES["file"]["type"],$allowedFileType)){

        $targetPath = '../assets/uploads/'.$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);

         // load file excel
		$excel = PHPExcel_IOFactory::load($targetPath);

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
  }
  else
  { 
        $type = "error";
        $message = "Invalid File Type. Upload Excel File.";
  }
}
?>
<h2>Import Excel File into MySQL Database using PHP</h2>
    
    <div class="outer-container">
        <form action="" method="post"
            name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
            <div>
                <label>Choose Excel
                    File</label> <input type="file" name="file"
                    id="file" accept=".xls,.xlsx">
                <button type="submit" id="submit" name="import"
                    class="btn-submit">Import</button>
        
            </div>
        
        </form>
        
    </div>
    <div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>"><?php if(!empty($message)) { echo $message; } ?></div>
    
         
<?php
    $sqlSelect = "SELECT * FROM data_pendudk";
    $result = mysqli_query($conn, $sqlSelect);

if (mysqli_num_rows($result) > 0)
{
?>
        
    <table class='tutorial-table'>
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>

            </tr>
        </thead>
<?php
    while ($row = mysqli_fetch_array($result)) {
?>                  
        <tbody>
        <tr>
            <td><?php  echo $row['nama']; ?></td>
            <td><?php  echo $row['umur']; ?></td>
        </tr>
<?php
    }
?>
        </tbody>
    </table>
<?php 
} 
?>
        
<!--         // $Reader = new SpreadsheetReader($targetPath);
        
        // $sheetCount = count($Reader->sheets());
        
        // for($i=0;$i<$sheetCount;$i++)
        // {
        //     $Reader->ChangeSheet($i);
            
        //     foreach ($Reader as $Row)
        //     {
          
        //         $name = "";
        //         if(isset($Row[0])) {
        //             $name = mysqli_real_escape_string($conn,$Row[0]);
        //         }
                
        //         $description = "";
        //         if(isset($Row[1])) {
        //             $description = mysqli_real_escape_string($conn,$Row[1]);
        //         }
                
        //         if (!empty($name) || !empty($description)) {
        //             $query = "insert into tbl_info(name,description) values('".$name."','".$description."')";
        //             $result = mysqli_query($conn, $query);
                
        //             if (! empty($result)) {
        //                 $type = "success";
        //                 $message = "Excel Data Imported into the Database";
        //             } else {
        //                 $type = "error";
        //                 $message = "Problem in Importing Excel Data";
        //             }
        //         }
        //      }
        
        //  } -->
<!-- CREATE TABLE data_pendudk(
	nik varchar(255) NULL PRIMARY KEY,
	no_kk varchar(255) NULL,
	nama varchar(255) NULL,
	jenis_kelamin varchar(255) NULL,
	ttl varchar(255) NULL,
	umur varchar(255) NULL,
	alamat varchar(255) NULL,
	rt_rw varchar(255) NULL,
	dusun varchar(255) NULL,
	desa varchar(255) NULL,
	kecamatan varchar(255) NULL,
	agama varchar(255) NULL,
	kewarganegaraan varchar(255) NULL,
	status_perkawinan varchar(255) NULL,
	golongan_darah varchar(255) NULL,
	status_dalam_keluarga varchar(255) NULL,
	kategori_sosial varchar(255) NULL,
	pekerjaan varchar(255) NULL,
	nama_bapak varchar(255) NULL,
	nama_ibu varchar(255) NULL
); -->