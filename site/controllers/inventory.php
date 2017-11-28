<?php

return function($site, $pages, $page) {
	$make = $page->children()->pluck('make', null, true);
	$model = $page->children()->pluck('model', null, true);
	$price = $page->children()->pluck('price', null, true);
	$type = $page->children()->pluck('type', null, true);
	$colour = $page->children()->pluck('colour', null, true);
	$fuel = $page->children()->pluck('fuel', null, true);
	$keys = array('make', 'model', 'type', 'price', 'colour', 'fuel');
	
	//return all children if nothing is selected
	$products = $page->children()->visible();
	
	// if there is a post request, filter the projects collection
	if(r::is('POST') && $data = get()) {
		$products = $page->children()->visible()->filter(function($child) use($keys, $data) {
			
			// loop through the post request
			foreach($data as $key => $value) {
				
				// only act if the value is not empty and the key is valid
				if($value && in_array($key, $keys)) {
					
					// return false if the child page's category and value don't match
					if(!$match = $child->$key() == $value) {
						return false;
					}
				}
			}
			
			// otherwise return the child page
			return $child;
			
		});
	}
	return compact('products', 'make', 'model', 'type', 'price', 'colour', 'fuel');
};
