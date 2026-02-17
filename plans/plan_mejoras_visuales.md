# Plan de Mejoras Visuales - Sampa Aberturas

## Análisis del Estado Actual

### Tecnologías utilizadas

- **Framework CSS**: Bootstrap 5
- **Iconos**: Bootstrap Icons
- **Fuentes**: Inter y Poppins (Google Fonts)
- **Animaciones**: Animate.css
- **Notificaciones**: Toastify

### Problemas Visuales Identificados

1. **Estilos en línea excesivos**: Las vistas Blade contienen mucho CSS embebido que debería estar en archivos externos
2. **Grid de productos inadecuado**: Usa `col-lg-2` (6 productos por fila) que es demasiado pequeño para mostrar productos de manera atractiva
3. **Falta coherencia visual**: El footer tiene estilos que sobrescriben otros causando conflictos
4. **Diseño básico**: No hay uso de efectos modernos como glassmorphism, gradientes sofisticados, o micro-interacciones
5. **Navbar con problemas de UX**: El navbar tiene fondo semitransparente que puede dificultar la lectura en ciertas páginas
6. **Imágenes sin optimización**: Las imágenes son muy grandes y no están optimizadas
7. **Ausencia de loading states**: No hay indicadores de carga
8. **Falta de responsive avanzado**: Aunque es responsive, no aprovecha bien el espacio en diferentes dispositivos

---

## Plan de Mejoras por Fases

### Fase 1: Refactorización y Base (Fundacional)

| #   | Tarea                  | Descripción                                                           |
| --- | ---------------------- | --------------------------------------------------------------------- |
| 1.1 | Extraer CSS del header | Mover los estilos embebidos de `header.blade.php` a `app.css`         |
| 1.2 | Extraer CSS del footer | Mover los estilos embebidos de `footer.blade.php` a `app.css`         |
| 1.3 | Crear variables CSS    | Definir paleta de colores, espaciados y tipografía como variables CSS |
| 1.4 | Normalizar estilos     | Eliminar redundancias y conflictos entre archivos                     |

### Fase 2: Mejoras en el Home (Página Principal)

| #   | Tarea                              | Descripción                                                              |
| --- | ---------------------------------- | ------------------------------------------------------------------------ |
| 2.1 | Rediseñar carousel                 | Mejorar transición, agregar indicadores y pausar en hover                |
| 2.2 | Corregir grid de productos         | Cambiar de `col-lg-2` a `col-lg-3` o `col-lg-4` para mejor visualización |
| 2.3 | Agregar animaciones de entrada     | Usar Animate.css con delays escalonados                                  |
| 2.4 | Mejorar cards de proyectos         | Agregar efectos hover más sofisticados                                   |
| 2.5 | Optimizar sección "Sobre Nosotros" | Mejorar layout y agregar imágenes complementarias                        |

### Fase 3: Header y Navigation

| #   | Tarea                      | Descripción                                         |
| --- | -------------------------- | --------------------------------------------------- |
| 3.1 | Mejorar navbar             | Agregar backdrop-filter para efecto glass en scroll |
| 3.2 | Agregar mega-menu          | dropdown más completo para productos                |
| 3.3 | Indicador de página activa | Mejorar visualización de la página actual           |
| 3.4 | Animaciones de menú        | Transiciones suaves en hover y dropdowns            |

### Fase 4: Footer

| #   | Tarea                       | Descripción                           |
| --- | --------------------------- | ------------------------------------- |
| 4.1 | Rediseñar layout            | Estructura más moderna con newsletter |
| 4.2 | Agregar mapa reducido       | Embed de Google Maps                  |
| 4.3 | Mejores iconos sociales     | Agregar tooltips y efectos hover      |
| 4.4 | Info de contacto expandable | Acordeón para móviles                 |

### Fase 5: Páginas de Contenido

