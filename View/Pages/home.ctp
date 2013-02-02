<ul>
	<li>
		<?php
		 echo $this->Html->link(__('show all user'), 
		        array(
		            'controller' => 'users',
		            'action' => 'index'
		        ) 
		  );
		  
		  
		 		  
		  
		?>
	</li>
	
	
	<li>
		
		 <?php 
		  echo $this->Html->link(__('show all books'), 
		        array(
		            'controller' => 'books',
		            'action' => 'index'
		        ) 
		  );
		  
		  		  
		?>
	</li>
	
	
	<li>
		
		 <?php 
		  echo $this->Html->link(__('show all loans'), 
		        array(
		            'controller' => 'loans',
		            'action' => 'index'
		        ) 
		  );
		  
		  		  
		?>
	</li>
	
	<li>
		
		 <?php 
		  echo $this->Html->link(__('show all categories'), 
		        array(
		            'controller' => 'categories',
		            'action' => 'index'
		        ) 
		  );
		  
		  		  
		?>
	</li>
	
	
	
	
	
</ul>