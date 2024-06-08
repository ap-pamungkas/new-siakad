<x-app>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <div class="row">
<div class="col-md-12">
    <a href="{{ url('admin/master-data/guru') }}" class="float-right  btn btn-primary mt-3">Kembali</a>
                 <h1>  data {{ $guru->nama }} | Guru</h1>  
               
                </div>
            </div>
               
            </div>
            <div class="card-body">

                <p class="card-text"><strong>Nama:</strong> {{ $guru->nama }}</p>
                <p class="card-text"><strong>NIP:</strong> {{ $guru->nip }}</p>
                <p class="card-text"><strong>Email:</strong> {{ $guru->email }}</p>
                <p class="card-text"><strong>Jenis Kelamin:</strong> {{ $guru->jk }}</p>
                <p class="card-text"><strong>Alamat:</strong> {{ $guru->alamat }}</p>
            
                <!-- Tampilkan foto jika ada -->
                @if($guru->foto)
                    <img src="{{ url('system/public/' . $guru->foto) }}" alt="Foto Guru" class="img-fluid">
                @endif
               
            </div>
        </div>
    </div>
</x-app>