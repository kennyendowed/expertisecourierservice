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

                      You are logged in!test
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
