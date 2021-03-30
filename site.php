<?php
session_start();

// Configure DBS
define("DB_SERVER", "");
define("DB_USERNAME", "");
define("DB_PASSWORD", "");
define("DB_NAME", "S1_SS");

// Create uplink
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// If uplink is successful, do nothing, else goto error page
if ($link == false) {
    $err = $link.mysqli_connect_error();
    echo $err;
}

// Session variables
$session = "";

// Prepare ID check statement
$ID = $_GET["id"];

$res = mysqli_query($link, "SELECT id FROM normal WHERE id=".$ID);
$row = mysqli_fetch_assoc($res);


if ($res >= 9) {
    write_file("USER_LEVEL=9/Normal/0009/0001a");
} else {
    write_file("USER_LEVEL=".$_GET["id"]."/Other/00".$_GET["id"]."/002b");
}

// Functions
function write_file($data) {
    $file = fopen(".data", 'w') or die("could not open file for writing...");
    fwrite($file, $data);
    fclose($file);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        S1-SS
    </title>

    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta content="important" itemtype="tool" typeof="ios_app" name="String Conversion Tool" id="sctv1.5.1" charset="UTF-8"/>
    <meta content="subtext" itemtype="reminder" itemref="sctv1.5.1" about="Use the tool, it is free for Apple iPhones/iPod Touch"/>
    <meta content="cmd" itemtype="addOnModule" itemref="console" id="cmd_01" accesskey="6B65793A3737303031316166642140237C666F723A636D645F30317C6
    974656D5F61646461626C653D74727565" typeof="encoded_key" about="level 1 initializer key"/>
    <!-- Imports -->
    <link rel="stylesheet" href="MainSite/configurations/css/main_site/site.css" media="screen"/>
    <link rel="stylesheet" href="MainSite/configurations/css/main_site/sub-components.css" media="screen"/>
    <script src="MainSite/configurations/js/.meta.js" type="text/javascript"></script>
    <script src=".search.js" type="text/javascript"></script>
</head>
<body class="main-body-entry" id="body-entry-mainSite">
<div class="navigation-menu">
    <!-- Look around the nav code, see if you can find anything interesting -->
    <nav class="navbar navbar-inverse navbar-fixed-top" data-spy="affix" data-offset-top="0">
        <div class="container-fluid">

            <div class="navbar-header">
                <a class="navbar-brand" href="#">S1-SS</a>
            </div>

            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Archives</a></li>
                <li><a href="#">Console Access</a></li>
                <li><a href="#">Admin Control</a></li>
                <li><a href="MainSite/upload-proxy.php">Upload Files</a></li>
            </ul>

            <form class="navbar-form navbar-left" id="search-bar">
                <div class="form-group">
                    <input type="text" id="search-bar-act" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default" onclick="search_query()">Submit</button>
            </form>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="MainSite/reg-form/register/register.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>
                <li><a href="MainSite/login-form/login_form/login.php?level=0"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </nav>
</div>

<div class="jumbotron-title">
    <div class="container">
        <div class="jumbotron">
            <h1 class="site-title">-- S1-SS --</h1>
            <p id="meta-context">[ Silents Site | V.E.C.S ]</p>
        </div>
    </div>
</div>

<div class="live-feed">
    <div id="feed">
        <h4 id="scroller-text">
            Warning: Breach detected - Intruder S1lent_2290 - All data was logged in primary admin - LEVEL: 8 ALERT ::: In other news, company sales sky rocket with patrons buying into our product, the "drug that can cure all". Fan-freakin-tastic everyone in the department
        </h4>
    </div>
</div>

<div class="company-news">
    <h3 id="news-title-label">
        - Company News Feed (FP)
    </h3>

    <div class="news-container">
        <div class="row">
            <div class="column">
                <h1 id="casual-feed">Casual</h1>
                <div id="casual">
                    <p>
                        As company stocks grow, and sales shooting through the roof, the company
                        has decided to invest in more..."pristine" methods of distributing the drug
                        that will cure all...Some people reported side effects that were...unpleasant
                        but some reported to feel fine while others reported to have felt nothing
                        at all except, maybe, for that slight tingling feeling from somewhere deep.
                        The company claims NO RESPONSIBILITY for any harm or injury caused by taking
                        this "drug" and claims to have implemented warnings such as: "talk to your
                        doctor before taking this drug" or "talk to your physician or doctor and inquire
                        about any side effects that may occur if you were to take this drug", i guess
                        some people listened and some didn't.
                    </p>
                </div>
            </div>
            <div class="column">
                <h1 id="sales-feed">Sales/Dist</h1>
                <div id="sales">
                    <p>
                        The sales for the new "drug" have increased over the last few months and the outlook
                        is good moving into the new "quarter". As previously mentioned, some people who have
                        acquired the drug have experienced side effects that were less then favorable but that
                        is NOT our problem/concern as we are not liable for what happens to those people who
                        take our drug.<br /><br />But, we may be settling something with those effected in
                        negative ways who have acquired this type of drug.<br /><br /><br /><br />
                    </p>
                </div>
            </div>
            <div class="column">
                <h1 id="other-news">Other News</h1>
                <div id="other">
                    <p>
                        There has been a breach within our website and we may be certain that some forms of
                        information was stolen such as usernames, passwords, and possible drug data. We know
                        this because the attacker exploited a(n) SQL Injection vulnerability via URL parameter
                        and then used an enumeration/sequencer/attack tool to gain access into our primary
                        database. We believe that this particular vulnerability is now fixed.<br /><br /><br /><br />
                        <br /><br />
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="company-banners">
    <br/><br/><br/>
    <h1 class="banner-title">
        - Some more Feed -
    </h1>

    <div class="content">
        <div id="content-vacc">

        </div>

        <div id="content-impl">

        </div>

        <div id="content-struct">

        </div>
    </div>
</div>

<div class="meta-diffs">
    <p id="c01">- All Rights Reserved -</p><br/><br/><br/>
    <span class="logged-in">
        <?php
        if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
            echo("Logged in.");
        }
        ?>
    </span>
</div>
</body>
</html>
