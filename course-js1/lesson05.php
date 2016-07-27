<?php
    $url = $_SERVER['DOCUMENT_ROOT'];
    include $url.'/inc/head.php';
?>
<section>
    <article>
        <h2>Review</h2>
        <p>

        </p>
        <ol>
            <li>Write a small JS program that will: </li>
            <li>Prompt the user for something that they would like to do.</li>
            <li>Make sure that the user actually types something.</li>
            <li>If the user has not typed anything, alert them that they need to type something and then repeat the prompt.</li>
            <li>Keep prompting the user until they type a response.</li>
            <li>Use functions to complete this task.</li>
            <li>When the user has entered text, alert the text back to them</li>
        </ol>
    </article>
</section>
<section>
    <article>
        <h2>Arrays In-Depth</h2>
        <p>
            Arrays are very useful for keeping an ordered list of "things". Arrays don't really care what you put into them, they accept all the data types we've talked about to date, including a few we haven't.
            <ul>
                <li>You create a new array using the [...] syntax</li>
                <li>Items in an array are separated with a , (comma)</li>
                <li>Let’s try creating an array to hold a list of your favorite fruits.</li>
            </ul>
        </p>
    </article>
</section>
<section>
    <article>
        <h2>Creating Your Array</h2>
        <ul>
            <li class="tryit">
                Try it: in your console create a new array and store the value in a variable. Then log the variable.
            </li>
            <li>
                <p data-height="150" data-theme-id="23663" data-slug-hash="pbdXVy" data-default-tab="js" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/pbdXVy/">JS1 - Arrays pt1</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                <script async src="//assets.codepen.io/assets/embed/ei.js"></script>
                <p>Arrays have built in ways of determining how many items they are holding, the <span class="method">length</span> property.</p>
            </li>
            <li class="tryit">
                Try it: log to the console the length of the fruits array you created previously.
            </li>
            <li>
                <p data-height="125" data-theme-id="23663" data-slug-hash="zBPVjz" data-default-tab="js" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/zBPVjz/">JS1 - Arrays pt2</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                <script async src="//assets.codepen.io/assets/embed/ei.js"></script>
                <p>Okay, so we've got some data in our arrays, and we know how many items are in the array, now how do we get it back out?</p>
            </li>
        </ul>
    </article>
