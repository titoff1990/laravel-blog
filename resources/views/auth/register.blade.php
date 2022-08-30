@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/register" method="post">
    @csrf
    <input type="text" name="name" value="{{ old('name') }}">Имя<br>
    <input type="email" name="email" value="{{ old('email') }}">email<br>
    <input type="password" name="password">пароль<br>
    <input type="password" name="password_confirmation">пароль<br>
    <button>send</button>
</form>
