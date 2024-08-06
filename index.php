<?php
// Define the username and password
$username = 'ccsdpd101';
$password = 'Cform*77!H';

// Check if the Authorization header is present
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    // Send headers to prompt the user for credentials
    header('WWW-Authenticate: Basic realm="My Protected Area"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Authorization required.';
    exit;
} else {
    // Check the provided credentials
    if ($_SERVER['PHP_AUTH_USER'] == $username && $_SERVER['PHP_AUTH_PW'] == $password) {
        // echo 'Welcome, authenticated user!';
    } else {
        // Send headers to prompt the user for credentials again
        header('WWW-Authenticate: Basic realm="My Protected Area"');
        header('HTTP/1.0 401 Unauthorized');
        echo 'Invalid credentials.';
        exit;
    }
}
?>

<?php
//errors
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
?>

<?php
/***
#	@ file		: index.php
#	@ location	: 
#	@ author	: vendivel
#	@ purpose	: 
# 	@ created	: 2012-01-05 0920
# 	@ modified	: 2012-08-15 1139 a-to-the-double-l-a-to-the-n 
#	@ previous	: 
#	+ 
#	+ 
***/
include ('/www/apache/htdocs/ccsd/_includes/ccsd-global.php');

# set the page parameters
$page['ribbon'] = array('Schools', $home->url . '/schools/');
$page['title'] = 'CCSDPD Complaint System';
$page['description'] = 'CCSDPD Complaint System.';

# include the site header
include ($home->inc['header']);
# include the breadcrumbs
include ($home->inc['breadcrumbs']);
?>
<style>
    .container {
        line-height: 200px;
        padding-left: 15px;

    }

    .alert {
        width: 92%;
        background-color: #FFFED5;
        border: 1px solid #E3E1AA;
        padding: 30px;
        color: #191919;
        margin-bottom: 30px;

    }

    .alert span {
        font-size: 22px;
        font-weight: bold;
    }

    .alert p {
        margin: 5px 0 0;
    }

    .alert img {
        display: block;
        margin-bottom: 10px;
    }

    .alert-primary {
        position: relative;
        padding: .75rem 1.25rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-top-color: transparent;
        border-right-color: transparent;
        border-bottom-color: transparent;
        border-left-color: transparent;
        border-radius: .25rem;
        color: #004085;
        background-color: #cce5ff;
        border-color: #b8daff;
        /* width: 460px; */
    }

    .alert-warning {
        color: #721c24;
        background-color: #f8d7da;
        border-color: #f5c6cb;
        position: relative;
        padding: .75rem 1.25rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-top-color: transparent;
        border-right-color: transparent;
        border-bottom-color: transparent;
        border-left-color: transparent;
        border-radius: .25rem;
        /* width: 460px; */
    }

    .required-field {
        color: red;
        padding-right: 5px;
    }

    input:invalid,
    textarea:invalid {
        background-color: white !important;
    }

    .simple-form input[type="date"],
    .simple-form input[type="email"],
    .simple-form input[type="phone"],
    .simple-form select {
        border: 1px solid #ccc;
        padding: 5px;
        width: 295px;
    }

    /* fix content length */
    .main-content-wrap {
        width: 90% !important;
    }

    /* org chart */
    /* RESET STYLES & HELPER CLASSES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
    :root {
        --level-1: #8dccad;
        --level-2: #f5cc7f;
        --level-3: #7b9fe0;
        --level-4: #f27c8d;
        --black: black;
    }

    /* * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
} */

    ol {
        list-style: none;
        list-style-type: none !important;
        margin-block-start: 0px !important;
        margin-block-end: 0px !important;
        margin-inline-start: 0px !important;
        margin-inline-end: 0px !important;
        padding-inline-start: 0px !important;
    }

    li {
        /* display: block !important;
    text-align: center !important; */
        /* unicode-bidi: none !important; */
    }

    /* body {
  margin: 50px 0 100px;
  text-align: center;
  font-family: "Inter", sans-serif;
} */

    .container1 {
        max-width: 1000px;
        padding: 0 10px;
        margin: 0 auto;
        text-align: center;
    }

    .rectangle {
        position: relative;
        padding: 20px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
        font-weight:bold !important;
    }


    /* LEVEL-1 STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
    .level-1 {
        width: 50%;
        margin: 0 auto 40px;
        background: var(--level-1);
    }

    .level-1::before {
        content: "";
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translateX(-50%);
        width: 2px;
        height: 20px;
        background: var(--black);
    }


    /* LEVEL-2 STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
    .level-2-wrapper {
        position: relative;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }

    .level-2-wrapper::before {
        content: "";
        position: absolute;
        top: -20px;
        left: 25%;
        width: 50%;
        height: 2px;
        background: var(--black);
    }

    .level-2-wrapper::after {
        display: none;
        content: "";
        position: absolute;
        left: -20px;
        bottom: -20px;
        width: calc(100% + 20px);
        height: 2px;
        background: var(--black);
    }

    .level-2-wrapper li {
        position: relative;
    }

    .level-2-wrapper>li::before {
        content: "";
        position: absolute;
        bottom: 100%;
        left: 50%;
        transform: translateX(-50%);
        width: 2px;
        height: 20px;
        background: var(--black);
    }

    .level-2 {
        width: 70%;
        margin: 0 auto 40px;
        background: var(--level-2);
    }

    .level-2::before {
        content: "";
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translateX(-50%);
        width: 2px;
        height: 20px;
        background: var(--black);
    }

    .level-2::after {
        display: none;
        content: "";
        position: absolute;
        top: 50%;
        left: 0%;
        transform: translate(-100%, -50%);
        width: 20px;
        height: 2px;
        background: var(--black);
    }


    /* LEVEL-3 STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
    .level-3-wrapper {
        position: relative;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-column-gap: 20px;
        width: 90%;
        margin: 0 auto;
    }

    .level-3-wrapper::before {
        content: "";
        position: absolute;
        top: -20px;
        left: calc(25% - 5px);
        width: calc(50% + 10px);
        height: 2px;
        background: var(--black);
    }

    .level-3-wrapper>li::before {
        content: "";
        position: absolute;
        top: 0;
        left: 50%;
        transform: translate(-50%, -100%);
        width: 2px;
        height: 20px;
        background: var(--black);
    }

    .level-3 {
        margin-bottom: 20px;
        background: var(--level-3);
    }


    /* LEVEL-4 STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
    .level-4-wrapper {
        position: relative;
        width: 80%;
        margin-left: 50px !important;
        margin-top: -20px !important;
    }

    .level-4-wrapper::before {
        content: "";
        position: absolute;
        top: -20px;
        left: -20px;
        width: 2px;
        height: calc(100% + 20px);
        background: var(--black);
    }

    .level-4-wrapper li+li {
        margin-top: 20px;
    }

    .level-4 {
        font-weight: normal;
        background: var(--level-4);
    }

    .level-4::before {
        content: "";
        position: absolute;
        top: 50%;
        left: 0%;
        transform: translate(-100%, -50%);
        width: 20px;
        height: 2px;
        background: var(--black);
    }


    /* MQ STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
    @media screen and (max-width: 700px) {
        .rectangle {
            padding: 20px 10px;
            font-weight:bold !important;
        }

        .level-1,
        .level-2 {
            width: 100%;
        }

        .level-1 {
            margin-bottom: 20px;
        }

        .level-1::before,
        .level-2-wrapper>li::before {
            display: none;
        }

        .level-2-wrapper,
        .level-2-wrapper::after,
        .level-2::after {
            display: block;
        }

        .level-2-wrapper {
            width: 90%;
            margin-left: 10%;
        }

        .level-2-wrapper::before {
            left: -20px;
            width: 2px;
            height: calc(100% + 40px);
        }

        .level-2-wrapper>li:not(:first-child) {
            margin-top: 50px;
        }
    }

    .content-holder h1 {
        color: #1771b7;
        font-size: 39px;
        line-height: 37px;
        font-weight: 700;
        margin: 0px !important;
        /* margin: 10px 0 20px; */
        padding: 0;
    }
    /* fix footer copyright */
    #sub-footer {
        width:100% !important;
    }
