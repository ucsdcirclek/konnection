@if(Auth::check() && (Auth::user()->hasRole('Officer') || Auth::user()->hasRole('Administrator')))
    <div id="admin-link">
        <a href="{{ url('admin') }}">Admin</a>
    </div>
@endif

<style>
    @media only screen and (max-width: 500px) {
        #admin-link { /*Attaches admin button to mobile nav bar */
            top: 4.2em;
            z-index: 9998;
        }
    }
</style>