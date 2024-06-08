 
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Mata Pelajaran</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="{{url('admin/master-data/mapel')}}" method="POST"  >
          @csrf
          <div class="row">
            <div class="col-md-12">
              <label for="" class="form-label">Mata Pelajaran</label></label>
              <input required type="text" name="mapel_nama"  class="form-control">

             
            </div>
            <div class="col-md-12">
                <label for="" class="form-label">Kode Mata Pelajaran</label></label>
                <input required type="text" name="mapel_kode"  class="form-control">

             
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
