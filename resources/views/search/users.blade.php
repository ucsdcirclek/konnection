@foreach ($user_results as $user)
    <a href="">
        <div class="result avatar small">
            <div class="result-avatar"><img src="{{ $user->avatar->url() }}"></div>

            <div class="result-description">
                <div><p><strong>{{ $user->first_name }} {{ $user->last_name }}</strong></p></div>
                <div><p>{{ $user->email }}</p></div>
            </div>
        </div>
    </a>
@endforeach