<div class="col-xl-12">
         <div class="card">
         <form action="<?= base_url('admin/caraousel/simpan') ?>" method="post" enctype="multipart/form-data">
            <h5 class="card-header">File input</h5>
            <div class="card-body">
                <div class="col mb-3">
              <label class="form-label">JUDUL</label>
              <input type="text" class="form-control" placeholder="Judul foto" name="judul" required>
              <div class="mb-3">
                <label for="formFileDisabled" class="form-label">pilih foto dgn ukuran (1:3)</label>
                <input class="form-control" type="file" name="foto" >
            </div>
             </div>
             <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </from>
    </div>
</div>
<?php foreach ($caraousel as $aa){ ?>
<div class="col-md12 mb-3 mt-3">
    <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="<?= base_url('assets/upload/carousel/'.$aa['foto']) ?>">
    <div class="card-body">
        <h5 class="card-title"><?= $aa['judul'] ?></h5>
        <a href="<?php echo site_url('admin/caraousel/delete_data/'.$aa['foto']);?>"
        class="btn rounded-pill btn-outline-danger" onClick="return confirm('yang bener di hapus?')" ><span
        class="tf-icons bx bx-trash-alt"></span>   
        </a>
    </div>
</div>
<?php } ?>