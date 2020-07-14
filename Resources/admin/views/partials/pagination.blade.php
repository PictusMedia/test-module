<div class="col">
    @if ($paginator->hasPages())
        <div class="d-flex flex-nowrap align-items-center">
            <div class="pagination mr-4">
                @foreach ($elements as $element)
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <div class="page-item active">
                                    <a class="page-link" href="javascript:void(0)">{{ $page }}</a>
                                </div>
                            @else
                                <div class="page-item">
                                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                </div>
                            @endif
                        @endforeach
                    @endif
                @endforeach
            </div>
            <small class="text-muted">Всего {{ $paginator->total() }} {{ Lang::choice('запись|записи|записией', $paginator->total()) }}</small>
        </div>
    @else
        <small class="text-muted">Всего {{ $paginator->total() }} {{ Lang::choice('запись|записи|записией', $paginator->total()) }}</small>
    @endif
</div>

@if ($paginator->hasPages())
    <div class="col">
        <div class="d-flex flex-nowrap justify-content-end align-items-center">
            <small class="text-muted">Показывать по:</small>
            <div class="pagination ml-4">
                @foreach ([10, 30, 50] as $count)
                    <div class="page-item {{ $paginator->perPage() == $count ? 'active' : '' }}">
                        <a class="page-link" href="{{ Url::url(['limit' => $count])->pathWithQuery() }}">{{ $count }}</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif
