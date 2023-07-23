<template lang="html">
  <div class="placed-backg about-page" id="page-info-t1">
    <div class="bg-image" v-bind:style="{ backgroundImage: 'url(public/images/pages/about-us/image.jpg)' }"></div>

    <section class="container oversized-container content-section">
      <div class="row row-content align-items-center">
        <div class="col-lg-6 col-image">
        </div>

        <div class="col-lg-6 offset-xl-1 col-xl-4 col-info">
          <h1 class="mb-2 title-s-1">About Us</h1>

          <p class="text-center">
            Proudly located in Montreal, Hortimed is a privately held producer of premium pharmaceutical grade medical and recreational cannabis.
          </p>

          <p class="mt-3 text-center">
            Hortimed is where craftsmanship and science meet. Our skilled team of legacy growers will be cultivating premium cannabis with a state-of-the-art vertical aeroponic growing system. Phase one will comprise 54,000 square feet with a production capacity of 17,000 kilograms of cannabis.
          </p>

          <p class="mt-3 text-center">
            Hortimed will create 150 jobs and will embrace an organizational culture of operational excellence, environmental consciousness, social responsibility, and entrepreneurial attitude. Our diverse group of corporate Quebecers plan to give back to their community.
          </p>
        </div>
      </div>
    </section>

  </div>
</template>

<script>
export default {
  data(){
    return{
      content: '',
    }
  },

  // methods: {
  //   getContent: function(){
  //     axios.get(tools.url('/historia')).then((response)=>{
  //       this.content = response.data;;
  //     }).catch((error)=>{
  //       console.log(error);
  //     })
  //   }
  // },

  // beforeMount(){
  //   this.getContent();
  // }
}
</script>
