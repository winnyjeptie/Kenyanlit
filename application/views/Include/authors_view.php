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
      <?php foreach($information as $information){?>
     <tr>
      <td><?php echo  $information['LName'];?></td>
     <td><?php echo $information['FName'];?></td>
     <td><?php echo $information['YOB'];?></td>
     <td> <img  width=100 src="<?php echo $information['picture_url'];?>"></td>


     
      
     </tr> 

       
     <?php }?>
    </tbody>
  </table>

         	
         </div>
          <div class="col-sm-2">
         	
         </div>
    	
    </div>
	
</div>