<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;

class SitemapController extends Controller
{
    public function index()
    {
        // Obtener todas las páginas estáticas
        $staticPages = [
            ['url' => url('/'), 'lastmod' => now(), 'changefreq' => 'daily', 'priority' => '1.0'],
            ['url' => url('/home'), 'lastmod' => now(), 'changefreq' => 'daily', 'priority' => '0.9'],
            ['url' => url('/nosotros'), 'lastmod' => now(), 'changefreq' => 'weekly', 'priority' => '0.8'],
            ['url' => url('/contacto'), 'lastmod' => now(), 'changefreq' => 'weekly', 'priority' => '0.8'],
            ['url' => url('/obras'), 'lastmod' => now(), 'changefreq' => 'weekly', 'priority' => '0.7'],
            ['url' => url('/aberturas-aluminio'), 'lastmod' => now(), 'changefreq' => 'weekly', 'priority' => '0.7'],
            ['url' => url('/puertas-placa'), 'lastmod' => now(), 'changefreq' => 'weekly', 'priority' => '0.7'],
            ['url' => url('/mamparas'), 'lastmod' => now(), 'changefreq' => 'weekly', 'priority' => '0.7'],
            ['url' => url('/mosquiteros'), 'lastmod' => now(), 'changefreq' => 'weekly', 'priority' => '0.7'],
            ['url' => url('/herrajes'), 'lastmod' => now(), 'changefreq' => 'weekly', 'priority' => '0.7'],
            ['url' => url('/perfileria'), 'lastmod' => now(), 'changefreq' => 'weekly', 'priority' => '0.7'],
        ];

        // Obtener categorías
        $categorias = Categoria::all()->map(function ($categoria) {
            return [
                'url' => route('tienda.categoria', $categoria->slug),
                'lastmod' => $categoria->updated_at,
                'changefreq' => 'weekly',
                'priority' => '0.6'
            ];
        });

        // Obtener productos
        $productos = Producto::all()->map(function ($producto) {
            return [
                'url' => route('tienda.producto', $producto->slug),
                'lastmod' => $producto->updated_at,
                'changefreq' => 'weekly',
                'priority' => '0.5'
            ];
        });

        // Combinar todos los elementos
        $urls = array_merge($staticPages, $categorias->toArray(), $productos->toArray());

        // Generar el XML del sitemap
        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">';

        foreach ($urls as $url) {
            $xml .= '<url>';
            $xml .= '<loc>' . $url['url'] . '</loc>';
            $xml .= '<lastmod>' . $url['lastmod']->toAtomString() . '</lastmod>';
            $xml .= '<changefreq>' . $url['changefreq'] . '</changefreq>';
            $xml .= '<priority>' . $url['priority'] . '</priority>';
            $xml .= '</url>';
        }

        $xml .= '</urlset>';

        // Devolver el XML con el content type adecuado
        return response($xml, 200, [
            'Content-Type' => 'application/xml'
        ]);
    }
}
