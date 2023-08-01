<div class="card">
  <div class="card-header text-center">
    <h1>Daftar Penerbit</h1>
  </div>

  <div class="card-body">

  <?= $this->session->flashdata('pesan');?>

  <button type="button" class="btn btn-primary col-12 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Penerbit</button>

<table class="table table-hover" id="myTable">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Kode Penerbit</th>
      <th scope="col">Nama Penerbit</th>
      <th scope="col">Alamat Penerbit</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $no = 1;
        foreach($data_penerbit as $row){ ?>
          <tr>
        <th scope="row"><?=$no++;?></th>
        <td><?=$row['kode_penerbit'];?></td>
        <td><?=$row['nama_penerbit'];?></td>
        <td><?=$row['alamat_penerbit'];?></td>
        <td>
          <a href="<?=base_url('Pages/hapus_penerbit')?>/<?=$row['kode_penerbit'];?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">
            <i class="fa fa-trash"></i>
          </a>
          <a href="<?=base_url('Pages/show_edit_page_penerbit')?>/<?=$row['kode_penerbit'];?>" class="btn btn-success btn-sm">
            <i class="fa fa-pencil"></i>
          </a>
      </td>
      </tr>
    <?php }?>
  </tbody>
</table>
  </div>
        </div>























