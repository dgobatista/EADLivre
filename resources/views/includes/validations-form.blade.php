@if ($errors->any())
    <div class="alert alert-danger mb-0" role="alert">
        @foreach ($errors->all() as $error)
            <li class="error">{{ $error }}</li>
        @endforeach
    </div>
@endif