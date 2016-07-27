<?php
    $url = $_SERVER['DOCUMENT_ROOT'];
    include $url.'/inc/head.php';
?>
<section>
    <article>
        <h2>Review</h2>
        <p>
            Let's go over the solutions to our last assignment together.
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
<section>
    <article>
        <h2>Control Flow: Loops</h2>
        <p>
            Looping is the act of repeating a block of code based on a given condition. When the conditions ceases to be truthy, the loop stops. We'll talk about three kinds of loops:
        </p>
        <ul>
            <li>while loops</li>
            <li>do / while loops</li>
            <li>for loops</li>
        </ul>
    </article>
</section>
<section>
    <article>
        <h2>while Loop</h2>
        <p>
            while loops work by evaluating a condition, if the condition is true, the loop "fires", executing all code it contains. The function will keep looping back to the top and executing until the condition becomes false, then loop stops.
        </p>
        <p>
            One important concept with while loops is that you must write the code that will make the condition false, otherwise you get an infinite loop.
        </p>
        <div class="tryit">
            <h3>Try it:</h3>
            <p>
                Create a loop that will log the numbers 1 - 10 to the console.
            </p>
        </div>
        <?php echo bin('mapuke','js'); ?>
    </article>
</section>
<section>
    <article>
        <h2>do / while Loop</h2>
        <p>
            The do / while loop is less commonly used, however it's a useful tool to have once you understand how it differs from the while loop.
        </p>
        <p>
            The do / while loop will always run at least once, then it evaluates its condition. If the condition is still true, it will continue the loop.
        </p>
        <?php echo bin('qequgo', 'js'); ?>
        <div class="tryit">
            <h3>What about?</h3>
            <p>
                How would you use one of the above loops to output each even number from 2 to 20? How about 100 to 0 in intervals of 10? Try it!
            </p>
        </div>
    </article>
</section>
<section>
    <article>
        <h2>for Loop</h2>
        <p>
            Finally, we reach the for loop, the most common loop we'll use in class and that you will encounter as a programmer.
        </p>
        <p>
            A for loop looks like this:
        </p>
        <code class="block"><pre>
for(statement1; statement2; statement) {
    // code block to be executed
}</pre></code>
        <p>
            The 3 statements used in the loop define the conditions under which the loop runs.
        </p>
        <ul>
            <li><strong>Statement 1</strong> is executed before the loop (the code block) begins. This allows us to set up or initial state.</li>
            <li><strong>Statement 2</strong> defines the condition for running the loop.</li>
            <li><strong>Statement 3</strong> is executed each time after the loop has executed. This is where we update our conditional variable. For example, increment or decrement a variable.</li>
        </ul>
        <p>
            This type of loop is nice because you do not need to manage the conditional variable in your normal code execution because it's built into the loop structure. This makes the for loop inherently safer to use.
        </p>
        <?php echo bin('kuyiho','js'); ?>
    </article>
</section>
<section>
    <article>
        <h2>Controlling the Loop</h2>
        <p>
            Fantastic, so now I can loop, but, what if I want a loop to stop early?
        </p>
        <p>
            JavaScript provides two ways of controlling the flow of a loop, the continue and break keywords.
        </p>

        <h4>continue</h4>
        <p>
            continue will immediately reset the loop to the next iteration, and continue on with the loop. It's basically just saying, disregard the rest of this loop and go to the next loop.
        </p>
        <div class="tryit">
            <h3>Try it:</h3>
            <p>
                Create a loop (for or while) that will loop 10 times, and skip the 5th and 7th loop. All other loops should log the loop number to the console.
            </p>
        </div>
        <?php echo bin('jobato','js'); ?>

        <hr>

        <h4>break</h4>
        <p>
            The break keyword will, when encountered, immediately stop the loop AND all subsequent loops.
        </p>
        <div class="tryit">
            <h3>Try it:</h3>
            <p>
                Create a for loop that will loop ten times, each time logging the current loop number, but terminate the loop on the seventh loop.
            </p>
        </div>
        <?php echo bin('dacare','js'); ?>
    </article>
</section>
<section>
    <article>
        <h2>Looping &amp; Arrays</h2>
        <p>
            So all our work with arrays up to this point has been retrieving array indexes one at a time using a numbered bracket notation, i.e.: <code class="inline">fruits[3]</code>. This is useful, but what if your application requirements were such that you needed to do something to every element in the array?
        </p>
        <p>
            This where were the power of loops really becomes apparent. A for loop is a perfect mechanism for iterating over each element in an array.
        </p>
        <div class="tryit">
            <h3>Try it:</h3>
            <p>
                How would you create a for loop and log all the items in our fruit array to the console? Hint...you may find the length property of an array useful here.
            </p>
        </div>
        <?php echo bin('bufujus','js'); ?>
    </article>
</section>
<section>
    <article>
        <h2>Assignment Briefing</h2>
        <p>
            Check out the following project. For the majority of it, we'll be talking through how to accomplish it. But first, there is an important item we need to cover.
        </p>
        <iframe src="https://cdn.rawgit.com/coreyshuman/Geekwise-JavaScript-I/master/Day%206/Assignment%20Template/index.html" width="100%" height="550"></iframe>
    </article>
</section>
<section>
    <article>
        <h2>Targeting HTML Elements</h2>
        <p>
            To accomplish todays assignment, we first need to learn how to target elements that we've written into our HTML.
        </p>

        <h4>getElementByID</h4>
        <p>
            Probably one of the most common and easiest to use. If you provide an element an <em>id</em>, you can target it as such:
        </p>
        <code class="block"><pre>
            var el = document.getElementById('[element id]');
        </pre></code>
        <p>
            Let's experiment together.
        </p>
        <?php // echo bin('mexomaw','js,output'); ?>
    </article>
</section>
<?php include $url.'/inc/footer.php'; ?>
