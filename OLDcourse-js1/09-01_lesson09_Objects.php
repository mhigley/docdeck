<?php
    $url = $_SERVER['DOCUMENT_ROOT'];
    include $url.'/inc/head.php';
?>
<section>
    <article>
        <h2>Review</h2>
        <p>
            Let's knock out a few quick challenges. First create a new project folder for today named <strong>day09</strong> and be sure to create the necessary pages (index.html &amp; review.js) and markup (! + tab on the .html file) for a new project.
        </p>
        <ol>
            <li>Create a new variable named <span class="inline">tech</span> and make it an array with 5 items: HTML, CSS, Javascript, PHP, WordPress</li>
            <li>Console.log this new array</li>
            <li>In the .html file, add a <code class="inline">&lt;button&gt;</code></li>
            <li>Target the new button in your review.js file with either <code class="inline">.getElementById()</code> or <code class="inline">.querySelector()</code></li>
            <li>Write a new function so that when the user clicks the button, an alert pops up and prints out your array. For example: <code class="inline">btn.onclick = printTech;</code></li>
        </ol>
    </article>
</section>

<section>
    <article>
        <h2>What is an Object</h2>
        <p>
            JavaScript is designed on a simple object-based paradigm. An object is a collection of properties, and a property is an association between a name (or key) and a value. A property's value can be a function, in which case the property is known as a method.
        </p>
        <h3>Umm... what?</h3>
        <p>
            Arrays are super powerful for putting things together in tidy list. This array can be endlessly manipulated. Splice out an item, pop off the last, sort alphabetically, push more items to the array and tons more. But each of these items is only a single item and there's not much to do for categorization. What if you wanted more of a name: value type system? Enter the object.
        </p>
        <p>
            We've actually been working with objects the entire time. Strings, Date, Number, Boolean... all objects. So what makes an object. It's a collection of properties with name: value pairs. You can even code functions directly into your object! Let's build one.
        </p>
        <hr>
        <h4>Our first object... your car</h4>
        <p>
            Everybody's car has certain elements. Tires, windows, a color, purchase year, etc...
        </p>
        <p>
            We'll start with some pseudocode to write our car object
        </p>
        <div class="tryit">
            <h3>Let's do this.</h3>
            <p>
                What is the make of your vehicle? Write it like this:
            </p>
            <code class="block"><pre>
make Jeep</pre></code>
            <p>
                Next is the model of your car:
            </p>
            <code class="block"><pre>
make Jeep
model Wrangler</pre></code>
            <p>
                Finish the pseudocode on your own with the year of your car and also the color.
            </p>
        </div>
    </article>
</section>

<section>
    <article>
        <h2>Object Syntax</h2>
        <p>
            Turning out pseudocode into a Javascript object is a simple process. Here is a sample object for you to review and analyze.
        </p>
        <code class="block"><pre>
var myObj = {
    prop1: 'value for prop one',
    prop2: 'value for prop two',
    prop3: 00
}
</pre></code>
        <p>
            What you need to notice from the example code above are a few main things:
        </p>
        <ul>
            <li>We'll need to have our object named so we have access to it later. Create a variable just like we've done a hundred times before, but make it equal to the object.</li>
            <li>Notice that unlike an array which is identified with the brackets <code class="inline">[]</code>, and object is identified with curly braces <code class="inline">{}</code>.</li>
            <li>Properties can be called whatever you want. Try to keep the names simple and use camelcasing for consistency.</li>
            <li>Separate each property from their value with the colon <code class="inline">:</code>.</li>
            <li>For the most part, property values will be placed within quotation marks (except when working with numbers). Single or double... your choice. Again, be consistent.</li>
            <li>Each property and value pair must be separated with commas except for the last which needs nothing. No semicolons here!</li>
        </ul>
        <div class="tryit">
            <h3>Your turn:</h3>
            <p>
                Use these tips and convert your pseudocode into an object named <code class="inline">myCar</code>.
            </p>
        </div>
    </article>
</section>

<section>
    <article>
        <h2>So What is a Method</h2>
        <p>
            JavaScript methods are the actions that can be performed on objects. A JavaScript method is a property containing a function definition. Essentially, a method is nothing more than a function within an object.
        </p>
        <p>
            Let's write a simple object regarding ourselves.
        </p>
        <code class="block"><pre>
