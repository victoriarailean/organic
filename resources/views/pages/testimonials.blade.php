@extends('layouts.app')
@section('content')
		    <section class="testimonials-section single_testimonial">
		        <div class="container">

		            <div class="row">
						
							
						
		            	<div class="col-md-4 col-sm-6 col-xs-12">
							
		            		<!--Slide Item-->
			                <div class="slide-item">
								
			                	<div class="inner-box">
									@foreach ($pages as $ite=>$page)
			                        <div class="content">
										
			                        	<div class="text-bg">
				                            <div class="quote-icon"><span class="fa fa-quote-left"></span></div>
				                        	<div class="text">{{$page->description}}</div>                 		
			                        	</div>
			                            <div class="info clearfix">
			                            	<div class="author-thumb"><img src={{$page->image}} alt=""></div>
			                                <div class="author">{{$page->name}}}}r</div>
			                                <div class="author-title">{{$page->occupation}}</div>
			                            </div>
									</div>
									@endforeach
			                    </div>
			                </div>
		            	</div>
		            	<div class="col-md-4 col-sm-6 col-xs-12">
		            		<!--Slide Item-->
			                
		            	</div>


					</div>
					
		        </div>
		    </section>

			@stop