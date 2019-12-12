<?php

include_once(dirname(__FILE__) . '/connection.php');

function search($table,$search){

   return pg_fetch_all(pg_query(getDBConnection(),"select id, nome from '$table' where nome like '% $search %'"));

}