var me = {
    name: 'matthew',
    sayName: function(){
        alert(this.name);
    }
}</pre></code>
        <p>
            Breaking down the above example, we've declared a new variable and assigned it to an object. The object has two properties. The first is <code class="inline">name</code> and the second is <code class="inline">sayName</code> however the value isn't a value, it's a function. This function does not need to be named. It can be written without a name and is referred to as an anonymous function. Inside the function is all the code that you want to run. We've just added an alert. The argument passed into the alert is the <code class="inline">this</code> keyword dot <code class="inline">name</code>. <code class="inline">this</code> represents the object and gains us access to the <code class="inline">name</code> property.
        </p>
        <blockquote>
            <h3>this?</h3>
            <p>
                In JavaScript, the thing called <code class="inline">this</code>, is the object that "owns" the JavaScript code. <!--The value of <code class="inline">this</code>, when used in a function, is the object that "owns" the function.--> The value of <code class="inline">this</code>, when used in an object, is the object itself. <!--The <code class="inline">this</code> keyword in an object constructor does not have a value.-->
            </p>
        </blockquote>
        <div class="tryit">
            <h3>Run it.</h3>
            <p>
                Save your work and reload the browser. In the console, type <code class="inline">me.name</code> and see what result it gives you. Now type <code class="inline">me.sayName()</code> and notice what happens.
            </p>
        </div>
    </article>
</section>

<section>
    <article>
        <h2>Building a Project</h2>
        <p>
            Let's build a project together. We'll start in pseudocode writing out every action that we want to have happen. We'll then convert that pseudocode into functions, then finally convert everything to a single object.
        </p>
        <p>
            We're going to create a fruit salad recipe. It has five things it needs to do:
        </p>
        <ol>
            <li>It should have a place to store each fruit</li>
            <li>It should have a way to display the fruits in the recipe</li>
            <li>It should have a way to add new fruits</li>
            <li>It should have a way to change a fruit</li>
            <li>It should have a way to delete a fruit</li>
        </ol>

        <hr>

        <h4>It should have a place to store each fruit</h4>
        <p>
            Write out a list of three fruits. Now format that list into a named array.
        </p>
        <code class="block"><pre>
watermelon, cantaloupe, grapes</pre></code>
        <p>
            Now format that list into an array.
        </p>
        <code class="block"><pre>
['watermelon', 'cantaloupe', 'grapes']</pre></code>
        <p>
            Finally, declare a new variable and name it and assign it to the array you just built.
        </p>
        <code class="block"><pre>
var fruits = ['watermelon', 'cantaloupe', 'grapes']</pre></code>

        <hr>

        <h4>It should have a way to display the fruits in the recipe</h4>
        <p>
            If you wanted to print this array to the console, how would you do that? <code class="inline">console.log(fruits)</code>. Take that and let's write a function that will console the array when we call the function.
        </p>
        <code class="block"><pre>
function displayFruit(){
    console.log(fruits);
}</pre></code>

        <hr>

        <h4>It should have a way to add new fruits</h4>
        <p>
            How have we in the past added new items into an array? <code class="inline">fruits.push('apples');</code> Remembering back to the <code class="inline">.push()</code> method, how can we take this and make it into a function?
        </p>
        <code class="block"><pre>
function addFruit(fruit){
    fruits.push(fruit);
}</pre></code>
        <p>
            But what if we wanted to <strong>also</strong> print the array to the console without having to manually call the <code class="inline">console.log()</code> or <code class="inline">displayFruit()</code>?
        </p>
        <code class="block"><pre>
function addFruit(fruit){
    fruits.push(fruit);
    displayFruit();
}</pre></code>
        <hr>
        <h4>It should have a way to change a fruit</h4>
        <p>
            Let's find a simple way to modify one of the elements in the array. How do we target a specific element within the array? <code class="inline">fruits[0]</code>. This will give us the first element in the array (remember, arrays are zero based!). Now we can just give it a new value assignment. <code class="inline">fruits[0] = 'kiwi'</code>. How can this be turned into a variable?
        </p>
        <code class="block"><pre>
function changeFruit(position, value){
    fruits[position] = value;
}</pre></code>
        <blockquote>
            <h3>Watch out!</h3>
            <p>
                Notice that this function is a little bit different. We need <strong>two</strong> parameters for this function. Which item we want to change and what we want it changed to.
            </p>
        </blockquote>
        <p>
            Let's also finish the function by adding the <code class="inline">displayFruit()</code> function to it also.
        </p>

        <hr>

        <h4>It should have a way to delete a fruit or multiple fruits</h4>
        <p>
            Lastly, we need to be able to directly target an element and delete it from the list. If you'll remember back when we discussed manipulating arrays, we had the <code class="inline">.splice()</code> method. Try this on the command line: <code class="inline">fruits.splice(1, 1)</code>. Notice that it deleted the <strong>second</strong> item in the array. Let's make this into a function with a single paramenter and also print the array to the console.
        </p>
        <code class="block"><pre>
