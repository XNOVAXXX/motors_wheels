const listaProductos = document.querySelector('#lista-productos')

document.addEventListener('DOMContentLoaded', () => {
    listarProductos()
})

const listarProductos = () => {
    
    fetch('http://localhost/motors_wheels/admin/productos/controladores/getProductos.php')
    .then(res => res.json())
    .then(data => {
        console.log(data)
    })
}