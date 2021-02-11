<?php

$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Glaucio","idade":25},{"nome":"Vin\u00edcius","idade":17}]';

json_decode($json, true);

var_dump($json);

?>