@extends('admin.layouts.app')
@section('content')

<div class="container" id="main-container">
    <div class="row">
        <div class="col-md-12">
            <div class="inner-box">
                <div class="datatable-container-area setting-update-form card">
                    <div class="growing_spinners">
                        <?php for($i=0; $i<9; $i++){ echo '<div class="spinner-grow text-primary"></div>';}?>
                    </div>
                    <div class="row">
                        <div class="col-md-1 col-sm-1 user_profile_sidebar" style="min-height: ">

                        </div>
                        <div class="col-md-10 col-sm-10 user_adminpanel_content">

                            <div class="user_box_header">
                                <h2>{{trans('label.profile')}}
                                    <span class="btn-edit" href="#" data-toggle="modal" data-target="#dialog-modal"
                                        data-backdrop="static" data-fid="<?= $data['user']->id ?>">
                                        ({{trans('label.edit')}})
                                    </span>
                                </h2>
                            </div>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="user_profile_info">
                                        <table class="table">
                                            <tr>
                                                <td>{{ trans('label.name') }}</td>
                                                <th>{{$data['user']->first_name}} <span class="fa fa-pencil"
                                                        href="#editUserForm" data-toggle="modal"></span></th>
                                            </tr>
                                            <tr>
                                                <td>{{ trans('label.last_name') }}</td>
                                                <th>{{$data['user']->last_name}} </th>
                                            </tr>

                                            <tr>
                                                <td>{{ trans('label.email') }} </td>
                                                <th>{{$data['user']->email}} <span class="fa fa-pencil"
                                                        href="#editUserForm" data-toggle="modal"></span></th>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-3 profile_picture">
                                    <?php
                                            if($data['user']->photo){
                                                $photoName='public/uploads/profiles/user/'.$data['user']->photo;
                                            }
                                            else{
                                                $photoName='public/uploads/profiles/default.png';
                                            }
                                        ?>
                                    <img src="{{asset($photoName)}}" style=" max-width: 92%;">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 col-sm-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('internal_css')
<style>
    .btn-edit {
        font-size: 11px;
        cursor: pointer;
    }

    .inactive_service {
        pointer-events: none;
        opacity: 0.4;
    }

    .user_box_header {
        text-align: center;
        margin-bottom: 23px;
    }

    .user_box_header h2 {
        display: inline-block;
        border-bottom: 3px solid #ddd !important;
        padding: 11px 20px;
        font-size: 22px;
    }

    .datatable-container-area {
        padding-bottom: 20px;
    }
</style>
@endsection
@section('internal_js')
<script>
    $(document).on("click",'.btn-edit',function(e){
			e.preventDefault();
            var modal_content = $(".custom-modal  .modal-content .modal-main-content");
            var ajax_loader = $(".custom-modal .growing_spinners");
            var id = $(this).data('fid');
            ajax_loader.show();
            modal_content.hide();
			$.ajax({
                    method:'GET',
                    url:''+BASE_URL+'/admin/users/edit_profile',
                    data:{id: id},
                    success:function(response){
                        ajax_loader.hide();
                        modal_content.show();
                        modal_content.html(response);
                    }
                });
         });


</script>
@endsection
