<div class="container-fluid bg-light">
    <?php //echo'<pre>';print_r($new_user_data);echo'</pre>'; ?>
    <div class="container ">
        <div class="row" >
            <div class="col-md-8 col-12">
                <div class="do_post_main mb-5 pt-5 px-md-5 mt-5">
                    <form action="<?php echo site_url('post')?>" method="post" accept-charset="utf-8" enctype="multipart/form-data"> <!-- 1-->
                            <div class="w_post_title mb-4">
                                <input type="text" class="form-control" id="post_title" name="post_title" placeholder="Post Title" value="<?php echo set_value('post_title'); ?>">
                                <div class="text-white mb-5 mt-2 w-50 bg-danger"><?php echo form_error('post_title'); ?></div> 
                            </div>
                            <div class="w_post_title mb-4">
                                <textarea class="form-control" placeholder="Post Description" id="post_desc" name="post_desc" style="height: 100px"  value="<?php echo set_value('post_desc'); ?>"></textarea>
                                <div class="text-white mb-5 w-50 mt-2  bg-danger"><?php echo form_error('post_desc'); ?></div> 
                            </div>
                            <div class="w_upload d-flex justify-content-between">    
                                <div class="image-upload">
                                    <label for="file-input">
                                        <img title="upload your image" src="/ci_blog/upload/attach-removebg-preview.png" alt="..." width="30" style="cursor:pointer;">
                                        <span id="file_title"></span>
                                    </label>
                                    <!-- <input id="file-input" type="file" class="d-none"/> -->
                                    <input type="file" name="userfile" id="file-input" class="d-none">  <!-- 2-->
                                    <div class="text-white mb-5 mt-2 bg-danger"><?php if(isset($file_error)){echo $file_error;} ?></div> 
                                    
                                </div>
                                    <!-- demotest -->
                                    <!-- <label for="upload_file">Upload your file here :&nbsp;&nbsp;&nbsp;&nbsp;</label> -->
                                <div>
                                    <input type="submit" class="btn btn-danger" value="post" name="post">
                                </div>
                            </div>             
                    </form>
                </div> 
                <div class=" m-auto px-md-5 py-5">   
                    <?php 
                    
                    // echo '<pre>';print_r($selected_data);                       
                    if(isset($selected_data)){
                        foreach($selected_data as $row){
                       //echo'<pre>';print_r($row);echo'</pre>';                                 
                    ?>
            
                    <div class="listing_box mb-5 text-capitalize">
                        <div class="listing_title mb-3">
                            <div class="pb-4 d-flex">
                                <div style="border-radius:50%; width:50px;height:50px;overflow:hidden;">
                                    <img src="/ci_blog/upload/boy-35706.png" class="card-img-top">
                                </div>    
                                <h5 class="pt-3 ps-2 fs-5 fw-bold"><?php echo $row['new_user_name']; ?></h5>
                            </div>
                            <div class="d-flex justify-content-between ">
                                <h6><?php echo $row['post_title']; ?></h6>
                            <span><?php echo $row['created-date']; ?></span>
                            </div>
                            

                        </div>
                        <div class="listing_image mb-3">
                        <img src="/ci_blog/upload/<?php echo $row['post_image']; ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="listing_sec d-flex">
                            <div class="listing_like pe-4 fs-4" style="padding-top:7px;">
                                <?php 
                                    $like_icon='bi-heart';
                                    if($row['is_like']==1){
                                        $like_icon='bi-heart-fill';
                                    }
                                 ?>
                                <a href="javascript:void(0)" data-post-id="<?php  echo $row['post_id'];?>" data-user-id="<?php  echo $this->session->userdata('loggedin_user_id');?>"><i class=" like bi <?php echo $like_icon;?>"></i></a>
                            </div>
                            <div class="listing_like pe-4 fs-3">
                                <div class="dropdown">
                                <button class="dropdown-toggle custom_toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-commenting-o" aria-hidden="true"></i>
                                </button>
                                <ul class="dropdown-menu p-4" aria-labelledby="dropdownMenuButton1">
                                    <!-- <input type="text" class="form-control w-50 m-auto" id="post_title" placeholder="write your comment"> -->
                                    <form action="<?php echo site_url('post')?>" method="post" accept-charset="utf-8"> 
                                        <input type="hidden" id="postId" name="postId" value="<?php  echo $row['post_id'];?>">
                                        <textarea name="comment_desc" id="comment" class="w-100 comment-text" placeholder="write your comment here"></textarea>
                                        <input type="submit" value="Comment" name="comment" class="btn btn-danger btn-rounded mt-2 ">
                                    </form>
                                </ul>
                                </div>
                            </div>
                            <div class="listing_stars pe-4 pt-2 fs-5">
                                    <div class='rating-widget'>
                                        <div class='rating-stars text-center'>
                                            <ul id='stars'>
                                            <li class='star' title='Poor' data-value='1'>
                                                <i class='fa fa-star fa-fw'></i>
                                            </li>
                                            <li class='star' title='Fair' data-value='2'>
                                                <i class='fa fa-star fa-fw'></i>
                                            </li>
                                            <li class='star' title='Good' data-value='3'>
                                                <i class='fa fa-star fa-fw'></i>
                                            </li>
                                            <li class='star' title='Excellent' data-value='4'>
                                                <i class='fa fa-star fa-fw'></i>
                                            </li>
                                            <li class='star' title='WOW!!!' data-value='5'>
                                                <i class='fa fa-star fa-fw'></i>
                                            </li>
                                            </ul>
                                        </div>
                                    </div>
                            </div>
                            <div class='listing-like  no-border success-box'>
                                <div class='text-message'></div>
                            </div>
                        </div>
                        <div class="listing_desc text-secondary pb-3">
                            <p class="text-justify"><?php echo $row['post_desc']; ?></p>
                            <div class="text-end text-danger">ReadMore...</div> 
                        </div>
                    </div>
                    <?php 
                    }
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-4 col-12" id="sticky-sidebar">
                <div class="sticky-top custom_sidbar">
                <div class="pt-5">
                    <div class="user_main py-3  fw-bold fs-4 d-flex ps-3 mt-4">
                        <div  style="border-radius:50%; width:50px;height:50px;overflow:hidden;"><img src="/ci_blog/upload/boy-35706.png" class="card-img-top"></div>
                        <div class="ps-3 ">
                        <a href="user_profile"> <?php echo $this->session->userdata('new_user_name');?></a>
                        </div>
                    
                        <hr>
                    </div>
                    <div class="fw-bold fs-5 pt-5">News-letter <hr></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, libero!</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo, id. Dolorem amet fugiat facilis ducimus aspernatur autem quos, quasi beatae possimus, officiis dolores obcaecati nulla doloribus excepturi, cum libero nihil.</p>
                </div>
                <div class="py-5" style="height:fit-content;">
                    <div class="text-center fs-5 bg-dark text-light py-1 ">Your-Friends</div>
                            <div class="fr_list">
                                <div class="frnd_block">
                                        <div class="frnd row pt-4 px-md-4">
                                            <div class="frnd_tab col-10 d-flex">
                                                <!-- <i class='fa fa-user' aria-hidden= 'true'></i> -->
                                                <div class="status pt-3 pe-3">
                                                    <i class="fa fa-circle text-success" aria-hidden="true"></i>
                                                </div>
                                                <div style="border-radius:50%; width:50px;height:50px;overflow:hidden;"><img src="/ci_blog/upload/boy-35706.png" class="card-img-top"></div>
                                                <div class="pt-2 ps-3 fs-5"> Yogesh sharma</div>
                                            </div>
                                        </div>

                                        <div class="frnd row pt-4 px-md-4">
                                            <div class="frnd_tab col-10 d-flex">
                                                <!-- <i class='fa fa-user' aria-hidden= 'true'></i> -->
                                            <div class="status pt-3 pe-3">
                                                    <i class="fa fa-circle text-danger" aria-hidden="true"></i>
                                                </div>
                                                <div style="border-radius:50%; width:50px;height:50px;overflow:hidden;"><img src="/ci_blog/upload/boy-35706.png" class="card-img-top"></div>
                                                <div class="pt-2 ps-3 fs-5"> Mohit Mathur</div>
                                            </div>
                                        </div>

                                        <div class="frnd row pt-4 px-md-4">
                                            <div class="frnd_tab col-10 d-flex">
                                                <!-- <i class='fa fa-user' aria-hidden= 'true'></i> -->
                                                    <div class="status pt-3 pe-3">
                                                    <i class="fa fa-circle text-success" aria-hidden="true"></i>
                                                </div>
                                                <div style="border-radius:50%; width:50px;height:50px;overflow:hidden;"><img src="/ci_blog/upload/boy-35706.png" class="card-img-top"></div>
                                                <div class="pt-2 ps-3 fs-5"> Vimlesh parihar</div>
                                            </div>
                                        </div>

                                        <div class="frnd row pt-4 px-md-4">
                                            <div class="frnd_tab col-10 d-flex">
                                                <!-- <i class='fa fa-user' aria-hidden= 'true'></i> -->
                                                <div class="status pt-3 pe-3">
                                                    <i class="fa fa-circle text-danger" aria-hidden="true"></i>
                                                </div>
                                                <div style="border-radius:50%; width:50px;height:50px;overflow:hidden;"><img src="/ci_blog/upload/boy-35706.png" class="card-img-top"></div>
                                                <div class="pt-2 ps-3 fs-5"> Irfan Malkhani</div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
<script>
    let input = document.getElementById("file-input");
    let label = document.querySelector("label[for='file-input']");
    let fileTitle = document.getElementById("file_title");
    input.addEventListener("change", e => {
    //label.innerText = input.value.split(`C:\\fakepath\\`)[1];
    fileTitle.innerText=input.value.split(`C:\\fakepath\\`)[1];
    });
</script>
