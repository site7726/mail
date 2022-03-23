<?php
// Query params are: utm_term={keyword}&utm_creative={creative}&utm_campaign={campaignid}&utm_position={adposition}&utm_network={network}&utm_target={target}&utm_placement={placement}&utm_match={matchtype} 

require_once dirname(__FILE__) . '/kclient.php';
$client = new KClient('http://20.200.209.55/api.php?', 'qssjwy9xq47bcgvmqgjwhtczkqnssdw5');
$client->sendAllParams();       // to send all params from page query
$client->forceRedirectOffer();       // redirect to offer if an offer is chosen
// $client->param('sub_id_5', '123'); // you can send any params
// $client->keyword('PASTE_KEYWORD');  // send custom keyword
// $client->currentPageAsReferrer(); // to send current page URL as click referrer
// $client->disableSessions(); // to disable using session cookie (without this cookie restoreFromSession wouldn't work)
// $client->debug();              // to enable debug mode and show the errors
// $client->execute();             // request to api, show the output and continue
$client->executeAndBreak();     // to stop page execution if there is redirect or some output
?>
<!DOCTYPE html><html><head>
    <!-- Google Tag Manager -->
    <script async src="https://www.googletagmanager.com/gtm.js?id=GTM-TFKV632&gt;m_auth=NsJH3Ts1-89I8lZURwQYmw&gt;m_preview=env-1&gt;m_cookies_win=x"></script><script async src="https://www.googletagmanager.com/gtm.js?id=GTM-TZGWTGG&gt;m_auth=fCzlsmYQFAUQ_UXneGJNag&gt;m_preview=env-2&gt;m_cookies_win=x"></script><script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' });
            var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl + '>m_auth=fCzlsmYQFAUQ_UXneGJNag>m_preview=env-2>m_cookies_win=x';
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TZGWTGG');
    </script>
    <!-- End Google Tag Manager -->
    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' });
            var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl + '>m_auth=NsJH3Ts1-89I8lZURwQYmw>m_preview=env-1>m_cookies_win=x';
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TFKV632');
    </script>
    <!-- End Google Tag Manager -->


    

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Open-access publisher of peer-reviewed scientific articles across the entire spectrum of academia. Research network for academics to stay up-to-date with the latest scientific publications, events, blogs and news.">
    <meta name="author" content="Frontiers">

    <title>Frontiers | Peer Reviewed Articles - Open Access Journals</title>
    <meta property="og:title" name="Title" content="Frontiers | Peer Reviewed Articles - Open Access Journals">
    <meta property="og:description" name="Description" content="Open-access publisher of peer-reviewed scientific articles across the entire spectrum of academia. Research network for academics to stay up-to-date with the latest scientific publications, events, jobs, video lectures, blogs and news.">
    <meta name="Keywords" content="Open Access Journals">
    <meta property="og:image" content="images/logo-home.png">
    <meta property="og:site_name" name="site_name" content="Frontiers">
    <meta property="og:type" content="website">

        <link href="https://static.frontiersin.org/navigation-plugins/footer/css" rel="stylesheet">
            <link href="https://static.frontiersin.org/navigation-plugins/header/css" rel="stylesheet">


    <link rel="shortcut icon" href="favicon_16x16.ico" type="image/x-icon">

    <link href="css/font-awesome.css" rel="stylesheet">

    <link href="css/museo-sans.css" rel="stylesheet">

    <link href="css/museo-slab.css" rel="stylesheet">


    <link href="https://static.frontiersin.org/areas/home/css/vendors?v=h8uZK9pQCWmI26TMVNpQqIi4rImyMe1UBSMs_u9eeoo1" rel="stylesheet">

    <link href="https://static.frontiersin.org/areas/home/css/app?v=oobPmC8F7U3yKH5TNJ0ThTLUzt1Z3XjU0XQn1KpJs7s1" rel="stylesheet">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">

.top-news .image-holder{background: url('images/home-carousel-desktop-1.png');}
@media only screen and (max-width: 640px) {.top-news .text-holder{background: url('images/home-carousel-mobile-1.jpg')no-repeat 20px 55px; }}
.impact .image-holder{background: url('images/home-carousel-desktop-7.jpg');}
@media only screen and (max-width: 640px) {.impact .text-holder{background: url('images/home-carousel-mobile-7.png')no-repeat 20px 55px; }}
.journals .image-holder{background: url('images/home-carousel-desktop-2.jpg');}
@media only screen and (max-width: 640px) {.journals .text-holder{background: url('images/home-carousel-mobile-2.jpg')no-repeat 20px 55px; }}
.loop .image-holder{background: url('images/home-carousel-desktop-4.png');}
@media only screen and (max-width: 640px) {.loop .text-holder{background: url('images/home-carousel-mobile-4.jpg')no-repeat 20px 55px; }}
.topics .image-holder{background: url('images/home-carousel-desktop-3.jpg');}
@media only screen and (max-width: 640px) {.topics .text-holder{background: url('images/home-carousel-mobile-3.png')no-repeat 20px 55px; }}
.review .image-holder{background: url('images/home-carousel-desktop-6.jpg');}
@media only screen and (max-width: 640px) {.review .text-holder{background: url('images/home-carousel-mobile-6.png')no-repeat 20px 55px; }}
.young .image-holder{background: url('images/home-carousel-desktop-9.png');}
@media only screen and (max-width: 640px) {.young .text-holder{background: url('images/home-carousel-mobile-9.png')no-repeat 20px 55px; }}
</style>
</head>
<body class="home">
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TZGWTGG&gt;m_auth=fCzlsmYQFAUQ_UXneGJNag&gt;m_preview=env-2&gt;m_cookies_win=x" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TFKV632&gt;m_auth=NsJH3Ts1-89I8lZURwQYmw&gt;m_preview=env-1&gt;m_cookies_win=x" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->


        <div data-navigation-plugin="header"></div>
        <script src="https://static.frontiersin.org/navigation-plugins/header/js"></script>

    <div id="wrapper">
        <div class="page-container">
            



<header>
    <div id="journal-header" class="journal-home" style="position: relative;">
        <div class="container-fluid main-container-xxl">

                <table id="logo-table" style="width:60%;">
                    <tbody>
                        <tr>
                            <td class="left-cell logo-home" style="width:50%;" valign="bottom" align="center">
                                <div class="pull-right">
                                    
                                    <img style="min-width:263px;max-width:263px;" src="fonts/logo-home.svg">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

        </div>
    </div>

    <div class="journal-actions clearfix">
        <div class="container-fluid main-container-xxl">
            <div class="row">

                <div class="col-md-4 col-md-push-4 col-sm-12 col-sm-push-0">
                    <div class="search-field clearfix">
                        <form class="form-inline">
                            <input type="text" autocomplete="off" class="form-control" id="search" placeholder="Search for articles, people and more...">
                            <a class="btn btn-defaul btn-search"><i class="fa fa-search"></i></a>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 col-md-pull-4 col-sm-6 col-sm-pull-0">
                    <div class="btn-home clearfix">
                        <button type="button" id="main_submit_btn" data-href="https://www.frontiersin.org/submissioninfo" class="btn btn-default btn-submit">
                            Submit <span class="hidden-md hidden-sm hidden-xs">your manuscript</span>
                        </button>

                        <button type="button" id="recommend_btn" data-href="https://www.frontiersin.org/recommend-to-librarian" class="btn btn-default lighter dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            Recommend to librarian
                        </button>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="title-wrapper" style="margin: 0px; padding: 0px;">
                            <ul class="list-unstyled list-inline pull-right" style>

                                <li class="text-right">
                                    <span class="title-label text-right">Online Journals</span>
                                </li>
                                <li class="text-right">
                                    <span class="title-number">139</span>
                                </li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="boxed clearfix">
    <div class="main clearfix">
        <main class="news-holder cf clearfix ">
    <div class="container-fluid main-container-xxl clearfix">
        <div class="row">
            <div class="col-md-12">
                <div class="news-headlines-container clearfix">
                    <ul class="news-headlines list-unstyled">
                            <li class="selected">2021 impact metrics</li>
                            <li class>Coronavirus Knowledge Hub</li>
                            <li class>Diversity, inclusivity & Equity</li>
                            <li class>Policy Labs</li>
                            <li class>Top article collections</li>
                            <li class>Fast, rigorous review</li>
                            <li class>Outreach to kids</li>
                        <!-- li.highlight gets inserted here -->
                    </ul>
                </div><!-- /.news-headlines-container -->
                <div class="news-preview carousel-texts">
                        <div class="news-content top-news">
                            <div class="text-holder animated slideInDown">
                                <h3><span>2021 impact metrics</span></h3>
                                <h2 class="carousel-title">
                                    <span>
                                            <a class="carousel-title-link" href="https://www.frontiersin.org/about/impact?utm_source=WEB&utm_medium=hpage-carousel&utm_campaign=impact2021"><h1><span>Your impact matters</span></h1></a>
                                    </span>
                                </h2>
                                <div class="short-text">
                                    <p><span></span></p>
<p><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><strong><span class="fa fa-angle-right"><span class="bullet-span"></span></span>3rd most-cited</strong> publisher</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></p>
<p><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span class="fa fa-angle-right"><span class="bullet-span"></span></span><strong>1.4 billion</strong> article views and downloads</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></p>
<p><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span class="fa fa-angle-right"><span class="bullet-span"></span></span><strong>2.2 million </strong>article citations</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></p>
<p><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span class="fa fa-angle-right"><span class="bullet-span"></span></span><strong>1.6 million </strong>news and social media mentions </span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></p>
                                    <p class="button">
                                            <button type="button" data-href="https://www.frontiersin.org/about/impact?utm_source=WEB&utm_medium=hpage-carousel&utm_campaign=impact2021" class="btn btn-default carousel-btn-primary">Explore latest metrics</button>
                                                                            </p>
                                </div>
                            </div>
                        </div>
                        <div class="news-content impact">
                            <div class="text-holder animated slideInDown">
                                <h3><span>Coronavirus Knowledge Hub</span></h3>
                                <h2 class="carousel-title">
                                    <span>
                                            <a class="carousel-title-link" href="https://coronavirus.frontiersin.org/?utm_campaign=sub-cov-cco&utm_medium=fhpc&utm_source=fweb"><h1><span>Trusted information and analysis on COVID-19</span></h1></a>
                                    </span>
                                </h2>
                                <div class="short-text">
                                    <p><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span></span><span class="fa fa-angle-right"><span class="bullet-span"></span></span>The latest <strong>research articles </strong>and<strong> collections</strong></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></p>
<p><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span class="fa fa-angle-right"><span class="bullet-span"></span></span><strong>Interviews </strong>with leading experts</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></p>
<p><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span class="fa fa-angle-right"><span class="bullet-span"></span></span>Coronavirus<strong> funding and data resources</strong></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></p>
                                    <p class="button">
                                            <button type="button" data-href="https://coronavirus.frontiersin.org/?utm_campaign=sub-cov-cco&utm_medium=fhpc&utm_source=fweb" class="btn btn-default carousel-btn-primary">Explore hub</button>
                                                                            </p>
                                </div>
                            </div>
                        </div>
                        <div class="news-content journals">
                            <div class="text-holder animated slideInDown">
                                <h3><span>Diversity, inclusivity & Equity</span></h3>
                                <h2 class="carousel-title">
                                    <span>
                                            <a class="carousel-title-link" href="https://diversity.frontiersin.org/?utm_medium=fhpc&utm_source=fwebb&utm_medium=fmain&utm_campaign=sub-diversity-cco"><h1><span>Research on eradicating racial injustice and social inequalities</span></h1></a>
                                    </span>
                                </h2>
                                <div class="short-text">
                                    <p><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span class="fa fa-angle-right"><span class="bullet-span"></span></span>Our <strong>Diversity and Equity Statement</strong></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></p>
<p><span><span><span><span><span class="fa fa-angle-right"><span class="bullet-span"></span></span>Latest <strong>collections </strong>and<strong> articles</strong> on<strong> </strong>race inequalities</span></span></span></span></p>
                                    <p class="button">
                                            <button type="button" data-href="https://diversity.frontiersin.org/?utm_medium=fhpc&utm_source=fwebb&utm_medium=fmain&utm_campaign=sub-diversity-cco" class="btn btn-default carousel-btn-primary">Explore hub</button>
                                                                            </p>
                                </div>
                            </div>
                        </div>
                        <div class="news-content loop">
                            <div class="text-holder animated slideInDown">
                                <h3><span>Policy Labs</span></h3>
                                <h2 class="carousel-title">
                                    <span>
                                            <a class="carousel-title-link" href="https://policylabs.frontiersin.org?utm_source=fweb&utm_medium=fhpc&utm_campaign=policy-labs"><h1><span>Rethinking the world with science</span></h1></a>
                                    </span>
                                </h2>
                                <div class="short-text">
                                    <p><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><strong><span class="fa fa-angle-right"><span class="bullet-span"></span></span>Connecting policymakers and scientists </strong>on the biggest challenges we face today. </span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></p>
