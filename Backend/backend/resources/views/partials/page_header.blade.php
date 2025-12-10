<!-- Header específico para páginas internas -->
<div class="page-header bg-gradient-green rounded-4 p-4 mb-5 text-white position-relative overflow-hidden">
    <div class="bg-overlay"></div>
    <div class="position-relative z-index-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <hr class="bg-white-light">
                    <h1 class="display-4 fw-bold">{{ $title ?? 'Título de la página' }}</h1>
                    <p class="lead">{{ $subtitle ?? 'Subtítulo descriptivo' }}</p>
                    <hr class="bg-white-light">
                </div>
                <div class="col-md-4 text-md-end">
                    @if(isset($image) && $image)
                    <img src="{{ $image }}" alt="Imagen destacada" class="header-image img-fluid rounded-3" style="max-height: 150px;">
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .page-header {
        min-height: 200px;
        background: linear-gradient(135deg, rgba(49, 146, 85, 1) 0%, rgba(39, 126, 75, 1) 100%);
        display: flex;
        align-items: center;
    }

    .bg-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('data:image/svg+xml;utf8,<svg width="10" height="10" xmlns="http://www.w3.org/2000/svg"><path d="M0 0 L10 10" stroke="white" stroke-width="0.5" opacity="0.3"/></svg>') repeat;
        opacity: 0.1;
    }

    .header-image {
        opacity: 0.9;
        transition: all 0.3s ease;
    }

    .header-image:hover {
        opacity: 1;
        transform: scale(1.05);
    }

    @media (max-width: 768px) {
        .page-header {
            min-height: 180px;
            text-align: center;
        }

        .col-md-4.text-md-end {
            margin-top: 15px;
        }
    }
</style>