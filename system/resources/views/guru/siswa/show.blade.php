<x-guru>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <div class="row">
<div class="col-md-12">
                    Info data {{ $siswa->nama }}
               
                    <a href="{{ url('guru/siswa') }}" class="float-right  btn btn-primary mt-3">Kembali</a>
                </div>
            </div>
               
            </div>
            <div class="card-body">

                <p class="card-text"><strong>Nama:</strong> {{ $siswa->nama }}</p>
                <p class="card-text"><strong>NISN:</strong> {{ $siswa->nisn }}</p>
                <p class="card-text"><strong>Email:</strong> {{ $siswa->email }}</p>
                <p class="card-text"><strong>Jenis Kelamin:</strong> {{ $siswa->jk }}</p>
                <p class="card-text"><strong>alamat:</strong> {{ $siswa->alamat }}</p>
                <!-- Tampilkan foto jika ada -->
                @if($siswa->foto)
                    <img src="{{ url('system/public/' . $siswa->foto) }}" alt="Foto siswa" class="img-fluid">
                @endif
               
            </div>
        </div>
    </div>
</x-guru>