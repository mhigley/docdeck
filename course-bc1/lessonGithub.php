<?php
    $url = $_SERVER['DOCUMENT_ROOT'];
    include $url.'/inc/head.php';
?>

<section>
    <article>
        <h2>Welcome to Github</h2>
        <p>
            GitHub is a Git repository hosting service, but it adds many of its own features. While Git is a command line tool, GitHub provides a Web-based graphical interface. It also provides access control and several collaboration features, such as a wikis and basic task management tools for every project.
        </p>
        <div class="figure">
            <figure>
                <img src="/img/github.png" alt="Github | Social Coding" />
                <figcaption>Source: <a href="http://itcloudworks.com/google-cloud-source-repositories-going-after-github/" target="_blank">itcloudworks.com</a></figcaption>
            </figure>
        </div>
        <p>So Github is actually a combination of two different things:</p>
        <h4>Git</h4>
        <ul>
            <li>Git is a version control system. It manages and stores revisions of projects.</li>
            <li>Git is primarily used for code, but can be used to manage any other type of file.</li>
            <li>Think of Git as a filing system for every draft of a document.</li>
        </ul>
        <h4>Github</h4>
        <ul>
            <li>Github is a graphical user interface (GUI) for your version control.</li>
            <li>Each project is stored in repositories accessible to the world as open source.</li>
            <li>Entire teams can contribute to a single project and every change or contribution is tracked and timestamped.</li>
            <li>Millions of repositories can be watched, starred, and forked by any other developer.</li>
            <li>Want to contribute to a project?
                <ol>
                    <li>Find a project</li>
                    <li>Fork the repository</li>
                    <li>Clone a copy to your own computer</li>
                    <li>Make changes or add functionality that benefits the project</li>
                    <li>Submit a pull request so the original author can see your changes</li>
                    <li>The original author can then merge your changes</li>
                    <li>Feel great about how you contributed to improving the project</li>
                </ol>
            </li>
        </ul>
    </article>
</section>

<section>
    <article>
        <h2>Get Git</h2>
        <p>
            Git is a command line interface that trachks all the changes that you've made to a project. It sets time stamps and messages to quickly and easily revert back to an earlier build of your project if you needed. Git is easily controlled with only a few simple commands.
        </p>
        <p>
            First however, we need to download Git and the Bash Terminal window to our computers.
        </p>

        <ol>
            <li>
                <a href="https://git-scm.com/downloads" target="_blank">
                    <div class="figure">
                        <figure>
                            <img src="/img/git-windows.png" alt="Git for Windows" />
                            <figcaption>Click here to download Git</figcaption>
                        </figure>
                    </div>
                </a>
            </li>
            <li>Run the install keeping all default options <strong>EXCEPT</strong></li>
        </ol>
    </article>
</section>

<section>
    <article>
        <h2>Get Your Work Off Thimble</h2>
        <p>
            Thimble has done a great job for us as our IDE. But now at the end of the class, we need to be able to save our final project to Github. Let's export our project to our computer.
        </p>
        <ol>
            <li>
                <div class="figure">
                    <figure>
                        <img src="/img/thimble-export.jpg" alt="Thimble Export" />
                        <figcaption>Exporting a project</figcaption>
                    </figure>
                </div>
            </li>
            <li>Save the zip file to your desktop</li>
            <li>Double click the zip file to unarchive the folder</li>
            <li>That's it! We're ready to put it onto Github.</li>
        </ol>
    </article>
</section>

<section>
    <article>
        <h2>Communicating With Github</h2>
        <p>
            When we first started this course, we setup a new account with Github and created our own repository on their servers. It's time to take all of the code that we've done over the span of the course and push all of our changes online creating a backup of all our work. Let's walk through the steps together.
        </p>
        <ol>
            <li>Open your Bash Terminal by pressing the Windows button</li>
            <li>Type BASH, highlight the Bash Terminal app and press Enter.<br>
                <div class="figure">
                    <figure>
                        <img src="/img/bash-terminal.jpg" alt="Bash Terminal" />
                        <figcaption>
                            Source: <a href="http://www.topbestalternatives.com/wp-content/uploads/2015/12/Windows-Command-Prompt-696x444.jpg" target="_blank">topbestalternatives.com</a>
                        </figcaption>
                    </figure>
                </div>
                <p>
                    The green should be your user and computer name and the yellow is the current path. After the dollar sign ($) is where you type your terminal commands.
                </p>
            </li>
            <li>Lets change the current path to our final project:
                <code class="block"><pre>
cd ~/Desktop/project</pre></code>
                Press Enter. The new path should reflect that your current active directory is your project on the Desktop.
            </li>

            <li>We need to initialize our project as a Git repository. Type:
                <code class="block"><pre>
git init</pre></code>
                Press Enter.
            </li>

            <li>Now let's add all of our files to our new local repository. This stages them for the first commit.
                <code class="block"><pre>
git add .</pre></code>
                Press Enter.
            </li>

            <li>Let's now commit the files that you've staged in your local repository. Think of it as a waiting room for your code.
                <code class="block"><pre>
