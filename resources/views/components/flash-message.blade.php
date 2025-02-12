@if (flash()->message)
    <div>
        <div class="alert d-flex align-items-center alert-{{ flash()->class ?? 'success' }}" role="alert">
            @if (flash()->class === 'warning' || flash()->class === 'danger')
                <i class="me-2 bi bi-exclamation-triangle-fill"></i>
            @endif

            @if (flash()->class === 'info')
                <i class="me-2 bi bi-check-circle"></i>
            @endif

            @if (!flash()->class || flash()->class === 'success')
                <i class="me-2 bi bi-check-circle-fill"></i>
            @endif




            {{ flash()->message }}
        </div>
    </div>
@endif
