@if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
@endif
<br>
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<br>
<form action="/reset-password" method="post">
    @csrf
    <input type="email" name="email" value="{{ old('name') }}">email<br>
    <input type="password" name="password">новый пароль<br>
    <input type="password" name="password_confirmation">повторите пароль<br>
    <input type="hidden" name="token" value="{{ request()->route('token') }}">
    <button>send</button>
</form>
