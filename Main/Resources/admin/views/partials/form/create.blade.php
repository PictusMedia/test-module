
@include('admin::partials.header.create', ['title' => $title, 'prefix' => $prefix])

@include('admin::partials.form.errors')

<div class="nav-tabs-top">
    <ul class="nav nav-tabs">
        {{ $navs }}
    </ul>
    <form method="post" action="{{ route($prefix . '.store') }}">
        <div class="card">
            <div class="card-body">
                <div class="tab-content">
                    {{ $tabs }}
                </div>
            </div>
        </div>
        <div class="text-right mt-3">
            <button class="btn btn-primary ml-2" name="_route" value="{{ $prefix }}.edit">Применить</button>
        </div>
    </form>
</div>