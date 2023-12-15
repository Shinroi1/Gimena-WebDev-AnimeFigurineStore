<!DOCTYPE html>
<html>
    <head>
        <title>ANIME!</title>
            <link rel="stylesheet" type="text/css" href="style.css">
            <meta name = "viewport" content="width=device=width, initital-scales =1.0">
        <!--<meta http-equiv="refresh" content="10">-->
    </head>
<body>

    <header>
        <h1>BRIEF HISTORY ABOUT ANIME</h1>
    </header>

    <section>
        <h2 class="cen">HEY THERE!!</h2>
            <p class="cen">Are you an <a href="https://en.wikipedia.org/wiki/Otaku">otaku</a>?</p>
            <p class="cen">Interested knowing about <a href="https://en.wikipedia.org/wiki/Anime">anime</a>?</p>
            <p class="cen">YOUR IN THE RIGHT SITE THEN!</p>
            
            <p class="cen">Let's talk about anime then.</p>
            <p class="cen">Anime is a style of animation that originated in Japan and has a rich and diverse history. Here's a brief overview:</p>
    </section>

    <section>
        <h2 id="A1">HISTORY</h2>
    
        <?php
            // Strings
            $DB = "Dragon Ball";
            $N = "Naruto";
            $SM = "Sailor Moon";
            $P = "Pokemon";
            $B = "Bleach";
            $DN = "Death Note";
            $OPM = "One Punch Man";
            $MHA = "My Hero Academia";
            $MSG = "Mobile Suit Gundam";
            $NGE = "Neon Genesis Evangelion";
            $SBY = "Space Battleship Yamato";
            $SA = "Spirited Away";
            $AB = "Astro Boy";

            // Case Sensitive
            $Anime = "Anime";
            $anime = "anime";

            // Boolean
            $fact = true;

            // String concatenation
            $iconic = "This era saw the emergence of various genres and iconic series, including \"$MSG,\" \"$SBY,\" and \"$DB.\"";
            $factInfo = $fact ? "Anime continues to grow in popularity worldwide" : "Anime declines to grow in popularity worldwide"; 


            // Integer
            $two = 2;
            $Year1 = 1960;
            $Year2 = 1980;
            $Year3 = 1985;
            $Year4 = 2000;
            $Year5 = 1988;
            $Year6 = 1997;
            $Year7 = 2001;
    
            // Float
            $pop1 = 75.87; // pop = population
            $pop2 = 71.86;
            $pop3 = 70.58;
        
            // Array
            $Streaming = array("Crunchyroll", "Netlifx", "Funimation");

            

            echo "<h3>Early 20th Century</h3>";
            echo "<p>The roots of $anime can be traced back to early 20th-century Japan, influenced by Western animation and cinema. Artists like Jun'ichi Kōuchi and Seitaro Kitayama created some of the earliest examples of Japanese animation during this period.</p>";

            echo "<h3>Post-World War II</h3>";
            echo "<p>$Anime production began to grow after World War $two. Works like Osamu Tezuka's \"$AB\" (Tetsuwan Atom) in the early" .$Year1. "s are considered foundational in shaping the $anime industry.</p>";

            echo "<h3>1970s to 1988s</h3>";
            echo "<p> $iconic The popularity of $anime expanded both domestically and internationally.</p>";

            echo "<h3>Emergence of Otaku Culture</h3>";
            echo "<p>The term \"otaku\" originally referred to passionate fans of $anime and manga. In the " .$Year2. "s, the otaku subculture gained prominence. This subculture's influence extended beyond Japan, with dedicated fan communities and conventions emerging worldwide.</p>";

            echo "<h3>Studio Ghibili</h3>";
            echo "<p>Founded by Hayao Miyazaki and Isao Takahata in " .$Year3. ", Studio Ghibli produced a series of critically acclaimed and beloved animated films. Works like \"My Neighbor Totoro\" ($Year5), \"Princess Mononoke\" ($Year6), and \"Spirited Away\" ($Year7) garnered international recognition for their captivating storytelling and hand-drawn animation.</p>";

            echo "<h3>1990s</h3>";
            echo "<p>$Anime's global reach continued to grow with series like \"$NGE,\" \"$SM,\" and \"$P.\" The rise of the internet facilitated fansubbing and the exchange of $anime worldwide.</p>";

            echo "<h3>2000s</h3>";
            echo "<p>The 21st century brought an explosion of diverse genres and styles in $anime. Studio Ghibli's films like \"$SA\" gained international acclaim. The medium also became more accessible through online streaming platforms.</p>";

            echo "<h3>International Success</h3>";
            echo "<p>By the " .$Year4. "s, $anime had firmly established itself as a global phenomenon. Shows like \"$N,\" \"$B,\" and \"$DN\" became international hits, and conventions like Comic-Con began featuring $anime prominently.</p>";

            echo "<h3>Streaming Revolution</h3>";
            echo "<p>The 2010s marked a significant shift in how $anime was consumed. Streaming services like " . $Streaming[0] .", " . $Streaming[2] . ", and " . $Streaming[1]." provided easy access to a vast library of $anime titles, making it more convenient for international audiences to watch legally.</p>";

            echo "<h3>2010s and Beyond</h3>";
            echo "<p>$Anime's impact on pop culture is undeniable. It has influenced various art forms, including video games, fashion, and music. Iconic characters like Pikachu from \"$P\" and Goku from \"$DB\" have become global symbols.</p>";

            echo "<h3>Ongoing Evolution</h3>";
            echo "<p>$Anime continues to evolve, with new trends and technologies influencing animation quality and storytelling. The industry remains a significant cultural export from Japan, appealing to audiences of all ages worldwide.</p>";

            echo "<h3>Ongoing Globalization</h3>";
            echo "<p>$factInfo with international collaborations, adaptations, and a diverse range of genres. Japanese studios and creators work closely with global partners to create content that resonates with audiences worldwide.</p>";
            print "<p>Even now, $anime remains a dynamic and evolving medium, continually pushing the boundaries of storytelling and animation. It continues to captivate audiences of all ages and backgrounds, making it a significant cultural and artistic force both in Japan and around the world.</p>";

            echo "<br>";
            
            echo "<h2 id=A1>Did you know?</h2>";
            echo "<p>According to \"World Population Review\", this year, 2023, Japan has the highest percentage of its population that watches anime which is " .$pop1."% (63.2M). Second is the United States which is". $pop2. "% (167.6M) . And the third is the Philippines which is" .$pop3. "%(56.2M)</p>"; 

    ?>

    </section>
</body>
</html>
