<h3 class="d-flex justify-content-between align-items-center w-100 font-weight-bold py-3 mb-4">
    <div>{{ $title }}</div>
    <a href="{{ route($prefix . '.create') }}" type="button" class="btn btn-primary rounded-pill d-block">
        <span class="ion ion-md-add"></span>&nbsp; Добавить
    </a>
</h3>

@isset($filters)

<div style="display: none;" class="js-filter-stubs">
    @foreach($filters as $field => $_filter)

        <div class="mr-2" data-field="{{$field}}">
            @switch($_filter['type'])
            @case('select')

            <label class="form-label">{{$_filter['title']}}:</label>
            <div class="input-group">
                @select('filter[' . $field . '][value]', $_filter['values'])
                <span class="input-group-append">
                    <button class="btn btn-default" name="filter[{{ $field }}][reset]" value="1">X</button>
                </span>
            </div>
            @endswitch
        </div>

    @endforeach
</div>

<div class="d-flex align-items-center">

    <div class="dropdown mr-4">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <i class="ion ion-md-funnel"></i> Фильтры
        </button>
        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: top, left; top: 38px; left: 0px;">

            @foreach($filters as $field => $_filter)
                <div class="dropdown-item" href="javascript:void(0)">
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input js-filter-toggle" data-field="{{ $field }}" {{ !is_null($_filter['value']) ? 'checked' : ''}}>
                        <span class="custom-control-label">{{ $_filter['title'] }}</span>
                    </label>
                </div>
            @endforeach

        </div>
    </div>


    <form method="post" action="{{ route($prefix . '.filter')  }}" class="flex-grow-1">
        <div class="form-row d-flex ">
            <div class="d-flex js-filters-form">
                @foreach($filters as $field => $_filter)
                    @if(!is_null($_filter['value']))
                        @switch($_filter['type'])
                        @case('select')
                        <div class="mr-2" data-field="{{$field}}">
                            <label class="form-label">{{$_filter['title']}}:</label>
                            <div class="input-group">
                                @select('filter[' . $field . '][value]', $_filter['values'], $_filter['value'])
                                <span class="input-group-append">
                                <button class="btn btn-default" name="filter[{{ $field }}][reset]" value="1">X</button>
                            </span>
                            </div>
                        </div>
                        @endswitch
                    @endif
                @endforeach
            </div>
            <div class="col-md col-xl-2 mb-4">
                <label class="form-label">&nbsp;</label>
                <div>
                    <button class="btn btn-secondary" type="submit">Применить</button>
                    {{--
                    @if($filter['fields'])
                        <input class="btn btn-secondary" type="submit" name="reset" value="Сбросить">
                    @endif
                    --}}
                </div>
            </div>
        </div>
    </form>

</div>


@endisset

<div class="card">
    <div class="table-responsive">
        <table class="table table-striped table-bordered card-table">
            <thead>
            <tr>
                {{ $header }}
            </tr>
            </thead>
            <tbody>
            {{ $body }}
            </tbody>
        </table>
    </div>
    @isset($footer)
    <div class="card-footer">
        <div class="row">
            {{ $footer }}
        </div>
    </div>
    @endisset
</div>
