<template lang="html">
  <footer id="footer">
  	<div class="container oversized-container">
  		<div class="row">

				<div class="col-lg-2 col-xl-3 col-footer col-logo">
					<router-link to="/">
						<img src="public/images/logo-2.svg">
					</router-link>
				</div>

				<div class="col-lg col-footer">
					<h6>Our Products</h6>

					<p class="f-w-600">
						EMAIL: info@hortimed.ca<br />
						PHONE: 514-577-6333<br />
					</p>
				</div>

				<div class="col-lg col-footer">
					<h6>Privacy policy</h6>

					<p class="p-xs">
						Hortimed Inc. does not collect any personally identifiable information when you are visiting the website. The only time we collect data is when you voluntarily provide your email address. This information will only be used to send newsletters.
					</p>
				</div>

				<div class="col-lg col-footer col-form">
					<h6>Stay informed</h6>

					<b-form @submit="onSubmit">
						<b-form-input
		          v-model="form.email"
		          type="email" size="sm"
		          placeholder="Email"
		          required
		        ></b-form-input>

				    <b-button size="sm" class="btn-send">SUBSCRIBE</b-button>
				  </b-form>
				</div>

  		</div>
  	</div>
  </footer>
</template>

<script>
export default {
	data(){
		return{
			form: {
				email: null
			}
		}
	},

  methods: {
    onSubmit(event) {
      event.preventDefault();
    }
  }
}
</script>
