@extends('layouts.main')

@section('title', 'Регистрация')

@section('body')
<section class="row justify-content-center">
    <div class="col-3 bg-body-tertiary p-4 rounded-3">
        <h3 class="text-dark mb-3">@yield('title')</h3>
        <form>
            <div class="form-floating mb-2">
              <input type="text" name="fio" class="form-control" id="floatingInput" placeholder="name@example.com" wfd-id="id0">
              <label for="floatingInput">ФИО</label>
            </div>
            <div class="form-floating mb-2">
              <input type="text" name="login" class="form-control" id="floatingInput" placeholder="name@example.com" wfd-id="id0">
              <label for="floatingInput">Почта</label>
            </div>
            <div class="form-floating mb-2">
              <input type="text" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" wfd-id="id0">
              <label for="floatingInput">Почта</label>
            </div>
            <div class="form-floating mb-2">
              <input type="text" name="password" class="form-control" id="floatingPassword" placeholder="Password" wfd-id="id1">
              <label for="floatingPassword">Пароль</label>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
          </form>
</section>
@endsection