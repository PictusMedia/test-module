@if ($errors->any())
<div class="alert alert-danger alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">×</button>
    @foreach ($errors->all() as $message)
        <div>{{ $message }}</div>
    @endforeach
</div>
@elseif(session()->has('status'))
    @switch(session()->get('status'))
        @case('success-store')
            <div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">×</button>
                Данные успешно сохранены
            </div>
        @break
        @case('success-update')
            <div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">×</button>
                Данные успешно обновлены
            </div>
        @break
    @endswitch
@endif


