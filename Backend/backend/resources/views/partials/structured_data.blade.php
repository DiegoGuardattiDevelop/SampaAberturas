@php
// Datos estructurados para la empresa (JSON-LD)
$organizationData = [
    "@context" => "https://schema.org",
    "@type" => "HomeAndConstructionBusiness",
    "name" => "Sampa Aberturas",
    "description" => "Fabricación e instalación profesional de aberturas de aluminio, puertas placas, mamparas y mosquiteros con más de 15 años de experiencia.",
    "url" => url('/'),
    "logo" => asset('Images/Sampa_Logo.jpg'),
    "telephone" => "+54-351-489-6789",
    "email" => "info@sampaaberturas.com",
    "address" => [
        "@type" => "PostalAddress",
        "streetAddress" => "Av. Siempre Viva 742",
        "addressLocality" => "Córdoba",
        "addressRegion" => "Córdoba",
        "postalCode" => "5000",
        "addressCountry" => "AR"
    ],
    "openingHoursSpecification" => [
        [
            "@type" => "OpeningHoursSpecification",
            "dayOfWeek" => ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
            "opens" => "08:00",
            "closes" => "18:00"
        ],
        [
            "@type" => "OpeningHoursSpecification",
            "dayOfWeek" => "Saturday",
            "opens" => "09:00",
            "closes" => "13:00"
        ]
    ],
    "geo" => [
        "@type" => "GeoCoordinates",
        "latitude" => "-31.420083",
        "longitude" => "-64.188776"
    ],
    "sameAs" => [
        "https://www.facebook.com/sampaaberturas",
        "https://www.instagram.com/sampaaberturas",
        "https://www.twitter.com/sampaaberturas"
    ]
];

// Datos estructurados para breadcrumb (si está disponible)
$breadcrumbData = null;
if(isset($breadcrumbItems) && is_array($breadcrumbItems)) {
    $breadcrumbData = [
        "@context" => "https://schema.org",
        "@type" => "BreadcrumbList",
        "itemListElement" => array_map(function($item, $index) {
            return [
                "@type" => "ListItem",
                "position" => $index + 1,
                "name" => $item['name'],
                "item" => $item['url'] ?? url()->current()
            ];
        }, $breadcrumbItems, array_keys($breadcrumbItems))
    ];
}
@endphp

<!-- Datos estructurados para la organización -->
<script type="application/ld+json">
{!! json_encode($organizationData, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>

<!-- Datos estructurados para breadcrumb (si existe) -->
@if($breadcrumbData)
<script type="application/ld+json">
{!! json_encode($breadcrumbData, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
@endif

<!-- Datos estructurados adicionales para vistas específicas -->
@stack('structured-data')