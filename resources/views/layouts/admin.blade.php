@if(Auth::check() && (Auth::user()->hasRole('Officer') || Auth::user()->hasRole('Administrator')))
    <div id="admin-link">
        <a href="{{ url('admin') }}">Admin</a>
    </div>
@endif