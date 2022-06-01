@extends('layouts.app')
@section('content')

<div class="container" id="datatable-search-area" style="display:none">
    <div class="row">
        <div class="col-lg-12">
            <div class="inner-box">
                <form action="#" method="get" class="search-form">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group faculty_dropdown_area">

                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="faculty">&nbsp;</label>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-search"></i>
                                    <?= trans('label.search') ?>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="container" id="main-container">
    <div class="row">
        <div class="col-md-12">
		 
		 @if($errors->any())
			 <ul class="list-group">
				@foreach($errors->all() as $error)
				   <li class="text-danger list-group-item">{{$error}}</li>
				@endforeach
			  </ul>						 
		 @endif
            <div class="inner-box">
                <div class="datatable-action-area">
                    <div class="per_page_area column">
                        <label for="total_per_page">{{trans('label.show_per_page')}}</label>
                        <select class="form-control select2" name="total_per_page" id="total_per_page">
                            <option>10</option>
                            <option>20</option>
                            <option>30</option>
                            <option>40</option>
                            <option>50</option>
                            <option>60</option>
                            <option>70</option>
                            <option>80</option>
                            <option>90</option>
                            <option>100</option>
                            <option>200</option>
                            <option>300</option>
                            <option>400</option>
                            <option>500</option>
                            <option>600</option>
                            <option>700</option>
                            <option>800</option>
                            <option>1000</option>
                        </select>
                    </div>
                    <div class="search_area column">
                        <label for="search">{{trans('label.search')}}</label>
                        <input type="search" name="search" class="form-control" id='search' autocomplete="off">
                    </div>
                    <div class="buttons_area column">
                        <button type="button" class="btn btn-primary btn-add" data-toggle="modal"
                            data-target="#dialog-modal" data-backdrop="static">
                            <i class="fas fa-plus"></i>
                            <?= trans('label.add') ?>
                        </button>
                    </div>
                </div>
                <div class="datatable-container-area">
                    <div class="growing_spinners">
                        <?php for($i=0; $i<9; $i++){ echo '<div class="spinner-grow text-primary"></div>';}?>
                    </div>
                    <div class="datatable-search-result-conainer">
                        <div class="row">
                            <div class="col-12">
                                <div class="card mb-4">
                                    <div class="card-header pb-0">
                                        <h6 class="mb-3">{{ __("label.table").' '.$data['page'] }}</h6>
                                    </div>
                                    <div class="card-body px-0 pt-0 pb-2">
                                        <div class="p-0">
                                            
											 
                                            <table class="table table-striped table-customized tbl_responseiv">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <?= trans('label.number') ?>
                                                            <i class="fas fa-sort-down active" data-column="u.id"></i>
                                                        </th>
                                                     
                                                        <th>
                                                            <?= trans('label.name') ?>
                                                            <i class="fas fa-sort-down" data-column="u.name"></i>
                                                        </th>
                                                       
                                                        <th>
                                                            <?= trans('label.email') ?>
                                                            <i class="fas fa-sort-down" data-column="u.email"></i>
                                                        </th>
                                                        <th>
                                                            <?= trans('label.actions') ?>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if(isset($data['users']) and count($data['users'])>0){ $i = 1;?>
                                                    <?php  foreach($data['users'] as $us){?>

                                                    <tr>
                                                        <td data-label="<?=trans('label.number')?>">
                                                            <?=$i?>
                                                        </td>
                                                     
                                                        <td data-label="<?=trans('label.name')?>">
                                                            <?=$us->name?>
                                                        </td>
                                                       
                                                        <td data-label="<?=trans('label.email')?>">
                                                            <?=$us->email?>
                                                        </td>

                                                        <td>
                                                            <div class="action_dropdown_area">
                                                                <div class="dropdown">
                                                                    <button type="button"
                                                                        class="btn btn-primary dropdown-toggle"
                                                                        data-toggle="dropdown">
                                                                        <?= trans('label.actions') ?>
                                                                    </button>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item btn-edit" href="#"
                                                                            data-toggle="modal"
                                                                            data-target="#dialog-modal"
                                                                            data-backdrop="static"
                                                                            data-fid="<?= $us->id ?>">
                                                                            <i class="fas fa-pencil-alt info"></i>
                                                                            <?= trans('label.edit') ?>
                                                                        </a>
                                                                        <a class="dropdown-item btn-detail" href="#"
                                                                            style="" onclick="deleteUser({{$us->id}})">
                                                                            <i class="fas fa-trash  danger"></i>
                                                                            <?= trans('label.delete') ?>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php $i++;}} else{?>
                                                    <tr>
                                                        <td colspan="6" class="no-record-found">
                                                            <?= __('msg.no_record_found') ?>
                                                        </td>
                                                    </tr>
                                                    <?php }?>
                                                </tbody>
                                            </table>
                                            <?=$data['users']->links('pagination::bootstrap-4');?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('internal_css')
<style>
    .inactive_service {
        pointer-events: none;
        opacity: 0.4;
    }
