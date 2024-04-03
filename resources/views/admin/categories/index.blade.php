@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

@component('admin.components.breadcrumb')
    @slot('title') Список категорий @endslot
    @slot('parent') Главная @endslot
    @slot('active') Категории @endslot
@endcomponent

</div>

@endsection
