<nav class="sidebar close">
        <header>
            <div class="image-text">
                <i class='bx bx-dots-horizontal-rounded icon'></i>
                <div class="text logo-text">
                    <span class="name">Teknik</span>
                    <span class="profession">Komputer</span>
                </div>
            </div>
            <i class='bx bx-chevron-right toggle'></i>
        </header>
        <div class="menu-bar">
            <div class="menu">

                <ul class="menu-links">
                    <li class="active">
                        <a href="{{ route('Admin.dashboard') }}">
                            <i class='bx bx-category-alt icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="{{ route('Admin.ruangan') }}">
                            <i class='bx bx-buildings icon' ></i>
                            <span class="text nav-text">Ruangan</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="{{ route('Admin.tambahruangan') }}">
                            <i class='bx bx-list-plus icon'></i>
                            <span class="text nav-text">Tambah Ruangan</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="{{ route('Admin.jadwal') }}">
                            <i class='bx bx-calendar icon'></i>
                            <span class="text nav-text">Jadwal</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="{{ route('Admin.pemohon') }}">
                            <i class='bx bx-user-check icon'></i>
                            <span class="text nav-text">Pemohon</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="{{ route('Admin.peminjaman') }}">
                            <i class='bx bx-bookmark-plus icon'></i>
                            <span class="text nav-text">Peminjaman</span>
                        </a>
                    </li>
          
                </ul>
            </div>
   

            <div class="bottom-content">
            <li class="nav-link">
                        <a href="{{ route('Admin.ubahuser') }}">
                            <i class='bx bx-edit-alt icon'></i>
                            <span class="text nav-text">Role</span>
                        </a>
                    </li>
                <li class="nav-link">
                    <a href="{{ route('Admin.profile') }}">
                        <i class='bx bx-user-circle icon'></i>
                        <span class="text nav-text">Profile</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('Admin.contact') }}">
                        <i class='bx bx-chat icon' ></i>
                        <span class="text nav-text">Contact Us</span>
                    </a>
                </li>                
            </div>
        </div>

    </nav>