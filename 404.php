<?php include 'inc/head.php'; ?>
  <title></title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <script type="text/javascript" src="./js/jquery-1.10.2.min.js"></script>
  <?php include 'inc/header.php'; ?>
  
<div style="clear:both;"></div>
<br>
  <main id="main">
   
      <section id="frat-contact-us" class="frat-contact-us pb-50">
        <div class="container" >
          <div class="row gy-4 page-404">
					
        <div class="row text-center">
            <h1>404</h1>
			
            <div class="col-sm-12">
           <p>The page you are looking for does not exist.</p>
  		
		<p style="margin-top:30px;"><a href="https://www.fratnow.com/" class="order-a-test-kit" >Back to home<a></p>
            </div>
        </div>
		                

            </div><!-- End post list item -->
        </div>
      </section><!-- End Recent Blog Posts Section -->
     </main><!-- End #main -->
  <?php include 'inc/footer.php'; ?>
  <?php include 'inc/footer-js.php'; ?>
  <script> 
setTimeout(function()
{ 
window.location = "https://www.fratnow.com/"; 
},10000);
</script>
  <script>
    $(function() {
    $(".holder + input").keyup(function() {
        if($(this).val().length) {
            $(this).prev('.holder').hide();
        } else {
            $(this).prev('.holder').show();
        }
    });
    $(".holder").click(function() {
        $(this).next().focus();
    });
});
</script>
  <script src="./js/validation.js"></script>
  <?php include 'inc/footer-close.php'; ?>