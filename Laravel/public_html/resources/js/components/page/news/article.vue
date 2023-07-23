<template lang="html">
  <div id="article-page">

    <section class="container content-section">
      <div class="row">
        <div class="col-12 col-page-title-t2">
          <h1 class="text-center news-title-t1">News</h1>
        </div>

        <!-- Artículo actual -->
        <div class="col-lg-8 col-article">
          <div class="box-image">
            <img src="public/images/pages/news/article-1.jpg">
          </div>
          <h1>Here goes the title of the news or article</h1>

          <div class="descr">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
        </div>
        <!--  -->

        <!-- Artículos -->
        <div class="col-lg col-blog">
          <div class="row">
            <div class="col-12 col-article-sample-1 sample-2" v-for="(arti, arInx) in 3" :key="'ar-'+arInx">
              <router-link class="box-article" to="/blog/1">
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
        </div>
        <!--  -->
      </div>
    </section>

  </div>
</template>

<script>
export default {
}
</script>
