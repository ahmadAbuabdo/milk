@extends('portal.layout.main')


@section('content')
	<section id="about-us" class="no-margin">
	    {{-- <div class="container"> --}}
			<!-- about us slider -->
			<div id="about-slider " >
				  <img class="img-responsive wow fadeInDown about" src="{{ asset('/files/about_us/' . $aboutus->id . '/' . $aboutus->image) }}" alt="{{ $aboutus->name }}"  style="height: 620px; width: 100%;">
			</div><!--/#about-slider-->
			<br>
			<div class="center wow fadeInDown">
				<h2>{{@trans('about_us.company_name')}}</h2>
				<p class="lead">{!! $aboutus[App::getLocale().'_about'] !!}</p>
			</div>
			
		{{-- </div> --}}
	</section><!--/about-us-->
	
@endsection