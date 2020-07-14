
@include('admin::partials.header.edit', ['title' => $title, 'prefix' => $prefix])

@include('admin::partials.form.errors')

<div class="nav-tabs-top">
    <ul class="nav nav-tabs">
        {{ $navs }}
    </ul>
    <form method="post" action="{{ route($prefix . '.update', [$model]) }}">
        <div class="card">
            <div class="card-body">
                @method('PUT')
                <div class="tab-content">
                    {{ $tabs }}
                </div>
            </div>
        </div>
        <div class="text-right mt-3">
            <button class="btn btn-outline-danger js-delete-model" data-url="{{ route($prefix . '.destroy', [$model]) }}">Удалить</button>
            <button class="btn btn-white ml-2" name="_route" value="{{ $prefix }}.create">Сохранить и добавить</button>
            <button class="btn btn-white ml-2" name="_route" value="{{ $prefix }}.edit">Применить</button>
            <button class="btn btn-primary ml-2" name="_route" value="{{ $prefix }}.index">Сохранить</button>
        </div>
    </form>
</div>