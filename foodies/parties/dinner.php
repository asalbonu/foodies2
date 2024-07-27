<?php
require_once("config/db.php");
$query="SELECT * FROM products;";
$result=mysqli_query($conn,$query);
$query1="SELECT * FROM products WHERE category='dinner';";
$k2=mysqli_query($conn,$query1);
$k1=mysqli_num_rows($k2);
?>
<h3 class="title-big mb-2">Dinner</h3>
            <div class="row menu-body">
            <?php
            $k=0;
            while($a = mysqli_fetch_assoc($result)){
                if($a['category']=="dinner"){
                $k+=1;
                if($k<=$k1/2) echo '<div class="col-lg-6 menu-section">';
                else{ echo '</div>';
                    echo '<div class="col-lg-6 menu-section">';}
            ?>
                    <div class="row menu-item">
                        <div class="col-3 p-0 position-relative">
                        <img src="assets/images/<?=$a['img']?>" class="img-responsive" >
                            
                        </div>
                        <div class="col-9 pl-4">
                            <div class="row no-gutters">
                                <div class="col-9 menu-item-name">
                                    <h6><?=$a['name']?></h6>
                                </div>
                                <div class="col-3 menu-item-price text-right">
                                    <h6><?=$a['price']?>$</h6>
                                </div>
                            </div>
                            <div class="menu-item-description">
                                <p><?=$a['descr']?></p>
                            </div>
                        </div>
                    </div>
                    <?php }} ?>
                   
                </div>
            </div>