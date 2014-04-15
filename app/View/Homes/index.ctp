
<div class="actions"> 

<div class="row1">
  <div class="col-xs-6 col-md-6">
    <?php echo $this->Html->link($this->Html->image
        ("Home.png"), array('controller'=>'homes', 'action' => 'index'), array('escape' => false));?>
  </div>
	
<div class="col-xs-6 col-md-6">
    <?php echo $this->Html->link($this->Html->image
        ("User.png"), array('controller'=>'users', 'action' => 'index'), array('escape' => false));?>
  </div>
		
  </div>  
    
    
    <div class="row2">
        
  <div class="col-xs-6 col-md-6">
    <?php echo $this->Html->link($this->Html->image
        ("Post.png"), array('controller'=>'posts', 'action' => 'index'), array('escape' => false));?>
  </div>
        
 <div class="col-xs-6 col-md-6">
    <?php echo $this->Html->link($this->Html->image
        ("Photo.png"), array('controller'=>'photos', 'action' => 'index'), array('escape' => false));?>
  </div>

     
  </div>  

        
</div>

