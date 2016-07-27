<?php
    $url = $_SERVER['DOCUMENT_ROOT'];
    include $url.'/inc/head.php';
?>
<section>
    <article>
        <h2>Introductions</h2>
        <p>Before we begin, I'd like everyone to have an opportunity to speak a little about themselves. Tell us:</p>
        <ol>
            <li>Your name</li>
            <li>A little background on yourself</li>
            <li>What do you want to get out of this class?</li>
        </ol>
    </article>
</section>
<section>
    <article>
        <h2>Class Goals</h2>
        <ul>
            <li>Develop a solid foundation in programming basics</li>
            <li>Learn how to use JavaScript</li>
            <li>Learn development techniques and best practices in JavaScript</li>
            <li>Discover how JavaScript can be used to manipulate the DOM</li>
            <li>Have lots of hands-on experience programming in JavaScript</li>
            <li>Apply our learned fundamentals to build a working application</li>
            <li>Become comfortable enough in JavaScript to create on your own and move on to JSII</li>
            <li>Learn to use Github to manage projects</li>
        </ul>
    </article>
</section>
<section>
    <article>
        <h2>What is JavaScript?</h2>
        <ul>
            <li>Programming language used most often in Web Browsers to power the web</li>
            <li>Allows for handling of user behavior. For example, if user does "this" the page does "that"</li>
            <li>Created in 10 days in May 1995 by Brendan Eich for Netscape</li>
            <li>Name changes: Mocha -> Livescript -> JavaScript -> ECMAScript</li>
            <li>Standardized by ECMA in 1996-1997 so other browsers could also use it</li>
            <li>European Computer Manufacturers Association (ECMA) International is a nonprofit with the goal of developing standards. Because of them you can write (mostly) the same JavaScript code and have it work the same on every Browser</li>
            <li>ECMAScript 2015 (ES6) was released last year, work has started on ECMAScript 2016</li>
        </ul>
    </article>
</section>
<section>
    <article>
        <h2>Examples of JavaScript</h2>
        <ul>
            <li><a href="http://coreyshuman.com/projects/constellation/" target="_blank">Constellation</a></li>
            <li><a href="http://coreyshuman.com/projects/mazesolver/" target="_blank">Maze Solver</a></li>
            <li><a href="http://carvisualizer.plus360degrees.com/threejs/" target="_blank">Car Visualizer</a></li>
            <li><a href="http://cs.stanford.edu/people/karpathy/reinforcejs/puckworld.html" target="_blank">Puck World</a></li>
            <li><a href="http://hellomonday.com/" target="_blank">Hello Monday</a></li>
        </ul>
    </article>
</section>
<section>
    <article>
        <h2>Development Tools</h2>
        <ul>
            <li>Web Browsers - Chrome, Firefox, Edge, Safari, Opera, etc...</li>
            <li>Text Editors - Sublime Text, Espresso, Coda, Cloud9, Visual Studio, etc...</li>
            <li>Developer Console</li>
            <li><a href="https://github.com/Geekwise-Javascript-1/Geekwise-Javascript-1.github.io#welcome-to-javascript-1" target="_blank">Let's get started!</a></li>
            <li>Online Resources
                <ul>
                    <li><a href="http://stackoverflow.com/" target="_blank">Stack Overflow</a></li>
                    <li><a href="https://jsfiddle.net/vsgtjgdo/1/" target="_blank">jsFiddle</a></li>
                    <li><a href="http://www.w3schools.com/js/default.asp" target="_blank">W3schools.com</a></li>
                </ul>
            </li>
        </ul>
    </article>
