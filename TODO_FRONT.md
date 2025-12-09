# Lista de Tareas - Frontend (Mejoras para el Sitio Web)

## Metodología de Trabajo

- Leemos el archivo de tareas según sea front o back
- En cada tarea crearemos una rama feature para tal caso
- Haremos pull desde develop y comenzaremos a trabajar
- Se debe probar la funcionalidad total de la tarea y del proyecto
- Actualizaremos el archivo de tareas marcando las tareas realizadas
- Una vez realizado podemos comitear y pusher a la rama remota
- Para después mergear a develop
- Por último eliminaremos la rama feature
- En todos los casos debes pedir autorización para comenzar

## Diseño y UI/UX

- [ ] Mejorar el diseño responsivo en dispositivos móviles (especialmente el carrusel y la sección de productos)
- [ ] Implementar un sistema de temas (claro/oscuro) para mejorar la accesibilidad
- [ ] Optimizar las imágenes: convertir a formatos modernos (WebP), implementar lazy loading completo
- [ ] Mejorar la tipografía: usar fuentes más modernas y consistentes en todo el sitio
- [ ] Añadir animaciones sutiles para mejorar la experiencia de usuario (transiciones en hover, carga de elementos)
- [ ] Implementar un sistema de notificaciones toast más robusto (reemplazar alert() por una librería como Toastify en todas las páginas)

## Funcionalidad y Interactividad

- [ ] Implementar búsqueda en tiempo real en la tienda (autocomplete con AJAX)
- [ ] Añadir filtros avanzados en la tienda (por material, color, dimensiones)
- [ ] Crear una página de detalle de producto completa con galería de imágenes
- [ ] Implementar un carrito de compras funcional con modal/popup
- [ ] Añadir funcionalidad de wishlist/favoritos
- [ ] Implementar paginación infinita (infinite scroll) en la tienda
- [ ] Añadir validación de formularios en el frontend (antes de enviar al backend)

## SEO y Rendimiento

- [ ] Añadir meta tags dinámicas en todas las páginas (Open Graph, Twitter Cards)
- [ ] Implementar structured data (JSON-LD) para productos y empresa
- [ ] Optimizar el Core Web Vitals (Lighthouse score > 90)
- [ ] Añadir breadcrumbs de navegación
- [ ] Implementar sitemap.xml dinámico
- [ ] Mejorar la accesibilidad (ARIA labels, navegación por teclado, contraste de colores)

## Contenido y Multimedia

- [ ] Crear una galería de obras completada con filtros y búsqueda
- [ ] Añadir videos de productos/servicios con lazy loading
- [ ] Implementar un sistema de testimonios/clientes satisfechos
- [ ] Crear una sección de blog/noticias para SEO
- [ ] Añadir mapa interactivo de ubicación de la empresa

## Integraciones

- [ ] Integrar WhatsApp Business para contacto directo
- [ ] Añadir botones de compartir en redes sociales
- [ ] Implementar Google Analytics y seguimiento de conversiones
- [ ] Añadir integración con Google Maps para ubicación
- [ ] Implementar chat en vivo (ej. Tidio, Intercom)

## Mantenimiento y Escalabilidad

- [ ] Crear componentes reutilizables (Blade components) para consistencia
- [ ] Implementar un sistema de gestión de contenido básico (CMS) para textos/imágenes
- [ ] Añadir internacionalización (i18n) para múltiples idiomas
- [ ] Optimizar el bundle de JavaScript/CSS (code splitting, tree shaking)
- [ ] Implementar Progressive Web App (PWA) para mejor experiencia móvil
