<?php
$text = get_field('text');
$description = get_field('description');
$background_image = get_field('background_image');
$image = get_field('image');
$link = get_field('link');

?>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
    .view-more-section {
    background: url('<?php the_field('background_image'); ?>');
    background-repeat: no-repeat;
    background-size: contain;
    height: 850px;
    background-position: left center;
  }

  .bg-wt{
      background:#fff;
      padding:50px;
  }
  .bg-wt h2{
      font-size:30px;
      font-weight:bold;
  }
  .bg-wt p{
      font-size:20px;
      color:333;
      padding:20px 0;
  }
  .bg-wt button{
      padding:20px 45px;
      font-weight:bold;
      border-radius:10px;
  }
  .side-bg{
    background: url('<?php the_field('image'); ?>');
    background-repeat: no-repeat;
    padding: 80px;
  }
  .cstm{
      border: 2px solid #000;
      padding:20px 45px;
      border-radius:10px;
      display: none;
  }

    </style>

<script>
		jQuery(document).ready(function () {
            jQuery(document).on('mouseenter', '#side-bg', function () {
                jQuery(this).find("#button").show();
    }).on('mouseleave', '#side-bg', function () {
        jQuery(this).find("#button").hide();
    });
});
</script>

<div class="view-more-section d-flex align-items-center">
		<div class="container">
		  <div class="row">
			<div class="col-12 col-lg-6 bg-wt">
			  <h2><?php echo $text ;?></h2>
			  <p><?php echo $description ;?></p>
              <?php if($link):?>
			  <button type="button" class="btn btn-dark">VIEW MORE</button>
              <?php endif;?>
			</div>
			<div class="col-12 col-lg-6 d-flex justify-content-center align-items-center side-bg" id="side-bg">
            <?php if($link):?>
                <button type="button" class="btn btn-light border-dark font-weight-bold cstm" id="button">VIEW MORE</button>
                <?php endif;?>
            </div>
		  </div>
		</div>	
	</div>
	