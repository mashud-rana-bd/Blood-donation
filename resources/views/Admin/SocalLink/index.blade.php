@extends('Admin.master.master')


@section('content')

<input type="hidden" value="{{ URL::to('admin/show/socal/link/all') }}" id="show_all_socal_link">
<input type="hidden" value="{{ URL::to('admin/single/link/show') }}" id="show_single_id">
<input type="hidden" value="" id="edite_single_id">
<input type="hidden" value="{{ URL::to('admin/single/update-link') }}" id="update_edite_link">

{{-- edite modal strat --}}
<div class="modal fade" id="edite_form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edite Socal Link</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	<div class="col-sm-12">
        {{Form::open(['id'=>'edite_socal_link', 'method' =>'POST','class'=>'Form-homizontal', 'files' => true])}}
        		<div class="form-group">
        		    <label for="exampleFormControlFile1">Facebook</label>
        		    <input required type="text" class="form-control" id="facebook_edite" name="facebook_link">

        		    <label for="exampleFormControlFile1">Twitter</label>
        		    <input required type="text" class="form-control" id="twitter_edite" name="twitter_link">

        		    <label for="exampleFormControlFile1">Google Plus</label>
        		    <input required type="text" class="form-control" id="google_edite" name="google_link">

        		    <label for="exampleFormControlFile1">In</label>
        		    <input required type="text" class="form-control" id="in_edite" name="in_link">
        		  </div>
		        <input type="submit" class="btn btn-warning btn-block addcategorybtn" value="Update Socal Link">
        {{Form::close()}}
        	</div>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

{{-- edite modal end --}}
{{-- add modal start --}}

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Socal Link</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	<div class="col-sm-12">
        {{Form::open(['id'=>'send_socal_link', 'method' =>'POST','class'=>'Form-homizontal', 'files' => true])}}
        		<div class="form-group">
        		    <label for="exampleFormControlFile1">Facebook</label>
        		    <input required type="text" class="form-control" id="facebook" name="facebook_link">

        		    <label for="exampleFormControlFile1">Twitter</label>
        		    <input required type="text" class="form-control" id="twitter" name="twitter_link">

        		    <label for="exampleFormControlFile1">Google Plus</label>
        		    <input required type="text" class="form-control" id="google" name="google_link">

        		    <label for="exampleFormControlFile1">In</label>
        		    <input required type="text" class="form-control" id="in" name="in_link">
        		  </div>
		        <input type="submit" class="btn btn-warning btn-block addcategorybtn" value="Save Socal Link">
        {{Form::close()}}
        	</div>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>



	<div class="row">
	    <div class="col-sm-12">
	        <div class="panel panel-bd lobidrag">
	            <div class="panel-heading">
	                <div class="panel-title">
	                    <h4>Socal link Table</h4>
	                </div>
	            </div>
	            <div class="panel-body">
	                <div class="table-responsive">
	                    {{-- <button title="Add Slider Image" data-toggle="modal" data-target="#myModal" type="button" class="btn btn-info btn-rounded pull-right add_btn">Add Socal links</button> --}}

	                    <table id="example1" class="footable table table-bordered toggle-arrow-tiny" data-page-size="8" data-filter=#filter>
	                        <thead  class="text-center">
	                            <tr>
	                                <th>SL.</th>
	                                <th>Facebook</th>
	                                <th>Twitter</th>
	                                <th>Google</th>
	                                <th>In</th>
	                                <th>Action</th>
	                            </tr>
	                        </thead>
	                        <tbody id="tabelbody">
	                           
	                        </tbody>
	                        <tfoot>
	                            <tr>
	                                <td colspan="6">
	                                    <ul class="pagination pull-left">
	                                    </ul>
	                                </td>
	                            </tr>
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

$('#send_socal_link').on('submit',function(event){
	event.preventDefault();
	var facebook=$('#facebook').val();
	var twitter=$('#twitter').val();
	var google=$('#google').val();
	var in_link=$('#in').val();

	var formdata= new FormData();
	formdata.append('facebook',facebook);
	formdata.append('twitter',twitter);
	formdata.append('google',google);
	formdata.append('in_link',in_link);


	$.ajax({
		url:"{{ route('socal_link_store') }}",
		type:"POST",
		data:formdata,
		dataType:"json",
		processData: false,
		cache: false,
		contentType: false,
		success:function(data){
			swal(data,'','success',{
				timer:2000
			});
		 $('#facebook').val('');
		 $('#twitter').val('');
		 $('#google').val('');
		 $('#in').val('');
		},
		error:function(data){
			swal('Something error','','error',{
				timer:2000
			});
		}
	});

});	

function refresh(){
	var url=$('#show_all_socal_link').val();
	$.get(url,function(data){
		var i=1;
		data.forEach(function(value){
			var tr=$("<tr/>");
				tr.append($("<td/>",{
					text:i++
				})).append($('<td/>',{
					text:value.facebook
				})).append($("<td/>",{
					text:value.twitter
				})).append($("<td/>",{
					text:value.google
				})).append($("<td/>",{
					text:value.in
				})).append($("<td/>",{
					html:
					`
						<button type="button" data-toggle="modal"  data-target="#edite_form" title="Edite button" class="btn btn-primary btn-xs btn-rounded" data-id="`+value.id+`" id="edite_socal_link"><i class="fa fa-pencil-square-o fa-spin"></i></button>
					`
				}));
				$('#tabelbody').append(tr);
		});
	});
}
window.onload=refresh();




$('#tabelbody').delegate('#edite_socal_link', 'click', function(event) {
	event.preventDefault();
	var id=$(this).data('id');
	$('#edite_single_id').val(id);
	var url=$('#show_single_id').val();
	var mainurl=(url+"/"+id);
	$.get(mainurl,function(data){
		$('#facebook_edite').val(data.facebook);
		$('#twitter_edite').val(data.twitter);
		$('#google_edite').val(data.google);
		$('#in_edite').val(data.in);
	});
});


$('#edite_socal_link').on('submit',function(event){
	event.preventDefault();
	var facebook=$('#facebook_edite').val();
	var twitter=$('#twitter_edite').val();
	var google=$('#google_edite').val();
	var in_link=$('#in_edite').val();
	var id=$('#edite_single_id').val();
	var url=$('#update_edite_link').val();
	var mainurl=(url+"/"+id);

	var formdata=new FormData();
	formdata.append('facebook',facebook);
	formdata.append('twitter',twitter);
	formdata.append('google',google);
	formdata.append('in_link',in_link);
	formdata.append('id',id);

	$.ajax({
		url:mainurl,
		type:"POST",
		data:formdata,
		dataType:"json",
		processData: false,
		cache: false,
		contentType: false,
		success:function(data){
			swal(data,'','success',{
				timer:2000
			});
		 $('#facebook_edite').val('');
		 $('#twitter_edite').val('');
		 $('#google_edite').val('');
		 $('#in_edite').val('');
		 $('#tabelbody').empty();
		 return refresh();
		},
		error:function(data){
			swal('Something error','','error',{
				timer:2000
			});
		}
	});



});





</script>





@endsection