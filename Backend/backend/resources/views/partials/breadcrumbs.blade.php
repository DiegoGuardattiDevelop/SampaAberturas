@if(isset($breadcrumbItems) && is_array($breadcrumbItems) && count($breadcrumbItems) > 0)
<nav aria-label="breadcrumb" class="breadcrumb-navigation mb-4">
    <ol class="breadcrumb bg-transparent p-0 m-0">
        @foreach($breadcrumbItems as $index => $item)
        <li class="breadcrumb-item @if($index === count($breadcrumbItems) - 1) active @endif"
            @if(isset($item['url']) && $index < count($breadcrumbItems) - 1) itemscope itemtype="http://schema.org/ListItem" @endif>
            @if(isset($item['url']) && $index < count($breadcrumbItems) - 1)
            <a href="{{ $item['url'] }}" class="text-decoration-none" itemprop="item">
                <span itemprop="name">{{ $item['name'] }}</span>
            </a>
            <meta itemprop="position" content="{{ $index + 1 }}">
            @else
            <span itemprop="name">{{ $item['name'] }}</span>
            @endif
        </li>
        @endforeach
    </ol>
</nav>

<style>
    .breadcrumb-navigation {
        --bs-breadcrumb-divider: '>';
        font-size: 0.9rem;
    }

    .breadcrumb-item a {
        color: rgba(49, 146, 85, 1);
        transition: color 0.2s ease;
    }

    .breadcrumb-item a:hover {
        color: rgba(39, 126, 75, 1);
        text-decoration: underline;
    }

    .breadcrumb-item.active {
        color: #6c757d;
        font-weight: 500;
    }

    .breadcrumb-item + .breadcrumb-item::before {
        color: #6c757d;
        font-weight: 500;
    }
</style>
@endif