</style>
@endsection
@section('internal_js')
<script>
    var base_url = BASE_URL+'/admin/users?page=';
    $(document).on('click', '.pagination li', function(e) {
    		e.preventDefault();
            var page = 1;
            if($('a', this).length>0){page = $('a', this).text();}
            if($('span', this).length>0){page = $('span', this).text();}
            $(".pagination li").removeClass("active");
        	$(this).addClass("active");

		// added new
		   var column = $(".table-customized th i.active").data('column');
           if($(".table-customized th i.active").hasClass('fa-sort-up')){
        	  sort = 'asc';
           }else{
        	   sort = 'desc';
            }

            if(column == undefined){
                column = "u.id";
            }

            fetchRecords(page, column, sort);
    });

 	$(document).on('change','select[name="total_per_page"]', function(){
       	fetchRecords(1, 'u.id', 'desc');
    });

    $(document).on('change','.datatable-action-area input[name="search"]', function(){
        fetchRecords(1, 'u.id', 'desc');
    });

	$(document).on("submit",'form.search-form',function(e){
        e.preventDefault();
       fetchRecords(1, 'u.id', 'desc');
     });

    $(document).on("click",'.table-customized thead th i',function(e){
    	$('.table-customized thead th i').removeClass('active');
    	$(this).addClass('active');
        var column = $(this).data('column');
        var sort = 'desc';
        if($(this).hasClass('fa-sort-up')){
        	$(this).removeClass('fa-sort-up').addClass('fa-sort-down');
        	sort = 'desc';
        }else{
        	$(this).removeClass('fa-sort-down').addClass('fa-sort-up');
        	sort = 'asc';
        }
        fetchRecords(1, column, sort);
     });


    function fetchRecords(page, column, sort) {
        var ajax_loader = $(".datatable-container-area .growing_spinners");
        var data_container = $('.datatable-search-result-conainer');
    	var key_word = $('.datatable-action-area input[name="search"]').val();
        var per_page = $('.datatable-action-area select[name="total_per_page"]').find(":selected").val();
		var url = base_url+page+'&key_word='+key_word+'&per_page='+per_page+'&column='+column+'&sort='+sort;
		ajax_loader.show();
        //alert(column+' '+sort)
		data_container.css({opacity:'0.3'});
        $.ajax({
            url : url,
            method:"get",
        }).done(function (response) {
           	ajax_loader.hide();
            data_container.css({opacity:'1'});
            data_container.html(response);
        }).fail(function () {
            alert('<?= __("msg.data_not_loaded") ?>');
        });
    }

	$(document).on('click', '.btn-add', function(){
		 	var modal_content = $(".custom-modal  .modal-content .modal-main-content");
            var ajax_loader = $(".custom-modal .growing_spinners");
            ajax_loader.show();
            modal_content.hide();
			$.ajax({
                    method:'GET',
                    url:''+BASE_URL+'/admin/users/create',
                    success:function(response){
                        ajax_loader.hide();
                        modal_content.show();
                        modal_content.html(response);
                    }
                });
    });


   
    $(document).on("click",'.btn-edit',function(e){
			e.preventDefault();
            var modal_content = $(".custom-modal  .modal-content .modal-main-content");
            var ajax_loader = $(".custom-modal .growing_spinners");
            var id = $(this).data('fid');
            ajax_loader.show();
            modal_content.hide();
			$.ajax({
                    method:'GET',
                    url:''+BASE_URL+'/admin/users/'+id+'/edit',
                    
                    success:function(response){
                        ajax_loader.hide();
                        modal_content.show();
                        modal_content.html(response);
                    }
                });
    });



    function deleteUser(id){
		Swal.fire({
  			title: "<?php echo trans('msg.confirmation_message'); ?>",
  			text: "<?php echo trans('msg.action_is_not_returnable'); ?>",
  			text: "",
  			icon: 'warning',
  			showCancelButton: true,
  			cancelButtonText: "<?php echo trans('label.no'); ?>",
  			confirmButtonColor: '#3085d6',
  			cancelButtonColor: '#d33',
  			confirmButtonText: "<?php echo trans('label.yes'); ?>"
		}).then((result) => {
  			if (result.value) {
  				$.ajax({
					headers: {
                            'X-CSRF-TOKEN': "{{csrf_token()}}",
                        },
					dataType: "JSON",	
		            type:'delete',
				    url:BASE_URL+'/admin/users/'+id,
					success: function(response){
		            	if(response==1){
							Swal.fire(
							  "<?php echo trans('label.congratulation'); ?>",
							  "<?php echo trans('msg.action_done'); ?>",
							  'success'
							);
						}else{
							Swal.fire(
							  "<?php echo trans('label.warning_happened'); ?>",
							  "<?php echo trans('msg.action_not_done'); ?>",
							  'warning'
							);
						}
						$("form.search-form").trigger("submit");
		            }
		        });
			}
		})
	}


</script>
@endsection
