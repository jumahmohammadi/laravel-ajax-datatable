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
                                    <i class="fas <?= $data['sort']== 'desc' ? 'fa-sort-down':'fa-sort-up';?>
                                        <?= $data['column'] == 'u.id' ? 'active' : "" ?>" data-column="u.id">
                                    </i>
                                </th>
                                
                                <th>
                                    <?= trans('label.name') ?>
                                    <i class="fas <?= $data['sort']== 'desc' ? 'fa-sort-down':'fa-sort-up';?>
                                        <?= $data['column'] == 'u.name' ? 'active' :"" ?>"
                                        data-column="u.name">
                                    </i>
                                </th>
                               
                                <th>
                                    <?= trans('label.email') ?>
                                    <i class="fas <?= $data['sort']== 'desc' ? 'fa-sort-down':'fa-sort-up';?>
                                            <?= $data['column'] == 'u.email' ? 'active' : "" ?>" data-column="u.email">
                                    </i>
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
                                            <button type="button" class="btn btn-primary dropdown-toggle"
                                                data-toggle="dropdown">
                                                <?= trans('label.actions') ?>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item btn-edit" href="#" data-toggle="modal"
                                                    data-target="#dialog-modal" data-backdrop="static"
                                                    data-fid="<?= $us->id ?>">
                                                    <i class="fas fa-pencil-alt info"></i>
                                                    <?= trans('label.edit') ?>
                                                </a>
                                                <a class="dropdown-item btn-detail" href="#" style=""
                                                    onclick="deleteUser({{$us->id}})">
                                                    <i class="fas fa-trash  danger"></i>
                                                    <?= trans('label.delete') ?>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                            </tr>
                            <?php $i++;}}else{?>
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
