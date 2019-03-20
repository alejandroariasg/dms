<link href="http://localhost/dms/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script src="http://localhost/dms/assets/js/jquery.min.js"></script>
<script src="http://localhost/dms/assets/js/bootstrap.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<section class="login-block">
    <div class="container">
	<div class="row">
		<div class="col-md-4 login-sec">
		    <h2 class="text-center">Login</h2>
		    <form class="login-form" action="http://localhost/dms/">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Usuario">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Contraseña">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1" class="">Empresa</label>
                    <select class="form-control" name="" id="tipo_empresa">
                        <option value="">--------</option>            
                        <option value="1">OIL & GAS</option>
                        <option value="2">DMS</option>
                    </select>
                </div>
                
                
                    <div class="form-check">
                    <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    <small>Remember Me</small>
                    </label>
                    <button type="submit" class="btn btn-login float-right">Ingresar</button>
                </div>
  
            </form>

		</div>
		<div class="col-md-8 banner-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" id="empresa_selected_01" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" id="empresa_selected_02" data-slide-to="1"></li>
                    
                  </ol>
            <div class="carousel-inner" role="listbox">
    <div class="carousel-item active empresa_selected_01">
      <img class="d-block img-fluid" src="http://localhost/dms/assets/images/pexels-photo.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>OIL & GAS</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        </div>	
  </div>
    </div>
    <div class="carousel-item empresa_selected_02">
      <img class="d-block img-fluid" src="http://localhost/dms/assets/images/people-coffee-tea-meeting.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>DMS Inpecciones</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        </div>	
    </div>
    </div>
    
            </div>	   
		    
		</div>
	</div>
</div>
</section>
</section>

<style>
@import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");
.login-block{
    background: #DE6262;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #FFB88C, #DE6262);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #3F464C, #2186C4); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
float:left;
width:100%;
padding : 50px 0;
height: 100%;
}
.banner-sec{background:url(https://static.pexels.com/photos/33972/pexels-photo.jpg)  no-repeat left bottom; background-size:cover; min-height:500px; border-radius: 0 10px 10px 0; padding:0;}
.container{background:#fff; border-radius: 10px; box-shadow:15px 20px 0px rgba(0,0,0,0.1);}
.carousel-inner{border-radius:0 10px 10px 0;}
.carousel-caption{text-align:left; left:5%;}
.login-sec{padding: 50px 30px; position:relative;}
.login-sec .copy-text{position:absolute; width:80%; bottom:20px; font-size:13px; text-align:center;}
.login-sec .copy-text i{color:#FEB58A;}
.login-sec .copy-text a{color:#E36262;}
.login-sec h2{margin-bottom:30px; font-weight:800; font-size:30px; color: #000000;}
.login-sec h2:after{content:" "; width:100px; height:5px; background:#2876a7; display:block; margin-top:20px; border-radius:3px; margin-left:auto;margin-right:auto}
.btn-login{background: #247eb5; color:#fff; font-weight:600;}
.banner-text{width:70%; position:absolute; bottom:40px; padding-left:20px;}
.banner-text h2{color:#fff; font-weight:600;}
.banner-text h2:after{content:" "; width:100px; height:5px; background:#FFF; display:block; margin-top:20px; border-radius:3px;}
.banner-text p{color:#fff;}
.container{margin-top: 100px;}
</style>

<script>
    $(document).ready(function(){
        $("#tipo_empresa").change(function(){
            
            $("li").removeAttr('active');
            
            if($("#tipo_empresa").val() == 2){
                $(".empresa_selected_02").prop("active", true);
                alert();
            }

        });
    });
</script>