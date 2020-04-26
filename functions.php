<?php

// content
function page_title()
{
    $content = file_get_contents("content/content.json");
    $data = json_decode($content);
    print $data->page_title;
}

function favicon()
{
    $content = file_get_contents("content/content.json");
    $data = json_decode($content);
    print $data->favicon;
}

function name($strletter = "uppercase")
{
    $content = file_get_contents("content/content.json");
    $data = json_decode($content);
    if ($strletter == "uppercase") {
        $name = $data->name;
        $name = strtoupper($name);
        print $name;
    } elseif ($strletter == "lowercase") {
        $name = $data->name;
        $name = strtolower($name);
        print $name;
    }
}

function job()
{
    $content = file_get_contents("content/content.json");
    $data = json_decode($content);
    $job = $data->job;
    $job = strtoupper($job);
    print $job;
}

function profile_img()
{
    $content = file_get_contents("content/content.json");
    $data = json_decode($content);
    if ($data->profile_img == null) {
        print "assets/img/profile.jpg";
    }
    print $data->profile_img;
}

function facebook()
{
    $content = file_get_contents("content/content.json");
    $data = json_decode($content);
    $facebook = $data->facebook;
    if ($facebook !== null) {
        print "<a href='" . $facebook . "' target='_blank' class='btn btn-primary'>Facebook</a>";
    }
}

function instagram()
{
    $content = file_get_contents("content/content.json");
    $data = json_decode($content);
    $instagram = $data->instagram;
    if ($instagram !== null) {
        print "<a href='" . $instagram . "' target='_blank' class='btn btn-danger'>Instagram</a>";
    }
}

function twitter()
{
    $content = file_get_contents("content/content.json");
    $data = json_decode($content);
    $twitter = $data->twitter;
    if ($twitter !== null) {
        print "<a href='" . $twitter . "' target='_blank' class='btn btn-info'>Twitter</a>";
    }
}

function github()
{
    $content = file_get_contents("content/content.json");
    $data = json_decode($content);
    $github = $data->github;
    if ($github !== null) {
        print "<a href='" . $github . "' target='_blank' class='btn btn-dark'>Github</a>";
    }
}

function telegram()
{
    $content = file_get_contents("content/content.json");
    $data = json_decode($content);
    $telegram = $data->telegram;
    if ($telegram !== null) {
        print "<a href='" . $telegram . "' target='_blank' class='btn btn-light'>Telegram</a>";
    }
}

function bio()
{
    $content = file_get_contents("content/content.json");
    $data = json_decode($content);
    print $data->bio;
}

function terminal_title()
{
    $content = file_get_contents("content/content.json");
    $data = json_decode($content);
    $name = $data->name;
    $name = strtolower(str_replace(" ", "", $name));
    print $name;
}

function back_link()
{
    $content = file_get_contents("content/content.json");
    $data = json_decode($content);
    $back_link = $data->btns->others->back->link;
    if ($back_link == null) {
        print "#";
    }
    print $back_link;
}

// skills

function skills_display()
{
    $content = file_get_contents("content/content.json");
    $data = json_decode($content);
    $display = $data->skills->display;
    if ($display == true) {
        return true;
    } elseif ($display == false) {
        return false;
    } else {
        die("prtfolio > display not valid!");
    }
}

function skills_items_exist()
{
    $content = file_get_contents("content/content.json");
    $data = json_decode($content);
    $items = $data->skills->items;
    if (count($items) !== 0 and $items !== null) {
        return true;
    }
}

// portfolio

function portfolio_display()
{
    $content = file_get_contents("content/content.json");
    $data = json_decode($content);
    $display = $data->portfolio->display;
    if ($display == true) {
        return true;
    } elseif ($display == false) {
        return false;
    } else {
        die("prtfolio > display not valid!");
    }
}

function portfolio_items_exist()
{
    $content = file_get_contents("content/content.json");
    $data = json_decode($content);
    $items = $data->portfolio->items;
    if (count($items) !== 0 and $items !== null) {
        return true;
    }
}

// config

function theme_color()
{
    $content = file_get_contents("content/config/config.json");
    $data = json_decode($content);
    $theme_color = $data->theme_color;
    if ($theme_color == null) {
        $theme_color = "#37474f";
        print $theme_color;
    } else {
        print $theme_color;
    }
}