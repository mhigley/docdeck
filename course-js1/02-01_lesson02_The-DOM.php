<?php
    $url = $_SERVER['DOCUMENT_ROOT'];
    include $url.'/inc/head.php';
?>
<section data-title="Review">
    <article>
        <h2>Review</h2>
        <ul>
            <li>Comments and variables</li>
            <li>Data Types
                <ul>
                    <li>String</li>
                    <li>Number</li>
                    <li>Boolean</li>
                    <li>Object</li>
                    <li>Array</li>
                    <li>Null</li>
                    <li>Undefined</li>
                </ul>
            </li>
            <li>HTML DOM – Document Object Model
                <ul>
                    <li>The HTML DOM is a standard object model and programming interface for html</li>
                    <li>It is structured as a tree of objects</li>
                    <li>The DOM interface allows us to get, add, modify, and delete HTML elements</li>
                </ul>
                <figure>
                    <img src="/img/pic_htmltree.gif" alt="The HTML DOM Tree of Objects">
                    <figcaption>
                        <small>Source: <a href="http://www.w3schools.com/js/js_htmldom.asp" target="_blank">w3schools.com</a></small>
                    </figcaption>
                </figure>
            </li>
        </ul>
    </article>
</section>
<section data-title="Using JavaScript in a web page">
    <article>
        <h2>Using Javascript in a Web Page</h2>
        <ul>
            <li>3 options:
                <ul>
                    <li>Inline JavaScript</li>
                    <li>Inline Script Tag</li>
                    <li>Script Tag with Src (this imports a separate JS file into your page)</li>
                </ul>
            </li>
        </ul>
        <h4>Inline Javascript</h4>
        <ul>
            <li>Create a blank html file with an h1 tag using the onclick attribute like the example below</li>
            <li>
                <p data-height="250" data-theme-id="23663" data-slug-hash="VjproW" data-default-tab="html,result" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/VjproW/">JS Inline</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                <script async src="https://assets.codepen.io/assets/embed/ei.js"></script>
            </li>
            <li>The onclick attribute can be used to attach some functionality to a DOM node. NOTE: This is not the recommended way of attaching functionality to your DOM elements, for now at least...</li>
            <li>This is considered inline since the code that JavaScript will execute is inside the node itself. It lives in the page, thus it is considered inline.</li>
        </ul>

        <h4>Inline Script Tag</h4>
        <ul>
            <li>The next way is another type of inline JavaScript, in that it's JavaScript that is executed in the context of the html page. IE the code itself still lives inside the html page, but in its own script tag.</li>
            <li>Remove the onclick attribute from your h1 tag and alter your page markup to match the example below</li>
            <li>
                <p data-height="300" data-theme-id="23663" data-slug-hash="yJMpBd" data-default-tab="html,result" data-user="mhigley" data-embed-version="2" data-preview="true" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/yJMpBd/">JS Inline Script</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                <script async src="https://assets.codepen.io/assets/embed/ei.js"></script>
            </li>
        </ul>

        <h4>Script Tag With Src</h4>
        <ul>
            <li>One of the last ways of including scripts in your page is similar to the previous way, except instead of putting your JavaScript inline you specify an external JavaScript file that the browser will include in your page and execute.</li>
            <li>Create a new JavaScript file in the same folder as your html file you've been using for the above examples. Include that file into your html file using the method below.</li>
            <li>
                <p data-height="250" data-theme-id="23663" data-slug-hash="NrpXWe" data-default-tab="html,result" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/NrpXWe/">JS Script Tag with Src</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                <script async src="https://assets.codepen.io/assets/embed/ei.js"></script>
            </li>
            <li>Insert the following line into your new JS file</li>
            <li>
                <code><pre>
alert("I'm external");</pre></code>
            </li>
            <li>So when the browser encounters a script tag with a src attribute it will include the file and execute it.</li>
            <li>Note: This is usually the best way of including JavaScript on your page. There are always exceptions but generally speaking, when you start writing your own JavaScript, you'll add your scripts this way.</li>
        </ul>

        <h4>Execution of a JS file</h4>
        <ul>
            <li>JavaScript always executes from top to bottom. So if you include two JavaScript files...</li>
            <li>
                <p data-height="125" data-theme-id="23663" data-slug-hash="ZOexYM" data-default-tab="html" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/ZOexYM/">JS Execution of a JS file</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                <script async src="//assets.codepen.io/assets/embed/ei.js"></script>
            </li>
            <li>The browser will first download foo.js, execute it line by line, then download bar.js and execute that, etc...</li>
            <li>Often, you may want to use something defined in foo.js inside bar.js. In order to do this, you must load foo.js first, so it is executed, then load bar.js.</li>
        </ul>
    </article>
</section>
<section data-title="User Interaction">
    <article>
        <h2>User Interaction</h2>
        <ul>
            <li>Alert, Confirm, and Prompt functions</li>
            <li>First, what is a function?
                <ul>
                    <li>We will get much deeper into functions in the following class sessions, but for now, understand a function is nothing more than some grouped JavaScript behavior that performs a specific set of actions. You call a function.
                        It returns a value.</li>
                </ul>
            </li>
            <li>alert() and confirm() and prompt() can each be used to convey or solicit information from a user</li>
            <li>alert() presents a message to the user</li>
            <li>confirm() will return a true or false Boolean depending on the button the user clicked</li>
            <li>prompt() will allow you to ask the user for input, and then use it in your script</li>
            <li>All three functions halt the execution of JavaScript until some action by the user takes place</li>
        </ul>
    </article>
</section>
<section data-title="Assignment">
    <article>
        <h2>Assignment</h2>
        <ol>
            <li>Create a new script called app.js and program it to do the following:
                <ul>
                    <li>Ask for your first name</li>
                    <li>Ask for your last name</li>
                    <li>Log your first name to the console</li>
                    <li>Alert your last name</li>
                    <li>Confirm (anything) and alert the result of the confirm</li>
                </ul>
                <li>Include your app.js file in a blank empty html page</li>
                <li>Execute your script</li>
                <li>Make sure that your script functions the way it's expected too</li>
            </li>
        </ol>
    </article>
</section>
<?php include $url.'/inc/footer.php'; ?>
