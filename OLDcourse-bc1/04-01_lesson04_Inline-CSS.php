<?php
    $url = $_SERVER['DOCUMENT_ROOT'];
    include $url.'/inc/head.php';
?>
<section>
    <article>
        <h2>Review</h2>
        <p>
            Follow the instructions below hitting all the list items to complete the challenge
        </p>
        <ol>
            <li>In your index.html page, add a doctype to the top of the page setting the document declaration</li>
            <li>Add the HTML tag (Don't forget to set the page language attribute!)</li>
            <li>Include the two sections of a web page: the HEAD tag and the BODY tag</li>
            <li>Between the HEAD tags, add a TITLE tag with the following text: <code class="inline">BC1 - Day03</code></li>
            <li>Create a heading tag of your choice between the BODY tags. Give the heading tag the following text:  <code class="inline">HTML</code></li>
            <li>Below the heading tag, add a P tag and type the definition of the acronym "HTML"</li>
            <li>Did we include everything we need for a web page?</li>
        </ol>
    </article>
</section>
<section>
    <article>
        <h2>Writing HTML tags</h2>
        <ul>
            <li><strong>Most</strong> HTML elements have an opening tag, content, and a closing tag. Each tag is coded within a set of brackets (&lt;&gt;).</li>
            <li>An element's <em>opening tag</em> includes the tag name. The <em>closing tag</em> includes the tag name preceded by a slash. And the <em>content</em> includes everything that appears between the opening and closing tags.</li>
            <li>Some HTML elements have no content. For example, the <code class="inline">&lt;br&gt;</code> element, which forces a line break, consists of just one tag. This type of tag is called an <em>empty</em> tag, or <em>void</em> tag.</li>
            <li>HTML elements car commonly <em>nested</em>. To nest elements correctly, though, you mush close an inner set of tags before closing the outer set of tags.</li>
        </ul>
    </article>
</section>
<section>
    <article>
        <h2>Adding Attributes to Your HTML</h2>
        <p>
            In creating the minimum basic tags necessary for every web page, we've already added a couple attributes to our markup. Look at the &lt;html&gt; and &lt;meta&gt; tags for reference.
        </p>
        <ul>
            <li><em>Attributes</em> can be coded within opening or empty (void) tags to supply optional values.</li>
            <li>The <code class="inline">id</code> attribute is used to identify a single HTML element, so its value can be used for just one HTML element.</li>
            <li>A <code class="inline">class</code> attribute with the same value can be used for more than one HTML element.</li>
        </ul>
    </article>
</section>
<section>
    <article>
        <h2>Adding Comments and Whitespace</h2>
        <p>
            Adding comments to your code provided tips and information about your code. You'll often write the markup for a project and not see it again for weeks, months or even years. Including comments in your code will remind you about the code you wrote and your thinking process when solving a particular problem. HTML comments can also be used to block out chunks of markup and the browser will ignore all code within.
        </p>
        <ul>
            <li>An HTML <em>comment</em> is text that appears between the <code class="inline">&lt;!&ndash;&ndash;</code> and <code class="inline">&ndash;&ndash;&gt;</code> characters. Since web browsers ignore comments, you can use them to describe or explain portions of your HTML code that might otherwise be confusing.</li>
            <li>You can also use comments to <em>comment out</em> elements that you don't want the browser to display. This can be useful when you're testing a web page.</li>
            <li>An HTML comment can be coded on a single line or it can span two or more lines.</li>
            <li><em>Whitespace</em> consists of characters like tab characters, line return characters, and extra spaces.</li>
            <li>Since whitespace is ignored by browsers, you can use it to indent lines of code and separate elements from one another by putting them on separate lines. This is a good coding practice because it makes your code easier to read.</li>
        </ul>
    </article>
</section>
<section>
    <article>
        <h2>Most Common HTML Tag List</h2>
        <p>We have discussed a number of essential tags used in creating a website. Let's review what those were.
        </p>

        <h4>&lt;!&ndash;&ndash; &ndash;&ndash;&gt;</h4>
        <p>The comment tag is used to insert comments in the source code. Comments are not displayed in the browsers. You can use comments to explain your code, which can help you when you edit the source code at a later date. This is especially useful if you have a lot of code.</p>

        <h4>&lt;!doctype html&gt;</h4>
        <p>The &lt;!DOCTYPE&gt; declaration <strong>must</strong> be the very first thing in your HTML document, before the &lt;html&gt; tag. The &lt;!DOCTYPE&gt; declaration is not an HTML tag; it is an instruction to the web browser about what version of HTML the page is written in.</p>

        <h4 class="block">&lt;html lang="en"&gt;</h4>
        <p>The &lt;html&gt; tag tells the browser that this is an HTML document. The &lt;html&gt; tag represents the root of an HTML document. The &lt;html&gt; tag is the container for all other HTML elements (except for the &lt;!DOCTYPE&gt; tag).</p>

        <h4>&lt;head&gt;</h4>
        <p>The &lt;head&gt; element is a container for all the head elements. The &lt;head&gt; element can include a title for the document, scripts, styles, meta information, and more.</p>
        <p>The following elements can go inside the &lt;head&gt; element:</p>
        <ul>
            <li>&lt;meta&gt; (&lt;meta charset="utf-8"&gt; recommended to prevent XSS attacks)</li>
            <li>&lt;title&gt; (this element is <strong>required</strong> in an HTML document)</li>
            <li>&lt;style&gt;</li>
            <li>&lt;base&gt;</li>
            <li>&lt;link&gt;</li>
            <li>&lt;script&gt;</li>
            <li>&lt;noscript&gt;</li>
        </ul>

        <h4>&lt;title&gt;</h4>
        <p>The &lt;title&gt; tag is required in all HTML documents and it defines the title of the document.</p>

        <h4 class="block">&lt;body&gt;</h4>
        <p>The &lt;body&gt; tag defines the document's body. The &lt;body&gt; element contains all the contents of an HTML document, such as text, hyperlinks, images, tables, lists, etc.</p>

        <h4 class="block">&lt;h1&gt; - &lt;h6&gt;</h4>
        <p>The &lt;h1&gt; to &lt;h6&gt; tags are used to define HTML headings. &lt;h1&gt; defines the most important heading. &lt;h6&gt; defines the least important heading.</p>

        <h4 class="block">&lt;p&gt;</h4>
        <p>The &lt;p&gt; tag defines a paragraph. Browsers automatically add some space (margin) before and after each &lt;p&gt; element. The margins can be modified with CSS (with the margin properties).</p>

        <h4 class="inline">&lt;a href="#"&gt;</h4>
        <p>The &lt;a&gt; tag defines a hyperlink, which is used to link from one page to another. The most important attribute of the &lt;a&gt; element is the href attribute, which indicates the link's destination.</p>
        <p>By default, links will appear as follows in all browsers:</p>
        <ul>
            <li>An unvisited link is underlined and blue</li>
            <li>A visited link is underlined and purple</li>
            <li>An active link is underlined and red</li>
        </ul>

        <h4 class="inline">&lt;img src="#"&gt;</h4>
        <p>The &lt;img&gt; tag defines an image in an HTML page. The &lt;img&gt; tag has two required attributes: src and alt. &lt;br&gt;&lt;strong&gt;Note:&lt;/strong&gt; Images are not technically inserted into an HTML page, images are linked to HTML pages. The &lt;img&gt; tag creates a holding space for the referenced image.</p>

        <h4 class="block">&lt;figure&gt;</h4>
        <p>The &lt;figure&gt; tag specifies self-contained content, like illustrations, diagrams, photos, code listings, etc. While the content of the &lt;figure&gt; element is related to the main flow, its position is independent of the main flow, and if removed it should not affect the flow of the document.</p>

        <h4 class="block">&lt;figcaption&gt;</h4>
        <p>The &lt;figcaption&gt; tag defines a caption for a &lt;figure&gt; element. The &lt;figcaption&gt; element can be placed as the first or last child of the &lt;figure&gt; element.</p>

        <h4 class="inline">&lt;strong&gt;</h4>
        <p>The &lt;strong&gt; tag is a phrase tag. It defines important text.</p>

        <h4 class="inline">&lt;em&gt;</h4>
        <p>The &lt;em&gt; tag is a phrase tag. It renders as emphasized text.</p>

        <h4 class="block">&lt;ol&gt;</h4>
        <p>The &lt;ol&gt; tag defines an ordered (numbered) list. Use the &lt;ol&gt; tag together with the &lt;li&gt; tag to create ordered lists.</p>

        <h4 class="block">&lt;ul&gt;</h4>
        <p>The &lt;ul&gt; tag defines an unordered (bulleted) list. Use the &lt;ul&gt; tag together with the &lt;li&gt; tag to create unordered lists.</p>

        <h4 class="list-item">&lt;li&gt;</h4>
        <p>The &lt;li&gt; tag defines a list item. The &lt;li&gt; tag is used in ordered lists(&lt;ol&gt;), unordered lists (&lt;ul&gt;).</p>
    </article>
</section>
<?php include $url.'/inc/footer.php'; ?>