function deleteFruit(position){
    fruits.splice(position, 1);
}</pre></code>
    </article>
</section>

<section>
    <article>
        <h2>Creating the Object</h2>
        <p>
            So now we have this mass of functions, which under some circumstances might be beneficial, however, each function directly relates specifically to our fruit salad recipe. As we build this out, you'll see many parallels with all the functions we just wrote.
        </p>
        <ol>
            <li>It should store the fruits array on an object</li>
            <li>It should have a displayFruit method</li>
            <li>It should have an addFruit method</li>
            <li>It should have a changeFruit method</li>
            <li>It should have a deleteFruit method</li>
        </ol>

        <hr>

        <h4>It should store the fruits array on an object</h4>
        <p>
            Begin by taking our array and wrapping it into a new object called <code class="inline"> fruitList</code>. The original array will then become the first property : name pair. Watch your syntax!
        </p>
        <code class="block"><pre>
var fruitList = {
    fruits: ['watermelon', 'cantaloupe', 'grapes']
}</pre></code>

        <hr>

        <h4>It should have a displayFruit method</h4>
        <p>
            To create your first method, start by copying in exactly what we used for the <code class="inline">displayFruit()</code> function.
        </p>
        <code class="block"><pre>
var fruitList = {
    fruits: ['watermelon', 'cantaloupe', 'grapes']
    function displayFruit(){
        console.log(this.fruits);
    }
}
</pre></code>
        <p>
            Now this is currently <strong>NOT</strong> correct. How can we modify our syntax to fit the requirements of an object?
        </p>
        <code class="block"><pre>
var fruitList = {
    fruits: ['watermelon', 'cantaloupe', 'grapes'],
    displayFruit: function(){
        console.log(this.fruits);
    }
}
</pre></code>

        <hr>

        <h4>It should have an addFruit method</h4>
        <p>
            Let's do the same now to create an addFruit method. Paste in exactly the function we used before.
        </p>
        <code class="block"><pre>
var fruitList = {
    fruits: ['watermelon', 'cantaloupe', 'grapes'],
    displayFruit: function(){
        console.log(this.fruits);
    }
    function addFruit(fruit){
        fruits.push(fruit);
        displayFruit();
    }
}
</pre></code>
        <p>
            Now with only a couple minor edits, we can convert this to a method.
        </p>
        <code class="block"><pre>
var fruitList = {
    fruits: ['watermelon', 'cantaloupe', 'grapes'],
    displayFruit: function(){
        console.log(this.fruits);
    },
    addFruit: function(fruit){
        fruits.push(fruit);
        this.displayFruit();
    }
}
</pre></code>

    <hr>

    <h4>It should have a changeFruit method</h4>
    <p>
        Now it's time to add our changeFruit method to the object. Copy and paste in as before.
    </p>
    <code class="block"><pre>
var fruitList = {
    fruits: ['watermelon', 'cantaloupe', 'grapes'],
    displayFruit: function(){
        console.log(this.fruits);
    },
    addFruit: function(fruit){
        this.fruits.push(fruit);
        this.displayFruit();
    }
    function changeFruit(position, value){
        fruits[position] = value;
    }
}
</pre></code>
    <p>
        Can you update this code on your own to make it a proper method?
    </p>

    <hr>

    <h4>It should have a deleteFruit method</h4>
    <p>
        The last one is completely on you. The completed code will be in the next section, but don't cheat and look ahead. Try it, ask questions and see if you can figure it out on your own. If you get stumped then we'll work it out together.
    </p>
    </article>
</section>
<section>
    <article>
        <h2>Finished Object</h2>
        <p>
            Here it is... our completed object. Notice how clean our code is and easy to read. Can you see using this in your todo app?
        </p>
        <code class="block"><pre>
var fruitList = {
    fruits: ['watermelon', 'cantaloupe', 'grapes'],
    displayFruit: function(){
        console.log(this.fruits);
    },
    addFruit: function(fruit){
        this.fruits.push(fruit);
        this.displayFruit();
    },
    changeFruit: function(position, value){
        this.fruits[position] = value;
        this.displayFruit();
    },
    deleteFruit: function(position){
        this.fruits.splice(position, 1);
        this.displayFruit();
    }
};</pre></code>
    </article>
</section>
<?php include $url.'/inc/footer.php'; ?>
