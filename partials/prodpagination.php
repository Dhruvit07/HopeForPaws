<?php
require '../includes/connect.php';
session_start();

$discount = array(15, 10,20,25);
$coupon = array("#DHRUVIT","#MONDAI","#FUCKYOU","#FUCKEVERYONE","#FUCKEVERYONE");
$rating = array(5.0,1.0,2.0,2.5,4.0,4.2,3.3,4.3);

$limit_per_page = 9;

if (isset($_POST["page_no"])) {
    $page = $_POST["page_no"];
} else {
    $page = 1;
}

$offset = ($page - 1) * $limit_per_page;


if (isset($_SESSION['loggedin'])) {

    $sql = "SELECT * FROM `product` LIMIT {$offset},{$limit_per_page}";
    $result = mysqli_query($conn, $sql);
    $resut_num = mysqli_num_rows($result);
    $sum = $resut_num / 3;
    $rowa = ceil($sum);


    $total_pages = ceil($resut_num / $limit_per_page);
    $output = "";


    $k = 1;
    $j = 1;
    // $output .= '';
    while ($row = mysqli_fetch_assoc($result)) {
        $i = rand(0,3);
        $k = rand(0,4);
        $j = rand(0,7);
        $id = $row['p_id'];
        $name = $row['p_name'];
        $descc = $row['p_desc'];
        $price = $row['p_price'];
        $new_price = $price - (($discount[$i]/100)*$price);
        $img = $row['p_image'];
        $cat = $row['cat_id'];
        // $quan = $row['p_quantity'];
        // if ($quan > 0) {
        //     $quan_txt = "In Stock";
        // } else {
        //     $quan_txt = "Out of Stock";
        // }


        $output .= ' 
        <div class="col-sm-4 col-xs-4 agile_gallery_grid" style="  padding:0px; margin:15px; border: none;  width : 300px;  border-radius: 10px;">
         <form method="post" action="cart.php?action=add&id=' . $id . ' ">
         <div class="card"  style="  padding:0px; background-color: #fff; border: none; overflow:hidden;  width : 300px;  border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
         <div class="w3ls_gallery_grid"  >
             <div class="image-container">
                 <div class="first">
                     <div class="d-flex justify-content-between align-items-center" style="position: relative; z-index: 3;"> 
                     <span class="discount">'.$discount[$i].'%</span> <span class="wishlist"><i class="fa fa-heart-o"></i></span> </div>
                 </div>
         
                 <a href="'. $img . '" class="lsb-preview wthree_p_grid mg-fluid rounded thumbnail-image" data-lsb-group="header" style="border-radius:10px" >
                     <img src="'. $img . '" alt=" " class="img-responsive" style="border-radius:10px; height: 300px; object-fit: cover;" />
                     <div class="agileinfo_content_wrap">
                         <div class="agileits_content">
                             <h3>'.$name.'</h3>
                             <p>'. $descc .'</p>
                         </div>
                     </div>
                 </a>
             </div>
         </div>
         <div class="product-detail-container p-2">
             <div class="d-flex justify-content-between align-items-center">
                 <h4 class="dress-name">'.$name.'</h4>
                 <div class="d-flex flex-column mb-2"> <span class="new-price"> ₹ ' . $new_price .'</span> <small class="old-price text-right">₹ '. $price .'</small> </div>
             </div>
            
             <div class="d-flex justify-content-between align-items-center pt-1">
                 <div> <i class="fa fa-star-o rating-star"></i> <span class="rating-number"> '.$rating[$j].' </span> </div> <span class="buy"><input type="number" style="margin-right:5px" name="quantity" min="1" max="10" value="1" size="2" /><input type="submit" class="buy" value="BUY +" href="cart.php"></span>
             </div>
         </div>
     </div>
     <div style="height: 15px">
     </div>
     <div class="mt-3">
             <div class="card voutchers" >
                 <div class="voutcher-divider">
                     <div class="voutcher-left text-center"> <span class="voutcher-name">Happy Coupon</span>
                         <h4 class="voutcher-code">'.$coupon[$k].'</h4>
                     </div>
                     <div class="voutcher-right text-center border-left">
                         <h4 class="discount-percent">'.$discount[$i].'%</h4> <span class="off">Off</span>
                     </div>
                 </div>
             </div>
     </div>
        
            
        </form>
        </div>
        ';


        if ($k == 9) {
        } else {
            $k++;
        }
    }
    


    $output .= '
    <div class="clearfix"></div>
    </div>
    
        <div class="col-12">
            <div class="text-right">
                <ul class="pagination pagination-split mt-0 float-right"  id="pagination">';

    for ($i = 1; $i <= $total_pages; $i++) {
        if ($i == $page) {
            $class_name = "page-item active";
        } else {
            $class_name = "page-item";
        }
        $output .= "<li class='{$class_name}'  ><a class='page-link' id='{$i}' href=''>{$i}</a></li>";
    }
    $output .= ' </ul>
            </div>
        </div>
    
    ';
    echo $output;
} else {
    header('Location: ../e403.php');
}