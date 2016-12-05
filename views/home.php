<!DOCTYPE HTML>
<html lang="en">
<html>
<head>
    <title>{{ @title }}</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description"
          content="Author: Yegor Shemereko, Summary: Explanation of the Front Controller Design Pattern"/>

    <link rel="icon" href="favicon.ico">
    <!--[if lte IE 8]>
    <script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css"/>
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="assets/css/ie8.css"/><![endif]-->
</head>
<body>

<!-- Header -->
<section id="header">
    <header>
        <span class="image avatar" style="margin-bottom: 20px;"><img src="images/avatar.jpg" alt="avatar"/></span>
        <h1 id="logo"><a href="http://yegor.greenrivertech.net">Yegor Shemereko</a></h1>
        <p>Junior Software Developer</p>
    </header>
    <nav id="nav">
        <ul>
            <li><a href="#one" class="active">Intro</a></li>
            <li><a href="#two">Participants</a></li>
            <li><a href="#three">Where to use?</a></li>
            <li><a href="#four">Code Example</a></li>
            <li><a href="#five">Extras</a></li>
            <li><a href="#six">Sources</a></li>

        </ul>
    </nav>
    <footer>
        <ul class="icons">
            <li><a href="https://github.com/yegorshem" class="icon fa-github"><span class="label">Github</span></a></li>
            <li><a href="https://www.linkedin.com/in/yegor-shemereko-9505bb106" class="icon fa-linkedin"><span
                        class="label">LinkedIn</span></a></li>
            <li><a href="https://plus.google.com/118128934938118579930" class="icon fa-google-plus"><span class="label">Google+</span></a>
            </li>
        </ul>
    </footer>
