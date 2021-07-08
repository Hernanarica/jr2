//Vamos a crear el servicio de productos.
//Un servicio es un objeto que brinda métodos para administrar alguna funcionalidad.
// import {API} from "../constants";

//creamos variable para almacenar los prodcutos.
let productos = null;

import {API} from "../constans";
//creamos el objeto de servicio
const productosService = {
    getAll: async function (){
        const fetchResponse = await fetch(`${API}/productos.php`);
        const respuesta     = await fetchResponse.json();
        productos = respuesta.data;
        return [...productos];
    },
    create: function(data) {
        return fetch(`${API}/productos.php`, {
            method: 'POST',
            body: JSON.stringify(data),
            // Por defecto, fetch *no* envía ni recibe cookies.
            // Si quiero permitir el uso de cookies, tengo que explícitamente declararlo con la siguiente
            // propiedad:
        })
            .then(rta => rta.json())
            .then(response => {
                return response;
            });
    },

    async getByPk(id) {
        const fetchResponse = await fetch(`${API}/productos.php?id=${id}`, {
            // Por defecto, fetch *no* envía ni recibe cookies.
            // Si quiero permitir el uso de cookies, tengo que explícitamente declararlo con la siguiente
            // propiedad:
            credentials: 'include'
        });
        const respuesta     = await fetchResponse.json();
        return {...respuesta.data};
    },
};
//exportamos el servicio.
export default productosService;
