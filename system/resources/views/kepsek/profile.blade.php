<x-kepsek>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h1>Profil Kepala Sekolah</h1>
            </div>
            <div class="card-body">
                @php
                $user = auth('kepsek')->user(); // Pastikan Anda memiliki guard yang sesuai
                @endphp
                <div class="text-center">
                    @if($user->foto)
                        <img src="{{ url('system/public/' . $user->foto) }}" class="img-thumbnail" alt="Foto Profil" style="width: 150px; height: 150px;">
                    @else
                        <img src="https://via.placeholder.com/150" class="img-thumbnail" alt="Default Image" style="width: 150px; height: 150px;">
                    @endif
                </div>
                <h3 class="mt-3">{{ $user->nama }}</h3>
                <p><strong>Email:</strong> {{ $user->email }}</p>
                <p><strong>NIP:</strong> {{ $user->nip }}</p>
                <p><strong>Jabatan:</strong> Kepala Sekolah</p>
            </div>
        </div>
    </div>
</x-kepsek>