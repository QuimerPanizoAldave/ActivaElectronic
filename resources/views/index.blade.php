@extends('layouts.principal')

@section('title', 'Inicio')

@section('content')


  <div class="container">

    <!--banner-->
    <a href="single.html" class="ban">
        <div class="banner "> 
          <div class="wmuSlider example1">
               <div class="wmuSliderWrapper">

@foreach($slider as $slider)
             <article style="position: absolute; width: 100%; opacity: 0;"> 
                    <div class="banner-wrap">   
                        <div class="short" >
                            <img class="img-responsive" src=" imagenes/{{$slider->imagen}} " alt="" >
                         </div>
                           <div class="month">
                            <h4> {{ $slider->nombre}}</h4>
                            <div class="month-grid">
                                <p> {{ $slider->descripcion}}</p>

                            </div>
                           </div>
                         <div class="clearfix"> </div>
                     </div>
            </article>
       @endforeach


            </div>
        </div>
        <!---->
          <script src="js/js/jquery.wmuSlider.js"></script> 
              <script>
                $('.example1').wmuSlider({
                     pagination : false,
                });         
             </script>  
        </div>  
     </a>
    </div>
    <!---Contenido-->

    <div class="content">   
        <div class="container">
 
            <!---->
            <div class="content-middle">
                <!---->
                <div class="content-bottom">
        <!-- Latest Products Starts -->
                <section class="product-carousel">
                <!-- Heading Starts -->
                    <h2 class="product-head"><i class="fa fa-desktop" aria-hidden="true"> </i> PRODUCTOS NUEVOS  <small>¡Somos Importadores!</small></h2>   
                <!-- Heading Ends -->
                <!-- Products Row Starts -->
                    <div class="row">
                        <div class="col-xs-12">
                        <!-- Product Carousel Starts -->
                            <div id="owl-product" class="owl-carousel">
                               @foreach($productos as $producto)
                            <!-- Product #1 Starts -->
                                <div class="item">
                                
                                    <div class="product-col">
                                        <div class="image">
                                            <img src="/imagenes/{{$producto->imagen}}" alt="product" class="img-responsive img-center-sm img-center-xs" />
                                        </div>
                                        <div class="caption">
                                            <h4><a href="{{route('product-detail', $producto->slug)}}">{{$producto->modelo}}</a></h4>
                                            <div class="price">
                                                <span class="price-new">{{$producto->marca}}</span> 
                                                @if(Auth::user() )
                                                <span class="label label-success">s/ {{$producto->precios}}</span>
                                                @endif
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            <!-- Product #1 Ends -->
                                @endforeach

                            </div>
                        <!-- Product Carousel Ends -->
                        </div>
                    </div>
                <!-- Products Row Ends -->
                </section>
                             <div class="clearfix"> </div>
                </div>
                <!---->

                <div class="grid-top-in">
                <div class="grid-top">
                    <div class="col-md-4 top-grid ">
                        <h5>Sobre Nosotros.</h5>
                        <p class="sed">somos "ACTIVA ELECTRONIC”, empresa dedicada a la importación, distribución , venta de protectores y accesorios para celulares, fundas y carcasas con diseños creativos.</p>
                    </div>
                    <div class="col-md-4 top-grid">
                        <h5>Ubica nuestras tiendas</h5>
                            <div class="house">
                                <i class="in-house"> </i>
                                <div class="add">
                                <p>C.C. MESA REDONDA INT. B70- B71</p>
                                    <p>AV. ARGENTINA NRO. 428</p>
                                    <p>Lima</p>
                                </div>
                            <div class="clearfix"> </div>
                            </div>
                            <div class="house">
                                <i class="in-house in-on"> </i>
                                <div class="add">
                                    <p>927791715 </p>
                                   <p>931443362 </p> 
                                   <p>931443364</p>

                                </div>
                            <div class="clearfix"> </div>
                            </div>
                    </div>
                    <div class="col-md-4 top-grid">
                        <h5>Siguenos !</h5>
                            <ul class="social-in">
                                <li><a href="#"><i> </i></a></li>                       
                                <li><a href="#"><i class="thumblr"> </i></a></li>
                                
                                
                            </ul>
                            <ul class="social-in">
                                <li><a href="#"><i class="twitter"> </i></a></li>
                                <li><a href="#"><i class="dot"> </i></a></li>
                            </ul>
                            <div class="clearfix"> </div>
                </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!---->

@stop