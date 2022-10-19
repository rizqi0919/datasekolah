<?php
$data=file_get_contents("https://datasekolahapi.herokuapp.com/api/data");
$sekolah=json_decode($data);
//echo "<pre>";print_r($pahlawan);
$table = "<h3>Daftar Sekolah Dasar (SD) DKI Jakarta</h3>";
$table .= "<table border=1>
            <tr><td>ID</td>
                <td>Nama SD</td>
                <td>NPSN </td>
                <td>Alamat</td>
                <td>Kode Pos</td>
                <td>Desa</td>
                <td>Kecamatan</td>
                <td>Kabupaten</td>
                <td>Propinsi</td>
                </tr>";
for($i=0;$i<count($sekolah->SD->Jakarta->Kepulauan_Seribu);$i++){
    $no=$i+1;
    $table .= "<tr><td>{$no}</td>
                    <td>{$sekolah->SD->Jakarta->Kepulauan_Seribu[$i]->nama}</td>
                    <td>{$sekolah->SD->Jakarta->Kepulauan_Seribu[$i]->npsn}</td>
                    <td>{$sekolah->SD->Jakarta->Kepulauan_Seribu[$i]->alamat}</td>
                    <td>{$sekolah->SD->Jakarta->Kepulauan_Seribu[$i]->kodepos}</td>
                    <td>{$sekolah->SD->Jakarta->Kepulauan_Seribu[$i]->desa}</td>
                    <td>{$sekolah->SD->Jakarta->Kepulauan_Seribu[$i]->kecamatan}</td>
                    <td>{$sekolah->SD->Jakarta->Kepulauan_Seribu[$i]->kabupaten}</td>
                    <td>{$sekolah->SD->Jakarta->Kepulauan_Seribu[$i]->provinsi}</td></tr>";
}

for($i=0;$i<count($sekolah->SD->Jakarta->Cilandak);$i++){
    $no=$i+1;
    $table .= "<tr><td>{$no}</td>
                    <td>{$sekolah->SD->Jakarta->Cilandak[$i]->nama}</td>
                    <td>{$sekolah->SD->Jakarta->Cilandak[$i]->npsn}</td>
                    <td>{$sekolah->SD->Jakarta->Cilandak[$i]->alamat}</td>
                    <td>{$sekolah->SD->Jakarta->Cilandak[$i]->kodepos}</td>
                    <td>{$sekolah->SD->Jakarta->Cilandak[$i]->desa}</td>
                    <td>{$sekolah->SD->Jakarta->Cilandak[$i]->kecamatan}</td>
                    <td>{$sekolah->SD->Jakarta->Cilandak[$i]->kota}</td>
                    <td>{$sekolah->SD->Jakarta->Cilandak[$i]->provinsi}</td></tr>";
}

