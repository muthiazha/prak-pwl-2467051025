@extends('layouts.app')

@section('content')

<div class="user-page">

    <div class="user-heading">
        <div>
            <h1>Daftar Pengguna</h1>
            <p>Kelola data pengguna yang tersimpan dalam sistem.</p>
        </div>

        <a href="/user/create" class="btn-add-user">
            + Tambah User
        </a>
    </div>

    <x-user-table :users="$users" />

</div>

<style>
    .user-page {
        background-color: #FFF8F9;
        padding: 55px 70px;
    }

    .user-heading {
        max-width: 1100px;
        margin: 0 auto 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .user-heading h1 {
        color: #9F5662;
        font-size: 30px;
        font-weight: 700;
        margin-bottom: 8px;
    }

    .user-heading p {
        color: #888;
        margin: 0;
        font-size: 14px;
    }

    .btn-add-user {
        background: linear-gradient(
            90deg,
            #B76E79,
            #D49A9F
        );
        color: white;
        padding: 11px 20px;
        border-radius: 25px;
        text-decoration: none;
        font-size: 13px;
        transition: 0.2s;
    }

    .btn-add-user:hover {
        color: white;
        opacity: 0.9;
    }
</style>

@endsection