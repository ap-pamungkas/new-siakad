<x-guru>
  <div class="row">
      <div class="col-md-12">
          <a href="{{url('guru/siswa/create')}}" class="btn btn-success float-right">
              <i class="fa fa-plus"> Tambah Data</i>
          </a>
          <div class="h3">Data {{$title}}</div>
      </div>
  </div>
  <hr>
  
  @if($list_siswa->isEmpty())
  <div class="alert alert-info" role="alert">
    Anda belum memiliki kelas, minta admin untuk menambahkan kelas.
  </div>
@else
  <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0;">
    <thead>
        <tr>
            <th width="10%"> <center>No</center></th>
            <th width="10%"> <center>Aksi</center></th>
            <th> <center>NIP</center></th>
            <th> <center>Nama</center></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($list_siswa as $index => $item)
            @if($item->kelasSiswaDetail->isNotEmpty())
                @foreach ($item->kelasSiswaDetail as $detail)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <center>
                                <a class="btn btn-warning" href="" id="SiswaModal{{$detail->siswa->siswa_id}}" data-toggle="modal" data-target="#editModal{{$detail->siswa->siswa_id}}">
                                    Edit <i class="fa fa-edit"></i>
                                </a>
                                <a class="btn btn-primary" href="{{url('guru/siswa')}}/{{$detail->siswa->siswa_id}}">
                                    Info <i class="fa fa-eye"></i>
                                </a>
                                <x-button.delete id="{{$detail->siswa->siswa_id}}" />
                            </center>
                        </td>
                        <td>{{$detail->siswa->nisn}}</td>
                        <td>{{$detail->siswa->nama}}</td>
                    </tr>
                @endforeach
            @endif
        @endforeach
    </tbody>
  </table>

  <x-utils.notif />
  <x-modals.siswa.modal-tambah-siswa />

  @foreach ($list_siswa as $item)
  @foreach ($item->kelasSiswaDetail as $detail)

    <div class="modal fade" id="editModal{{$detail->siswa->siswa_id}}" tabindex="-1" aria-labelledby="editModalLabel{{$detail->siswa->siswa_id}}" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Data Siswa</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{url('admin/master-data/siswa')}}/{{$detail->siswa->siswa_id}}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="row">
                <div class="col-md-12">
                  <label for="" class="form-label">Nama</label>
                  <input type="text" name="nama" value="{{$detail->siswa->nama}}" class="form-control">
                </div>
                <div class="col-md-12">
                  <label for="" class="form-label">NISN</label>
                  <input type="text" name="nisn" value="{{$detail->siswa->nisn}}" class="form-control">
                </div>
                <div class="col-md-12">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" name="email" value="{{$detail->siswa->email}}" class="form-control" required>
                </div>
                <div class="col-md-12">
                  <label for="" class="form-label">Jenis Kelamin</label>
                  <select required class="form-control select2" style="width: 100%;" name="jk">
                    <option hidden>--pilih--</option>
                    <option value="laki-laki" {{$detail->siswa->jk == 'laki-laki' ? 'selected' : ''}}>Laki-laki</option>
                    <option value="perempuan" {{$detail->siswa->jk == 'perempuan' ? 'selected' : ''}}>Perempuan</option>
                  </select>
                </div>
                <div class="col-md-12">
                  <label for="alamat" class="form-label">Alamat</label>
                  <textarea name="alamat" class="form-control" cols="30" rows="10">{{$detail->siswa->alamat}}</textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label for="" class="form-label">Foto</label>
                  <input type="file" name="foto" class="form-control">
                </div>
                <div class="col-md-6">
                  <label for="" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control">
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-md-12">
                  <button class="btn btn-primary float-right">Simpan</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


    <x-modals.modal id="SiswaModal{{$detail->siswa->siswa_id}}" action="#">
      test
    </x-modals.modal>
  @endforeach
@endforeach



  @endif
</x-guru>
