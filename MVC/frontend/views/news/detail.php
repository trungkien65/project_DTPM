<?php
require_once 'helpers/Helper.php';
?>
<div class="using-border py-3">
    <div class="inner_breadcrumb  ml-4">
        <ul class="short_ls">
            <li>
                <a href="trang-chu.html">Trang chủ</a>
                <span>/ /</span>
            </li>
            <li><?php echo  $bnew['title'] ?></li>
        </ul>
    </div>
</div>
<section class="banner-bottom py-lg-5 py-3">
    <div class="container">
        <div class="inner-sec-shop pt-lg-4 pt-3">
            <div class="row row-new">
                <div class="">
                    <p><b><h3><?php echo  $bnew['title'] ?></h3></b></p>
                </div>
            </div>
            <div class="row row-new">
                <div>
                    <i><?php echo $bnew['summary'];?></i>
                </div>
            </div>
            <div class="row row-new">
                <div class="col-lg-12 new-img">
                    <div class="">
                        <img src="../backend/assets/uploads/<?php echo  $bnew['avatar'] ?>"
                             class="img-responsive" title="<?php echo  $bnew['title'] ?>"
                             alt="<?php echo  $bnew['title'] ?>">
                    </div>
                </div>
            </div>
            <div class="row row-new">
                <div>
                    <?php
                    $contents = $bnew['content'];
                    $contents = explode(' ',$contents);
                    $contents  = str_replace(array('-','.'),array('<br/>-','.<br/>'),$contents);
                    $contents = implode(' ',$contents);
                    echo $contents;
                    ?>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</section>