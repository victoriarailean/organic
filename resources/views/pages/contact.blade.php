
@extends('layouts.app')
@section('content')

			<section class="breadcrumb-area" style="background-image:url(images/background/2.jpg);">
			    <div class="container">
			        <div class="row">
			            <div class="col-md-12">
			                <div class="breadcrumbs text-center">
			                    <h1>{{setting('site.con')}}</h1>
			                    <h4>{{ setting('site.wellcom')}}</h4>
			                </div>
			            </div>
			        </div>
			    </div>
				<div class="breadcrumb-bottom-area">
				    <div class="container">
				        <div class="row">
				            <div class="col-lg-8 col-md-5 col-sm-5">
				                <ul>
				                    <li><a href="#">Home</a></li>
				                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
				                    <li><a href="#">Gallery</a></li>
				                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
				                    <li><a href="#"> Contact us</a></li> 
				                </ul>
				            </div>
				            <div class="col-lg-4 col-md-7 col-sm-7">
				                <p>{{setting('site.provice')
  
								}}</p>
				            </div>
				        </div>
				    </div>
				</div>
			    
			</section>

			<section class="single-contact_us">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="left_contact">
								<h5>{{setting('site.touchh')}}</h5>
								<ul class="list catagories">
		                            <li><a href="#"><i class="fa fa-home color1"></i>{{setting('site.271')}}</a></li>
		                            <li><a href="#"><i class="fa fa-envelope color1"></i><span>{{setting('site.organic')}}</span><br></a></li>
		                            <li><a href="#"><i class="fa fa-phone color1"></i>{{setting('site.pho')}} <br>{{setting('site.11')}}</a></li>
		                        </ul>

		                        <div class="border-area">
			                        <h6>{{setting('site.hours')}}</h6>
									<div class="list Business">
			                            <p>{{setting('site.friday')}}<br>{{setting('site.sunday')}} <span>{{setting('site.cllod')}}</span></p>
			                        </div>
		                        	
		                        </div>

		                        
							</div>
						</div>
						<div class="col-md-8 col-sm-6 col-xs-12">
			                <div class="contact_in-box">
				                <div class="theme-title ">
				                    <h2>{{setting('site.send')}}</h2>
				                </div>
				                <form action="http://st.ourhtmldemo.com/template/organic_store/inc/sendmail.php">
				                	<div class="row">
										
											
										
					                    <div class="col-md-6">
					                        <input type="text" placeholder="{{setting('site.name')}}*">
										</div>
										
					                    <!-- /.col-md-6 -->
					                    <div class="col-md-6">
					                        <input type="text" placeholder="{{setting('site.em')}}*">
					                    </div>
					                    <!-- /.col-md-6 -->
					                    <div class="col-md-6">
					                        <input type="text" placeholder="{{setting('site.phhone')}}">
  
											
					                    </div>
					                    <!-- /.col-md-6 -->
					                    <<div class="col-md-6">
					                        <input type="text" placeholder="Subject">
					                    </div>
					                    <!-- /.col-md-6 -->

					                   <div class="col-md-12">
					                        <textarea placeholder="{{setting('site.Comm')}}"></textarea>
					                    </div>
					                    <!-- /.col-md-12 -->
					                    <div class="col-md-12">
					                        <button type="submit" class="color1_bg">{{setting('site.post')}}</button>
										</div>
										
					                    <!-- /.col-md-12 -->
					                </div>
					                <!-- /.row -->
				                </form>
					                
				            </div> 
			            </div>
					</div>
				</div>
			</section>

			<!-- Google map************************ -->
			<section id="google-map-area">
				<div class="google-map-home" id="google-map" data-map-lat="40.717873" data-map-lng="-73.563033" data-icon-path="images/logo/map.png" data-map-title="Awesome Place" data-map-zoom="11"></div>
	   		</section>


@stop
