<x-guru>
  <button class="float-right btn btn-success" type="button" data-toggle="modal" data-target="#nilaiModal">
      <i class="fa fa-plus"></i> Tambah Data
  </button>
  <h1>Data Nilai</h1>
  <hr>
  @if($list_siswa->isEmpty())
      <div class="alert alert-info" role="alert">
          Anda belum memiliki kelas, minta admin untuk menambahkan kelas.
      </div>
  @else
      <div class="table-responsive">
          <x-tables.table id="datatable">
              <thead>
                  <tr>
                      <x-tables.th title="No" />
                      <x-tables.th title="Aksi" />
                      <x-tables.th title="Nama" />
                      <x-tables.th title="Mata Pelajaran" />
                      <x-tables.th title="Semester" />
                      <x-tables.th title="Tahun Ajaran" />
                      <x-tables.th title="Tugas" />
                      <x-tables.th title="Ulangan" />
                      <x-tables.th title="Uts" />
                      <x-tables.th title="Uas" />
                      <x-tables.th title="Total" />
                  </tr>
              </thead>
              <tbody>
                  @foreach ($list_nilai as $item)
                      <tr>
                          <x-tables.td title="{{$loop->iteration}}" />
                          <x-tables.td-action>
                              <x-button.delete id="{{$item->nilai_id}}" />
                          </x-tables.td-action>
                          <x-tables.td title="{{ $item->siswa->nama}}" />
                          <x-tables.td title="{{ $item->mapel->mapel_nama}}" />
                          <x-tables.td title="{{ $item->semester->semester_tingkat}}" />
                          <x-tables.td title="{{ $item->semester->tahun_ajaran}}" />
                          <x-tables.td title="{{ $item->nilai_tugas}}" />
                          <x-tables.td title="{{ $item->nilai_ulangan}}" />
                          <x-tables.td title="{{ $item->nilai_uts}}" />
                          <x-tables.td title="{{ $item->nilai_uas}}" />
                          <x-tables.td title="{{ $item->total}}" />
                      </tr>
                  @endforeach
              </tbody>
          </x-tables.table>
      </div>


  <x-utils.notif />

  <x-modals.modal id="nilaiModal" action="#">
    <div class="col-md-12">
        <label for="kelas" class="form-label">Nama</label>
        <select required class="form-control select2" style="width: 100%;" name="siswa_id" id="kelas">
            <option hidden>--Pilih--</option>
            @foreach ($list_siswa as $item)
                <option value="{{$item['siswa_id']}}">{{$item['nama']}}</option>
            @endforeach
        </select>
        
    </div>
    <div class="col-md-12">
        <label for="wali_kelas" class="form-label">Mata Pelajaran</label>
        <select required class="form-control select2" style="width: 100%;" name="mapel_id" id="wali_kelas">
            <option hidden>--Pilih--</option>
            @foreach ($list_mapel as $item)
                <option value="{{$item['mapel_id']}}">{{$item['mapel_nama']}}</option>
            @endforeach
        </select>
    </div>
    
      <div class="col-md-12">
          <label for="wali_kelas" class="form-label">Semester</label>
          <select required class="form-control select2" style="width: 100%;" name="semester_id" id="wali_kelas">
              <option hidden>--Pilih--</option>
              @foreach ($list_semester as $item)
                  <option value="{{$item->semester_id}}">{{$item->semester_tingkat}} || {{ $item->tahun_ajaran }}</option>
              @endforeach
          </select>
      </div>
      <div class="col-md-12 mt-4">
          <div class="row">
              <div class="col-md-3">
                  <label for="" class="form-label">Nilai Tugas</label>
                  <input type="text" name="nilai_tugas" class="form-control">
              </div>
              <div class="col-md-3">
                  <label for="" class="form-label">Nilai Ulangan</label>
                  <input type="text" name="nilai_ulangan" class="form-control">
              </div>
              <div class="col-md-3">
                  <label for="" class="form-label">Nilai Uts</label>
                  <input type="text" name="nilai_uts" class="form-control">
              </div>
              <div class="col-md-3">
                  <label for="" the="form-label">Nilai Uas</label>
                  <input type="text" name="nilai_uas" class="form-control">
              </div>
          </div>
      </div>
      <div class="mt-3 mb-3">
          <div class="col-md-12">
              <button class="btn btn-primary float-right">Simpan</button>
          </div>
      </div>
  </x-modals.modal>

  @endif
</x-guru>