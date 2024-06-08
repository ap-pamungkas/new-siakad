<x-siswa>
    
    <h1>Data Nilai {{ auth('siswa')->user()->nama}}</h1>

 
 

    <hr>
    <x-tables.table id="datatable" >
        <thead>
          <tr>
            <x-tables.th title="No" />
         

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

           
        
          
          <x-tables.td title="{{ $item->mapel->mapel_nama}}"  />
          <x-tables.td title="{{ $item->semester->semester_tingkat}}"  />
          <x-tables.td title="{{ $item->semester->tahun_ajaran}}"  />
          <x-tables.td title="{{ $item->nilai_tugas}}"  />
          <x-tables.td title="{{ $item->nilai_ulangan}}"  />
          <x-tables.td title="{{ $item->nilai_uts}}"  />
          <x-tables.td title="{{ $item->nilai_uas}}"  />
          <x-tables.td title="{{ $item->total}}"  />
    
       
        </tr>
    
         @endforeach
        </tbody>
    
      </x-tables.table>


</x-siswa>