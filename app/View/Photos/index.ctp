<div class="photos index">


	
	
<?php

  $src4 = array(

             
	   	'ImageOne'   => 'http://farm7.staticflickr.com/6106/6370118965_74be1a1422_b.jpg',
		'ImageTwo'   => 'http://farm7.staticflickr.com/6091/6364162335_43a8b9bed1_b.jpg',
		'ImageThree' => 'http://farm7.staticflickr.com/6032/6370797521_74a61aec56_b.jpg',
		'ImageFour'  => 'http://farm7.staticflickr.com/6099/6359411189_0ffbb4719f_b.jpg'
	       ); 
  		  
  $this->Fancybox->setProperties( array( 
  			  		 'class' => 'fancybox4',
  			  		 'className' => 'fancybox.image',
  			  		 'title'=>'Awesomeness',
  			  		 'rel' => 'gallery1', 
  				       )
				);
  $this->Fancybox->setPreviewContent('Click to View Gallery');
  $this->Fancybox->setMainContent($src4);
  echo($this->Fancybox->output());


   
?>
    
    </div>
   <div class="actions">
    
<h1>Image  Gallery</h1> 

   </div>


