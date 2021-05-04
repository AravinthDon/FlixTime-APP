<?php

    // Page URLS
    $HOME_URL =  "http://". $_SERVER['SERVER_NAME']. "/flixtime/app/";

    $SEARCH_URL = $HOME_URL. "pages/search.php";

    $MOVIES_URL = $HOME_URL. "pages/show.php?movies";

    $TVSHOWS_URL = $HOME_URL. "pages/show.php?tvshows";

    $SIGNIN_URL = $HOME_URL. "pages/signin.php";

    $root = $_SERVER['DOCUMENT_ROOT'];
    // directories
    $js = $HOME_URL."js/";
    $css = $HOME_URL."css/";
    $config = $root."flixtime/app/config/";
    $components = $root."/flixtime/app/components/";
?>