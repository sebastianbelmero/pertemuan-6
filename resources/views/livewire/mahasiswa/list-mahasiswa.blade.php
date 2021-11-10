<div class="container">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php($no = 1)
            @foreach ($collection as $item)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->nim }}</td>
                <td>
                    <button class="btn btn-primary" wire:click="pilihMahasiswa({{ $item->id }})">Edit</button>
                    <button class="btn btn-danger" wire:click="hapusMahasiswa({{ $item->id }})">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
