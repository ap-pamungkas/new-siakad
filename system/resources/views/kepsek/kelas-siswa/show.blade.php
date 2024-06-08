<x-kepsek>
  @foreach ($list as $item) @endforeach
    <h1 class="text-center">Data Kelas {{ $list->first()->kelas->kelas_nama }}</h1>
    <br>
    <hr>
  
    <br>
    <h3><strong>Wali Kelas : {{$list->first()->guru->nama}}</strong></h3>
    <hr>
    <div class="row mt-5">
        <label for="" class="ml-3"><h4><strong>Mata Pelajaran</strong></h4></label>
        <div class="col-md-12">
          <x-tables.table  >
            <thead>
              <tr>
                <x-tables.th title="No" />
                <x-tables.th title="Mata Pelajaran" />
                <x-tables.th title="Kode Mata Pelajaran" />
                </tr>
            </thead>
            <tbody>
              @foreach ($list as $mapels) 
               
                <tr>

                  <x-tables.td title=" {{$loop->iteration}}" />
                  <x-tables.td title=" {{$mapels->mapel->first()->mapel_nama}}" />
                  <x-tables.td title=" {{$mapels->mapel->first()->mapel_kode}}" />
    
    
                
              </tr>
              @endforeach
            </tbody>
          </x-tables.table>
        </div>
      </div>
      <hr>
  
    <div class="row mt-5">
      <label for="" class="ml-3"><h4><strong>Data Siswa</strong></h4></label>
      <div class="col-md-12">
        <x-tables.table id="datatable" >
          <thead>
            <tr>
              <x-tables.th title="No" />
              <x-tables.th title="Nama Siswa" />
              <x-tables.th title="NISN" />
              </tr>
          </thead>
          <tbody>
            
            @foreach ($item->kelasSiswaDetail as $detail)
            <tr>

              <x-tables.td title="{{ $loop->iteration}}" />
              <x-tables.td title="{{ $detail->siswa->nama }}" />
              <x-tables.td title="{{ $detail->siswa->nisn }}" />


            
          </tr>
        @endforeach
           
          </tbody>
        </x-tables.table>


      </div>
    </div>
      

  
  </x-kepsek>
  