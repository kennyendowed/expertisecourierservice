@extends('layouts.site')

@section('title') Delete Video @endsection
  @section('content')
<style>
ul{
  list-style-type: none;
}
</style>
<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('img/slider/download.jpeg')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Expertise Diplomatic Courier Service</h2>
          <!-- <p class="lead">This is a description for the first slide.</p> -->
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('img/slider/1562813521273.png')">
        <div class="carousel-caption d-none d-md-block">
          <!-- <h2 class="display-4">Expertise Diplomatic Courier Service</h2>
          <p class="lead">This is a description for the second slide.</p> -->
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('img/slider/1562822804893.png')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Expertise Diplomatic Courier Service</h2>
          <!-- <p class="lead">This is a description for the second slide.</p> -->
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</header>

                <div class="row">
                  <div class="col-md-12 mb-5">
                    <div class="card mt-4">
                            <!-- <img class="card-img-top img-fluid" src="http://placehold.it/900x400" alt=""> -->
                            <div class="card-body">
                              <h2 class="card-title">What We Do</h2>
                                <hr>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat explicabo, maiores!</p>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur magni in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt voluptate. Voluptatum.</p>
                              <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
                              4.0 stars
                            </div>
                          </div>
                          <!-- /.card -->
                  </div>
                  <!-- <div class="col-md-4 mb-5">
                    <h2>Contact Us</h2>
                    <hr>
                    <address>
                      <strong>Start Bootstrap</strong>
                      <br>3481 Melrose Place
                      <br>Beverly Hills, CA 90210
                      <br>
                    </address>
                    <address>
                      <abbr title="Phone">P:</abbr>
                      (123) 456-7890
                      <br>
                      <abbr title="Email">E:</abbr>
                      <a href="mailto:#">name@example.com</a>
                    </address>
                  </div> -->
                </div>

       <div class="row">
         <div class="col-md-4 mb-5">
           <div class="card h-100">
             <!-- <img class="card-img-top" src="http://placehold.it/300x200" alt=""> -->
             <div class="card-body">
               <h4 class="card-title">ABOUT US</h4>
                 <hr>
               <p class="card-text">Express Courier was launched in 2000 by our founder Managing Partner Mr. philip cole.</p>
             </div>
             <!-- <div class="card-footer">
               <a href="#" class="btn btn-primary">Find Out More!</a>
             </div> -->
           </div>
         </div>
         <div class="col-md-4 mb-5">
           <div class="card h-100">
             <!-- <img class="card-img-top" src="http://placehold.it/300x200" alt=""> -->
             <div class="card-body">
               <h4 class="card-title">SERVICES</h4>
                 <hr>
               <p class="card-text">Express Air Courier Domestic Service Road Transport Service Import Express Mail Room Services.</p>
             </div>
             <!-- <div class="card-footer">
               <a href="#" class="btn btn-primary">Find Out More!</a>
             </div> -->
           </div>
         </div>

         <div class="col-md-4 mb-5">
           <div class="card h-100">
             <!-- <img class="card-img-top" src="http://placehold.it/300x200" alt=""> -->
             <div class="card-body">
               <h4 class="card-title">INFORMATION</h4>
                 <hr>
                 <ul class="list-group">

                             <li><a href="#" class="list-group-item ">Prohibited Items<span class="pull-right"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></span></a></li>
                            <li><a href="#" class="list-group-item">Guidelines<span class="pull-right"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span></a></li>
                            <li><a href="#" class="list-group-item">Downloads<span class="pull-right"><i class="fa fa-download" aria-hidden="true"></i></span></a></li>
                            <li><a href="#" class="list-group-item">Track Your Shipment<span class="pull-right"><i class="fa fa-truck" aria-hidden="true"></i></span></a></li>
                </ul>
             </div>
             <!-- <div class="card-footer">
               <a href="#" class="btn btn-primary">Find Out More!</a>
             </div> -->
           </div>
         </div>
       </div>
       <!-- /.row -->



              <div class="row">
                <div class="col-md-8 mb-5">
                  <h2>What We Do</h2>
                  <hr>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat explicabo, maiores!</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur magni in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt voluptate. Voluptatum.</p>

                </div>
                <div class="col-md-4 mb-5">
                  <h2>Contact Us</h2>
                  <hr>
                  <address>
                    <strong>Start Bootstrap</strong>
                    <br>3481 Melrose Place
                    <br>Beverly Hills, CA 90210
                    <br>
                  </address>
                  <address>
                    <abbr title="Phone">P:</abbr>
                    (123) 456-7890
                    <br>
                    <abbr title="Email">E:</abbr>
                    <a href="mailto:#">name@example.com</a>
                  </address>
                </div>
              </div>
              <!-- /.row -->
       @endsection




       @section ('footer')
        @endsection
