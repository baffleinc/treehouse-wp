<?php

if( have_rows('sections') ) {

  while ( have_rows('sections') ) {

  	the_row();

	  switch( get_row_layout() ) {
	    case '3_cols' : get_template_part('builder/builder', '3-cols'); break;
	    case 'clients' : get_template_part('builder/builder', 'clients'); break;
	    case 'instagram' : get_template_part('builder/builder', 'instagram'); break;
	    case 'maps' : get_template_part('builder/builder', 'maps'); break;
	    case 'text_over_image' : get_template_part('builder/builder', 'text-over-image'); break;
	    case 'work' : get_template_part('builder/builder', 'work'); break;
	  }

  }

};