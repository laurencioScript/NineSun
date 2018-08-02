<?php 

include 'db_connection.php';

$keyword = $_POST['key'];

$view_search = " SELECT nome FROM hoteis WHERE nome LIKE '".$keyword."%' LIMIT 5;";

$data_reader = mysqli_query($connection,$view_search);

while ($data = mysqli_fetch_row($data_reader)) {

  echo "<div class=\"row\">
          <button type=\"button\" onclick=\"pesquisarLink('$data[0]')\" id=\"btn_key\" class=\"btn btn-link\">$data[0]</button> \n
          <style>
            #keywords{
              border: 1px solid #A9A9A9;} 
            #btn_key{
              margin-left:15px;}
          </style>
        </div>";}	  

?>