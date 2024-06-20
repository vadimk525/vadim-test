@extends('admin.layouts.app_admin')

@section('content')
    <div class="py-12">
       {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100"> --}}
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="jumbotron">
                                    <p><span class="label label-primary">Категорий 0</span></p>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="jumbotron">
                                    <p><span class="label label-primary">Материалов 0</span></p>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="jumbotron">
                                    <p><span class="label label-primary">Посетителей 0</span></p>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="jumbotron">
                                    <p><span class="label label-primary">Сегодня 0</span></p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <a class="btn btn-block btn-default" href="#">Создать категорию</a>
                                <a class="list-group-item" href="#">
                                    <h4 class="list-group-item-heading">Категория первая</h4>
                                    <p class="list-group-item-text">
                                    Кол-во материалов
                                    </p>
                                </a>
                            </div>
                            <div class="col-sm-6">
                                <a class="btn btn-block btn-default" href="#">Создать материал</a>
                                <a class="list-group-item" href="#">
                                    <h4 class="list-group-item-heading">Материал первый</h4>
                                    <p class="list-group-item-text">
                                    Категория
                                    </p>
                                </a>
                            </div>
                        </div>
                        {{-- Код ниже добавлен для тестирования--}}
                        <hr />

                        <div class="row">
                            <div class="col-sm-6">
                                <a class="list-group-item" href="#">
                                    <h4 class="list-group-item-heading">Тест</h4>
                                   {{--  @component('admin.components.breadcrumb') --}}
                                    {{--    @slot('title') Список категорий @endslot --}}
                                    {{--   @slot('parent') Главная @endslot --}}
                                    {{--     @slot('active') Категории @endslot --}}
                                   {{--  @endcomponent --}}
                                </a>
                            </div>
                        </div>

                    </div>
     {{--       </div>
            </div>
        </div> --}}
    </div>
@endsection
