<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
  </head>
  <body>
    <!-- ==========
        NAVBAR      
     ===========-->
    <header class="navBar container-fluid" id="navbar">
      <div class="d-flex">
        <!-- menu icons -->
        <div class="menuIcon mr-2 d-lg-none">
          <i class="fa fa-bars" onclick="document.getElementById('sideNav').style.display='flex'"></i>
        </div>
        <!-- logo -->
        <div class="navLogo">MovieSlack</div>
      </div>
      <!-- search -->
      <div class="searchBar d-flex align-items-center">
        <div class="searchForm mr-3 mr-md-0">
          <!-- search form -->
          <form id="searchForm" method="get" action="<?php print site_url(); ?>" >
            <div class="searchFormWrap">
              <input type="text" name="s" id="searchFormInput" placeholder="search" />
              <button type="submit" title="search" class="searchBtn"><i class="fa fa-search"></i></button>
            </div>
            <!-- icon to hide search form on mobile -->
            <div class="searchIcon d-md-none ml-3" 
            onclick="document.getElementById('searchForm').style.display='none'">
              <i class="fa fa-close"></i>
            </div>
          </form>
        </div>
        <!-- search icon to display search form on mobile -->
        <div class="searchIcon d-md-none"
        onclick="document.getElementById('searchForm').style.display='flex';
        document.getElementById('searchFormInput').focus()">
          <i class="fa fa-search"></i>
        </div>
      </div>
    </header>