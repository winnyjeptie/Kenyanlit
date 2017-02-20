<div class="container-fluid">

    <div class="row">
         <div class="col-sm-2">
         	
         </div>
          <div class="col-sm-8">
           <table class="table table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>YOB</th>
         <th>Book Image</th>
        
      </tr>
    </thead>
    <tbody>
      <?php foreach($information->result() as $key): ?>
     <tr>
      <td><?php echo  $key->lname ;?></td>
     <td><?php echo $key->fname ;?></td>
     <td><?php echo $key->yob ;?></td>
     <td> <img  width=100 src="<?php echo $key->picture_url ;?>"></td>


     
      
     </tr> 

       
     <?php endforeach; ?>
    </tbody>
  </table>

         	
         </div>
          <div class="col-sm-2">
         	
         </div>
    	
    </div>
	
</div>