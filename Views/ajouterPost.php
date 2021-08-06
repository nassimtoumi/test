<?php
require '../Model/Post.php';
require '../Controller/PostC.php';
session_start();
if (
    isset($_POST['category']) &&
    isset($_POST['text']) &&
    isset($_POST['sujet'])
) {
    # code...
    $username_post=$_SESSION['name'];
    $category_post=$_POST['category'];
    $text_post=$_POST['text'];
    $sujet_post=$_POST['sujet'];
    $post = new post($username_post,$category_post,$text_post,$sujet_post);
    $postC = new PostC();
    $postC->ajouterPost($post);
    header('Location: Forum.php');
}else {
    echo 'chyy';
}

