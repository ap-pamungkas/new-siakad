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
                <a class="btn btn-warning" href="" id="#editModal{{$guru->guru_id}}" data-toggle="modal" data-target="#editModal{{$guru->guru_id}}">Edit <i class="fa fa-edit"></i></a>
                
                <a  class="btn btn-primary"  href="{{url('admin/master-data/guru')}}/{{$guru->guru_id}}">Info  <i class="fa fa-eye"></i></a>
                
                <x-button.delete id="{{$guru->guru_id}}" />
               </center>
               </td>
               <td>
                {{$guru->nip}}</td>
               <td>{{$guru->nama}}</td>
             
            </tr>
            @endforeach
          </tbody>
        </table>
      

 
    <x-utils.notif />

  <x-modals.guru.modal-tambah-guru />

  
  
{{-- modal edit --}}
@foreach ($list_guru as $guru)
<div class="modal fade" id="editModal{{$guru->guru_id}}" tabindex="-1" aria-labelledby="editModal{{$guru->guru_id}}" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Guru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{url('admin/master-data/guru')}}/{{$guru->guru_id}}" method="POST" enctype="multipart/form-data" >
        @csrf
        @method('PUT')
        <div class="row">
          <div class="col-md-12">
              <label for="" class="form-label">Nama</label></label>
              <input type="text" name="nama" value="{{$guru->nama}}" class="form-control">

           
          </div>
          <div class="col-md-12">
              <label for="" class="form-label">NIP</label></label>
              <input type="text" name="nip" value="{{$guru->nip}}" class="form-control">

           
          </div>
          <div class="col-md-12">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" value="{{$guru->email}}" class="form-control" required>
        </div>
        </div>
        <div class="row">
          <div class="col-md-6">
              <label for="" class="form-label">Foto</label></label>
              <input type="file" name="foto" class="form-control" >


           
          </div>
          <div class="col-md-6">
              <label for="" class="form-label">Password</label></label>
              <input type="password" name="password" class="form-control">

           
          </div>

          
        </div>
        <div class="row mt-3">
          <div class="col-md-12">
              <button class=" btn btn-primary float-right">Simpan</button>
          </div>
      </form>
      </div>
      </div>
      
    </div>
  </div>
</div>
@endforeach



</x-app>