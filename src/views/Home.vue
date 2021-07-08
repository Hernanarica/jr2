<template>
  <div class="home container">
    <aside>
      <div>
        <b-carousel
            id="carousel-fade"
            style="text-shadow: 0px 0px 2px #000"
            fade
            controls
            indicators
            :interval="3000"
            v-model="slide"
            img-width="1024"
            img-height="480"
        >
          <b-carousel-slide
              img-src="https://www.jr2moda.store/img/slide1.png"
          ></b-carousel-slide>
          <b-carousel-slide
              img-src="https://www.jr2moda.store/img/slide2.png"
          ></b-carousel-slide>
          <b-carousel-slide
              img-src="https://www.jr2moda.store/img/slide3.png"
          ></b-carousel-slide>
        </b-carousel>
      </div>
    </aside>
    <section class="home__cont">
      <h2>Los más vendidos</h2>
      <hr />
      <div class="home__cont-prod">
        <product-home
            :productos="productos">
        </product-home>
      </div>
    </section>
  </div>
</template>

<script>
import ProductHome from "./../components/ProductHome";
export default {
  name: 'Home',
  components : {
    ProductHome
  },
  data (){
    return{
      slide: 1,
      productos: [],
      estaCargando: true,
    }
  },
  mounted: function () {
    this.estaCargando = true;
    fetch('https://www.jr2moda.store/api/productos.php?estado=1')
        .then(rta => rta.json())
        .then (response => {
          this.estaCargando = false;
          this.productos = response.data;
        });
  }
}
</script>
<style>
  .home__cont>h2{
    text-align: left;
    padding-top: 0.3em;
  }
  .home{
    padding-top: 1em;
    /*max-width: 1200px;*/
    /*margin:0 auto;*/
  }
  @media (max-width: 550px) {
    .home{
      padding-top: 0em;
    }
  }
</style>
