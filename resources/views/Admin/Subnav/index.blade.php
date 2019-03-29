@extends('Admin.master.master')

@section('content')

<input type="hidden" value="{{ URL::to('admin/get/all/sub-menu') }}" id="show_all_submenu">
<input type="hidden" value="{{ URL::to('admin/show/single/sub-menu') }}" id="show_single_submenu">
<input type="hidden" value="" id="edite_id">
<input type="hidden" value="{{ URL::to('admin/sub/menu/update') }}" id="update_sub_menu">
<input type="hidden" value="{{ URL::to('admin/sub/menue/delete') }}" id="delete_sub_menue">

{{-- Edite Modal --}}

<div class="modal fade" id="editesubmenu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edite Sub Menu</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	<div class="col-sm-12">
        {{Form::open(['id'=>'edite_sub_menu_form', 'method' =>'POST','class'=>'Form-homizontal', 'files' => true])}}
        		<div class="form-group">
        		    <label for="exampleFormControlFile1">Sub Menu Name</label>
        		    <input required type="text" class="form-control" id="sub_menu_edite" name="sub_menu_name">
					<label for="exampleFormControlFile1">Select Main menu</label>
        		    <select class="form-control" name="main_menu_id" id="edite_main_menu_id">
        		    	@foreach ($mainmenus as $mainmenu)
        		    		<option value="{{ $mainmenu->id }}">{{ $mainmenu->menu_name }}</option>
        		    	@endforeach
        		    </select>

        		  </div>
		        <input type="submit" class="btn btn-warning btn-block addcategorybtn" value="Update Sub Menu">
        {{Form::close()}}
        	</div>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>



{{-- Add submenu --}}

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Sub Menu</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	<div class="col-sm-12">
        {{Form::open(['id'=>'send_sub_menu_form', 'method' =>'POST','class'=>'Form-homizontal', 'files' => true])}}
        		<div class="form-group">
        		    <label for="exampleFormControlFile1">Sub Menu Name</label>
        		    <input required type="text" class="form-control" id="sub_menu_name" name="sub_menu_name">
					<label for="exampleFormControlFile1">Select Main menu</label>
        		    <select class="form-control" name="main_menu_id" id="main_menu_id">
        		    	@foreach ($mainmenus as $mainmenu)
        		    		<option value="{{ $mainmenu->id }}">{{ $mainmenu->menu_name }}</option>
        		    	@endforeach
        		    </select>

        		  </div>
		        <input type="submit" class="btn btn-warning btn-block addcategorybtn" value="Save Sub Menu">
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
	                    <h4>Sun menu Table</h4>
	                </div>
	            </div>
	            <div class="panel-body">
	                <div class="table-responsive">
	                    <button title="Add Slider Image" data-toggle="modal" data-target="#myModal" type="button" class="btn btn-info btn-rounded pull-right add_btn">Add Sub menu</button>

	                    <table id="example1" class="footable table table-bordered toggle-arrow-tiny" data-page-size="8" data-filter=#filter>
	                        <thead>
	                            <tr>
	                                <th>SL.</th>
	                                <th>Sub menu</th>
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

$('#send_sub_menu_form').on('submit',function(event){
	event.preventDefault();
	var sub_menu_name=$('#sub_menu_name').val();
	var main_menu_id=$('#main_menu_id').val();
	var formdata=new FormData();
	formdata.append('sub_menu_name',sub_menu_name);
	formdata.append('main_menu_id',main_menu_id);

	$.ajax({
		url:"{{ route('sub_menu_fomr_store') }}",
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
			$('#tabelbody').empty();
			return fresh();
		},
		error:function(data){
			swal('Something Error',{
				timer:2000
			});
		}
	});

});

function fresh(){

	var url=$('#show_all_submenu').val();

	$.get(url,function(data){
		var i=1;
		data.forEach(function(value){
			var tr=$("<tr/>");
				tr.append($("<td/>",{
					text:i++
				})).append($("<td/>",{
					text:value.sub_nav
				})).append($("<td/>",{
					html:`
						<button type="button" title="Edite button" data-toggle="modal" data-target="#editesubmenu" class="btn btn-success btn-xs btn-rounded" data-id="`+value.id+`" id="edite_submenu"><i class="fa fa-pencil-square-o fa-spin"></i></button>

						<button type="button" title="Delete sub menu"  class="btn btn-danger btn-xs btn-rounded" data-id="`+value.id+`" id="delete_sub_menu"><i class="fa fa-trash fa-spin"></i></button>
					`
				}));

				$('#tabelbody').append(tr);

		});

	});
};
window.onload=fresh();


$('#tabelbody').delegate('#edite_submenu', 'click', function(event) {
	event.preventDefault();
	var id=$(this).data('id');
	$('#edite_id').val(id);
	var url=$('#show_single_submenu').val();
	var mainurl=(url+"/"+id);
	$.get(mainurl,function(data){
		$('#sub_menu_edite').val(data.sub_nav);
		$('#edite_main_menu_id').val(data.menu_id);
	});	
});


$('#edite_sub_menu_form').on('submit',function(event){
	event.preventDefault();
	var id=$('#edite_id').val();
	var url=$('#update_sub_menu').val();
	var mainurl=(url+"/"+id);
	var update_name=$('#sub_menu_edite').val();
	var main_menu_id=$('#edite_main_menu_id').val();

	var formdata=new FormData();
	formdata.append('update_name',update_name);
	formdata.append('main_menu_id',main_menu_id);
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
			$('#tabelbody').empty();
			return fresh();
		},
		error:function(data){
			swal('Something Error',{
				timer:2000
			});
		}
	});

});


$('#tabelbody').delegate('#delete_sub_menu', 'click', function(event) {
	event.preventDefault();
	var id=$(this).data('id');
	var url=$('#delete_sub_menue').val();
	var mainurl=(url+"/"+id);
	
	swal({
	  title: "Are you sure delete this item?",
	  text: "",
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
	    		id
	    	},
	    	dataType:"json",
	    	processData: false,
	    	cache: false,
	    	contentType: false,
	    	success:function(data){
	    		swal(data,'','success',{
	    			timer:2000
	    		});
	    		$('#tabelbody').empty();
	    		return fresh();
	    	},
	    	error:function(data){
	    		swal('Something Error',{
	    			timer:2000
	    		});
	    	}
	    });
	  }
	});


	
});







	
</script>




@endsection