<p><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><strong><span class="fa fa-angle-right"><span class="bullet-span"></span></span>In depth conversations and analysis</strong> with leading experts in policy, business, and academia.</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></p>
                                    <p class="button">
                                            <button type="button" data-href="https://policylabs.frontiersin.org?utm_source=fweb&utm_medium=fhpc&utm_campaign=policy-labs" class="btn btn-default carousel-btn-primary">Explore hub</button>
                                                                            </p>
                                </div>
                            </div>
                        </div>
                        <div class="news-content topics">
                            <div class="text-holder animated slideInDown">
                                <h3><span>Top article collections</span></h3>
                                <h2 class="carousel-title">
                                    <span>
                                            <a class="carousel-title-link" href="https://www.frontiersin.org/research-topics?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-cco-hpfea-rt"><h1><span>Research Topics: shape the future of your field</span></h1></a>
                                    </span>
                                </h2>
                                <div class="short-text">
                                    <p><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span class="fa fa-angle-right"><span class="bullet-span"></span></span>Peer-reviewed <strong>article collections</strong> around themes of cutting-edge research</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></p>
<p><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span class="fa fa-angle-right"><span class="bullet-span"></span></span><strong>Unite</strong> experts, <strong>stimulate </strong>collaboration and <strong>accelerate </strong>science</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></p>
<p><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span class="fa fa-angle-right"><span class="bullet-span"></span></span>Over <strong>480,000</strong> contributing authors and</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span><span><span><span><span> </span></span></span></span><span><span><span><span><strong>1 billion </strong>article views and downloads<strong>  </strong></span></span></span></span></span></span></span></span></span></span></span></span></p>
                                    <p class="button">
                                            <button type="button" data-href="https://www.frontiersin.org/research-topics?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-cco-hpfea-rt" class="btn btn-default carousel-btn-primary">Browse</button>
                                                                                    <button type="button" data-href="https://www.frontiersin.org/about/research-topics?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-cco-hpfea-rt" class="btn btn-default carousel-btn-secondary">Learn more</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="news-content review">
                            <div class="text-holder animated slideInDown">
                                <h3><span>Fast, rigorous review</span></h3>
                                <h2 class="carousel-title">
                                    <span>
                                            <a class="carousel-title-link" href="https://www.frontiersin.org/about/review-system?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-cco-hpfea-review"><h1><span>Collaborative peer review</span></h1></a>
                                    </span>
                                </h2>
                                <div class="short-text">
                                    <p><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span class="fa fa-angle-right"><span class="bullet-span"></span></span> <strong>Rigorous, constructive, efficient and transparent </strong>peer review</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></p>
<p><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span class="fa fa-angle-right"><span class="bullet-span"></span></span><span style="line-height: normal;"> <strong>Reviewers and handling editor acknowledged</strong> on all published articles</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></p>
<p><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span><span class="fa fa-angle-right"><span class="bullet-span"></span></span><strong> 90 days</strong> from submission to acceptance</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></p>
                                    <p class="button">
                                            <button type="button" data-href="https://www.frontiersin.org/about/review-system?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-cco-hpfea-review" class="btn btn-default carousel-btn-primary">Learn more</button>
                                                                            </p>
                                </div>
                            </div>
                        </div>
                        <div class="news-content young">
                            <div class="text-holder animated slideInDown">
                                <h3><span>Outreach to kids</span></h3>
                                <h2 class="carousel-title">
                                    <span>
                                            <a class="carousel-title-link" href="https://kids.frontiersin.org/?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-cco-hpfea-fym"><h1><span>Bringing research to younger audiences</span></h1></a>
                                    </span>
                                </h2>
                                <div class="short-text">
                                    <p><span><span><span><span><span><span><span><span><span><span><span><span class="fa fa-angle-right"><span class="bullet-span"></span></span>Open-access<strong> scientific journal</strong> reviewed by young people</span></span></span></span></span></span></span></span></span></span></span></p>
<p><span><span><span><span><span><span><span><span><span><span><span><span class="fa fa-angle-right"><span class="bullet-span"></span></span>Connects renowned scientists directly with a<strong> young audience</strong></span></span></span></span></span></span></span></span></span></span></span></p>
<p><span><span><span><span><span><span><span><span><span><span><span><span class="fa fa-angle-right"><span class="bullet-span"></span></span>Brings <strong>cutting-edge research</strong> to the next generation</span></span></span></span></span></span></span></span></span></span></span></p>
                                    <p class="button">
                                            <button type="button" data-href="https://kids.frontiersin.org/?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-cco-hpfea-fym" class="btn btn-default carousel-btn-primary">Visit the website</button>
                                                                                    <button type="button" data-href="https://kids.frontiersin.org/about/journal?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-cco-hpfea-fym" class="btn btn-default carousel-btn-secondary">Learn more</button>
                                    </p>
                                </div>
                            </div>
                        </div>


                </div><!-- /.news-preview (for carousel text) -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.main-container-xxl -->
    <div class="news-preview carousel-images">
            <div class="news-content top-news">
                <div class="image-holder animated slideInRight">
                </div>
            </div>
            <div class="news-content impact">
                <div class="image-holder animated slideInRight">
                </div>
            </div>
            <div class="news-content journals">
                <div class="image-holder animated slideInUp">
                </div>
            </div>
            <div class="news-content loop">
                <div class="image-holder animated slideInRight">
                </div>
            </div>
            <div class="news-content topics">
                <div class="image-holder animated slideInRight">
                </div>
            </div>
            <div class="news-content review">
                <div class="image-holder animated slideInRight">
                </div>
            </div>
            <div class="news-content young">
                <div class="image-holder animated slideInRight">
                </div>
            </div>
    </div>


