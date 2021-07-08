<template>
  <div class="pt-3">
    <h1>Detalle del {{ producto.nombre }}</h1>
    <ul>
      <li>Precio</li>
      <li>marca</li>
      <li>categoria</li>
      <li>descripcion</li>
    </ul>
  </div>
</template>

<script>
import productosService from "@/services/productos";

export default {
  name: "ProductosDetalle",
  components:{},
  props: {},
  data: function (){
    return {
      producto: {
        nombre: null,
        precio_efectivo: null,
        precio_envio: null,
        stock: null,
        categoria: null,
        descripcion: null,
        temporada: null,
      }
    }
  },
  computed(){},
  methods(){},
  mounted() {
    const id = this.$route.params.id;
    productosService
      .getByPk(id)
      .then(data => {
        this.producto = data;
      })
    console.log("id: ", id);
    // producto
  }
}
</script>

<style scoped>

</style>
