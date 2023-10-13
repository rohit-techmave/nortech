<?php include("header.php") ?>

<div class="container-fluid relative px-3">
   <div class="layout-specing">
   <div class="row">
    <div class="col-lg-3">
    <div class="accordion">
  <div class="at-item">
    <div class="at-title active" id="at-title1">
      <h2>Status</h2>
    </div>
    <div class="at-tab" style="display: block;" id="at-tab1">
       <div class="form-group">
          
            <div class="invisible-checkboxes">
                    <input type="radio" name="rGroup" value="1" id="r1">
                    <label class="checkbox-alias" for="r1">Buy Now</label>
                    <input type="radio" name="rGroup" value="2" id="r2">
                    <label class="checkbox-alias" for="r2">On Auction</label>
                    <input type="radio" name="rGroup" value="3" id="r3">
                    <label class="checkbox-alias" for="r3">New</label>
                    <input type="radio" name="rGroup" value="4" id="r4">
                    <label class="checkbox-alias" for="r4">Has Offers</label>
                 
                </div>
                    
                
            <!-- input-group -->
        </div>
    </div>
  </div>
  <div class="at-item">
    <div class="at-title active" id="at-title2">
      <h2>Price Range</h2>
    </div>
    <div class="at-tab" style="display: block;" id="at-tab2">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, reprehenderit.
    </div>
  </div>
  <div class="at-item">
    <div class="at-title active" id="at-title3">
      <h2>Accordion title 3</h2>
    </div>
    <div class="at-tab" style="display: block;" id="at-tab3">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, reprehenderit.
    </div>
  </div>
</div>
    </div>
</div>
    </div>
  </div>

<?php include("footer.php") ?>
<script>
    $(document).ready(function () {
  $("#at-title1").click(function () {
    $(this).toggleClass("active").next("#at-tab1").slideToggle().parent().siblings().find("#at-tab1").slideUp().prev().removeClass("active");
  });
  $("#at-title2").click(function () {
    $(this).toggleClass("active").next("#at-tab2").slideToggle().parent().siblings().find("#at-tab2").slideUp().prev().removeClass("active");
  });
  $("#at-title3").click(function () {
    $(this).toggleClass("active").next("#at-tab3").slideToggle().parent().siblings().find("#at-tab3").slideUp().prev().removeClass("active");
  });
});

</script>