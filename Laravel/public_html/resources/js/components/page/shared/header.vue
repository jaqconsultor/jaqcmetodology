<template lang="html">
  <header id="header" v-bind:class="{ 'on-header' : $route.name == 'homePage' , 'on-g-header' : $route.name == 'philoPage' || $route.name == 'invPage' }">
    <div class="header-content">
      <div class="container oversized-container content">
        <div class="row align-items-center">
          <div class="col col-logo">
            <router-link to="/">
              <img src="public/images/logo.svg">
            </router-link>
          </div>

          <div class="col"></div>

          <div class="col col-langs">
            <a class="btn-lang">FR</a>
            <span class="sep"></span>
            <a class="btn-lang active">ENG</a>
          </div>

          <div class="col col-opts">
            <a class="btn-menu" @click="activeMenu = true;">
              <i class="fas fa-bars"></i>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Menu -->
    <div class="header-menu" v-bind:class="{ active: activeMenu }" @click="activeMenu = false;">
      <div class="content">
        <a class="btn-close" @click="activeMenu = false;"><i class="fas fa-times"></i></a>

        <div class="col-12 col-logo">
          <router-link to="/">
            <img src="public/images/logo.svg" />
          </router-link>
        </div>

        <div class="col-12 col-menu">
          <p class="p-link">
            <router-link class="link" to="/about-us">About Us</router-link>
          </p>
          <p class="p-link">
            <router-link class="link" to="/our-philosophy">Our Philosophy</router-link>
          </p>
          <p class="p-link">
            <router-link class="link" to="/investors">Investors</router-link>
          </p>
          <p class="p-link">
            <router-link class="link" to="/our-team">Our Team</router-link>
          </p>
          <p class="p-link">
            <router-link class="link" to="/news">News</router-link>
          </p>
        </div>
      </div>
    </div>
    <!--  -->

  </header>
</template>

<script>
export default {
  data(){
    return{
      activeMenu: false
    }
  },

  watch: {
    $route (to, from){
      this.activeMenu = false;
    },

  	activeMenu: (newVal, oldVal) => {
  		if(newVal == true){
        document.getElementById('app').classList.add("block-body");
      }else{
        document.getElementById('app').classList.remove("block-body");
      }
  	}
  }
}
</script>
