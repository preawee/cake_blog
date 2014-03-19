<!-- File: /app/View/Users/index.ctp -->
<div class="users index">

<h1>Blog users</h1>
<table>
    <tr>
        <th>UserId</th>
        <th>UserName</th>
        <th>Password</th>
        <th>Role</th>
        <th>Created</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>


    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($user['User']['username'],
		array('controller' => 'users', 'action' => 'view', $user['User']['id'])); ?>
        </td>
        <td><?php echo $user['User']['password']; ?></td>
        
        <td><?php echo $user['User']['role']; ?></td>
        
        <td><?php echo $user['User']['created']; ?></td>
        
         <td>
        <?php
                echo $this->Html->link(
                    'Edit',
                    array('action' => 'edit', $user['User']['id']) 
                    // send data to User model by identify the user Id
                );
            ?>
            </td>
            <td>
            
         
             <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $user['User']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?> 
        
    </tr>
    <?php endforeach; ?>
    <?php unset($user); ?>
</table>



</div>

<div class="actions">


<div id = "addpost">
<?php echo $this->Html->link(
    'Add User',
    array('controller' => 'users', 'action' => 'add')
); ?>
</div>


	<div id = "buttonlogout">
	<h1><?php if(isset($username)) { ?>
	<h1><?php echo $this->Html->link('Log out', array('plugin'=>null,
			'admin'=>false, 'controller'=>'users', 'action'=>'logout'));
		}
			

  			 else   {  echo $this->Html->link('Log in', array('plugin'=>null,
			'admin'=>false, 'controller'=>'users', 'action'=>'login'));	}
			
			 ?>
			</h1> </h1>
	</div>



</div>


