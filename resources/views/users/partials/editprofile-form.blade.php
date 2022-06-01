<form action="<?= asset('admin/users/update'); ?>" method="POST" class="modal-edit-form" enctype="multipart/form-data">
    <div class="modal-header">
        <h4 class="modal-title">
            <?= trans("label.edit").' '.trans('label.user'); ?>
        </h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="name">
                        <?= trans('label.name') ?> <span class="danger">*</span>
                    </label>
                    <input type="hidden" name="id" value="{{$data['user']->id}}">
                    <input type="hidden" name="old_photo" value="{{$data['user']->photo}}">
                    <input name="name" type="text" class="form-control" placeholder="" id="name"
                        value="{{$data['user']->first_name}}" autocomplete="off">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label for="last_name">
                        <?= trans('label.last_name') ?> <span class="danger">*</span>
                    </label>
                    <input name="last_name" type="text" class="form-control" placeholder="" autocomplete="off"
                        id="last_name" value="{{$data['user']->last_name}}">
                </div>
            </div>


            <div class="col-lg-6">
                <div class="form-group">
                    <label for="email">
                        <?= trans('label.email') ?> <span class="danger">*</span>
                    </label>
                    <input name="email" type="email" class="form-control" placeholder="" autocomplete="off" id="email"
                        value="{{$data['user']->email}}">
                </div>
            </div>


            <div class="col-lg-6">
                <div class="form-group">
                    <label for="image">
                        <?= trans('label.image') ?>
                    </label>
                    <input name="image" type="file" class="form-control" placeholder="" autocomplete="off" id="image">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label for="password">
                        <?= trans('label.new_password') ?> <span class="danger">*</span>
                    </label>
                    <input name="password" type="password" class="form-control" placeholder="" autocomplete="off"
                        id="password">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label for="password_conf">
                        <?= trans('label.password_conf') ?> <span class="danger">*</span>
                    </label>
                    <input name="password_conf" type="password" class="form-control" placeholder="" autocomplete="off"
                        id="password_conf">
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-plus"></i>
            <?= trans('label.save') ?>
        </button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">
            <i class="fas fa-times"></i>
            <?= trans('label.close') ?>
        </button>
    </div>
</form>
<script type="text/javascript">
    $('.select2').select2();
     $(".modal-edit-form").validate({
            highlight: function(element) {
                $(element).parent().addClass("field-has-error");
                $(element).parent().removeClass("field-is-validated");
            },
            unhighlight: function(element) {
                $(element).parent().removeClass("field-has-error");
                $(element).parent().addClass("field-is-validated");
            },
            rules: {

                name: {
					required: true,
					normalizer: function(value) {
						return $.trim(value);
					}
                },
                last_name: {
                        required: true,
                        normalizer: function(value) {
                            return $.trim(value);
                        }
                },
                 email: {
                        required: true,
                        email: true,
                        normalizer: function(value) {
                            return $.trim(value);
                        }
                },
			   password: {

						minlength : 5,
                        normalizer: function(value) {
                            return $.trim(value);
                        }
                },
              password_conf: {

						minlength : 5,
                        equalTo : "#password",
                        normalizer: function(value) {
                            return $.trim(value);
                        }
                },

              },
          messages:{
			   name:{
                        required: '<?= trans("label.requried_field")?>',
              },
              last_name:{
                        required: '<?= trans("label.requried_field")?>',
              },
              email:{
                        required: '<?= trans("label.requried_field")?>',
                        email: '<?= trans("label.email_format")?>',
              },
              password:{
                        required: '<?= trans("label.requried_field")?>',
                        minlength: '<?= trans("label.minlength_5")?>',
              },
              password_conf:{
                        required: '<?= trans("label.requried_field")?>',
                        minlength: '<?= trans("label.minlength_5")?>',
                        equalTo: '<?= trans("label.equal_to_password")?>',
              },

          },
          submitHandler: function (form) {
                    var modal_content = $(".custom-modal  .modal-content .modal-main-content");
                    var ajax_loader = $(".custom-modal .growing_spinners");
                    var form_data = new FormData($('.modal-edit-form')[0]);
                    ajax_loader.show();
                    modal_content.hide();
                        $.ajax({
                                method:'POST',
                                url:''+BASE_URL+'/admin/users/update',
                                data: form_data,
                                processData: false,
                                contentType: false,
                                success:function(response){
                                        ajax_loader.hide();
                                        modal_content.show();
                                        $("#dialog-modal .close").click();
                                         modal_content.empty();
                                         if(response==1){
                                                Swal.fire(
                                                    '<?= trans("label.congratulation") ?>',
                                                    '<?= trans("msg.action_done") ?>',
                                                    'success'
                                                ).then((result) => {location.reload();})
                                         }else{
                                            Swal.fire(
                                                    '<?= trans("label.warning_happened") ?>',
                                                    '<?= trans("msg.action_not_done") ?>',
                                                    'warning'
                                                ).then((result) => {location.reload();})
                                         }
                            }
                        });
                return false;
            }
      });

$("#date").persianDatepicker({
       		formatDate: "YYYY-MM-DD",
         	cellWidth: 35,
         	cellHeight: 30,
         	fontSize: 13,
    });

</script>
