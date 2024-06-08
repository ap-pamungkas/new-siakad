 
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Kelas</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="{{url('admin/master-data/kelas')}}" method="POST" enctype="multipart/form-data" >
          @csrf
          <div class="row">
            <div class="col-md-12">
                <label for="" class="form-label">Nama Kelas</label></label>
                <input type="text" name="kelas_nama"  placeholder="Contoh 7A" class="form-control">

             
            </div>
            <div class="col-md-12">
                <label for="" class="form-label">Tingkat</label></label>
                <input type="number" name="kelas_tingkat" min="7" max="9" class="form-control">

             
            </div>
          
          </div>
        

        
          <div class="row mt-3">
            <div class="col-md-12">
                <button class=" btn btn-primary float-right">Simpan</button>
            </div>
   
      </div>
        </form>
        </div>
        </div>
        
      </div>
    </div>
  </div>
