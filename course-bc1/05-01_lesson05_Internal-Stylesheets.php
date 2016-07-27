<?php
    $url = $_SERVER['DOCUMENT_ROOT'];
    include $url.'/inc/head.php';
?>
<section>
    <article>
        <h2>Review</h2>
        <p>
            Let's test your memory. Create a new project folder for today called "lesson05" in Thimble and follow the steps below.
        </p>
        <ol>
            <li>Thimble prepopulates your index.html page with everything that you need for your first page. Is there anything that has been added that <strong>doesn't</strong> look familiar?</li>
            <li>In a new browser tab, go to http://w3schools.com and search for a brand new tag called the <code class="inline">&lt;dl&gt;</code> tag.</li>
            <li>Using the example code as a reference, properly format your HTML to list the unfamiliar tags as <em>definition terms</em> and your best effort as to their <em>definition description</em>.
                <blockquote>
                    <h3>Tip!</h3>
                    <p>
                        When writing HTML intended to be displayed in the browser <strong>as</strong> HTML, you <strong>MUST</strong> convert the angle brackets into their codified versions. If you don't, there is a high possibility that it will break your page.<br><br>
                        Trust me.<br><br>
                        The code for the <code class="inline">&lt;</code> (left angle bracket) is <code class="inline">&amp;lt;</code><br>
                        The code for the <code class="inline">&gt;</code> (right angle bracket) is <code class="inline">&amp;gt;</code>
                    </p>
                </blockquote>
            </li>
            <li>To the <code class="inline">&lt;dl&gt;</code> tag, add a <em>style</em> attribute and the following styles:
                <code class="block"><pre>
padding: 40px;
background-color: teal;</pre></code>
            </li>
            <li>To the <strong>first</strong> <code class="inline">&lt;dd&gt;</code> tag, add a <em>style</em> attribute and the following style:
                <code class="block"><pre>
margin-bottom: 20px;</pre></code>
            </li>
        </ol>
    </article>
</section>
<section>
    <article>
        <h2>Three Ways of Adding CSS to your page</h2>
        <p>
            There are three common ways that you'll be adding CSS to your project. The one we have used so far is by far the most inefficient and prone to causing typos in your code.
        </p>
        <h4>Inline Styles</h4>
        <p>
            This is styling that you apply directly to the element or tag itself. You can have an unlimited number of styles per tag.
        </p>
        <?php echo bin('gehiqu','html,output'); ?>
        <blockquote>
            <h3>Watch your syntax!</h3>
            <p>
                When typing <strong>inline styles</strong>, the syntax is as follows:
            </p>
            <code class="block"><pre>
&lt;h1 style="color: red; font-size: 24px;">Headline&lt;/h1&gt;</pre></code>
        </blockquote>

        <hr>

        <h4>Internal Stylesheet</h4>
        <p>
            Internal styles are perfect if you're styling one single page that needs to be unique from the rest. All of the styles are placed within a <code class="inline">&lt;style&gt;</code> tag inside of the <code class="inline">&lt;head&gt;</code> section of your code.
        </p>
        <?php echo bin('jiweni','html,output'); ?>
        <blockquote>
            <h3>Watch your syntax!</h3>
            <p>
                Here's where CSS syntax changes things up. We're no longer adding each style to individual tags. We now need to start thinking <em>"globally"</em>. First, we <strong>reference</strong> the tags we want to style:
            </p>
            <code class="block"><pre>
h1</pre></code>
            <p>
                Then we add open and close curly brackets
            </p>
            <code class="block"><pre>
h1 {

}</pre></code>
            <p>
                Finally, we add the properties and values of the styles we want to add.
            </p>
            <code class="block"><pre>
h1 {
    color: red;
    font-size: 24px;
}</pre></code>
        </blockquote>
        <hr>

        <h4>External Stylesheet</h4>
        <p>
            Using an external stylesheet, you have the ability to change an entire website using only one file! However, each page must have a link or reference to the stylesheet using the <code class="inline">&lt;link&gt;</code> element. The link should be place within the <code class="inline">&lt;head&gt;</code> section of your code.
        </p>
        <?php echo bin('jeziso','html,css,output'); ?>
        <blockquote>
            <h3>Watch your syntax!</h3>
            <p>
                Writing your styles in an external stylesheet is exactly the same as writing internal styles. <strong>Except</strong> that instead of placing the styles within a &lt;style&gt; that's in the &lt;head&gt; section of the document, you write it in it's on file.
            </p>
        </blockquote>
    </article>
