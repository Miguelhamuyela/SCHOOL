@if (null !== Auth::user())
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item nav-profile">
                <a href="{{ route('admin.user.show', Auth::User()->id) }}" class="nav-link">
                    <div class="profile-image">
                        <img class="img-xs rounded-circle" src="{{ Auth::User()->photo }}" alt="{{ Auth::User()->name }}">
                        <div class="dot-indicator bg-success"></div>
                    </div>
                    <div class="text-wrapper">
                        <p class="profile-name">{{ Auth::User()->name }}</p>
                        <p class="designation">{{ Auth::User()->level }}</p>
                    </div>
                </a>
            </li>

            <li class="nav-item nav-category">Dashboard</li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.home') }}">
                    <i class="menu-icon typcn typcn-document-text"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>

            @if (
                'Finanças' == Auth::user()->level ||
                    'Gestor' == Auth::user()->level ||
                    'Fábrica de Software' == Auth::user()->level ||
                    'Administrador' == Auth::user()->level)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.customers.list.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title"> Cliente</span>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.services.list.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Solicitação de Máquina</span>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.hacks.list.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Rack</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.physical_machines.list.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Máquina Física</span>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.virtual_machines.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Máquina Virtual</span>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.veeam_backups.list.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Máquina do Backup</span>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.cpanel_infosis.list.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Cpanel do Infosi</span>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.digital_cpanels.list.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Cpanel do Digital</span>
                    </a>
                </li>


            @endif
            @if (
                'Finanças' == Auth::user()->level ||
                    'Gestor' == Auth::user()->level ||
                    'Reparação de Equipamentos' == Auth::user()->level ||
                    'Administrador' == Auth::user()->level)
                {{-- equipmentRepair --}}
            @endif

            @if ('Administrador' == Auth::user()->level)
                <li class="nav-item mb-5">
                    <a class="nav-link" href="{{ route('admin.user.index') }}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Utilizadores</span>
                    </a>
                </li>
            @endif

        </ul>
    </nav>
@endif
