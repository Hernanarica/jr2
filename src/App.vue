<template>
  <div id="app">
    <header class="bg-light fixed-top">
      <div id="baner-top" class="row">
        <div class="container-fluid d-flex justify-content-around">
          <div class="col text-center">
            <ul >
              <li class="list-unstyled">
                <strong>La compra mínima es de $8.000 para Envíos</strong>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <b-navbar toggleable="lg" type="light" variant="light">
        <router-link to="/"><b-navbar-brand href="/"><h1 id="logo">JR2-moda</h1></b-navbar-brand></router-link>

        <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>
          <b-collapse id="nav-collapse" is-nav>
          <!-- Right aligned nav items -->
          <b-navbar-nav class="ml-auto align-items-center">
            <b-navbar-nav>
              <router-link to="/">
                <b-nav-item href="/">
                  <span>
                    <svg style="width:20px;height:20px" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M9,13H15V19H18V10L12,5.5L6,10V19H9V13M4,21V9L12,3L20,9V21H4Z" /></svg>
                  </span>Home
                </b-nav-item>
              </router-link>
              <router-link to="/Productos">
                <b-nav-item href="/Productos">
                  <span>
                    <svg style="width:20px;height:20px" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M17,18A2,2 0 0,1 19,20A2,2 0 0,1 17,22C15.89,22 15,21.1 15,20C15,18.89 15.89,18 17,18M1,2H4.27L5.21,4H20A1,1 0 0,1 21,5C21,5.17 20.95,5.34 20.88,5.5L17.3,11.97C16.96,12.58 16.3,13 15.55,13H8.1L7.2,14.63L7.17,14.75A0.25,0.25 0 0,0 7.42,15H19V17H7C5.89,17 5,16.1 5,15C5,14.65 5.09,14.32 5.24,14.04L6.6,11.59L3,4H1V2M7,18A2,2 0 0,1 9,20A2,2 0 0,1 7,22C5.89,22 5,21.1 5,20C5,18.89 5.89,18 7,18M16,11L18.78,6H6.14L8.5,11H16Z" /></svg>
                  </span>Productos
                </b-nav-item>
              </router-link>
              <router-link to="/About">
                <b-nav-item href="/About">
                  <span>
                    <svg style="width:20px;height:20px" viewBox="0 0 24 24">
                      <path fill="currentColor" d="M22 6C22 4.9 21.1 4 20 4H4C2.9 4 2 4.9 2 6V18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6M20 6L12 11L4 6H20M20 18H4V8L12 13L20 8V18Z" />
                    </svg>
                  </span>Contácto
                </b-nav-item>
              </router-link>

            </b-navbar-nav>

          </b-navbar-nav>
          </b-collapse>
      </b-navbar>
    </header>
    <div class="pt-3">
      <router-view/>
    </div>
  </div>
</template>

<style lang="scss">
a{
  text-decoration: none !important;
}
#logo{
  background-image: url("assets/logo-01.svg");
  width: 55px;
  height: 50px;
  background-repeat: no-repeat;
  font-size: 0;
  position: absolute;
  top: 4px;
  left: 33px;
  z-index: 1;
}
#app {
  font-family: "Montserrat", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 75px;
}

#nav {
  font-family: "Montserrat", sans-serif;
  padding: 1rem;
  a {
    font-weight: bold;
    color: #141414;

    &.router-link-exact-active {
      color: #ff4081;
    }
  }
}
#baner-top{
  background: #131313;
  color: white;
}
#baner-top div div ul{
  margin: 0.3em 0;
  padding: 0;
}
#baner-top div div ul li{
  font-size: 1.2em;
  font-weight: 300;
  font-style: italic;
  letter-spacing: 2px;
  padding: 0.2em 0;
}
nav{
  background: #fcfcfc !important;
  box-shadow: 0px 2px 1px -1px rgba(0,0,0,0.2),0px 1px 1px 0px rgba(0,0,0,0.14),0px 1px 3px 0px rgba(0,0,0,0.12);
}
.nav-item{
  font-size: 1.1em;
  font-weight: 600;
}
.nav-item span{
  margin-right: 3px;
  svg{
    margin-bottom: 3px;
  }
}
@media (min-width:754px) and (max-width: 756px) {
  .container{
    max-width: 650px !important;
  }
}
@media (max-width: 550px){
  #logo{
    left:calc( 50vw - 29px );
    top: 3px;
  }
  #baner-top div div ul li {
    font-size: 1em;
    font-weight: 300;
    font-style: italic;
    letter-spacing: 0px;
    padding: 0.2em 0;
  }
}
@media (max-width: 400px) {
  #baner-top div div ul li {
    font-size: 0.8em;
    font-weight: 400;
  }
}
</style>
