<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Scroll_Deals
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo("charset"); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script async src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
	<title><?php bloginfo("name"); ?></title>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e(
 	"Skip to content",
 	"scroll-deals"
 ); ?>
		
	</a>





<header>
    <div class="px-3 py-2 bg-dark text-white">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
		<img src="https://picsum.photos/50/50">  
          	<?php
//the_custom_logo();
?>
         </a>

          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            <li>
              <a href="#" class="nav-link text-secondary">
                <i style="display: block;margin-bottom: ;font-size: 40px;text-align: center;" class="fas fa-tachometer-alt"></i>
                Home
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <i style="display: block;margin-bottom: ;font-size: 40px;text-align: center;" class="fas fa-tachometer-alt"></i>
                Dashboard
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <i style="display: block;margin-bottom: ;font-size: 40px;text-align: center;" class="fas fa-tachometer-alt"></i>
                Orders
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <i style="display: block;margin-bottom: ;font-size: 40px;text-align: center;" class="fas fa-tachometer-alt"></i>
                Products
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <i style="display: block;margin-bottom: ;font-size: 40px;text-align: center;" class="fas fa-tachometer-alt"></i>
                Customers
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="px-3 py-2 border-bottom" style="background: white;">
      <div class="container d-flex flex-wrap justify-content-center">
        <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto" style="width: 50%">
          <input type="search" class="form-control" style="width: 100%;padding: 10px;" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <button type="button" class="btn btn-light text-dark me-2">Login</button>
          <button type="button" class="btn btn-primary">Sign-up</button>
        </div>
      </div>
    </div>

        <div class="px-3 py-2 bg-gray mb-3" style="background: #e1e1e1">
      <div class="container d-flex flex-wrap justify-content-center">
      	<div class="container" >
      		<ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            <li>
            	<a href="#" class="nav-link text-secondary">
                
            cat1
              </a> 
        	</li>
            <li>
            	<a href="#" class="nav-link text-secondary">
                
            cat1
              </a> 
        	</li>
        	<li>
            	<a href="#" class="nav-link text-secondary">
                
            cat1
              </a> 
        	</li>
        	<li>
            	<a href="#" class="nav-link text-secondary">
                
            cat1
              </a> 
        	</li>
        </ul>
      	</div>
      	      </div>
    </div>
  </header>


			<?php
// wp_nav_menu(
// 	array(
// 		'theme_location' => 'menu-1',
// 		'menu_id'        => 'primary-menu',
// 	)
// );
?>

