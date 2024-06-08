<x-kepsek>
    <div class="container mt-4">
        <h1 class="mb-4">Dashboard</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card text-dark bg-primary mb-3">
                    <div class="card-header">Jumlah Siswa</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $jumlahSiswa }}</h5>
                        <p class="card-text">Total siswa yang terdaftar.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-dark bg-success mb-3">
                    <div class="card-header">Jumlah Kelas</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $jumlahKelas }}</h5>
                        <p class="card-text">Total kelas yang aktif.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-dark bg-info mb-3">
                    <div class="card-header">Jumlah Guru</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $jumlahGuru }}</h5>
                        <p class="card-text">Total guru yang mengajar.</p>
                    </div>
                </div>
            </div>
           
            <div class="col-md-4">
                <div class="card text-dark bg-danger mb-3">
                    <div class="card-header">Jumlah Semester</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $jumlahSemester }}</h5>
                        <p class="card-text">Total semester yang ada.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-kepsek>