</section>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Main -->
    <div id="main">

        <!-- One -->
        <section id="one">
            <div class="container">
                <header class="major">
                    <h2>{{ @title }}</h2>
                    <p>Provides a centralized entry point <br/>
                        for handling requests.</p>
                </header>
                <p>
                    Have you ever used IronRouter with Meteor.js or the router for FatFree? Then you have the general
                    idea of what a front controller does. Frameworks that actually implement the vanilla version of the
                    front controller pattern would be: Laravel, Symfony, Zend Framework, Spring Framework, Drupal, and
                    many more.
                </p>

                <p>
                    The Front Controller Design Pattern works like a vending machine: somebody who wants a snack comes
                    up and types in what they want into a panel, then the vending machine system picks out the object
                    requested, and the result is the snack provided. In the same way, the hungry person is the user, the
                    panel is the Front Controller, the vending machine system is the Dispatcher, and the result is the
                    View.
                </p>


            </div>
        </section>

        <!-- Two -->
        <section id="two">
            <div class="container">
                <h3>Participants</h3>
                <p>The pattern is composed of 4 entities:</p>

                <div class="table-wrapper">
                    <table class="alt">
                        <tbody>
                        <tr>
                            <td>Front Controller</td>
                            <td>Single handler for all kinds of requests coming to the application (either web based/
                                desktop based).
                            </td>
                        </tr>
                        <tr>
                            <td>Dispatcher</td>
                            <td>Front Controller may use a dispatcher object which can dispatch the request to
                                corresponding specific handler.
                            </td>
                        </tr>
                        <tr>
                            <td>Helper*</td>
                            <td>A helper helps View or Controller to process. Thus helper can achieve various goals.
                            </td>
                        </tr>
                        <tr>
                            <td>View</td>
                            <td>Views are the object for which the requests are made.</td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="1"></td>
                            <td>&nbsp;&nbsp;*Helper is rarely used</td>
                        </tr>
                        </tfoot>
                    </table>
                </div>

                <br>
                <span class="image fit"><img src="images/uml.jpg" alt=""/></span>


            </div>
        </section>

        <!-- Three -->
        <section id="three">
            <div class="container">
                <h3>Where to use?</h3>
                <p>
                    Web applications, web applications, and more web applications.
                </p>
                <h4>Where is it used?</h4>

                <div class="box alt">
                    <div class="row 50% uniform">
                        <div class="4u"><span class="image fit"><img src="images/drupal.png" alt="drupal"/></span></div>
                        <div class="4u"><span class="image fit"><img src="images/spring.png" alt="spring"/></span></div>
                        <div class="4u"><span class="image fit"><img src="images/symfony.png" alt="symfony"/></span>
                        </div>
                    </div>
                    <div class="row 50% uniform">
                        <div class="4u"><span class="image fit"><img src="images/zend.png" alt="zend"/></span></div>
                        <div class="4u"><span class="image fit"><img src="images/cake.png" alt="cake"/></span></div>
                        <div class="4u"><span class="image fit"><img src="images/yii.png" alt="yii"/></span></div>
                    </div>
                </div>
                <h4>...and many more.</h4>

                <p>
                    Basically, it is already implemented with most MVC frameworks, but it can always be implemented
                    inside an OOP Language, there will just have to be an interface for all the views -> so they all
                    will have the show() method.
                </p>

            </div>
        </section>

        <!-- Four -->
        <section id="four">
            <div class="container">
                <h3>Code Example</h3>

                <h4>Views</h4>
                <p>
                    Simple views that the user/client will see.
                </p>
                <pre><code>
    public class HomeView {
       public void show(){
          System.out.println("Welcome to Home Page");
       }
    }
                </code></pre>
                <pre><code>
    public class StudentView {
       public void show(){
          System.out.println("Welcome to Student Page");
       }
    }
                </code></pre>


                <h4>Dispatcher</h4>
                <p>
                    The object that is aware of all the views that exist and provides the requested view.
                </p>
                <pre><code>
    public class Dispatcher {
       private StudentView studentView;
       private HomeView homeView;

       public Dispatcher(){
          studentView = new StudentView();
          homeView = new HomeView();
       }

       public void dispatch(String request){
          if(request.equalsIgnoreCase("STUDENT")){
             studentView.show();
          }
          else{
             homeView.show();
          }
       }
    }
                </code></pre>

                <h4>FrontController</h4>
                <p>
                    The object that is the first point of access and is aware that a dispatcher exists. It can also hold
                    other functionality, like logging requests or authenticating users before a View is requested from
                    the Dispatcher.
                </p>
                <pre><code>
    public class FrontController {

       private Dispatcher dispatcher;

       public FrontController(){
          dispatcher = new Dispatcher();
       }

       private boolean isValidUser(){
          System.out.println("User is valid.");
          return true;
       }

       private void logRequest(String request){
          System.out.println("Page requested: " + request);
       }

       public void dispatchRequest(String request){

          logRequest(request);

          if(isValidUser()){
             dispatcher.dispatch(request);
          }
       }
    }
                </code></pre>

                <h4>Main Method</h4>
                <p>
                    An example of how requests would be executed. Usually this would be driven by the user through the
                    URL.
                </p>
                <pre><code>
    public class FrontControllerPatternDemo {
       public static void main(String[] args) {

          FrontController frontController = new FrontController();
          frontController.dispatchRequest("HOME");
          frontController.dispatchRequest("STUDENT");
       }
    }
                </code></pre>

            </div>
        </section>

        <!-- Five -->

        <section id="five">
            <div class="container">
                <h3>Extras</h3>

                <h4>Category - Architectural Pattern</h4>
                <p>
                    The Front Controller Pattern is considered an Architectural Pattern because it encapsulates the
                    whole application into a system. It is not a directory based system like the the usual case for web
                    applications. Instead it is a system with one point of access where all you need to provide is
                    a name and a View is fetched.
                </p>

                <h4>Benefits/Advantages of Front Controller Pattern</h4>
                <ul>
                    <li>Hides file hierarchy.</li>
                    <li>Authentication and logging made easy.</li>
                    <li>No more view navigation!</li>
                </ul>

                <h4>Façade vs Front Controller</h4>
                <p>
                    There is a similar concept: "bundle everything and provide a single point of management". But it is
                    not so simple. The Facade pattern provides a unified interface which hides complexity - it has
                    minimal logic and just puts multiple methods together into one in logical ways. On the other hand is
                    the Front Controller with has a Dispatcher that bundles everything together, but, when a View is
                    Requested to the Dispatcher, a View is returned if it exists.
                </p>
                <p>In other words: Facade -> unified interface which hides complexity VS Front Controller -> single
                    point of access for Views</p>

                <h4>How is Router related?</h4>
                <p>
                    The router provides "a centralized entry point for handling requests" -> the definition of Front
                    Controller, but it does not have the original participants of the pattern. For example, in web
                    frameworks like Meteor.js or fatFree there is a router provided and it acts in place of the
                    Dispatcher. That means the index.php becomes sort of the "Front Controller" and the View is a
                    combination of a controller and view. So the idea of the Front Controller is the same, just the
                    participants are different.
                </p>


            </div>
        </section>

        <section id="six">
            <div class="container">
                <h3>Sources</h3>

                <ol>
                    <li>Tutorials Point | <a
                            href="https://www.tutorialspoint.com/design_pattern/front_controller_pattern.htm">Front
                            Controller Pattern</a></li>
                    <li>Wikipedia | <a href="https://en.wikipedia.org/wiki/Front_controller">Front Controller</a></li>
                    <li>Stack Overflow | <a
                            href="http://stackoverflow.com/questions/839359/front-controller-vs-fa%C3%A7ade-pattern">Front
                            Controller vs Facade</a></li>
                    <li>Stack Overflow | <a
                            href=http://stackoverflow.com/questions/32389438/front-controller-pattern-is-router-a-front-controller"">Front
                            Controller -> Router?</a></li>
                    <li>Oracle | <a href="http://www.oracle.com/technetwork/java/frontcontroller-135648.html">Core J2EE
                            Patterns - Front Controller</a></li>
                </ol>
            </div>
        </section>


    </div>

    <!-- Footer -->
    <section id="footer">
        <div class="container">
            <ul class="copyright">
                <li>Created by Yegor Shemereko</li>
                <li>Date created: 12/1/2016</li>
                <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
            </ul>
        </div>
    </section>

</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrollzer.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<!--[if lte IE 8]>
<script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>

</body>
</html>