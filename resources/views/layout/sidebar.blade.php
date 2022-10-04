<aside class="main-sidebar sidebar-dark-primary elevation-4">

            <a href="../../index3.html" class="brand-link">
                <img src="{{ asset('asset/image/images.jfif') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">THE ONE PIECE IS REAL!!</span>
            </a>

            <div class="sidebar">

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="https://media.tenor.com/lcZnFyKRX5gAAAAd/luffy-anime.gif" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Sans. El Terkcs</a>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-header">Dashboard</li>
                        <li class="nav-item">
                            <a href="{{ route ('dashboard.index')}}" class="nav-link {{ request()->is('dashboard*') ? 'active' : ''}}">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <li class="nav-header">Master</li>
                        <li class="nav-item">
                            <a href="{{ route ('guru.index') }}" class="nav-link {{ request()->is('guru*') ? 'active' : ''}}">
                                <i class="nav-icon fas fa-user-secret"></i>
                                <p>
                                    Guru
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route ('kelas.index') }}" class="nav-link {{ request()->is('kelas*') ? 'active' : ''}}">
                            <!-- <a href="/kelas" class="nav-link"> -->
                                <i class="nav-icon fas fa-chalkboard-teacher"></i>
                                <p>
                                    Kelas
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route ('mapel.index') }}" class="nav-link {{ request()->is('mapel*') ? 'active' : ''}}">
                            <!-- <a href="/mapel" class="nav-link"> -->
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Mapel
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/siswa" class="nav-link {{ request()->is('siswa*') ? 'active' : ''}}">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Siswa
                                </p>
                            </a>
                        </li>

                    </ul>
                </nav>

            </div>

        </aside>