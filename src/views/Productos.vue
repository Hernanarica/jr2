<template>
  <div id="cont__productos">
    <router-link to="/productos/nuevo">Crear nuevo proucto</router-link>
    <BaseLoader
      v-if="estaCargando"
    />
    <productos-lista
        v-else
        :productos="productos">
    </productos-lista>
  </div>
</template>
<script>

import ProductosLista from "./../components/ProductosLista";
import productosService from "@/services/productos";
import BaseLoader from "@/components/BaseLoader";

export default {
  name: "Productos",
  components: {
    BaseLoader,
    ProductosLista,
  },
  data: function (){
    return {
      estaCargando: true,
      productos: [],
    }
  },
  mounted: function () {
    this.estaCargando = true;
    productosService
      .getAll()
      .then(response => {
          this.estaCargando =false;
          this.productos = response;
      })

  }
}
</script>

<style>
  #cont__productos{
    padding-top: 1em;
  }
</style>
