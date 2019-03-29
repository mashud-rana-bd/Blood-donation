@extends('Admin.master.master')


@section('content')

<input type="hidden" value="{{ URL::to('admin/show/all/slider_image') }}" id="show_all_image">
<input type="hidden" value="{{URL::to('admin/publiation/status')}}" id="publication_update">
<input type="hidden" value="{{ URL::to('admin/edite/slider') }}" id="edite_slider_image">
<input type="hidden" value="{{ URL::to('admin/slider/image/update') }}" id="slider_image_update_url">
<input type="hidden" value="" id="edite_hidden_id">
<input type="hidden" value="{{ URL::to('admin/slider/image/delete') }}" id="slider_image_delete_url">

{{-- Edite modal --}}
<div class="modal fade" id="edite_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edite Slider Image</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	<div class="col-sm-12">
        {{Form::open(['route'=>'send_slider', 'id'=>'slider_image_update_form', 'method' =>'POST','class'=>'Form-homizontal', 'files' => true])}}
        		<div class="form-group">
        		    <label for="exampleFormControlFile1">Example file input</label>
        		    <input type="file" id="update_image" accept="image/jpeg" class="form-control-file" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
        		    <img src="" id="blah" class="pull-right edite_image_show img-responsive" style="border: 1px solid black;width: 130px;height: 128px; margin-top: -54px;" alt="No image Found">
        		    <span class="text-danger">This file image only image extnsion is jpeg <br> Slider Image Size 1920*800</span> <br>
        		    Publication Status: Published &nbsp;<input type="radio"   id="publicationtrueupdate" value="1" name="publication_status">Unpublished&nbsp;<input id="publicationfalseupdate"  type="radio" value="0" name="publication_status">
        		  </div>
		        <input type="submit" class="btn btn-warning btn-block" value="Update Slider Image">
		        
        {{Form::close()}}
        	</div>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>




{{-- End Modal --}}






<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Slider Image</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	<div class="col-sm-12">
        {{Form::open(['route'=>'send_slider', 'id'=>'slider_image_form', 'method' =>'POST','class'=>'Form-homizontal', 'files' => true])}}
        		<div class="form-group">
        		    <label for="exampleFormControlFile1">Input Slider Image</label>
        		    <input required type="file" accept="image/jpeg" class="form-control-file" id="image" name="slider_image">
        		    <span class="text-danger">This file image only image extnsion is jpeg <br> Slider Image Size 1920*800</span> <br>
        		    Publication Status: Published &nbsp;<input type="radio" checked="" id="publicationtrue" value="1" name="publication_status">Unpublished&nbsp;<input id="publicationfalse" type="radio" value="0" name="publication_status">
        		  </div>
		        <input type="submit" class="btn btn-warning btn-block addcategorybtn" value="Save Slider Image">
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
	                    <h4>Slider Image Table</h4>
	                </div>
	            </div>
	            <div class="panel-body">
	                <div class="table-responsive">
	                    <button title="Add Slider Image" data-toggle="modal" data-target="#myModal" type="button" class="btn btn-info btn-rounded pull-right add_btn">Add Slider Image</button>

	                    <table id="example1" class="footable table table-bordered toggle-arrow-tiny" data-page-size="8" data-filter=#filter>
	                        <thead>
	                            <tr>
	                                <th>SL.</th>
	                                <th>Image</th>
	                                <th>Publication Status</th>
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


$('#slider_image_form').on('submit',function(event){
	event.preventDefault();

		var sliderimage=$('#slider_image').val();
		var truepubliction=$('#publicationtrue:checked').val();
		var falsepubliction=$('#publicationfalse:checked').val();
		// image object
		var formData = new FormData();
        var image  = $("#image")[0].files[0];
        formData.append('image', image);
        formData.append('truepubliction', truepubliction);
        formData.append('falsepubliction', falsepubliction);
		if(sliderimage==''){
			swal("Image Can't be Empty",'','error',{
				timer:2000
			});
		}else if((truepubliction=="") || (falsepubliction=="")){
			swal("Publication Status can't be Empty",'','error',{
				timer:2000
			});
		}else{

		$.ajax({
			url:"{{ route('send_slider') }}",
			type:"POST",
			processData: false,
      		contentType: false,
			cache: false,
			data:formData,
			dataType:"json",
			success:function(data){
				swal(data,'','success',{
					timer:2000
				});
				$('#tabelbody').empty();
				return showtable();
			},
			error:function(data){
				swal("something is worng",'','error',{
					timer:2000
				});
			}
		});
	}
});


