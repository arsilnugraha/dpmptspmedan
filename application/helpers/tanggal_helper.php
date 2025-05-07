<?php
	function tgl_indo($tgl, $panjang = false){
			$tanggal = substr($tgl,8,2);
			$bulan = $panjang ? getBulanPanjang(substr($tgl,5,2)) : getBulan(substr($tgl,5,2));
			$tahun = substr($tgl,0,4);
			return $tanggal.' '.$bulan.' '.$tahun;
	}

	function tgl_grafik($tgl){
        $tanggal = substr($tgl,8,2);
        $bulan = getBulan(substr($tgl,5,2));
        $tahun = substr($tgl,0,4);
        return $tanggal.'_'.$bulan;
}

function getBulan($bln) {
	$bulan = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des"];
	return $bulan[$bln - 1] ?? '';
}

function getBulanPanjang($bln) {
	$bulanPanjang = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
	return $bulanPanjang[$bln - 1] ?? '';
}
?>
