@extends('Admin.master.master')


@section('content')


<input type="hidden" value="{{ URL::to('admin/show/all/blood/donation') }}" id="showAllBlood">
<input type="hidden" value="{{ URL::to('admin/show/publication/updata') }}" id="publication_update">
<input type="hidden" value="{{ URL::to('admin/show/single/blood/item') }}" id="show_single_blood">
<input type="hidden" value="" id="hidden_id">
<input type="hidden" value="{{ URL::to('admin/update/info/in-blood-donation') }}" id="update_info_blood">
<input type="hidden" value="{{ URL::to('admin/delete/information/blood') }}" id="delete_id">

{{-- Edite model start --}}

<div class="modal fade md-effect-13 bs-example-modal-lg right" id="edite_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Blood Donation Edite</h4>
        </div>
        <div class="modal-body">
          <div class="row">
                {{Form::open(['id'=>'blood_donation_edite_form','method' =>'POST','class'=>'Form-homizontal', 'files' => true])}}
                    <div class="col-md-6">
                        <label for="exampleFormControlFile1">Name</label>
                        <input required type="text" class="form-control" id="user_name_edite" name="name">
                    </div>
                    <div class="col-md-6">
                        <div class="single-link">
                            <label for="exampleFormControlFile1">Address</label>
                        <input required type="text" class="form-control" id="address_edite" name="address">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="single-link">
                            <label for="exampleFormControlFile1">Contact Number</label>
                            <input  required type="number" onKeyPress="if(this.value.length==11) return false;" class="form-control" id="contactNumber_edite" name="contactNumber">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="single-link">
                            <label for="exampleFormControlFile1">Email Address</label>
                            <input required type="email" class="form-control" id="email_edite" name="email">
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="single-link">
                            <label for="exampleFormControlFile1">Home District</label>
                            <input required type="text" class="form-control" id="home_district_edite" name="home_district">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="single-link">
                            <label for="exampleFormControlFile1">About You</label>
                            <textarea class="form-control" name="about" id="about_edite" cols="10" rows="10"></textarea>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="single-link">
                            <label for="exampleFormControlFile1">Image</label>
                            <input onchange="loadFile(event)" type="file" id="image_doner_edite" name="image_edite" class="form-control">
                        </div>
                    </div>

                    <img src="" alt="No Image Fond" width="50px" height="60px" id="blah" style="border: 1px;">
                    <div class="col-md-6">
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-12">
                            <div class="submin-btn" style="margin-top: 16px;">
                               <button type="submit" class="btn btn-info btn-block fa fa-paper-plane">&nbsp;Update Donnar Information</button>
                            </div>
                        </div>
                    </div>

                {{ Form::close() }}
          </div>
        </div>
        <div class="modal-footer">
        </div>
    </div>
  </div>
</div>
{{-- Edite model end --}}

{{-- Add modal start --}}

<div class="modal fade md-effect-13 bs-example-modal-lg right" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Blood Donation Modal</h4>
        </div>
        <div class="modal-body">
          <div class="row">
	          	{{Form::open(['id'=>'blood_donation_form','method' =>'POST','class'=>'Form-homizontal', 'files' => true])}}
		          	<div class="col-md-6">
		          		<label for="exampleFormControlFile1">Name</label>
		          		<input required type="text" class="form-control" id="user_name" name="name">
		          	</div>
		          	<div class="col-md-6">
		          		<div class="single-link">
		          			<label for="exampleFormControlFile1">Address</label>
		          		<input required type="text" class="form-control" id="address" name="address">
		          		</div>
		          	</div>

		          	<div class="col-md-6">
		          		<div class="single-link">
		          			<label for="exampleFormControlFile1">Contact Number</label>
		          			<input  required type="number" onKeyPress="if(this.value.length==11) return false;" class="form-control" id="contactNumber" name="contactNumber">
		          		</div>
		          	</div>

		          	<div class="col-md-6">
		          		<div class="single-link">
		          			<label for="exampleFormControlFile1">Email Address</label>
		          			<input required type="email" class="form-control" id="email" name="email">
		          		</div>
		          	</div>


                    <div class="col-md-6">
                        <div class="single-link">
                            <label for="exampleFormControlFile1">Home District</label>
                            <input required type="text" class="form-control" id="home_district" name="home_district">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="single-link">
                            <label for="exampleFormControlFile1">About You</label>
                            <textarea class="form-control" name="about" id="about" cols="10" rows="10"></textarea>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="single-link">
                            <label for="exampleFormControlFile1">Image</label>
                            <input onchange="loadFile(event)" type="file" id="image_doner" name="image" class="form-control">
                        </div>
                    </div>

                    <img src="" alt="No Image Fond" width="50px" height="60px" id="blah" style="border: 1px;">
                    <div class="col-md-6">
                        <div class="single-link">
                            <label for="exampleFormControlFile1">Publication Status:</label>
                            Published &nbsp;<input type="radio" checked="" value="1" id="truePublication" name="publication_status">
                            Unpublished &nbsp;<input type="radio" value="0" id="falsePublication" name="publication_status">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-12">
                            <div class="submin-btn" style="margin-top: 16px;">
                               <button type="submit" class="btn btn-info btn-block fa fa-paper-plane">&nbsp;Save Donnar Information</button>
                            </div>
                        </div>
                    </div>

	          	{{ Form::close() }}
          </div>
        </div>
        <div class="modal-footer">
        </div>
    </div>
  </div>
