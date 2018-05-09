<?php
print_r($article);exit;
foreach ($article as $key => $value) {
	echo '<h1>'.$value['title'].'</h1>';
}