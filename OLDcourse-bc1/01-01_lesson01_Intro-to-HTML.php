<?php
    $url = $_SERVER['DOCUMENT_ROOT'];
    include $url.'/inc/head.php';
?>
<section>
    <article>
        <h2>Introductions</h2>
        <p>Before we begin, I'd like everyone to have an opportunity to speak a little about themselves. Tell us:</p>
        <ol>
            <li>Your name</li>
            <li>A little background on yourself</li>
            <li>What do you want to get out of this class?</li>
        </ol>
    </article>
</section>
<section>
    <article>
        <h2>Class Goals</h2>
        <ul>
            <li>Create and contribute to repositories through Github</li>
            <li>Develop strong best practice habits with version control</li>
            <li>Utilize applications and plugins speed up development and reduce errors</li>
            <li>Discover the origins of the web and the technology to create it</li>
            <li>Understand the requirements and structure of a basic HTML document</li>
            <li>Deep dive into the full breadth of HTML5 markup</li>
            <li>Fully understand the proper use cases for the most common HTML tags</li>
            <li>Regularly check work to verify that it properly validates to meet W3C standards</li>
            <li>Venture into the endless design options with CSS</li>
            <li>Gain a strong sense of D.R.Y. programming</li>
            <li>Learn the necessary techniques to abstract markup from presentation from interactivity</li>
            <li>Identify the basics of design to effectively reach the customer</li>
            <li>Complete the course with a personal portfolio</li>
        </ul>
    </article>
</section>
<section>
    <article>
        <h2>What is the Internet?</h2>
        <p>
            The Internet is a massive network connecting millions of computers together globally, in which any computer can communicate with any other computer as long as they are both connected to the Internet. Information that travels via a variety of languages known as protocols.
        </p>

        <div class="figure">
            <figure>
                <img src="/img/the-internet-visualized.png" alt="The Internet Visualized" style="background-color: white; padding: 20px;" />
                <figcaption>
                    Source: <a href="https://en.wikipedia.org/wiki/Internet#" target="_blank">Wikipedia</a>
                </figcaption>
            </figure>
        </div>
    </article>
</section>
<section>
    <article>
        <h2>How does the Web Work?</h2>
        <p>
            Let's break it down into a much smaller sample size:
        </p>
        <div class="figure">
            <figure>
                <img src="/img/architecture-of-the-internet.png" alt="Architecture of the Internet" />
                <figcaption>
                    Source: <a href="https://www.murach.com/shop/murachs-html5-and-css3-3rd-edition-detail" target="_blank">Murach's HTML5 and CSS3</a>
                </figcaption>
            </figure>
        </div>
        <ul>
            <li>A local area network (LAN) directly connects computers that are near each other. This is often times referred to as an intranet.</li>
            <li>A wide area network (WAN) consista of two or more LANs that are connected by routers. The routers pass information from one network to another.</li>
            <li>The Internet consists of many WANs that have been connected at Internet exchange points (IXPs). There are several dozen of these IXPs throughout the world.</li>
        </ul>
        <p>
            We are all connecting to the Internet via wifi which is provided by an Internet Service Provider (ISP). The ISP owns a Wide Area Network and leases access to its network. The WAN connects to the rest of the Internet at one or more Internet Exchange Points.
        </p>
    </article>
</section>
<section>
    <article>
        <h2>Static Web Sites</h2>
        <p>
            A static web page is an HTML document that's stored on the web server and doesn't change. The extensions for these files are either .htm or .html. When the user requests a static web page, the browser sends an HTTP request to the web server. It is retrieved from the web server disk drive and sent back to the browser as an HTTP response. When the browser receives the response, it renders the HTML displaying the webpage.
        </p>
        <div class="figure">
            <figure>
                <img src="/img/how-a-web-server-processes-a-static-webpage.png" alt="How a Server Processes a Static Webpage" />
                <figcaption>
                    Source: <a href="https://www.murach.com/shop/murachs-html5-and-css3-3rd-edition-detail" target="_blank">Murach's HTML5 and CSS3</a>
                </figcaption>
            </figure>
        </div>
    </article>
