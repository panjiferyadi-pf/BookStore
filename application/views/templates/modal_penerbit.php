<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambahkan Penerbit Baru</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        </button>
      </div>

      <form action="<?=base_url('Pages/simpan_penerbit');?>" method="POST">
        <div class="modal-body">
        
        <div class="form-floating mb-3">
            <input type="text" 
                   class="form-control"
                   id="floatingInput" 
                   placeholder="Nama Penerbit"
                   name="namaPenerbit">
                   <label for="floatingInput">Nama Penerbit</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" 
                   class="form-control"
                   id="floatingInput" 
                   placeholder="Alamat Penerbit"
                   name="alamatPenerbit">
           <label for="floatingInput">Alamat Penerbit</label>
        </div>

        </div>
        <div class="modal-footer">
            <button type="button" 
                    class="btn btn-secondary" 
                    data-bs-dismiss="modal">
                        Tutup
            </button>
            <button type="submit" 
                    class="btn btn-primary">
                        Tambahkan
            </button>
        </div>
      </form>



    </div>
  </div>
</div>