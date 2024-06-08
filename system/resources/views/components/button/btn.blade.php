<a class="btn btn-{{$class ?? 'primary'}}" href="{{ $url ?? ''}}" id="#{{ $id ?? '#'}}" @isset($modal) data-toggle="modal" @endisset>
    @isset($icons) <i class="fa fa-{{$icon }}"></i> @endisset
    @isset($title) {{$title}} @endisset
</a>


