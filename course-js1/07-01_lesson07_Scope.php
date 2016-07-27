<?php
    $url = $_SERVER['DOCUMENT_ROOT'];
    include $url.'/inc/head.php';
?>
<section>
    <article>
        <h2>Review</h2>
        <p>
            Here is the assignment that we laid out on the whiteboard.
        </p>
        <ol>
            <li>Create a form in your HTML with five input boxes</li>
            <li>Include a submit / go button to run javascript</li>
            <li>When the user clicks on the go button, grab all the input values and push into an array</li>
            <li>Check the array for duplicate</li>
            <li>Add a <em>switch statement</em> to provide a case-by-case response base on input value</li>
        </ol>
    </article>
</section>

<section>
    <article>
        <h2>Function Scope</h2>
        <p>Every JavaScript program runs with a "scope". This can be thought of as the things that are currently available to the execution of a program. The main / base scope is referred to as the "global" scope.</p>
        <p>Creating a function in JavaScript creates a new scope.</p>
        <p>One important thing to understand is that code outside of a function cannot access any code inside the function.</p>
        <?php echo bin('vaneve','js'); ?>

        <p>So now we know that code outside of a function can't access anything other than what's returned from a function. However, the code inside a function can access anything that is outside of the function.</p>
        <?php echo bin('kesimu','js,console'); ?>
    </article>
</section>

<section>
    <article>
        <h2>Function Expressions</h2>
        <p>So now we know how to write a function, but there are other ways to do it as well. You'll surely encounter them in the wild so it's nice to know what's going on when you see them.</p>
        <p>Functions in JavaScript are "first class". This means they can be passed as arguments to other functions, returned from other functions, and assigned to variables (instead of being a named function).</p>
        <p>When a function is assigned to a variable, it's called a <strong>function expression</strong></p>
        <div class="tryit">
            <h3>Try it:</h3>
            <p>
                Create a function expression that assigned a function to a variable.
            </p>
        </div>
        <?php echo bin('xetato','js'); ?>
        <p>So what is different here? Notice, the function declaration does not have a name. This is what is known as an Anonymous function, or a function with no name.</p>
        <p>If it has no name, how do we call it? Same way we do with other functions, but we use the variable name instead. In the case of the capitalize function above, we can call it as capitalize("matt").</p>
        <div class="tryit">
            <h3>Try it:</h3>
            <p>
                Create and execute a function expression.
            </p>
        </div>
        <?php echo bin('numaxo','js,console'); ?>
        <p>One thing to note about anonymous functions, they don't actually have to be anonymous. In fact, it's good practice to name all your functions, for the purposes of error reporting. The function below will work just the same.</p>
        <?php echo bin('dayicoq','js,console'); ?>
    </article>
</section>

<section>
    <article>
        <h2>Hoisting</h2>
        <p>Let’s try an experiment. Create a new function (not a function expression) called logName. Then, above that code, call logName. What would you expect to happen?</p>
        <?php echo bin('liweli','js'); ?>
        <p>This is due to something JavaScript is doing called hoisting.</p>
        <p>Even though JavaScript executes linearly, variable and function definitions are actually "hoisted" to the top of the scope. So even though we call logName before we define it, JavaScript is actually recognizing the definition of the function, hoisting it to the top of the scope, which makes it available to call before the definition in the code actually happens</p>
        <div class="tryit">
            <h3>Try it:</h3>
            <p>Call a function expression before it is defined. What happens?</p>
        </div>
        <?php echo bin('rovulu','js'); ?>
        <p>So what happened there? Why did we get the undefined is not a function?</p>
        <p>The reason for this is that only named function definitions and variable declarations are hoisted. The values of the variables are not hoisted.</p>
        <p>What would you expect to happen in the example below?</p>
        <?php echo bin('joheja','js'); ?>
    </article>
</section>

<section>
    <article>
        <h2>The DOM</h2>
        <p>What is the DOM?</p>
        <p>The Document Object Model (DOM) is a programming interface for HTML. It allows JavaScript to manipulate an HTML page after it's been loaded in the browser.</p>
        <p>The DOM provides a representation of the document as a structured group of nodes and objects that have properties and methods.</p>
    </article>
</section>