</style>

<!-- content -->
<div id="content_wrap" class="content-wrap">
    <div id="main_content_wrap" class="main-content-wrap" role="main">
        <!-- MAIN CONTENT -->
        <div id="main_content">
            <section class="content-holder">

                <div class="container1">
                    <p class="level-1 rectangle" style="font-size:30px;">CEO</p>
                    <ol class="level-2-wrapper">
                        <li>
                            <p class="level-2 rectangle">Director A</p>
                            <ol class="level-3-wrapper">
                                <li>
                                    <p class="level-3 rectangle" style="margin:0px !important;">Manager A</p>
                                    <ol class="level-4-wrapper">
                                        <li>
                                            <h4 class="level-4 rectangle">Person A</h4>
                                        </li>
                                        <li>
                                            <h4 class="level-4 rectangle">Person B</h4>
                                        </li>
                                        <li>
                                            <h4 class="level-4 rectangle">Person C</h4>
                                        </li>
                                        <li>
                                            <h4 class="level-4 rectangle">Person D</h4>
                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    <p class="level-3 rectangle" style="margin:0px !important;">Manager B</p>
                                    <ol class="level-4-wrapper">
                                        <li>
                                            <h4 class="level-4 rectangle">Person A</h4>
                                        </li>
                                        <li>
                                            <h4 class="level-4 rectangle">Person B</h4>
                                        </li>
                                        <li>
                                            <h4 class="level-4 rectangle">Person C</h4>
                                        </li>
                                        <li>
                                            <h4 class="level-4 rectangle">Person D</h4>
                                        </li>
                                    </ol>
                                </li>
                            </ol>
                        </li>
                        <li>
                            <p class="level-2 rectangle" style="font-weight:bold;">Director B</p>
                            <ol class="level-3-wrapper">
                                <li>
                                    <p class="level-3 rectangle" style="margin:0px !important;">Manager
                                        C</p>
                                    <ol class="level-4-wrapper">
                                        <li>
                                            <h4 class="level-4 rectangle">Person A</h4>
                                        </li>
                                        <li>
                                            <h4 class="level-4 rectangle">Person B</h4>
                                        </li>
                                        <li>
                                            <h4 class="level-4 rectangle">Person C</h4>
                                        </li>
                                        <li>
                                            <h4 class="level-4 rectangle">Person D</h4>
                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    <p class="level-3 rectangle" style="margin:0px !important;">Manager
                                        D</p>
                                    <ol class="level-4-wrapper">
                                        <li>
                                            <h4 class="level-4 rectangle">Person A</h4>
                                        </li>
                                        <li>
                                            <h4 class="level-4 rectangle">Person B</h4>
                                        </li>
                                        <li>
                                            <h4 class="level-4 rectangle">Person C</h4>
                                        </li>
                                        <li>
                                            <h4 class="level-4 rectangle">Person D</h4>
                                        </li>
                                    </ol>
                                </li>
                            </ol>
                        </li>
                    </ol>
                </div>


            </section>
        </div><!-- /main_content -->
    </div> <!-- /main_content_wrap -->
</div> <!-- /content-wrap -->
<?php include ($home->inc['footer']); ?>