@extends('layouts.site')

@section('title') Verfiy User @endsection
  @section('content')

  <link rel="stylesheet"
  	href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">

   <main id="main">

     <section id="intro" class="section-with-bg wow fadeInUp">  <br /><br /><br /><br />
       <div class="container">

         <div class="col-lg-10 col-lg-offset-2">
                         @if (session('status'))

                                       <div class="alert alert-success">
                                           {{ session('status') }}
                                       </div>
                                   @endif
                                   @if (count($errors) > 0)
                                       @foreach ($errors->all() as $error)

                                           <div class="alert alert-danger">{{ $error }}</div>

                                       @endforeach

                                   @endif


                         </div>
         <!-- <div  id="myModal" class="modal fade" role="dialog">
           <div class="modal-dialog"> -->
             <!-- Modal content-->
             <!-- <div class="modal-content">
               <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h4 class="modal-title"> Show up</h4>

               </div>
               <div class="modal-body">
                 <form class="form-horizontal" role="form">
                   <div class="form-group">
                     <label class="control-label col-sm-2" for="id">ID</label>
                     <div class="col-sm-10">
                       <input type="text" class="form-control" id="fid" disabled>
                     </div>
                   </div>
                   <div class="form-group">
                     <label class="control-label col-sm-2" for="fname">First Name</label>
                     <div class="col-sm-10">
                       <input type="name" class="form-control" id="fname">
                     </div>
                   </div>
                   <p class="fname_error error text-center alert alert-danger hidden"></p>
                   <div class="form-group">
                     <label class="control-label col-sm-2" for="lname">Last Name:</label>
                     <div class="col-sm-10">
                       <input type="name" class="form-control" id="lname">
                     </div>
                   </div>
                   <p class="lname_error error text-center alert alert-danger hidden"></p>
                   <div class="form-group">
                     <label class="control-label col-sm-2" for="email">Email</label>
                     <div class="col-sm-10">
                       <input type="email" class="form-control" id="email">
                     </div>
                   </div>
                   <p class="email_error error text-center alert alert-danger hidden"></p>
                   <div class="form-group">
                     <label class="control-label col-sm-2" for="gender">Gender</label>
                     <div class="col-sm-10">
                       <select class="form-control" id="gender" name="gender">
                         <option value="" disabled selected>Choose your option</option>
                         <option value="Male">Male</option>
                         <option value="Female">Female</option>
                       </select>
                     </div>
                   </div>
                   <div class="form-group">
                     <label class="control-label col-sm-2" for="country">Country:</label>
                     <div class="col-sm-10">
                       <input type="name" class="form-control" id="country">
                     </div>
                   </div>
                   <p
                     class="country_error error text-center alert alert-danger hidden"></p>
                   <div class="form-group">
                     <label class="control-label col-sm-2" for="salary">Salary </label>
                     <div class="col-sm-10">
                       <input type="name" class="form-control" id="salary">
                     </div>
                   </div>
                   <p
                     class="salary_error error text-center alert alert-danger hidden"></p>
                 </form>
                 <div class="deleteContent">
                   Are you Sure you want to delete <span class="dname"></span> ? <span
                     class="hidden did"></span>
                 </div>
                 <div class="modal-footer">
                   <button type="button" class="btn actionBtn" data-dismiss="modal">
                     <span id="footer_action_button" class='glyphicon'> </span>
                   </button>
                   <button type="button" class="btn btn-warning" data-dismiss="modal">
                     <span class='glyphicon glyphicon-remove'></span> Close
                   </button>
                 </div>
               </div>
             </div> -->
           <!-- </div>
         </div> -->
         <div class="section-header">
           <h2>Buy Tickets</h2>
           <p>Velit consequatur consequatur inventore iste fugit unde omnis eum aut.</p>
         </div>

         <div class="row">
           <div class="col-lg-12">
             <div class="card mb-5 mb-lg-0">
     <table id="example" class="table table-striped table-bordered" style="width:100%">
       <thead>
       					<tr>
       						<th class="text-center">#</th>
       						<th class="text-center">Package id</th>
       						<th class="text-center">Title</th>
       						<th class="text-center">Location</th>
                  <th class="text-center">Action</th>
       					</tr>
       				</thead>
            </thead>
          @foreach($posts as $ite)
  <?php  //var_dump($ite);  ?>

                            <tr class="item{{$ite->id}}">
                              <td>{{$ite->id}}</td>
                              <td>{{$ite->product_id}}</td>
                              <td>{{$ite->title}}</td>
                              <td>{{$ite->body}}</td>
                            <td><a href ='activate/{{$ite->product_id}}'>Activate</a> || <a href ='deletefile/{{$ite->product_id}}'>Delete</a></td>
                            </tr>


         @endforeach
         </table>
       </div>
     </div>



       </div><!-- /.modal -->

       <br /><br /><br />
       <br />
 </section>
    </main>

 @endsection




 @section ('footer')
 <script src="//code.jquery.com/jquery-1.12.3.js"></script>
   <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
   <script
    src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