</section>
<section>
    <article>
        <h2>Dynamic Web Sites</h2>
        <p>
            A dynamic web page is generated by a server-side program or script. When the web server recieves the user request it checks the extension of the file to figure out which application server should be run (.net, .php, .rb, .py, etc...). Often times, a large portion of the dynamic content is stored in a database server where the content is processed, generates the HTML for the webpage and returns it to the web server. The web server then sends the HTML to the web browser where it is rendered as part of the HTTP response.
        </p>
        <div class="figure">
            <figure>
                <img src="/img/how-a-web-server-processes-a-dynamic-webpage.png" alt="How a Web Server Processes a Dynamic Webpage" />
                <figcaption>
                    Source: <a href="https://www.murach.com/shop/murachs-html5-and-css3-3rd-edition-detail" target="_blank">Murach's HTML5 and CSS3</a>
                </figcaption>
            </figure>
        </div>
    </article>
</section>
<section>
    <article>
        <h2>Where Does Javascript Fit?</h2>
        <p>
            Javascript is primarily a client-side scripting language that is parsed by the Javascript engine built into the web browser. Time permitting, we'll try and give you a taste of what Javascript can do.
        </p>
            <!--
                Keeping your code in an external JavaScript file makes a lot of sense, as:

                You can apply the same JavaScript functionality to several HTML documents and still keep maintenance easy: if there is a desired change in functionality all you need to do is change one single file.

                Your JavaScript will be cached by browsers. Caching means that browsers will take a copy of your JavaScript and store it on the computer of the visitors surfing on your site. The next time this user loads the same script it will not be taken from your server but their own computers — thus loading much faster.

                You can easily find your script if you need to modify it, avoiding the need to scan through long HTML documents to find the place to fix a problem.

                Fixing errors becomes easier as a debugging tool or error console will tell you which file contains the error and reliably report the line number.

                You can add as many JavaScript files as you want to a document but there are several considerations to make before going down that route.
            -->
        <div class="figure">
            <figure>
                <img src="/img/how-javascript-fits-into-architecture.png" alt="How Javascript Fits into the Architecture" />
                <figcaption>
                    Source: <a href="https://www.murach.com/shop/murachs-html5-and-css3-3rd-edition-detail" target="_blank">Murach's HTML5 and CSS3</a>
                </figcaption>
            </figure>
        </div>
    </article>
</section>
<section>
    <article>
        <h2>Development Tools</h2>
        <p>
            Let's get started and describe everything we're going to need for this course and explore alternatives you can utilize outside of this class.
        </p>
        <ul>
            <li><strong>Web Browsers</strong>
                <p>
                    We'll be using <a href="https://www.mozilla.org/en-US/firefox/developer/" target="_blank">Firefox Development Edition</a>. Other browsers are Microsoft Edge, Internet Explorer, Google Chrome, Apple Safari and Opera.
                </p>
            </li>
            <li>
                <strong>Text Editor</strong>
                <p>
                    A text editor is what we use to develop in. There are literally dozens of different editors you could choose from ranging from fully featured to basic text. We'll be using Github's <a href="https://atom.io/">Atom</a> IDE. Other editors include - Sublime Text, Espresso, Coda, Cloud9, Visual Studio, Adobe Dreamweaver, Notepad++, etc...
                </p>
            </li>
            <li>
                <strong>Element Inspector</strong>
                <p>
                    To view the document object model (DOM), we'll use the element inspector built right into the browser
                </p>
            </li>
            <li>
                <hr>
                <a href="https://github.com/Geekwise-Bootcamp-1/bc1-docdeck#welcome-to-bootcamp-1" target="_blank">Let's get started!</a>
            </li>
        </ul>
    </article>
</section>
<section>
    <article>
        <h2>Other Resources</h2>
        <p>
            Here is a short list of additional resources to benefit your learning.
        </p>
        <ul>
            <li><a href="https://developer.mozilla.org/en-US/" target="_blank">Mozilla Developer Network</a></li>
            <li><a href="http://www.w3schools.com/js/default.asp" target="_blank">W3schools.com</a></li>
            <li><a href="http://stackoverflow.com/" target="_blank">Stack Overflow</a></li>
            <li><a href="http://codepen.io/" target="_blank">CodePen</a></li>
        </ul>
    </article>
</section>
<?php include $url.'/inc/footer.php'; ?>
