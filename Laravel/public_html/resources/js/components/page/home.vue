<template lang="html">
  <div id="home-page">

    <section class="banners-section">
      <swiper class="swiper" :options="bannersOptions">
        <swiper-slide>
          <img src="public/images/pages/home/banner-1.jpg">
          <img class="img-mobile" src="public/images/pages/home/banner-1-m.jpg">
        </swiper-slide>

        <!-- <div class="swiper-button-prev" slot="button-prev"></div>
        <div class="swiper-button-next" slot="button-next"></div> -->
      </swiper>
    </section>

    <section class="container info-section">
      <div class="row justify-content-center">
        <div class="col-lg-9">
          <h3 class="title-s-1">Privately held producer of premium recreational cannabis</h3>

          <p class="mt-4">
            <router-link class="btn btn-s-1" to="">Read More</router-link>
          </p>
        </div>
      </div>
    </section>

    <section class="container oversized-container extra-info-section">
      <div class="row justify-content-center">
        <div class="col-12 col-xl-10 col-content">
          <div class="row">

            <div class="col-sm-6 col-lg-3 col-info">
              <div class="box-info">
                <div class="box-icon">
                  <img src="public/images/pages/home/icon-1.svg">
                </div>
                <h6>
                  Capacity of 100,000 square feet of production
                </h6>
              </div>
            </div>

            <div class="col-sm-6 col-lg-3 col-info">
              <div class="box-info">
                <div class="box-icon">
                  <img src="public/images/pages/home/icon-2.svg">
                </div>
                <h6>
                  Development of a wide variety of products
                </h6>
              </div>
            </div>

            <div class="col-sm-6 col-lg-3 col-info">
              <div class="box-info">
                <div class="box-icon">
                  <img src="public/images/pages/home/icon-3.svg">
                </div>
                <h6>
                  Creation more than 500 jobs
                </h6>
              </div>
            </div>

            <div class="col-sm-6 col-lg-3 col-info">
              <div class="box-info">
                <div class="box-icon">
                  <img src="public/images/pages/home/icon-4.svg">
                </div>
                <h6>
                  Organizational culture of excellence, development and responsability
                </h6>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="container-fluid innovation-section">
      <div class="row align-items-center justify-content-end">
        <div class="col-lg-6 col-xl-4 col-text">
          <swiper class="swiper" :options="infoOptions">
            <swiper-slide v-for="(x, innInx) in 3" :key="'inn-'+innInx">
              <div class="box-carousel">
                <h2 class="title-s-1">Innovation</h2>

                <p class="mt-2 f-w-300">
                  Our team is always looking forward to create new products of the highest quality.
                </p>

                <p class="mt-4">
                  <router-link class="btn btn-s-1" to="">Read More</router-link>
                </p>
              </div>
            </swiper-slide>

            <div class="swiper-pagination" slot="pagination"></div>
          </swiper>
        </div>

        <div class="col-lg-6 offset-xl-1 col-image">
          <img src="public/images/pages/home/innovation.jpg">
        </div>
      </div>
    </section>

    <section class="container med-container news-section">
      <div class="row">

        <div class="col-12 col-title">
          <h2 class="title-s-1">News</h2>
        </div>

        <div class="col-sm-6 col-lg-4 col-xl-3 col-article-sample-1" v-for="(a, blghInx) in 4" :key="'blgh-'+blghInx">
          <router-link class="box-article" to="/news/1">
            <div class="placed-backg box-image" v-bind:style="{ backgroundImage: 'url(public/images/pages/news/article-1.jpg)' }">
              <img src="public/images/pages/news/article.png">
            </div>

            <div class="box-descr">
              <h5>Here goes the title of the news or article</h5>

              <div class="descr">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magn consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                </p>
              </div>
            </div>
          </router-link>
        </div>

      </div>
    </section>

  </div>
</template>

<script>
export default {
  data() {
    return {
      bannersOptions: {
        effect: 'fade',

        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev'
        }
      },

      infoOptions: {
        effect: 'fade',

        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        }
      }
    }
  }
}
</script>
