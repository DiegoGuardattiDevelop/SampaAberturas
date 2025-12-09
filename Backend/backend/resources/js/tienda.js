document.addEventListener('DOMContentLoaded', function() {
    // Inicializar animaciones
    AOS.init({
        duration: 800,
        once: true,
        easing: 'ease-out-back'
    });

    // Control del rango de precios
    const priceRange = document.getElementById('priceRange');
    const minPriceSpan = document.getElementById('minPrice');
    const maxPriceSpan = document.getElementById('maxPrice');
    
    if (priceRange) {
        priceRange.addEventListener('input', function() {
            minPriceSpan.textContent = '0';
            maxPriceSpan.textContent = Number(this.value).toLocaleString();
        });
    }

    // Ordenar productos
    const ordenarPor = document.getElementById('ordenarPor');
    if (ordenarPor) {
        ordenarPor.addEventListener('change', function() {
            const url = new URL(window.location.href);
            url.searchParams.set('orden', this.value);
            window.location.href = url.toString();
        });
    }

    // Añadir al carrito
    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const productId = this.getAttribute('data-product-id');
            
            fetch(`/carrito/agregar/${productId}`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Actualizar contador del carrito
                    const cartCount = document.getElementById('cart-count');
                    if (cartCount) {
                        cartCount.textContent = data.cart_count;
                    }
                    
                    // Mostrar notificación usando la función global
                    showToast('success', 'Producto añadido al carrito');
                } else {
                    showToast('error', data.message || 'Error al agregar el producto');
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    });

    // Filtros
    const filtrosForm = document.getElementById('filtrosForm');
    if (filtrosForm) {
        filtrosForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const params = new URLSearchParams();
            
            // Agregar parámetros del formulario
            formData.forEach((value, key) => {
                if (key === 'material[]') {
                    // Manejar múltiples materiales
                    document.querySelectorAll('input[name="material[]"]:checked').forEach(checkbox => {
                        params.append('material', checkbox.value);
                    });
                } else if (key === 'priceRange') {
                    params.append('max_price', value);
                }
            });
            
            // Mantener otros parámetros existentes (como categoría)
            const currentParams = new URLSearchParams(window.location.search);
            currentParams.forEach((value, key) => {
                if (key !== 'material' && key !== 'max_price' && key !== 'page') {
                    params.append(key, value);
                }
            });
            
            // Redirigir con los nuevos parámetros
            window.location.href = `${window.location.pathname}?${params.toString()}`;
        });
    }
});