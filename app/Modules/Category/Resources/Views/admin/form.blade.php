@extends('admin::admin.form')

@section('topmenu')
    <div class="header-module-controls">
        @include('admin::common.topmenu.list', ['routePrefix'=>$routePrefix])
            <a class="btn btn-primary" href="{!! route($routePrefix.'create', ['parent'=>@$entity->parent?:Request::get('parent')]) !!}">
                <i class="glyphicon glyphicon-plus"></i> @lang('admin::admin.add')
            </a>
    </div>
@endsection

@section('form_content')

{!! BootForm::open(['model' => $entity, 'store' => $routePrefix.'store', 'update' => $routePrefix.'update','files' => true]) !!}

<div class="col-md-6">
    {!! BootForm::text('title', 'Название категории') !!}
</div>

<div class="col-md-6">
    @if (Request::get('parent') || $entity->parent_id)
    @endif
</div>


<div class="col-md-12">
    {!! BootForm::textarea('content', 'Описание категории', null) !!}
    <div class="clearfix"></div>
</div>

<div class="col-md-6">
    {!! BootForm::hidden('active', 0) !!}
    {!! BootForm::checkbox('active', trans('admin::fields.active'), 1) !!}
</div>

<div class="col-md-6">
    @if (Request::get('parent') || $entity->parent_id)
    {!! BootForm::select('parent_id',  trans('category::admin.parent'), Category::getSelect(), Request::get('parent')) !!}
    @endif
</div>

<div class="col-md-6">
    @include('admin::common.forms.image', [
        'entity'        => $entity,
        'routePrefix'   => $routePrefix,
        'field'         => 'image',
        'helpBlock'     => 'Рекомендуемые размеры 250х250'
        ])
</div>

<div class="col-md-6">
    @include('admin::common.forms.image', [
        'entity'        => $entity,
        'routePrefix'   => $routePrefix,
        'field'         => 'banner',
        'imageTitle'    => 'Баннер',
        'helpBlock'     => 'Рекомендуемые размеры 1206х326',
        ])
</div>

@include('admin::common.forms.seo')

@endsection