</section>
<section>
    <article>
        <h2>Variables</h2>
        <p>
            Variables are containers for storing data values
        </p>
        <ul>
            <li></li>
            <li>Format to "declare" a variable:
                <p data-height="100" data-theme-id="23663" data-slug-hash="xOqVzM" data-default-tab="js" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/xOqVzM/">JS Variable</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                <script async src="https://assets.codepen.io/assets/embed/ei.js"></script>
            </li>
            <li>Example:
                <p data-height="150" data-theme-id="23663" data-slug-hash="mEWPje" data-default-tab="js" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/mEWPje/">JS Variables</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                <script async src="https://assets.codepen.io/assets/embed/ei.js"></script>
            </li>
            <li>JavaScript names (identifiers) must be unique</li>
            <li>Rules for constructing identifier names (from w3schools.com):
                <ul>
                    <li>Names can contain letters, digits, underscores, and dollar signs.</li>
                    <li>Names must begin with a letter</li>
                    <li>Names can also begin with $ and _</li>
                    <li>Names are case sensitive (y and Y are different variables)</li>
                    <li>Reserved words (like JavaScript keywords) cannot be used as names</li>
                </ul>
            </li>
        </ul>
    </article>
</section>
<section>
    <article>
        <h2>Comments</h2>
        <ul>
            <li>Comments don’t do anything in the code.</li>
            <li>They are there specifically for the developer (you) to leave yourself notes</li>
            <li>
                <p data-height="200" data-theme-id="23663" data-slug-hash="NrpNYp" data-default-tab="js" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/NrpNYp/">JS Comments</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                <script async src="https://assets.codepen.io/assets/embed/ei.js"></script>
            </li>
            <li>
                Variables can exists on multiple lines as well:
                <p data-height="200" data-theme-id="23663" data-slug-hash="rLyevK" data-default-tab="js" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/rLyevK/">JS Multiline Comment</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                <script async src="https://assets.codepen.io/assets/embed/ei.js"></script>
            </li>
        </ul>
    </article>
</section>
<section>
    <article>
        <h2>Data Types</h2>
        <ul>
            <li><h4>String</h4></li>
            <li>Strings are used to store and manipulate text.</li>
            <li>Strings can be declared inside of single or double quotes.</li>
            <li>
                <p data-height="150" data-theme-id="23663" data-slug-hash="NrpNLj" data-default-tab="js" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/NrpNLj/">JS Data Type - String</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                <script async src="http://assets.codepen.io/assets/embed/ei.js"></script>
            </li>
        </ul>
        <ul>
            <li><h4>Number</h4></li>
            <li>JavaScript has one kind of number type which can be written with or without decimals.</li>
            <li>
                <p data-height="200" data-theme-id="23663" data-slug-hash="qNrZMw" data-default-tab="js" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/qNrZMw/">JS Data Type - Number</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                <script async src="http://assets.codepen.io/assets/embed/ei.js"></script>
            </li>
        </ul>
        <ul>
            <li><h4>Boolean</h4></li>
            <li>
                <p data-height="150" data-theme-id="23663" data-slug-hash="JKWXmV" data-default-tab="js" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/JKWXmV/">JS Data Type - Boolean</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                <script async src="http://assets.codepen.io/assets/embed/ei.js"></script>
            </li>
        </ul>

        <ul>
            <li><h4>Null</h4></li>
            <li>A null is "nothing"</li>
            <li>It is used to represent something that doesn't exist.</li>
            <li>
                <p data-height="100" data-theme-id="23663" data-slug-hash="mEWPvV" data-default-tab="js" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/mEWPvV/">JS Null</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                <script async src="https://assets.codepen.io/assets/embed/ei.js"></script>
            </li>
        </ul>

        <ul>
            <li><h4>Undefined</h4></li>
            <li>A variable without a value is undefined.</li>
            <li>A variable can be emptied by setting its value to undefined.</li>
            <li>
                <p data-height="200" data-theme-id="23663" data-slug-hash="RRpamr" data-default-tab="js" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/RRpamr/">JS Undefined</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                <script async src="https://assets.codepen.io/assets/embed/ei.js"></script>
            </li>
        </ul>
    </article>
