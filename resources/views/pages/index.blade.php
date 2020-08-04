
@extends('layouts.app')
@section('content')



			<!-- Banner ____________________________________ -->
	        <div id="banner">
	        	<div class="rev_slider_wrapper">
					<!-- START REVOLUTION SLIDER 5.0 auto mode -->
						<div id="main_slider" class="rev_slider" data-version="5.0">
							<ul>
								@foreach($banner as $item)
									<!-- SLIDE3  -->
										<li data-index="rs-2.{{$item->id}}" data-transition="zoomin" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="images/home/slide-3.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Your Success" data-description="">
											<!-- MAIN IMAGE -->
											<img src="{{Voyager::image($item->background)}}";  alt=""  data-bgposition="top center"  class="rev-slidebg" data-no-retina>
											<!-- LAYERS -->
											

											<!-- LAYER NR. 1 -->
											<div class="tp-caption tp-resizeme" 
												data-x="['center','center','center','center']" data-hoffset="['0','0','35','0']" 
												data-y="['middle','middle','middle','middle']" data-voffset="['-120','-120','-120','-120']"
												data-width="none"
												data-height="none"
												data-transform_idle="o:1;"
												data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
												data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
												data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
												data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
												data-start="1000"
												data-splitout="none" 
												data-responsive_offset="on" 
												data-elementdelay="0.05" 
												style="z-index: 5;">
											
												<img src="{{Voyager::image($item->image)}}">
											</div>
										

											<!-- LAYER NR. 1 -->
											<div class="tp-caption tp-resizeme text-center"
												data-x="center" data-hoffset="0" 
												data-y="center" data-voffset="-40"
												data-transform_idle="o:1;"         
												data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
												data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
												data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
												data-splitin="none" 
												data-splitout="none"                         
												data-start="500">
												<div class="banner-caption-h2"></div>                    
											</div>
											<div class="tp-caption tp-resizeme text-center"
												data-x="center" data-hoffset="0" 
												data-y="top" data-voffset="360"
												data-transform_idle="o:1;"                         
												data-transform_in="x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
												data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
												data-mask_in="x:[-100%];y:0;s:inherit;e:inherit;" 
												data-splitin="none" 
												data-splitout="none" 
												data-responsive_offset="on"                         
												data-start="1400">  
												<div class="banner-caption-h3">{!!$item->title!!}</div>                  
												<div class="banner-caption-p"><p>{!!$item->description!!}</p></div>                  
												<a href="#" class="color1-bg contuct-us">{{$item->btn_lable}}</a>
											</div>
										</li>
								@endforeach
								
							</ul>	
						</div>
					</div><!-- END REVOLUTION SLIDER -->
	        </div> <!-- End of #banner -->



             
				 
			
			<!-- about Section ************************** -->
			<div class="about_section">
				@foreach($promos  as $t => $promo)		
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12t">
							<div class="item wow fadeInLef" style="background-image: url({{ Voyager::image( $promo->image ) }});">
								<div class="offer-sec">
									<div class="inner-title">{{setting('site.for')}}<div class="offer"><span>{{setting('site.30')}} <br>{{setting('site.off')}}</span></div></div>
								</div>
								<div class="content">
									<h3>{{setting('site.grow')}}</h3>
									<p>{{setting('site.dc')}}</p>
									<div class="link-btn"><a href="test/loc" class="tran3s">More Products<span class="fa fa-sort-desc"></span></a></div>
								</div>
							</div>
						
						</div>
							@endforeach
						
						</div>
					</div>
				</div> <!-- End of .container -->
			</div> <!-- End of .welcome_section -->


			    <!--feature Section-->
		    <section class="featured-product">
		        <div class="container">

		            <div class="theme_title center">
		                <h3>{{setting('site.feature')}}</h3>
		            </div>

		            <!--Filter-->
		            <div class="filters text-center">
		                <ul class="filter-tabs filter-btns clearfix">
							<li class="filter active" data-role="button" data-filter="all"><span class="txt">All Products</span></li>
						
                            @foreach($categories as $category)
								<li class="filter active" data-role="button" data-filter=".{{ $category->title}}"><span class="txt">{{ $category->title}}</span></li>
							@endforeach
								            
		                </ul>
		            </div>

		            <div class="row filter-list clearfix" id="MixItUp717B05">
			          			
						@foreach ($products as $i=>$product)
		            
						<!-- Default Item -->
		
			         <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mix mix_all default-item all {{ $product->category->title}} " style="display: inline-block;">
			                <div class="inner-box">
			                    <div class="single-item center">
			                        <figure class="image-box"><img src="{{'http://test.loc/storage/'.$product ->image}}" alt=""><div class="product-model new">New</div></figure>
			                        <div class="content">
			                        	<h3><a href="shop-single.html">{{$product->title}}</a></h3>
			                            <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>
			                            <div class="price">{{$product->price}}<span class="prev-rate">{{$product->old_price}}</span></div>
			                        </div>
			                        <div class="overlay-box">
			                        	<div class="inner">
				                        	<div class="top-content">
				                        		<ul>
				                        			<li><a href="#"><span class="fa fa-eye"></span></a></li>
				                        			<li class="tultip-op"><span class="tultip"><i class="fa fa-sort-desc"></i>ADD TO CART</span><a href="#"><span class="icon-icon-32846"></span></a>
														
													</li>
				                        			<li><a href="#"><span class="fa fa-heart-o"></span></a></li>
				                        		</ul>
				                        	</div>
				                        	<div class="bottom-content">
				                        		<h4><a href="#">{{$product->contains}}:</a></h4>
				                        		<p>{{$product->description}} </p>
				                        	</div>
			                        	</div>
			                        </div>
				                </div>
			                </div>
						</div> 

						@endforeach
				    
			        </div>
		        </div>
			        
		    </section><!-- End of section -->

			
			<!-- Request Quote ******************************* -->
			<section class="why_choose_us">
				<div class="theme_title_bg" style="background-image: url(images/background/1.jpg);">
					<div class="theme_title center">
						
						<div class="container">
							<h2>Why to Choose Us</h2>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered <br>alteration in some form, by injected humour.</p>
							
						</div>
					</div>
					
				</div>
				
				<div class="container">
				
					
					 <!-- End of .theme_title_center -->
					 
					<div class="row">
						
		             
						@foreach ($benefits as $n =>$benefit)
						

						<!-- ______________ Item _____________ -->
						<div class="col-md-6 col-sm-12 col-xs-12">
							<div class="choose_us_item tran3s">
								<div class="icon p_color_bg border_round float_left"><span class="ficon icon-fruit-1"></span></div> <!-- End of .icon -->
								<div class="text float_left">
									<h5 class="tran3s">{{$benefit->title}}</h5>
									<p class="tran3s">{{$benefit->description}}</p>
								</div> <!-- End of .text -->
								<div class="clear_fix"></div>
							</div> <!-- End of .choose_us_item -->
						</div> <!-- End of .col -->
						@endforeach

						
						</div> <!-- End of .col -->
					<!--</div>
				</div>--> <!-- End of .container -->
			</section> -<!-- End of why chooreus -->



			<!--gallery Section-->
		    <section class="gallery">
		        <div class="container">

		            <div class="theme_title">
		                <h3>Top Selling Products</h3>
		            </div>


		            <div class="row filter-list clearfix">
			            
			            <!--Default Item-->
			            <div class="col-md-4 col-sm-6 col-xs-12 mix mix_all default-item all beauty others" style="display: inline-block;">
			                <div class="inner-box">
			                    <div class="single-item center">
			                        <figure class="image-box"><img src="images/gallery/1.jpg" alt=""></figure>
			                        <div class="overlay-box">
			                        	<div class="inner">
				                        	<div class="image-view">
				                                <div class="icon-holder">
				                                    <a href="images/gallery/1.jpg" class="fancybox" data-fancybox-group="home-gallery" title="Gardener Gallery"><span class="icon-magnifier"></span></a>
				                                </div>
				                            </div>
				                        	<div class="bottom-content">
				                        		<h4><a href="#">Coffee Break Cake</a></h4>
				                        		<div class="price">$12.99 <span class="prev-rate">$14.99</span></div>
				                        		<div class="icon-box"><a href="shop-cart.html"><span class="icon-icon-32846"></span></a></div>
				                        	</div>
			                        	</div>
			                        </div>
				                </div>
			                </div>
			            </div>
			            
			            <!--Default Item-->
			            <div class="col-md-4 col-sm-6 col-xs-12 mix mix_all default-item all others" style="display: inline-block;">
			                <div class="inner-box">
			                    <div class="single-item center">
			                        <figure class="image-box"><img src="images/gallery/2.jpg" alt=""></figure>
			                        <div class="overlay-box">
			                        	<div class="inner">
				                        	<div class="image-view">
				                                <div class="icon-holder">
				                                    <a href="images/gallery/1.jpg" class="fancybox" data-fancybox-group="home-gallery" title="Gardener Gallery"><span class="icon-magnifier"></span></a>
				                                </div>
				                            </div>
				                        	<div class="bottom-content">
				                        		<h4><a href="#">Coffee Break Cake</a></h4>
				                        		<div class="price">$12.99 <span class="prev-rate">$14.99</span></div>
				                        		<div class="icon-box"><a href="shop-cart.html"><span class="icon-icon-32846"></span></a></div>
				                        	</div>
			                        	</div>
			                        </div>
				                </div>
			                </div>
			            </div>
			            
			            <!--Default Item-->
			            <div class="col-md-4 col-sm-6 col-xs-12 mix mix_all default-item all fruits vegetables beauty" style="display: inline-block;">
			                <div class="inner-box">
			                    <div class="single-item center">
			                        <figure class="image-box"><img src="images/gallery/3.jpg" alt=""></figure>
			                        <div class="overlay-box">
			                        	<div class="inner">
				                        	<div class="image-view">
				                                <div class="icon-holder">
				                                    <a href="images/gallery/1.jpg" class="fancybox" data-fancybox-group="home-gallery" title="Gardener Gallery"><span class="icon-magnifier"></span></a>
				                                </div>
				                            </div>
				                        	<div class="bottom-content">
				                        		<h4><a href="#">Coffee Break Cake</a></h4>
				                        		<div class="price">$12.99 <span class="prev-rate">$14.99</span></div>
				                        		<div class="icon-box"><a href="shop-cart.html"><span class="icon-icon-32846"></span></a></div>
				                        	</div>
			                        	</div>
			                        </div>
				                </div>
			                </div>
			            </div>
			            
			            <!--Default Item-->
			            <div class="col-md-4 col-sm-6 col-xs-12 mix mix_all default-item all beauty others" style="display: inline-block;">
			                <div class="inner-box">
			                    <div class="single-item center">
			                        <figure class="image-box"><img src="images/gallery/4.jpg" alt=""></figure>
			                        <div class="overlay-box">
			                        	<div class="inner">
				                        	<div class="image-view">
				                                <div class="icon-holder">
				                                    <a href="images/gallery/1.jpg" class="fancybox"><span class="icon-magnifier"></span></a>
				                                </div>
				                            </div>
				                        	<div class="bottom-content">
				                        		<h4><a href="#">Coffee Break Cake</a></h4>
				                        		<div class="price">$12.99 <span class="prev-rate">$14.99</span></div>
				                        		<div class="icon-box"><a href="shop-cart.html"><span class="icon-icon-32846"></span></a></div>
				                        	</div>
			                        	</div>
			                        </div>
				                </div>
			                </div>
			            </div>
			            
			            <!--Default Item-->
			            <div class="col-md-4 col-sm-6 col-xs-12 mix mix_all default-item all fruits others" style="display: inline-block;">
			                <div class="inner-box">
			                    <div class="single-item center">
			                        <figure class="image-box"><img src="images/gallery/5.jpg" alt=""></figure>
			                        <div class="overlay-box">
			                        	<div class="inner">
				                        	<div class="image-view">
				                                <div class="icon-holder">
				                                    <a href="images/gallery/1.jpg" class="fancybox"><span class="icon-magnifier"></span></a>
				                                </div>
				                            </div>
				                        	<div class="bottom-content">
				                        		<h4><a href="#">Coffee Break Cake</a></h4>
				                        		<div class="price">$12.99 <span class="prev-rate">$14.99</span></div>
				                        		<div class="icon-box"><a href="shop-cart.html"><span class="icon-icon-32846"></span></a></div>
				                        	</div>
			                        	</div>
			                        </div>
				                </div>
			                </div>
			            </div>
			            
			            <!--Default Item-->
			            <div class="col-md-4 col-sm-6 col-xs-12 mix mix_all default-item all fruits vegetables beauty others" style="display: inline-block;">
			                <div class="inner-box">
			                    <div class="single-item center">
			                        <figure class="image-box"><img src="images/gallery/6.jpg" alt=""></figure>
			                        <div class="overlay-box">
			                        	<div class="inner">
				                        	<div class="image-view">
				                                <div class="icon-holder">
				                                    <a href="images/gallery/1.jpg" class="fancybox"><span class="icon-magnifier"></span></a>
				                                </div>
				                            </div>
				                        	<div class="bottom-content">
				                        		<h4><a href="#">Coffee Break Cake</a></h4>
				                        		<div class="price">$12.99 <span class="prev-rate">$14.99</span></div>
				                        		<div class="icon-box"><a href="shop-cart.html"><span class="icon-icon-32846"></span></a></div>
				                        	</div>
			                        	</div>
			                        </div>
				                </div>
			                </div>
			            </div>
			            
			            
			        </div>
		        </div>
			        
		    </section><!-- End of section -->

			<section class="news">
				<div class="container">
					<div class="theme_title center">
		                <h3>our latest news</h3>
		            </div>
					<div class="row">
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="blogList_single_post clear_fix wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
	        					<div class="img_holder">
									<img src="images/blog/1.jpg" alt="News" class="img-responsive">
									<div class="opacity tran3s">
										<div class="icon">
											<span><a href="blog-details.html" class="border_round">+</a></span>
										</div> <!-- End of .icon -->
									</div> <!-- End of .opacity -->
								</div> <!-- End of .img_holder -->
								
								<div class="post">
									<ul>
										<li><a href="blog-details.html" class="tran3s"><i class="fa fa-tag" aria-hidden="true"></i> Healthy</a></li>
										<li><a href="blog-details.html" class="tran3s"><i class="fa fa-clock-o" aria-hidden="true"></i> J21st Aug, 2015</a></li>
										<li><a href="blog-details.html" class="tran3s"><i class="fa fa-comments" aria-hidden="true"></i> 26</a></li>
									</ul>
									<div class="text">
										<h4><a href="blog-details.html">You should add 5 things in your daily meals.</a></h4>
										<p>As more and more people are turning to organic lifestyles & trying improve their health...</p>
										<div class="link"><a href="#" class="tran3s">READ MORE<span class="fa fa-sort-desc"></span></a></div>
										
									</div>
									
								</div> <!-- End of .post -->
	        				</div>
							
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="blogList_single_post clear_fix wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
	        					<div class="img_holder">
									<img src="images/blog/2.jpg" alt="News" class="img-responsive">
									<div class="opacity tran3s">
										<div class="icon">
											<span><a href="blog-details.html" class="border_round">+</a></span>
										</div> <!-- End of .icon -->
									</div> <!-- End of .opacity -->
								</div> <!-- End of .img_holder -->
								<div class="post">
									<ul>
										<li><a href="blog-details.html" class="tran3s"><i class="fa fa-tag" aria-hidden="true"></i> Healthy</a></li>
										<li><a href="blog-details.html" class="tran3s"><i class="fa fa-clock-o" aria-hidden="true"></i> J21st Aug, 2015</a></li>
										<li><a href="blog-details.html" class="tran3s"><i class="fa fa-comments" aria-hidden="true"></i> 26</a></li>
									</ul>
									<div class="text">
										<h4><a href="blog-details.html">You should add 5 things in your daily meals.</a></h4>
										<p>As more and more people are turning to organic lifestyles & trying improve their health...</p>
										<div class="link"><a href="#" class="tran3s">READ MORE<span class="fa fa-sort-desc"></span></a></div>
										
									</div>
									
								</div> <!-- End of .post -->
	        				</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="blogList_single_post clear_fix wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
	        					<div class="img_holder">
									<img src="images/blog/3.jpg" alt="News" class="img-responsive">
									<div class="opacity tran3s">
										<div class="icon">
											<span><a href="blog-details.html" class="border_round">+</a></span>
										</div> <!-- End of .icon -->
									</div> <!-- End of .opacity -->
								</div> <!-- End of .img_holder -->
								<div class="post">
									<ul>
										<li><a href="blog-details.html" class="tran3s"><i class="fa fa-tag" aria-hidden="true"></i> Healthy</a></li>
										<li><a href="blog-details.html" class="tran3s"><i class="fa fa-clock-o" aria-hidden="true"></i> J21st Aug, 2015</a></li>
										<li><a href="blog-details.html" class="tran3s"><i class="fa fa-comments" aria-hidden="true"></i> 26</a></li>
									</ul>
									<div class="text">
										<h4><a href="blog-details.html">You should add 5 things in your daily meals.</a></h4>
										<p>As more and more people are turning to organic lifestyles & trying improve their health...</p>
										<div class="link"><a href="#" class="tran3s">READ MORE<span class="fa fa-sort-desc"></span></a></div>
										
									</div>
									
								</div> <!-- End of .post -->
	        				</div>
							
						</div>
						
					</div>
				</div>
			</section>


            
				
			
			<!-- Our Service ****************************** -->
			<div class="our_farmer">
				<div class="container">
					<div class="theme_title center">
						<h2>our farmers</h2>
					</div>
					
					<div class="row">
						<div class="service_slider owl-carousel owl-theme">
							@foreach ($farmers as $i=>$farmer)
								<div class="item center">
									
									<div class="img_holder">
										<img src="{{'http://test.loc/storage/'.$farmer ->image}}"  alt="images">
										<div class="overlay tran3s">
											<div class="inner-box">
												<ul>
												
				                        			<li><a href="#"><span class="fa fa-facebook"></span></a></li>
				                        			<li><a href="#"><span class="fa fa-twitter"></span></a></li>
				                        			<li><a href="#"><span class="fa fa-google-plus"></span></a></li>
				                        		</ul>
											</div>
				                        </div>
									</div>


									<div class="text">
										<h4>{{$farmer->last_name}}</h4>
										<a href="turnaround.html"><h5>{{$farmer->occupation}}</h5></a>
										<p> {{$farmer->description}} </p>
									</div>

								</div> <!-- End of .item -->
								@endforeach

								
								</div> <!-- End of .item -->

								

						</div> <!-- End of .service_slider -->
					</div>
				</div>
			</div> <!-- End of .our_service -->



			<!--Testimonials Section-->
		    <section class="testimonials-section" style="background-image:url(images/parallax/1.jpg);">
		        <div class="container">
		            <div class="theme_title">
						<h2>testimonials</h2>
					</div>
		            <div class="testimonials-carousel">
		            
						<!--Slide Item-->
						@foreach ($testimonials as $n=>$testimonial)
							
						
		                <div class="slide-item">
		                	<div class="inner-box">
		                        <div class="content">
		                        	<div class="text-bg">
			                            <div class="quote-icon"><span class="fa fa-quote-left"></span></div>
			                        	<div class="text">{{$testimonial->description}}</div>                 		
		                        	</div>
		                            <div class="info clearfix">
		                            	<div class="author-thumb"><img src="{{'http://test.loc/storage/'.$testimonial->image}}" alt=""></div>
		                                <div class="author">{{$testimonial->last_name}}r</div>
		                                <div class="author-title">D{{$testimonial->occupation}}</div>
		                            </div>
		                        </div>
		                    </div>
						</div>
						@endforeach
		                
		                
		                
		                </div>-->
		            	
		                
		                
		               
		            	
		                
		               
		               
		            	
		            </div>
		        </div>
		    </section>

			<!-- Partner Logo********************** -->
			
	        <div class="partners wow fadeInUp">
				
	        	<div class="container">
					
				
					
	        		<div id="partner_logo" class="owl-carousel owl-theme">
						@foreach ($parteners as $m=>$partener)
					
						<div class="item"><img src="{{'http://test.loc/storage/'.$partener->image}}"  alt="logo"></div>
						@endforeach
					</div> <!-- End .partner_logo -->
					
				</div>
				
				
			</div>
			




			<section class="call-out">
			    <div class="container">
			        <div class="float_left">
			            <h2>Subscribe For Newsletter</h2>
			            <p>We send you latest news couple a month ( No Spam).</p>
			        </div>
			        <div class="float_right">
			        	<div class="contact-box">

						<form method="post" action="{{ route('form.subs')}}" class="contact-form" novalidate="novalidate">
							<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
		                        <div class="row clearfix">
		                            <div class="form-group">
		                                <input type="text" name="username" value="" placeholder="Your Name*"><i class="fa fa-user" aria-hidden="true"></i>
		                            </div>

		                            <div class="form-group">
		                                <input type="email" name="username" value="" placeholder="Email Address*"><i class="fa fa-envelope" aria-hidden="true"></i>
		                            </div>
		                        
		                            <div class="form-group">
		                                <button type="submit" name="submit" class="btn-style-one center">Submit now</button>
		                            </div>
		                        </div>
		                    </form>
		                </div>
			        </div>
			    </div>
			</section>
			@stop