</main>    
        <section class="home-bottom content" id="content">
    <div class="container-fluid main-container-xxl clearfix">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-title pull-left">Featured</h2>
                <ul class="list-unstyled list-inline clearfix tabby sorting featured-filter">
                    <li class="sort selected" data-filter="all">
                        <a class="featured-stories-filter" href="javascript:void(0)">All</a>
                    </li>
                        <li class="sort" data-filter="journal">
                            <a class="featured-stories-filter" href="javascript:void(0)">Journals</a>
                        </li>
                                            <li class="sort" data-filter="article">
                            <a class="featured-stories-filter" href="javascript:void(0)">Articles</a>
                        </li>
                                            <li class="sort" data-filter="research-topic">
                            <a class="featured-stories-filter" href="javascript:void(0)">Research Topics</a>
                        </li>
                                            <li class="sort" data-filter="blog">
                            <a class="featured-stories-filter" href="javascript:void(0)">Blog</a>
                        </li>
                </ul>
            </div>
        </div>
        <div class="row featured-items hidden" id="featured_details">
                <article class="col-xs-6 col-md-3 research-topic">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-897.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">Research Topics</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://blog.frontiersin.org/2022/03/16/break-the-bias-research-topics-celebrating-the-findings-of-female-scientists/">
                                            Break the Bias: Research Topics celebrating the findings of female scientists
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Break the gender bias in research by reading the work of these incredible female scientists. With collective views of half a million, exploring topics spanning from signal processing and infectious disease to materials and gynecological oncology.</p><p></p>
                                <a href="https://blog.frontiersin.org/2022/03/16/break-the-bias-research-topics-celebrating-the-findings-of-female-scientists/" class="more-link featured-stories-link">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 article">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-899.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">Article</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/articles/10.3389/fmats.2022.809226/full?utm_source=EM&utm_medium=web&utm_campaign=horizons_materials">
                                            Capillary Effects in Fiber Reinforced Polymer Composite Processing: A Review
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>This article is part of the Horizons in Materials Research Topic and covers developments in the identification, measurement and exploitation of capillary effects in composite manufacturing.</p><p></p>
                                <a href="https://www.frontiersin.org/articles/10.3389/fmats.2022.809226/full?utm_source=EM&utm_medium=web&utm_campaign=horizons_materials" class="more-link featured-stories-link">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 blog">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-896.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">ebooks</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://blog.frontiersin.org/2022/03/16/top-ebooks-releases-from-female-scientists/">
                                            Top ebook releases from female scientists
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>In honor of Women’s History Month, we gathered the top ebooks released in the past year by female editors, including special issues on the educational response to Covid, restoring landscapes, and molecular mechanisms in kidney disease.</p><p></p>
                                <a href="https://blog.frontiersin.org/2022/03/16/top-ebooks-releases-from-female-scientists/" class="more-link featured-stories-link">
                                    Download here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 research-topic">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-898.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">Research Topic</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/research-topics/21261/horizons-in-materials?utm_source=EM&utm_medium=web&utm_campaign=horizons_materials">
                                            Horizons in Materials
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Explore articles edited by the Field Chief Editor of Frontiers in Materials. This article collection reflects on the latest advances in theory, experiment, and methodology with applications to compelling problems.</p><p></p>
                                <a href="https://www.frontiersin.org/research-topics/21261/horizons-in-materials?utm_source=EM&utm_medium=web&utm_campaign=horizons_materials" class="more-link featured-stories-link">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 research-topic">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-890.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">Research Topics</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://blog.frontiersin.org/2022/02/15/valentines-day-research-topics-on-love-relationships-and-intimacy/">
                                            Valentine’s Day: Research Topics on love, relationships, and intimacy
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>This Valentine’s Day we’re falling for Research Topics. What’s not to love about the hottest research edited by top scientists like you? With collective views of over 1.8 million, researchers explored topics related to intimacy.</p><p></p>
                                <a href="https://blog.frontiersin.org/2022/02/15/valentines-day-research-topics-on-love-relationships-and-intimacy/" class="more-link featured-stories-link">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 blog">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-889.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">ebooks</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://blog.frontiersin.org/2022/02/11/frontiers-ebook-releases-february-2022/">
                                            Frontiers ebook releases: February 2022
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Download the top ebook releases from this month, including special issues on  advances in bone remodeling, mental health implications of Covid-19 on professional athletes, recent discoveries in soil-based ecosystem services and many more!</p><p></p>
                                <a href="https://blog.frontiersin.org/2022/02/11/frontiers-ebook-releases-february-2022/" class="more-link featured-stories-link">
                                    Download here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-886.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">Events</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.youtube.com/watch?v=_x12olpr7MU">
                                            Frontiers for Young Minds livestream
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>For the Dubai Expo, Frontiers for Young Minds partnered with Swiss School of Public Health to present the latest findings on Ocean Heat Waves and a panel of five kids from the UAE will provide live peer review, followed by notable speakers.</p><p></p>
                                <a href="https://www.youtube.com/watch?v=_x12olpr7MU" class="more-link featured-stories-link">
                                    Watch now
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 research-topic">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-885.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">Research Topics</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://blog.frontiersin.org/2022/01/17/top-10-research-topics-from-2021/">
                                            Top 10 Research Topics from 2021
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Find the answers to your biggest research questions from 2021. With collective views of over 3.7 million, researchers explored topics spanning from nutritional immunology and political misinformation to sustainable agriculture and the human-dog bond.</p><p></p>
                                <a href="https://blog.frontiersin.org/2022/01/17/top-10-research-topics-from-2021/" class="more-link featured-stories-link">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 blog">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-884.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">ebooks</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://blog.frontiersin.org/2022/01/14/frontiers-ebook-releases-january-2022/">
                                            Frontiers ebook releases: January 2022
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Download the top ebook releases from this month, including special issues on discoveries in amino acid metabolism in plants, trends in the largest Caribbean marine protected area, the implications of ethical requirements on AI and many more! </p><p></p>
                                <a href="https://blog.frontiersin.org/2022/01/14/frontiers-ebook-releases-january-2022/" class="more-link featured-stories-link">
                                    Download here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 research-topic">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-883.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">Research Topics</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://blog.frontiersin.org/2021/12/09/home-for-the-holidays-research-topics-on-family-dynamics/">
                                            Home for the holidays: Research Topics on family dynamics
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>The holidays are often a time spent with family, but how exactly do family dynamics work? Explore collections spanning from parenting burnout to understanding young individuals’ autonomy.</p><p></p>
                                <a href="https://blog.frontiersin.org/2021/12/09/home-for-the-holidays-research-topics-on-family-dynamics/" class="more-link featured-stories-link">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 blog">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-882.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">ebook</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://blog.frontiersin.org/2021/12/09/top-21-frontiers-ebook-releases-from-2021/">
                                            Top 21 Frontiers ebook releases from 2021
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Download the top ebook releases from the past year including special issues on cannabinoid therapeutics, the evolution of monogamy, the implications of heart rate variability on health and well-being, and many more!</p><p></p>
                                <a href="https://blog.frontiersin.org/2021/12/09/top-21-frontiers-ebook-releases-from-2021/" class="more-link featured-stories-link">
                                    Download here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="Image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-894.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/quantum-science-and-technology?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-quantum-science-and-technology">
                                            How will the integration of quantum technology enhance modern society?
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Research in Quantum Science and Technology aims to solve societal challenges by improving the quality of life via developments in the areas of computing, communications, sensing and imaging.</p><p></p>
                                <a href="https://www.frontiersin.org/journals/quantum-science-and-technology?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-quantum-science-and-technology" class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="Image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-895.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/materials/sections/metals-and-alloys?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-metals-and-alloys">
                                            What role can metallic materials play in meeting global demands for sustainable energy and healthcare?
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>The journal will focus on fundamental Materials Science and commercial applications. It will publish experimental work as well as theoretical and modeling work, and aims to attract submissions that combine the two.</p><p></p>
                                <a href="https://www.frontiersin.org/journals/materials/sections/metals-and-alloys?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-metals-and-alloys" class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="Image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-891.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/nuclear-engineering?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-nuclear-engineering">
                                            How will new models help to optimise energy consumption and use?
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>This journal will facilitate the development of timely and safe science-based engineering solutions for addressing the climate change challenge based on advances in nuclear engineering.</p><p></p>
                                <a href="https://www.frontiersin.org/journals/nuclear-engineering?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-nuclear-engineering" class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="Image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-888.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/transplantation?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-transplantation">
                                            How have the latest instruments and technologies evolved in the field of transplantation?
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Ths journal will provide a global forum for innovative bench-to-bedside tissue rejuvenation strategies, to address the shortage and quality of donor organs. </p><p></p>
                                <a href="https://www.frontiersin.org/journals/transplantation?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-transplantation" class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-881.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/gastroenterology?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-gastroenterology">
                                            Can new technologies help to address gut disorders?
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>A new research platform exploring how our lifestyle, genetics and the environment can affect our digestive health and the complex causes of gastrointestinal conditions.</p><p></p>
                                <a href="https://www.frontiersin.org/journals/gastroenterology?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-gastroenterology" class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="Image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-887.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/stroke?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-stroke">
                                            What are the leading causes of stroke?
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>This journals aims to publish experimental, translational and clinical studies, and reviews that contribute to the knowledge of stroke, its causes, manifestations, diagnosis, and management.</p><p></p>
                                <a href="https://www.frontiersin.org/journals/stroke?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-stroke" class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 research-topic">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-880.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">Research Topics</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://blog.frontiersin.org/2021/11/19/restoring-our-planet-research-topics-on-cop26/">
                                            Restoring our planet: Research Topics on COP26
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>With all eyes on the UN Climate Change Conference (COP26) this month, we have curated a list of our best Research Topics addressing the four goals of the conference.</p><p></p>
                                <a href="https://blog.frontiersin.org/2021/11/19/restoring-our-planet-research-topics-on-cop26/" class="more-link featured-stories-link">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 research-topic">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-878.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">ebooks</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://blog.frontiersin.org/2021/11/18/frontiers-ebook-releases-november-2021/">
                                            Frontiers eBook releases: November 2021
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Download this month’s new releases including recent discoveries in biosafety of genetically modified organisms, how non-human animals perceive and interact with humans, the implications of e-vaping for Covid-19 patients and many more!</p><p></p>
                                <a href="https://blog.frontiersin.org/2021/11/18/frontiers-ebook-releases-november-2021/" class="more-link featured-stories-link">
                                    Download here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-877.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/soft-matter?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-soft-matter">
                                            Will innovative biodegradable polymers help eradicate single-use plastics?
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>A new research platform to investigate how soft matter will continue to shape our future in areas such as food engineering, cosmetics manufacturing and consumer electronics.</p><p></p>
                                <a href="https://www.frontiersin.org/journals/soft-matter?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-soft-matter" class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-876.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/neuroimaging?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-neuroimaging">
                                            Neuroimaging innovation to find the cause of cognitive disorders
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>A new research platform on the latest tools mapping brain conditions and underlying processes and looking for solutions to provide more affordable neurological diagnostics for all.</p><p></p>
                                <a href="https://www.frontiersin.org/journals/neuroimaging?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-neuroimaging" class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-875.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/drug-safety-and-regulation?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-drug-safety-and-regulation">
                                            What new solutions can be found for enhancing drug safety?
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>The new journal will explore the challenges broght about by novel drugs entering the market faster than ever before requiring increased surveillance and monitoring.</p><p></p>
                                <a href="https://www.frontiersin.org/journals/drug-safety-and-regulation?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-drug-safety-and-regulation" class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 research-topic">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-869.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">Research Topics</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://blog.frontiersin.org/2021/10/11/reach-for-the-stars-research-topics-on-space-exploration/">
                                            Reach for the stars: Research Topics on space exploration
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>With recent advances in commercial space exploration, we have curated a list of our best Research Topics on outer space. Explore collections edited by experts from NASA, Goddard Space Flight Center, European Space Agency and many more. </p><p></p>
                                <a href="https://blog.frontiersin.org/2021/10/11/reach-for-the-stars-research-topics-on-space-exploration/" class="more-link featured-stories-link">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="Image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-872.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/food-science-and-technology?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-food-science-and-technology">
                                            How will innovations in food science and technology impact future production?
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>This journal aims to expand the field of research on areas including food biotechnology, food safety and new trends in food design and production. </p><p></p>
                                <a href="https://www.frontiersin.org/journals/food-science-and-technology?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-food-science-and-technology" class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="Image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-874.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/biomaterials-science?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-biomaterials-science">
                                            Will 3D-printed biomaterials provide more cost-effective and personalized care?
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Inviting research in this field to deepen our understanding of the structure-property relationships in biological and bio-inspired, hierarchical biomaterials.</p><p></p>
                                <a href="https://www.frontiersin.org/journals/biomaterials-science?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-biomaterials-science" class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="Image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-873.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/epidemiology?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-epidemiology">
                                            How can new epidemiological research methods improve global health?
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>This journal invites research globally including describing health conditions, investigating underlying causes of health states and diseases and predicting health outcomes or risk conditions. </p><p></p>
                                <a href="https://www.frontiersin.org/journals/epidemiology?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-epidemiology" class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 research-topic">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-868.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">Research Topics</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://blog.frontiersin.org/2021/09/21/back-to-school-research-topics-on-education-during-covid-19/">
                                            Back to school: Research Topics on education during Covid-19
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>What does school look like in the second year of the pandemic? Explore our Research Topics from the digital transformation of education and school feeding programs to children’s development at home and educational leadership in Covid.</p><p></p>
                                <a href="https://blog.frontiersin.org/2021/09/21/back-to-school-research-topics-on-education-during-covid-19/" class="more-link featured-stories-link">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-870.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/nephrology?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-nephrology">
                                            Can biomarkers help to identify new therapeutic targets of kidney diseases?
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>A new journal to promote research on biomarkers and potential therapeutic targets of chronic kidney disease affecting an estimated 850 million people worldwide.</p><p></p>
                                <a href="https://www.frontiersin.org/journals/nephrology?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-nephrology" class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="Image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-867.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/thermal-engineering?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-thermal-engineering">
                                            Can thermal engineering provide more solutions for clean energy ?
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>A new journal focused on the design, development applications of devices, equipment, technologies and systems involving thermal processes for production and conservation of energy. </p><p></p>
                                <a href="https://www.frontiersin.org/journals/thermal-engineering?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-thermal-engineering" class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 blog">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-871.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">ebooks</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://blog.frontiersin.org/2021/10/18/frontiers-ebook-releases-october-2021/">
                                            Frontiers eBook releases: October 2021
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Download this month’s new releases including the latest Special Issues on intact forests and the pervasive elements of human pressure, the science of working dogs, challenges in perinatal mental health and many more!</p><p></p>
                                <a href="https://blog.frontiersin.org/2021/10/18/frontiers-ebook-releases-october-2021/" class="more-link featured-stories-link">
                                    Download here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 blog">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-866.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">ebook</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://blog.frontiersin.org/2021/09/16/frontiers-ebook-releases-september-2021/">
                                            Frontiers eBook releases: September 2021
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Download this month’s new releases including the latest Special Issues on new perspectives on cultured meat, the impact of melatonin in health and disease, recent advances in delivering therapeutics to the inner ear and many more!</p><p></p>
                                <a href="https://blog.frontiersin.org/2021/09/16/frontiers-ebook-releases-september-2021/" class="more-link featured-stories-link">
                                    Download here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="nobel" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-865.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">Frontiers for Young Minds</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://kids.frontiersin.org/collections/21781/the-nobel-collection">
                                            Five Nobel Prize winners publish article collection for kids
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>The new collection connects young people with today's most distinguished scientists and showcases some of their most groundbreaking research.</p><p></p>
                                <a href="https://kids.frontiersin.org/collections/21781/the-nobel-collection" class="more-link featured-stories-link">
                                    See collection
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-864.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/mechanical-engineering?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-mechanical-engineering">
                                            How will mechanical engineering advances shape our lives next?
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>A new research platform on the application of smarter processes, new materials and innovative manufacturing methods across industries.</p><p></p>
                                <a href="https://www.frontiersin.org/journals/mechanical-engineering?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-mechanical-engineering" class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 research-topic">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-863.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">Research Topics</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://blog.frontiersin.org/2021/08/17/going-for-gold-research-topics-on-the-olympic-and-paralympic-games/">
                                            Going for gold: Research Topics on the Olympic and Paralympic games
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Did you tune into the Olympics or Paralympics this month? Were you left in awe by the athletes? Curious about the science behind the games? We have curated a list of our best Research Topics on everything Olympic and Paralympic.</p><p></p>
                                <a href="https://blog.frontiersin.org/2021/08/17/going-for-gold-research-topics-on-the-olympic-and-paralympic-games/" class="more-link featured-stories-link">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-862.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/electronic-materials?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-electronic-materials">
                                            How are new electronic materials changing the manufacturing industry and other sectors?
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Bridging research across chemistry, nanotechnology and physics this new journal explores some of the latest applications of electronic materials.</p><p></p>
                                <a href="https://www.frontiersin.org/journals/electronic-materials?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-electronic-materials" class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 blog">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-860.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">ebook</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://blog.frontiersin.org/2021/08/03/frontiers-ebook-releases-august-2021/">
                                            Frontiers eBook releases: August 2021
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Download this month’s releases including Special Issues on the value of food loss and waste, the impact of improved animal welfare on farm animal productivity, recent advances in silk science and technology and many more!</p><p></p>
                                <a href="https://blog.frontiersin.org/2021/08/03/frontiers-ebook-releases-august-2021/" class="more-link featured-stories-link">
                                    Download here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-859.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/drug-discovery?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-drug-discovery">
                                            Can bio-molecules and smart data techniques accelerate drug discovery?
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>A new research platform to identify therapeutic agents for drug development to help treat cancers, neurological and cardiovascular conditions.</p><p></p>
                                <a href="https://www.frontiersin.org/journals/drug-discovery?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-drug-discovery" class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 other">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="forum" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-858.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">Frontiers Forum</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.youtube.com/watch?v=Q78UL1gYhXI&list=PLpCH1XIO3lYtRELTupGHOfrbylNlPhPKR">
                                            Prof. Axel Cleeremans on solving consciousness
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Pioneering psychologist Axel Cleeremans explores the leading theories of consciousness, joined by fellow world experts Prof. Anil Seth, Dr Steve Fleming and Prof. Liad Mudrik.</p><p></p>
                                <a href="https://www.youtube.com/watch?v=Q78UL1gYhXI&list=PLpCH1XIO3lYtRELTupGHOfrbylNlPhPKR" class="more-link featured-stories-link">
                                    Watch here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="Image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-861.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/urology?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-urology">
                                            Can uro-surgical technology ease recovery for patients?
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>A new journal explores solutions on new diagnostics for urological diseases and how endourology  may provide less invasive treatments.</p><p></p>
                                <a href="https://www.frontiersin.org/journals/urology?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-urology" class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 research-topic">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-857.jpg">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">Research topics</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://blog.frontiersin.org/2021/07/15/summer-travel-research-topics-on-transportation/">
                                            Summer travel: Research Topics on Transportation
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>As many countries open up to travel, we have curated a list of our best research topics on transportation. Enjoy research from app-based transit and sustainable mobility post-COVID-19 to medical travel and aerospace health and safety.</p><p></p>
                                <a href="https://blog.frontiersin.org/2021/07/15/summer-travel-research-topics-on-transportation/" class="more-link featured-stories-link">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 blog">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-856.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">ebooks</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://blog.frontiersin.org/2021/07/16/frontiers-ebook-releases-july-2021/">
                                            Frontiers eBook releases: July 2021
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Download July’s new releases including the latest Research Topics on the influence of muscle-tendon interaction on disease, the impact of microplastics in marine environments, new perspectives on social interaction in neuropsychiatry and many more!</p><p></p>
                                <a href="https://blog.frontiersin.org/2021/07/16/frontiers-ebook-releases-july-2021/" class="more-link featured-stories-link">
                                    Download here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-855.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/ophthalmology?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-ophthalmology">
                                            Can surgical and diagnostic innovations improve the treatment of eye diseases ?
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>A new journal to find innovative solutions for the treatment of visual impairment and eye diseases affecting more than 2 billion people globally.</p><p></p>
                                <a href="https://www.frontiersin.org/journals/ophthalmology?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-ophthalmology" class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-853.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/drug-delivery#:~:text=Frontiers" in drug delivery aims,and formulations combined with devices.?utm_source="fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-drug-delivery">
                                            How will AI and in silico testing shape the future of drug delivery?
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>A new research platform to explore effective methods for drug administration through bioengineering innovation, physiology and pharmacology perspectives.</p><p></p>
                                <a href="https://www.frontiersin.org/journals/drug-delivery#:~:text=Frontiers" in drug delivery aims,and formulations combined with devices.?utm_source="fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-drug-delivery" class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-852.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/systems-biology?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-systems-biology">
                                            Bridging biological approaches across disciplines
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Explore our dedicated journal on systems biology providing more holistic perspectives on organs, cells and tissue interactions.</p><p></p>
                                <a href="https://www.frontiersin.org/journals/systems-biology?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-systems-biology" class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 research-topic">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-850.jpg">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">research topics</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://blog.frontiersin.org/2021/06/16/pride-month-2021-research-topics-on-visibility-unity-and-equality/">
                                            Spotlight on Pride Month
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Celebrate Pride Month by engaging with our research topics on LGBT+ issues, spanning from the clinical aspects of gender dysphoria and implementing PrEP in community settings to sexuality 3.0 and LGBT inclusion in schools.</p><p></p>
                                <a href="https://blog.frontiersin.org/2021/06/16/pride-month-2021-research-topics-on-visibility-unity-and-equality/" class="more-link featured-stories-link">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-851.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/molecular-medicine?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-molecular-medicine">
                                            Can molecular medicine pave the way for more effective personalized therapies?
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>A new research platform focused on understanding the molecular basis of human pathologies such as cancers, infectious diseases, and cardiovascular conditions.</p><p></p>
                                <a href="https://www.frontiersin.org/journals/molecular-medicine?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-molecular-medicine" class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 blog">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-849.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">ebooks</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://blog.frontiersin.org/2021/06/16/frontiers-ebook-releases-june-2021/">
                                            Frontiers eBook releases: June 2021
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Download June’s new releases including the latest Special Issues on treatment options for autoimmune skin diseases, small scale spatial and temporal patterns in plankton, psychological distress among university students and many more!</p><p></p>
                                <a href="https://blog.frontiersin.org/2021/06/16/frontiers-ebook-releases-june-2021/" class="more-link featured-stories-link">
                                    Download here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-848.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/manufacturing-technology?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-manufacturing-technology">
                                            Will additive manufacturing continue to change the face of the industry?
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>A new research platform to explore how advanced manufacturing technology is spearheading sustainable production.</p><p></p>
                                <a href="https://www.frontiersin.org/journals/manufacturing-technology?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-manufacturing-technology" class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 other">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="Video" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-847.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">Frontiers Forum</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.youtube.com/watch?v=g2tl3zC6wX4&list=PLpCH1XIO3lYtRELTupGHOfrbylNlPhPKR&index=1">
                                            Prof. Kongjian Yu on healing the world's cities with green sponge
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>World-renowned landscape architect Kongjian Yu inspired over 1800 scientists, policy makers and industry leaders with his demonstration of how “sponge cities” solve urban environmental issues like flooding and pollution, while creating beautiful living spaces.</p>
<p></p><p></p>
                                <a href="https://www.youtube.com/watch?v=g2tl3zC6wX4&list=PLpCH1XIO3lYtRELTupGHOfrbylNlPhPKR&index=1" class="more-link featured-stories-link">
                                    Watch here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-846.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/analytical-science?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-analytical-science">
                                            How will data-driven analytical methods impact ours lives next?
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>From solving forensic cases to detecting emerging pollutants, explore our new journal focused on the latest applications of analytical science.</p><p></p>
                                <a href="https://www.frontiersin.org/journals/analytical-science?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-analytical-science" class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 research-topic">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-844.jpg">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">Research Topics</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://blog.frontiersin.org/2021/05/17/world-bee-day-2021-research-topics-to-build-back-better-for-bees/">
                                            Spotlight on World Bee Day
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Bee engaged with World Bee Day by exploring open pollination research topics, from the decline of wild bees and genomics in flower development to advances in honey bee virus research and the sensory ecology of plant-pollinator interactions.</p><p></p>
                                <a href="https://blog.frontiersin.org/2021/05/17/world-bee-day-2021-research-topics-to-build-back-better-for-bees/" class="more-link featured-stories-link">
                                    Participate now
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 research-topic">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-843.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">ebooks</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://blog.frontiersin.org/2021/05/13/frontiers-ebook-releases-may-2021/">
                                            Frontiers eBook releases: May 2021
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Download this month’s new releases including the latest Special Issues on pacific deep-sea discoveries, rock avalanches and their impact on landscape evolution, recent developments in therapies for skin cancer and many more!</p><p></p>
                                <a href="https://blog.frontiersin.org/2021/05/13/frontiers-ebook-releases-may-2021/" class="more-link featured-stories-link">
                                    Download here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 other">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="Esther Duflo" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-845.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">Frontiers Forum</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.youtube.com/watch?v=-8e__l51LIE&list=PLpCH1XIO3lYtRELTupGHOfrbylNlPhPKR&index=1">
                                            Nobel winner Esther Duflo on opportunities for a better world
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Over 4,000 scientists, policy makers and industry leaders joined Nobel laureate and bestselling author Prof. Esther Duflo, who shared surprising economic lessons as well as opportunities from Covid-19.</p><p></p>
                                <a href="https://www.youtube.com/watch?v=-8e__l51LIE&list=PLpCH1XIO3lYtRELTupGHOfrbylNlPhPKR&index=1" class="more-link featured-stories-link">
                                    Watch highlights
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-842.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/nuclear-medicine?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-nuclear-medicine">
                                            Shaping the future of diagnostics
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Research in nuclear medicine is making major advances. Can PET, SPECT and radiopharmaceuticals provide more solutions to improve diagnostics?</p><p></p>
                                <a href="https://www.frontiersin.org/journals/nuclear-medicine?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-nuclear-medicine" class="more-link featured-stories-link">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-841.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/health-services?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-health-services">
                                            Can we accelerate better patient care wordwide?
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>A new journal exploring research solutions on health services from tackling social inequalities in access to care to managing resources and costs while dealing with a pandemic.</p><p></p>
                                <a href="https://www.frontiersin.org/journals/health-services?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-health-services" class="more-link featured-stories-link">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 blog">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-827.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">ebooks</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://blog.frontiersin.org/2021/04/19/frontiers-ebook-releases-april-2021/">
                                            Frontiers eBook releases: April 2021
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Download this month’s new releases including the latest Special Issues on neuroimmunology of the inner ear, recent advances in thermally activated delayed fluorescence materials, various perspectives on lucid dreaming and many more!</p><p></p>
                                <a href="https://blog.frontiersin.org/2021/04/19/frontiers-ebook-releases-april-2021/" class="more-link featured-stories-link">
                                    Download here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 research-topic">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-826.jpg">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">Research Topics</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/research-topics?items=13212,19866,19338,18915">
                                            Spotlight on neurodevelopmental disorders
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Commemorate World Autism Month by exploring open neurodevelopmental research topics, from targeting Excitation-Inhibition imbalance in Autism and irritability in ADHD to gene expression in Down syndrome and fluency comprehension in Dyslexia.</p><p></p>
                                <a href="https://www.frontiersin.org/research-topics?items=13212,19866,19338,18915" class="more-link featured-stories-link">
                                    Participate now
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-823.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/molecular-neuroscience?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-molecular-neuroscience">
                                            Molecular Neuroscience journal widens its research focus
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>This high IF journal will now provide perspectives on Brain Disease Mechanisms, Methods & Model Organisms, Molecular Signalling & Pathways, Neuroplasticity and Development.</p><p></p>
                                <a href="https://www.frontiersin.org/journals/molecular-neuroscience?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-molecular-neuroscience" class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 research-topic">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-824.jpg">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">Research Topics</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/research-topics?items=19592,19243,19902,20117,19620,19624,20379,20541">
                                            Spotlight on Women in Research
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Celebrate International Women's Day with this month's theme of women in research. Explore open research topics from women in neuroscience, academia, genetics, microbiology, psychology, aging, nanotechnology, and chemical engineering.</p><p></p>
                                <a href="https://www.frontiersin.org/research-topics?items=19592,19243,19902,20117,19620,19624,20379,20541" class="more-link featured-stories-link">
                                    Participate now
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-821.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/network-physiology?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-network-physiology">
                                            Can network physiology provide more targeted  medical solutions?
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>A new research platform exploring the complex physiological interactions that regulate the human body and the serious medical conditions caused by disruptions linked to network physiology.</p><p></p>
                                <a href="https://www.frontiersin.org/journals/network-physiology?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-network-physiology" class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 other">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="Harris Lewin" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-825.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">Frontiers Forum</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.youtube.com/watch?v=gptP4FZHZrE&list=PLpCH1XIO3lYtRELTupGHOfrbylNlPhPKR&index=1">
                                            Prof Harris Lewin: Genomics-led solutions for all life on Earth
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>More than 2,300 scientists, policymakers and industry leaders joined Harris’ talk on how a moonshot project to sequence the genomes of 1.8m species is helping efforts to preserve biodiversity and sustain our societies.</p><p></p>
                                <a href="https://www.youtube.com/watch?v=gptP4FZHZrE&list=PLpCH1XIO3lYtRELTupGHOfrbylNlPhPKR&index=1" class="more-link featured-stories-link">
                                    Watch here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 other">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="YouTube video" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-822.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">Frontiers Forum</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.youtube.com/watch?v=JhowXxz_uAs&list=PLpCH1XIO3lYtRELTupGHOfrbylNlPhPKR&index=1">
                                            Prof. David Christian on equipping our children to manage a planet
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Over 3,000 researchers, policymakers and industry leaders joined David's talk on the education revolution through Big History and the need to teach kids a science-based origin story.</p><p></p>
                                <a href="https://www.youtube.com/watch?v=JhowXxz_uAs&list=PLpCH1XIO3lYtRELTupGHOfrbylNlPhPKR&index=1" class="more-link featured-stories-link">
                                    Watch here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-814.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/virology?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-virology">
                                            Can virology research break the chain of transmission?
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>A new platform to deepen our understanding of virus diversity, mutations, and spillover and explore ways to predict and prevent an outbreak.</p><p></p>
                                <a href="https://www.frontiersin.org/journals/virology?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-virology" class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 blog">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-813.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">ebooks</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://blog.frontiersin.org/2021/03/11/frontiers-ebook-releases-march-2021/">
                                            Frontiers eBook releases: March 2021
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Download this month’s new releases including the latest Special Issues on disease management for Fusarium wilt in bananas, the newest insights on disease in captive wildlife, novel molecular targets for the treatment of pain and many more!</p><p></p>
                                <a href="https://blog.frontiersin.org/2021/03/11/frontiers-ebook-releases-march-2021/" class="more-link featured-stories-link">
                                    Download here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-812.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/signal-processing?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-signal" processing>
                                            A digital revolution powered by signal processing techology
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Our new research platform, Frontiers in Signal Processing, aims to shape the future of information transmission looking at cutting edge machine learning, radar and image technology.</p><p></p>
                                <a href="https://www.frontiersin.org/journals/signal-processing?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-signal" processing class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 blog">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-811.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">ebooks</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://blog.frontiersin.org/2021/02/12/frontiers-ebook-releases-february-2021/">
                                            Frontiers eBook releases: February 2021
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Download this month’s new releases including the latest Special Issues on responses of tea plants to climate change, the newest insights on human-nature interactions, stick insect research in the era of genomics and many more!</p><p></p>
                                <a href="https://blog.frontiersin.org/2021/02/12/frontiers-ebook-releases-february-2021/" class="more-link featured-stories-link">
                                    Download here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 research-topic">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-810.jpg">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">Research Topics</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/research-topics?items=17060,15872,15433,15511,15711,14731,14899,10215,11421,18899,15285,17694,16393,14260">
                                            Spotlight on bovine health in the Year of the Ox
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Explore the open research topics in this month's theme of bovine health, spanning from the nutritional requirements in production animals and advances in buffalo genetics to eradication programmes for cattle diseases.</p><p></p>
                                <a href="https://www.frontiersin.org/research-topics?items=17060,15872,15433,15511,15711,14731,14899,10215,11421,18899,15285,17694,16393,14260" class="more-link featured-stories-link">
                                    Participate now
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-808.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/radiology?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-radiology">
                                            Delivering better patient care with radiology innovation
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>From artificial intelligence to image guided procedures, Frontiers in Radiology will explore innovative technology developments and ways to improve quality, productivity and efficiency in radiologists' daily practice.</p><p></p>
                                <a href="https://www.frontiersin.org/journals/radiology?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-radiology" class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 research-topic">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-809.jpg">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">research topics</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/research-topics?items=18165,14386,15234,16083,18235,16038,17291,17056,10406,14774,15469,13825">
                                            Spotlight on running and endurance sport
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Explore our open research topics spanning the biomechanics of competitive gait to the use of artificial intelligence for enhanced performance and the advances in footwear for injury prevention.</p><p></p>
                                <a href="https://www.frontiersin.org/research-topics?items=18165,14386,15234,16083,18235,16038,17291,17056,10406,14774,15469,13825" class="more-link featured-stories-link">
                                    Participate now
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-807.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/insect-science?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-insect" science>
                                            How will insects shape our future?
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>The new<em> Frontiers in Insect Science</em> will provide a platform on the applications of insect research to medicine, robotics and developing fields such as insect culturing for nutrition.</p><p></p>
                                <a href="https://www.frontiersin.org/journals/insect-science?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-insect" science class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 research-topic">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-806.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">eBooks</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://blog.frontiersin.org/2021/01/14/frontiers-ebook-releases-january-2021/">
                                            Frontiers eBook releases: January 2021
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>This month’s new releases include the latest Special Issues on the evolution of music, the newest insights on nutritional strategies to promote muscle mass, the impact of antimicrobial resistance on global health and many more!</p><p></p>
                                <a href="https://blog.frontiersin.org/2021/01/14/frontiers-ebook-releases-january-2021/" class="more-link featured-stories-link">
                                    Download here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-805.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/soil-science?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-soil" science>
                                            Can we fight hunger and maintain a healthy life on earth?
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>the new <em>Frontiers in Soil Science</em> brings together research on soil biogeochemistry degradation, remediation and biodiversity.</p><p></p>
                                <a href="https://www.frontiersin.org/journals/soil-science?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-soil" science class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 research-topic">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-804.jpg">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">Research Topics</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/research-topics?items=10075,10709,12555,14089,16330,15843,17250,13614,17603,17703,12363,17985,17240">
                                            Spotlight on music in the first International Year of Sound
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Explore the open research topics in this month's theme of music, spanning from the early neural processing of melodies and the role of music during the pandemic to the flow state in artistic sports and the effects of music on cognition.</p><p></p>
                                <a href="https://www.frontiersin.org/research-topics?items=10075,10709,12555,14089,16330,15843,17250,13614,17603,17703,12363,17985,17240" class="more-link featured-stories-link">
                                    Participate now
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 blog">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-803.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">ebooks</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://blog.frontiersin.org/2020/12/09/frontiers-ebook-releases-december-2020/">
                                            Frontiers eBook releases: December 2020
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>This month’s new releases include Special Issues on exercise as a countermeasure to aging, the newest insights on monarch butterfly ecology and conservation, the role of clock genes in diverse pathologies and many more! </p><p></p>
                                <a href="https://blog.frontiersin.org/2020/12/09/frontiers-ebook-releases-december-2020/" class="more-link featured-stories-link">
                                    Download here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-802.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/tropical-diseases?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-tropical" diseases>
                                            A new research platform to fight tropical diseases
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Neglected tropical diseases affect over a billion people living in poverty. How can we prevent and control tropical diseases to save lives?</p><p></p>
                                <a href="https://www.frontiersin.org/journals/tropical-diseases?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-tropical" diseases class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 other">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="Report: The Academic Response to COVID-19" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-796.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">New report</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/articles/10.3389/fpubh.2020.621563/full?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-cco-hpfea-academic-survey">
                                            Survey of 25,000+ editors, reviewers and authors
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Insights into the impact of COVID-19 on the international scientific community, their work and the implications for science.</p><p></p>
                                <a href="https://www.frontiersin.org/articles/10.3389/fpubh.2020.621563/full?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-cco-hpfea-academic-survey" class="more-link featured-stories-link">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-800.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/photonics?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-photonics">
                                            A forum for sustainable, low-energy and bio-compatible solutions
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>The new Frontiers in Photonics will cover research across disciplines on quantum technologies, optical materials, telecommunications and photovoltaic devices.</p><p></p>
                                <a href="https://www.frontiersin.org/journals/photonics?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-photonics" class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-801.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/catalysis?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-catalysis">
                                            Can we reduce the environmental impact of chemical manufacturing?
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>A new journal exploring research solutions to make catalysts more effective for a more sustainable future.</p><p></p>
                                <a href="https://www.frontiersin.org/journals/catalysis?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-catalysis" class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 research-topic">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-799.jpg">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">Research Topics</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/research-topics?items=12320,13043,15172,15778,15807,16048,16827,7574,7903,16605,10026,15091,12430,14716,15696?utm_source=EM&utm_medium=f-nlt&utm_campaign=politics-rts">
                                            Spotlight on the US election and global politics
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Explore the open research topics in this month's theme of politics, spanning from identifying misinformation and the political participation of young people to media populism and party changes in times of crisis.</p><p></p>
                                <a href="https://www.frontiersin.org/research-topics?items=12320,13043,15172,15778,15807,16048,16827,7574,7903,16605,10026,15091,12430,14716,15696?utm_source=EM&utm_medium=f-nlt&utm_campaign=politics-rts" class="more-link featured-stories-link">
                                    Participate now
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 blog">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-798.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">eBook</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://blog.frontiersin.org/2020/11/16/frontiers-ebook-releases-november-2020/">
                                            Frontiers eBook releases: November 2020
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Download this month’s new releases including the latest Special Issues on robots modeling play in early infant development, the newest insights on food allergies, the impacts of shipping on marine fauna and many more!</p><p></p>
                                <a href="https://blog.frontiersin.org/2020/11/16/frontiers-ebook-releases-november-2020/" class="more-link featured-stories-link">
                                    Download here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-797.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/rehabilitation-sciences?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-rehabilitation" sciences>
                                            How can we strengthen rehabilitation practices in healthcare systems globally?
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>A new research platform to look at rehabilitation sciences beyond physical recovery and foster social inclusion for patients with disabilities.</p><p></p>
                                <a href="https://www.frontiersin.org/journals/rehabilitation-sciences?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-rehabilitation" sciences class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 research-topic">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-795.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">Research Topics</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/research-topics?domain=all&query=menopause&submission=open&sort=recent">
                                            Spotlight on World Menopause Month
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Check out the open research topics in this month's theme of menopause, spanning from endocrinology and psychology to cellular biochemistry and aging. Contribute research and help improve women's health globally!</p><p></p>
                                <a href="https://www.frontiersin.org/research-topics?domain=all&query=menopause&submission=open&sort=recent" class="more-link featured-stories-link">
                                    Participate now
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-792.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/bioinformatics?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-bioinformatics">
                                            A new approach to interpreting biological data
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>A new journal that looks at understanding cells and organisms in new ways through bioinformatics methods applied to biological data.</p><p></p>
                                <a href="https://www.frontiersin.org/journals/bioinformatics?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-bioinformatics" class="more-link featured-stories-link">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="diabetes" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-794.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">New Journal</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals//clinical-diabetes-and-healthcare?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-diabetes">
                                            Finding solutions for one of the biggest causes of death worldwide
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>New journal dedicated to improving clinical practices and helping diabetes patients better manage their condition.</p><p></p>
                                <a href="https://www.frontiersin.org/journals//clinical-diabetes-and-healthcare?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-diabetes" class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 blog">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-793.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">eBooks</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://blog.frontiersin.org/2020/10/22/frontiers-ebook-releases-october-2020/">
                                            Frontiers eBook releases: October 2020
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p><span>This month’s new releases include special issues on anesthetic risk in veterinary medicine, the newest insights on Autism, alternative approaches to grapevine health, and many more!</span></p><p></p>
                                <a href="https://blog.frontiersin.org/2020/10/22/frontiers-ebook-releases-october-2020/" class="more-link featured-stories-link">
                                    Download here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-775.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/conservation-science?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-conservation" science>
                                            A journal to restore biodiversity and preserve natural ecosystems
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Biodiversity is facing unprecedented threats. Can we bridge the gap between conservation science and real world practice?</p><p></p>
                                <a href="https://www.frontiersin.org/journals/conservation-science?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-conservation" science class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 article">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-690.jpg">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">FRONTIERS FOR YOUNG MINDS</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://kids.frontiersin.org/article/10.3389/frym.2020.00074?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-frym-hpfea-whats-covid19">
                                            What is COVID-19?
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>A summary of what we know about SARS-CoV-2 so far and how to stay safe from COVID-19, written by scientists and reviewed by kids</p><p></p>
                                <a href="https://kids.frontiersin.org/article/10.3389/frym.2020.00074?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-frym-hpfea-whats-covid19" class="more-link featured-stories-link">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-773.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/remote-sensing?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-remote" sensing>
                                            Remote sensing paves the way for near endless mapping opportunities
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>A new platform for remote sensing research exploring how to obtain vital data to monitor land, oceans, biosphere, atmosphere and space!</p><p></p>
                                <a href="https://www.frontiersin.org/journals/remote-sensing?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-remote" sensing class="more-link featured-stories-link">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-776.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/control-engineering?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-control" engineering>
                                            A platform to drive innovation in control engineering systems
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Control systems need to be more robust and adaptive than ever as automation technology becomes the norm in many industries, Frontiers in Control Engineering will be at the forefront of research in the field.</p><p></p>
                                <a href="https://www.frontiersin.org/journals/control-engineering?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-control" engineering class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-774.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/neuroergonomics?utm_source=sm&utm_medium=eb&utm_campaign=sub_jl_fnrgo">
                                            How does our brain really work in everyday life?
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>A new cutting-edge journal in neuroergonomics methods and techniques to build safer cars, improve learning experiences, fasten injury recovery and more applications.</p><p></p>
                                <a href="https://www.frontiersin.org/journals/neuroergonomics?utm_source=sm&utm_medium=eb&utm_campaign=sub_jl_fnrgo" class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-772.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/animal-science?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-animal" science>
                                            Food security raises ethical and environmental questions on animal welfare
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>A new journal focused on reseach linking responsible animal farming and long term food sustainability.</p><p></p>
                                <a href="https://www.frontiersin.org/journals/animal-science?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-animal" science class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-771.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/aging?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-aging">
                                            Can we achieve healthy aging for all?
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Our new research platform to explore how better aging is linked to nutrition, our immune system and genetics.</p><p></p>
                                <a href="https://www.frontiersin.org/journals/aging?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-aging" class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 blog">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="working from home" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-721.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">About Frontiers</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://blog.frontiersin.org/2020/08/04/supporting-our-people-and-the-scientific-community-frontiers-response-to-covid-19/">
                                            Everyone has to play their part
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>CEO and co-founder, Kamila Markram, on how Frontiers is supporting its people and the scientific response to COVID-19.</p><p></p>
                                <a href="https://blog.frontiersin.org/2020/08/04/supporting-our-people-and-the-scientific-community-frontiers-response-to-covid-19/" class="more-link featured-stories-link">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-725.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/allergy?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-allergy">
                                            A journal to tackle the most common chronic disease in Europe
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>What's making 1 in 3 people more susceptible to allergies? <em>Frontiers in Allergy</em> aims to help determine the roots of this rising global health challenge.</p><p></p>
                                <a href="https://www.frontiersin.org/journals/allergy?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-allergy" class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-724.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/fungal-biology?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-fungal" biology>
                                            Can we restore fungal proliferation for a sustainable future?
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Climate change is impacting fungal growth and its complex interactions in our ecosystems. <em>Frontiers in Fungal Biology</em> focuses on addressing this issue.</p><p></p>
                                <a href="https://www.frontiersin.org/journals/fungal-biology?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-fungal" biology class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-723.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/pain-research?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-pain" research>
                                            Can we develop tailored treatments for chronic pain management?
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Chronic pain affects one in 5 people raising a need for better diagnostics and pain management, check out our new <em>Frontiers in Pain Research</em>.</p><p></p>
                                <a href="https://www.frontiersin.org/journals/pain-research?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-pain" research class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-720.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/electronics?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-electronics">
                                            Shape the next wave of energy-efficient and smart electronics
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>The use of electronics is rising across sectors, submit your research to our new <em>Frontiers in Electronics</em> journal.</p><p></p>
                                <a href="https://www.frontiersin.org/journals/electronics?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-electronics" class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-718.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/sensors?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-sensors-new-journal">
                                            The sensors revolution: what next?
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>A new journal dedicated to how sensors are now part of our everyday lives and will continue to impact services in all industries. </p><p></p>
                                <a href="https://www.frontiersin.org/journals/sensors?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-sensors-new-journal" class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 blog">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="aira" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-722.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">About Frontiers</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://blog.frontiersin.org/2020/07/01/artificial-intelligence-to-help-meet-global-demand-for-high-quality-objective-peer-review-in-publishing/">
                                            AI to help meet demand for quality and objective peer review
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Frontiers Artificial Intelligence Review Assistant (AIRA) can make up to 20 recommendations in just seconds.</p><p></p>
                                <a href="https://blog.frontiersin.org/2020/07/01/artificial-intelligence-to-help-meet-global-demand-for-high-quality-objective-peer-review-in-publishing/" class="more-link featured-stories-link">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 research-topic">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="Covid-19 and ethnic minorities" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-695.jpg">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">Call for papers</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/research-topics/14341/what-does-the-global-coronavirus-pandemic-mean-for-ethnic-and-racial-minorities?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-cov-sci-hpfea-covid-ethnic-minorities">
                                            What does the pandemic mean for ethnic minorities?
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>From higher infection and mortality rates, to the disproportiante effect of social distancing on mental health</p>
<p></p><p></p>
                                <a href="https://www.frontiersin.org/research-topics/14341/what-does-the-global-coronavirus-pandemic-mean-for-ethnic-and-racial-minorities?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-cov-sci-hpfea-covid-ethnic-minorities" class="more-link featured-stories-link">
                                    Participate now
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 blog">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-691.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">FRONTIERS NEWS</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://blog.frontiersin.org/2020/05/27/frontiers-welcomes-cern-to-its-institutional-membership-program/?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-cco-hpfea-cern-partnership">
                                            CERN joins institutional membership program
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Frontiers is proud to collaborate with CERN, the European Organization for Nuclear Research, as part of its institutional membership program</p><p></p>
                                <a href="https://blog.frontiersin.org/2020/05/27/frontiers-welcomes-cern-to-its-institutional-membership-program/?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-cco-hpfea-cern-partnership" class="more-link featured-stories-link">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 article">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-717.jpg">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">LATEST RESEARCH</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/articles/10.3389/feduc.2020.00052/full?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-div-hpfea-gendered-racism">
                                            “Unbroken, but bent”: Gendered racism in educational leadership
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Study highlights gendered racism in school leadership with recommendations including shifting the burden to white allies</p><p></p>
                                <a href="https://www.frontiersin.org/articles/10.3389/feduc.2020.00052/full?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-div-hpfea-gendered-racism" class="more-link featured-stories-link">
                                    Learn more
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-719.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/communications-and-networks?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-comms-networks-launch">
                                            A new journal for a digitally inclusive world
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>The new <em>Frontiers in Communications and Networks</em> will explore ways to bridge connectivity gaps and create a safe and democratic digital environemnt for all.</p><p></p>
                                <a href="https://www.frontiersin.org/journals/communications-and-networks?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-jl-hpfea-comms-networks-launch" class="more-link featured-stories-link">
                                    Submit here
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-706.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/space-technologies?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-jl-hpfea-space-technologies-launch">
                                            Can space technologies help tackle climate change?
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Discover Frontiers in Space Technologies - a research platform on the latest space innovation and the business opportunities it unlocks.</p><p></p>
                                <a href="https://www.frontiersin.org/journals/space-technologies?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-jl-hpfea-space-technologies-launch" class="more-link featured-stories-link">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 article">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-716.jpg">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">LATEST RESEARCH</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/articles/10.3389/fpsyg.2016.00008/full?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-div-hpfea-workplace-bias">
                                            How can we fight stereotypes at work?
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>A review of the effects of bias in the workplace beyond performance as well as recommendations for effective interventions to boost diversity and inclusion</p><p></p>
                                <a href="https://www.frontiersin.org/articles/10.3389/fpsyg.2016.00008/full?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-div-hpfea-workplace-bias" class="more-link featured-stories-link">
                                    Learn more
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 research-topic">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-715.jpg">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">CALL FOR PAPERS</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/research-topics/13971/rising-stars-africa?utm_campaign=sub-rt-fsoc-african-stars&utm_medium=hub-div&utm_source=fweb?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-ort-hpfea-rising-stars-Africa">
                                            Frontiers in Chemistry proudly presents rising stars in Africa
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Join this article collection with compelling work from chemical scientists in the early stages of their careers</p><p></p>
                                <a href="https://www.frontiersin.org/research-topics/13971/rising-stars-africa?utm_campaign=sub-rt-fsoc-african-stars&utm_medium=hub-div&utm_source=fweb?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-ort-hpfea-rising-stars-Africa" class="more-link featured-stories-link">
                                    Participate now
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 research-topic">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-693.jpg">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">CALL FOR PAPERS</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/research-topics/14066/covid-19-and-womens-health?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-cov-sci-hpfea-covid-womens-health">
                                            How is COVID-19 affecting women's overall health?
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>From risks in pregnancy and mother-to-baby transmission,submit research on the impacts of the pandemic on women’s health</p><p></p>
                                <a href="https://www.frontiersin.org/research-topics/14066/covid-19-and-womens-health?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-cov-sci-hpfea-covid-womens-health" class="more-link featured-stories-link">
                                    Submit now
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 blog">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="Frontiers editorial board meeting" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-688.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">ABOUT FRONTIERS</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://blog.frontiersin.org/2020/05/28/frontiers-editorial-board-webinar-may-2020/?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-cco-hpfea-may-2020-editor-meeting">
                                            Editorial Board Webinar – May 2020
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>An update on Frontiers' coronavirus response as well as our strategy and new developments</p><p></p>
                                <a href="https://blog.frontiersin.org/2020/05/28/frontiers-editorial-board-webinar-may-2020/?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-cco-hpfea-may-2020-editor-meeting" class="more-link featured-stories-link">
                                    Watch video
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 article">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="gender-covid19-article" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-685.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">Latest COVID-19 Research</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://blog.frontiersin.org/2020/04/29/covid-19-study-shows-that-men-have-over-double-the-death-rate-of-women/?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-cov-hpfea-covid-19">
                                            Study shows men have over double the death rate of women
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Study on gender differences in COVID-19 finds that men have more severe disease and are over twice as likely to die</p><p></p>
                                <a href="https://blog.frontiersin.org/2020/04/29/covid-19-study-shows-that-men-have-over-double-the-death-rate-of-women/?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-cov-hpfea-covid-19" class="more-link featured-stories-link">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 research-topic">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-694.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">CALL FOR PAPERS</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/research-topics/13652/coronavirus-research-landscape-resources-utilities-and-analytic-studies?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-cov-rt-hpfea-covid-datasets">
                                            COVID-19 data: exploring the research landscape
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>As the number of coronavirus scholarly datasets grows, how can we draw meaning from the widening research landscape?</p><p></p>
                                <a href="https://www.frontiersin.org/research-topics/13652/coronavirus-research-landscape-resources-utilities-and-analytic-studies?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-cov-rt-hpfea-covid-datasets" class="more-link featured-stories-link">
                                    Submit now
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-689.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/dental-medicine?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-jl-hpfea-dental-medicine-launch">
                                            Shape the future of dental medicine: new journal
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Do you have research on latest dental techniques, reconstructive or peadiatric dentistry ? Discover our new dedicated journal</p><p></p>
                                <a href="https://www.frontiersin.org/journals/dental-medicine?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-jl-hpfea-dental-medicine-launch" class="more-link featured-stories-link">
                                    Submit now
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 research-topic">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="mass-media-rt" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-686.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">Call for papers</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/research-topics/13638/coronavirus-disease-covid-19-the-impact-and-role-of-mass-media-during-the-pandemic?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-cov-rt-hpfea-covid-19">
                                            COVID-19: The impact and role of mass media
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Can mass media stop misinformation and promote positive behavior during the COVID-19 pandemic?</p><p></p>
                                <a href="https://www.frontiersin.org/research-topics/13638/coronavirus-disease-covid-19-the-impact-and-role-of-mass-media-during-the-pandemic?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-cov-rt-hpfea-covid-19" class="more-link featured-stories-link">
                                    Share research
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-687.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/future-transportation?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-jl-hpfea-future" transport journal launch>
                                            Where will future transportation take us next?
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Discover the new Frontiers in Future Transportation journal aiming to drive innovation in mobility systems and more</p><p></p>
                                <a href="https://www.frontiersin.org/journals/future-transportation?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-jl-hpfea-future" transport journal launch class="more-link featured-stories-link">
                                    Submit now
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 blog">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-692.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">FRONTIERS NEWS</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://blog.frontiersin.org/2020/05/13/150000-steps-closer-to-open-science-frontiers-hits-new-publishing-milestone/?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-cco-hpfea-publishing-milestone">
                                            Frontiers hits new publishing milestone
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Frontiers is thrilled to announce a major milestone has been reached this week: the publication of our 150,000th open-access article</p><p></p>
                                <a href="https://blog.frontiersin.org/2020/05/13/150000-steps-closer-to-open-science-frontiers-hits-new-publishing-milestone/?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-cco-hpfea-publishing-milestone" class="more-link featured-stories-link">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 research-topic">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-683.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW RESEARCH TOPIC</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/research-topics/13843/open-citizen-science-data-and-methods?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-rt-hpfea-Earth" day rt>
                                            Frontiers joins the Earth Challenge 2020 Citizen Science Initiative
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Share your research on the biggest environmental issues to our new article collection "Open Citizen Science Data and Methods"</p><p></p>
                                <a href="https://www.frontiersin.org/research-topics/13843/open-citizen-science-data-and-methods?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-rt-hpfea-Earth" day rt class="more-link featured-stories-link">
                                    Share research
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-682.jpg">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/journals/environmental-chemistry?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-jl-hpfea-env-chemisty-launch">
                                            New Journal: Frontiers in Environmental Chemistry
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Explore our new open access journal on the chemistry, transportation, transformation and fate of inorganic and organic pollutants.</p><p></p>
                                <a href="https://www.frontiersin.org/journals/environmental-chemistry?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-jl-hpfea-env-chemisty-launch" class="more-link featured-stories-link">
                                    Submit now
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 article">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-676.jpg">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">Latest COVID-19 RESEARCH</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://blog.frontiersin.org/2020/04/14/more-than-a-third-of-medical-staff-suffered-insomnia-during-the-covid-19-epidemic-in-china/?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-cov-sci-hpfea-staff-insomnia-covid">
                                            High prevalence of insomnia among COVID-19 medical staff
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>A first-of-its-kind study found that more than a third of medical staff dealing with outbreak during its peak in China suffered from insomnia.</p><p></p>
                                <a href="https://blog.frontiersin.org/2020/04/14/more-than-a-third-of-medical-staff-suffered-insomnia-during-the-covid-19-epidemic-in-china/?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-cov-sci-hpfea-staff-insomnia-covid" class="more-link featured-stories-link">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 blog">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-677.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">FRONTIERS FOR YOUNG MINDS</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://blog.frontiersin.org/2020/04/06/children-in-science-socially-apart-learning-together/?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-frym-hpfea-Socially" apart-learning together>
                                            Socially apart, learning together
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Find out how teachers, parents, online learning gurus and young people are keeping the learning going during social distancing.</p><p></p>
                                <a href="https://blog.frontiersin.org/2020/04/06/children-in-science-socially-apart-learning-together/?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-frym-hpfea-Socially" apart-learning together class="more-link featured-stories-link">
                                    Learn more
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 blog">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-669.jpg">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">FRONTIERS NEWS</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://blog.frontiersin.org/2020/03/26/coronavirus-funding-monitor-portal-now-available-to-research-community/?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-cov-news-hpfea-funding-monitor-covid">
                                            ‘Coronavirus Funding Monitor’ helps researchers find funders
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Updated daily, Frontiers' curated list of funding opportunities specifically supports researchers and organizations with coronavirus research.</p><p></p>
                                <a href="https://blog.frontiersin.org/2020/03/26/coronavirus-funding-monitor-portal-now-available-to-research-community/?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-cov-news-hpfea-funding-monitor-covid" class="more-link featured-stories-link">
                                    Learn more
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 research-topic">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="Woman with cancer" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-673.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">Call for papers</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/research-topics/13559/covid-19-infection-in-cancer-patients-how-can-we-help-patients-and-oncologists?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-cov-rt-hpfea-covid-19">
                                            COVID-19: Infection in patients with cancer
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Cancer patients are at greater risk so data is urgently needed to understand the implications for their treatment and recovery.</p><p></p>
                                <a href="https://www.frontiersin.org/research-topics/13559/covid-19-infection-in-cancer-patients-how-can-we-help-patients-and-oncologists?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-cov-rt-hpfea-covid-19" class="more-link featured-stories-link">
                                    Share research
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 research-topic">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="Covid-19: Psychology" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-672.jpg">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">Call for Papers</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/research-topics/13561/coronavirus-disease-covid-19-psychological-behavioral-interpersonal-effects-and-clinical-implication?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-cov-rt-hpfea-covid-19">
                                            COVID-19: Psychological and clinical implications
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Share your research on the psychological effects of COVID-19 to help patients, relatives, caregivers and health workers cope with the crisis.</p><p></p>
                                <a href="https://www.frontiersin.org/research-topics/13561/coronavirus-disease-covid-19-psychological-behavioral-interpersonal-effects-and-clinical-implication?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-cov-rt-hpfea-covid-19" class="more-link featured-stories-link">
                                    Share research
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 research-topic">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="Temperature check for COVID-19 at airport" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-657.png">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">CALL FOR PAPERS</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/research-topics/13377/coronavirus-disease-covid-19-pathophysiology-epidemiology-clinical-management-and-public-health-resp?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-cov-rt-hpfea-covid-19">
                                            COVID-19: How can we stop the outbreak?
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Work with leading researchers to find effective solutions to the Coronavirus disease. Submit your research to our Research Topic on COVID-19.</p><p></p>
                                <a href="https://www.frontiersin.org/research-topics/13377/coronavirus-disease-covid-19-pathophysiology-epidemiology-clinical-management-and-public-health-resp?utm_source=fweb&utm_medium=fmain&utm_campaign=sub-cov-rt-hpfea-covid-19" class="more-link featured-stories-link">
                                    Share research
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 article">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-681.jpg">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">Latest Covid-19 research</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.frontiersin.org/articles/10.3389/fphy.2020.00127/full?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-cov-sci-hpfea-Forecasting" covid-19>
                                            Forecasting COVID-19
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>A simple iterative method to forecast the number of COVID-19 cases needing only the daily values of confirmed cases as input.</p><p></p>
                                <a href="https://www.frontiersin.org/articles/10.3389/fphy.2020.00127/full?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-cov-sci-hpfea-Forecasting" covid-19 class="more-link featured-stories-link">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="IMAGE" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-661.jpg">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://blog.frontiersin.org/2020/03/05/frontiers-marks-international-womens-day-with-two-new-journals/?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-jl-fgwh-new-journal-womens-health">
                                            Two new journals to mark International Women’s Day
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Frontiers's launches two new complementary journals: <em>Frontiers in Reproductive Health</em> and <em>Frontiers in Global Women’s Health</em>.</p><p></p>
                                <a href="https://blog.frontiersin.org/2020/03/05/frontiers-marks-international-womens-day-with-two-new-journals/?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-jl-fgwh-new-journal-womens-health" class="more-link featured-stories-link">
                                    Discover more
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-662.jpg">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">NEW JOURNAL</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://blog.frontiersin.org/2020/01/30/new-frontiers-journal-to-address-humanities-global-sustainability-challenges/?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-jl-frsus-new-journal-sustainability">
                                            New journal to address humanity's global sustainability challenges
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>As material consumption rises, <em>Frontiers in Sustainability</em> looks at sustainable production and solutions to preserve natural resources.</p><p></p>
                                <a href="https://blog.frontiersin.org/2020/01/30/new-frontiers-journal-to-address-humanities-global-sustainability-challenges/?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-jl-frsus-new-journal-sustainability" class="more-link featured-stories-link">
                                    Discover more
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 research-topic">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="image" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-667.jpg">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">SPOTLIGHT AWARD</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://blog.frontiersin.org/2020/02/04/coral-reef-research-collection-wins-100000-international-science-prize/?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-cco-hpfea-spotlight-winner">
                                            Coral Reef Research Collection wins International Science Prize
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>A team of scientific editors won $100,000 for their outstanding article collection on coral reef science and conservation.</p><p></p>
                                <a href="https://blog.frontiersin.org/2020/02/04/coral-reef-research-collection-wins-100000-international-science-prize/?utm_source=fweb&utm_medium=fmain&utm_campaign=ba-cco-hpfea-spotlight-winner" class="more-link featured-stories-link">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 other">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="Image of Anna Rosling Rönnlund, co-author of the bestselling book Factfulness, speaking at Science Unlimited 2019," data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-650.jpg">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">Frontiers Forum 2019</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://www.youtube.com/watch?v=7KJ6in-Njyw&list=PLpCH1XIO3lYtRELTupGHOfrbylNlPhPKR&index=3">
                                            Is the world as bad as you think?
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>Anna Rosling Rönnlund - co-author of the bestselling book Factfulness - shows what the world really looks like, and explains why we've got it so wrong.</p><p></p>
                                <a href="https://www.youtube.com/watch?v=7KJ6in-Njyw&list=PLpCH1XIO3lYtRELTupGHOfrbylNlPhPKR&index=3" class="more-link featured-stories-link">
                                    Watch video
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
                <article class="col-xs-6 col-md-3 journal">
                    <header class="rectangle-box big-image">
                        <div class="rectangle-content">
                            <div>
                                <span>
                                    <img alt="Image of a keyword with the word " vote" on a button" data-lazy="https://3718aeafc638f96f5bd6-d4a9ca15fc46ba40e71f94dec0aad28c.ssl.cf1.rackcdn.com/home-featured-656.jpg">
                                </span>
                            </div>
                        </div>
                    </header>
                    <div class="rectangle-box big-text">
                        <div class="rectangle-content">
                            <div>
                                <header>
                                    <h3 class="keyword date">New Journal</h3>
                                    <h4 class="article-title">
                                        <a class="featured-stories-title" href="https://blog.frontiersin.org/2019/12/06/what-will-political-systems-of-the-future-look-like/">
                                            Frontiers in Political Science: political systems of the future
                                        </a>
                                    </h4>
                                </header>
                                <p></p><p>The latest research and scientific studies on politics and political systems fit for the 21st century </p><p></p>
                                <a href="https://blog.frontiersin.org/2019/12/06/what-will-political-systems-of-the-future-look-like/" class="more-link featured-stories-link">
                                    Discover more
                                </a>
                            </div>
                        </div>
                    </div>


                </article>
        </div>
    </div>
