<?php
    $url = $_SERVER['DOCUMENT_ROOT'];
    include $url.'/inc/head.php';
?>
<section>
    <article>
        <h2>Review</h2>
        <p>
            Create a new project folder for today called "lesson06" in Thimble and follow the steps below.
        </p>
        <p>
            You have <strong>15 minutes</strong> to:
        </p>
        <ol>
            <li>Add one image, one header, and one paragraph to your page</li>
            <li>Set the <em>border-radius</em> of the image to 100%</li>
            <li>Target the <code class="inline">&lt;body&gt;</code> element and set the <em>text-align</em> to center</li>
            <li>Change the color of the headline</li>
        </ol>
    </article>
</section>
<section>
    <article>
        <h2>Lets Talk Navigation</h2>
        <p>
            There is nothing that you'll put on your website more important then the main navigation. It's the key to moving around the site, whether it be jumping from one section to another within the same page, or from page-top-page withing the same website. There is an infinite number of locations you could place your navigation, but we'll focus on the three most common <a href="#patternTip">patterns</a> providing a logical and recognizable solution.
        </p>
        <p>
            The three types we'll see and build today are:
        </p>
        <ul>
            <li>Horizontal Menu Bar</li>
            <li>Vertical Menu Bar</li>
            <li>Single-page Jump Links</li>
        </ul>
        <div class="figure">
            <figure>
                <img src="/img/responsive-sidebar-navigation-featured.png" alt="" />
                <figcaption>Source: <a href="https://0bf196087c14ed19d1f11cf1-ambercreativelab.netdna-ssl.com/wp-content/uploads/2015/09/responsive-sidebar-navigation-featured.png" width="600" height="auto" target="_blank">codyhouse.co</a></figcaption>
            </figure>
        </div>
    </article>
</section>
<section>
    <article>
        <h2>The Horizontal Nav</h2>
        <p>
            Probably the most common answer to a navigation. The pattern follows the typical flow our eyes read a webpage: beginning from the top and scanning to the right. It's referred to as the "F" pattern.
        </p>
        <blockquote class="quote">
            Scientific studies show that web surfers read the screen in an "F" pattern - seeing the top, upper left corner and left sides of the screen most... only occasionally taking glances towards the right side of the screen.

            <cite>Brandon Jones | <a href="http://webdesign.tutsplus.com/articles/understanding-the-f-layout-in-web-design--webdesign-687" target="_blank">envato.com</a></cite>
        </blockquote>

        <p>
            So now knowing how the human eye scans a webpage, let's build out a navigation to accomodate this. What combination of tags might we utilize to create a simple <em>list</em> of <em>links</em>?<br><small>(Hint: look at the italicized words in the previous question!!)</small>
        </p>

        <code class="block"><pre>
&lt;ul&gt;
    &lt;li&gt;&lt;a href="#"&gt;first link&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;second link&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;third link&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;fourth link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</pre></code>

        <p>
            That markup is good... <strong>but</strong>, can it be better?
        </p>

        <hr>

        <h4>nav</h4>
        <p>
            Enter the &lt;nav&gt; tag. This is a brand new "layout" tag that does nothing more than provide more context to the markup within it. It tells the browser that the code contained will be the primary navigation of the website. A website can have lots of links all over the place. Someone who is visually impaired would greatly benefit from being able to identify which links navigate the website. It provides <strong>semantic</strong> meaning to the tags.
        </p>
        <code class="block"><pre>
&lt;nav&gt;
    &lt;ul&gt;
        &lt;li&gt;&lt;a href="#"&gt;first link&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;second link&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;third link&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;fourth link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;</pre></code>
        <p>
            Let's style it together!
        </p>
    </article>
</section>
<section>
    <article>
        <h2>The Vertical Nav</h2>
        <p>
            The vertical nav utilizes the <strong>exact</strong> same markup. You'll see this style of tag everywhere on the web. Don't feel as though just because there is "science" to backup a single solution to a problem on the web that it correct. The web is an open venue for you to design whatever kind of website that <strong>YOU</strong> want!
        </p>
        <blockquote>
            <h3>Caution</h3>
            <p>
                Whatever navigation pattern you choose, just make sure the user understands how to get around. Avoid at all costs "Mystery Meat" navigation.
            </p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/zZ_aaCYCxVQ" frameborder="0" allowfullscreen></iframe>
        </blockquote>
        <p>
            Let's add a <em>class</em> attribute to our nav to <strong>override</strong> a few of our styles.
        </p>
        <h3>Wait, WHAT?!</h3>
    </article>
</section>
<section>
    <article>
        <h2>CSS Specificity</h2>
        <p>
            <strong>Specificity</strong> is the means by which browsers decide which <strong>CSS</strong> property values are the most relevant to an element and, therefore, will be applied. <strong>Specificity</strong> is based on the matching rules which are composed of <strong>CSS</strong> selectors of different sorts.
        </p>
        <p>
            Here's another way of thinking about it:
        </p>
        <div class="figure">
            <figure>
                <img src="/img/specificitywars-05v2.jpg" alt="" />
                <figcaption>Source: <a href="https://stuffandnonsense.co.uk/archives/css_specificity_wars.html" target="_blank">stuffandnonsense.co.uk</a></figcaption>
            </figure>
        </div>
        <p>
            Enough talking about it, let's try out a couple examples:
        </p>
        <?php echo bin('yulunem','html,css,output'); ?>
    </article>
</section>
<section>
    <article>
        <h2>The Jump Link??</h2>
        <p>
            Lastly, let's explore what I refer to as the "jump link". A common web design is to have a single page divided into multiple sections instead of multiple pages. When you click on the navigation items, the browser jumps you down to that section by targeting an elements id. You can see an example of this idea on my <a href="http://matthewhigley.com" target="_blank">portfolio</a> page.
        </p>
        <p>
            The technique is accomplished by replacing the anchor tag's <em>href</em> attribute with an <em>id</em> of an element on the same page. Let's try it!
        </p>
        <?php echo bin('rolejek','html,output'); ?>
    </article>
</section>
<?php include $url.'/inc/footer.php'; ?>
