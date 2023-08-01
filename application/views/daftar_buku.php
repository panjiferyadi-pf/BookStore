<div class="card">
  <div class="card-header text-center">
      <h1>Daftar Buku</h1>
  </div>
  <div class="card-body">

  <!-- Menampilkan Flash Data -->
  <?= $this->session->flashdata('pesan');?>

  <!-- Tombol Tambah -->
  <!-- Button trigger modal -->
  <!-- col-12 di bootstrap itu full kanan kiri.
        mb-3 itu margin bottom maksimalnya 5, kalau mau lebih luas pakai space
        mt itu margin top -->
  <button type="button" class="btn btn-primary col-12 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Buku</button>

  <table class="table table-striped table-hover" id="myTable">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Kode Buku</th>
      <th scope="col">Judul Buku</th>
      <th scope="col">Tahun Terbit</th>
      <th scope="col">Penerbit</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $no = 1;
        foreach($data_buku as $row)
        { ?>
      <tr>
        <th scope="row"><?=$no++;?></th>
        <td><?=$row['kode_buku'];?></td>
        <td><?=$row['judul_buku'];?></td>
        <td><?=$row['tahun_terbit'];?></td>
        <td><?=$row['nama_penerbit'];?></td>
        <td>
          
                          <!-- <a href="<?=base_url('Pages/hapus_buku/').$row['kode_buku'];?>"  -->

          <a href="<?=base_url('Pages/hapus_buku')?>/<?=$row['kode_buku'];?>" 
            class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">
            <i class="fa fa-trash" aria-hidden="true"></i> 
            </a>

            <!-- <a href="<?=base_url('Pages/show_edit_page').$row['kode_buku'];?>"  -->


            <a href="<?=base_url('Pages/show_edit_page')?>/<?=$row['kode_buku'];?>" 
            class="btn btn-success btn-sm">
            <i class="fa fa-pencil"></i>
            </a>
        </td>

      </tr>
    <?php 
  }?>
  </tbody>
</table>
      </div>
        </div>