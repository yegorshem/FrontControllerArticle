<?php
/**
 * User: Yegor Shemereko
 * Date: 11/30/2016
 * Time: 10:41 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description"
          content="Author: Yegor Shemereko, Summary: Explanation of the Front Controller Design Pattern"/>

    <title>{{ @title }}</title>

    <!-- Bootstrap css -->
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous"/>

    <!-- Bridge Pattern website css -->
    <link rel="stylesheet"
          href="css/styles.css"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Header -->
<div class="container header">
    <h1>{{ @title }}</h1>
</div>

<!-- Tutorial Content -->
<div class="container">


    <h2>Intro - How does the design pattern work?</h2>

    <p>
        Front controller is an architectural pattern. Front controllers are often
        used in web applications to implement workflows. While not strictly
        required, it is much easier to control navigation across a set of related
        pages (for instance, multiple pages used in an online purchase) from a
        front controller than it is to make the individual pages responsible
        for navigation.
    </p>

    <p>
        /How does the design pattern work?
        / What are the objects involved in the pattern and their roles?
        What types of problems should you use the pattern with? Alternatively, when should you not use this pattern?
        How would you demonstrate this pattern in code?
        What are the advantages of using the pattern?
    </p>


    <h2>Participants - What are the objects involved in the pattern and their roles?</h2>
    <div class="list-group">
        <div class="list-group-item">
            <h3 class="list-group-item-heading">Front Controller</h3>
            <p class="list-group-item-text">
                Single handler for all kinds of requests coming to the application (either web based/ desktop based).
            </p>
        </div>
        <div class="list-group-item">
            <h3 class="list-group-item-heading">Dispatcher</h3>
            <p class="list-group-item-text">
                Front Controller may use a dispatcher object which can dispatch the request to corresponding specific
                handler. </p>
        </div>
        <div class="list-group-item">
            <h3 class="list-group-item-heading">View</h3>
            <p class="list-group-item-text">
                Views are the object for which the requests are made. </p>
        </div>
    </div>


    <h2>Where to use Front Controller?</h2>
    <p>
        What types of problems should you use the pattern with? Alternatively, when should you not use this pattern?
    </p>

    <p>
        Apple pie caramels gingerbread. Powder jelly-o carrot cake sweet tootsie roll. Toffee sesame snaps oat cake
        sugar plum ice cream donut fruitcake. Croissant tiramisu croissant chupa chups gummies chupa chups.
    </p>


    <h2>Front Controller Pattern Code Example</h2>
    <p>
        Apple pie caramels gingerbread. Powder jelly-o carrot cake sweet tootsie roll. Toffee sesame snaps oat cake
        sugar plum ice cream donut fruitcake. Croissant tiramisu croissant chupa chups gummies chupa chups.
    </p>


    <p>
        Apple pie caramels gingerbread. Powder jelly-o carrot cake sweet tootsie roll. Toffee sesame snaps oat cake
        sugar plum ice cream donut fruitcake. Croissant tiramisu croissant chupa chups gummies chupa chups.
    </p>


    <h2>Benefits of using Front Controller</h2>
    <ul>
        <li>Potato</li>
        <li>Not-Potato</li>
        <li>Very-Not-Potato</li>
        <li>Potatoish-Potato</li>
    </ul>


    <h2>Related Patterns</h2>
    <p>
        Apple pie caramels gingerbread. Powder jelly-o carrot cake sweet tootsie roll. Toffee sesame snaps oat cake
        sugar plum ice cream donut fruitcake. Croissant tiramisu croissant chupa chups gummies chupa chups.
    </p>


    <h2>Sources</h2>
    <!--    <div class="research-sources">-->
    <!--        <p>-->
    <!--            <i>Bridge</i>. (n.d.).-->
    <!--            Retrieved November 30, 2016, from-->
    <!--            <a href="https://sourcemaking.com/design_patterns/bridge" target="_blank">-->
    <!--                https://sourcemaking.com/design_patterns/bridge-->
    <!--            </a>-->
    <!--        </p>-->
    <!--        <p>-->
    <!--            Banas, Derek (2012, October 1). <i>Bridge Design Pattern</i>.-->
    <!--            [Video File] Retrieved November 30, 2016, from-->
    <!--            <a href="https://www.youtube.com/watch?v=9jIgSsIfh_8" target="_blank">-->
    <!--                https://www.youtube.com/watch?v=9jIgSsIfh_8-->
    <!--            </a>-->
    <!--        </p>-->
    <!--        <p>-->
    <!--            Gamma, E., Helm, R., Johnson, R., &amp; Vislissides, J. (1995).-->
    <!--            <i>Design patterns: Elements of reusable object-oriented software</i>.-->
    <!--            Reading, MA: Addison-Wesley.-->
    <!--        </p>-->
    <!--    </div>-->

    <!-- Link to my website -->
    <!--    <div class="alexb-website-link">-->
    <!--        <a href="http://alexb.greenrivertech.net/">-->
    <!--            Visit Alex Ball's Website-->
    <!--        </a>-->
    <!--    </div>-->
</div>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Bootstrap js -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>
</html>
