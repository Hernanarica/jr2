<template>
    <div class="col-5 col-sm-5 col-md-3 col-lg-3 productos">
      <div class="productos__img">
        <img :src="'https://www.jr2moda.store/img/productos/invierno2021/' + producto.imagen" :alt=" producto.alt_imagen">
        <router-link :to="`/productos/${producto.id_producto}`">ver</router-link>
      </div>
      <div class="prod__text">
        <div class="prod__text-h2">
          <h3>{{producto.nombre | upper }}</h3>
        </div>
        <div class="prod__text-p">
<!--          <p>{{ producto.descripcion }}</p>-->
<!--          <p>Efectivo ${{ producto.precio_efectivo }}</p>-->
          <p>Precio: <span>${{ producto.precio_envio }}</span></p>
        </div>
      </div>
    </div>
</template>

<script>
  export default {
    name: "ProductosListaItem",
    props: ['producto'],
    filters:{
      upper:function (value){
        return value.toUpperCase();
      }
    }
}
</script>

<style>
.productos img{
  width: 100%;
  border-radius: 5px;
  -moz-border-radius: 5px;
}
.productos{
  justify-content: space-evenly;
  padding: 0 !important;
  cursor: pointer;
  transition: all 200ms ease-in-out;
  -moz-transition: all 200ms ease-in-out;
  -webkit-transition: all 200ms ease-in-out;

  transform:scale(1);
  -moz-transform: scale(1);
  -webkit-transform:scale(1);
}
.productos:hover{
  z-index: 100;

  transform:scale(1.03);
  -moz-transform: scale(1.03);
  -webkit-transform:scale(1.03);
}
.productos__img{
  padding: 10px;
}
.prod__text-p{
  font-size: 1.2em;
  margin: 0;
  padding: 0;
}
.prod__text-h2{
  margin-bottom: 0;
}
/* Texto de los productos*/
.prod__text{
  text-align: center;
  padding:0 10px 10px 10px;
  color: #464646;
}
.prod__text-h2 h3{
  font-size: 1.4em;
  color: #3e3e3e;
  font-family: 'Monserrat', sans-serif;
  font-weight: 400;
}
.prod__text-p{
  color: #6a6a6a;
}

@media (min-width:992px) {
  .col-lg-3 {
    max-width: 23% !important;
  }
}
@media (max-width: 550px) {
  .productos{
    margin-bottom: 1.3em;
  }
  .prod__text-h2 h3{
    font-size: 1.1em;
    margin-top: 0.2em;
  }
  .prod__text-p > p{
    font-size: 0.8em;
    margin-bottom: 0.1em !important;
  }
  .col-5{
    flex: 0 0 45% !important;
    max-width: 45% !important;
  }
  .prod__item{
    justify-content: space-evenly;
    align-items: stretch;
  }
}

</style>
