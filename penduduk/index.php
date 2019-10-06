<?php 
	include '../template/header.php';

require_once '../assets/Classes/PHPExcel.php'; // Memanggil library PhpExcel
// load file excel
$excel = PHPExcel_IOFactory::load('../excel/data.xlsx');

// Menjalankan atau mengaktifkan lembar kerja excel
$excel->setActiveSheetIndex(0);


//ambil data disini
$i = 4; //samakan dengan baris data pertama di file excel

// perulangan data per baris
$hrf = 'A';
$n=0;
$data = [];
while ($excel->getActiveSheet()->getCell('A'.$i)->getValue() != "") { //selagi ada data
	$data[$n]['nik'] = $excel->getActiveSheet()->getCell($hrf++.$i)->getValue();
	$data[$n]['no_kk'] = $excel->getActiveSheet()->getCell($hrf++.$i)->getValue();
	$data[$n]['nama'] = $excel->getActiveSheet()->getCell($hrf++.$i)->getValue();
	$data[$n]['jenis_kelamin'] = $excel->getActiveSheet()->getCell($hrf++.$i)->getValue();
	$data[$n]['ttl'] = $excel->getActiveSheet()->getCell($hrf++.$i)->getValue();
	$data[$n]['alamat'] = $excel->getActiveSheet()->getCell($hrf++.$i)->getValue();
	$data[$n]['rt_rw'] = $excel->getActiveSheet()->getCell($hrf++.$i)->getValue();
	$data[$n]['dusun'] = $excel->getActiveSheet()->getCell($hrf++.$i)->getValue();
	$data[$n]['desa'] = $excel->getActiveSheet()->getCell($hrf++.$i)->getValue();
	$data[$n]['kecamatan'] = $excel->getActiveSheet()->getCell($hrf++.$i)->getValue();
	$data[$n]['agama'] = $excel->getActiveSheet()->getCell($hrf++.$i)->getValue();
	$data[$n]['kewarganegaraan'] = $excel->getActiveSheet()->getCell($hrf++.$i)->getValue();
	$data[$n]['status_perkawinan'] = $excel->getActiveSheet()->getCell($hrf++.$i)->getValue();
	$data[$n]['golongan_darah'] = $excel->getActiveSheet()->getCell($hrf++.$i)->getValue();
	$data[$n]['status_dalam_keluarga'] = $excel->getActiveSheet()->getCell($hrf++.$i)->getValue();
	$data[$n]['kategori_sosial'] = $excel->getActiveSheet()->getCell($hrf++.$i)->getValue();
	$data[$n]['pekerjaan'] = $excel->getActiveSheet()->getCell($hrf++.$i)->getValue();
	$data[$n]['nama_bapak'] = $excel->getActiveSheet()->getCell($hrf++.$i)->getValue();
	$data[$n]['nama_ibu'] = $excel->getActiveSheet()->getCell($hrf++.$i)->getValue();

	$data[$n]['tempat_lahir'] = '';
	$data[$n]['tgl_lahir'] = '';
	$data[$n]['rt'] = '';
	$data[$n]['rw'] = '';
	$n++;
	$i++;
	$hrf = 'A';
}

	// echo json_encode($data);
	// echo sizeof($data);
	// echo $data[2]['nik'];

?>
<style type="text/css">
	.box-putih{
		background-color: #fff;
		/*padding: 20px 30px;*/
		padding-bottom: 50px;
		margin-bottom: 50px;
	}
	.box-putih h2{
		/*font-weight: bold;*/
		padding: 12px;

	}
	.row{
		padding-left: 10px;
		padding-right: 10px;	
	}
</style>
	<div id="app">
		<div class="box-putih border-bottom text-center">
			<h2 class="label-primary"><strong>Data Penduduk</strong></h2>
			<div class="row">
				<div class="col-md-12">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>No NIK</th>
								<th>No KK</th>
								<th>Nama</th>
								<th>Jenis Kelamin</th>
								<th>Tempat, Tgl Lahir</th>
								<th>Alamat</th>
								<!-- <th>RT/RW</th>
								<th>Dusun</th>
								<th>Desa</th>
								<th>Kecamatan</th> -->
								<th>Agama</th>
								<th>Kewarganegaraan</th>
								<th>Status Perkawinan</th>
								<th>Golongan Darah</th>
								<!-- <th>Status Dalam Keluarga</th>
								<th>Kategori Sosial</th> -->
								<th>Pekerjaan</th>
								<!-- <th>Nama Bapak</th>
								<th>Nama Ibu</th> -->
							</tr>
						</thead>
						<tbody>
							<tr v-for="data in data_penduduk">
								<td>{{data.nik}}</td>
								<td>{{data.no_kk}}</td>
								<td>{{data.nama}}</td>
								<td>{{data.jenis_kelamin}}</td>
								<td>{{data.ttl}}</td>
								<td>{{data.alamat}}</td>
								<!-- <td>{{data.rt_rw}}</td>
								<td>{{data.dusun}}</td>
								<td>{{data.desa}}</td>
								<td>{{data.kecamatan}}</td> -->
								<td>{{data.agama}}</td>
								<td>{{data.kewarganegaraan}}</td>
								<td>{{data.status_perkawinan}}</td>
								<td>{{data.golongan_darah}}</td>
								<!-- <td>{{data.status_dalam_keluarga}}</td>
								<td>{{data.kategori_sosial}}</td> -->
								<td>{{data.pekerjaan}}</td>
								<!-- <td>{{data.nama_bapak}}</td>
								<td>{{data.nama_ibu}}</td> -->

							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
<?php 
	include '../template/footer.php';
?>
<script type="text/javascript">

	var data = {
		nik: '',
		no_kk: '',
		nama: '',
		jenis_kelamin: '',
		tempat_lahir: '',
		tgl_lahir: '',
		alamat: '',
		rt: '',
		rw: '',
		dusun: '',
		desa: '',
		kecamatan: '',
		agama: '',
		kewarganegaraan: '',
		status_perkawinan: '',
		golongan_darah: '',
		status_dalam_keluarga: '',
		kategori_sosial: '',
		pekerjaan: '',
		nama_bapak: '',
		nama_ibu: '',
	};

	var data = JSON.parse('<?= json_encode($data) ?>');
	console.log(data);
	var vm = new Vue({
	  el: '#app',
	  data: {
	  	data_penduduk: data
	  },
	  methods: {
	  	hari_ini: function() {
		    var mL = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'Desember'];
		    // var mS = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'];
	  		var date = new Date();

	  		return date.getDate() +' '+ mL[date.getMonth()] +' '+ date.getFullYear();
	  	},
	  },
	});
</script>
</body>

<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 15:22:46 GMT -->
</html>