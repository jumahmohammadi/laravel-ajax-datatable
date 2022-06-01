<form action="<?= asset('admin/users'); ?>" method="POST" class="modal-add-form" enctype="multipart/form-data">
    <div class="modal-header">
        <h4 class="modal-title">
            <?= trans("label.add") ?>
        </h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
        @csrf
		{{ method_field('POST') }}
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="name">
                        <?= trans('label.name') ?> <span class="danger">*</span>
                    </label>
                    <input name="name" type="text" class="form-control" placeholder="" id="name" autocomplete="off">
                </div>
            </div>

            

            <div class="col-lg-6">
                <div class="form-group">
                    <label for="email">
                        <?= trans('label.email') ?> <span class="danger">*</span>
                    </label>
                    <input name="email" type="email" class="form-control" placeholder="" autocomplete="off" id="email">
                </div>
            </div>
           
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="password">
                        <?= trans('label.password') ?> <span class="danger">*</span>
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
                    <input name="confirm_password" type="password" class="form-control" placeholder="" autocomplete="off"
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