| #   | Tarea               | Descripción                                    |
| --- | ------------------- | ---------------------------------------------- |
| 5.1 | Mejoras en Obras    | Gallery con lightbox, filtros por categoría    |
| 5.2 | Mejoras en Tienda   | Cards de productos mejorados, filtros          |
| 5.3 | Mejoras en Contacto | Formulario más atractivo con validación visual |
| 5.4 | Mejoras en Nosotros | Timeline animado, equipo, valores              |

### Fase 6: Interactividad y UX

| #   | Tarea               | Descripción                                                          |
| --- | ------------------- | -------------------------------------------------------------------- |
| 6.1 | Scroll animations   | Elementos que aparecen al hacer scroll (AOS o Intersection Observer) |
| 6.2 | Loading states      | Skeletons y spinners para contenido dinámico                         |
| 6.3 | Smooth scroll       | Navegación suave entre secciones                                     |
| 6.4 | Tooltips y popovers | Mejorar información de productos                                     |

### Fase 7: Performance y Optimización

| #   | Tarea              | Descripción                    |
| --- | ------------------ | ------------------------------ |
| 7.1 | Optimizar imágenes | Convertir a WebP, lazy loading |
| 7.2 | Minificar CSS/JS   | Build de producción            |
| 7.3 | CDN para estáticos | Configurar Cache-Control       |

---

## Propuesta de Diseño Visual

### Paleta de Colores Propuesta

| Color           | Hex       | Uso                        |
| --------------- | --------- | -------------------------- |
| Verde Principal | `#319255` | Botones, acentos, links    |
| Verde Oscuro    | `#1E5635` | Headers, footer            |
| Verde Claro     | `#E9FBE9` | Fondos sutiles             |
| Blanco Puro     | `#FFFFFF` | Cards, fondos principales  |
| Gris Oscuro     | `#2D3748` | Texto principal            |
| Gris Claro      | `#718096` | Texto secundario           |
| Dorado          | `#D69E2E` | Badges premium, destacados |

### Tipografía Propuesta

| Elemento   | Fuente  | Peso | Tamaño |
| ---------- | ------- | ---- | ------ |
| Títulos H1 | Poppins | 700  | 48px   |
| Títulos H2 | Poppins | 600  | 36px   |
| Títulos H3 | Poppins | 600  | 24px   |
| Cuerpo     | Inter   | 400  | 16px   |
| Botones    | Inter   | 500  | 14px   |

### Componentes a Crear/Mejorar

1. **Button Component** - Variantes: primary, secondary, outline, ghost
2. **Card Component** - Para productos y proyectos
3. **Section Component** - Con padding consistente
4. **Badge Component** - Diferentes colores y tamaños
5. **Form Input Component** - Con estados de focus y error

---

## Orden de Implementación Sugerido

```
Fase 1: Fundacional → Fase 2: Home → Fase 3: Header/Nav → Fase 4: Footer → Fase 5: Páginas → Fase 6: Interactividad → Fase 7: Performance
```

---

## Archivos a Modificar

| Archivo                                    | Acción                                   |
| ------------------------------------------ | ---------------------------------------- |
| `public/css/app.css`                       | Consolidar y organizar todos los estilos |
| `resources/views/layouts/header.blade.php` | Extraer estilos, mejorar markup          |
| `resources/views/layouts/footer.blade.php` | Extraer estilos, mejorar markup          |
| `resources/views/layouts/app.blade.php`    | Agregar variables CSS globales           |
| `resources/views/home.blade.php`           | Rediseñar secciones principales          |
| `resources/views/obras.blade.php`          | Agregar gallery y filtros                |
| `resources/views/tienda/index.blade.php`   | Mejorar cards de productos               |

---

## Consideraciones Técnicas

1. **Tailwind CSS**: Podría integrarse para acelerar el desarrollo de estilos
2. **Laravel Vite**: Ya configurado, optimizar el build process
3. **Componentes Blade**: Crear componentes reutilizables para mantener consistencia
4. **Responsive First**: Diseñar primero para móvil, luego desktop
5. **Accesibilidad**: Asegurar contraste de colores y navegación por teclado

---

_Plan creado para revisión - Pendiente de aprobación antes de implementación_
