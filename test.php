<?php
   class MyDB extends SQLite3 {
      function __construct() {
         $this->open('application/databse/InitializedBudget.db');
      }
   }

   $db = new MyDB();
   if(!$db) {
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }
   $sql =<<<EOF
      DELETE from MonthlyBills;
EOF;

   $ret = $db->exec($sql);
   if(!$ret){
     echo $db->lastErrorMsg();
   } else {
      echo $db->changes(), " Record deleted successfully\n";
   }

   $db->close();
?>
