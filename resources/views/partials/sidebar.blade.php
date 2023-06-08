<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-white" id="sidebar-wrapper">
        <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                class="fas fa-user-secret me-2"></i>Portfolio</div>
        <div class="list-group list-group-flush my-3">
            <a href="{{ url('/admin') }}" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                    class="fas fa-tachometer-alt me-2"></i>{{ __('Dashboard') }}</a>
            <a href="{{ url('/') }}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="fa-solid fa-house me-2"></i>Home</a>
            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="fas fa-chart-line me-2"></i>Projects</a>
            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="fa-brands fa-github me-2"></i>Tags</a>
            <a href="{{ route('logout') }}"  onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                    class="fas fa-power-off me-2"></i>{{ __('Logout') }}</a>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->
</div>
