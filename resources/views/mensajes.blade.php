@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-{{ $color }} text-white">
                    <h3 class="mb-0">{{ $titulo }}</h3>
                </div>
                
                <div class="card-body">
                    <div class="alert alert-{{ $color }} text-center fs-4">
                        {{ $mensaje }}
                    </div>
                    
                    <div class="text-center mt-4">
                        <a href="{{ url('/') }}" class="btn btn-outline-{{ $color }}">
                            ← Volver al inicio
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection