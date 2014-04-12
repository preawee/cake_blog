<?Php

class PhotosController extends AppController {
    public $helpers = array('Html','Js', 'Fancybox.Fancybox'); 
       
  	
     public function index() {
 
    
   
    //finding all records in the post table and hading the response index.ctp in view 
        $this->set('photos', $this->Photo->find('all'));
    
    
    
}

}
    
    
?>
