@if (session()->has('sucess'))
    <div class="alert alert-success w-50 align-self-start" role="alert">
        {{ session('sucess') }}
    </div>
@endif
