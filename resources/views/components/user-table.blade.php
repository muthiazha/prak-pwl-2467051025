<div class="table-card">

    <div class="table-header">
        <h3>Data Pengguna</h3>
        <span>{{ count($users) }} Pengguna</span>
    </div>

    <div class="table-responsive">
        <table class="table user-table mb-0">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NPM</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->nama }}</td>
                        <td>{{ $user->npm }}</td>
                        <td>
                            <span class="kelas-badge">
                                {{ $user->nama_kelas }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('user.edit', $user->id) }}" class="btn-edit">Edit</a>
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-hapus" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>

</div>

<style>
    .table-card {
        background: white;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(210, 103, 119, 0.12);
        overflow: hidden;
    }

    .table-header {
        padding: 20px 25px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid #FEE1E3;
    }

    .table-header h3 {
        margin: 0;
        color: #D26777;
        font-size: 18px;
    }

    .table-header span {
        background-color: #FEE1E3;
        color: #D26777;
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 12px;
    }

    .user-table thead th {
        background-color: #DA8393;
        color: white;
        padding: 14px 20px;
        border: none;
        font-size: 13px;
    }

    .user-table tbody td {
        padding: 15px 20px;
        vertical-align: middle;
    }

    .user-table tbody tr:hover {
        background-color: #FFF8F9;
    }

    .kelas-badge {
        background-color: #FEE1E3;
        color: #D26777;
        padding: 5px 12px;
        border-radius: 15px;
        font-size: 12px;
        font-weight: 600;
    }

    .btn-edit,
    .btn-hapus {
        display: inline-block;
        padding: 5px 14px;
        border-radius: 15px;
        font-size: 12px;
        font-weight: 600;
        text-decoration: none;
        border: none;
        cursor: pointer;
        transition: 0.2s;
    }

    .btn-edit {
        background-color: #FEE1E3;
        color: #D26777;
    }

    .btn-hapus {
        background-color: #D26777;
        color: white;
    }

    .btn-edit:hover,
    .btn-hapus:hover {
        opacity: 0.85;
    }
</style>