@extends('layouts.main')

@section('title', 'Заявки')

@section('body')

<section>
    <section>
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="d-flex align-items-center justify-content-between mb-3">
                        <h3 class="text-dark">@yield('title')</h3>
                        <a href="#" class="btn btn-dark">Добавить заявку</a>
                </div>
                <div class="bg-body-tertiary p-4 rounded-2">
                    <div class="row mb-3 px-4">
                        <div class="col-6 text-center">
                            <strong>Номер заявки</strong>
                        </div>
                        <div class="col-3 text-center">
                            <strong>Дата и время записи</strong>
                        </div>
                        <div class="col-3 text-center">
                            <strong>Статус заявки</strong>
                        </div>
                    </div>

@endsection