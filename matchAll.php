<?php

$resources = 'w3schools.com, regex101.com, www.regular-expressions.info';

$pattern = '/\d{2,}/';

$matches = [];

$result = preg_match_all($pattern, $resources, $matches);

if ($result) {
    echo '<p>Found ' . $result . ' matches</p>';
    echo '<pre>';
    print_r($matches);
    echo '<pre>';
}