<section>
    <article>
        <h2>Accessing Page Elements</h2>
        <p>JavaScript wouldn't be of much use to us if we couldn't use it to manipulate HTML pages in some way. We've already seen a small preview of what can be done with HTML.</p>
        <p>We've seen that in order to begin manipulating elements on the page, we need to know how to "reference" those items. For example, if we want to change our pages <code class="inline">&lt;h1&gt;</code> tag, we need to be able to tell JavaScript which node on the page we want to change.</p>
        <?php echo bin('rusoqa','html,js'); ?>
        <p>Running this in the browser will log the element logged to your console.</p>
    </article>
</section>

<section>
    <article>
        <h2>Element Attributes</h2>
        <p>You can now see that a "node" or "element" has an underlying JavaScript object that provides all kinds of methods for you to interact with it.</p>
        <p>Let’s look at some attributes. First, modify your h1 tag to include a <code class="inline">class="hdr"</code> attribute.</p>
        <?php echo bin('milewu','html'); ?>
        <p>Now use the h1.hasAttribute() function to see if the given DOM node has a specific attribute.</p>
        <?php echo bin('sokejaq','html,js,console'); ?>
        <p>Run the code above, it returns boolean so if the attribute exists, it will return true otherwise it will return false.</p>
        <p>Cool, so we can see if an element has a specific attribute, what about adding new attributes? Easily done. Using the same DOM node we can call the h1.setAttribute(). It takes two arguments in its signature, the property name to set, and its value. Let’s add a rel attribute.</p>
        <?php echo bin('fusoyu','html,js,output'); ?>
        <p>Awesome, so now we can add and look at attributes on a DOM node, the only thing left is to be able to remove them. This is done with the removeAttribute function.</p>
        <p>Let’s remove the rel attribute now.</p>
        <?php echo bin('motujaf','html,js,output'); ?>
    </article>
</section>

<section>
    <article>
        <h2>Other Ways of Selecting DOM Nodes</h2>
        <p>Let’s jump right in and add some markup to our html page.</p>
        <?php echo bin('nemigo','html'); ?>
        <p>There are alternatives to getElementById for cases where an item might not have an id, or you want to use an alternative syntax. The first is document.querySelector.</p>
        <?php echo bin('nemigo','js'); ?>
        <p>What does that yield? Is it what you would expect? It should return the first matched element for the specified selector.</p>
        <p>Let’s pick the "selector" apart. We used ul li a. What this is really saying is, "Find any a tags that are children of li tags, where the li tag is a child of a ul tag. Put another way, "Find all anchor tags that are inside an li tag inside a ul".</p>
        <p>The querySelector function always returns a node or null if no node was matched. If multiple nodes were selected, only the first will be returned.</p>
        <p>So what if I want to select more than one node? That's where querySelectorAll comes into play.</p>
        <?php echo bin('rodikot','js'); ?>
        <p>The querySelectorAll function returns a NodeList which looks like an array, but actually isn't. It has a length property, but doesn't have other array methods like push, pop, etc...</p>
        <p>A NodeList object provides an item function that you can use to select a specific item at a specified index.</p>
        <?php echo bin('kawitu','js'); ?>
        <p>Since a NodeList looks a lot like an array, and has a length property, that means it can be used as the basis for a loop, yeah? Let’s loop over each link, and log to the console the href property of each node.</p>
        <?php echo bin('ximoxu','js'); ?>
    </article>
</section>

<section>
    <article>
        <h2>Assignment</h2>
        <p>Now we will start focusing on the Final Project in our assignments. We will start by building the physical framework (HTML) for a ToDo App. Complete the following:</p>
        <ol>
            <li>Create a new project for your ToDo App if you have not already.</li>
            <li>Your HTML should contain:
                <ol>
                    <li>An h1 tag with the title of your list.</li>
                    <li>An input for entering ToDo Items with a submit button.</li>
                    <li>An empty ul to hold the ToDo Items.</li>
                </ol>
            </li>
            <li>In your JavaScript:
                <ol>
                    <li>Get the input and the ul using DOM access and store them in variables.
                    <li>When the submit button is clicked get the user input and add it to an array.
                    <li>Create a function that will clear out the ul and loop over the array creating an li containing each of the ToDo Items.
                </ol>
            </li>
            <li>Use whatever visual framework (or plain CSS styling) you like to make your page look good. Treat this like a product that you are building for a client. How would they want it to look and function?</li>
        </ol>
    </article>
</section>
<?php include $url.'/inc/footer.php'; ?>
