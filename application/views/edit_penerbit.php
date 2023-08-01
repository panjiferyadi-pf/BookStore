<form action="<?=base_url('Pages/update_penerbit');?>" method="POST">
  <div class="modal-body">
  
  <div class="form-floating mt-4 mb-3">
    <input type="text" class="form-control" name="kodePenerbit" value="<?=$data_penerbit['kode_penerbit'];?>" readonly>
      <label for="floatingInput">Kode Penerbit</label>
  </div>
  
  <div class="form-floating mb-3">
    <input type="text" class="form-control" name="namaPenerbit" id="floatingInput" placeholder="Nama Penerbit" value="<?=$data_penerbit['nama_penerbit'];?>">
        
    <label for="floatingInput">Nama Penerbit</label>
  </div>

  <div class="form-floating mb-3">
    <input type="text" class="form-control" name="alamatPenerbit" id="floatingInput" placeholder="Alamat Penerbit" value="<?=$data_penerbit['alamat_penerbit'];?>">
        
    <label for="floatingInput">Alamat Penerbit</label>
   </div>


    </div>

    <div class="modal-footer mt-2">
      <button type="button" class="btn btn-secondary" style="margin-right:10px" onclick="history.back()">Kembali</button>
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </div>
</form>