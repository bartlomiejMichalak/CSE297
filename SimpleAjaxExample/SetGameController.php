<?php
class SetGameController {  
  private $username;
  private $id;  
  private $server = "http://tertullian.cse.lehigh.edu:3000";

  public function __construct() {
  }
  public function __destruct() {  
  }
  
  
  public function createContext($data) {
       $postdata = http_build_query($data);

       $opts = array('http' =>
         array(
                'method' => 'POST',
                'header' => 'Content-type: application/x-www-form-urlencoded',
                'content' => $postdata
            )
        );

      $context = stream_context_create($opts);
      return $context;
  }
     public function login($name) {
        $jsonresult = file_get_contents("$this->server/setgameserver/login", false, $this->createContext(array('loginName' => json_encode($name))));  
        $this->id = intval(json_decode($jsonresult));
        
        $_SESSION['id'] = $this->id;
    }
  
    public function getLoginName() {
        $jsonresult = file_get_contents("$this->server/setgameserver/loginname/". $_SESSION['id']);		
        return strval(json_decode($jsonresult));
    }

   public function shuffle() {
        $jsonresult = file_get_contents("$this->server/setgameserver/shuffle", false, $this->createContext(array('id' => json_encode($this->id))));
        error_log("Shuffle: id=$this->id");                
    }
   public function addRow() {
        $jsonresult = file_get_contents("$this->server/setgameserver/addrow", false, $this->createContext(array('id' => json_encode($this->id))));
    }
    public function endGame() {
        $jsonresult = file_get_contents("$this->server/setgameserver/endgame", false, $this->createContext(array('id' => json_encode($this->id))));
    }
    public function submitSet() {
        $jsonresult = file_get_contents("$this->server/setgameserver/submitset", false, $this->createContext(array('loginname' => json_encode($this->id), 'set' => myFixedArray)));

    }
  
}
?>