</section>
        <section class="home-journals">
    <div class="container-fluid main-container-xxl clearfix">
        <div class="row">
            <div class="col-md-12">
                <h2 class="pull-left section-title">Journals</h2>
                <ul class="list-unstyled list-inline clearfix tabby sorting">
                    <li class="sort selected" data-domain-id="0">
                        <a class="journals-filter" href="javascript:void(0)">All</a>
                    </li>
                        <li class="sort" data-domain-id="1">
                            <a class="journals-filter" href="javascript:void(0)">Science</a>
                        </li>
                        <li class="sort" data-domain-id="2">
                            <a class="journals-filter" href="javascript:void(0)">Health</a>
                        </li>
                        <li class="sort" data-domain-id="3">
                            <a class="journals-filter" href="javascript:void(0)">Engineering</a>
                        </li>
                        <li class="sort" data-domain-id="5">
                            <a class="journals-filter" href="javascript:void(0)">Humanities and Social Sciences</a>
                        </li>
                        <li class="sort" data-domain-id="19">
                            <a class="journals-filter" href="javascript:void(0)">Young Minds </a>
                        </li>
                        <li class="sort" data-domain-id="20">
                            <a class="journals-filter" href="javascript:void(0)">Sustainability</a>
                        </li>
                </ul>
            </div>
        </div>
        <div class="message-wrapper hidden" style="padding-left: 45%;padding-top: 3%;padding-bottom: 3%">
            No journals found.
        </div>
        <div class="loading-wrapper hidden" style="padding-left: 49%;padding-top: 3%;padding-bottom: 3%">
            <img src="images/ajax-loader.gif" alt="Loading..">
        </div>
        <div class="row featured-journals hidden">
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/2359">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Dystonia, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/2359">
                                <h3 class="media-heading"><span></span><strong>Dystonia</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/2078">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Earth Science, Systems and Society, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/2078">
                                <h3 class="media-heading"><span></span><strong>Earth Science, Systems and Society</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/979">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers for Young Minds, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/979">
                                <h3 class="media-heading"><span>Frontiers for</span><strong>Young Minds</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/2449">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Aerospace Engineering, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/2449">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Aerospace Engineering</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1566">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Aging, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1566">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Aging</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/2477">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Aging Neuroscience, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/2477">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Aging Neuroscience</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1541">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Agronomy, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1541">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Agronomy</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1705">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Allergy, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1705">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Allergy</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1989">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Analytical Science, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1989">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Analytical Science</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1719">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Animal Science, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1719">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Animal Science</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/981">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Applied Mathematics and Statistics, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/981">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Applied Mathematics and Statistics</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1437">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Artificial Intelligence, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1437">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Artificial Intelligence</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/603">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Astronomy and Space Sciences, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/603">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Astronomy and Space Sciences</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1589">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Behavioral Neuroscience, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1589">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Behavioral Neuroscience</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1380">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Big Data, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1380">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Big Data</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/452">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Bioengineering and Biotechnology, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/452">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Bioengineering and Biotechnology</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1722">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Bioinformatics, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1722">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Bioinformatics</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/2222">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Biomaterials Science, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/2222">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Biomaterials Science</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1418">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Blockchain, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1418">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Blockchain</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/921">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Built Environment, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/921">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Built Environment</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/755">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Cardiovascular Medicine, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/755">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Cardiovascular Medicine</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1901">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Catalysis, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1901">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Catalysis</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/403">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Cell and Developmental Biology, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/403">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Cell and Developmental Biology</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1440">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Cellular and Infection Microbiology, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1440">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Cellular and Infection Microbiology</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1523">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Cellular Neuroscience, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1523">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Cellular Neuroscience</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1532">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Chemical Engineering, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1532">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Chemical Engineering</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/601">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Chemistry, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/601">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Chemistry</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1490">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Climate, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1490">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Climate</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1729">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Clinical Diabetes and Healthcare, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1729">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Clinical Diabetes and Healthcare</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1238">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Communication, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1238">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Communication</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1787">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Communications and Networks, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1787">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Communications and Networks</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/9">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Computational Neuroscience, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/9">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Computational Neuroscience</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1511">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Computer Science, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1511">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Computer Science</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1724">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Conservation Science, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1724">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Conservation Science</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1785">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Control Engineering, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1785">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Control Engineering</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/607">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Dental Medicine, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/607">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Dental Medicine</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1534">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Digital Health, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1534">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Digital Health</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/788">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Digital Humanities, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/788">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Digital Humanities</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/2136">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Drug Delivery, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/2136">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Drug Delivery</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/2137">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Drug Discovery, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/2137">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Drug Discovery</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/2161">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Drug Safety and Regulation, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/2161">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Drug Safety and Regulation</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/654">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Earth Science, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/654">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Earth Science</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/471">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Ecology and Evolution, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/471">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Ecology and Evolution</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1239">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Education, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1239">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Education</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1800">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Electronic Materials, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1800">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Electronic Materials</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1696">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Electronics, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1696">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Electronics</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/106">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Endocrinology, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/106">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Endocrinology</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/626">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Energy Research, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/626">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Energy Research</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1697">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Environmental Chemistry, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1697">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Environmental Chemistry</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/627">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Environmental Science, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/627">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Environmental Science</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/2394">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Epidemiology, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/2394">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Epidemiology</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/21">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Evolutionary Neuroscience, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/21">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Evolutionary Neuroscience</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/2289">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Food Science and Technology, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/2289">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Food Science and Technology</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1366">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Forests and Global Change, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1366">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Forests and Global Change</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1725">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Fungal Biology, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1725">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Fungal Biology</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1529">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Future Transportation, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1529">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Future Transportation</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/2333">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Gastroenterology, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/2333">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Gastroenterology</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/240">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Genetics, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/240">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Genetics</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1540">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Genome Editing, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1540">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Genome Editing</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1728">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Global Women's Health, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1728">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Global Women's Health</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/2063">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Health Services, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/2063">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Health Services</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1533">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Human Dynamics, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1533">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Human Dynamics</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1588">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Human Neuroscience, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1588">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Human Neuroscience</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/629">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in ICT, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/629">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>ICT</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/276">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Immunology, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/276">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Immunology</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1723">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Insect Science, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1723">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Insect Science</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/6">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Integrative Neuroscience, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/6">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Integrative Neuroscience</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/2100">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Manufacturing Technology, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/2100">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Manufacturing Technology</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/655">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Marine Science, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/655">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Marine Science</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/608">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Materials, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/608">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Materials</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/950">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Mechanical Engineering, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/950">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Mechanical Engineering</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1573">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Medical Technology, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1573">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Medical Technology</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/602">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Medicine, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/602">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Medicine</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/2307">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Membrane Science and Technology, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/2307">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Membrane Science and Technology</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/2327">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Metals and Alloys, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/2327">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Metals and Alloys</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/310">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Microbiology, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/310">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Microbiology</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/698">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Molecular Biosciences, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/698">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Molecular Biosciences</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/2086">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Molecular Medicine, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/2086">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Molecular Medicine</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/2031">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Molecular Neuroscience, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/2031">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Molecular Neuroscience</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1528">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Nanotechnology, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1528">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Nanotechnology</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/2357">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Nephrology, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/2357">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Nephrology</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/2021">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Network Physiology, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/2021">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Network Physiology</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/11">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Neural Circuits, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/11">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Neural Circuits</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/4">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Neuroanatomy, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/4">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Neuroanatomy</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/17">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Neuroenergetics, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/17">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Neuroenergetics</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/18">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Neuroengineering, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/18">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Neuroengineering</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1833">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Neuroergonomics, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1833">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Neuroergonomics</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1973">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Neuroimaging, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1973">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Neuroimaging</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/12">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Neuroinformatics, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/12">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Neuroinformatics</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/141">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Neurology, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/141">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Neurology</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/13">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Neurorobotics, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/13">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Neurorobotics</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Neuroscience, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Neuroscience</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/2172">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Nuclear Engineering, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/2172">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Nuclear Engineering</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/2062">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Nuclear Medicine, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/2062">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Nuclear Medicine</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/628">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Nutrition, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/628">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Nutrition</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/451">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Oncology, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/451">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Oncology</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/2232">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Ophthalmology, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/2232">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Ophthalmology</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1702">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Oral Health, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1702">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Oral Health</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1727">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Pain Research, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1727">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Pain Research</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/606">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Pediatrics, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/606">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Pediatrics</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/176">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Pharmacology, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/176">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Pharmacology</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1803">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Photonics, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1803">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Photonics</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/616">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Physics, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/616">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Physics</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/210">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Physiology, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/210">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Physiology</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/373">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Plant Science, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/373">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Plant Science</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1558">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Political Science, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1558">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Political Science</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/71">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Psychiatry, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/71">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Psychiatry</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/36">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Psychology, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/36">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Psychology</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/609">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Public Health, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/609">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Public Health</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/2306">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Quantum Science and Technology, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/2306">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Quantum Science and Technology</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1949">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Radiology, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1949">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Radiology</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/659">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Rehabilitation Sciences, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/659">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Rehabilitation Sciences</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1830">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Remote Sensing, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1830">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Remote Sensing</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1479">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Reproductive Health, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1479">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Reproductive Health</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1606">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Research Metrics and Analytics, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1606">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Research Metrics and Analytics</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/657">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Robotics and AI, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/657">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Robotics and AI</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1704">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Sensors, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1704">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Sensors</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1786">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Signal Processing, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1786">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Signal Processing</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1213">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Sociology, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1213">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Sociology</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/2346">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Soft Matter, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/2346">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Soft Matter</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1718">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Soil Science, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1718">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Soil Science</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1695">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Space Technologies, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1695">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Space Technologies</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1482">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Sports and Active Living, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1482">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Sports and Active Living</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/2497">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Stroke, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/2497">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Stroke</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/604">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Surgery, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/604">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Surgery</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1547">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Sustainability, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1547">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Sustainability</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1468">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Sustainable Cities, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1468">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Sustainable Cities</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1335">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Sustainable Food Systems, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1335">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Sustainable Food Systems</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/22">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Synaptic Neuroscience, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/22">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Synaptic Neuroscience</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1721">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Systems Biology, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1721">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Systems Biology</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/5">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Systems Neuroscience, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/5">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Systems Neuroscience</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/2356">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in the Internet of Things, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/2356">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>the Internet of Things</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/2105">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Thermal Engineering, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/2105">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Thermal Engineering</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/473">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Toxicology, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/473">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Toxicology</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/2417">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Transplantation, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/2417">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Transplantation</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1843">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Tropical Diseases, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1843">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Tropical Diseases</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/2176">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Urology, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/2176">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Urology</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/649">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Veterinary Science, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/649">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Veterinary Science</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/2000">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Virology, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/2000">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Virology</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1561">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Virtual Reality, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1561">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Virtual Reality</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1451">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Frontiers in Water, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1451">
                                <h3 class="media-heading"><span>Frontiers in</span><strong>Water</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1919">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of International Journal of Public Health, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1919">
                                <h3 class="media-heading">International Journal of Public Health</h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/1920">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Pathology and Oncology Research, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/1920">
                                <h3 class="media-heading"><strong>Pathology & Oncology Research</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/2077">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Public Health Reviews, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/2077">
                                <h3 class="media-heading"><span></span><strong>Public Health Reviews</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
            <div class="col-md-4">               
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/2360">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Spanish Journal of Soil Science, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/2360">
                                <h3 class="media-heading"><span></span><strong>Spanish Journal of Soil Science</strong></h3>
                        </a>
                    </div>                   
                </div>
                <div class="media journals-tile">
                    <a class="pull-left" href="https://www.frontiersin.org/journals/2445">

                        <div class="__mask-img">
                            <img id="journalImage" class="media-object" [attr.src]="journal.ImageUrl" alt="Logo of Transplant International, a Frontiers Open Access Scientific Academic Journal" src="images/home-journal-default.png" onerror="this.onerror=null;this.src='/Areas/Home/Content/Images/home-journal-default.png'">
                        </div>                       
                    </a>
                    <div class="media-body">
                        <a href="https://www.frontiersin.org/journals/2445">
                                <h3 class="media-heading"><span></span><strong>Transplant International</strong></h3>
                        </a>
                    </div>                   
                </div>
            </div>
        </div>
    </div>
