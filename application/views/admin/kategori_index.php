<div id="myalert">
  <?= $this->session->flashdata('alert', true) ?>
</div> 
<!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
    Tambah kategori
  </button>

  <!-- Modal -->
  <div class="modal fade" id="basicModal" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <form action="<?= base_url('admin/kategori/simpan') ?>" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel1">Tambah kategori</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col mb-3">
              <label class="form-label">Nama kategori</label>
              <input type="text" name="nama_kategori" class="form-control" placeholder="Nama Kategori" required>
            </div>  
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
            Close
          </button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
      </form>
    </div>
  </div>
  <div class="mt-3"> 
    <div class="card">
        <h5 class="card-header">kategori</h5>
          <div class="table-responsive text-nowrap">
            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama kategori</th>
                  <th>aksi</th> 
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
			      <?php $no=1; foreach($kategori as $aa) { ?>
                  <tr>
                    <td><?= $no; ?></td>
                    <td><?= $aa['nama_kategori'] ?></td>
                    <td>
                      <a href="<?= base_url('admin/kategori/delete_data/'.$aa['id_kategori']); ?>"
                      class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ini?')"><span 
                      class="tf-icons bx bx-trash"></span></a>
                      <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#edit<?=$aa['id_kategori']?>">
                        <span class="tf-icons bx bx-edit"></span>
                      </button>
                    </tr> 
                      <div class="modal fade" id="edit<?=$aa['id_kategori']?>" tabindex="-1" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <form action="<?= base_url('admin/kategori/update') ?>" method="post">
                          <input type="hidden" name="id_kategori" value="<?=$aa['id_kategori']?>">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel1">Perbarui kategori</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <div class="row">
                                <div class="col mb-3">
                                  <label class="form-label">Nama kategori</label>
                                  <input type="text" name="nama_kategori" class="form-control" value="<?= $aa['nama_kategori'] ?>">
                                </div>  
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                              </button>
                              <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                          </div>
                          </form>
                        </div>
                      </div>
                    </td> 
			        <?php $no++; } ?>
              </tbody>
            </table>
          </div>
      </div>  
  </div>