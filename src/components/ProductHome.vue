<template>
  <div class="container">
    <div class="d-flex flex-wrap justify-content-around align-items-start wrap-productos">
      <div class="row prod__item">
        <div class="col-5 col-sm-5 col-md-3 col-lg-2 productos">
          <div class="productos__img">
            <img src="/img/productos/invierno2021/conjunto-rustico-tricolor.jpg" alt="conjunto rustico tricolor">
          </div>
          <div class="prod__text">
            <div class="prod__text-h2">
              <h3>CONJUNTO TRICOLOR</h3>
            </div>
            <div class="prod__text-p">
              <p>Precio: <span>$1669</span></p>
            </div>
          </div>
        </div>
        <div class="col-5 col-sm-5 col-md-3 col-lg-2 productos">
          <div class="productos__img">
            <img src="/img/productos/invierno2021/blazer-crep.jpg" alt="blazer-crep">
          </div>
          <div class="prod__text">
            <div class="prod__text-h2">
              <h3>BLAZER CREP</h3>
            </div>
            <div class="prod__text-p">
              <p>Precio: <span>$1050</span></p>
            </div>
          </div>
        </div>
        <div class="col-5 col-sm-5 col-md-3 col-lg-2 productos">
          <div class="productos__img">
            <img src="/img/productos/invierno2021/buzo-con-tancas.jpg" alt="buzo con tancas">
          </div>
          <div class="prod__text">
            <div class="prod__text-h2">
              <h3>BUZO TANCAS</h3>
            </div>
            <div class="prod__text-p">
              <p>Precio: <span>$1400</span></p>
            </div>
          </div>
        </div>
        <div class="col-5 col-sm-5 col-md-3 col-lg-2 productos">
          <div class="productos__img">
            <img src="/img/productos/invierno2021/saco-lanilla-angora.jpg" alt="saco angora">
          </div>
          <div class="prod__text">
            <div class="prod__text-h2">
              <h3>SACO ANGORA</h3>
            </div>
            <div class="prod__text-p">
              <p>Precio: <span>$895</span></p>
            </div>
          </div>
        </div>
        <div class="col-5 col-sm-5 col-md-3 col-lg-2 productos">
          <div class="productos__img">
            <img src="/img/productos/invierno2021/remera-bote-frunce.jpg" alt="remera bote frunce">
          </div>
          <div class="prod__text">
            <div class="prod__text-h2">
              <h3>REMERA FRUNCE</h3>
            </div>
            <div class="prod__text-p">
              <p>Precio: <span>$495</span></p>
            </div>
          </div>
        </div>
        <div class="col-5 col-sm-5 col-md-3 col-lg-2 productos">
          <div class="productos__img">
            <img src="/img/productos/invierno2021/top-morley.jpg" alt="top morley">
          </div>
          <div class="prod__text">
            <div class="prod__text-h2">
              <h3>TOP MORLEY</h3>
            </div>
            <div class="prod__text-p">
              <p>Precio: <span>$445</span></p>
            </div>
          </div>
        </div>
        <div class="pb-3">
          <li class="content__item">
            <router-link to="/Productos">
              <button class="button button--mimas"><span style="color:#fff">Ver más</span></button>
           </router-link>
          </li>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "ProductHome",
  props: ['productos'],
  data(){
    return{
      producto: [],
    }
  },
}
</script>

<style>
.prod__item{
  display: flex;
  justify-content: space-evenly;
}
/* Boton ver mas*/
.button {
  pointer-events: auto;
  cursor: pointer;
  background: #e7e7e7;
  border: none;
  padding: 1rem 2rem;
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  position: relative;
  display: inline-block;
}

.button::before,
.button::after {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.button--mimas {
  text-transform: uppercase;
  letter-spacing: 0.05rem;
  font-weight: 700;
  font-size: 0.85rem;
  border-radius: 0.5rem;
  overflow: hidden;
  color: #fff;
}

.button--mimas span {
  position: relative;
  mix-blend-mode: difference;
}
.button--mimas::before {
  content: '';
  background: #000;
  width: 120%;
  left: -10%;
  transform: skew(30deg);
  transition: transform 0.4s cubic-bezier(0.3, 1, 0.8, 1);
}

.button--mimas:hover::before {
  transform: translate3d(100%,0,0);
}
</style>
