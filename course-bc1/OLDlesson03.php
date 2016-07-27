<?php
    $url = $_SERVER['DOCUMENT_ROOT'];
    include $url.'/inc/head.php';
?>
<section data-title="Review">
    <article>
        <h1>Review</h1>
        <ol>
            <li>Create a new script called app.js and program it to do the following:
                <ul>
                    <li>Ask for your first name</li>
                    <li>Ask for your last name</li>
                    <li>Log your first name to the console</li>
                    <li>Alert your last name</li>
                    <li>Confirm (anything) and alert the result of the confirm</li>
                </ul>
            </li>
            <li>Include your app.js file in a blank empty html page</li>
            <li>Execute your script</li>
            <li>Make sure that your script functions the way it's expected too</li>
        </ol>
    </article>
</section>
<section data-title="Code Syntax">
    <article>
        <h1>Code Syntax</h1>
        <ul>
            <li>Readability matters</li>
            <ul>
                <li>camelCasing</li>
                <li>CaSe SeNsItIvItY</li>
                <li>Whitespace</li>
                <li>Comments</li>
            </ul>
        </ul>
    </article>
</section>
<section data-title="Operators">
    <article>
        <h1>Operators</h1>
        <p>We talked a bit about number data types in the last class, but not much about what we can do with them. Operators allow us to take action and do something with the variables we've created.<br />
        Some operators you will see often include:</p>
        <ul>
            <li><h4>Mathematical</h4>
                <ul>
                    <li>= (equals, assignment)</li>
                    <li>+ (addition)</li>
                    <li>- (subtraction)</li>
                    <li>* (multiplication)</li>
                    <li>/ (division)</li>
                    <li>% (modulus)</li>
                </ul>
                <blockquote>
                    <p>Remember operator precedence? &mdash; PEMDAS &mdash; <em>"Please Excuse My Dear Aunt Sally"</em></p>
                    <ol>
                        <li>Parentheses</li>
                        <li>Exponents</li>
                        <li>Multiplication and Division</li>
                        <li>Addition and Subtraction</li>
                    </ol>
                </blockquote>
            </li>
            <li><h4>Shorthand Operators</h4>
                <ul>
                    <li>+=</li>
                    <li>-=</li>
                    <li>*=</li>
                    <li>/=</li>
                    <li>++</li>
                    <li>--</li>
                </ul>
            </li>
            <li><h4>Comparison</h4>
                <ul>
                    <li>== (loose comparison, value only)</li>
                    <li>=== (strict comparison, value and type)</li>
                    <li>!= (loose not equal comparison)</li>
                    <li>!== (strict not equal comparison)</li>
                    <li>< (less than)</li>
                    <li>> (greater than)</li>
                    <li><= (less than or equal to)</li>
                    <li>>= (greater than or equal to)</li>
                </ul>
            </li>
            <li><h4 id="logical-operators">Logical</h4>
                <ul>
                    <li>&& (and)</li>
                    <li>|| (or)</li>
                </ul>
            </li>
            <li><hr></li>
            <li><h4>But what if it's not a number?</h4>
                <p>
                    Introducing the <span class="method">parseInt()</span> Method. <span class="method">parseInt()</span> parses a string and returns a whole number. Spaces are allowed. Only the first number is returned:
                </p>
                <p data-height="300" data-theme-id="23663" data-slug-hash="OXjXxr" data-default-tab="js" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/OXjXxr/">JS Method - parseInt()</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                <script async src="//assets.codepen.io/assets/embed/ei.js"></script>
            </li>
            <li class="tryit">
                <h5>Let's try it!</h5>
                <p>
                    Create a script and accompanying html file that will:
                </p>
                <ol>
                    <li>Prompt for a number value (provide a default of 10)</li>
                    <li>Prompt for a second number value (provide a default of 10)</li>
                    <li>Convert the prompted values into integers</li>
                    <li>Add the numbers together and alert the user with the result </li>
                </ol>
            </li>
        </ul>
    </article>
</section>
<section data-title="parseInt()">
    <article>
        <h1>parseInt()</h1>
        <p>
            Introducing the <span class="method">parseInt()</span> Method. <span class="method">parseInt()</span> parses a string and returns a whole number. Spaces are allowed. Only the first number is returned:
        </p>
        <p data-height="300" data-theme-id="23663" data-slug-hash="OXjXxr" data-default-tab="js" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/OXjXxr/">JS Method - parseInt()</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
        <script async src="//assets.codepen.io/assets/embed/ei.js"></script>
        <ul>
            <li>
                <h4>Let's try it!</h4>
                <p>
                    Note that if you try to parse a value that can't be turned into a number, you will get NaN (Not a number)!
                </p>
                <p data-height="300" data-theme-id="23663" data-slug-hash="QErEAg" data-default-tab="js" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/QErEAg/">JS Method - parseInt() [try it]</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                <script async src="//assets.codepen.io/assets/embed/ei.js"></script>
                <p>
                    Did you notice a new Method in our last example? Let's learn more about <span class="method">isNaN()</span>
                </p>
            </li>
        </ul>
    </article>
