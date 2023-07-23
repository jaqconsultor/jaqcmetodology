<template>
	<main role="main">
	<div :class="{'logging-in login-form-fall':inPetition,'page-body login-page':2>1}">
	<div class="login-container">
	
		<div class="login-header login-caret">
			
			<div class="login-content">
				
				<a class="logo">
					<img :src="logo()" width="300" alt="" />
				</a>
				<p class="description">Usuario, ingresa para entrar al area de administracion!</p>
				
				<!-- progress bar indicator -->
				<div class="login-progressbar-indicator">
					<h3>{{percent}}%</h3>
					<span>Ingresando...</span>
				</div>
			</div>
			
		</div>
		
		<div class="login-progressbar">
			<div :style="'width:'+percent+'%'"></div>
		</div>
		
		<div class="login-form">
			
			<div class="login-content">
				
				<div class="form-login-error" style="display:block;" v-show="error">
					<h3>Error</h3>
					<p>{{error}}</p>
				</div>
				
				<form method="post" @submit.prevent="login">
					
					<div class="form-group">
						
						<div class="input-group">
							<div class="input-group-addon">
								<i class="entypo-user"></i>
							</div>
							
							<input type="text" class="form-control" placeholder="Email" v-model="credentials.email">
						</div>
						
					</div>
					
					<div class="form-group">
						
						<div class="input-group">
							<div class="input-group-addon">
								<i class="entypo-key"></i>
							</div>
							
							<input type="password" class="form-control" placeholder="Password" v-model="credentials.password">
						</div>
					
					</div>
					
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block btn-login">
							<i class="entypo-loginentypo-login"></i>
							Ingresar
						</button>
					</div>
					
				</form>
				
				
				<div class="login-bottom-links">
					
					<!-- <a class="link">Olvide mi contraseña</a> -->
					
									
				</div>
				
			</div>
			
		</div>
		
	</div>
	</div>
	</main>
</template>

<script type="text/javascript">
	export default {
		data:function(){
        	return {
        		percent:0,
        		error:false,
				inPetition:false,
        		credentials:{
        			email:"",
        			password:""
        		}
        	}
        },

        methods:{
        	login(){
        		this.percent=50;
				this.error=false;
				axios.get(tools.url('/sanctum/csrf-cookie')).then(() => {
					axios.post(tools.url("/admin/login"),this.credentials).then((response)=>{
						if(response.data.access){
							this.$parent.user = response.data;
							this.$parent.showMessage("Bienvenido "+this.$parent.user.name);
							this.$parent.logged=true;
							this.$router.push('/home');

						}else{
							this.error = "Esta cuenta no está autorizada";
							this.logout();
						}
						
					}).catch((error)=>{
						this.error = error.response.data.error;
						this.percent=0;
					});
				});
        	},

			logout(){
				axios.post(tools.url("/admin/logout")).then((response)=>{
			    	this.$parent.user = {};
			    	this.$parent.logged=false;
			    	this.$router.push('/');
			    }).catch(()=>{});
			},

			logo(){
				return window.tools.url('public/images/logo.png');
			}        	
        },

		mounted() {
            //console.log('Login mounted.');
        }
    }
</script>