@switch($model->status)
    @case(1)
        <span class="btn btn-xs btn-outline-success dropdown-toggle" data-toggle="dropdown">Активно</span>
    @break
    @default
        <span class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown">Неактивно</span>
@endswitch
<div class="dropdown-menu">
    <a class="dropdown-item" href="{{ route($prefix . '.status', [$model, 'status' => 1])  }}">Активно</a>
    <a class="dropdown-item" href="{{ route($prefix . '.status', [$model, 'status' => 0])  }}">Неактивно</a>
</div>