<?php
    include "global.php";
?>
<html>
<head>
  <title>Navigation</title>
  <?php include "head.html"; ?>
</head>
<body>
    <?php include "header.html"; ?>


    
<style>
.history a {
    background-color: #666;
    color: white;
    border-radius: 2px;
    padding: 5px;
    padding-left: 10px;
    padding-right: 10px;
    margin-right: 15px;
    text-decoration: none;
    line-height: 40px;
}


@media only screen and (max-width: 500px) {
    .search-field {
        display: none;
    }

    #in-page-search-field {
        display: inline;
        left: 0px;
        width: 100%;
    }

    #in-page-search-field input {
        width: 100%;
    }
}
</style>

<h1>Search</h1>
<form id="in-page-search-field" class="search-field" action="search.php" method="get" role="search">
    <input id="search-input" class="search-field__input" placeholder="Search" aria-label="Search" autocomplete="off" type="text" name="query">
</form>

<div class="history">
<b>Search history:</b>
<a href="">Billy</a> <a href="">Bokhylla</a> <a href="">Hyllor</a> <a href="">Böcker</a> <a href="">bakhylla</a> <a href="">Hall&nbsp;hylla</a>
</div>
