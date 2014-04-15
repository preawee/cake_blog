<div class="users">

<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>

<form class="form-inline" role="form">
  <div class="form-group">
  
  
  <?php echo $this->Form->input('username')?>
   
 
 <?php echo $this->Form->input('password')?>
    
  </div>


    
<?php echo $this->Form->end(__('SIGN IN')); ?>


<?php echo $this->Form->postLink( 'CREATE AN ACCOUNT', array('controller' => 'users', 'action' => 'index')); ?>

   	
</form>      
    	

</div>