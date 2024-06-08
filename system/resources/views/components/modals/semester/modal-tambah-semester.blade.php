 
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Semester</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="{{url('admin/master-data/semester')}}" method="POST"  >
          @csrf
          <div class="row">
            <div class="col-md-12">
                <label for="" class="form-label">Semester</label></label>
                <select required class="form-control select2" style="width: 100%;" name="semester_tingkat">
                    <option hidden >Pilih Semester</option>
                    <option value="genap">genap</option>
                    <option value="ganjil">Ganjil</option>


                  </select>

             
            </div>
            <div class="col-md-12">
                <label for="" class="form-label">Tahun Ajaran</label></label>
                <input required type="text" name="tahun_ajaran" placeholder="Contoh : 2022/2023" min="7" max="9" class="form-control">

             
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
