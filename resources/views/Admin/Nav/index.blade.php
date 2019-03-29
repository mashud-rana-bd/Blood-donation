@extends('Admin.master.master')


@section('content')

<input type="hidden" value="{{ URL::to('admin/show/all/menue') }}" id="showallurl">
<input type="hidden" value="{{ URL::to('admin/menu/publication/update') }}" id="publication_update">
<input type="hidden" value="{{ URL::to('admin/menu/update/form/show') }}" id="edite_menu_url">
<input type="hidden" value="" id="hidden_id">
<input type="hidden" value="{{ URL::to('admin/update/menu/save') }}" id="update_main_menu">
<input type="hidden" value="{{ URL::to('admin/menu/delete') }}" id="delete_menu">

{{-- edite menu modal start --}}
<div class="modal fade" id="edite_menu_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Menu</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	<div class="col-sm-12">
        {{Form::open(['id'=>'main_menu_form_update', 'method' =>'POST','class'=>'Form-homizontal', 'files' => true])}}
        		<div class="form-group">
        		    <label for="exampleFormControlFile1">Menu Name</label>
        		    <input type="text" required="" class="form-control" id="main_menu_update">
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
{{-- edite menu modal end --}}

{{-- Add menu modal start --}}

<!-- Modal -->
<div class="modal fade" id="Add_Menu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Menu</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	<div class="col-sm-12">
        {{Form::open(['id'=>'main_menu_form', 'method' =>'POST','class'=>'Form-homizontal', 'files' => true])}}
        		<div class="form-group">
        		    <label for="exampleFormControlFile1">Menu Name</label>
        		    <input type="text" required="" class="form-control" id="main_menu_name">
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

{{-- Add menu modal end --}}



<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>Menu Table</h4>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <button title="Add Slider Image" data-toggle="modal" data-target="#Add_Menu" type="button" class="btn btn-info btn-rounded pull-right add_btn">Add Menu</button>

                    <table id="example1" class="footable table table-bordered toggle-arrow-tiny" data-page-size="8" data-filter=#filter>
                        <thead>
                            <tr>
                                <th>SL.</th>
                                <th>Menu Name</th>
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


$('#main_menu_form').on('submit', function(event) {
	event.preventDefault();
	var menuname=$('#main_menu_name').val();
	var truepublication=$('#publicationtrue:checked').val();
	var falsepublication=$('#publicationfalse:checked').val();
	var url=$(this).attr('action');

	var formData = new FormData();
	formData.append('menuname',menuname);
	formData.append('truepublication',truepublication);
	formData.append('falsepublication',falsepublication);

	$.ajax({
		url:"{{ route('menu_post') }}",
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

			$('#Add_Menu').fadeOut('slow');
			$('#main_menu_update').val('');
			$('.modal-backdrop').fadeOut('slow');
			$('#tabelbody').empty();
			return getallmenu();
		},
		error:function(data){
			swal('Something wrong','','error',{
				timer:2000
			});
		}

	});
});


function getallmenu(){
	var url=$('#showallurl').val();
	$.get(url,function(data){
		var i=1;
		data.forEach(function(value){
			var tr=$("<tr/>");
				tr.append($("<td/>",{
					text:i++
				})).append($('<td/>',{
					text:value.menu_name
				})).append($('<td/>',{
					text:(value.publication==1)? 'Published':'Unpublished'
				})).append($("<td/>",{
					html:`
						<button type="button" title="Publication button" class="btn btn-primary btn-xs btn-rounded" data-id="`+value.id+`" id="publicationid"><i class="fa fa-bolt fa-spin"></i></button>
						<button type="button" title="Edite button" data-toggle="modal" data-target="#edite_menu_modal" class="btn btn-success btn-xs btn-rounded" data-id="`+value.id+`" id="edite_menu"><i class="fa fa-pencil-square-o fa-spin"></i></button>
						<button type="button" title="Delete Slider Image"  class="btn btn-danger btn-xs btn-rounded" data-id="`+value.id+`" id="delete_main_menu"><i class="fa fa-trash fa-spin"></i></button>
					`
				}))

				$('#tabelbody').append(tr);
		});
	});
}
window.onload=getallmenu();

$('#tabelbody').delegate('#publicationid', 'click', function(event) {
	event.preventDefault();
	var id=$(this).data('id');
	var url=$('#publication_update').val();
	var mainurl=(url+"/"+id);
	var formData = new FormData();
	formData.append('id',id);

	$.ajax({
		url:mainurl,
		type:"GET",
		data:formData,
		dataType:"json",
		processData: false,
		cache: false,
		async: false,
		success:function(data){
			swal(data,'','success',{
				timer:2000
			});
			$('#tabelbody').empty();
			return getallmenu();
		},
		error:function(data){
			swal('Somerthing Problem','','error',{
				timer:2000
			});
		}
	});
});


$('#tabelbody').delegate('#edite_menu', 'click', function(event) {
	event.preventDefault();
	var id=$(this).data('id');
	$('#hidden_id').val(id);
	var url=$('#edite_menu_url').val();
	var mainurl=(url+'/'+id);
	$.get(mainurl,function(data){
		$('#main_menu_update').val(data.menu_name);
	});
});


$('#main_menu_form_update').on('submit',function(event){
	event.preventDefault();
	var updatemenuname=$('#main_menu_update').val();
	var url=$('#update_main_menu').val();
	var id=$('#hidden_id').val();
	var mainurl=(url+'/'+id);
	console.log(mainurl);
	var formData= new FormData();
	formData.append('updatemenuname',updatemenuname);
	formData.append('id',id);

	$.ajax({
		url:mainurl,
		type:"POST",
		data:formData,
		dataType:"json",
		processData: false,
  		contentType: false,
		cache: false,
		success:function(data){
			swal(data,'','success',{
				timer:2000
			});
		$('#tabelbody').empty();
		return getallmenu();
		},
		error:function(data){
			swal('Something Error');
		}
	});
});

$('#tabelbody').delegate('#delete_main_menu', 'click', function(event) {
	event.preventDefault();
	var id=$(this).data('id');
	var url=$('#delete_menu').val();
	var mainurl=(url+"/"+id);
	var formData= new FormData();
	formData.append('id',id);
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
			return getallmenu();
		},
		error:function(data){
			swal('Something Error');
		}
	});	
});






	
</script>






@endsection