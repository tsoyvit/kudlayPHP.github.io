<?php


/**
 * @var Db $db
 */

$id = $_GET['id'] ?? 0;

$post = $db->query("SELECT * FROM posts WHERE id = ? LIMIT 1", [$id])->findOrFail();



$title  = "My Blog::{$post['title']}";
require_once VIEWS . '/post.tpl.php';