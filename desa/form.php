<?php 
    include '../template/header.php';
?>
<style type="text/css">
	.form-horizontal .control-label.text-left{
	    text-align: left;
	}

</style>
<div class="container border-bottom white-bg dashboard-header">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<h2 class="text-center"><strong>Ubah Data Umum Desa</strong></h2> <br>
			<form class="form-horizontal" action="/action_page.php">
			  <div class="form-group">
			    <label class="control-label col-sm-4 text-left" for="nama_desa">NAMA DESA</label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control" name="nama_desa" id="nama_desa" placeholder="Enter Nama Desa">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-4 text-left" for="alamat_desa">ALAMAT DESA</label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control" name="alamat_desa" id="alamat_desa" placeholder="Enter ALAMAT DESA">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-4 text-left" for="kode_pos">KODE POS</label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control" name="kode_pos" id="kode_pos" placeholder="Enter ALAMAT DESA">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-4 text-left" for="logo_desa">LOGO DESA</label>
			    <div class="col-sm-8">
			      <input type="file" class="form-control" name="logo_desa" id="logo_desa" placeholder="Enter ALAMAT DESA">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-4 text-left" for="nama_kepala_desa">NAMA KEPALA DESA</label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control" name="nama_kepala_desa" id="nama_kepala_desa" placeholder="Enter ALAMAT DESA">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-4 text-left" for="jabatan_kepala_desa">JABATAN KEPALA DESA</label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control" name="jabatan_kepala_desa" id="jabatan_kepala_desa" placeholder="Enter ALAMAT DESA">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-4 text-left" for="nama_sekertaris_desa">NAMA SEKERTARIS DESA</label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control" name="nama_sekertaris_desa" id="nama_sekertaris_desa" placeholder="Enter ALAMAT DESA">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-4 text-left" for="jabatan_sekertaris_desa">JABATAN SEKRETARIS DESA</label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control" name="jabatan_sekertaris_desa" id="jabatan_sekertaris_desa" placeholder="Enter ALAMAT DESA">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-4 text-left" for="nama_kasi_pemerintah">NAMA KASI PEMERINTAHAN</label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control" name="nama_kasi_pemerintah" id="nama_kasi_pemerintah" placeholder="Enter ALAMAT DESA">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-4 text-left" for="nama_kasi_kesejahteraan">NAMA KASI KESEJAHTERAAN</label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control" name="nama_kasi_kesejahteraan" id="nama_kasi_kesejahteraan" placeholder="Enter ALAMAT DESA">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-4 text-left" for="nama_kasi_pelayanan">NAMA KASI PELAYANAN</label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control" name="nama_kasi_pelayanan" id="nama_kasi_pelayanan" placeholder="Enter ALAMAT DESA">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-4 text-left" for="nama_kaur_tu">NAMA KAUR TATA USAHA DAN UMUM</label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control" name="nama_kaur_tu" id="nama_kaur_tu" placeholder="Enter ALAMAT DESA">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-4 text-left" for="nama_kaur_keuangan">NAMA KAUR KEUANGAN</label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control" name="nama_kaur_keuangan" id="nama_kaur_keuangan" placeholder="Enter ALAMAT DESA">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-4 text-left" for="nama_kaur_perenanaan">NAMA KAUR PERENANAAN</label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control" name="nama_kaur_perenanaan" id="nama_kaur_perenanaan" placeholder="Enter ALAMAT DESA">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-offset-5 col-sm-10">
			      <button type="submit" class="btn btn-success">Simpan</button>
			    </div>
			  </div>
			</form>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>
<?php 
    include '../template/footer.php';
?>