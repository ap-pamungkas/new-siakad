{{-- new-siakad/system/resources/views/admin/master-data/nilai/show.blade.php --}}
<x-app>
    <h1>Detail Nilai Siswa</h1>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Siswa</th>
                        <th>Mata Pelajaran</th>
                        <th>Semester</th>
                        <th>Nilai Tugas</th>
                        <th>Nilai Ulangan</th>
                        <th>Nilai UTS</th>
                        <th>Nilai UAS</th>
                        <th>Total Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($nilaiSiswa as $index => $nilai)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $nilai->siswa->nama }}</td>
                            <td>{{ $nilai->mapel->nama }}</td>
                            <td>{{ $nilai->semester->semester_tingkat }}</td>
                            <td>{{ $nilai->nilai_tugas }}</td>
                            <td>{{ $nilai->nilai_ulangan }}</td>
                            <td>{{ $nilai->nilai_uts }}</td>
                            <td>{{ $nilai->nilai_uas }}</td>
                            <td>{{ $nilai->total }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app>