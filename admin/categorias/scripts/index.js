const listaCategorias = document.querySelector('#lista-categorias')

document.addEventListener('DOMContentLoaded', () => {
    listaCategorias.innerHTML = ``
    fetch('http://localhost/motors_wheels/admin/categorias/controladores/getCategorias.php')
    .then(reponse => reponse.json())
    .then(data => {
        data.forEach(resultado => {
            const row = document.createElement('tr')
            row.innerHTML = `
                <td>${resultado.ID_CATEGORIA}</td>
                <td>${resultado.CATEGORIA}</td>
                <td>
                    <img src="../imagenes/${resultado.IMAGEN}" alt="${resultado.CATEGORIA}" height="80px">
                </td>
                <td>
                    <a href="#" data-id="${resultado.ID_CATEGORIA}" data-bs-toggle="modal" data-bs-target="#Editar">Editar</a>
                </td>
            `
            listaCategorias.appendChild(row)
        })
    })
})