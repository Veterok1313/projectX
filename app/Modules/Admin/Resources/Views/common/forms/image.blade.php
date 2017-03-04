@push('js')
<script>
    $(document).ready(function () {
        $(document).on('click', '.timeline-body a.btn-danger', function (event) {
            if (confirm('@lang('admin::admin.delete_image_sure')')) {
                $.ajax({
                    url: $(this).attr('data-href'),
                    type: 'DELETE',  // user.destroy
                    headers: {
                        'X-CSRF-TOKEN': '{{csrf_token()}}'
                    },
                    success: function (result) {
                        location.reload();
                        return false;
                    }
                });
                return false;
            }
            else {
                return false;
            }
        });
    });
</script>
@endpush

<div class="images-list">

    @if(isset($imageTitle))
        {!! BootForm::label($imageTitle) !!}
        @if(isset($helpBlock))
            <p class="help-block">{{ $helpBlock }}</p>
        @endif
    @else
        {!! BootForm::label(trans('admin::admin.image')) !!}
        @if(isset($helpBlock))
            <p class="help-block">{!! $helpBlock  !!}</p>
        @endif
    @endif

    <div class="clearfix"></div>

    @if ($entity->$field)

    <div class="timeline-body">
        @if ($entity->imagePath('full', $field?$field:'image'))
            <a href="{!!$entity->imagePath('full', $field?$field:'image') !!}" rel="ajax">
                <img src="{!! $entity->imagePath('mini', $field?$field:'image')?:$entity->imagePath('thumb', $field?$field:'image') !!}"></a>
        @else
            <img src="{!! $entity->imagePath('mini', $field?$field:'image')?:$entity->imagePath('thumb', $field?$field:'image') !!}">
        @endif

        <a class="btn btn-danger"
                data-href="{!! URL::route($routePrefix.'delete-upload', ['id'=>$entity, 'field'=>$field])  !!}">
            <i class="glyphicon glyphicon-trash"></i>
        </a>
    </div>
    @else
    {!! Form::file($field) !!}
    @endif
</div>