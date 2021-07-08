<template>
  <div class="pt-3 container pb-3">
    <h1>Crear nuevo producto</h1>
    <p>Completa el formulario con los datos del producto.</p>
    <ProductosNuevoForm />
  </div>
</template>

<script>
import ProductosNuevoForm from "@/components/ProductosNuevoForm";
export default {
  name: "ProductosNuevo",
  components:{ProductosNuevoForm},
  props:{},
  data: function (){
    return{}
  },
}
</script>

<style>

</style>