function showtable(){
	var url=$('#show_all_image').val();
	$.get(url,function(data){
		var i=1;
		data.forEach(function(value){
			var tr=$("<tr/>");
				tr.append($("<td/>",{
					text:i++
				})).append($("<td/>",{
					html: `<img class="" style="width:80px;height:50px;text-align:center;" src="Sliderimage/${value.slider_image}" alt="">`
				})).append($("<td/>",{
					text:(value.publication==1)?'Published':'Unpublished'
				})).append($("<td/>",{
					html:
					`
					<button type="button" title="Publication button" class="btn btn-primary btn-xs btn-rounded" data-id="`+value.id+`" id="publicationid"><i class="fa fa-bolt fa-spin"></i></button>

					<button type="button" title="Edite button" data-toggle="modal" data-target="#edite_modal" class="btn btn-success btn-xs btn-rounded" data-id="`+value.id+`" id="edite_slider_image"><i class="fa fa-pencil-square-o fa-spin"></i></button>

					<button type="button" title="Delete Slider Image"  class="btn btn-danger btn-xs btn-rounded" data-id="`+value.id+`" id="delete_slider_image"><i class="fa fa-trash fa-spin"></i></button>
					`
				}))
			$('#tabelbody').append(tr);
		});
	});
}
window.onload=showtable();

$('#tabelbody').delegate('#publicationid', 'click', function(event) {
	event.preventDefault();
	var id=$(this).data('id');
	var url=$('#publication_update').val();
	var mainurl=(url+"/"+id);
	// console.log(mainurl);

	swal({
	  title: "Are you sure?",
	  text: "Update Publication Status",
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
	    	},
	    	dataType:"json",
	    	success:function(data){
	    		swal(data,'','success',{
	    			timer:2000
	    		});
	    		$('#tabelbody').empty();
	    		return showtable();
	    	},
	    	error:function(data){
	    		swal('Something Error','','error',{
	    			timer:2000
	    		})
	    	}
	    });

	  } else {

	  }
	});
});


$('#tabelbody').delegate('#edite_slider_image', 'click', function(event) {
	event.preventDefault();
	var id=$(this).data('id');
	var url=$('#edite_slider_image').val();
	var mainurl=(url+"/"+id);
	$.get(mainurl,function(data){
		$('.edite_image_show').attr('src','Sliderimage/'+data.slider_image);
		// alert(data.publication);
		if(data.publication==1){
			// $('#publicationtrueupdate').is(":checked");
			$('input[name=publication_status]:checked').val();
		}else{
			$('input[name=publication_status]:checked').val();
			// $('#publicationfalseupdate').is(":checked");
		}
	});

});
</script>

<script>
	
	$('#tabelbody').delegate('#edite_slider_image', 'click', function(event) {
			var update_id=$(this).data('id');
			var edite_hidden_id=$('#edite_hidden_id').val(update_id);
			// console.log(update_id);
	});	
		$('#slider_image_update_form').on('submit',function(event){
			event.preventDefault();
			// var update_image=$('#update_image').val();
			// console.log('send id');
			var url=$('#slider_image_update_url').val();
			var id=$('#edite_hidden_id').val();
			var mainurl=(url+"/"+id);
			
			// image object
			var formDataupdate = new FormData();
		    var image  = $("#update_image")[0].files[0];
		    formDataupdate.append('image', image);
		    formDataupdate.append('id', id);

			$.ajax({
				url:mainurl,
				type:"POST",
				processData: false,
		  		contentType: false,
				cache: false,
				data:formDataupdate,
				dataType:"json",
				success:function(data){
					swal(data,'','success',{
						timer:2000
					});
					$('#tabelbody').empty();
					return showtable();
				},
				error:function(data){
					swal("something is worng",'','error',{
						timer:2000
					});
				}
			});
		});

$('#tabelbody').delegate('#delete_slider_image', 'click', function(event) {
	event.preventDefault();
	var id=$(this).data('id');
	var url=$('#slider_image_delete_url').val();
	var mainurl=(url+'/'+id);

	swal({
	  title: "Are you sure?",
	  text: "Do you want to delete this slider image",
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
	    			timer:2000
	    		});
	    		$('#tabelbody').empty();
	    		return showtable();
	    	},
	    	error:function(data){
	    		swal('Something Error','','error',{
	    			timer:2000
	    		});
	    	}
	    });
	  } else {
	  }
	});	
});	
	
</script>
@endsection