</section>

        <section class="home-numbers 6-numbers">
    <div class="container-fluid main-container-xxl">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-title pull-left">Numbers</h2>
            </div>
        </div>
        <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4">
                    <div class="number-container">
                        <div class="rectangle-box home-num">
                            <div class="rectangle-content"><div><span><strong class="num">139</strong><em>Online Journals</em></span></div></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4">
                    <div class="number-container">
                        <div class="rectangle-box home-num">
                            <div class="rectangle-content"><div><span><strong class="num">1165</strong><em>Specialties Represented</em></span></div></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4">
                    <div class="number-container">
                        <div class="rectangle-box home-num">
                            <div class="rectangle-content"><div><span><strong class="num">273K</strong><em>Articles Published</em></span></div></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4">
                    <div class="number-container">
                        <div class="rectangle-box home-num">
                            <div class="rectangle-content"><div><span><strong class="num">1.5 Bil</strong><em>Article Views and Downloads</em></span></div></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4">
                    <div class="number-container">
                        <div class="rectangle-box home-num">
                            <div class="rectangle-content"><div><span><strong class="num">169K</strong><em>On Board Editors</em></span></div></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4">
                    <div class="number-container">
                        <div class="rectangle-box home-num">
                            <div class="rectangle-content"><div><span><strong class="num">90</strong><em>Days Average Review Time</em></span></div></div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>
        <section class="home-graph">
    <div class="container-fluid main-container-xxl">
        <div class="row">
            
