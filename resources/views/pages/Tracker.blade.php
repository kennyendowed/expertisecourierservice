@extends('layouts.site')

@section('title') Track - Order @endsection

@section('content')


<br><br>
<!--==========================
  Contact Section
============================-->
<section id="contact" class="section-bg wow fadeInUp">

  <div class="container">
    <div class="row">
      <div class="col-md-6 mb-5">
        <div class="card mt-4">
                <!-- <img class="card-img-top img-fluid" src="http://placehold.it/900x400" alt=""> -->
                <div class="card-body">
                  <h2 class="card-title">Track A Package</h2>
                    <hr>


                      <div class="form">
                  <form id="myForm">
                      <span class="input-group-addon" style="color: white; background-color: rgb(124,77,255);">Enter Track Code</span>
                  <input type="text" autocomplete="off" id="search" class="form-control input-lg" placeholder="Enter Blog Title Here">
              <input type="submit" value="Send Message" class="btn btn-primary btn-submit" data-loading-text="Sending...">
                      </form>
                    </div>

                  </div>
                </div>
                <!-- /.card -->
        </div>

        <div class="col-md-6 mb-5">
          <div class="card mt-4">
                  <!-- <img class="card-img-top img-fluid" src="http://placehold.it/900x400" alt=""> -->
                  <div class="card-body">
                    <h2 class="card-title">Track A Package</h2>
                      <hr>
                      <!-- search box container ends  -->
<div id="txtHint" class="title-color" style="padding-top:50px; text-align:center;" ><b>Package information will be listed here...</b></div>





                    </div>
                  </div>
                  <!-- /.card -->
          </div>
      </div>
</div>
</section><!-- #contact -->


@endsection



@section ('footer')

<script src="http://code.jquery.com/jquery-3.3.1.min.js"
             integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
             crossorigin="anonymous">
    </script>



    <script>

    $.ajaxSetup({

       headers: {

           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

       }

   });



   $(".btn-submit").click(function(e){

       e.preventDefault();
       var str=  $("#search").val();
       if(str == "") {
               $( "#txtHint" ).html("<b>Package information will be listed here...</b>");
       }else {
           $.ajax({

          type:'GET',

          url:"{{ url('track?id=') }}"+str,

          data:{str:str},

          success:function(data){
 $( "#txtHint" ).html( data );

          }

       });

}

 });



       // jQuery(document).ready(function(){
       //    jQuery('#ajaxSubmit').click(function(e){
       //       e.preventDefault();
       //       $.ajaxSetup({
       //          headers: {
       //              'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
       //          }
       //      });
       //       jQuery.ajax({
       //          url: "{{ url('/grocery/post') }}",
       //          method: 'post',
       //          data: {
       //             name: jQuery('#name').val(),
       //             type: jQuery('#type').val(),
       //             price: jQuery('#price').val()
       //          },
       //          success: function(result){
       //             jQuery('.alert').show();
       //             jQuery('.alert').html(result.success);
       //          }});
       //       });
       //    });
    </script>
@endsection
