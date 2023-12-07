<div id="myalert">
  <?= $this->session->flashdata('alert', true) ?>
</div> 
<!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
    Tambah User
  </button>

  <!-- Modal -->
  <div class="modal fade" id="basicModal" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <form action="<?= base_url('admin/pengguna/simpan') ?>" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel1">Tambah User</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col mb-3">
              <label class="form-label">Nama</label>
              <input type="text" name="nama" class="form-control" placeholder="Nama" required>
            </div>  
          </div>
          <div class="row">
            <div class="col mb-3">
              <label class="form-label">Username</label>
              <input type="text" name="username" class="form-control" placeholder="Username" required>
            </div>  
          </div>
          <div class="row">
            <div class="col mb-3">
              <label class="form-label">Passworrd</label>
              <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>  
          </div>
          <div class="row">
            <div class="col mb-3">
              <label class="form-label">Level</label>
              <select name="level" class="form-control">
                  <option value="Admin">Admin</option>
                  <option value="Kontributor">Kontributor</option>
              </select>
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
        <h5 class="card-header">Data pengguna</h5>
          <div class="table-responsive text-nowrap">
            <table class="table">
              <thead>
                <tr>
                  <th>Username</th>
                  <th>Nama</th>
                  <th>level</th>
                  <th>aksi</th> 
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
			          <?php foreach($users as $aa) { ?>
                  <tr>
                    <td><?= $aa['username'] ?></td>
                    <td><?= $aa['nama'] ?></td>
                    <td><?= $aa['level'] ?></td> 
                    <td>
                      <a href="<?= base_url('admin/pengguna/delete_data/'.$aa['id_user']); ?>"
                      class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ini?')">
                      <span class="tf-icons bx bx-trash"></span></a>
                      <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#edit<?=$aa['id_user']?>">
                        <span class="tf-icons bx bx-edit"></span>
                      </button>

                      <div class="modal fade" id="edit<?=$aa['id_user']?>" tabindex="-1" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <form action="<?= base_url('admin/pengguna/update') ?>" method="post">
                          <input type="hidden" name="id_user" value="<?=$aa['id_user']?>">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel1">Perbarui User</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <div class="row">
                                <div class="col mb-3">
                                  <label class="form-label">Nama</label>
                                  <input type="text" name="nama" class="form-control" value="<?= $aa['nama'] ?>">
                                </div>  
                              </div>
                              <div class="row">
                                <div class="col mb-3">
                                  <label class="form-label">Username</label>
                                  <input type="text" name="username" class="form-control" value="<?= $aa['username'] ?>" readonly>
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
                  </tr> 
			          <?php } ?>
              </tbody>
            </table>
          </div>
      </div>  
  </div>