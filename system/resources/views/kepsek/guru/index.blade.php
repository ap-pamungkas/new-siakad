<x-kepsek>

  <div class="row">
   <div class="col-md-10">

       <div class="h3">Data {{$title}}</div>
   </div>
   
   
       </div>

       
 

   <hr>
 
   

    <table  id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0;">
       <thead>
           <tr>
           
            
                 <th width="10%"> <center>No
                 </center></th>

               <center>

                 <th width="10%">  <center>Aksi</center></th>
              
               

                 <th><center>NIP</center></th>
               
             <th>
               <center>

                Nama
               </center>
             </th>
            
              
           </tr>
       </thead>
       <tbody>
           @foreach ($list_guru as $guru)
           <tr>
               <td>{{$loop->iteration}}</td>
              <td>
              <center>
             
               
               <a  class="btn btn-primary"  href="{{url('kepsek/guru')}}/{{$guru->guru_id}}">Info  <i class="fa fa-eye"></i></a>
               
               
              </center>
              </td>
              <td>
               {{$guru->nip}}</td>
              <td>{{$guru->nama}}</td>
            
           </tr>
           @endforeach
         </tbody>
       </table>
     



 




</x-kepsek>