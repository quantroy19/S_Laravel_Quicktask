<div class="sidebar-wrapper">
    <div class="logo">
        <a href="javascript:;" class="simple-text">
            Your Logo
        </a>
    </div>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('users.index') }}">
                <i class="nc-icon nc-icon nc-paper-2"></i>
                <p>{{ __('titles.user') }}</p>
            </a>
        </li>
        <li>
            <a class="nav-link" href="{{ route('offices.index') }}">
                <i class="nc-icon nc-bell-55"></i>
                <p>{{ __('titles.office') }}</p>
            </a>
        </li>

        <li class="nav-item active active-pro">
            <a class="nav-link active" href="javascript:;">
                <i class="nc-icon nc-alien-33"></i>
                <p>{{ __('Upgrade plan') }}</p>
            </a>
        </li>
    </ul>
</div>
