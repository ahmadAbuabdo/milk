@extends('portal.layout.main')


@section('content')


    <section id="portfolio">
        <div class="container">
            <div class="center">
               <h2>{{@trans('gallary.gall')}}</h2>
               <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
        

            <ul class="portfolio-filter text-center">
                <li><a class="btn btn-default active" href="#" data-filter="*">All Works</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".bootstrap">Creative</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".html">Photography</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".wordpress">Web Development</a></li>
            </ul><!--/#portfolio-filter-->

            <div class="row">
                <div class="portfolio-items wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms"">
                   @foreach($gallerys as $gallery)
                    <div class="portfolio-item wordpress html bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                             <img class="img-responsive" src="{{ asset('/files/gallary/' . $gallery->id . '/' . $gallery->image) }}" style="" alt="{{ $gallery->name }}" >
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">about image</a></h3>
                                    <p>{{$gallery['title']}}</p>
                                    @if(!empty($gallery->image))
                                        @if(is_dir(public_path() . '/files/gallary/' . $gallery->id))

                                         <a class="preview" href="{{ asset('/files/gallary/' . $gallery->id . '/' . $gallery->image) }}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                        @endif
                                    @endif
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->
                    @endforeach
                </div>
            </div>
        </div>
    </section><!--/#portfolio-item-->
@endsection