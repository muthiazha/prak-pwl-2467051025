@extends('layouts.app')

@section('content')

<div>
    <h1>Edit Pengguna</h1>

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" value="{{ old('nama', $user->nama) }}"><br><br>

        <label for="npm">NPM:</label><br>
        <input type="text" id="npm" name="npm" value="{{ old('npm', $user->npm) }}"><br><br>

        <label for="kelas_id">Kelas:</label><br>
        <select name="kelas_id" id="kelas_id">
            @foreach ($kelas as $kelasItem)
                <option value="{{ $kelasItem->id }}" {{ $user->kelas_id == $kelasItem->id ? 'selected' : '' }}>
                    {{ $kelasItem->nama_kelas }}
                </option>
            @endforeach
        </select><br><br>

        <button type="submit">Update</button>
    </form>
</div>

<style>
    body {
        background-color: #FFF8F8;
    }

    main {
        padding: 35px 20px;
    }

    main > div {
        background-color: white;
        width: 340px;
        margin: 0 auto;
        padding: 28px 30px;
        border-radius: 18px;
        border-top: 5px solid #B76E79;
        box-shadow: 0 8px 25px rgba(183, 110, 121, 0.15);
    }

    main h1 {
        text-align: center;
        color: #9F5662;
        font-size: 25px;
        margin-bottom: 25px;
    }

    main form label {
        color: #75454D;
        font-size: 13px;
        font-weight: 600;
    }

    main form input,
    main form select {
        width: 100%;
        height: 40px;
        padding: 8px 13px;
        border: 1px solid #D8B1B5;
        border-radius: 8px;
        font-size: 13px;
        background-color: #FFFCFC;
        box-sizing: border-box;
    }

    main form input:focus,
    main form select:focus {
        outline: none;
        border-color: #B76E79;
        box-shadow: 0 0 0 3px rgba(183, 110, 121, 0.10);
    }

    main form button {
        width: 100%;
        border: none;
        background: linear-gradient(90deg, #B76E79, #D49A9F);
        color: white;
        padding: 11px;
        border-radius: 8px;
        font-size: 13px;
        font-weight: 600;
        cursor: pointer;
    }

    main form button:hover {
        opacity: 0.9;
    }
</style>

@endsection