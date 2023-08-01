<?php

$a = array(
  array(
    'id' => 5698,
    'first_name' => 'Peter',
    'last_name' => 'Griffin',
  ),
  array(
    'id' => 4767,
    'first_name' => 'Ben',
    'last_name' => 'Smith',
  ),
  array(
    'id' => 3809,
    'first_name' => 'Joe',
    'last_name' => 'Doe',
  )
);
echo "<pre>";
print_r($a);
foreach ($a as $key => $value) {
  $data[]=$value['first_name'];
}
print_r($data);
print_r(array_column($a,'first_name'));

?>