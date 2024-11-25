@extends('layouts.main')

@section('title', 'Регистрация')

@section('body')
<section class="row justify-content-center">
    <div class="col-3 bg-black p-4 rounded-3 m-4">
        <h3 class="text-white mb-3">@yield('title')</h3>
        <form action="{{ route('register.store') }}" method="POST">
          @csrf
          <div class="form-floating mb-2">
              <input type="text" name="fio" class="form-control" id="floatingInput" placeholder="Fio">
              <label for="floatingInput">ФИО</label>
            </div>
            <div class="form-floating mb-2">
              <input type="text" name="login" class="form-control" id="floatingInput" placeholder="Login">
              <label for="floatingInput">Логин</label>
            </div>
            <div class="form-floating mb-2">
              <input type="text" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Почта</label>
            </div>
            <div class="form-floating mb-2">
              <input type="text" name="password" class="form-control" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">Пароль</label>
            </div>
            <button class="btn btn-warning w-100 py-2" type="submit">Зарегистрироваться</button>
          </form>
</section>
@endsection