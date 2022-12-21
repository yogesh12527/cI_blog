<div class="container">
<div class="row">
    <div class="col-12 pb-5">
        <div class="user d-flex align-items-center  px-5 pt-5">                 
            <div class="col-3  "style="width:100px;">
                <img src="/ci_blog/upload/boy-35706.png" class="card-img-top"> 
            </div> 
            <div class="col-3 ">
            <h5 class="pt-3 ps-2  fw-bold"><?php echo $_SESSION['new_user_name']; ?> <img src="/ci_blog/upload/verified.png" width="30px" class="pb-1"></h5>
            </div>
            <div class="follow_items  align-items-center  col-6">
                <div class="row">
                    <div class="col-4 text-center  post fw-bold fs-4 col"><?php if($get_user_post_data){echo count($get_user_post_data);}else{echo"-";}?><hr>Posts</div>
                    <div class="col-4 text-center  follow_items followers fw-bold fs-4 col">-<hr> Followers</div>
                    <div class="col-4 text-center  follow_items following fw-bold fs-4 col">- <hr> Following</div>
                </div>
            </div>
        </div>
    </div>
<!--  -->
        <div class="col-8">
            <div class="row">
                <?php
                    if($get_user_post_data){
                    foreach($get_user_post_data as $key => $value){  
                       
                    
                ?>

                    <div class="col-4">
                        <div class="p-3  h-100"> 
                            <img src="/ci_blog/upload/<?php echo($value['post_image'])?>"class="w-100 h-100" style="object-fit:cover;">
                        </div>
                    </div>

                <?php
                 
                    } 
                }
                ?>

            </div>
        </div>
        <div class="col-4">


        </div>

</div>

</div>




