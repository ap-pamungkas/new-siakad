<x-guru>
    
    <h1>Tambah Data Kelas</h1>
    <hr>
    
    <form action="{{ url('guru/siswa') }}" method="POST">
        @csrf
      
       <input type="hidden" name="guru_id" value="{{$idGuru}}" id="">
      
        <div class="row mt-5">
            <label for="" class="ml-3"><h4><strong>Data Siswa</strong></h4></label>
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
</x-guru>