</section>
<section data-title="isNaN()">
    <article>
        <h1>isNaN()</h1>
        <p>
            The isNaN() Method determines whether a value is an illegal number (Not-a-Number). This Method returns true if the value equates to NaN. Otherwise it returns false.
        </p>
        <p data-height="300" data-theme-id="23663" data-slug-hash="OXjXdb" data-default-tab="js" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/OXjXdb/">JS Function - isNaN()</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
        <script async src="//assets.codepen.io/assets/embed/ei.js"></script>
        <blockquote>
            <h5>Functions or Methods?</h5>
            <p>
                It makes sense to call isNaN() a global function rather than global method because the function is called globally and not on any objects.<br><br>Anyway, you can also call this function a method, since it is a method of the global object where it is run. In a web browser, the global object is the browser window. Then isNaN() is actually a window method: window.isNaN(). We'll learn more about global functions in future lessons.
            </p>
        </blockquote>
    </article>
</section>
<section data-title="Control Flow">
    <article>
        <h1>Control Flow</h1>
        <p>
            Control flow simply means controlling what code actually gets executed in your program.
            It's very common that your application will want to behave differently based on available data. One common scenario is a login/authentication strategy. If you build an application where you want to require the user to log in, you'll want to show a login screen if they aren't logged in, or redirect them to their home page if they are.
            The kinds of control flow we are going to look at today:
        </p>
        <code><pre>
if
if else
if else if
if else if else
switch
ternary</pre></code>
        <p>
            In almost all cases, the control flow will evaluate some condition, and react accordingly. This enables us to run some code, while skipping other parts.
        </p>
        <ul>
            <li>
                <h4>if statement</h4>
                <p>
                    The most basic forms of control flow are <code class="inline">if / else</code> statements.
                </p>
                <p data-height="200" data-theme-id="23663" data-slug-hash="OXjRjO" data-default-tab="js" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/OXjRjO/">JS if statement</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                <script async src="//assets.codepen.io/assets/embed/ei.js"></script>
            </li>
            <li class="tryit">
                <p>
                    Try it: Create a program that prompts the user for their age. In an if statement check if the user is younger than 18. If so then alert the user "You're a young one!"
                </p>
            </li>
            <li>
                <h4>if else statement</h4>
                <p data-height="300" data-theme-id="23663" data-slug-hash="yJoaKw" data-default-tab="js" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/yJoaKw/">JS if else statement</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                <script async src="//assets.codepen.io/assets/embed/ei.js"></script>
            </li>
            <li class="tryit">
                <p>
                    Try it: Using the code from earlier, add an if else statement alerting all those older than 18 with anything you like.
                </p>
            </li>
            <li>
                <h4>if else if else statement</h4>
                <p data-height="300" data-theme-id="23663" data-slug-hash="jALrxQ" data-default-tab="js" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/jALrxQ/">JS if else if else statement</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                <script async src="//assets.codepen.io/assets/embed/ei.js"></script>
            </li>
            <li class="tryit">
                <p>
                    Try it: Once more, alter the code and add an else if that checks if the user is between 18 and 50. In each section alert the user with something different.
                </p>
            </li>
            <li>
                <h4>evaluate multiple conditions</h4>
                <p>
                    With if statements, it's possible to evaluate multiple conditions, and we use logical operators to do so. This lets us say, "If this AND that are true, then run this code."
                </p>
                <p data-height="350" data-theme-id="23663" data-slug-hash="yJoaqA" data-default-tab="js" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/yJoaqA/">JS if statement (multiple conditions)</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                <script async src="//assets.codepen.io/assets/embed/ei.js"></script>
            </li>
            <li class="tryit">
                <p>
                    Try it: Continuing on with our exercise, alter the code to now ask for both the users age and gender. Using the two inputs set up an if else if ladder that will alert something different for each combination of variables.
                </p>
            </li>
            <li>
                <h4>switch statement</h4>
                <p>
                    Another common control flow element is the switch statement. Switch will evaluate the condition and then perform a given block of code based on that value. It looks like:
                </p>
                <p data-height="300" data-theme-id="23663" data-slug-hash="Eyvgdj" data-default-tab="js" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/Eyvgdj/">JS switch statement</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                <script async src="//assets.codepen.io/assets/embed/ei.js"></script>
            </li>
            <li class="tryit">
                <p>
                    Try it: Finally, using only the age variable, refactor your code to use a switch statement instead of an if statement. 
                </p>
            </li>
            <li>
                <h4>ternary operator</h4>
                <p>
                    Ternary operators are a short hand if else type of control flow. They use the ? and the : as the syntax. It looks like <code class="inline">condition ? trueValue : falseValue;</code>
                </p>
                <p data-height="300" data-theme-id="23663" data-slug-hash="WxEGmL" data-default-tab="js" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/WxEGmL/">JS ternary operator</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                <script async src="//assets.codepen.io/assets/embed/ei.js"></script>
                <p>
                    Ternary operators are great for simple situations where the conditional statement can be boiled down to a simple yes or no answer. When you nest them, things get overly complicated and just because you can, doesn't mean you should.
                </p>
                <p data-height="300" data-theme-id="23663" data-slug-hash="OXjRGE" data-default-tab="js" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/OXjRGE/">JS nested ternary operators</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                <script async src="//assets.codepen.io/assets/embed/ei.js"></script>
            </li>
        </ul>
    </article>
</section>
<section data-title="Assignment">
    <article>
        <h1>Assignment</h1>
        <ol>
            <li>Prompt the user for something that they would like to do.</li>
            <li>Make sure that the user actually types something.</li>
            <li>If the user has not typed anything, alert them that they need to type something and then terminate the program.</li>
            <li>If they have input a to-do item, alert the user with the item and console log it.</li>
        </ol>
    </article>
</section>
<?php include $url.'/inc/footer.php'; ?>
