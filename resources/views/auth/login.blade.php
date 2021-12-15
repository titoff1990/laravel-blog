@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/login" method="post">
    @csrf
    <input type="email" name="email">email<br>
<input type="pasword" name="password">пароль<br>
    <button>login</button>
</form>
       <a href="/forgot-password">сбросить пароль</a>