</section>
<section>
    <article>
        <h2>Array</h2>
        <ul>
            <li>Arrays are used to store many values within a single variable.</li>
            <li>
                <p data-height="150" data-theme-id="23663" data-slug-hash="pbeyQa" data-default-tab="js" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/pbeyQa/">JS Arrays</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                <script async src="https://assets.codepen.io/assets/embed/ei.js"></script>
            </li>
        </ul>
    </article>
</section>
<section>
    <article>
        <h2>Object</h2>
        <ul>
            <li>Objects are a complex variable type that can contain many variables and functions in one place. These variables and functions are usually referred to as properties and methods.</li>
            <li>JavaScript objects often are used to represent real-life objects.</li>
            <li>Properties usually represent information and values in the object.</li>
            <li>Methods usually represent actions the object can take.</li>
            <li>
                <p data-height="150" data-theme-id="23663" data-slug-hash="YWZqdP" data-default-tab="js" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/YWZqdP/">JS Objects</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                <script async src="https://assets.codepen.io/assets/embed/ei.js"></script>
            </li>
        </ul>
    </article>
</section>
<section>
    <article>
        <h2>Number Systems</h2>
        <ul>
            <li><h4>Decimal – base 10</h4></li>
            <li>1, 15, 1e7, 1.2, -5.3e2</li>
            <li>NaN, +-Infinity, +-0</li>
        </ul>
        <ul>
            <li><h4>Binary – base 2</h4> (recently added)</li>
            <li>0x1, 0xf, 0x15</li>
        </ul>
        <ul>
            <li><h4>Hexadecimal – base 16</h4></li>
            <li>0x1, 0xf, 0x15</li>
        </ul>
        <ul>
            <li><h4>Octal – base 8</h4></li>
            <li>02, 07, 017</li>
        </ul>
        <ul>
            <li><h4>Number Gotchas</h4></li>
            <li>
                <p data-height="150" data-theme-id="23663" data-slug-hash="ZOeOzq" data-default-tab="js" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/ZOeOzq/">JS Number Gotchas</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                <script async src="https://assets.codepen.io/assets/embed/ei.js"></script>
            </li>
        </ul>
        <ul>
            <li><h4>Floating-point number representation</h4></li>
            <li><a href="https://en.wikipedia.org/wiki/Double-precision_floating-point_format" target="_blank">Double Precision Arithmetic</a></li>
            <li>Many programming languages have many number types, such as integer, float, decimal, long…</li>
            <li>JavaScript has only one number type: double precision floating point</li>
            <li>This format stores numbers in 64 bits, where the number (the fraction) is stored in bits 0 to 51, the exponent in bits 52 to 62, and the sign in bit 63:</li>
            <li>
                <table>
                    <tbody>
                        <tr>
                            <th>Value (aka Fraction/Mantissa)</th>
                            <th>Exponent</th>
                            <th>Sign</th>
                        </tr>
                    </tbody>
                    <tr>
                        <td>52 bits (0 – 51)</td>
                        <td>11 bits (52-62)</td>
                        <td>1 bit (63)</td>
                    </tr>
                </table>
            </li>
        </ul>
        <ul></ul>
    </article>
</section>
<section>
    <article>
        <h2>Test Our Knowledge</h2>
        <ol>
            <li>Create a new file in your text editor of choice and name it app01.js</li>
            <li>Add a comment that contains your name, the date, and the name of this class at the top of the file</li>
            <li>Create three variables. The first two should store the number values 12 in decimal and 30 in hexadecimal (you translate 30 into the hexadecimal equivalent). The third variable should store the string "Answer equals: "</li>
            <li>Add the first two numeric variables together using the + operator, save this to a new variable</li>
            <li>Concatenate the string from your third variable with the number from your fourth (new) variable. Save this to a new variable called "answer"</li>
            <li>Copy your whole code into the developer console and hit &lt;enter&gt;</li>
            <li>View the contents of variable "answer"</li>
        </ol>
    </article>
</section>
<?php include $url.'/inc/footer.php'; ?>
