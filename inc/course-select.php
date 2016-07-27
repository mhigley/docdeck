<div class="course-select">
    <div class="content">
        <h1>Welcome to the Geekwise Doc<span>Deck</span>!</h1>
        <p>
            Please take a moment to select the course you are enrolled in. This will set a cookie in your browser and you won't have to select again. If you <strong>do</strong> need to change documentation, click the logout button from within the app and you can select your course again. Happy coding and enjoy your class!!
        </p>
        <form class="deck-select">

            <label for="bc1">
                <input id="bc1" type="radio" name="course" value="bc1">
                <span><span></span></span>Bootcamp 1
            </label>

            <label for="bc2">
                <input id="bc2" type="radio" name="course" value="bc2" disabled>
                <span><span></span></span>Bootcamp 2
            </label>

            <label for="js1">
                <input id="js1" type="radio" name="course" value="js1">
                <span><span></span></span>Javascript 1
            </label>

            <input type="submit" onclick="getCourse(event)" name="submit" value="Check out the Docs!">
        </form>
        <span id="warn"></span>
    </div>
</div>
