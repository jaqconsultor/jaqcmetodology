import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

//Componentes
//import Login from './components/admin/Login.vue';

const page="./components/page/";

const MyRouter = new VueRouter({
  	routes:[
	    { path: '/', name: 'homePage', component: require(page+'home.vue').default },
      { path: '/about-us', component: require(page+'about-us/index.vue').default, meta:{title:"About Us"}},
      { path: '/our-philosophy', name: 'philoPage', component: require(page+'our-philosophy/index.vue').default, meta:{title:"Our Philosophy"}},
      { path: '/investors', name: 'invPage', component: require(page+'investors/index.vue').default, meta:{title:"Investors"}},
      { path: '/our-team', name: 'teamPage', component: require(page+'team/index.vue').default, meta:{title:"Our Team"}},

      { path: '/news', name: 'newsPage', component: require(page+'news/index.vue').default, meta:{title:"News"}},
      { path: '/news/:id?', name: 'newsPage', component: require(page+'news/article.vue').default, meta:{title:"News"}},

	    // { path: '/checkout', component: require(page+'checkout.vue').default, meta:{title:"Checkout"}},
	  ]
});

MyRouter.beforeEach((to, from, next) => {
	window.scrollTo(0,0);
	if(window.app.__vue__ && window.app.__vue__.$refs.loadingBar){
		window.app.__vue__.$refs.loadingBar.start();
	}
	next();
});

MyRouter.afterEach((to, from) => {

	if(window.app.__vue__ && window.app.__vue__.$refs.loadingBar){
		setTimeout(()=>{
			window.app.__vue__.$refs.loadingBar.done();
		},500);
	}


});

//Titulos del website
import VueDocumentTitlePlugin from "vue-document-title-plugin";
Vue.use(VueDocumentTitlePlugin, MyRouter,
	{ defTitle: "Hortimed", filter: (title)=>{ return title+" - Hortimed"; } }
);

// export {routes};
export default MyRouter;
