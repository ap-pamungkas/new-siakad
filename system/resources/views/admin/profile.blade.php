<x-app>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h1>Profil Admin</h1>
            </div>
            <div class="card-body">
                @php
                $user = auth('admin')->user(); // Pastikan Anda memiliki guard yang sesuai untuk admin
                @endphp
                
                <h3 class="mt-3">{{ $user->nama }}</h3>
                <p><strong>Email:</strong> {{ $user->email }}</p>
           
                <p><strong>Jabatan:</strong> Admin</p>
            </div>
        </div>
    </div>
</x-app>