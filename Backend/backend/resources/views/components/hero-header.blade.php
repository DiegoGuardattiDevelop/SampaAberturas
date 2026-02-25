@props(['title','subtitle'=>null,'variant'=>'default','bgImg'=>null,'aos'=>null,'classes'=>''])

@php
    // base classes
    $wrapperClasses = 'hero-header bg-gradient-green rounded-4 mb-4 text-white ' . $classes;

    // always add variant class for easier styling
    if ($variant && $variant !== 'default') {
        $wrapperClasses .= ' hero-header--' . $variant;
    }
@endphp

<div {{ $attributes->merge(['class' => trim($wrapperClasses)]) }}
     @if($aos) data-aos="{{ $aos }}" @endif
     @if($bgImg) style="background-image:url({{ $bgImg }});background-size:cover;background-position:center;" @endif>
    @if($bgImg)
        <div class="bg-overlay"></div>
    @endif

    @if($variant === 'floating')
        <div class="hero-content-panel text-center text-dark">
            <h1 class="display-4 fw-bold">{{ $title }}</h1>
            @if($subtitle)
                <p class="lead">{{ $subtitle }}</p>
            @endif
        </div>
    @else
        <div class="text-center py-3">
            <h1 class="display-4 fw-bold">{{ $title }}</h1>
            @if($subtitle)
                <p class="lead">{{ $subtitle }}</p>
            @endif
        </div>
    @endif
</div>