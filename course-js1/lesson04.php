<?php
    $url = $_SERVER['DOCUMENT_ROOT'];
    include $url.'/inc/head.php';
?>
<section>
    <article>
        <h2>Review</h2>
        <p>
            Write a small JS program that will:
        </p>
        <ol>
            <li>Prompt for two numbers</li>
            <li>Store them into variables</li>
            <li>Parse the values into numbers (parseInt)</li>
            <li>Multiply the two numbers and alert the result</li>
            <li>Divide the two numbers and alert the result</li>
        </ol>
    </article>
</section>
<section>
    <article>
        <h2>Intrinsic Objects</h2>
        <p>
            JavaScript provides intrinsic (or "built-in") objects. They are the Array, Boolean, Date, Error, Function, Global, JSON, Math, Number, Object, RegExp, and String objects. The intrinsic objects have associated methods, functions, properties, and constants that are described in detail in the language reference. We'll be focusing on four of these objects: String, Math, Date, and Number Objects.
        </p>
        <ul>
            <li>
                <h4>String Object</h4>
                <p>
                    String Literals. A string literal is zero or more characters enclosed in single or double quotation marks. A string literal has a primary (primitive) data type of string. A String object is created by using the new Operator, and has a data type of Object.
                </p>
                <ul>
                    <li>Strings can be treated as objects in JavaScript. This gives us access to special built-in functions to use on strings.</li>
                    <li>length(), substring(x,y), toUpperCase()</li>
                    <li>Additional string functions: <a href="http://www.w3schools.com/js/js_string_methods.asp#" target="_blank">learn more</a></li>
                </ul>
            </li>
            <li>
                <h4>Math Object</h4>
                <p>
                    Unlike the other global objects, Math is not a constructor. All properties and methods of Math are static. You refer to the constant pi as Math.PI and you call the sine function as Math.sin(x), where x is the method's argument. Constants are defined with the full precision of real numbers in JavaScript.
                </p>
                <ul>
                    <li>Contains functions to perform mathematical operations and conversions</li>
                    <li>Math.PI, Math.round(), Math.sqrt()</li>
                    <li>Additional math functions: <a href="http://www.w3schools.com/js/js_math.asp" target="_blank">learn more</a></li>
                </ul>
            </li>
            <li>
                <h4>Date Object</h4>
                <p>
                    Creates a JavaScript Date instance that represents a single moment in time. Date objects are based on a time value that is the number of milliseconds since 1 January, 1970 UTC.
                </p>
                <ul>
                    <li>The Date object can be used to represent and compare dates, as well as get the current system time.</li>
                    <li>Additional date function: <a href="http://www.w3schools.com/js/js_date_methods.asp" target="_blank">learn more</a></li>
                </ul>
            </li>
            <li>
                <h4>Number Object</h4>
                <p>
                    The Number JavaScript object is a wrapper object allowing you to work with numerical values. A Number object is created using the Number() constructor.
                </p>
                <ul>
                    <li>The number object contains special numeric constants that are important to JavaScript.</li>
                    <li>Number.MAX_VALUE, Number.MIN_VALUE, Number.NaN, Number.POSITIVE_INFINITY, Number.NEGATIVE_INFINITY</li>
                    <li>Additional number function: <a href="http://www.w3schools.com/js/js_number_methods.asp" target="_blank">learn more</a></li>
                </ul>
            </li>
        </ul>
    </article>
