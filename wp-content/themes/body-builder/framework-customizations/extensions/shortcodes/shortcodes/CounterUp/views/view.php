<?php 
if (!defined('FW')) die('Forbidden');


$title1 = $atts['title1'];
$count1 = $atts['count1'];
$title2 = $atts['title2'];
$count2 = $atts['count2'];
$title3 = $atts['title3'];
$count3 = $atts['count3'];
$title4 = $atts['title4'];
$count4 = $atts['count4'];
$extraclass = $atts['extra_body_class'];

?>
<!--Gallery start here -->
 <!--Fun facts start here -->
<div class="fun-facts <?php echo esc_attr($extraclass) ?>">
  <div class="overlay">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-3 col-12">
          <div class="fun-item">
            <?php if(!empty($count1)): ?>
            <span class="counter"><?php echo esc_html($count1); ?></span><span>+</span>
            <?php endif; ?>
            <?php if(!empty($title1)): ?>
            <p><?php echo esc_html($title1); ?></p>
            <?php endif; ?>
          </div><!-- fun item -->
        </div>
        <div class="col-md-3 col-sm-3 col-12">
          <div class="fun-item">
              <?php if(!empty($count2)): ?>
              <span class="counter"><?php echo esc_html($count2); ?></span>
              <?php endif; ?>
               <?php if(!empty($title2)): ?>
            <p><?php echo esc_html($title2); ?></p>
            <?php endif; ?>
          </div><!-- fun item -->
        </div>
        <div class="col-md-3 col-sm-3 col-12">
          <div class="fun-item">
            <?php if(!empty($count3)): ?>
            <span class="counter"><?php echo esc_html($count3); ?></span><span>+</span>
             <?php endif; ?>
              <?php if(!empty($title3)): ?>
              <p><?php echo esc_html($title3); ?></p>
             <?php endif; ?>
          </div><!-- fun item -->
        </div>
        <div class="col-md-3 col-sm-3 col-12">
          <div class="fun-item">
           <?php if(!empty($count4)): ?>
              <span class="counter"><?php echo esc_html($count4); ?></span>
              <?php endif; ?>
               <?php if(!empty($title4)): ?>
              <p><?php echo esc_html($title4); ?></p>
              <?php endif; ?>
          </div><!-- fun item -->
        </div>
      </div><!-- row -->
    </div><!-- container -->
  </div><!-- overlay -->
</div><!-- fun facts -->
<!--Fun facts end here -->
    