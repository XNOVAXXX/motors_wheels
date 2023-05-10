const listaCategorias = document.querySelector('#lista-categorias')

document.addEventListener('DOMContentLoaded', () => {

    listarCategorias()
})

const listarCategorias = () => {

    fetch('http://localhost/motors_wheels/admin/categorias/apis/getCategoriasTienda.php')
    .then(res => res.json())
    .then(data => {
        listaCategorias.innerHTML = ''

        data.forEach(categoria => {
            const div = document.createElement('div')
            div.classList.add('col')
            div.innerHTML = `
                <div class="tp-product-category-item text-center mb-40">
                    <div class="tp-product-category-thumb fix">
                        <a href="shop-category.html">
                            <img src="http://localhost/motors_wheels/admin/categorias/imagenes/${categoria.IMAGEN}" alt="product-category">
                        </a>
                    </div>
                    <div class="tp-product-category-content">
                        <h3 class="tp-product-category-title">
                            <a href="shop-category.html">${categoria.CATEGORIA}</a>
                        </h3>
                        <p>${categoria.TOTAL} Productos</p>
                    </div>
                </div>
            `
            listaCategorias.appendChild(div)
        })
    })
}