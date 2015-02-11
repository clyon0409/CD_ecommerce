<style type="text/css">
  .image{   
    margin: 5px;
    display: inline-block;
    width:150px;
    height:150px;  
    border: 1px solid silver;
  }
</style>

<div class="col-xs-6 col-md-8">  
         <div class="row">
          <div class="col-md-8">
            <h3>
<?php      if($category == 0){
              echo "Showing all";
          }
          else{
            echo $imgs[0]['name'];
          }
?>              (page 2)</h3></div>
          <div class="col-md-4">
            <ul class="list-inline list-unstyled ">
              <li><a href="#">first</a></li>
              <li><a href="#">prev</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">next</a></li>
            </ul>            
          </div>
        </div>  
         <div class="row">
<?php        foreach($imgs as $img){  
?>
                <a href="/customers/product"><img class=" col-md-2 image" src=<?= "'".BASE_URL.$img['url']."'";?> alt="coming soon"></a>
<?php        }//foreach for loop         
?>       
          </div>
        </div>