# Plan de Mejora de Paleta de Colores

## Estado Actual

### Colores Principales Encontrados (Inconsistentes)

| Color             | Valor              | Uso                 |
| ----------------- | ------------------ | ------------------- |
| Verde Principal 1 | `rgb(49, 146, 85)` | ~70% de los usos    |
| Verde Principal 2 | `#319255`          | ~25% de los usos    |
| Verde Claro       | `#22c55e`          | Gradientes, acentos |
| Verde Oscuro      | `rgb(34, 121, 70)` | Hover states        |
| Azul Grisáceo     | `#2c3e50`          | Gradientes          |

### Problemas Identificados

1. **Inconsistencia**: Tres valores diferentes para el mismo color verde
2. **Variables no utilizadas**: `--color-primary` definido pero no usado consistentemente
3. **Valores hardcodeados**: rgb(49, 146, 85) usado directamente en 81 lugares
4. **Falta de armonización**: Colores de gradientes no estandarizados

---

## Plan de Mejora

### Tarea 1: Definir Variables de Color Conscientes

- [ ] Crear variables CSS consistentes en `:root`
- [ ] Agregar variantes (hover, light, dark)
- [ ] Definir colores de gradiente

### Tarea 2: Reemplazar Colores Hardcodeados

- [ ] Reemplazar `rgb(49, 146, 85)` → `var(--color-primary)`
- [ ] Reemplazar `#319255` → `var(--color-primary)`
- [ ] Reemplazar `#22c55e` → `var(--color-primary-light)`
- [ ] Reemplazar `rgb(34, 121, 70)` → `var(--color-primary-dark)`
- [ ] Reemplazar `#2c3e50` → `var(--color-dark-secondary)`

### Tarea 3: Harmonizar Gradientes

- [ ] Crear variables para gradientes comunes
- [ ] Actualizar todos los gradientes a usar variables

### Tarea 4: Optimizar Paleta de Colores (Opcional)

- [ ] Analizar si los colores actuales representan bien la marca
- [ ] Proponer mejoras si es necesario

---

## Colores Propuestos para el Sistema

```css
:root {
  /* Primary - Verde Sampa */
  --color-primary: rgb(49, 146, 85); /* Verde principal */
  --color-primary-dark: rgb(34, 121, 70); /* Verde hover */
  --color-primary-light: #22c55e; /* Verde acento */
  --color-primary-ultra-light: rgba(49, 146, 85, 0.1);

  /* Secondary - Colores de acento */
  --color-secondary: #51cf66;
  --color-accent-blue: #4dabf7;
  --color-accent-red: #ff6b6b;
  --color-accent-orange: #ff922b;
  --color-accent-purple: #9b59b6;

  /* Neutrales */
  --color-dark: #1a1a1a;
  --color-dark-secondary: #2c3e50; /* Azul grisáceo */
  --color-medium: #666666;
  --color-light: #f8f9fa;
  --color-white: #ffffff;

  /* Textos */
  --color-text-primary: #333333;
  --color-text-secondary: #666666;
  --color-text-light: #ffffff;

  /* Bordes y sombras */
  --color-border: #dddddd;
  --color-shadow: rgba(0, 0, 0, 0.1);

  /* Gradientes */
  --gradient-primary: linear-gradient(
    135deg,
    var(--color-primary) 0%,
    var(--color-primary-dark) 100%
  );
  --gradient-hero: linear-gradient(
    135deg,
    var(--color-dark-secondary) 0%,
    var(--color-primary) 100%
  );
  --gradient-accent: linear-gradient(
    135deg,
    var(--color-primary) 0%,
    var(--color-primary-light) 100%
  );
}
```

---

## Archivos a Modificar

1. `Backend/backend/public/css/app.css` - Principal archivo de estilos
2. `Backend/backend/resources/views/layouts/app.blade.php` - Si hay estilos inline
3. Otros archivos blade con estilos inline si existen

---

## Prioridades

1. **Alta**: Consolidar verde principal en una sola variable
2. **Alta**: Eliminar inconsistencias entre rgb() y hex()
3. **Media**: Crear gradientes consistentes
4. **Baja**: Evaluar mejora de colores de marca
