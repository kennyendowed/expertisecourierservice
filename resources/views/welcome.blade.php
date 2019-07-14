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
          <!-- <h2 class="display-4">Expertise Diplomatic Courier Service</h2> -->
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
<br /><br />

       <div class="row">
         <div class="col-md-4 mb-5">
           <div class="card h-100">
             <!-- <img class="card-img-top" src="http://placehold.it/300x200" alt=""> -->
             <div class="card-body">
               <h4 class="card-title">ABOUT US</h4>
                 <hr>
               <p class="card-text">When you ship with Expertise Diplomatic Courier Service– you’re shipping with specialists in international shipping and courier delivery services! With our wide range of express parcel and package services, along with shipping and tracking solutions to fit your needs – you will learn with us how Expertise Diplomatic Courier Service can deliver!</p>
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

                             <li><a href="#"  data-toggle="modal" data-target="#favoritesModal" class="list-group-item ">Prohibited Items<span class="pull-right"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></span></a></li>
                            <li><a href="{{route('orders')}}" class="list-group-item">Track Your Shipment<span class="pull-right"><i class="fa fa-truck" aria-hidden="true"></i></span></a></li>
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
                  <p>As Diplomatic couriers we transfer classified information for the Department of State and specific personal bodies and individuals. Transfers are called “pouches” and they may be as small as an actual pouch of information or as large as truckloads. Our job is to keep the information safe, as we escort it between one of more than 275 embassies and consulates around the world and around the United States to it designated destination.</p>
                </div>
                <div class="col-md-4 mb-5">
                  <h2>Contact Us</h2>
                  <hr>
                  <!-- <address>
                    <strong>Start Bootstrap</strong>
                    <br>3481 Melrose Place
                    <br>Beverly Hills, CA 90210
                    <br>
                  </address> -->
                  <address>
                    <abbr title="Phone">P:</abbr>
                    +1 512-643-4879
                    <br>
                    <abbr title="Email">E:</abbr>
                    <a href="mailto:#">expertdiplomaticservice@diplomats.com</a>
                  </address>
                </div>
              </div>
              <!-- /.row -->


              <div class="modal fade" id="favoritesModal" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h4 class="modal-title"
        id="favoritesModalLabel">Prohibited Items</h4>
      </div>
      <div class="modal-body">
        <h3>We do not carry the following items:</h3>
        <p>
      Stamped and prepaid postal envelopes and parcels<br />
       Any illegal substance or product<br />
       Temperature controlled freight<br />
       Hazardous Materials requiring placards<br />
       Prepared foods<br />
       Passengers<br />
       Poison<br />
       Firearms, explosives and military equipment<br />
       Hazardous substance and radioactive material<br />
       Foodstuff and liquor<br />
       Pornographic material<br />
       All items that infringe the UK, USA Postal Act and all restricted items as per the guidelines.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button"
           class="btn btn-default"
           data-dismiss="modal">Close</button>
        <span class="pull-right">

        </span>
      </div>
    </div>
  </div>
</div>
       @endsection




       @section ('footer')
        @endsection
