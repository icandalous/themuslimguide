function initialisationFiltre(){
	//open/close lateral filter
	$('.cd-filter-trigger').on('click', function(){
		triggerFilter(true);
	});
	$('.cd-filter .cd-close').on('click', function(){
		triggerFilter(false);
	});

	function triggerFilter($bool) {
		var elementsToTrigger = $([$('.cd-filter-trigger'), $('.cd-filter'), $('.cd-tab-filter'), $('.cd-gallery')]);
		elementsToTrigger.each(function(){
			$(this).toggleClass('filter-is-visible', $bool);
		});
	}

	//mobile version - detect click event on filters tab
	var filter_tab_placeholder = $('.cd-tab-filter .placeholder a'),
		filter_tab_placeholder_default_value = 'Select',
		filter_tab_placeholder_text = filter_tab_placeholder.text();
	
	$('.cd-tab-filter li').on('click', function(event){
		//detect which tab filter item was selected
		var selected_filter = $(event.target).data('type');
			
		//check if user has clicked the placeholder item
		if( $(event.target).is(filter_tab_placeholder) ) {
			(filter_tab_placeholder_default_value == filter_tab_placeholder.text()) ? filter_tab_placeholder.text(filter_tab_placeholder_text) : filter_tab_placeholder.text(filter_tab_placeholder_default_value) ;
			$('.cd-tab-filter').toggleClass('is-open');

		//check if user has clicked a filter already selected 
		} else if( filter_tab_placeholder.data('type') == selected_filter ) {
			filter_tab_placeholder.text($(event.target).text());
			$('.cd-tab-filter').removeClass('is-open');	

		} else {
			//close the dropdown and change placeholder text/data-type value
			$('.cd-tab-filter').removeClass('is-open');
			filter_tab_placeholder.text($(event.target).text()).data('type', selected_filter);
			filter_tab_placeholder_text = $(event.target).text();
			
			//add class selected to the selected filter item
			$('.cd-tab-filter .selected').removeClass('selected');
			$(event.target).addClass('selected');
		}
	});
	
	//close filter dropdown inside lateral .cd-filter 
	$('.cd-filter-block h4').on('click', function(){
		$(this).toggleClass('closed').siblings('.cd-filter-content').slideToggle(300);
	})

	//fix lateral filter and gallery on scrolling
	$(window).on('scroll', function(){
		(!window.requestAnimationFrame) ? fixGallery() : window.requestAnimationFrame(fixGallery);
	});

	function fixGallery() {
		var offsetTop = $('.cd-main-content').offset().top,
			scrollTop = $(window).scrollTop();
		( scrollTop >= offsetTop ) ? $('.cd-main-content').addClass('is-fixed') : $('.cd-main-content').removeClass('is-fixed');
	}

	/************************************
		MitItUp filter settings
		More details: 
		https://mixitup.kunkalabs.com/
		or:
		http://codepen.io/patrickkunka/
	*************************************/

	buttonFilter.init();
	$('.cd-gallery ul').mixItUp({
	    controls: {
	    	enable: false
	    },
	    callbacks: {
	    	onMixStart: function(){
	    		$('.cd-fail-message').fadeOut(200);
	    	},
	      	onMixFail: function(){
	      		$('.cd-fail-message').fadeIn(200);
	    	}
	    }
	});

	//search filtering
	//credits http://codepen.io/edprats/pen/pzAdg
	var inputText;
	var $matching = $();

	var delay = (function(){
		var timer = 0;
		return function(callback, ms){
			clearTimeout (timer);
		    timer = setTimeout(callback, ms);
		};
	})();

	$(".cd-filter-content input[type='search']").keyup(function(){
	  	// Delay function invoked to make sure user stopped typing
	  	delay(function(){
	    	inputText = $(".cd-filter-content input[type='search']").val().toLowerCase();
	   		// Check to see if input field is empty
	    	if ((inputText.length) > 0) {            
	      		$('.mix').each(function() {
		        	var $this = $(this);
		        
		        	// add item to be filtered out if input text matches items inside the title   
		        	if($this.attr('class').toLowerCase().match(inputText)) {
		          		$matching = $matching.add(this);
		        	} /*else {
		          		// removes any previously matched item
		          		$matching = $matching.not(this);
		        	}*/
	      		});
				console.log($matching);
	      		$('.cd-gallery ul').mixItUp('filter', $matching);
	    	} else {
	      		// resets the filter to show all item if input is empty
	      		$('.cd-gallery ul').mixItUp('filter', 'all');
	    	}
	  	}, 200 );
	});
	
	var slider = document.getElementById("myRange");
	//var output = document.getElementById("demo");
	//output.innerHTML = slider.value; // Display the default slider value

	// Update the current slider value (each time you drag the slider handle)
	slider.oninput = function() {
		var id = this.value;
		console.log('oninput : '+id);
		$('#show-page').text("Page : "+id);
		$('.mix').each(function() {
			var $this = $(this);
			var inputText= 'page-'+id;
			console.log(inputText);
			// add item to be filtered out if input text matches items inside the title   
			if($this.data('page')>=id){
				console.log('Yes '+$this.data('page')+' est bien superieur ou egale a '+id);
				$matching = $matching.add(this);
			} else {
				// removes any previously matched item
				$matching = $matching.not(this);
			}
		});
		console.log($matching);
		$('.cd-gallery ul').mixItUp('filter', $matching);
	}
	
	
	slider.onchange  = function() {
		var id = this.value;
		console.log('onchange : '+id);
		$('.mix').each(function() {
			var $this = $(this);
			var inputText= 'page-'+id;
			console.log(inputText);
			// add item to be filtered out if input text matches items inside the title   
			if($this.data('page')>=id){
				console.log('Yes '+$this.data('page')+' est bien superieur ou egale a '+id);
				$matching = $matching.add(this);
			} else {
				// removes any previously matched item
				$matching = $matching.not(this);
			}
		});
		console.log($matching);
		$('.cd-gallery ul').mixItUp('filter', $matching);
	
	}
	
	slider.onoutput  = function() {
		var id = this.value;
		console.log('output : '+id);
	
	}
	

};

