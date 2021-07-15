<!-- import excel ke mysql -->
<!-- www.malasngoding.com -->

<?php 
// menghubungkan dengan koneksi
include 'koneksi.php';
// menghubungkan dengan library excel reader
include "excel_reader2.php";
?>

<?php
// upload file xls
$target = basename($_FILES['filepegawai']['name']) ;
move_uploaded_file($_FILES['filepegawai']['tmp_name'], $target);

// beri permisi agar file xls dapat di baca
chmod($_FILES['filepegawai']['name'],0777);

// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['filepegawai']['name'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);

// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i=2; $i<=$jumlah_baris; $i++){

	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$performance_indicator = $data->val($i, 1);
	$unit   = $data->val($i, 2);
	$mtd_tgt  = $data->val($i, 3);
	$mtd_real   = $data->val($i, 4);
	$mtd_gap  = $data->val($i, 5);
	$mtd_ach   = $data->val($i, 6);
	$ytd_tgt  = $data->val($i, 7);
	$ytd_real   = $data->val($i, 8);
	$ytd_gap  = $data->val($i, 9);
	$ytd_ach   = $data->val($i, 10);
	$scale  = $data->val($i, 11);
	$last_week_scale   = $data->val($i, 12);
	$last_week_mtd  = $data->val($i, 13);
	$last_week_ytd   = $data->val($i, 14);
	

	if($performance_indicator != "" && $unit != "" && $mtd_tgt != ""  
	&& $mtd_real != "" && $mtd_gap != "" && $mtd_ach != ""
	&& $ytd_tgt != "" && $ytd_real != "" && $ytd_gap != ""
	&& $ytd_ach != "" && $scale != "" && $last_week_scale != ""
	&& $last_week_mtd != "" && $last_week_ytd != ""){
		// input data ke database (table data_pegawai)
		mysqli_query($koneksi,"INSERT into tpegawai values('','$performance_indicator','$unit','$mtd_tgt'
		,'$mtd_real','$mtd_gap','$mtd_ach'
		,'$ytd_tgt','$ytd_real','$ytd_gap'
		,'$ytd_ach','$scale','$last_week_scale', $last_week_mtd, '$last_week_ytd')");
		$berhasil++;
	}
}

// hapus kembali file .xls yang di upload tadi
unlink($_FILES['filepegawai']['name']);

// alihkan halaman ke index.php
header("location:view.php?berhasil=$berhasil");
?>