</section>
<section>
    <article>
        <h2>Accessing Array Contents</h2>
        <p>
            Arrays are index based, so you can use a numbered index to retrieve a specific value, using the brackets to define which index you want.
        </p>
        <ul>
            <li>
                <p data-height="200" data-theme-id="23663" data-slug-hash="AXbGdR" data-default-tab="js" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/AXbGdR/">JS1 - Arrays Accessing Contents pt1</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                <script async src="//assets.codepen.io/assets/embed/ei.js"></script>
                <p>
                    Notice anything add about the example above?
                </p>
            </li>
            <li class="tryit">
                Try it: What are your results? Is that what you expected?
            </li>
            <li>
                <p data-height="150" data-theme-id="23663" data-slug-hash="zBPVLd" data-default-tab="js" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/zBPVLd/">JS1 - Arrays Accessing Contents pt2</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                <script async src="//assets.codepen.io/assets/embed/ei.js"></script>
                <p>
                    Array indexes (as well as other indexes we'll discuss later) all start with 0. So the index zero would have the value 1, index 1 has the value 2, index 2 has the value 3, etc...
                </p>
            </li>
            <li>
                <p data-height="250" data-theme-id="23663" data-slug-hash="pbdXOb" data-default-tab="js" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/pbdXOb/">JS1 - Arrays Accessing Contents pt3</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                <script async src="//assets.codepen.io/assets/embed/ei.js"></script>
            </li>
        </ul>
    </article>
</section>
<section>
    <article>
        <h2>Adding Items to an Array</h2>
        <p>
            Awesome, I can get my data back out of an array once I put it in, how do I add more things to it? JavaScript Array's provide a function called push that allows for adding items to the end of an array.
        </p>
        <ul>
            <li class="tryit">
                Try it: Add a new fruit to the end of your fruits array using the fruits.push(...) function.
            </li>
            <li>
                <p data-height="150" data-theme-id="23663" data-slug-hash="KryjGz" data-default-tab="js" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/KryjGz/">JS1 - Arrays Adding Items pt1</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                <script async src="//assets.codepen.io/assets/embed/ei.js"></script>
                <p>
                    When you add items to your array, the length property is automatically updated for you.
                </p>
            </li>
            <li>
                <p data-height="175" data-theme-id="23663" data-slug-hash="XKzLxa" data-default-tab="js" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/XKzLxa/">JS1 - Arrays Adding Items pt2</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                <script async src="//assets.codepen.io/assets/embed/ei.js"></script>
            </li>
            <li>
                <p>
                    Arrays can also contain other arrays.
                </p>
            </li>
            <li>
                <p data-height="300" data-theme-id="23663" data-slug-hash="VjAJEE" data-default-tab="js" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/VjAJEE/">JS1 - Arrays Adding Items pt3</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                <script async src="//assets.codepen.io/assets/embed/ei.js"></script>
                <p>
                    Now let’s attempt to pull out the colors only for each of the three fruits in our fruitColors array.
                </p>
            </li>
            <li class="tryit">
                Try it: create a snippet that will create an array to hold multiple arrays (defined above). Then write three console logs that log only the colors of the fruits.
            </li>
            <li>
                <p data-height="150" data-theme-id="23663" data-slug-hash="PzOAyA" data-default-tab="js" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/PzOAyA/">JS1 - Arrays Adding Items pt4</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                <script async src="//assets.codepen.io/assets/embed/ei.js"></script>
            </li>
        </ul>
    </article>
</section>
<section>
    <article>
        <h2>Removing Items From an Array</h2>
        <p>
            So now we can create Arrays, access array properties, and add items to arrays, how about removing items? Items can be removed one at a time from the end of the array, using the pop function. NOTE: This modifies the original array.
        </p>
        <ul>
            <li>
                <p data-height="150" data-theme-id="23663" data-slug-hash="dXkBQq" data-default-tab="js" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/dXkBQq/">JS1 - Arrays Removing Items</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                <script async src="//assets.codepen.io/assets/embed/ei.js"></script>
            </li>
            <li>
                <p>
                    Another handy array function we'll talk about is the slice function. It works on arrays a little differently.
                    The slice function will make a copy of the specified indexes and return them in a new array.
                </p>
            </li>
            <li>
                <p>
                    The signature of the slice function looks like:
                </p>
                <p data-height="100" data-theme-id="23663" data-slug-hash="WxXqLQ" data-default-tab="js" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/WxXqLQ/">JS1 - Arrays Removing Items pt2</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                <script async src="//assets.codepen.io/assets/embed/ei.js"></script>
            </li>
            <li>
                <p>
                    The begin argument is the zero based starting index, and the end argument is the index to stop at. NOTE: The extraction does not include the end index!
                </p>
            </li>
            <li class="tryit">
                Try it: Create an array with 4 strings, then slice the middle two.
            </li>
            <li>
                <p data-height="150" data-theme-id="23663" data-slug-hash="XKzLoa" data-default-tab="js" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/XKzLoa/">JS1 - Arrays Removing Items pt3</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                <script async src="//assets.codepen.io/assets/embed/ei.js"></script>
                <p>
                    One point to remember about the slice functions is that is does not modify the original array. But what if we actually did want to modify the original?
                    splice to the rescue! The splice function works in a similar way to the slice function, however it allows you to modify the original array.
                </p>
            </li>
            <li>
                <p>
                    The signature of the splice function looks like:
                </p>
                <p data-height="100" data-theme-id="23663" data-slug-hash="rLYEPy" data-default-tab="js" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/rLYEPy/">JS1 - Arrays Removing Items pt4</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                <script async src="//assets.codepen.io/assets/embed/ei.js"></script>
                <p>
                    So begin is our starting index, howManyToRemove is how many items to remove from the starting index, and additional items to add are more elements that you want to add to the array (comma separated values).
                </p>
            </li>
            <li class="tryit">
                Try it: Create an array with 4 elements in it. Then remove the third element. Log the array to the console.
            </li>
            <li>
                <p data-height="150" data-theme-id="23663" data-slug-hash="mEqkvg" data-default-tab="js" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/mEqkvg/">JS1 - Arrays Removing Items pt5</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                <script async src="//assets.codepen.io/assets/embed/ei.js"></script>
                <p>
                    Using the same array, remove the second element and add a new second element.
                </p>
            </li>
            <li>
                <p data-height="150" data-theme-id="23663" data-slug-hash="kXxKqy" data-default-tab="js" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/kXxKqy/">JS1 - Arrays Removing Items pt6</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                <script async src="//assets.codepen.io/assets/embed/ei.js"></script>
            </li>
            <li>
                <p>
                    We can do a lot more with arrays. Check out MDN for more info on arrays:
                    <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array" target="_blank">Learn More at MDN.</a>
                </p>
            </li>
        </ul>
    </article>
</section>
<section>
    <article>
        <h2>Assignment</h2>
        <p>
            In a new Javascript file, complete the following set of tasks:
        </p>
        <ol>
            <li>Create a function that will return the square of a number (power of 2).
                <ol>
                    <li>If a non-number argument is passed into the function, return NaN</li>
                </ol>
            </li>
            <li>Create a function that will capitalize the first letter of a string and add a period (.) to the end of the string if it doesn't already end with a period.
                <ol>
                    <li>If a non-string argument is passed into the function, return a blank string</li>
                </ol>
            </li>
            <li>Create a string that will flip the position of the first and second half of a string. For example, the string “abcdef” would be returned as “defabc”. Hint: use substring.
                <ol>
                    <li>If a non-string argument is passed into the function, return a blank string</li>
                    <li>If a string with less than 2 characters or an odd number of characters is passed into this function, return a blank string. Hint: use modulus (%) operator.</li>
                    <li>Bonus: how can this function be modified to work with odd-length strings, such as converting “abc1efg” to “efg1abc”?</li>
                </ol>
            </li>
            <li>Create a function that accepts an array of 4 numbers and returns the average
                <ol>
                    <li>If a non-array is passed into the function, return NaN. Remember arrays are considered objects in JS.</li>
                    <li>If any of the 4 values in the array are not a number, return NaN.</li>
                </ol>
            </li>
        </ol>
    </article>
</section>
<?php include $url.'/inc/footer.php'; ?>
