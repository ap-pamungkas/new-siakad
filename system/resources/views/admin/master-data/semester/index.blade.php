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
                
                 
 
                   <th><center>Semester</center></th>
                 
               <th>
                 <center>
 
                  Tahun Ajaran
                 </center>
               </th>
              
                
             </tr>
         </thead>
         <tbody>
             @foreach ($list_semester as $semester)
             <tr>
                 <td>{{$loop->iteration}}</td>
                <td>
                <center>
                 
                 
                
                 
                 <x-button.delete id="{{$semester->semester_id}}" />
                </center>
                </td>
                <td>
                 {{$semester->semester_tingkat}}</td>
                <td>{{$semester->tahun_ajaran}}</td>
              
             </tr>
             @endforeach
           </tbody>
         </table>
       
 
  
     <x-utils.notif />
 
   <x-modals.semester.modal-tambah-semester />
 
   
   

 
 
 
 </x-app>