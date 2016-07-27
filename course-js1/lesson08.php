<?php
    $url = $_SERVER['DOCUMENT_ROOT'];
    include $url.'/inc/head.php';
?>
<section>
    <article>
        <h2>Review</h2>
        <p>
            Let's try out this challenge.
        </p>
        <ol>
            <li>Create a new function called dinosaur that has a signature dinosaur(type, era, food)</li>
            <li>Your function should return an array containing the type, era and eating habits (carnivore or herbivore) passed into the function.</li>
            <li>Create a second function that contains a for loop.</li>
            <li>Create an empty array for dinosaurs.</li>
            <li>Prompt the user for how many dinosaurs they want to input.</li>
            <li>The for loop should run the number of times specified by the user.</li>
            <li>In the loop prompt the user for the type of dinosaur, the era in which it lived and it's eating habits.</li>
            <li>Call the dinosaur() function in each loop with the user supplied info and push the returned arrays onto your dinosaur array</li>
            <li>After the user has input all of their dinosaurs, create a second loop to loop over the dinosaur array of arrays and create a console.log or an alert stating the type era and eating habits of each dinosaur. Instead of console.log or alert, you could also try printing the information to the page using some of the DOM information we learned last lesson.</li>
        </ol>
    </article>
</section>

<section>
    <article>
        <h2>Creating Elements</h2>
        <p>
            Here is where the real magic of the DOM becomes apparent. Not only can we inspect the existing DOM, we can add to it! To create an element we use the <code class="inline">document.createElement()</code> function. It takes as an argument as a string with the same name as the tag you want to create. So if you wanted to create an anchor, you would use <code class="inline">document.createElement("a")</code>.
        </p>
        <?php echo bin('pomadu','js'); ?>

        <p>
            Great, so we created an empty anchor tag. This isn't of too much use yet, lets assign some other properties to the anchor so we can get some actual use out of it. How about some text (so we have something to click on). We can set the text content using the <code class="inline">textContent</code> property:
        </p>
        <?php echo bin('bovuqid','js'); ?>

        <p>
            And what good is a link without an <code class="inline">href</code>? Now...how did we set attributes on a link?
        </p>
        <?php echo bin('lafoge','js'); ?>

        <p>
            It's worth noting that there are some properties of an element that you can access without <code class="inline">setAttribute</code>. <code class="inline">href</code> is one of these properties. If you're ever not sure check out the MDN for what attributes are available via an elements interface. Here is the link to the <a href="https://developer.mozilla.org/en-US/docs/Web/API/HTMLAnchorElement" target="_target">Anchor</a> interface. Let's set the <code class="inline">href</code> of the <code class="inline">a</code> tag using this syntax.
        </p>
        <?php echo bin('pobefi','js'); ?>

        <p>
            If you're refreshing your page hoping to see your new element ready for use, this may be anticlimactic for you. So far, we've created an element in memory, but now we need to do add it to the page. We do this using the <code class="inline">appendChild</code> function. When using the <code class="inline">appendChild</code> function, we first need to tell the DOM where exactly to append the child to. In your console, enter <code class="inline">document.body</code>. What does the console show?
        </p>
        <p>
            The <code class="inline">document.body</code> is a shortcut that to the body tag. Since we want the new element to show up on the page, at a minimum it needs to be attached to the body tag (since the body tag is what is visible on the page).
        </p>
        <?php echo bin('sulazem','js'); ?>

        <p>
            As you can see above, the <code class="inline">document.body</code> is a reference to the <code class="inline">&lt;body&gt;</code> tag. So it's telling JavaScript to append a child node to the body tag. This can be done on ANY node you have selected.
        </p>
        <div class="tryit">
            <h3>You try.</h3>
            <p>
                On your own, add an <code class="inline">&lt;h1&gt;</code> tag to the document and append an anchor tag to it.
            </p>
        </div>
    </article>
</section>

<section>
    <article>
        <h2>Removing Elements</h2>
        <p>
            What good would all of this be if we couldn't remove elements from the page? This is done with the <code class="inline">removeChild</code> called on the parent element of the element you want to remove.
        </p>
        <?php echo bin('mohevit','js,output'); ?>

        <p>
            Note: the <code class="inline">removeChild</code> example isn't too exciting, since we add it, then remove it right away. Let's delay the removal of the element using <code class="inline">setTimeout</code>.
        </p>
        <?php echo bin('pononi','js,output'); ?>

        <p>
            The <code class="inline">setTimeout</code> function takes a function as the first argument and a number as the second argument. The <code class="inline">setTimeout</code> function will wait the specified amount of time, then call the function you've passed in. The above will wait 2000 milliseconds, then call the function.
        </p>
    </article>
</section>

<section>
    <article>
        <h2>Styling Elements</h2>
        <p>
            Along with selecting, adding and modifying elements in the DOM, we can also apply styling. We do this via the <code class="inline">element.style</code> property.
        </p>
        <p>
            When we use this property, the style names use no dashes, instead using camelCasing. For instance, if a CSS selector looked like:
        </p>
        <?php echo bin('luceli','css,output'); ?>

        <p>
            The Javascript alternative property would be:
        </p>
        <?php echo bin('poduga','js,output'); ?>

        <p>
            However, we could alternatively set the style property using the <code class="inline">setAttribute</code> function. When we do it that way, we can use the regular CSS syntax.
        </p>
        <?php echo bin('dehuhug','js,output'); ?>
    </article>
</section>

<section>
    <article>
        <h2>Puttin it all Together</h2>
        <p>
            So at this point we now know how to select existing elements, create new elements, modify element attributes, and append the elements to other elements already on the page. Let's create a helper function to make some of this easier.
        </p>
        <div class="tryit">
            <h3>Try It:</h3>
            <p>
                Create a function that will have the following signature: <code class="inline">e(elementType, text, attributes, styles)</code> where <code class="inline">elementType</code> is a string of an element type, attributes is an arrays of attributes to set on an element, and styles is an array of style properties to set on an object. Then return the newly created element.
            </p>
            <?php echo bin('pejocu','js'); ?>
        </div>
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