/*****************************************************
	MixItUp - Define a single object literal 
	to contain all filter custom functionality
*****************************************************/
var buttonFilter = {
  	// Declare any variables we will need as properties of the object
  	$filters: null,
  	groups: [],
  	outputArray: [],
  	outputString: '',
  
  	// The "init" method will run on document ready and cache any jQuery objects we will need.
  	init: function(){
    	var self = this; // As a best practice, in each method we will asign "this" to the variable "self" so that it remains scope-agnostic. We will use it to refer to the parent "buttonFilter" object so that we can share methods and properties between all parts of the object.
    
    	self.$filters = $('.cd-main-content');
    	self.$container = $('.cd-gallery ul');
    
	    self.$filters.find('.cd-filters').each(function(){
	      	var $this = $(this);
	      
		    self.groups.push({
		        $inputs: $this.find('.filter'),
		        active: '',
		        tracker: false
		    });
	    });
	    
	    self.bindHandlers();
  	},
  
  	// The "bindHandlers" method will listen for whenever a button is clicked. 
  	bindHandlers: function(){
    	var self = this;

    	self.$filters.on('click', 'a', function(e){
	      	self.parseFilters();
    	});
	    self.$filters.on('change', function(){
	      self.parseFilters();           
	    });
  	},
  
  	parseFilters: function(){
	    var self = this;
	 
	    // loop through each filter group and grap the active filter from each one.
	    for(var i = 0, group; group = self.groups[i]; i++){
	    	group.active = [];
	    	group.$inputs.each(function(){
	    		var $this = $(this);
	    		if($this.is('input[type="radio"]') || $this.is('input[type="checkbox"]')) {
	    			if($this.is(':checked') ) {
	    				group.active.push($this.attr('data-filter'));
	    			}
	    		} else if($this.is('select')){
	    			group.active.push($this.val());
	    		} else if( $this.find('.selected').length > 0 ) {
	    			group.active.push($this.attr('data-filter'));
	    		}
	    	});
	    }
	    self.concatenate();
  	},
  
  	concatenate: function(){
    	var self = this;
    
    	self.outputString = ''; // Reset output string
    
	    for(var i = 0, group; group = self.groups[i]; i++){
	      	self.outputString += group.active;
	    }
    
	    // If the output string is empty, show all rather than none:    
	    !self.outputString.length && (self.outputString = 'all'); 
	
    	// Send the output string to MixItUp via the 'filter' method:    
		if(self.$container.mixItUp('isLoaded')){
	    	self.$container.mixItUp('filter', self.outputString);
		}
  	}
};


