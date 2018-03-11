<?php
global $content;
ob_start();
?>
		<header class="cd-header">

    <nav class="navbar">
        <div class="nav nav-justified navbar-nav">
 
            <form class="navbar-form navbar-search" role="search">
                <div class="input-group">
        
                    <input type="text" class="form-control" id="search-text">
                
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-search btn-info" id="btn-search-ayats">
                            <span class="glyphicon glyphicon-search"></span>
                            <span class="label-icon">Search</span>
                        </button>
                    </div>
                </div>  
            </form>   
         
        </div>
    </nav>

	</header>

	<main class="cd-main-content">
		<div class="cd-tab-filter-wrapper">
			<div class="cd-tab-filter" id="filter-sourate-nav">
			</div> <!-- cd-tab-filter -->
		</div> <!-- cd-tab-filter-wrapper -->

		<section class="cd-gallery">
			
			<div class="list-group">
			<ul id="list-mutashabihates">
			
			</ul>
		</div>

			<div class="cd-fail-message">No results found</div>
		</section> <!-- cd-gallery -->

		<div class="cd-filter">
			<form>
				<div class="cd-filter-block">
					<h4>Search</h4>
					
					<div class="cd-filter-content">
						<input type="search" placeholder="sourate, juz...">
					</div> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->
				
				<div class="cd-filter-block">
					<h4>Page filter</h4>
					
					<div class="cd-filter-content">
						<div class="slidecontainer" id="page-filter-zone">
						</div>
						<p id="show-page"></p>
					</div> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->

				<div class="cd-filter-block">
					<h4>Select</h4>
					
					<div class="cd-filter-content">
						<div class="cd-select cd-filters" id="juz-filter">
							<select class="filter" name="selectThis" id="selectThis">
								<option value="">Choose a Juz</option>
								<option value=".juz-1">Juz 1</option>
								<option value=".juz-2">Juz 2</option>
								<option value=".juz-3">Juz 3</option>
								<option value=".juz-4">Juz 4</option>
							</select>
						</div> <!-- cd-select -->
					</div> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->

			</form>

			<a href="#0" class="cd-close">Close</a>
		</div> <!-- cd-filter -->

		<a href="#0" class="cd-filter-trigger">Filters</a>
	</main> <!-- cd-main-content -->
   
        <?php
$content = ob_get_clean();
?>


<?php

if ( ! defined( 'ABSPATH' ) ) {	exit; }

function mutshab_shortcode($atts){
	global $content;
	//var_dump($content);die();
    return $content;
}
add_shortcode('educare_mutashab', 'mutshab_shortcode');