</div>
{{-- Add modal end --}}

<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>Blood Dooner Table</h4>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <button title="Add Slider Image" data-toggle="modal" data-target="#myModal" type="button" class="btn btn-info btn-rounded pull-right add_btn">Add Blood Donner</button>
                    {{-- <button class="btn btn-base md-trigger m-b-5 m-r-2" data-modal="modal-13">3D Slit</button> --}}
                    <table id="example1" class="footable table table-bordered toggle-arrow-tiny" data-page-size="8" data-filter=#filter>
                        <thead>
                            <tr>
                                <th>SL.</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Contact Number</th>
                                <th>Email</th>
                                <th>Home District</th>
                                <th>About You</th>
                                <th>Image</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="tabelbody">
                           
                        </tbody>
                        <tfoot>
                            
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection


@section('script')


<script>

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var loadFile = function(event) {
        var output = document.getElementById('blah');
        output.src = URL.createObjectURL(event.target.files[0]);
      };

     $('#blood_donation_form').on('submit',function(event){
        event.preventDefault();
        var name=$('#user_name').val();
        var address=$('#address').val();
        var contactNumber=$('#contactNumber').val();
        var email=$('#email').val();
        var home_district=$('#home_district').val();
        var about=$('#about').val(); 
        var image_doner=$('#image_doner').val(); 
        var truePublication=$('#truePublication').val(); 
        var falsePublication=$('#falsePublication').val();
        var image  = $("#image_doner")[0].files[0];

        var formdata= new FormData();
        formdata.append('name',name);
        formdata.append('address',address);
        formdata.append('email',email);
        formdata.append('contactNumber',contactNumber);
        formdata.append('home_district',home_district);
        formdata.append('about',about);
        formdata.append('image',image);
        formdata.append('truePublication',truePublication);
        // formdata.append('falsePublicationthat',falsePublication);


        $.ajax({
            url:"{{ route('blood_donation_info') }}",
            type:"POST",
            processData: false,
            contentType: false,
            cache: false,
            data:formdata,
            dataType:"json",
            success:function(data){
                swal(data,'','success',{
                    timer:2000
                });
                $('#tabelbody').empty();
                return fresh();
            },
            error:function(data){
                swal('Something Proble','','error',{
                    timer:2000
                })
            }
        });
    });



function fresh(){

    var url=$('#showAllBlood').val();
    $.get(url,function(data){
        var i=1;
        data.forEach(function(value){
            var tr=$("<tr/>");
                tr.append($("<td/>",{
                    text:i++
                })).append($("<td/>",{
                    text:value.name
                })).append($("<td/>",{
                    text:value.address
                })).append($("<td/>",{
                    text:value.contactNumber
                })).append($("<td/>",{
                    text:value.email
                })).append($("<td/>",{
                    text:value.home_district
                })).append($("<td/>",{
                    text:value.about
                })).append($("<td/>",{
                    html:`<img class="" style="width:80px;height:50px;text-align:center;" src="BloodDonation/${value.image}" alt="">`
                })).append($("<td/>",{
                    html:(value.publication==1)?`<button title="Published" type="button" class="btn btn-info btn-circle m-rb-5"><i class="glyphicon glyphicon-ok"></i></button>`:`<button type="button" title="Unpublished" class="btn btn-warning btn-circle m-rb-5"><i class="glyphicon glyphicon-remove"></i></button>`
                })).append($("<td/>",{
                    html:`
                        <button type="button" title="Publication button" class="btn btn-primary btn-xs btn-rounded" data-id="`+value.id+`" id="publicationid"><i class="fa fa-bolt fa-spin"></i></button>

                        <button type="button" title="Edite button" data-toggle="modal" data-target="#edite_modal" class="btn btn-success btn-xs btn-rounded" data-id="`+value.id+`" id="edite_blood_donation"><i class="fa fa-pencil-square-o fa-spin"></i></button>

                        <button type="button" title="Delete Blood Donation"  class="btn btn-danger btn-xs btn-rounded" data-id="`+value.id+`" id="delete_blood_donation"><i class="fa fa-trash fa-spin"></i></button>
                    `
                }))
            $('#tabelbody').append(tr);
        });
    });
}
window.onload=fresh();


