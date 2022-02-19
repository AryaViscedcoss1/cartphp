<?php include 'config.php';?>
<?php
 session_start();
 function normaldisplay()
 {
 
     $lcart= count($_SESSION['cart']);
    
     foreach($_SESSION['data'] as $key=>$dataincart)
     {
 
         for ($i=0;$i<$lcart;$i++)
         {
             if ($_SESSION['cart'][$i]["id"]==$dataincart)
             {
     
                 $_SESSION['cart'][$i]["quantity"]=$_SESSION['cart'][$i]["quantity"]+1;
     
             }
         }
     }
 
 }
 
function plusQuantity()
{

    $_SESSION['data'][]=$_POST['id'];
   
    $lcart= count($_SESSION['cart']);
    foreach($_SESSION['data'] as $key=>$dataincart)
    {

        for ($i=0;$i<$lcart;$i++)
        {
            if ($_SESSION['cart'][$i]["id"]==$dataincart)
            {
    
                $_SESSION['cart'][$i]["quantity"]=$_SESSION['cart'][$i]["quantity"]+1;
    
            }
        }
    }

}
function minQuantity()
{

    $_tominus=$_POST['id'];
    foreach($_SESSION['data'] as $key=>$dataincart)
    {

        
          
        if($dataincart==$_tominus)
        {

            array_splice($_SESSION['data'],$key,1);
            break;
    
        }
    }
 
  
    normaldisplay();
}

//empty cart
function emptycart()
{
    unset($_SESSION['data']);
    $_SESSION['data']=array();
    normaldisplay();

}


function productlisting($products)
{
   foreach($products as $product)
    { 
        echo'
            
            <form action="cart.php" method="post">
            <div id="product-'.$product["id"].'" class="product">
            <img src='.$product["image"].'>
            <h3 class="title"><a href="#">Product '.$product["id"].'</a></h3>
            <span>Price: $'.$product["price"].'</span>
            <input type="text" value="'.$product["id"].'" name="id" style="display:none">
            <input class="add-to-cart" type="submit" name="name" value="add to cart">
            </div>
            </form>';
    }
}