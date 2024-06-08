<x-app>

    <div class="row">
     <div class="col-md-10">
 
         <div class="h3">Data {{$title}}</div>
     </div>
     
     <button class="float-right btn btn-success "  type="button" class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal">
       <i class="fa fa-plus"></i> Tambah Data 
       </button>
         </div>
  
         
   
 
     <hr>
   
     
 
      <table  id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0;">
         <thead>
             <tr>
             
              
                   <th width="10%"> <center>No
                   </center></th>
 
                 <center>
 
                   <th width="10%">  <center>Aksi</center></th>
                
                 
 
                   <th><center>kelas</center></th>
                 
               <th>
                 <center>
 
                Nama Kelas  
                 </center>
               </th>
              
                
             </tr>
         </thead>
         <tbody>
             @foreach ($list_kelas as $kelas)
             <tr>
                 <td>{{$loop->iteration}}</td>
                <td>
                <center>
                 
                 
                
                 
                 <x-button.delete id="{{$kelas->kelas_id}}" />
                </center>
                </td>
                <td>
                 {{$kelas->kelas_tingkat}}</td>
                <td>{{$kelas->kelas_nama}}</td>
              
             </tr>
             @endforeach
           </tbody>
         </table>
       
 
  
     <x-utils.notif />

    <x-modalS.kelas.modal-tambah-kelas />
    <x-utils.notif />

</div>
</x-app>