$('#tabelbody').delegate('#publicationid', 'click', function(event) {
    event.preventDefault();
    var id=$(this).data('id');
    var url=$('#publication_update').val();
    var mainurl=(url+"/"+id);
    // var formdata= new FormData();
    $.ajax({
        url:mainurl,
        type:"GET",
        data:{
            id:id
        },
        processData: false,
        contentType: false,
        cache: false,
        dataType:"json",
        success:function(data){
            swal(data,'','success',{
                timer:1000
            });
            $('#tabelbody').empty();
            return fresh();

        },
        error:function(data){
            swal('Something Problem','','error',{
                timer:2000
            });
        }

    })

});

$('#tabelbody').delegate('#edite_blood_donation', 'click', function(event) {
    event.preventDefault();
    var id=$(this).data('id');
    $('#hidden_id').val(id);
    var url=$('#show_single_blood').val();
    var mainurl=(url+"/"+id);
    $.get(mainurl,function(data){
       $('#user_name_edite').val(data.name);
       $('#address_edite').val(data.address);
       $('#contactNumber_edite').val(data.contactNumber);
       $('#email_edite').val(data.email);
        $('#home_district_edite').val(data.home_district);
       $('#about_edite').val(data.about); 
       $('#blah').attr('src',('BloodDonation')+'/'+data.image);
    });
});

$('#blood_donation_edite_form').on('submit',function(event){
    event.preventDefault();
    var name=$('#user_name_edite').val();
    var address=$('#address_edite').val();
    var contact=$('#contactNumber_edite').val();
    var email=$('#email_edite').val();
    var home_district= $('#home_district_edite').val();
    var  about= $('#about_edite').val();
    var image  = $("#image_doner_edite")[0].files[0];
    var id=$('#hidden_id').val();
    var url=$('#update_info_blood').val();
    var mainurl=(url+"/"+id);

    var formdata=new FormData();

    formdata.append('name',name);
    formdata.append('address',address);
    formdata.append('contact',contact);
    formdata.append('email',email);
    formdata.append('home_district',home_district);
    formdata.append('about',about);
    formdata.append('image',image);
    formdata.append('id',id);

    $.ajax({
        url:mainurl,
        type:"POST",
        processData: false,
        contentType: false,
        cache: false,
        data:formdata,
        dataType:"json",
        success:function(data){
            swal(data,'','success',{
                timer:2000
            });
            $('#user_name_edite').val('');
            $('#address_edite').val('');
            $('#contactNumber_edite').val('');
            $('#email_edite').val('');
            $('#home_district_edite').val('');
            $('#about_edite').val('');
            $('#tabelbody').empty();
            return fresh();
        },
        error:function(data){
            swal('Something Proble','','error',{
                timer:2000
            })
        }
    });



});

$('#tabelbody').delegate('#delete_blood_donation', 'click', function(event) {
    event.preventDefault();
    var id=$(this).data('id');
    var url=$('#delete_id').val();
    var mainurl=(url+"/"+id);


    swal({
      title: "Are you sure?",
      text: "Once deleted, you will not be able to recover this imaginary file!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        $.ajax({
            url:mainurl,
            type:"GET",
            data:{
                id:id
            },
            dataType:"json",
            success:function(data){
                swal(data,'','success',{
                    timer:1000
                });
                $('#tabelbody').empty();
                return fresh();
            },
            error:function(data){
                swal("Error Something",'','error',{
                    timer:1000
                })
            }
        });
      } 
    });

});

</script>


@endsection