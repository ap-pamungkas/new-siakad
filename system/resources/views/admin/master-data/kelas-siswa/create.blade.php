<x-app>
    
    <h1>Tambah Data Kelas</h1>
    <hr>
    
    <form action="{{ url('admin/master-data/kelas-siswa/') }}" method="POST">
        @csrf
        <input type="hidden" name="kode" value="{{$kode}}" >
        <div class="row">

            <div class="col-md-6">
                <label for="kelas_id" class="form-label">Kelas</label>
                <select required class="form-control select2" style="width: 100%;" name="kelas_id" id="kelas_id">
                  <option>--- Pilih ---</option>
                  @foreach ($list_kelas as $kelas)
                  <option value="{{$kelas->kelas_id}}">{{$kelas->kelas_nama}}</option>
                  @endforeach
                </select>
                @error('kelas_id')
                    <span>{{$message }}</span>
                @enderror
              </div>
            <div class="col-md-6">
                <label for="guru_id" class="form-label">Wali Kelas</label>
                <select required class="form-control select2" style="width: 100%;" name="guru_id" id="guru_id">
                  <option hidden> Wali Kelas</option>
                  @foreach ($list_guru as $item)
                  <option value="{{$item->guru_id}}">{{$item->nama    }}</option>
                  @endforeach
                </select>
              </div>
    
    
        </div>
    
        <hr>
        <div class="row mt-5">
            <label for="" class="ml-3">Mapel</label>
            <div class="col-md-12">
                <x-tables.table  >
                    <thead>
                        <tr>
                            <x-tables.th title="No"  />
                            <x-tables.th title="Mapel"  />
                            <x-tables.th title="Pilih"  />
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_mapel as $mapel)
                        <tr>
                            <x-tables.td title="{{$loop->iteration}}"  />
                            <x-tables.td title="{{$mapel->mapel_nama}}"  /> 
                            <x-tables.td-action> 
                                <input id="remember-2" type="checkbox" name="mapel_id[]" value="{{ $mapel->mapel_id }}">
                            </x-tables.td-action> 
                        </tr>
                        @endforeach
                      </tbody>
                </x-tables.table>
            </div>
        </div>
        <hr>
        <div class="row mt-5">
            <label for="" class="ml-3">Siswa</label>
            <div class="col-md-12">
                <x-tables.table  >
                    <thead>
                        <tr>
                            <x-tables.th title="No"  />
                            <x-tables.th title="NIS"  />
                            <x-tables.th title="Nama"  />
                            <x-tables.th title="Pilih"  />
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_siswa as $siswa)
                        <tr>
                            <x-tables.td title="{{$loop->iteration}}"  />
                            <x-tables.td title="{{$siswa->nisn}}"  /> 
                            <x-tables.td title="{{$siswa->nama}}"  /> 
                            <x-tables.td-action> 
                                <input id="remember-2" type="checkbox" name="siswa_id[]" value="{{ $siswa->siswa_id }}">
                            </x-tables.td-action> 
                        </tr>
                        @endforeach
                      </tbody>
                </x-tables.table>
            </div>
        </div>
        <button class="btn btn-primary float-right">SIMPAN</button>
    </form>
</x-app>