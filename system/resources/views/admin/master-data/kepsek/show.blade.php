<x-app>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <div class="row">
<div class="col-md-12">
                    Info data {{ $kepsek->nama }}
               
                    <a href="{{ url('admin/master-data/kepsek') }}" class="float-right  btn btn-primary mt-3">Kembali</a>
                </div>
            </div>
               
            </div>
            <div class="card-body">

                <p class="card-text"><strong>Nama:</strong> {{ $kepsek->nama }}</p>
                <p class="card-text"><strong>NIP:</strong> {{ $kepsek->nip }}</p>
                <p class="card-text"><strong>Email:</strong> {{ $kepsek->email }}</p>
                <p class="card-text"><strong>Jenis Kelamin:</strong> {{ $kepsek->jk }}</p>
                <p class="card-text"><strong>Alamat:</strong> {{ $kepsek->alamat }}</p>
                <!-- Tampilkan foto jika ada -->
                @if($kepsek->foto)
                    <img src="{{ url('system/public/' . $kepsek->foto) }}" alt="Foto Kepala Sekolah" class="img-fluid">
                @endif
               
            </div>
        </div>
    </div>
</x-app>