</section>
<section>
    <article>
        <h2>Choose Your Weapon</h2>
        <p>
            There is a lot to consider when choosing the best way to write your CSS. Each method has their pros and cons. But most iportantly is knowing that one technique will take presidence over another, also referred to as cascading. Not only do you need to take the cascade into consideration, but the order that they are being loaded into the browser also makes a big difference. Lets explore.
        </p>
        <ol>
            <li>
                In todays project, create an <code class="inline">&lt;h1&gt;</code> and give it some text.
            </li>
            <li>
                Thimble already provides us with a CSS stylesheet, so we'll use that one. In the style.css file, target the heading tag and give it a property and value of: <code class="inline">color: red;</code>
            </li>
            <li>
                Next, within the <code class="inline">&lt;head&gt;</code> section of the index page after your CSS <code class="inline">&lt;link&gt;</code>, write a <code class="inline">&lt;style&gt;</code> tag, target the heading tag and give it a property and value of: <code class="inline">color: blue;</code></li>
            <li>
                Lastly, add your <em>style</em> attribute directly to the <code class="inline">&lt;h1&gt;</code> element along with the property and value of <code class="inline">color: yellow;</code>
            </li>
        </ol>
        <blockquote>
            <h3>So what happened?</h3> Before we move on, try removing the <em>style</em> attribute and move the <code class="inline">&lt;link&gt;</code> <strong>below</strong> the closing <code class="inline">&lt;style&gt;</code> element. What happens now?
        </blockquote>
    </article>
</section>
<section>
    <article>
        <h2>Targeting Elements</h2>
        <p>
            There are <strong>lots</strong> of different ways to target elements to style. We're going to focus on three ways. By <em>tag name</em>, by <em>class</em> and by <em>id</em>.
        </p>

        <h4>Tag Name</h4>
        <p>
            Targeting by tag name is the most global way of styling elements. For example, imagine your website has 5 paragraphs in it. Each paragraph needs to have green text. How do we target <strong>all</strong> of the paragraphs at once? Target by tag name.
        </p>
        <code class="block"><pre>
p {
    color: green;
}</pre></code>
        <p>
            Add in the missing property and value in the code window to color all the paragraphs green.
        </p>
        <?php echo bin('lobove','css,output'); ?>

        <hr>

        <h4>Class</h4>
        <p>
            Targeting by class gives us the ability to target <strong>any</strong> element with a specific class. I've added a headline to each paragraph. Look at how the CSS reflects the class attribute names I've added to the HTML. Does it do what you would expect?
        </p>
        <blockquote>
            <h3>Notice!</h3>
            <p>
                When you target by class, you <strong>must</strong> add the period to the name. The period is the identifier for CSS that you are referencing a class!
            </p>
        </blockquote>
        <code class="block"><pre>
.myColor {
    color: magenta;
}</pre></code>
        <p>
            Add in the missing property and value in the code window to color all the elements with the same class name to magenta.
        </p>
        <?php echo bin('copifu','html,css,output'); ?>

        <hr>

        <h4>Id</h4>
        <p>
            Targeting by id works similarly to targeting by class. <strong>However...</strong> You are only allowed one (1) unique id per page. For example: If you give the first paragraph the id of "first-para", you <strong>cannot</strong> use that id for any other element on the page.
        </p>
        <blockquote>
            <h3>Notice!</h3>
            <p>
                When you target by id, you <strong>must</strong> add a hashtag to the name. The hashtag (a.k.a. hash, a.k.a. pound sign, a.k.a. sharp symbol, a.k.a. octothorpe) is the identifier for CSS that you are referencing an id!
            </p>
        </blockquote>
        <code class="block"><pre>
#first-para {
    color: orange;
}</pre></code>
        <p>
            Add in the missing property and value in the code window to color only the element with the id to orange.
        </p>
        <?php echo bin('kafaya','html,css,output'); ?>

    </article>
</section>
<section>
    <article>
        <h2>Assignment</h2>
        <p>
            Learning HTML is pretty straight forward. Use x tag for this, or y tag for that. We'll get into the more abstract layout tags in a later lesson. For now, let's practice what we've learned.
        </p>
        <ol>
            <li>Create a new HTML file in todays project folder, right click the generated file and rename it to: <strong>assignment.html</strong></li>
            <li>Create a new CSS file in todays project folder, right click the generated file and rename it to: <strong>assignment.css</strong></li>
            <li>In your new HTML file, delete everything <em>between</em> the open and closing &lt;body&gt; tags</li>
            <li>The topic of this assignment is <strong>Your Favorite Pet</strong></li>
            <li>Add at least one (1) headline of your choice</li>
            <li>Add at least three (3) paragraphs about your pet</li>
            <li>Include at least two (2) images of an animal</li>
            <li>Add at least ten (10) different style properties</li>
            <li>For styling, utilize <strong>all three</strong> different methods of including styles: inline, internal stylesheet, and external stylesheet</li>
            <li>Use each of the three targeting methods: Tag name, Class, and Id!</li>
            <li>Pick one (1) style and be sure that the cascade overrides itself going from one method to another</li>
        </ol>
    </article>
</section>
<?php include $url.'/inc/footer.php'; ?>