<div class="col-md-12 col-lg-6">
    <h6>International Distribution of Frontiers' Editors</h6>
    <div class="map-container hidden">
        <img alt="World map showing the geographic distribution of Frontiers Editors" class="map-background" src="images/map-home.png">

            <div class="north-america map-point">
                <img alt class="bubble" src="images/bubble.png">
                <div><strong>27</strong>%<br><span>North America</span></div>
            </div>
            <div class="south-america map-point">
                <img alt class="bubble" src="images/bubble.png">
                <div><strong>4</strong>%<br><span>South America</span></div>
            </div>
            <div class="europe map-point">
                <img alt class="bubble" src="images/bubble.png">
                <div><strong>41</strong>%<br><span>Europe</span></div>
            </div>
            <div class="middle-east map-point">
                <img alt class="bubble" src="images/bubble.png">
                <div><strong>0</strong>%<br><span>Middle East</span></div>
            </div>
            <div class="asia map-point">
                <img alt class="bubble" src="images/bubble.png">
                <div><strong>23</strong>%<br><span>Asia</span></div>
            </div>
            <div class="oceania map-point">
                <img alt class="bubble" src="images/bubble.png">
                <div><strong>3</strong>%<br><span>Oceania</span></div>
            </div>
            <div class="africa map-point">
                <img alt class="bubble" src="images/bubble.png">
                <div><strong>2</strong>%<br><span>Africa</span></div>
            </div>

    </div>
