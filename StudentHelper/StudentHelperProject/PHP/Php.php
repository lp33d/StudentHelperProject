<?php
class RoomFactory {
  
 public RoomFactory create($room_type)
 {
   // Some post data validation logic here
   
   // Now we need to instantiate the rooms 
   switch($room_type)
   {
     case 'Libary':
       $Room = new Room_Libary($post['sku'],$post['name']);
       break;
       
     case 'LecHall':
       $Room = new Room_LecHall($post['sku'],$post['name']);
       break;
	   
     case 'ClassRoomP':
       $Room = new Room_ClassRoomP($post['sku'],$post['name']);
       break;
	   
	 case 'ClassRoom':
       $Room = new Room_ClassRoom($post['sku'],$post['name']);
       break;
	   
	 case 'MathCafe':
       $Room = new Room_MathCafe($post['sku'],$post['name']);
       break;
	   
	 case 'LecOffice':
       $Room = new Room_LecOffice($post['sku'],$post['name']);
       break;
	   
   }
   
   // Do something with the post data and save the product ...
 
   return $product->getType();
 }
}
