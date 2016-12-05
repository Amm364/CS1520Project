<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/SiteCSS.css">
    <meta charset="UTF-8">
    <title>Alex's Website</title>
  </head>
  <body>
    <header id="header">
      <div class="head" id="headerTextColor">
        <p class="header-text" id="headerText">Welcome To Alex's Site!</p>
      </div>
    </header>
    <div class="left-index" id="leftIndex">
      <p class="text" id="navigationText">Navigation Links</p>
      <form class="nav-buttons" id="navigation" name="navigationButtons">
        <input class="nav-button" id="homeButton" type="button" name="home" value="Home" onclick="navigation(this.form.home.value)">
        <input class="nav-button" id="interestsButton" type="button" name="interests" value="Interests" onclick="navigation(this.form.interests.value)">
        <input class="nav-button" id="sportsButton" type="button" name="sports" value="Sports" onclick="navigation(this.form.sports.value)">
        <input class="nav-button" id="memesButton" type="button" name="memes" value="Memes" onclick="navigation(this.form.memes.value)">
        <input class="nav-button" id="gamesButton" type="button" name="games" value="Games" onclick="navigation(this.form.games.value)">
        <input class="nav-button" id="pollButton" type="button" name="poll" value="Poll" onclick="navigation(this.form.poll.value)">
      </form>
      <form class="js-form" id="form1" name="colorChange">
        <p class="text" id="leftIndexText">Color Changing Buttons!</p>
        <p><input class="button" id="svButton" type="button" name="sv" value="Steel Valley" onclick="changeColor(this.form.sv.value)">
          <input class="button" id="pittButton" type="button" name="pitt" value="Pitt" onclick="changeColor(this.form.pitt.value)">
          <br>
          <input class="button" id="steelersButton" type="button" name="steelers" value="Steelers" onclick="changeColor(this.form.steelers.value)">
        </p>
      </form>
      <p class="hidden" id="revealName"></p>
      <form class="name-form" id="nameForm" name="nameSubmit">
        <p class="text" id="nameText">What is your name?</p>
        <p class="name-input" id="nameInputs">
          <input class="name" id="name" name="nameInput" size="8" type="text">
          <input class="enter" id="nameButton" type="button" value="Submit" onclick="greetingsText(this.form.name.value)">
        </p>
      </form>
    </div>
    <div class="main-div" id="Home">
      <h1 class="heading" id="headingMain">Home</h1>
      <p class="div-text" id="introText">Hello! This is my website that I made for my CS 1520 Project. Here is a short list biography of myself.</p>
      <ul class="list" id="aboutMe">
        <li class="list-item" id="item1">I am from Munhall, Pennsylvania.</li>
        <li class="list-item" id="item2">I went to High School at Steel Valley School District.</li>
        <li class="list-item" id="item3">I am currently a Senior and CS undergraduate at the University of Pittsburgh.</li>
        <li class="list-item" id="item4">I have a twin brother named Adam who is also a CS undergraduate at Pitt.</li>
        <li class="list-item" id="item5">I like to golf and play video games.</li>
        <li class="list-item" id="item6">This is my first major website that I have created, and I'm looking forward to learning more about web development!</li>
        <li class="list-item" id="item7">I'm going to be graduating in April with the class of 2017</li>
        <li class="list-item" id="item8">I never knew how to program in High School, but I really enjoy doing it at Pitt!</li>
      </ul>
      <p class="div-text" id="closingIntro">To find more information about me, click the navigation buttons!<p>
    </div>
    <div class="main-div" id="Interests">
      <h1 class="heading" id="headingInterest">Interests</h1>
      <p class="div-text" id="interestText">This is where I'm going to put my interests!</p>
    </div>
    <div class="main-div" id="Sports">
      <h1 class="heading" id="headingSports">Sports</h1>
      <p class="div-text" id="sportsText">This is where I'll put cool sports stuff!</p>
    </div>
    <div class="main-div" id="Memes">
      <h1 class="heading" id="headingMemes">Memes</h1>
      <p class="div-text" id="memesText">This is where I'll put the dankest memes!</p>
    </div>
    <div class="main-div" id="Games">
      <h1 class="heading" id="headingGames">Games</h1>
      <p class="div-text" id="gamesText">This is where I'll put the best games!</p>
    </div>
    <div class="main-div" id="Poll">
      <h1 class="heading" id="headingPoll">Poll</h1>
      <p>Which of these games was your favorite to play this year?</p>
      <form class="poll" id="pollForm" method="post">
        <input type="checkbox" name="game[]" value="Overwatch">Overwatch<br>
        <input type="checkbox" name="game[]" value="Call of Duty">Call of Duty<br>
        <input type="checkbox" name="game[]" value="The Witcher 3">The Witcher 3<br>
        <input type="checkbox" name="game[]" value="Rocket League">Rocket League<br>
        <input type="checkbox" name="game[]" value="Smite">Smite<br>
        <input type="checkbox" name="game[]" value="League of Legends">League of Legends<br>
        <input type="checkbox" name="game[]" value="Fallout 4">Fallout 4<br>
        <input type="checkbox" name="game[]" value="Civilization 6">Civilization 6<br>
        <input type="checkbox" name="game[]" value="Battlefield 1">Battlefield 1<br>
        <input type="checkbox" name="game[]" value="Titanfall 2">Titanfall 2<br>
        <input type="checkbox" name="game[]" value="Halo 5">Halo 5<br>
        <input type="checkbox" name="game[]" value="Gears of War 4">Gears of War 4<br>
        <input type="checkbox" name="game[]" value="Skyrim">Skyrim<br>
        <input type="checkbox" name="game[]" value="Destiny">Destiny<br>
        <input type="checkbox" name="game[]" value="Dishonored 2">Dishonored 2<br>
        <input type="checkbox" name="game[]" value="Dark Souls 3">Dark Souls 3<br>
        <input type="checkbox" name="game[]" value="Pokemon">Pokémon<br>
        <input type="checkbox" name="game[]" value="Super Smash Bros">Super Smash Bros<br>
        <input type="checkbox" name="game[]" value="The Division">The Division<br>
        <input type="checkbox" name="game[]" value="Other">Other<br>
        <input type="button" name="submit" value="Submit" onclick="useAjax()">
      </form>
    </div>
    <div class="right-index" id="rightIndex">
      <image class="cathy" id="cathy" src="images/cathy.png"></image>
    </div>
    <footer id="footer">
      <p class="text" id="footerText"><a href="https://www.facebook.com"><image class="image" id="facebook" src="images/facebook.png"></image></a> <a href="https://twitter.com"><image class="image" id="twitter" src="images/twitter.png"></image></a> <a href="https://github.com"><image class="image" id="github" src="images/github.png"></image></a>
       <a href="https://www.youtube.com"><image class="image" id="youtube" src="images/youtube.png"></image></a> <a href="https://www.reddit.com/"><image class="image" id="reddit" src="images/reddit.png"></a></p>
    </footer>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.js"></script>
    <script src="js/Sitejs.js"></script>
  </body>
</html>