</div>

            <div class="col-md-12 col-lg-6">
    <h6>Editor's Affiliations: Top 20</h6>
    <ul class="list-unstyled affiliations-list" id="affiliations">
        <li class="bar-scale"></li>
            <li class="bar-label">University of California System</li>
            <li class="bar-number"><strong>2022</strong></li>
            <li class="bar-label">CNRS</li>
            <li class="bar-number"><strong>1493</strong></li>
            <li class="bar-label">Chinese Academy of Sciences</li>
            <li class="bar-number"><strong>1401</strong></li>
            <li class="bar-label">Harvard University</li>
            <li class="bar-number"><strong>1245</strong></li>
            <li class="bar-label">University of Texas System</li>
            <li class="bar-number"><strong>1206</strong></li>
            <li class="bar-label">State University System of Florida</li>
            <li class="bar-number"><strong>916</strong></li>
            <li class="bar-label">INSERM</li>
            <li class="bar-number"><strong>857</strong></li>
            <li class="bar-label">Spanish National Research Council (CSIC)</li>
            <li class="bar-number"><strong>843</strong></li>
            <li class="bar-label">National Institutes of Health (NIH)</li>
            <li class="bar-number"><strong>834</strong></li>
            <li class="bar-label">National Research Council (CNR)</li>
            <li class="bar-number"><strong>796</strong></li>
            <li class="bar-label">University of London</li>
            <li class="bar-number"><strong>747</strong></li>
            <li class="bar-label">Universidade de São Paulo</li>
            <li class="bar-number"><strong>691</strong></li>
            <li class="bar-label">Sapienza University of Rome</li>
            <li class="bar-number"><strong>684</strong></li>
            <li class="bar-label">University of North Carolina System</li>
            <li class="bar-number"><strong>676</strong></li>
            <li class="bar-label">University of Naples Federico II</li>
            <li class="bar-number"><strong>636</strong></li>
            <li class="bar-label">University of Padua</li>
            <li class="bar-number"><strong>608</strong></li>
            <li class="bar-label">Helmholtz-Gemeinschaft Deutscher Forschungszentren (HZ)</li>
            <li class="bar-number"><strong>593</strong></li>
            <li class="bar-label">Zhejiang University</li>
            <li class="bar-number"><strong>564</strong></li>
            <li class="bar-label">Shanghai Jiao Tong University</li>
            <li class="bar-number"><strong>517</strong></li>
            <li class="bar-label">University of Balonga</li>
            <li class="bar-number"><strong>498</strong></li>
     
    </ul>
</div>
        </div>
    </div>
</section>



    </div>
</div>

        </div>
    </div>

        <div data-navigation-plugin="footer"></div>
        <script src="https://static.frontiersin.org/navigation-plugins/footer/js"></script>

    <script type="text/javascript">
        var CurrentIBarMenu = 'home';
        var CarouselInitialTransitionTime = 15;
        var CarouselTransitiontime = 10;

        var FRConfiguration = (function() {
            return {
                SharepointWebsiteUrl: 'https://www.frontiersin.org',
                HomeUIUrl: 'https://www.frontiersin.org',
                SearchUIUrl: 'https://www.frontiersin.org'
            };
        })();

    </script>

    <script src="https://static.frontiersin.org/areas/home/js/vendors?v=o7E1r2LKczTIRwKNzecTRr9k5oAraRSKGribAvF1RcI1"></script>

    <script src="https://static.frontiersin.org/areas/home/js/app?v=bsUCdaNAFVGKiSKLAIiidB4-AaGNuIzjbf_1mKV7_5w1"></script>





</body></html>