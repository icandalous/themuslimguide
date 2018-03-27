$('.features').each(function(){
      $self = $(this),
      $contentBox = $self.find('.bloc-content'),
      newHeight = $contentBox.innerHeight()*3
	  
	   $self.hover(function() {
    $(this).animate({
        height: '500px'
    }, 300);
}, function() {
    $(this).animate({
        height: '300px'
    }, 300);
});
  

 });
 
