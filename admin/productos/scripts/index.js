const listaProductos = document.querySelector('#lista-productos')
const formulario_registrar  = document.querySelector('#formulario-registrar')
const categorias = document.querySelector('#categoria')
const mensaje = document.querySelector('#mensaje')

document.addEventListener('DOMContentLoaded', () => {
    listarProductos()
    listarCategorias()
})

formulario_registrar.addEventListener('submit', (e) => {
    e.preventDefault()

    const datos = new FormData(formulario_registrar)

    fetch('http://localhost/motors_wheels/admin/productos/controladores/registrarProducto.php', {
        method: 'POST',
        body: datos
    })
    .then(res => res.json())
    .then(data => {
        if(data.status === 'success'){
            formulario_registrar.reset()
            mostrarMensaje(formulario_registrar, data.message, data.status)
        }else{
            mostrarMensaje(formulario_registrar, data.message, 'danger')
        }
        listarProductos()
    })
})

const listarProductos = () => {
    listaProductos.innerHTML = ``
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

const listarCategorias = () => {
    fetch('http://localhost/motors_wheels/admin/categorias/controladores/getCategorias.php')
    .then(res => res.json())
    .then(data => {
        data.forEach(categoria => {
            const option = document.createElement('option')
            option.value = categoria.ID_CATEGORIA
            option.textContent = categoria.CATEGORIA
            categorias.appendChild(option)
        })
    })
}

const mostrarMensaje = (formulario, texto, tipo) => {
    
    const modal = bootstrap.Modal.getInstance(formulario.parentNode.parentNode.parentNode.parentNode)
    modal.hide()

    mensaje.classList.add(`alert`,`alert-${tipo}`)
    mensaje.innerHTML = texto

    setTimeout(() => {
        mensaje.classList.remove(`alert`,`alert-${tipo}`)
        mensaje.innerHTML = ''
    }, 3000)
}