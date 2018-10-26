<?php
  session_start();
  if(!isset($_SESSION['login'])) {
    header('LOCATION:index.php'); die();
  }
?>
<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="MobileOptimized" content="width" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Clean Desk Instructor</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="style/public/stylesheets/app.css">

  </head>
  <body>
    <div id="app">
      <?php
      $tips = array(
        // 'A clean desk makes you look more professional – Having a tidy desk projects an image of competence. We’ve all seen that co-worker’s desk scattered with dirty coffee cups, food scraps and mounds of clutter. A professional person takes pride in his or her appearance, whether it’s your outfit of your desk.',
        // 'A clean desk makes you more efficient - Knowing where things are keeps you on top of your game. People who pile paperwork often obscure items underneath the stacks, resulting in wasted time trying to find what they are looking for.',
        // 'A clean desk helps keeping sensitive information save - If you are dealing with sensitive information, leaving it sitting around on your desk can put you or your company at risk. “Stacks of visible papers cause privacy concerns in many industries, particularly healthcare,” says Melissa Gratias, owner of MBG Organizing Solutions in Signal Mountain, Tennessee.',
        'Filing things where they belong creates less surface clutter—and ensures you know where they’re at when you need them.',
        'Have a Trash Can Within Reach – If you have to get up from your desk to reach the trash, then it is too far away. Make sure that you can easily and quickly reach the trash from your chair.',
        // 'Minimize Incoming Paper – Stop that incoming paper flood, or at least minimize it to the extent possible. Eliminate unnecessary subscriptions, reduce the number of paper reports and memos. If you don’t need something in hard copy, then stop it from coming to your desk.',
        // 'A clean desk reduces stress - A place for everything and everything in its place. When you are organized you can spend more time concentrating on work rather than feeling stressed because you can’t find a report due in the next 10 minutes.',
      );
      ?>
