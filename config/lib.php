<?php
class database
{
    private $dbhost = "localhost";
    private $dbuser = "root";
    private $dbpass = "";
    private $dbname = "smkindog_reborn";
    private $dbport = "3306"; // default = 3306

    public $do;
    function __construct()
    {
        $this->do = new mysqli($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname, $this->dbport);
        if ($this->do->connect_errno) {
            die(sprintf("<br/><hr/><b>Connection Error: </b> %s", $this->do->connect_error));
        }
    }
}

session_start();
$db = new database();

function executeSQL($sql)
{
    global $db;
    $q = $db->do->query($sql);
    if (!$q) {
        echo sprintf("<br/><hr/><b>Something Error: </b> %s", $db->do->error);
        echo "<br/> <a href='$_SERVER[REQUEST_URI]'>Reload</a>";
        die("<br/>CEK SQL, FIELD, DATA NYA !!");
    } else {
        return $q;
    }
}
function safeData($data)
{
    global $db;
    return $db->do->real_escape_string($data);
}

?>