for($i=0;$i<count($sekolah->SD->Jakarta->Jagakarsa);$i++){
    $no=$i+1;
    $table .= "<tr><td>{$no}</td>
                    <td>{$sekolah->SD->Jakarta->Jagakarsa[$i]->nama}</td>
                    <td>{$sekolah->SD->Jakarta->Jagakarsa[$i]->npsn}</td>
                    <td>{$sekolah->SD->Jakarta->Jagakarsa[$i]->alamat}</td>
                    <td>{$sekolah->SD->Jakarta->Jagakarsa[$i]->kodepos}</td>
                    <td>{$sekolah->SD->Jakarta->Jagakarsa[$i]->desa}</td>
                    <td>{$sekolah->SD->Jakarta->Jagakarsa[$i]->kecamatan}</td>
                    <td>{$sekolah->SD->Jakarta->Jagakarsa[$i]->kota}</td>
                    <td>{$sekolah->SD->Jakarta->Jagakarsa[$i]->provinsi}</td></tr>";
}
for($i=0;$i<count($sekolah->SD->Jakarta->Kebayoran_baru);$i++){
    $no=$i+1;
    $table .= "<tr><td>{$no}</td>
                    <td>{$sekolah->SD->Jakarta->Kebayoran_baru[$i]->nama}</td>
                    <td>{$sekolah->SD->Jakarta->Kebayoran_baru[$i]->npsn}</td>
                    <td>{$sekolah->SD->Jakarta->Kebayoran_baru[$i]->alamat}</td>
                    <td>{$sekolah->SD->Jakarta->Kebayoran_baru[$i]->kodepos}</td>
                    <td>{$sekolah->SD->Jakarta->Kebayoran_baru[$i]->desa}</td>
                    <td>{$sekolah->SD->Jakarta->Kebayoran_baru[$i]->kecamatan}</td>
                    <td>{$sekolah->SD->Jakarta->Kebayoran_baru[$i]->kota}</td>
                    <td>{$sekolah->SD->Jakarta->Kebayoran_baru[$i]->provinsi}</td></tr>";
}
for($i=0;$i<count($sekolah->SD->Jakarta->Jakarta_pusat);$i++){
    $no=$i+1;
    $table .= "<tr><td>{$no}</td>
                    <td>{$sekolah->SD->Jakarta->Jakarta_pusat[$i]->nama}</td>
                    <td>{$sekolah->SD->Jakarta->Jakarta_pusat[$i]->npsn}</td>
                    <td>{$sekolah->SD->Jakarta->Jakarta_pusat[$i]->alamat}</td>
                    <td>{$sekolah->SD->Jakarta->Jakarta_pusat[$i]->kodepos}</td>
                    <td>{$sekolah->SD->Jakarta->Jakarta_pusat[$i]->desa}</td>
                    <td>{$sekolah->SD->Jakarta->Jakarta_pusat[$i]->kecamatan}</td>
                    <td>{$sekolah->SD->Jakarta->Jakarta_pusat[$i]->kota}</td>
                    <td>{$sekolah->SD->Jakarta->Jakarta_pusat[$i]->provinsi}</td></tr>";
}
for($i=0;$i<count($sekolah->SD->Jakarta->Cipayung);$i++){
    $no=$i+1;
    $table .= "<tr><td>{$no}</td>
                    <td>{$sekolah->SD->Jakarta->Cipayung[$i]->nama}</td>
                    <td>{$sekolah->SD->Jakarta->Cipayung[$i]->npsn}</td>
                    <td>{$sekolah->SD->Jakarta->Cipayung[$i]->alamat}</td>
                    <td>{$sekolah->SD->Jakarta->Cipayung[$i]->kodepos}</td>
                    <td>{$sekolah->SD->Jakarta->Cipayung[$i]->desa}</td>
                    <td>{$sekolah->SD->Jakarta->Cipayung[$i]->kecamatan}</td>
                    <td>{$sekolah->SD->Jakarta->Cipayung[$i]->kota}</td>
                    <td>{$sekolah->SD->Jakarta->Cipayung[$i]->provinsi}</td></tr>";
}
for($i=0;$i<count($sekolah->SD->Jakarta->Pulo_gadung);$i++){
    $no=$i+1;
    $table .= "<tr><td>{$no}</td>
                    <td>{$sekolah->SD->Jakarta->Pulo_gadung[$i]->nama}</td>
                    <td>{$sekolah->SD->Jakarta->Pulo_gadung[$i]->npsn}</td>
                    <td>{$sekolah->SD->Jakarta->Pulo_gadung[$i]->alamat}</td>
                    <td>{$sekolah->SD->Jakarta->Pulo_gadung[$i]->kodepos}</td>
                    <td>{$sekolah->SD->Jakarta->Pulo_gadung[$i]->desa}</td>
                    <td>{$sekolah->SD->Jakarta->Pulo_gadung[$i]->kecamatan}</td>
                    <td>{$sekolah->SD->Jakarta->Pulo_gadung[$i]->kota}</td>
                    <td>{$sekolah->SD->Jakarta->Pulo_gadung[$i]->provinsi}</td></tr>";
}
for($i=0;$i<count($sekolah->SD->Jakarta->Tebet);$i++){
    $no=$i+1;
    $table .= "<tr><td>{$no}</td>
                    <td>{$sekolah->SD->Jakarta->Tebet[$i]->nama}</td>
                    <td>{$sekolah->SD->Jakarta->Tebet[$i]->npsn}</td>
                    <td>{$sekolah->SD->Jakarta->Tebet[$i]->alamat}</td>
                    <td>{$sekolah->SD->Jakarta->Tebet[$i]->kodepos}</td>
                    <td>{$sekolah->SD->Jakarta->Tebet[$i]->desa}</td>
                    <td>{$sekolah->SD->Jakarta->Tebet[$i]->kecamatan}</td>
                    <td>{$sekolah->SD->Jakarta->Tebet[$i]->kota}</td>
                    <td>{$sekolah->SD->Jakarta->Tebet[$i]->provinsi}</td></tr>";
}
for($i=0;$i<count($sekolah->SD->Jakarta->Setiabudi);$i++){
    $no=$i+1;
    $table .= "<tr><td>{$no}</td>
                    <td>{$sekolah->SD->Jakarta->Setiabudi[$i]->nama}</td>
                    <td>{$sekolah->SD->Jakarta->Setiabudi[$i]->npsn}</td>
                    <td>{$sekolah->SD->Jakarta->Setiabudi[$i]->alamat}</td>
                    <td>{$sekolah->SD->Jakarta->Setiabudi[$i]->kodepos}</td>
                    <td>{$sekolah->SD->Jakarta->Setiabudi[$i]->desa}</td>
                    <td>{$sekolah->SD->Jakarta->Setiabudi[$i]->kecamatan}</td>
                    <td>{$sekolah->SD->Jakarta->Setiabudi[$i]->kota}</td>
                    <td>{$sekolah->SD->Jakarta->Setiabudi[$i]->provinsi}</td></tr>";
}
for($i=0;$i<count($sekolah->SD->Jakarta->Pesanggrahan);$i++){
    $no=$i+1;
    $table .= "<tr><td>{$no}</td>
                    <td>{$sekolah->SD->Jakarta->Pesanggrahan[$i]->nama}</td>
                    <td>{$sekolah->SD->Jakarta->Pesanggrahan[$i]->npsn}</td>
                    <td>{$sekolah->SD->Jakarta->Pesanggrahan[$i]->alamat}</td>
                    <td>{$sekolah->SD->Jakarta->Pesanggrahan[$i]->kodepos}</td>
                    <td>{$sekolah->SD->Jakarta->Pesanggrahan[$i]->desa}</td>
                    <td>{$sekolah->SD->Jakarta->Pesanggrahan[$i]->kecamatan}</td>
                    <td>{$sekolah->SD->Jakarta->Pesanggrahan[$i]->kota}</td>
                    <td>{$sekolah->SD->Jakarta->Pesanggrahan[$i]->provinsi}</td></tr>";
}
$table .= "</table>";
echo $table;

?>
