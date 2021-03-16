<?php
//views/news/index.php
require_once 'helpers/Helper.php';
?>
<!--NEW-->
<section class="new-content">
    <div class="container-fluid">
        <h3 class="title text-center header-cat">Tin tức</h3>
        <?php if(!empty($bnews)):?>
            <div class="row content">
                <?php foreach ($bnews AS $bnew):
                    $slug = Helper::getSlug($bnew['title']);
                    $bnew_link = "tin-tuc/$slug/" . $bnew['id'] . ".html";
                    ?>
                    <div class="col-lg-3 knew-div">
                        <img src="../backend/assets/uploads/<?php echo $bnew['avatar'] ?>"
                             class="img-thumbnail img-fluid knew-img"
                             alt="<?php echo $bnew['title'] ?>">
                        <div class="clients_more-buttn">
                            <a href="<?php echo $bnew_link;?>" >Xem ngay</a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <p><a href=""><b><?php echo $bnew['title'] ?></b></a></p>
                        <p>   -    <?php echo $bnew['summary'] ?></p>
                    </div>
                    <div class="clearfix"> </div>
                <?php endforeach;?>
            </div>
        <?php endif;?>
    </div>
<!--NEW-->
