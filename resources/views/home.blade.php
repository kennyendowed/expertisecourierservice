@extends('layouts.site')

@section('title') Dashboard @endsection
  @section('content')

<br /><br />
       @auth


  @if(checkPermission(['user']))



  @elseif(checkPermission(['admin']))



  @elseif(checkPermission(['superadmin']))
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">

                  <div class="card-header">Dashboard</div>

                  <div class="card-body">
                      @if (session('status'))
                          <div class="alert alert-success" role="alert">
                              {{ session('status') }}
                          </div>
                      @endif

                      <section id="contact" class="section-bg wow fadeInUp">

                        <div class="container">
                          <div class="row">
                            <div class="col-md-12 mb-5">
                              <div class="card mt-4">
                                      <!-- <img class="card-img-top img-fluid" src="http://placehold.it/900x400" alt=""> -->
                                      <div class="card-body">
                                        <h2 class="card-title">Track A Package</h2>
                                          <hr>


                                            <div class="form">
                                              <form method="POST" action="{{ route('product') }}">
                                                 @csrf
                                                 <div class="form-group">
                                                   <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" placeholder="Enter your title here.." required autofocus>
                                                   @if ($errors->has('title'))
                                                   <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $errors->first('title') }}</strong>
                                                   </span>
                                                   @endif
                                                 </div>
                                                 <div class="form-group">
                                                   <input id="title" type="text" class="form-control{{ $errors->has('body') ? ' is-invalid' : '' }}" name="body" value="{{ old('body') }}" placeholder="Enter your body here.." required autofocus>
                                                   @if ($errors->has('body'))
                                                   <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $errors->first('body') }}</strong>
                                                   </span>
                                                   @endif
                                                 </div>
                                                 <div class="form-group">
                                                     <label for="country">icon</label>
                                                     <select class="custom-select d-block w-100" id="icon" name="icon" required>
                                                       <option value="">Choose...</option>
                                                       <option value="M336 64h-80c0-35.3-28.7-64-64-64s-64 28.7-64 64H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM96 424c-13.3 0-24-10.7-24-24s10.7-24 24-24 24 10.7 24 24-10.7 24-24 24zm0-96c-13.3 0-24-10.7-24-24s10.7-24 24-24 24 10.7 24 24-10.7 24-24 24zm0-96c-13.3 0-24-10.7-24-24s10.7-24 24-24 24 10.7 24 24-10.7 24-24 24zm96-192c13.3 0 24 10.7 24 24s-10.7 24-24 24-24-10.7-24-24 10.7-24 24-24zm128 368c0 4.4-3.6 8-8 8H168c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16zm0-96c0 4.4-3.6 8-8 8H168c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16zm0-96c0 4.4-3.6 8-8 8H168c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16z">Shipment Created</option>
                                                                  <option value="M624 352h-16V243.9c0-12.7-5.1-24.9-14.1-33.9L494 110.1c-9-9-21.2-14.1-33.9-14.1H416V48c0-26.5-21.5-48-48-48H112C85.5 0 64 21.5 64 48v48H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h272c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H40c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h208c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h208c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H64v128c0 53 43 96 96 96s96-43 96-96h128c0 53 43 96 96 96s96-43 96-96h48c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zM160 464c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm320 0c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm80-208H416V144h44.1l99.9 99.9V256z">Shipment In Transit KXPRESS</option>
                                                                  <option value="M336 64h-80c0-35.3-28.7-64-64-64s-64 28.7-64 64H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM96 424c-13.3 0-24-10.7-24-24s10.7-24 24-24 24 10.7 24 24-10.7 24-24 24zm0-96c-13.3 0-24-10.7-24-24s10.7-24 24-24 24 10.7 24 24-10.7 24-24 24zm0-96c-13.3 0-24-10.7-24-24s10.7-24 24-24 24 10.7 24 24-10.7 24-24 24zm96-192c13.3 0 24 10.7 24 24s-10.7 24-24 24-24-10.7-24-24 10.7-24 24-24zm128 368c0 4.4-3.6 8-8 8H168c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16zm0-96c0 4.4-3.6 8-8 8H168c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16zm0-96c0 4.4-3.6 8-8 8H168c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16z">Shipment Deliverd</option>
                                                     </select>
                                                     <div class="invalid-feedback">
                                                       Please select a valid country.
                                                     </div>
                                                   </div>
                                                 <button type="submit" class="button mid dark">Save<span class="primary">  Now!</span></button>

                                               </form>
                                          </div>

                                        </div>
                                      </div>
                                      <!-- /.card -->
                              </div>


                            </div>
                      </div>
                      </section><!-- #contact -->
                  </div>
              </div>
          </div>
      </div>
  </div>

      @elseif(checkPermission(['invaliduser']))




      @else
      I don't have any records!
    @endif
    @endauth


<!--

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!test
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection




@section ('footer')
 @endsection
