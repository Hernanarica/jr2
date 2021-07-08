<template>
  <form
      action="#"
      method="post"
      @submit.prevent="grabar(producto)"
  >
    <BaseNotificacion
        :titulo="status.titulo"
        :mensaje="status.mensaje"
        :tipo="status.tipo"
        v-if="status.mensaje !=null "
    />
    <div class="form-group">
      <label for="nombre">Nombre</label>
      <input
          type="text"
          id="nombre"
          class="form-control"
          v-model="producto.nombre"
          :disabled="estaCargando"
          :aria-describedby="errores.nombre !=null ? 'nombre-error': ''"
      >
      <div id="nombre-error"
          class="alert alert-danger"
          v-if="errores.nombre != null">
        {{errores.nombre[0]}}
      </div>
    </div>
    <div class="form-group">
      <label for="categoria">Categoria</label>
      <input
          type="text"
          id="categoria"
          class="form-control"
          v-model="producto.categoria"
          :disabled="estaCargando"
          :aria-describedby="errores.categoria !=null ? 'categoria-error': ''"
      >
      <div id="categoria-error"
          class="alert alert-danger"
          v-if="errores.categoria != null">
          {{errores.categoria[0]}}
      </div>
    </div>
    <div class="form-group">
      <label for="stock">Stock</label>
      <input
          type="text"
          id="stock"
          class="form-control"
          :aria-describedby="errores.stock !=null ? 'stock-error': ''"
          v-model="producto.stock"
          :disabled="estaCargando"
      >
      <div id="stock-error"
          class="alert alert-danger"
           v-if="errores.stock != null">
        {{errores.stock[0]}}
      </div>
    </div>
    <div class="form-group">
      <label for="precio_efectivo">Precio Efectivo</label>
      <input
          type="text"
          id="precio_efectivo"
          class="form-control"
          v-model="producto.precio_efectivo"
          :disabled="estaCargando"
          :aria-describedby="errores.precio_efectivo !=null ? 'precio_efectivo-error': ''"
      >
      <div id="precio_efectivo-error"
          class="alert alert-danger"
          v-if="errores.precio_efectivo != null">
        {{errores.precio_efectivo[0]}}
      </div>
    </div>
    <div class="form-group">
      <label for="precio_envio">Precio Envio</label>
      <input
          type="text"
          id="precio_envio"
          class="form-control"
          v-model="producto.precio_envio"
          :disabled="estaCargando"
          :aria-describedby="errores.precio_envio !=null ? 'precio_envio-error': ''"
      >
      <div id="precio_envio-error"
           class="alert alert-danger"
           v-if="errores.precio_envio != null">
        {{errores.precio_envio[0]}}
      </div>
    </div>
    <div class="form-group">
      <label for="temporada">Temporada</label>
      <input
          type="text"
          id="temporada"
          class="form-control"
          :aria-describedby="errores.temporada !=null ? 'temporada-error': ''"
          v-model="producto.temporada"
          :disabled="estaCargando"
      >
      <div id="temporada-error"
           class="alert alert-danger"
           v-if="errores.temporada != null">
        {{errores.temporada[0]}}
      </div>
    </div>
    <div class="form-group">
      <label for="descripcion">Descripción</label>
      <textarea
          type="text"
          id="descripcion"
          class="form-control"
          :aria-describedby="errores.descripcion !=null ? 'descripcion-error': ''"
          v-model="producto.descripcion"
          :disabled="estaCargando"
      ></textarea>
      <div id="descripcion-error"
           class="alert alert-danger"
           v-if="errores.descripcion != null">
        {{errores.descripcion[0]}}
      </div>
    </div>
    <button class="btn btn-primary btn-block">
      <BaseLoader v-if="estaCargando"/>
      <span v-else>Grabar</span>
    </button>
  </form>
</template>

<script>
import BaseLoader from "./../components/BaseLoader";
import BaseNotificacion from "./../components/BaseNotificacion";
import productosService from "./../services/productos";

export default {
  name: "ProductosNuevoForm",
  components:{BaseNotificacion, BaseLoader},
  props:{},
  data: function (){
    return {
      estaCargando: false,
      producto: {
        nombre: null,
        precio_efectivo: null,
        precio_envio: null,
        stock: null,
        categoria: null,
        descripcion: null,
        temporada: null,
      },
      errores: {
        nombre: null,
        precio_efectivo: null,
        precio_envio: null,
        stock: null,
        categoria: null,
        descripcion: null,
        temporada: null,
      },
      status: {
        titulo: null,
        mensaje: null,
        tipo: 'info',
      },
    }
  },
  computed:{},
  methods:{
    grabar: function (producto){
      //si ya esta cargando por un envio anterior, no permitimos enviar el form de nuevo hasta q termine
      if(this.estaCargando){
        return null;
      }
      this.estaCargando = true;

      // fetch(`${API}/productos.php`,{
      //   method: 'POST',
      //   body: JSON.stringify(producto)
      // })
      // .then(rta => rta.json())
      productosService
        .create(producto)
        .then(response => {
          this.estaCargando = false;
          if(response.success){
            this.producto = {
              nombre: null,
              precio_efectivo: null,
              precio_envio: null,
              stock: null,
              categoria: null,
              descripcion: null,
              temporada: null,
            };
            this.errores = {
              nombre: null,
              precio_efectivo: null,
              precio_envio: null,
              stock: null,
              categoria: null,
              descripcion: null,
              temporada: null,
            };
            this.status.mensaje = "El producto se creó exitosamente.";
            this.status.tipo = "success";
            this.status.titulo="Exito"
          } else{
            this.errores = response.errores;
            this.status.titulo="Error"
            this.status.mensaje = "Ocurrio un problema al grabar el producto.";
            this.status.tipo = "danger";
          }
        })
    }
  },
  mounted() {
  }
}
</script>

<style scoped>

</style>
