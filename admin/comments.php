<?php 
include ('includes/header.php'); 
include ('includes/topnav.php');
?>

    <div class="app-dashboard shrink-medium">
         <div class="app-dashboard-body off-canvas-wrapper">
         <?php include ('includes/sidebarnav.php'); ?>
<div class="app-dashboard-body-content off-canvas-content" data-off-canvas-content>
              <h2 class="text-center">Comments</h2>
              	<!-- comments -->
          <div class="comment-section-container">
            <h3>Comments (2)</h3>
            <div class="comment-section-author">
              <img src="https://placehold.it/50x50" alt="">
              <div class="comment-section-name">
                <h5><a href="">Janice Jones</a></h5>
                <p>March 12, 2017 at 1:28pm</p>
              </div>
            </div>
            <div class="comment-section-text">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra augue. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum facilis tenetur a voluptatibus quia
                deserunt.
              </p>
            </div>
            <div class="comment-section-author">
              <img src="https://placehold.it/50x50" alt="">
              <div class="comment-section-name">
                <h5><a href="">Janice Jones</a></h5>
                <p>March 12, 2017 at 1:28pm</p>
              </div>
            </div>
            <div class="comment-section-text">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra augue. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum facilis tenetur a voluptatibus quia deserunt.
              </p>
            </div>
          </div>
          <!--/comments-->
    
          <!-- comment form -->
          <form class="comment-section-form">
            <div class="comment-section-box">
              <div class="row">
                <div class="small-12 column">
                  <h4>Leave a Comment</h4>
                  <label>Name
                    <input type="text">
                  </label>
                  <label>Email
                    <input type="text">
                  </label>
                  <label>Comment
                    <textarea rows="10" type="text"></textarea>
                  </label>
                  <button class="button expanded">Submit</button>
                </div>
              </div>
            </div>
          </form>
          <!--/comment box-->
    
    
              
    
    
            </div>
         
    
    
     
    </div>
    </div>
<?php include ('includes/footer.php'); ?>