$(document).ready(function(){
    /* 1. Visualizing things on Hover - See next part for action on click */
    $('#stars li').on('mouseover', function(){
      var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on
      // Now highlight all the stars that's not after the current hovered star
      $(this).parent().children('li.star').each(function(e){
        if (e < onStar) {
          $(this).addClass('hover');
        }
        else {
          $(this).removeClass('hover');
        }
      });
      
    }).on('mouseout', function(){
      $(this).parent().children('li.star').each(function(e){
        $(this).removeClass('hover');
      });
    });
    
    
    /* 2. Action to perform on click */
    $('#stars li').on('click', function(){
      var onStar = parseInt($(this).data('value'), 10); // The star currently selected
      var stars = $(this).parent().children('li.star');
      
      for (i = 0; i < stars.length; i++) {
        $(stars[i]).removeClass('selected');
      }
      
      for (i = 0; i < onStar; i++) {
        $(stars[i]).addClass('selected');
      }
      
      // JUST RESPONSE (Not needed)
      var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
      var msg = "";
      if (ratingValue > 1) {
          msg = "Thanks! You rated this " + ratingValue + " stars.";
      }
      else {
          msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
      }
      responseMessage(msg);
      
    });

    $('.like').click(function() {
        var post_id=$(this).parent().data('post-id');
        var user_id=$(this).parent().data('user-id');
        if($(this).hasClass('bi-heart-fill')) {
            $(this).removeClass('bi-heart-fill');
            $(this).addClass('bi-heart');
            likePost(post_id,0,user_id);
            
        } else {
            $(this).removeClass('bi-heart');
            $(this).addClass('bi-heart-fill');
            likePost(post_id,1,user_id);
        }
    });
    
    
});


function likePost(post_id,islike,user_id){
    $.ajax({
        type:"POST",
        url:"post/like_post",
        data:{'post_id':post_id,'islike':islike,'user_id':user_id},
        success:function(response){
            var json_data=JSON.parse(response);
            $(this).removeClass('bi-heart');
            $(this).removeClass('bi-heart-fill');
            if(islike==1){
                $(this).addClass('bi-heart-fill');
            }
            else{
                $(this).addClass('bi-heart');
            }
            //alert(json_data.message);
        }
    });
}
  
  
function responseMessage(msg) {
    $('.success-box').fadeIn(200);  
    $('.success-box div.text-message').html("<span>" + msg + "</span>");
}