<?php


class GhostPacket {
    public $type="";
    public $sender_id="";
    public $receiver_id="";    
    public $sender_ip = "";
    public $receiver_ip = "";
    public $sender_unique_name = "";



    public function __construct($sender_id,$sender_ip){


        $this->sender_id = $sender_id;
        $this->sender_ip = $sender_ip;
  
    }
    public function toJSON(){

        return json_encode($this);;
    }
}

class PresencePacket extends GhostPacket {

    public $isOnline;

    public function __construct($sender_id,$sender_ip){

        parent::__construct($sender_id,$sender_ip);
        $this->type = "PresencePacket";
        $this->isOnline = false;
        
    }

}

class TextPacket extends GhostPacket {

    public function __construct($sender_id,$sender_ip,$message){

        parent::__construct($sender_id,$sender_ip);
        $this->type = "TextPacket";
        $this->message = $message;
    }

}




?>

<?php

    

    // $presencePacket = new PresencePacket("2324","127.0.0.1");
    // $presencePacket->isOnline = true;
    // // print_r($packet);

    // // $packet_json =  json_encode($packet);

    // // $deserializedPacket  = json_decode($packet_json);

    // echo "<br>**********Packet Content*******<br>";
    // echo $presencePacket->toJSON();
    // echo "<br>*****************<br>";
    // // print_r($deserializedPacket);


?>