var sourates = new Set();
var juz = new Set();
var hizb = new Set();
var pages = new Set();
$('#btn-search-ayats').on("click", function(){
	
	var search = $('#search-text').val();
	$.ajax({
		url:quranApiUrl + "search/" + search,
		success:function(result){
			console.log(result);
			//alert(JSON.stringify(result));
			clear()
			if(result){
				affichage(result);
				addSelectionJuz();
				addSlide();
				initialisationFiltre();
			}
			else{
			}
		
		}
	})
	
	return false;
});

function clear(){
	$("#list-mutashabihates").html('');
	$('#filter-sourate-nav').html('');
	$('#page-filter-zone').html('');
	$('#juz-filter').html('');
}
function affichage(data){
	var html= '';
	$("#list-mutashabihates").html(html);
	for(var i = 0; i<data.length; i++){
		var mutashab = data[i].data;
		for(var j = 0; j<mutashab.length; j++){
			html += addItem(mutashab[j]);
			
		}
		$("#list-mutashabihates").append(html);
	}
	$("#list-mutashabihates").html(html);
	console.log(sourates);
	console.log(juz);
	console.log(hizb);
	console.log(pages);
	afficherBarSourateFilter();
}
function addItem(item){
	var surateName = item['sura name'].split('--')[0];
	sourates.add(surateName);
	juz.add('juz-'+item['juzid']);
	hizb.add('hizb-'+item['hizbid']);
	pages.add(item['pageid']);
	var html = '<li class="mix '+surateName.toLowerCase()+' juz-'+item['juzid']+' hizb-'+item['hizbid']+' page-'+item['pageid']+'" style="display: inline-block;" data-page="'+item['pageid']+'">'+
	'<div class="sourate d-flex w-100 justify-content-between">'+
      '<h5 class="mb-1">Sourate : '+surateName+'</h5>'+
      '<small>verset : '+item['ayat_num']+'</small>'+
    '</div>'+
	'<div class="zone-ayat"><a href="#" class="list-group-item list-group-item-action flex-column align-items-start">'+
    
    '<p class="mb-1">ُ'+item['content_ar']+'</p>'+
    '<small></small>'+
  '</a></div>'+
  '</li>';
  
  return html;
}

function afficherBarSourateFilter(){
	let html = "";
	$('#filter-sourate-nav').html('');
	html += '<ul class="cd-filters">';
	html += '<li class="placeholder">';
	html += '<a data-type="all" href="#0">All</a>';
	html += '</li>';
	html += '<li class="filter"><a class="selected" href="#0" data-type="all">All</a></li>';
	for (let s of sourates){
		name = s.toLowerCase();
		html += '<li class="filter" data-filter=".'+name+'"><a href="#0" data-type="'+name+'">'+s+'</a></li>';
	}
	
	html += '</ul>';
	
	$('#filter-sourate-nav').append(html);
	
}

function addSlide(){
	$('#page-filter-zone').html('');
	 var arr = Array.from(pages).sort(function(a, b) {
										  return a - b;
										});
	 console.log(arr);
	 min = arr[0];
	 max = arr[arr.length-1];
	 console.log(min, max);
	var html = '<span id="max-range-page">'+min+'</span><input type="range" min="'+min+'" max="'+max+'" value="'+max+'" class="slider" id="myRange"><span id="max-range-page">'+max+'</span>';
	$('#page-filter-zone').html(html);
}
function addSelectionJuz(){
	$('#juz-filter').html('');
	var html = '<select class="filter" name="selectThis" id="selectThis">';
	html+='<option value="">Choose a Juz</option>';
	for (let j of juz){
		html+='<option value=".'+j+'">'+j+'</option>';
	}
	html+='</select>';
	$('#juz-filter').html(html);
	
}