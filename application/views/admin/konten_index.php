<div id="myalert">
  <?= $this->session->flashdata('alert', true) ?>
</div> 
<!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
    Tambah konten
  </button>

  <!-- Modal -->
  <div class="modal fade" id="basicModal" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <form action="<?= base_url('admin/konten/simpan') ?>" method="post" enctype="multipart/form-data">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel1">Tambah konten</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col mb-3">
              <label class="form-label">JUDUL</label>
              <input type="text" name="judul" class="form-control" placeholder="Judul" required>
            </div>  
          </div>
          <div class="row">
            <div class="col mb-3">
              <label class="form-label">Kategori</label>
              <select name="id_kategori" class="form-control">
                <?php $no=1; foreach($kategori as $aa) { ?>
                    <option value="<?= $aa['id_kategori'] ?>"><?= $aa['nama_kategori'] ?></option>
                <?php $no++; } ?>    
              </select>
            </div>  
          </div>
          <div class="row">
            <div class="col mb-3">
              <label class="form-label">Keterangan</label>
              <textarea name="keterangan" class="form-control"></textarea>
            </div>  
          </div>
          <div class="row">
            <div class="col mb-3">
              <label class="form-label">Foto</label>
              <input type="file" name="foto" class="form-control" placeholder="foto"
              accept="image/png, image/jpg">
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
        <h5 class="card-header">Konten</h5>
          <div class="table-responsive text-nowrap">
            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>judul</th>
                  <th>kategori konten</th>
                  <th>tanggal</th>
                  <th>kreator</th>
                  <th>foto</th>
                  <th>aksi</th> 
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
			      <?php $no=1; foreach($konten as $aa) { ?>
                  <tr>
                    <td><?= $no; ?></td>
                    <td><?= $aa['judul'] ?></td>
                    <td><?= $aa['id_kategori'] ?></td>
                    <td><?= $aa['tanggal'] ?></td>
                    <td><?= $aa['username'] ?></td>
                    <td>
                      <a href="<?php echo site_url ('assets/upload/konten/'.$aa['foto']) ?>"targets="_blank">
                        <span class="tf-icons bx bx-search"></span>Lihat foto
                         </a>
                      </td>
                    <td>
                    <a href="<?= base_url('admin/konten/delete_data/'.$aa['foto']); ?>"
                      class="btn btn-sm btn-danger"
                       onclick="return confirm('Apakah anda yakin menghapus data ini?')"><span 
                      class="tf-icons bx bx-trash"></span></a>
               <!-- button triggermodal -->
                  <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" 
                    data-bs-target="#konten<?= $no;?>">
                      <span class="tf-icons bx bx-edit"></span>
                        </button>
              <!-- Modal -->
              <div class="modal fade" id="konten<?= $no; ?>" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <form action="<?= base_url('admin/konten/update') ?>" method="post"
                   enctype="multipart/form-data">
                   <input type="hidden" name="nama_foto" value="<?= $aa['judul']?>">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="modalCenterTitle"><?= $aa['judul'] ?></h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal"
                       aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col mb-3">
                          <label class="form-label">JUDUL</label>
                          <input type="text" name="judul" class="form-control" value="<?= $aa['judul']?>"
                          name="Judul"/>
                        </div>  
                      </div>
                      <div class="row">
                        <div class="col mb-3">
                          <label class="form-label">Kategori</label>
                          <select name="id_kategori" class="form-control">
                            <?php $no=1; foreach($kategori as $uu) { ?>
                                <option 
                                <?php if($uu['id_kategori']==$aa['id_kategori']){echo"selected";} ?>
                                value="<?= $uu['id_kategori'] ?>">
                                <?= $uu['nama_kategori'] ?></option>
                            <?php $no++; } ?>    
                          </select>
                        </div>  
                      </div>
                      <div class="row">
                        <div class="col mb-3">
                          <label class="form-label">Keterangan</label>
                          <textarea name="keterangan" class="form-control"><?= $aa['keterangan']?>"</textarea>
                        </div>  
                      </div>
                      <div class="row">
                        <div class="col mb-3">
                          <label class="form-label">Foto</label>
                          <input type="file" name="foto" class="form-control" placeholder="foto"
                          accept="image/png, image/jpg">
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
                </td> 
              </tr>
            <?php $no++; } ?>
          </tbody>
          </table>
        </div>
        </div>  
      </div>