<script>

    $(document).on('click', '.edit-modal', function() {
        $('#footer_action_button').text(" Update");
        $('#footer_action_button').addClass('glyphicon-check');
        $('#footer_action_button').removeClass('glyphicon-trash');
        $('.actionBtn').addClass('btn-success');
        $('.actionBtn').removeClass('btn-danger');
        $('.actionBtn').removeClass('delete');
        $('.actionBtn').addClass('edit');
        $('.modal-title').text('Edit');
        $('.deleteContent').hide();
        $('.form-horizontal').show();
        var stuff = $(this).data('info').split(',');
        fillmodalData(stuff)
        $('#myModal').modal('show');
    });
    $(document).on('click', '.delete-modal', function() {
        $('#footer_action_button').text(" Delete");
        $('#footer_action_button').removeClass('glyphicon-check');
        $('#footer_action_button').addClass('glyphicon-trash');
        $('.actionBtn').removeClass('btn-success');
        $('.actionBtn').addClass('btn-danger');
        $('.actionBtn').removeClass('edit');
        $('.actionBtn').addClass('delete');
        $('.modal-title').text('Delete');
        $('.deleteContent').show();
        $('.form-horizontal').hide();
        var stuff = $(this).data('info').split(',');
        $('.did').text(stuff[0]);
        $('.dname').html(stuff[1] +" "+stuff[2]);
        $('#myModal').modal('show');
    });

function fillmodalData(details){
    $('#fid').val(details[0]);
    $('#fname').val(details[1]);
    $('#lname').val(details[2]);
    $('#email').val(details[3]);
    $('#gender').val(details[4]);
    $('#country').val(details[5]);
    $('#salary').val(details[6]);
}

    $('.modal-footer').on('click', '.edit', function() {
        $.ajax({
            type: 'post',
            url: '/editItem',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $("#fid").val(),
                'fname': $('#fname').val(),
                'lname': $('#lname').val(),
                'email': $('#email').val(),
                'gender': $('#gender').val(),
                'country': $('#country').val(),
                'salary': $('#salary').val()
            },
            success: function(data) {
            	if (data.errors){
                	$('#myModal').modal('show');
                    if(data.errors.fname) {
                    	$('.fname_error').removeClass('hidden');
                        $('.fname_error').text("First name can't be empty !");
                    }
                    if(data.errors.lname) {
                    	$('.lname_error').removeClass('hidden');
                        $('.lname_error').text("Last name can't be empty !");
                    }
                    if(data.errors.email) {
                    	$('.email_error').removeClass('hidden');
                        $('.email_error').text("Email must be a valid one !");
                    }
                    if(data.errors.country) {
                    	$('.country_error').removeClass('hidden');
                        $('.country_error').text("Country must be a valid one !");
                    }
                    if(data.errors.salary) {
                    	$('.salary_error').removeClass('hidden');
                        $('.salary_error').text("Salary must be a valid format ! (ex: #.##)");
                    }
                }
            	 else {

                     $('.error').addClass('hidden');
                $('.item' + data.id).replaceWith("<tr class='item" + data.id + "'><td>" +
                        data.id + "</td><td>" + data.first_name +
                        "</td><td>" + data.last_name + "</td><td>" + data.email + "</td><td>" +
                         data.gender + "</td><td>" + data.country + "</td><td>" + data.salary +
                          "</td><td><button class='edit-modal btn btn-info' data-info='" + data.id+","+data.first_name+","+data.last_name+","+data.email+","+data.gender+","+data.country+","+data.salary+"'><span class='glyphicon glyphicon-edit'></span> Edit</button> <button class='delete-modal btn btn-danger' data-info='" + data.id+","+data.first_name+","+data.last_name+","+data.email+","+data.gender+","+data.country+","+data.salary+"' ><span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr>");

            	 }}
        });
    });
    $('.modal-footer').on('click', '.delete', function() {
        $.ajax({
            type: 'post',
            url: '/deleteItem',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $('.did').text()
            },
            success: function(data) {
                $('.item' + $('.did').text()).remove();
            }
        });
    });
</script>
 @endsection
