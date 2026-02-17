# Roadmap Fase 1: Refactorización y Base

## Objetivo

Extraer los estilos CSS embebidos en las vistas Blade y consolidarlos en `app.css`, creando una base sólida para las siguientes fases.

---

## Tareas Principales

### 1.1 Extraer CSS del Header

**Archivos a modificar:**

- `resources/views/layouts/header.blade.php` (líneas 88-262)
- `public/css/app.css`

**Acciones:**

- [ ] Identificar todos los estilos `<style>` en header.blade.php
- [ ] Crear clases CSS con naming consistente (BEM o similar)
- [ ] Mover estilos a app.css
- [ ] Reempluir `<style>` con referencia a classes
- [ ] Verificar que el diseño no se rompa

**Clases a crear en app.css:**

```css
/* Header */
.hero-full {
}
.hero-min {
}
.hero-bg {
}
.hero-overlay {
}
.navbar-custom {
}
.navbar-scrolled {
}
.logo-img {
}
.nav-link-custom {
}
.dropdown-menu-custom {
}
.dropdown-item-custom {
}
.hero-content {
}
.hero-subtitle {
}
.btn-custom-green {
}
.btn-custom-outline-green {
}
```

### 1.2 Extraer CSS del Footer

**Archivos a modificar:**

- `resources/views/layouts/footer.blade.php` (líneas 73-261)
- `public/css/app.css`

**Acciones:**

- [ ] Identificar todos los estilos en `@section('styles')`
- [ ] Mover estilos a app.css
- [ ] Eliminar @section('styles') y @section('scripts')
- [ ] Consolidar selectores

**Clases a crear en app.css:**

```css
/* Footer */
.footer {
}
.footer-logo-container {
}
.footer-logo {
}
.footer h5 {
}
.footer .nav-link {
}
.footer .bi {
}
.footer .text-green {
}
.footer .social-icons a {
}
.footer .small {
}
```

### 1.3 Crear Variables CSS Globales

**Archivos a modificar:**

- `resources/views/layouts/app.blade.php`
- `public/css/app.css`

**Acciones:**

- [ ] Definir CSS Custom Properties en :root
- [ ] Reempluir colores hardcodeados con variables

**Variables a crear:**

```css
:root {
  /* Colores */
  --color-primary: rgb(49, 146, 85);
  --color-primary-dark: rgb(39, 126, 75);
  --color-primary-light: rgba(49, 146, 85, 0.1);
  --color-dark: #2d3748;
  --color-light: #718096;
  --color-white: #ffffff;
  --color-bg-light: rgba(233, 251, 229, 0.85);

  /* Espaciado */
  --spacing-xs: 0.25rem;
  --spacing-sm: 0.5rem;
  --spacing-md: 1rem;
  --spacing-lg: 1.5rem;
  --spacing-xl: 2rem;
  --spacing-2xl: 3rem;
  --spacing-3xl: 4rem;

  /* Bordes */
  --border-radius-sm: 4px;
  --border-radius-md: 8px;
  --border-radius-lg: 15px;
  --border-radius-xl: 24px;

  /* Sombras */
  --shadow-sm: 0 2px 4px rgba(0, 0, 0, 0.05);
  --shadow-md: 0 4px 6px rgba(0, 0, 0, 0.1);
  --shadow-lg: 0 10px 15px rgba(0, 0, 0, 0.1);
  --shadow-xl: 0 20px 25px rgba(0, 0, 0, 0.15);

  /* Transiciones */
  --transition-fast: 0.15s ease;
  --transition-normal: 0.3s ease;
  --transition-slow: 0.5s ease;
}
```

### 1.4 Normalizar Estilos

**Acciones:**

- [ ] Eliminar redundancias entre archivos
- [ ] Estandarizar naming de clases
- [ ] Crear archivo de reset/normalización
- [ ] Verificar consistencia visual en todas las páginas

---

## Orden de Implementación

```
1. Crear Variables CSS Globales (1.3)
        ↓
2. Extraer CSS del Header (1.1)
        ↓
3. Extraer CSS del Footer (1.2)
        ↓
4. Normalizar Estilos (1.4)
```

---

## Criterios de Éxito

- [ ] No hay estilos `<style>` en las vistas Blade (excepto casos justificados)
- [ ] Todos los colores usan variables CSS
- [ ] El diseño se ve igual o mejor que antes
- [ ] Todas las páginas funcionan correctamente
- [ ] No hay conflictos de estilos entre componentes

---

## Archivos Modificados al Finalizar Fase 1

| Archivo                                    | Estado                             |
| ------------------------------------------ | ---------------------------------- |
| `public/css/app.css`                       | Modificado - estilos consolidados  |
| `resources/views/layouts/app.blade.php`    | Modificado - variables CSS         |
| `resources/views/layouts/header.blade.php` | Modificado - sin estilos embebidos |
| `resources/views/layouts/footer.blade.php` | Modificado - sin estilos embebidos |

---

_Esta roadmap será ejecutada en modo Code una vez aprobada_
