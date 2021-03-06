<script>
    $(document).ready(function () {
        $('#datatable').DataTable();
    });

</script>

<h2>Daftar Barang Berdasarkan Lokasi</h2>
<div class="divider"></div>
<br/>

<style>
    p{
    padding-bottom: 20px;
    }
</style>

<p><?php echo "<a href='" . base_url('index.php/C_TambahBarang/TambahBarangAdmin') . '/' . "'>Tambah Baru</a>"; ?></p>


<?php
echo "<table id='datatable' class='display' cellspacing='0' width='100%'>";
$header = "<thead>
        <tr>
            <th>Divisi</th>
            <th>Serial Number</th>
            <th>Tipe Barang</th>
            <th>Nama Barang</th>
            <th>Lokasi Sekarang</th>
            <th>Tanggal Dibuat</th>
            <th>Terakhir Update</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>";
$footer = "<tfoot>
        <tr>
            <th>Divisi</th>
            <th>Serial Number</th>
            <th>Tipe Barang</th>
            <th>Nama Barang</th>
            <th>Lokasi Sekarang</th>
            <th>Tanggal Dibuat</th>
            <th>Terakhir Update</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </tfoot>";
echo $header;
echo $footer;
echo "<tbody>";

foreach ($query as $row) {
    echo "<tr>";
    echo "<td>";
    echo $row->Divisi;
    echo "</td><td>";
    echo "<a href='" . '' . "'>$row->SerialNumber</a>";
    echo "</td><td>";
    echo $row->TipeBarang;
    echo "</td><td>";
    echo $row->NamaBarang;
    echo "</td><td>";
    echo $row->Lokasi2;
    echo "</td><td>";
    echo $row->TanggalBuat;
    echo "</td><td>";
    echo $row->LastUpdate;
    echo "</td><td>";
    echo $row->Status;
    echo "</td><td>";
    echo "<a href='" . base_url('index.php/C_Edit/Edit') . '/' . $row->SerialNumber . "'>Edit</a>" . ' ' . 
            "<a href='" . base_url('index.php/C_HapusBarang/Hapus') . '/' . $row->SerialNumber . "'>Hapus</a>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
?>