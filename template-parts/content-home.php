
<?php
$args = array(
     'taxonomy' => 'product_cat',
     'orderby' => 'name',
     'order' => 'ASC',
     'hide_empty' => false
); 
?>

<div class="container" style="margin-top:5vw"> 
	<?php foreach( get_categories( $args ) as $category ) : ?>
	<div class="row" style="background: white;margin-top:3vw;padding:10px">
		<div class="card mb-3" style="width: 100%;max-width: 540px"> 
			<!-- //max-width: 540px; -->
  <div class="row g-0">
    <div class="col-md-4">
      <img src="https://picsum.photos/200/200" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo($category->name) ?></h5>
        <p class="card-text"><?php print_r($category->description) ?></p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
		<!-- <h1></h1> -->
		<?php //print_r($category) ?>
	</div>
	<?php endforeach ?>
	<!-- <div class="row" style="background: white;margin-top:3vw">
		row1
	</div>
 -->
</div>