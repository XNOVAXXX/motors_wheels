const listaProductos = document.querySelector('#lista-productos')
const total = document.querySelector('#total')
const boton = document.querySelector('#boton-registrar')
const formulario = document.querySelector('#formulario-orden')

document.addEventListener('DOMContentLoaded', () => {
    if (localStorage.getItem('carrito')) {
        carrito = JSON.parse(localStorage.getItem('carrito'))
        listarProductosCarrito()
    }
})

boton.addEventListener('click', (e) => {
    e.preventDefault()
    const datos = new FormData(formulario)

    console.log(datos)

})

const listarProductosCarrito = () => {

    listaProductos.innerHTML = ''
    carrito.forEach(producto => {
        const li = document.createElement('li')
        li.classList.add('tp-order-info-list-desc')
        li.innerHTML = `
        <p>${producto.nombre} <span> x ${producto.cantidad}</span></p>
        <span>$${producto.cantidad*producto.precio}</span>
        `
        listaProductos.appendChild(li)
    })
    totalProductos()
}

const totalProductos = () => {
    total.innerHTML = ''
    let costoTotal = 0
    carrito.forEach(producto => {
        costoTotal += producto.precio * producto.cantidad
    })
    total.innerHTML = `$${costoTotal}`
}