</section>
<section>
    <article>
        <h2>Function Basics</h2>
        <p>
            We've talked about functions during our first few classes, but up until now we've not really looked at what they are, how they work, and most importantly, how we can write our own.
        </p>
        <p>
            Let’s define a JavaScript function as: a set of statements that performs a task or calculates a value
        </p>
        <p>
            Functions allow you to perform a series of tasks, and return a value that can be used later.
        </p>
        <p>
            If a function does not return a value, it will automatically return undefined.
        </p>
        <p>
            To define a function requires four things:
            <ol>
                <li>The function keyword followed by...</li>
                <li>The name of the function</li>
                <li>A list of arguments to the functions enclosed in parentheses and separated by commas</li>
                <li>The statements that define the functions enclosed in curly brackets</li>
            </ol>

        </p>
        <ul>
            <li>
                <h4>Writing your function</h4>
            </li>
            <li class="tryit">
                Try it: Create a function that logs "hello world" to the console.
            </li>
            <li>
                <p data-height="150" data-theme-id="23663" data-slug-hash="YWEyPL" data-default-tab="js" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/YWEyPL/">JS1 First Function</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                <script async src="//assets.codepen.io/assets/embed/ei.js"></script>
            </li>
            <li>
                <blockquote>
                    <p>
                        Let's pick that function apart:
                    </p>
                    <ol>
                        <li>
                            <code class="inline">function helloWorld() {</code> - the <code class="inline">function</code> keyword followed by an arbitrary function name. In this case <strong>helloWorld</strong>. The function does not take any arguments so we just have an empty set of parentheses. Then we have an opening curly bracket to start our JavaScript statements.
                        </li>
                        <li>
                            <code class="inline">console.log("hello world");</code> - the functions body. In this case, we are simply logging "hello world" to the console.
                        </li>
                        <li>
                            <code class="inline">}</code> - closing curly brace, ends our function definition.
                        </li>
                        <li>
                            Great, run that in the console. What happens?
                        </li>
                    </ol>
                </blockquote>
            </li>
            <li>
                <h4>Calling your function</h4>
                <p>
                    JavaScript functions need to be "called" or "invoked". Simply writing the function only makes the JavaScript interpreter aware that it exists, it does not call it right away.
                </p>
                <p>
                    You call a function by using its name, followed by a set of parenthesis. Recall other functions we've used, the functions are always called with the parentheses. console.log(...) parseInt(...), etc...
                </p>
            </li>
            <li class="tryit">
                Try it: So, let’s call our function. Alter your code to call the function.
            </li>
            <li>
                <p data-height="200" data-theme-id="23663" data-slug-hash="jAabWE" data-default-tab="js" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/jAabWE/">jAabWE</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                <script async src="//assets.codepen.io/assets/embed/ei.js"></script>
            </li>
            <li>
                <blockquote>
                    <p>
                        So what did we add?
                    </p>
                    <ol>
                        <li>
                            <code class="inline">helloWorld();</code> - notice what we've done here? After the function, when we need to run or "invoke" the function. We just call it by its name!
                        </li>
                    </ol>
                </blockquote>
                <p>
                    Now you should see your console.log appear. So we called the function, and JavaScript executed the code found inside it.
                </p>
            </li>
            <li>
                <h4>Adding arguments</h4>
                <p>
                    Now create a function that takes 1 argument, and log that to the console instead of the hard coded "hello world" string. While we’re at it, rename it to something more appropriate, like log.
                </p>
            </li>
            <li class="tryit">
                Try it: Create a function called log that accepts one argument, and logs it to the console.
            </li>
            <li>
                <p data-height="200" data-theme-id="23663" data-slug-hash="VjAvjd" data-default-tab="js" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/VjAvjd/">JS1 First Function Parameter</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                <script async src="//assets.codepen.io/assets/embed/ei.js"></script>
                <p>
                    Notice, we do not use the var keyword when working with our function arguments. The arguments are scoped to that function (more on this later).
                </p>
            </li>
            <li class="tryit">
                Try it: Call your log function without passing any arguments, what gets logged to the console?
            </li>
            <li>
                <p>
                    Great, now we're getting somewhere, we can define our own functions that accept arguments and do something with them. It's also worth pointing out that functions can also call other functions.
                </p>
            </li>
        </ul>
    </article>
</section>
<section>
    <article>
        <h2>Truthy / Falsey</h2>
        <p>
            Certain values in JavaScript, when evaluated, are considered "falsy" or "truthy".<br>
            The following values are always falsy:
        </p>
        <ul>
            <li>
                <ul>
                    <li>false</li>
                    <li>0 (literal number zero)</li>
                    <li>"" empty string</li>
                    <li>null</li>
                    <li>undefined</li>
                    <li>NaN (Not a number)</li>
                </ul>
            </li>
            <li>
                <p>
                    All other values are truthy, including "0" (zero in quotes), "false" (false in quotes), empty functions, empty arrays, and empty objects.
                </p>
            </li>
        </ul>
    </article>
</section>
<section>
    <article>
        <h2>Assignment</h2>
        <p>
            Write a function that takes a string as an argument (input), capitalizes only the first letter, and returns the updated string. For example, if I pass the string “matthew” into the function, it will return “Matthew”. You should be able to test is like this:
            <p data-height="150" data-theme-id="23663" data-slug-hash="kXxrJy" data-default-tab="js" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/kXxrJy/">kXxrJy</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
            <script async src="//assets.codepen.io/assets/embed/ei.js"></script>
        </p>
    </article>
</section>
<?php include $url.'/inc/footer.php'; ?>
