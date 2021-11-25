<?php
$query = @unserialize (file_get_contents('http://ip-api.com/php/'));
if ($query && $query['status'] == 'success') {

echo json_encode($query['query']); //echo json_encode($res);
};

?>