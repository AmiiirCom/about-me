<?php

namespace JsonBlog\Main;
require_once __DIR__ . '/bootstrap.php';

// bloginfo.json
$content = file_get_contents(__DIR__ . "/content/bloginfo.json");
$bloginfo = json_decode($content);

// skills.json
$content = file_get_contents(__DIR__ . "/content/skills.json");
$skills = json_decode($content);

// blog.json
$content = file_get_contents(__DIR__ . "/content/blog.json");
$blog = json_decode($content);

$date = date("Y");

$ststem = [
    "template_url" => "templates",
    "version" => 4,
    "date" => $date
];

echo $twig->render('index.html', ['bloginfo' => $bloginfo,'skills' => $skills, 'system' => $ststem, 'blog' => $blog]);