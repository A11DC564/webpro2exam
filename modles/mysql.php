<?php

class mysql {

    private $conn;
    private $my_db;
    private $result;
    
    public function __construct() {
        $db_server = 'localhost';
        $db_user = 'root';
        $db_pass = '';
        $db_name = 'a11dc564';
        $this->conn = mysql_pconnect($db_server,$db_user,$db_pass);
        $this->my_db = mysql_select_db($db_name,  $this->conn);
        }
        
        public function runsql($sql){
            $sql = $this->cleanstr($sql);
            mysql_query("SET NAMES 'utf8'",  $this->conn);
            if(mysql_query($sql, $this->conn))
            {
                return TRUE;
            } else {
                return FALSE;
            }
        }
        
        public function query($sql){
            $sql = $this->cleanstr($sql);
            mysql_query("SET NAMES 'utf8'",  $this->conn);
            $this->result = mysql_query($sql, $this->conn);
            $resuly = array();
        while ($array = $this->next())
        {
            array_push($resuly, $array);
        }
        return $resuly;
        }
        
        public function next(){
            return @$row = mysql_fetch_array($this->result);        
        }
        
        public function close(){
            mysql_free_result($this->result);
            mysql_close($this->conn);
        }

        private function cleanstr($str){
        if (get_magic_quotes_gpc()){
            $str = stripslashes($str);
            }
        $str = htmlspecialchars($str);
        return $str;
	}
}
?>
