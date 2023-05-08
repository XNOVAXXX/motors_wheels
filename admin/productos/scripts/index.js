const listaProductos = document.querySelector('#lista-productos')

document.addEventListener('DOMContentLoaded', () => {
    listarProductos()
})

const listarProductos = () => {
    
    fetch('http://localhost/motors_wheels/admin/productos/controladores/getProductos.php')
    .then(res => res.json())
    .then(data => {
        data.forEach(producto => {
            const row = document.createElement('tr')
            row.innerHTML = `
            <td>
                <a href="#">
                    <img src="../imagenes/${producto.IMAGEN_PRODUCTO}" class="rounded" width="100" alt="${producto.NOMBRE}">
                </a>
            </td>
            <td>${producto.NOMBRE}</td>
            <td>
                <span class="text-success">${producto.CATEGORIA}</span>
            </td>
            <td>$${producto.PRECIO}</td>
            <td>
                <span class="text-success">En Stock </span> #${producto.STOCK}
            </td>
            <td class="text-end">
                <div class="d-flex">
                    <div class="dropdown ms-auto">
                        <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#Editar" class="dropdown-item">Editar</a>
                        </div>
                    </div>
                </div>
            </td>
            `
            listaProductos.appendChild(row)
        })
    })
}