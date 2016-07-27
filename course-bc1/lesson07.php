<?php
    $url = $_SERVER['DOCUMENT_ROOT'];
    include $url.'/inc/head.php';
?>
<section>
    <article>
        <h2>Review</h2>
        <p>
            Create a new project folder for today called "lesson07" in Thimble and follow the steps below.
        </p>
        <p>
            You have <strong>45 minutes</strong> to:
        </p>
        <ol>
            <li>Let's create a <strong>horizontal</strong> navbar</li>
            <li>Create two new HTML pages to your project. Name them whatever you want</li>
            <li>Don't forget to <em>link</em> your <em>stylesheet</em> to <strong>every page</strong></li>
            <li>On each page add a <em>heading</em> tag and a single <em>paragraph</em> of <a href="http://www.lipsum.com/" target="_blank">lorem ipsum</a> text</li>
            <li>Give your markup some style... most importantly so that it is in a horizontal layout</li>
            <li>Ensure that your <em>navigation</em> enables you to click between <strong>all</strong> of the pages</li>
        </ol>
    </article>
</section>

<section>
    <article>
        <h2>Smart Layout</h2>
        <p>
            Now that we can add whatever content we need, it needs to be layed out for easy styling.
        </p>
        <p>
            Two column layout? Three column layout? Easy. Not sure what I'm talking about? Let's search the web for examples.
        </p>
        <div class="figure">
            <figure>
                <img src="/img/column-layout.png" alt="Column Layout" />
                <figcaption>Source: <a href="https://zunostudios.com/blog/development/162-building-a-flexible-multi-column-joomla-template" target="_blank">zunostudios.com</a></figcaption>
            </figure>
        </div>
    </article>
</section>

<section>
    <article>
        <h2>Group Similar Content</h2>
        <p>
            As you develop, always keep the endgoad in mind and modify your markup accordingly. Group blocks of code that belong together in <code class="inline">&lt;div&gt;</code> tags or other semantically correct element for layout and styling purposes. Think about all of your markup "residing" or "living" within the spaces in a bookshelf. Without the bookshelf, you have a pile of books. But group books together that relate, and you can easily stack or retrieve any book you need.
        </p>
        <p>
            Let's consider an example. Below is the desired output and below the image is our current code. How could we group similar elements together and style the content to resemble the image?
        </p>
        <div class="figure">
            <figure>
                <img src="/img/three-col-layout.jpg" alt="Three Column Layout" />
                <figcaption>Modified from: <a href="http://www.ices.cmu.edu/images/horizontal-poster-1.jpg">ices.cmu.edu</a></figcaption>
            </figure>
        </div>
        <code class="block"><pre>
...

&lt;h2&gt;Our Companies Services&lt;/h2&gt;
&lt;h3&gt;Development&lt;/h3&gt;
&lt;p&gt;
    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
&lt;/p&gt;
&lt;a href="#"&gt;Learn More&lt;/a&gt;
&lt;h3&gt;Design&lt;/h3&gt;
&lt;p&gt;
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
&lt;/p&gt;
&lt;a href="#"&gt;Learn More&lt;/a&gt;
&lt;h3&gt;Copy Writing&lt;/h3&gt;
&lt;p&gt;
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
&lt;/p&gt;
&lt;a href="#"&gt;Learn More&lt;/a&gt;

...</pre></code>

        <blockquote>
            <h3>Dev Tip:</h3>
            <p>
                I assure you, this will be one of the more underutilized techniques shown to you. But if you keep it in mind and practice, your layout will improve and styling will be MUCH easier.
            </p>
        </blockquote>
    </article>
</section>

<section>
    <article>
        <h2>Preventing Divitis</h2>
        <p>
            As junior developers, we often times rush into a project and don't think, or plan out our markup. Once we understand the power of the <code class="inline">&lt;div&gt;</code>, we start applying it to <strong>every</strong> situation. There are many new elements that have been added to the HTML specification for layout purposes.
        </p>
        <blockquote class="quote">
            <p>
                Divitis is a term used to describe an error common amongst newcomers to building CSS-based sites whereby they use too many divs for everything.
            </p>
        </blockquote>
    </article>
</section>

<section>
    <article>
        <h2>Layout Tags</h2>
        <p>
            The layout elements give us the tools that we need to create complex yet semantic websites. The following list has a familiar tag and a whole family of related elements to make your job easier.
        </p>

        <h4 class="block">&lt;header&gt;</h4>
        <p>The &lt;header&gt; element represents a container for introductory content or a set of navigational links.</p>

        <h4 class="block">&lt;nav&gt;</h4>
        <p>The &lt;nav&gt; tag defines a set of navigation links.</p>
        <p>Notice that NOT all links of a document should be inside a &lt;nav&gt; element. The &lt;nav&gt; element is intended only for major block of <strong>navigation links</strong>.</p>

        <h4 class="block">&lt;main&gt;</h4>
        <p>The &lt;main&gt; tag specifies the main content of a document.</p>
        <p>The content inside the &lt;main&gt; element should be unique to the document. It should not contain any content that is repeated across documents such as sidebars, navigation links, copyright information, site logos, and search forms.</p>
        <p>Note: There must not be more than one &lt;main&gt; element in a document. The &lt;main&gt; element must NOT be a descendant of an &lt;article&gt;, &lt;aside&gt;, &lt;footer&gt;, &lt;header&gt;, or &lt;nav&gt; element.</p>

        <h4 class="block">&lt;article&gt;</h4>
        <p>The &lt;article&gt; tag specifies independent, self-contained content.</p>
        <p>An article should make sense on its own and it should be possible to distribute it independently from the rest of the site.</p>
        <p>Potential sources for the &lt;article&gt; element:</p>
        <ul>
            <li>Forum post</li>
            <li>Blog post</li>
            <li>News story</li>
            <li>Comment</li>
        </ul>

        <h4 class="block">&lt;aside&gt;</h4>
        <p>The &lt;aside&gt; tag defines some content aside from the content it is placed in.</p>

        <h4 class="block">&lt;footer&gt;</h4>
        <p>The &lt;footer&gt; tag defines a footer for a document or section.</p>
        <p>
            A &lt;footer&gt; element typically contains:
        </p>
        <ul>
            <li>authorship information</li>
           <li>copyright information</li>
           <li>contact information</li>
           <li>sitemap</li>
           <li>back to top links</li>
           <li>related documents</li>
        </ul>
    </article>
</section>
<?php include $url.'/inc/footer.php'; ?>
