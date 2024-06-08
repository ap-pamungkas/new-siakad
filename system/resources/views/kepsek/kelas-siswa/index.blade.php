<x-kepsek>

    <div class="row">
     
         <div class="h3">Data {{$title}}</div>
     </div>
     
     
  
         
   
 
     <hr>
   
     
 
      <x-tables.table id="datatable" >
        <thead>
          <tr>
            <x-tables.th title="No" />
            <x-tables.th title="aksi" />
            <x-tables.th title="Kelas" />
            <x-tables.th title="Wali Kelas" />
            <x-tables.th title="Jumlah Siswa" />
            <x-tables.th title="Jumlah Mapel" />
          </tr>
        </thead>
        <tbody>
         @foreach ($list as $kelas_siswa)
         <tr>
          <x-tables.td title="{{$loop->iteration}}" />
          <x-tables.td-action >
            <x-button.btn class="info" title="Info" icons icon="info" url="kelas-siswa/show/{{encrypt($kelas_siswa['kode'])}}/" />
        

          </x-tables.td-action >
          <x-tables.td title="{{ $kelas_siswa['nama_kelas'] }}"  />
          <x-tables.td title="{{ $kelas_siswa['nama_guru'] }}"  />
          <x-tables.td title="{{ $kelas_siswa['jumlah_siswa'] }}"  />
          <x-tables.td title="{{ $kelas_siswa['jumlah_mapel'] }}"  />
       
        </tr>

         @endforeach
        </tbody>
      </x-tables.table>
       
 
  
     <x-utils.notif />

 
   
   

 
 <x-modals.modal id="tambah" action="{{ url('/admin') }}">
    <h2>TAMBAH DATA KELAS SISWA</h2>
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
 </x-modals.modal>
 
 </x-kepsek>