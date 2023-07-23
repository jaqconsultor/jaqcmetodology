<template lang="html">
  <div id="news-page">

    <section class="container med-container articles-section">
      <div class="row">
        <div class="col-12 col-page-title-t2">
          <h1 class="text-center news-title-t1">News</h1>
        </div>

        <div class="col-12 col-form">
          <b-form @submit="onSubmit">
            <b-form-group>
              <b-form-input
                v-model="formSearch.keywords"
                type="text"
                placeholder="Search..."
                required
              ></b-form-input>
            </b-form-group>
            <b-button type="submit" class="btn-search"><i class="fal fa-search"></i></b-button>
          </b-form>
        </div>

        <div class="col-sm-6 col-lg-4 col-xl-3 col-article-sample-1">
          <router-link class="box-article" to="/news/1">
            <div class="placed-backg box-image" v-bind:style="{ backgroundImage: 'url(public/images/pages/news/article-1.jpg)' }">
              <img src="public/images/pages/news/article.png">
            </div>

            <div class="box-descr">
              <h5>Here goes the title of the news or article</h5>

              <div class="descr">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magn.
                </p>
              </div>
            </div>
          </router-link>
        </div>

        <div class="col-sm-6 col-lg-4 col-xl-3 col-article-sample-1" v-for="(x, baInx) in 7" :key="'ba-'+baInx">
          <router-link class="box-article" to="/news/1">
            <div class="placed-backg box-image" v-bind:style="{ backgroundImage: 'url(public/images/pages/news/article-1.jpg)' }">
              <img src="public/images/pages/news/article.png">
            </div>

            <div class="box-descr">
              <h5>Here goes the title of the news or article</h5>

              <div class="descr">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magn.
                </p>
              </div>
            </div>
          </router-link>
        </div>

      </div>

      <div class="row">
        <div class="col-12 col-pagination-sample-1">
          <b-pagination-nav :link-gen="linkGen" :number-of-pages="10" use-router></b-pagination-nav>
        </div>
      </div>
    </section>

  </div>
</template>

<script>
export default {
  data(){
    return{
      formSearch: {
        keywords: null
      }
    }
  },

  methods: {
    onSubmit(event) {
      event.preventDefault();
    },

    linkGen(pageNum) {
      return {
        name: 'newsPage',
        query: { keywords: this.$route.query.keywords, page: pageNum }
      }
    }
  }
}
</script>
