<x-siswa>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h1>Profil Siswa</h1>
            </div>
            <div class="card-body">
                @php
                $user = auth('siswa')->user();
                @endphp
                <div class="text-center">
                    @if($user->foto)
                        <img src="{{ url('system/public/' . $user->foto) }}" class="img-thumbnail" alt="Foto Profil" style="width: 150px; height: 150px;">
                    @else
                        <img src="https://via.placeholder.com/150" class="img-thumbnail" alt="Default Image" style="width: 150px; height: 150px;">
                    @endif
                </div>
                <h3 class="mt-3"><strong>{{ $user->nama }}</strong></h3>
                <p><strong>Email:</strong> {{ $user->email }}</p>
                <p><strong>NISN:</strong> {{ $user->nisn }}</p>
                <p><strong>Jenis Kelamin:</strong> {{ $user->jk }}</p>
                <p><strong>Alamat:</strong> {{ $user->alamat }}</p>
            </div>
        </div>
    </div>
</x-siswa>