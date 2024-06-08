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
          <form action="{{url('admin/master-data/semester')}}" method="POST">
            @csrf
            <div class="row">
              <div class="col-md-12">
                <label for="kelas" class="form-label">Kelas</label>
                <select required class="form-control select2" style="width: 100%;" name="kelas_id" id="kelas">
                  <option hidden>Pilih kelas</option>
                  @foreach ($kelas as $item)
                  <option value="{{$item->kelas_id}}">{{$item->kelas_nama}}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-md-12">
                <label for="wali_kelas" class="form-label">Wali Kelas</label>
                <select required class="form-control select2" style="width: 100%;" name="guru_id" id="wali_kelas">
                  <option hidden>Pilih Wali Kelas</option>
                  @foreach ($guru as $item)
                  <option value="{{$item->guru_id}}">{{$item->nama}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-12">
                <button class="btn btn-primary float-right">Simpan</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>