@extends('admin::layouts.app')
@section('title')
    <h2>@lang('admin::admin.images')</h2>
@endsection

@section('content')
<iframe src="/admin/laravel-filemanager?type=Images&CKEditor=content&CKEditorFuncNum=0&langCode=ru" width="980" height="900" frameBorder="0"></iframe>
@endsection
