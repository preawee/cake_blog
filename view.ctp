<?php
$src1 = '<h3>Sample Inline Content</h3>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis mi eu elit tempor
				facilisis id et neque. Nulla sit amet sem sapien. Vestibulum imperdiet porta ante ac ornare.
				Nulla et lorem eu nibh adipiscing ultricies nec at lacus. Cras laoreet ultricies sem, at
				blandit mi eleifend aliquam. Nunc enim ipsum, vehicula non pretium varius, cursus ac tortor.
				Vivamus fringilla congue laoreet. Quisque ultrices sodales orci, quis rhoncus justo auctor
				in. Phasellus dui eros, bibendum eu feugiat ornare, faucibus eu mi. Nunc aliquet tempus 
				sem, id aliquam diam varius ac. Maecenas nisl nunc, molestie vitae eleifend vel, iaculis 
				sed magna. Aenean tempus lacus vitae orci posuere porttitor eget non felis. Donec lectus 
				elit, aliquam nec eleifend sit amet, vestibulum sed nunc.
			</p>';
			
		$this->Fancybox->setProperties( array( 
			 'class' => 'fancybox1',
			 'className' => 'fancybox.inline',
			 'title'=>'Inline Content',
			 'rel' => 'gallery1'
			 )
		);
		
		$this->Fancybox->setPreviewContent('Click for Inline Content');
		
		$this->Fancybox->setMainContent($src1); // the content which will be shown in Fancybox
		
		echo $this->Fancybox->output();  

?>