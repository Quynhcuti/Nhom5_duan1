<?php
session_start();
$mahh = $_REQUEST['mahh'];
// Require file trong commons
require_once '../../commons/env.php';
require_once '../../commons/helper.php';
require_once '../../commons/connect-db.php';
require_once '../../commons/model.php';
// Require file trong controllers và models
require_file(PATH_CONTROLLER);
require_once '../../models/productdetail.php';


?>
<div class="row">
    <div>
        <div class="review_content">
            <div class="clearfix add_bottom_10">
                <div class="d-flex justify-content-around">
                    <h4 class="col-lg-2 text-warning">Mã Bình Luận</h4>
                    <h4 class="col-lg-4 text-warning">Nội Dung</h4>
                    <h4 class="col-lg-3 text-warning">Ngày Bình Luận</h4>
                    <h4 class="col-lg-3 text-warning">Người Bình Luận</h4>
                </div>
                
            </div>
        </div>
    </div>
</div>
<!-- /row -->
