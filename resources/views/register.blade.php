@extends('layouts.main')

@section('title', 'Регистрация')

@section('body')

<section class="row justify-content-center">
    <div class="col-3 bg-body-tertiary p-4 rounded-3">
        <h3 class="text-dark mb-3">@yield('title')</h3>
        <form>
            <img class="mb-4" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
        
            <div class="form-floating">
              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" wfd-id="id0">
              <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password" wfd-id="id1">
              <label for="floatingPassword">Password</label>
            </div>
        
            <div class="form-check text-start my-3">
              <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault" wfd-id="id2">
              <label class="form-check-label" for="flexCheckDefault">
                Remember me
              </label>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-body-secondary">© 2017–2024</p>
          </form>
</section>