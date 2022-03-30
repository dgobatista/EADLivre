@if ($errors->any())
    <div class="alert alert-warning" role="alert">
        @foreach ($errors->all() as $error)
            <h4 class="alert-title">Alerta</h4>
            <div class="text-muted">{{ $error }}</div>
        @endforeach
    </div>
@endif
