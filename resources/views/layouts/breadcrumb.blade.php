<ol class="breadcrumb bg-transparent breakcruom_leftb mb-0 pb-0 pt-1 px-0 ">
    
    <?php if(isset($data['title1'])){ ?>
    <li class="breadcrumb-item text-sm ps-2">
        <?php
			if(isset($data['title1_link'])){
				echo '<a href="'.asset(''.$data['title1_link'].'').'">'.$data['title1'].'</a>';
			}else{
				echo $data['title1'];
			}
		?>
    </li>
    <?php } ?>

    <?php if(isset($data['title2'])){ ?>
    <li class="breadcrumb-item text-sm ps-2">
        <?php
			if(isset($data['title2_link'])){
				echo '<a href="'.asset(''.$data['title2_link'].'').'">'.$data['title2'].'</a>';
			}else{
				echo $data['title2'];
			}
		?>
    </li>
    <?php } ?>

    <?php if(isset($data['title3'])){ ?>
    <li class="breadcrumb-item text-sm ps-2">
        <?php
			if(isset($data['title3_link'])){
				echo '<a href="'.asset(''.$data['title3_link'].'').'">'.$data['title3'].'</a>';
			}else{
				echo $data['title3'];
			}
		?>
    </li>
    <?php } ?>

    <?php if(isset($data['title4'])){ ?>
    <li class="breadcrumb-item text-sm ps-2">
        <?php
			if(isset($data['title4_link'])){
				echo '<a href="'.asset(''.$data['title4_link'].'').'">'.$data['title4'].'</a>';
			}else{
				echo $data['title4'];
			}
		?>
    </li>
    <?php } ?>

    <?php if(isset($data['title5'])){ ?>
    <li class="breadcrumb-item text-sm ps-2">
        <?php
			if(isset($data['title5_link'])){
				echo '<a href="'.asset(''.$data['title5_link'].'').'">'.$data['title5'].'</a>';
			}else{
				echo $data['title5'];
			}
		?>
    </li>
    <?php } ?>
</ol>
<h6 class="mb-0 mt-1"> @if(isset($data['page'])) {{ $data['page'] }} @endif</h6>
