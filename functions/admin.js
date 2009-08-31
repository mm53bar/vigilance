jQuery(document).ready(function() {
 // hides as soon as the DOM is ready
  jQuery('div.v-option-body').hide();
 // shows on clicking the noted link
  jQuery('h3').click(function() {
		jQuery(this).toggleClass("open");
		jQuery(this).next("div").toggle();
		return false;
  });	
});