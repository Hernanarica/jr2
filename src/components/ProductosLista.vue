<template>
  <div class="container">
    <div class="d-flex flex-wrap justify-content-around align-items-start wrap-productos">
      <div class="form-group col-12 d-flex flex-wrap text-center mx-auto justify-content-center align-items-center bg-buscar">
        <h2 class="col-12">Selecciona tu producto</h2>
        <div class="col-sm-10 col-lg-6">
          <input type="text" placeholder="Buscar por nombre de producto" v-model="buscar" v-on:keyup.enter="buscarProducto" class="form-control mb-2 search-field" id="buscador"/>
        </div>
      </div>
      <div class="row prod__item">
        <ProductosListaItem
            v-for="producto in buscarProducto()"
            :key="producto.id_producto"
            :producto="producto"
        ></ProductosListaItem>
      </div>
    </div>
  </div>
</template>

<script>
import ProductosListaItem from "./ProductosListaItem";

export default {
  name: "ProductosLista",
  components: {
    ProductosListaItem,
  },
  data(){
    return{
      buscar: '',
      producto: [],
    }
  },
  props: {
    productos: {
      type: Array,
      required: true,
    }
  },
  methods:{
    buscarProducto() {
      return this.productos.filter((producto) => producto.nombre.toLowerCase().includes(this.buscar.toLowerCase()));
    }
  }
}
</script>

<style>
.search-field{
  appearance: none;
  background: none;
  border: none;
  outline: none;
  background-color: #f3f3f3;
  box-shadow: 0px 4px 8px rgb(0,0,0,0.15);

  display: block;
  width: 100%;
  max-width: 600px;
  padding: 15px;
  border-radius: 8px;
  margin-bottom: 0.5em;

  color: #313131;
  font-size: 1.2em;

  transition: 0.4s;
}
.search-field::placeholder{
  color: #fff;
}
.search-field:focus, .search-field:valid{
  color: #fff;
  background: #313131;
  box-shadow: 0px 0px 0px rgba(0,0,0,0.15);
}
.bg-buscar h3{
  margin-bottom: 0.5em;
}
.prod__item{
  justify-content: space-evenly;
}
@media (max-width: 550px) {
  h2{
    font-size: 1.8rem !important;
  }
}
</style>
