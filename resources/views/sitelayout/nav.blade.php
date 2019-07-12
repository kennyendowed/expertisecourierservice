<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="{{URL::asset('img/expertisecourierservicelogo.png')}}" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('/') }}">HOME
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('orders') }}">TRACK SHIPMENT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">CONTACT US</a>
        </li>
      </ul>
    </div>
  </div>
</nav>





<!-- <nav class="navbar-1 navbar navbar-inverse-transparent navbar-inverse stacked-menu fixed-top">
							 <div class="container-fluid navbar-header">
									 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
									 <span class="sr-only">Toggle navigation</span>
									 <span class="icon-bar"></span>
									 <span class="icon-bar"></span>
									 <span class="icon-bar"></span>
									 </button>
							 </div>
							 <a class="navbar-brand" href="#"><img src="images/logo.png" alt="logo"></a>
							 <div class="navbar-collapse collapse">
									 <ul class="nav navbar-nav">
											 <li class="active"><a href="#">Home</a></li>
											 <li><a href="#">About</a></li>
											 <li><a href="#">Contact</a></li>
											 <li><a href="#">Portfolio</a></li>
											 <li><a href="#">Testimonials</a></li>
											 <li><a href="#">Blog</a></li>
											 <li><a href="#">Contact</a></li>
											 <li class="dropdown">
											 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
											 <ul class="dropdown-menu">
													 <li><a href="#">Link to page 1</a></li>
													 <li><a href="#">Link to page 2</a></li>
													 <li role="separator" class="divider"></li>
													 <li><a href="#">Separated link</a></li>
											 </ul>
											 </li>
									 </ul>
							 </div>
					 </nav> -->
