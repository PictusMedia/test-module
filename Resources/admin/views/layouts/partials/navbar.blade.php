<nav class="layout-navbar navbar navbar-expand-lg align-items-lg-center bg-navbar-theme container-p-x" id="layout-navbar">
    <div class="navbar-collapse collapse" id="layout-navbar-collapse">
        <hr class="d-lg-none w-100 my-2">
        <div class="navbar-nav align-items-lg-center">
            <button type="button" class="btn btn-default js-open-manager">
                <i class="ion ion-ios-folder-open"></i>&nbsp; Файловый менеджер
            </button>
        </div>
        <div class="navbar-nav align-items-lg-center ml-auto">
            <div class="mr-4">
                <i class="ion ion-md-share-alt mr-2"></i> <a href="//{{ request()->getHost() }}" target="_blank" class="text-muted">Перейти на сайт</a>
            </div>
            <div class="nav-item d-none d-lg-block text-big font-weight-light line-height-1 opacity-25 mr-3 ml-1">|</div>
            <div class="demo-navbar-user nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="true">
                  <span class="d-inline-flex flex-lg-row-reverse align-items-center align-middle">
                    <span class="px-1 mr-lg-2 ml-2 ml-lg-0">{{ Auth::user()->fullName }}</span>
                  </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right ">
                    <a href="{{ route('admin.users.edit', Auth::user()) }}" class="dropdown-item"><i class="ion ion-ios-person text-lightest"></i> &nbsp; Мои данные</a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('admin.logout') }}" class="dropdown-item"><i class="ion ion-ios-log-out text-danger"></i> &nbsp; Выйти</a>
                </div>
            </div>
        </div>
    </div>
</nav>