<?php
    $url = $_SERVER['DOCUMENT_ROOT'];
    include $url.'/inc/head.php';
?>
<section>
    <article>
        <h2>Review</h2>
        <p>
            Let's see if we remember how to create an object and <span class="inline">append</span> it to the page.
        </p>
        <ol>
            <li>Create a new project folder for today called <strong>day10</strong></li>
            <li>Make a new index page with the bare bones markup for an HTML file</li>
            <li>Also make a new <strong>review.js</strong> file and link to it in your index page</li>
            <li>Using <strong>only Javascript</strong>, create a <code class="inline">&lt;button&gt;</code> tag that prompts the user to enter their phone number</li>
            <li><code class="inline">console.log()</code> their number</li>
        </ol>
    </article>
</section>

<section>
    <article>
        <h2>What Are Event Listeners</h2>
        <p>
            Although you can start functions when your page loads, many times you'll want to start functions when a user clicks a link, enters a form, scrolls, moves his or her mouse over an object, or does something else. These actions are called events. You can set specific functions to run when the user performs an event. These functions "listen" for an event and then initiate the function.
        </p>
        <code class="block"><pre>
load //when the page loads
click //when a user clicks something
mouseover //when a user mouses over something
focus //when a user puts the cursor in a form field
blur //When a user leaves a form field</pre></code>

        <blockquote>
            <h3>Note:</h3>
            <p>
                Take notice that each event listener is <strong>entirely</strong> lowercase!
            </p>
        </blockquote>

        <p>
            An instance of adding Javascript to an element would be to add the function directly to the element inline <code class="inline">&lt;button onclick="alert('Hello World!');"&gt;&lt;/button&gt;</code>. This however under most circumstances would be considered to be bad practice. Let's try it anyways! <i class="fa fa-smile-o"></i>
        </p>
    </article>
</section>

<section>
    <article>
        <h2>Inline Javascript</h2>
        <p>
            In your HTML file, add a <code class="inline">&lt;button&gt;</code> tag with whatever text you want.
        </p>
        <?php echo bin('zuceri','html,output'); ?>
        <p>
            Now that we have an element to work with, let's add a simple alert box pop up when the user clicks the button.
        </p>
        <?php echo bin('raxehoz','html,output'); ?>
        <p>
            Now this isn't new. In fact this was one of the first types of Javascript that we wrote in this course. One thing to note from this exercise. The attribute that we added to the <code class="inline">&lt;button&gt;</code> tag is an event listener. It's "<em>listening</em>" for the user to click on the button! Now that we have this out of our systems, let's find a better way to listen for the user.
        </p>
    </article>
</section>

<section>
    <article>
        <h2>addEventListener()</h2>
        <p>
            The <strong>EventTarget.addEventListener()</strong> method registers the specified listener on the EventTarget it's called on. The event target may be an Element in a document, the Document itself, a Window, or any other object that supports events. We're going to focus on specific elements.
        </p>
        <p>
            Here is a perfectly acceptable way to add an event listener to an element. <code class="inline">document.getElementById("btn").addEventListener("click", function(){ alert("Hello World!"); });</code>
        </p>
        <p>
            The only real downfall to writing your even in this manner is that it is <strong>not</strong> reuseable. Instead, create a new variable from the element that you want to target, and <strong>THEN</strong> attach the event listener. You'll write less code, and now you're ready to add <em>another</em> event to the element if you need!
        </p>
        <?php echo bin('wewabi','html,js,output'); ?>
        <blockquote>
            <h3>Huh??</h3>
            <p>
                Is your Javascript working? What are we missing?
            </p>
        </blockquote>
        <p>
            Let's write a simple function to grab the value from a data attribute and alert it to the user.
        </p>
        <?php echo bin('gojoxa','html,js,output'); ?>
        <blockquote>
            <h3>this</h3>
            <p>
                Here is another way of using the <code class="inline">this</code> keyword. We saw it when we were discussing Objects. <code class="inline">this</code> in this context however is represented by whatever you had clicked on. In this case, <code class="inline">this</code> is the <code class="inline">&lt;button&gt;</code>.
            </p>
            <h3>Data Attribute</h3>
            <p>
                HTML5 is designed with extensibility in mind for data that should be associated with a particular element but need not have any defined meaning. data-* attributes allow us to store extra information on standard, semantic HTML elements without hackery.
            </p>
        </blockquote>
        <p>
            Add another <code class="inline">&lt;button&gt;</code> to your markup. Let's make only a minor modification to our Javascript to get this to work.
        </p>
        <?php echo bin('fuvopew','html,js,output'); ?>
    </article>
</section>

<section>
    <article>
        <h2>Multiple Event Listeners</h2>
        <p>
            Here is where creating a variable from the element is beneficial. Let's add three different events to a single element. Add an <code class="inline">&lt;a&gt;</code> tag to your markup. We'll give it a <code class="inline">click</code>, a <code class="inline">mouseover</code>, and a <code class="inline">mouseout</code> listener.
        </p>
        <?php echo bin('poxabi','html,js,output'); ?>
    </article>
</section>

<section>
    <article>
        <h2>removeEventListener()</h2>
        <p>
            The <strong>EventTarget.removeEventListener()</strong> method removes the event listener previously registered with <strong>EventTarget.addEventListener()</strong>.
        </p>
        <p>
            Let's recreate the code from below together. In your markup, create three <code class="inline">&lt;button&gt;</code> tags, each with a color name for the text and an id to match. Wrap it up with an <code class="inline">&lt;a&gt;</code> tag. Use the <code class="inline">querySelectorAll</code> with a loop to add a <code class="inline">click</code> listener to each button element. Target the <code class="inline">&lt;a&gt;</code> also with a <code class="inline">click</code> listener. Let's write two functions, one to change the <code class="inline">body</code> background color matching the id, and the other function randomly choosing a number between 1 and 3 which will disable one of the <code class="inline">&lt;button&gt;</code> tags.
        </p>
        <?php echo bin('fipato','html,css,js,output'); ?>
    </article>
</section>
<?php include $url.'/inc/footer.php'; ?>