git commit -m "First commit"</pre></code>
                The message in the quotation marks can be whatever you want... just be descriptive. Press Enter.
            </li>

            <li>We need to head back to our Github account and copy the path to our repository. Adjusting your PATH environment use Git from Git Bahs only</li>



            <li>Type the following command:
                <code class="block"><pre>
cd ~/Desktop</pre></code>
                Press Enter. The new path should reflect that your current active directory is the Desktop.
            </li>
            <li>Now type:
                <code class="block"><pre>
ls -la</pre></code>
                The Terminal will list out any and all folders and files you have stored on the Desktop of your computer.
            </li>
            <li>Head back to our Github Bootcamp 1 Organization page and click on your repository.</li>
            <li>In the main utility bar, click the green "Clone or download" button. Check that the title of the popup says: "Clone with HTTPS" and click on the copy to clipboard icon.</li>
            <li>Back in the Terminal, type:
                <code class="block"><pre>
git clone [ins key]</pre></code>
            Press Enter. When you press the insert key, a URL will appear that is an absolute path to <strong>your personal</strong> repository.
            e.g.: <code class="block"><pre>
git clone https://github.com/Geekwise-Bootcamp-1/rbtstudio.git</pre></code>
                <blockquote>
                    Your URL is going to be different than what is demoed here in the documentation.<br>
                    Do <strong>NOT</strong> type:
                    <code class="block"><pre>
git clone [ins key]</pre></code>
                    Do <strong>NOT</strong> type:
                    <code class="block"><pre>
git clone https://github.com/Geekwise-Bootcamp-1/rbtstudio.git</pre></code>
                </blockquote>
            </li>
            <li>Let's now change directory to be within the new repository cloned to your desktop. Type:
                <code class="block"><pre>
cd [your repository]</pre></code>
                Press Enter.
                <blockquote>
                    Again... what you type is going to be different than what is demoed here in the documentation.<br>
                    Do <strong>NOT</strong> type:
                    <code class="block"><pre>
cd [your repository]</pre></code>
                </blockquote>
            </li>
            <li>
                Your current path should read something similar to:
                <code class="block"><pre>
$ ~/Desktop/[your repository]</pre></code>
            </li>
        </ol>
    </article>
</section>

<section>
    <article>
        <h2>General Terminal Commands</h2>
        <p>
            The following list of commands that have a wide use case. Aquaint yourself as much as possible to become a more valuable developer.
        </p>
        <h4>cd</h4>
        <p>Change directory</p>
        <code class="block"><pre>
cd</pre></code>

        <h4>ls</h4>
        <p>List information about file(s). Short listing.</p>
        <code class="block"><pre>
ls</pre></code>

        <blockquote>
            <h3>Options to append:</h3>
            <p>Long Listing</p>
            <code class="block"><pre>
ls -l</pre></code>
            <p>Listing including hidden files.</p>
            <code class="block"><pre>
ls -a</pre></code>
            <p>Long listing and including hidden files.</p>
            <code class="block"><pre>
ls -la</pre></code>
        </blockquote>

        <h4>mkdir</h4>
        <p>Create a new directory</p>
        <code class="block"><pre>
mkdir [directory name]</pre></code>

        <h4>touch</h4>
        <p>Create a new file</p>
        <code class="block"><pre>
touch [file name]</pre></code>
    </article>
</section>
<section>
    <article>
        <h2>Git specific commands</h2>
        <p>
            The following commands are specific to making changes and communicating with Github and your remote repository.
        </p>
        <h4>git status</h4>
        <p>Displays all files that have been modified. Red are untracked files, green are tracked files.</p>
        <code class="block"><pre>
git status</pre></code>

        <h4>git add</h4>
        <p>Add all current changes to the next commit.</p>
        <code class="block"><pre>
git add .</pre></code>

        <h4 class="block">git commit</h4>
        <p>Stages all of the files into a "waiting room" preped for deployment to the repository. However every commit needs a message! Be descriptive. The more detailed your message, the easier it will be to find a version you can revert back to when you accidentally delete everything. <i class="fa fa-frown-o"></i></p>
        <code class="block"><pre>
git commit -m "[your commit message]"</pre></code>

        <h4 class="block">git push</h4>
        <p>Push all committed changes to your repository.</p>
        <code class="block"><pre>
git push</pre></code>

    </article>
</section>
<section>
    <article>
        <h2>Welcome to Github</h2>
        <p>
            GitHub is a Git repository hosting service, but it adds many of its own features. While Git is a command line tool, GitHub provides a Web-based graphical interface. It also provides access control and several collaboration features, such as a wikis and basic task management tools for every project.
        </p>
        <div class="figure">
            <img src="/img/github.png" alt="Github | Social Coding" />
            <figcaption>Source: <a href="http://itcloudworks.com/google-cloud-source-repositories-going-after-github/" target="_blank">itcloudworks.com</a></figcaption>
        </div>
    </article>
</section>
<?php include $url.'/inc/footer.php'; ?>
