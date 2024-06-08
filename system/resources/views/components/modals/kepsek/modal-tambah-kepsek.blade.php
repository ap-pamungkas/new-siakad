 
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Guru</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="{{url('admin/master-data/kepsek')}}" method="POST" enctype="multipart/form-data" >
          @csrf
          <div class="row">
            <div class="col-md-12">
                <label for="" class="form-label">Nama</label></label>
                <input type="text" name="nama" class="form-control">

             
            </div>
            <div class="col-md-12">
                <label for="" class="form-label">NIP</label></label>
                <input type="text" name="nip" class="form-control">

             
            </div>
            <div class="col-md-12">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="email" class="form-control" required>
          </div>
          <div class="col-md-12">
            <label for="" class="form-label">Jenis Kelamin</label></label>
            <select required class="form-control select2" style="width: 100%;" name="jk">
                <option hidden ><center>--pilih--</center></option>
                <option value="laki-laki">Laki-laki</option>
                <option value="perempuan">Perempuan</option>


              </select>

         
        </div>
          <div class="col-md-12">
            <label for="alamat" class="form-label">Alamat</label>
          <textarea name="alamat" class="form-control" id="" cols="30" rows="10"></textarea>
        </div>
          </div>
          <div class="row">
            <div class="col-md-6">
                <label for="" class="form-label">Foto</label></label>
                <input type="file" name="foto" class="form-control" >


             
            </div>
            <div class="col-md-6">
                <label for="" class="form-label">Password</label></label>
                <input type="password" name="password" class="form-control">

             
            </div>

            
          </div>
          <div class="row mt-3">
            <div class="col-md-12">
                <button class=" btn btn-primary float-right">Simpan</button>
            </div>
        </form>
        </div>
        </div>
        
      </div>
    </div>
  </div>
