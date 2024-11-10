<style>
  <?php include 'css/newproj.css'?>
</style>
<?php 
  include 'connection.php';
  $query="SELECT * FROM produit";
  $result=mysqli_query($connection,$query);
  $products=[];
  if($result->num_rows > 0){
   while($row=mysqli_fetch_assoc($result)){
    $products[]=$row;
   }
    }
foreach($products as $product){
  echo '<div class="product-card" id="product-card">
          <img src="'.$product['image'].'" alt="iphone-15 pro max">
          <div class="card-body">
            <h5>'.$product['nom_produit'].'</h5>
            <p>'.$product['description'].'</p>
            <b>Price : '.$product['price'] .' MAD</b>
            <a href="cart.php?pruct_id = '.$product['id'].'" class="btn">Add To Card</a>
          </div>
  </div>';
}
?>