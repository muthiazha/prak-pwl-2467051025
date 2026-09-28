<nav class="navbar-custom">

    <div class="navbar-brand-custom">
        USER MANAGEMENT
    </div>

    <div class="navbar-menu-custom">
        <a href="/user" class="{{ request()->is('user') ? 'active' : '' }}">
            Home
        </a>

        <a href="/user/create" class="{{ request()->is('user/create') ? 'active' : '' }}">
            Tambah User
        </a>
    </div>

    <div class="navbar-user-custom">
        <span class="user-icon">
            <i class="bi bi-person-fill"></i>
        </span>
    </div>

</nav>

<style>
    .navbar-custom {
        background: linear-gradient(
            90deg,
            #B76E79,
            #D49A9F,
            #E8C4C4
        );
        padding: 17px 55px;
        display: flex;
        align-items: center;
        position: relative;
        box-shadow: 0 3px 12px rgba(183, 110, 121, 0.25);
    }

    .navbar-brand-custom {
        color: white;
        font-size: 17px;
        font-weight: 700;
        letter-spacing: 1px;
        width: 30%;
    }

    .navbar-menu-custom {
        display: flex;
        justify-content: center;
        gap: 12px;
        width: 40%;
    }

    .navbar-menu-custom a {
        color: white;
        text-decoration: none;
        font-size: 14px;
        padding: 8px 12px;
        transition: 0.2s;
    }

    .navbar-menu-custom a:hover {
        color: #FFF1F2;
        text-shadow: 0 0 8px rgba(255, 255, 255, 0.7);
    }

    .navbar-menu-custom a.active {
        background-color: transparent;
        color: white;
        font-weight: 700;
        text-shadow: 0 0 8px rgba(255, 255, 255, 0.65);
        border-bottom: 2px solid #FFF1F2;
    }

    .navbar-user-custom {
        width: 30%;
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }

    .user-icon {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.25);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 16px;
    }
</style>