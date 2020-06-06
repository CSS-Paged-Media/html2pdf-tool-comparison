---
layout: details
title: novel
permalink: /PDFreactor-Examples/novel/
description: 
---

## Index
<div class="boxes">
                            <a href="/compare.html2pdf.tools/PDFreactor-Examples/novel/fnt/">
                                fnt
                            </a>
</div>

## 🔬 WIZARDOFOZ

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/PDFreactor%20Examples/novel/wizardOfOz.html)

<details>
    <summary>
        View WIZARDOFOZ Code
    </summary>
    <pre>
        <code>
            &lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en-US&quot;&gt;
    &lt;head&gt;
        &lt;title&gt;Children's Novel&lt;/title&gt;
        &lt;link href=&quot;../awesomizr.css&quot; type=&quot;text/css&quot; rel=&quot;stylesheet&quot; /&gt;
        &lt;style&gt;@font-face {
            src: url(&quot;fnt/Alegreya/Alegreya.woff&quot;);
            font-family: textFont;
        }
        
        @font-face {
            src: url(&quot;fnt/Alegreya/AlegreyaBold.woff&quot;);
            font-family: textFont;
            font-weight: bold;
        }
        
        @font-face {
            src: url(&quot;fnt/ChristensenCaps.ttf&quot;);
            font-family: dropCapFont;
        }
        
        @page:first {
            counter-increment: page 0;
            @bottom-center {
                content: none;
            }
        }
        
        @page:-ro-nth(2) {
            counter-increment: page 0;
            @bottom-center {
                content: none;
            }
        }
        
        @page {
            size: letter;
            margin: 1in;
            padding: 0.25in 0;
            font-size: 22pt;
            
            @bottom-center { 
                content: counter(page); 
                text-align: center; 
            }
            
            @top-center {
                padding-top: 0.5in;
                border-bottom: 2.5pt solid black;
            }
        }
        
        @page:left { 
            margin-left: 1.5in;
            margin-right: 0.75in;
            
            @top-center { 
                content: &quot;The Wonderful Wizard of Oz&quot;;
                text-align: left;
            } 
        }
        
        @page:right { 
            margin-left: 0.75in;
            margin-right: 1.5in;
            
            @top-center { 
                content: string(chapter, last); 
                text-align: right;
            } 
        }
        
        @page:blank {
            background-image: url('Decoline01.svg');
            background-size: 50% auto;
            background-repeat: no-repeat;
            background-position: calc(50% + 0.375in) 50%;
            
            @top-center {
                content: &quot;&quot;;
                border-bottom: none;
            }
        }
        
        @page title {
            margin: 0;
            @top-center { content: none }
            @bottom-center { content: none }
        }
        
        @-ro-preferences {
            first-page-side: right;
            page-layout: 2 column;
            initial-zoom: fit-page;
        }
        
        html {
            font-family: textFont, 'times new roman', serif;
            font-size: 16pt;
            line-height: 1.25;
            -ro-line-grid: create;
        }
        
        body {
            margin-left: 6pt;
            margin-right: 6pt;
        }
        
        p {
            text-align: justify;
            margin: 0;
            -ro-line-snap: baseline;
            text-indent: 1.75em;
            orphans: 3;
            widows: 3;
            hyphens: auto;
            hyphenate-before: 3;
            hyphenate-after: 3;
        }
        
        /* first paragraph of each chapter */
        h2 + p {
            text-indent: 0;
        }
        h2 + p::first-letter {
            float: left;
            font-family: dropCapFont;
            font-size: 3.6em;
            margin-right: 0.075em;
            line-height: 0.5;
        }
        
        /* chapter headings */
        h2 {
            line-height: 110%;
            string-set: chapter self;
            break-before: left;
            break-after: page;
            margin-top: 0;
            font-size: 50pt;
            padding-top: 1.5in;
            width: 55%;
        }
        
        /* chapter headings, except the first one (&quot;Introduction&quot;) */
        body &gt; h2:nth-of-type(n+2) {
            counter-increment: chapter;
            string-set: chapter before; 
        }
        body &gt; h2:nth-of-type(n+2)::before { 
            content: &quot;Chapter &quot; counter(chapter, &quot;-ro-spelled-out-en&quot;) &quot;\A&quot;;
            white-space: pre;
            text-transform: capitalize;
            font-size: 0.25em;
            font-weight: normal;
            letter-spacing: 0.5em;
        }
        
        /* author and title */
        h1 {
            padding-top: 3in;
            font-size: 1em;
            font-weight: normal;
            counter-reset: chapter;
            text-align: center;
            margin-top: 0;
            page: title;
        }
        
        h1 + h1 {
            -ro-bookmark-level: none;
            -ro-pdf-tag-type: &quot;P&quot;
        }
        
        /* title */
        h1:first-child {
            font-size: 65pt;
            font-weight: bold;
            line-height: 1.5;
            padding-top: 2in;
            padding-bottom: 1.2in;
        }
        
        div.ro-toc a::before {
            content: target-counter(-ro-attr(href url), chapter ) &quot;. &quot;;
            width: 1.5em;
            float: left;
            text-align: right;
            padding-right: 0.3em;
        }
        
        .acknowledgements {
            page: acknowledgements;
            text-indent: 0;
            text-align: left;
            margin: 1.5em 0;
        }
        
        .acknowledgements.title {
            font-weight: bold;
            letter-spacing: 0.1em;
        }
        
        @page acknowledgements {
            @top-center { content: none }
            @bottom-center { content: none }
            margin-left: 0.75in;
            margin-right: 0.75in;
        }
        
        a {
            color: inherit;
            text-decoration: inherit;
        }
        &lt;/style&gt;
        &lt;script src=&quot;../awesomizr.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
        &lt;script type=&quot;text/javascript&quot;&gt;
            Awesomizr.createTableOfContents({
                            elements : 'h2:nth-of-type(n+2)', // chapter headings, except the first one (&quot;Introduction&quot;)
                     insertiontarget : 'h2',
                       insertiontype : 'beforebegin',
                disabledocumenttitle : true,
                            toctitle : 'Contents',
                           accessible: true
            });
        &lt;/script&gt;
    &lt;/head&gt;
    &lt;body&gt;
        
        &lt;h1&gt;The Wonderful Wizard of Oz&lt;/h1&gt;
        &lt;h1&gt;by L. Frank Baum&lt;/h1&gt;
        
        
        &lt;h2&gt;Introduction&lt;/h2&gt;
        
        &lt;p&gt;Folklore, legends, myths and fairy tales have followed childhood
            through the ages, for every healthy youngster has a wholesome and
            instinctive love for stories fantastic, marvelous and manifestly unreal.
            The winged fairies of Grimm and Andersen have brought more happiness to
            childish hearts than all other human creations.&lt;/p&gt;
        &lt;p&gt;Yet the old time fairy tale, having served for generations,
            may now be classed as &amp;ldquo;historical&amp;rdquo; in the children&amp;rsquo;s library; for
            the time has come for a series of newer &amp;ldquo;wonder tales&amp;rdquo; in which
            the stereotyped genie, dwarf and fairy are eliminated, together
            with all the horrible and blood&amp;#8208;curdling incidents devised by
            their authors to point a fearsome moral to each tale. Modern
            education includes morality; therefore the modern child seeks only
            entertainment in its wonder tales and gladly dispenses with all
            disagreeable incident.&lt;/p&gt;
        &lt;p&gt;Having this thought in mind, the story of &amp;ldquo;The Wonderful
            Wizard of Oz&amp;rdquo; was written solely to please children of today. It
            aspires to being a modernized fairy tale, in which the wonderment
            and joy are retained and the heartaches and nightmares are left out.&lt;/p&gt;
        &lt;p&gt;L. Frank Baum&lt;/p&gt;
        &lt;p&gt;Chicago, April, 1900.&lt;/p&gt;
        
        
        &lt;h2&gt;The Cyclone&lt;/h2&gt;
        
        &lt;p&gt;Dorothy lived in the midst of the great Kansas prairies, with
            Uncle Henry, who was a farmer, and Aunt Em, who was the farmer&amp;rsquo;s
            wife. Their house was small, for the lumber to build it had to be
            carried by wagon many miles. There were four walls, a floor and a
            roof, which made one room; and this room contained a rusty looking
            cookstove, a cupboard for the dishes, a table, three or four
            chairs, and the beds. Uncle Henry and Aunt Em had a big bed in
            one corner, and Dorothy a little bed in another corner. There was
            no garret at all, and no cellar&amp;mdash;except a small hole dug in the
            ground, called a cyclone cellar, where the family could go in case
            one of those great whirlwinds arose, mighty enough to crush any
            building in its path. It was reached by a trap door in the middle
            of the floor, from which a ladder led down into the small, dark hole.&lt;/p&gt;
        &lt;p&gt;When Dorothy stood in the doorway and looked around, she could
            see nothing but the great gray prairie on every side. Not a tree
            nor a house broke the broad sweep of flat country that reached to
            the edge of the sky in all directions. The sun had baked the
            plowed land into a gray mass, with little cracks running through it.
            Even the grass was not green, for the sun had burned the tops of
            the long blades until they were the same gray color to be seen
            everywhere. Once the house had been painted, but the sun
            blistered the paint and the rains washed it away, and now the
            house was as dull and gray as everything else.&lt;/p&gt;
        &lt;p&gt;When Aunt Em came there to live she was a young, pretty wife.
            The sun and wind had changed her, too. They had taken the sparkle
            from her eyes and left them a sober gray; they had taken the red
            from her cheeks and lips, and they were gray also. She was thin
            and gaunt, and never smiled now. When Dorothy, who was an orphan,
            first came to her, Aunt Em had been so startled by the child&amp;rsquo;s
            laughter that she would scream and press her hand upon her heart
            whenever Dorothy&amp;rsquo;s merry voice reached her ears; and she still
            looked at the little girl with wonder that she could find anything
            to laugh at.&lt;/p&gt;
        &lt;p&gt;Uncle Henry never laughed. He worked hard from morning till
            night and did not know what joy was. He was gray also, from his
            long beard to his rough boots, and he looked stern and solemn,
            and rarely spoke.&lt;/p&gt;
        &lt;p&gt;It was Toto that made Dorothy laugh, and saved her from
            growing as gray as her other surroundings. Toto was not gray; he
            was a little black dog, with long silky hair and small black eyes
            that twinkled merrily on either side of his funny, wee nose. Toto
            played all day long, and Dorothy played with him, and loved him dearly.&lt;/p&gt;
        &lt;p&gt;Today, however, they were not playing. Uncle Henry sat upon
            the doorstep and looked anxiously at the sky, which was even
            grayer than usual. Dorothy stood in the door with Toto in her
            arms, and looked at the sky too. Aunt Em was washing the dishes.&lt;/p&gt;
        &lt;p&gt;From the far north they heard a low wail of the wind, and
            Uncle Henry and Dorothy could see where the long grass bowed in
            waves before the coming storm. There now came a sharp whistling
            in the air from the south, and as they turned their eyes that way
            they saw ripples in the grass coming from that direction also.&lt;/p&gt;
        &lt;p&gt;Suddenly Uncle Henry stood up.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;There&amp;rsquo;s a cyclone coming, Em,&amp;rdquo; he called to his wife. &amp;ldquo;I&amp;rsquo;ll
            go look after the stock.&amp;rdquo; Then he ran toward the sheds where the
            cows and horses were kept.&lt;/p&gt;
        &lt;p&gt;Aunt Em dropped her work and came to the door. One glance
            told her of the danger close at hand.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Quick, Dorothy!&amp;rdquo; she screamed. &amp;ldquo;Run for the cellar!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Toto jumped out of Dorothy&amp;rsquo;s arms and hid under the bed, and
            the girl started to get him. Aunt Em, badly frightened, threw
            open the trap door in the floor and climbed down the ladder into
            the small, dark hole. Dorothy caught Toto at last and started to
            follow her aunt. When she was halfway across the room there came
            a great shriek from the wind, and the house shook so hard that she
            lost her footing and sat down suddenly upon the floor.&lt;/p&gt;
        &lt;p&gt;Then a strange thing happened.&lt;/p&gt;
        &lt;p&gt;The house whirled around two or three times and rose slowly
            through the air. Dorothy felt as if she were going up in a balloon.&lt;/p&gt;
        &lt;p&gt;The north and south winds met where the house stood, and made
            it the exact center of the cyclone. In the middle of a cyclone
            the air is generally still, but the great pressure of the wind on
            every side of the house raised it up higher and higher, until it
            was at the very top of the cyclone; and there it remained and was
            carried miles and miles away as easily as you could carry a feather.&lt;/p&gt;
        &lt;p&gt;It was very dark, and the wind howled horribly around her,
            but Dorothy found she was riding quite easily. After the first
            few whirls around, and one other time when the house tipped badly,
            she felt as if she were being rocked gently, like a baby in a cradle.&lt;/p&gt;
        &lt;p&gt;Toto did not like it. He ran about the room, now here, now
            there, barking loudly; but Dorothy sat quite still on the floor
            and waited to see what would happen.&lt;/p&gt;
        &lt;p&gt;Once Toto got too near the open trap door, and fell in; and at
            first the little girl thought she had lost him. But soon she saw
            one of his ears sticking up through the hole, for the strong
            pressure of the air was keeping him up so that he could not fall.
            She crept to the hole, caught Toto by the ear, and dragged him
            into the room again, afterward closing the trap door so that no
            more accidents could happen.&lt;/p&gt;
        &lt;p&gt;Hour after hour passed away, and slowly Dorothy got over her
            fright; but she felt quite lonely, and the wind shrieked so loudly
            all about her that she nearly became deaf. At first she had
            wondered if she would be dashed to pieces when the house fell again;
            but as the hours passed and nothing terrible happened, she stopped
            worrying and resolved to wait calmly and see what the future would bring.
            At last she crawled over the swaying floor to her bed, and lay down upon it;
            and Toto followed and lay down beside her.&lt;/p&gt;
        &lt;p&gt;In spite of the swaying of the house and the wailing of the
            wind, Dorothy soon closed her eyes and fell fast asleep.
        &lt;/p&gt;
        
        
        &lt;h2&gt;The Council with the Munchkins&lt;/h2&gt;
        
        &lt;p&gt;She was awakened by a shock, so sudden and severe that if
            Dorothy had not been lying on the soft bed she might have been hurt.
            As it was, the jar made her catch her breath and wonder what had happened;
            and Toto put his cold little nose into her face and whined dismally.
            Dorothy sat up and noticed that the house was not moving; nor was it dark,
            for the bright sunshine came in at the window, flooding the little room.
            She sprang from her bed and with Toto at her heels ran and opened the door.&lt;/p&gt;
        &lt;p&gt;The little girl gave a cry of amazement and looked about her,
            her eyes growing bigger and bigger at the wonderful sights she saw.&lt;/p&gt;
        &lt;p&gt;The cyclone had set the house down very gently&amp;mdash;for a
            cyclone&amp;mdash;in the midst of a country of marvelous beauty. There
            were lovely patches of greensward all about, with stately trees
            bearing rich and luscious fruits. Banks of gorgeous flowers were
            on every hand, and birds with rare and brilliant plumage sang and
            fluttered in the trees and bushes. A little way off was a small
            brook, rushing and sparkling along between green banks, and
            murmuring in a voice very grateful to a little girl who had lived
            so long on the dry, gray prairies.&lt;/p&gt;
        &lt;p&gt;While she stood looking eagerly at the strange and beautiful
            sights, she noticed coming toward her a group of the queerest
            people she had ever seen. They were not as big as the grown
            folk she had always been used to; but neither were they very small.
            In fact, they seemed about as tall as Dorothy, who was a well&amp;#8208;grown
            child for her age, although they were, so far as looks go, many
            years older.&lt;/p&gt;
        &lt;p&gt;Three were men and one a woman, and all were oddly dressed.
            They wore round hats that rose to a small point a foot above their
            heads, with little bells around the brims that tinkled sweetly as
            they moved. The hats of the men were blue; the little woman&amp;rsquo;s hat
            was white, and she wore a white gown that hung in pleats from her
            shoulders. Over it were sprinkled little stars that glistened in
            the sun like diamonds. The men were dressed in blue, of the same
            shade as their hats, and wore well&amp;#8208;polished boots with a deep roll
            of blue at the tops. The men, Dorothy thought, were about as old
            as Uncle Henry, for two of them had beards. But the little woman
            was doubtless much older. Her face was covered with wrinkles, her
            hair was nearly white, and she walked rather stiffly.&lt;/p&gt;
        &lt;p&gt;When these people drew near the house where Dorothy was
            standing in the doorway, they paused and whispered among themselves,
            as if afraid to come farther. But the little old woman walked up
            to Dorothy, made a low bow and said, in a sweet voice:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;You are welcome, most noble Sorceress, to the land of the Munchkins.
            We are so grateful to you for having killed the Wicked Witch of the East,
            and for setting our people free from bondage.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Dorothy listened to this speech with wonder. What could the
            little woman possibly mean by calling her a sorceress, and saying
            she had killed the Wicked Witch of the East? Dorothy was an innocent,
            harmless little girl, who had been carried by a cyclone many miles from home;
            and she had never killed anything in all her life.&lt;/p&gt;
        &lt;p&gt;But the little woman evidently expected her to answer; so Dorothy said,
            with hesitation, &amp;ldquo;You are very kind, but there must be some mistake.
            I have not killed anything.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Your house did, anyway,&amp;rdquo; replied the little old woman, with a
            laugh, &amp;ldquo;and that is the same thing. See!&amp;rdquo; she continued, pointing
            to the corner of the house. &amp;ldquo;There are her two feet, still sticking
            out from under a block of wood.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Dorothy looked, and gave a little cry of fright. There, indeed,
            just under the corner of the great beam the house rested on, two feet
            were sticking out, shod in silver shoes with pointed toes.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, dear! Oh, dear!&amp;rdquo; cried Dorothy, clasping her hands together
            in dismay. &amp;ldquo;The house must have fallen on her. Whatever shall we do?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;rdquo;There is nothing to be done,&amp;rdquo; said the little woman calmly.&lt;/p&gt;
        &lt;p&gt;&amp;rdquo;But who was she?&amp;rdquo; asked Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;She was the Wicked Witch of the East, as I said,&amp;rdquo; answered
            the little woman. &amp;ldquo;She has held all the Munchkins in bondage for
            many years, making them slave for her night and day. Now they are
            all set free, and are grateful to you for the favor.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Who are the Munchkins?&amp;rdquo; inquired Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;They are the people who live in this land of the East
         where the Wicked Witch ruled.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Are you a Munchkin?&amp;rdquo; asked Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;No, but I am their friend, although I live in the land of the
            North. When they saw the Witch of the East was dead the Munchkins
            sent a swift messenger to me, and I came at once. I am the Witch
            of the North.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, gracious!&amp;rdquo; cried Dorothy. &amp;ldquo;Are you a real witch?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Yes, indeed,&amp;rdquo; answered the little woman. &amp;ldquo;But I am a good witch,
            and the people love me. I am not as powerful as the Wicked Witch was
            who ruled here, or I should have set the people free myself.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;But I thought all witches were wicked,&amp;rdquo; said the girl, who
            was half frightened at facing a real witch. &amp;ldquo;Oh, no, that is a
            great mistake. There were only four witches in all the Land of
            Oz, and two of them, those who live in the North and the South,
            are good witches. I know this is true, for I am one of them
            myself, and cannot be mistaken. Those who dwelt in the East and
            the West were, indeed, wicked witches; but now that you have
            killed one of them, there is but one Wicked Witch in all the Land
            of Oz&amp;mdash;the one who lives in the West.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;But,&amp;rdquo; said Dorothy, after a moment&amp;rsquo;s thought, &amp;ldquo;Aunt Em has
            told me that the witches were all dead&amp;mdash;years and years ago.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Who is Aunt Em?&amp;rdquo; inquired the little old woman.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;She is my aunt who lives in Kansas, where I came from.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The Witch of the North seemed to think for a time, with her
            head bowed and her eyes upon the ground. Then she looked up and
            said, &amp;ldquo;I do not know where Kansas is, for I have never heard that
            country mentioned before. But tell me, is it a civilized country?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, yes,&amp;rdquo; replied Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Then that accounts for it. In the civilized countries I
            believe there are no witches left, nor wizards, nor sorceresses,
            nor magicians. But, you see, the Land of Oz has never been
            civilized, for we are cut off from all the rest of the world.
            Therefore we still have witches and wizards amongst us.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Who are the wizards?&amp;rdquo; asked Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oz himself is the Great Wizard,&amp;rdquo; answered the Witch, sinking
            her voice to a whisper. &amp;ldquo;He is more powerful than all the rest of
            us together. He lives in the City of Emeralds.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Dorothy was going to ask another question, but just then the
            Munchkins, who had been standing silently by, gave a loud shout and
            pointed to the corner of the house where the Wicked Witch had been lying.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What is it?&amp;rdquo; asked the little old woman, and looked, and
            began to laugh. The feet of the dead Witch had disappeared
            entirely, and nothing was left but the silver shoes.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;She was so old,&amp;rdquo; explained the Witch of the North, &amp;ldquo;that she
            dried up quickly in the sun. That is the end of her. But the
            silver shoes are yours, and you shall have them to wear.&amp;rdquo;
            She reached down and picked up the shoes, and after shaking
            the dust out of them handed them to Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;The Witch of the East was proud of those silver shoes,&amp;rdquo; said
            one of the Munchkins, &amp;ldquo;and there is some charm connected with them;
            but what it is we never knew.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Dorothy carried the shoes into the house and placed them on
            the table. Then she came out again to the Munchkins and said:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I am anxious to get back to my aunt and uncle, for I am sure
            they will worry about me. Can you help me find my way?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The Munchkins and the Witch first looked at one another, and
            then at Dorothy, and then shook their heads.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;At the East, not far from here,&amp;rdquo; said one, &amp;ldquo;there is a great
            desert, and none could live to cross it.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;It is the same at the South,&amp;rdquo; said another, &amp;ldquo;for I have been
            there and seen it. The South is the country of the Quadlings.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I am told,&amp;rdquo; said the third man, &amp;ldquo;that it is the same at the West.
            And that country, where the Winkies live, is ruled by the Wicked Witch
            of the West, who would make you her slave if you passed her way.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;The North is my home,&amp;rdquo; said the old lady, &amp;ldquo;and at its edge is
            the same great desert that surrounds this Land of Oz. I&amp;rsquo;m afraid,
            my dear, you will have to live with us.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Dorothy began to sob at this, for she felt lonely among all
            these strange people. Her tears seemed to grieve the kind&amp;#8208;hearted
            Munchkins, for they immediately took out their handkerchiefs and
            began to weep also. As for the little old woman, she took off her
            cap and balanced the point on the end of her nose, while she
            counted &amp;ldquo;One, two, three&amp;rdquo; in a solemn voice. At once the cap
            changed to a slate, on which was written in big, white chalk marks:
        
        &lt;/p&gt;&lt;p&gt;&amp;ldquo;LET DOROTHY GO TO THE CITY OF EMERALDS&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The little old woman took the slate from her nose, and having
            read the words on it, asked, &amp;ldquo;Is your name Dorothy, my dear?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Yes,&amp;rdquo; answered the child, looking up and drying her tears.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Then you must go to the City of Emeralds. Perhaps Oz will help you.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Where is this city?&amp;rdquo; asked Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;It is exactly in the center of the country, and is ruled by Oz,
            the Great Wizard I told you of.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Is he a good man?&amp;rdquo; inquired the girl anxiously.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;He is a good Wizard. Whether he is a man or not I cannot tell,
            for I have never seen him.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;How can I get there?&amp;rdquo; asked Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;You must walk. It is a long journey, through a country that
            is sometimes pleasant and sometimes dark and terrible. However,
            I will use all the magic arts I know of to keep you from harm.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Won&amp;rsquo;t you go with me?&amp;rdquo; pleaded the girl, who had begun to
            look upon the little old woman as her only friend.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;No, I cannot do that,&amp;rdquo; she replied, &amp;ldquo;but I will give you my
            kiss, and no one will dare injure a person who has been kissed by
            the Witch of the North.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;She came close to Dorothy and kissed her gently on the
            forehead. Where her lips touched the girl they left a round,
            shining mark, as Dorothy found out soon after.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;The road to the City of Emeralds is paved with yellow brick,&amp;rdquo;
            said the Witch, &amp;ldquo;so you cannot miss it. When you get to Oz do not
            be afraid of him, but tell your story and ask him to help you.
            Good&amp;#8208;bye, my dear.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The three Munchkins bowed low to her and wished her a pleasant
            journey, after which they walked away through the trees. The Witch
            gave Dorothy a friendly little nod, whirled around on her left heel
            three times, and straightway disappeared, much to the surprise of
            little Toto, who barked after her loudly enough when she had gone,
            because he had been afraid even to growl while she stood by.&lt;/p&gt;
        &lt;p&gt;But Dorothy, knowing her to be a witch, had expected her to
            disappear in just that way, and was not surprised in the least.
        &lt;/p&gt;
        
        
        &lt;h2&gt;How Dorothy Saved the Scarecrow&lt;/h2&gt;
        
        &lt;p&gt;When Dorothy was left alone she began to feel hungry. So she
            went to the cupboard and cut herself some bread, which she spread
            with butter. She gave some to Toto, and taking a pail from the
            shelf she carried it down to the little brook and filled it with
            clear, sparkling water. Toto ran over to the trees and began to
            bark at the birds sitting there. Dorothy went to get him, and saw
            such delicious fruit hanging from the branches that she gathered
            some of it, finding it just what she wanted to help out her breakfast.&lt;/p&gt;
        &lt;p&gt;Then she went back to the house, and having helped herself and
            Toto to a good drink of the cool, clear water, she set about
            making ready for the journey to the City of Emeralds.&lt;/p&gt;
        &lt;p&gt;Dorothy had only one other dress, but that happened to be
            clean and was hanging on a peg beside her bed. It was gingham,
            with checks of white and blue; and although the blue was somewhat
            faded with many washings, it was still a pretty frock. The girl
            washed herself carefully, dressed herself in the clean gingham,
            and tied her pink sunbonnet on her head. She took a little basket
            and filled it with bread from the cupboard, laying a white cloth
            over the top. Then she looked down at her feet and noticed how
            old and worn her shoes were.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;They surely will never do for a long journey, Toto,&amp;rdquo; she said.
            And Toto looked up into her face with his little black eyes and wagged
            his tail to show he knew what she meant.&lt;/p&gt;
        &lt;p&gt;At that moment Dorothy saw lying on the table the silver shoes
            that had belonged to the Witch of the East.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I wonder if they will fit me,&amp;rdquo; she said to Toto. &amp;ldquo;They would be
            just the thing to take a long walk in, for they could not wear out.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;She took off her old leather shoes and tried on the silver
            ones, which fitted her as well as if they had been made for her.&lt;/p&gt;
        &lt;p&gt;Finally she picked up her basket.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Come along, Toto,&amp;rdquo; she said. &amp;ldquo;We will go to the Emerald City
            and ask the Great Oz how to get back to Kansas again.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;She closed the door, locked it, and put the key carefully in
            the pocket of her dress. And so, with Toto trotting along soberly
            behind her, she started on her journey.&lt;/p&gt;
        &lt;p&gt;There were several roads near by, but it did not take her long
            to find the one paved with yellow bricks. Within a short time she
            was walking briskly toward the Emerald City, her silver shoes
            tinkling merrily on the hard, yellow road&amp;#8208;bed. The sun shone
            bright and the birds sang sweetly, and Dorothy did not feel
            nearly so bad as you might think a little girl would who had
            been suddenly whisked away from her own country and set down
            in the midst of a strange land.&lt;/p&gt;
        &lt;p&gt;She was surprised, as she walked along, to see how pretty the
            country was about her. There were neat fences at the sides of the
            road, painted a dainty blue color, and beyond them were fields of
            grain and vegetables in abundance. Evidently the Munchkins were
            good farmers and able to raise large crops. Once in a while she
            would pass a house, and the people came out to look at her and bow
            low as she went by; for everyone knew she had been the means of
            destroying the Wicked Witch and setting them free from bondage.
            The houses of the Munchkins were odd&amp;#8208;looking dwellings, for each
            was round, with a big dome for a roof. All were painted blue,
            for in this country of the East blue was the favorite color.&lt;/p&gt;
        &lt;p&gt;Toward evening, when Dorothy was tired with her long walk and
            began to wonder where she should pass the night, she came to a
            house rather larger than the rest. On the green lawn before it
            many men and women were dancing. Five little fiddlers played as
            loudly as possible, and the people were laughing and singing,
            while a big table near by was loaded with delicious fruits and
            nuts, pies and cakes, and many other good things to eat.&lt;/p&gt;
        &lt;p&gt;The people greeted Dorothy kindly, and invited her to supper and
            to pass the night with them; for this was the home of one of the
            richest Munchkins in the land, and his friends were gathered with
            him to celebrate their freedom from the bondage of the Wicked Witch.&lt;/p&gt;
        &lt;p&gt;Dorothy ate a hearty supper and was waited upon by the rich
            Munchkin himself, whose name was Boq. Then she sat upon a settee
            and watched the people dance.&lt;/p&gt;
        &lt;p&gt;When Boq saw her silver shoes he said, &amp;ldquo;You must be a great sorceress.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Why?&amp;rdquo; asked the girl.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Because you wear silver shoes and have killed the Wicked Witch.
            Besides, you have white in your frock, and only witches and sorceresses
            wear white.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;My dress is blue and white checked,&amp;rdquo; said Dorothy, smoothing
            out the wrinkles in it.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;It is kind of you to wear that,&amp;rdquo; said Boq. &amp;ldquo;Blue is the
            color of the Munchkins, and white is the witch color. So we know
            you are a friendly witch.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Dorothy did not know what to say to this, for all the people
            seemed to think her a witch, and she knew very well she was only
            an ordinary little girl who had come by the chance of a cyclone
            into a strange land.&lt;/p&gt;
        &lt;p&gt;When she had tired watching the dancing, Boq led her into
            the house, where he gave her a room with a pretty bed in it.
            The sheets were made of blue cloth, and Dorothy slept soundly in
            them till morning, with Toto curled up on the blue rug beside her.&lt;/p&gt;
        &lt;p&gt;She ate a hearty breakfast, and watched a wee Munchkin baby,
            who played with Toto and pulled his tail and crowed and laughed in
            a way that greatly amused Dorothy. Toto was a fine curiosity to
            all the people, for they had never seen a dog before.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;How far is it to the Emerald City?&amp;rdquo; the girl asked.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I do not know,&amp;rdquo; answered Boq gravely, &amp;ldquo;for I have never been
            there. It is better for people to keep away from Oz, unless they
            have business with him. But it is a long way to the Emerald City,
            and it will take you many days. The country here is rich and
            pleasant, but you must pass through rough and dangerous places
            before you reach the end of your journey.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;This worried Dorothy a little, but she knew that only the
            Great Oz could help her get to Kansas again, so she bravely
            resolved not to turn back.&lt;/p&gt;
        &lt;p&gt;She bade her friends good&amp;#8208;bye, and again started along the road
            of yellow brick. When she had gone several miles she thought she
            would stop to rest, and so climbed to the top of the fence beside
            the road and sat down. There was a great cornfield beyond the fence,
            and not far away she saw a Scarecrow, placed high on a pole to keep
            the birds from the ripe corn.&lt;/p&gt;
        &lt;p&gt;Dorothy leaned her chin upon her hand and gazed thoughtfully
            at the Scarecrow. Its head was a small sack stuffed with straw,
            with eyes, nose, and mouth painted on it to represent a face.
            An old, pointed blue hat, that had belonged to some Munchkin,
            was perched on his head, and the rest of the figure was a blue suit
            of clothes, worn and faded, which had also been stuffed with straw.
            On the feet were some old boots with blue tops, such as every man
            wore in this country, and the figure was raised above the stalks
            of corn by means of the pole stuck up its back.&lt;/p&gt;
        &lt;p&gt;While Dorothy was looking earnestly into the queer, painted
            face of the Scarecrow, she was surprised to see one of the eyes
            slowly wink at her. She thought she must have been mistaken at first,
            for none of the scarecrows in Kansas ever wink; but presently the
            figure nodded its head to her in a friendly way. Then she climbed
            down from the fence and walked up to it, while Toto ran around the
            pole and barked.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Good day,&amp;rdquo; said the Scarecrow, in a rather husky voice.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Did you speak?&amp;rdquo; asked the girl, in wonder.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Certainly,&amp;rdquo; answered the Scarecrow. &amp;ldquo;How do you do?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I&amp;rsquo;m pretty well, thank you,&amp;rdquo; replied Dorothy politely.
        &amp;ldquo;How do you do?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I&amp;rsquo;m not feeling well,&amp;rdquo; said the Scarecrow, with a smile,
        &amp;ldquo;for it is very tedious being perched up here night and day to
            scare away crows.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Can&amp;rsquo;t you get down?&amp;rdquo; asked Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;No, for this pole is stuck up my back. If you will please
            take away the pole I shall be greatly obliged to you.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Dorothy reached up both arms and lifted the figure off the pole,
            for, being stuffed with straw, it was quite light.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Thank you very much,&amp;rdquo; said the Scarecrow, when he had been
            set down on the ground. &amp;ldquo;I feel like a new man.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Dorothy was puzzled at this, for it sounded queer to hear a
            stuffed man speak, and to see him bow and walk along beside her.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Who are you?&amp;rdquo; asked the Scarecrow when he had stretched
            himself and yawned. &amp;ldquo;And where are you going?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;My name is Dorothy,&amp;rdquo; said the girl, &amp;ldquo;and I am going to the
            Emerald City, to ask the Great Oz to send me back to Kansas.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Where is the Emerald City?&amp;rdquo; he inquired. &amp;ldquo;And who is Oz?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Why, don&amp;rsquo;t you know?&amp;rdquo; she returned, in surprise.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;No, indeed. I don&amp;rsquo;t know anything. You see, I am stuffed,
            so I have no brains at all,&amp;rdquo; he answered sadly.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh,&amp;rdquo; said Dorothy, &amp;ldquo;I&amp;rsquo;m awfully sorry for you.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Do you think,&amp;rdquo; he asked, &amp;ldquo;if I go to the Emerald City with you,
            that Oz would give me some brains?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I cannot tell,&amp;rdquo; she returned, &amp;ldquo;but you may come with me,
            if you like. If Oz will not give you any brains you will be
            no worse off than you are now.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That is true,&amp;rdquo; said the Scarecrow. &amp;ldquo;You see,&amp;rdquo; he continued
            confidentially, &amp;ldquo;I don&amp;rsquo;t mind my legs and arms and body being
            stuffed, because I cannot get hurt. If anyone treads on my toes
            or sticks a pin into me, it doesn&amp;rsquo;t matter, for I can&amp;rsquo;t feel it.
            But I do not want people to call me a fool, and if my head stays
            stuffed with straw instead of with brains, as yours is, how am I
            ever to know anything?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I understand how you feel,&amp;rdquo; said the little girl, who was
            truly sorry for him. &amp;ldquo;If you will come with me I&amp;rsquo;ll ask Oz to
            do all he can for you.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Thank you,&amp;rdquo; he answered gratefully.&lt;/p&gt;
        &lt;p&gt;They walked back to the road. Dorothy helped him over the
            fence, and they started along the path of yellow brick for the
            Emerald City.&lt;/p&gt;
        &lt;p&gt;Toto did not like this addition to the party at first.
            He smelled around the stuffed man as if he suspected there
            might be a nest of rats in the straw, and he often growled
            in an unfriendly way at the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Don&amp;rsquo;t mind Toto,&amp;rdquo; said Dorothy to her new friend.
        &amp;ldquo;He never bites.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, I&amp;rsquo;m not afraid,&amp;rdquo; replied the Scarecrow. &amp;ldquo;He can&amp;rsquo;t hurt
            the straw. Do let me carry that basket for you. I shall not mind
            it, for I can&amp;rsquo;t get tired. I&amp;rsquo;ll tell you a secret,&amp;rdquo; he continued,
            as he walked along. &amp;ldquo;There is only one thing in the world I am
            afraid of.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What is that?&amp;rdquo; asked Dorothy; &amp;ldquo;the Munchkin farmer who made you?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;No,&amp;rdquo; answered the Scarecrow; &amp;ldquo;it&amp;rsquo;s a lighted match.&amp;rdquo;
        &lt;/p&gt;
        
        
        &lt;h2&gt;The Road Through the Forest&lt;/h2&gt;
        
        &lt;p&gt;After a few hours the road began to be rough, and the walking
            grew so difficult that the Scarecrow often stumbled over the
            yellow bricks, which were here very uneven. Sometimes, indeed,
            they were broken or missing altogether, leaving holes that Toto
            jumped across and Dorothy walked around. As for the Scarecrow,
            having no brains, he walked straight ahead, and so stepped into
            the holes and fell at full length on the hard bricks. It never hurt
            him, however, and Dorothy would pick him up and set him upon his
            feet again, while he joined her in laughing merrily at his own mishap.&lt;/p&gt;
        &lt;p&gt;The farms were not nearly so well cared for here as they were
            farther back. There were fewer houses and fewer fruit trees, and
            the farther they went the more dismal and lonesome the country became.&lt;/p&gt;
        &lt;p&gt;At noon they sat down by the roadside, near a little brook,
            and Dorothy opened her basket and got out some bread. She offered
            a piece to the Scarecrow, but he refused.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I am never hungry,&amp;rdquo; he said, &amp;ldquo;and it is a lucky thing I am not,
            for my mouth is only painted, and if I should cut a hole in it so
            I could eat, the straw I am stuffed with would come out, and that
            would spoil the shape of my head.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Dorothy saw at once that this was true, so she only nodded and
            went on eating her bread.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Tell me something about yourself and the country you came from,&amp;rdquo;
            said the Scarecrow, when she had finished her dinner. So she told him
            all about Kansas, and how gray everything was there, and how the cyclone
            had carried her to this queer Land of Oz.&lt;/p&gt;
        &lt;p&gt;The Scarecrow listened carefully, and said, &amp;ldquo;I cannot
            understand why you should wish to leave this beautiful country and
            go back to the dry, gray place you call Kansas.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That is because you have no brains&amp;rdquo; answered the girl.
        &amp;ldquo;No matter how dreary and gray our homes are, we people of
            flesh and blood would rather live there than in any other country,
            be it ever so beautiful. There is no place like home.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The Scarecrow sighed.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Of course I cannot understand it,&amp;rdquo; he said. &amp;ldquo;If your heads
            were stuffed with straw, like mine, you would probably all live in
            the beautiful places, and then Kansas would have no people at all.
            It is fortunate for Kansas that you have brains.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Won&amp;rsquo;t you tell me a story, while we are resting?&amp;rdquo; asked the child.&lt;/p&gt;
        &lt;p&gt;The Scarecrow looked at her reproachfully, and answered:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;My life has been so short that I really know nothing whatever.
            I was only made day before yesterday. What happened in the world
            before that time is all unknown to me. Luckily, when the farmer
            made my head, one of the first things he did was to paint my ears,
            so that I heard what was going on. There was another Munchkin with him,
            and the first thing I heard was the farmer saying, &amp;lsquo;How do you like
            those ears?&amp;rsquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;&amp;lsquo;They aren&amp;rsquo;t straight,&amp;rsquo;&amp;rdquo; answered the other.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;&amp;lsquo;Never mind,&amp;rsquo;&amp;rdquo; said the farmer. &amp;ldquo;&amp;lsquo;They are ears just the same,&amp;rsquo;&amp;rdquo;
            which was true enough.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;&amp;lsquo;Now I&amp;rsquo;ll make the eyes,&amp;rsquo;&amp;rdquo; said the farmer. So he painted my
            right eye, and as soon as it was finished I found myself looking
            at him and at everything around me with a great deal of curiosity,
            for this was my first glimpse of the world.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;&amp;lsquo;That&amp;rsquo;s a rather pretty eye,&amp;rsquo;&amp;rdquo; remarked the Munchkin who was
            watching the farmer. &amp;ldquo;&amp;lsquo;Blue paint is just the color for eyes.&amp;rsquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;&amp;lsquo;I think I&amp;rsquo;ll make the other a little bigger,&amp;rsquo;&amp;rdquo; said the
            farmer. And when the second eye was done I could see much better
            than before. Then he made my nose and my mouth. But I did not
            speak, because at that time I didn&amp;rsquo;t know what a mouth was for.
            I had the fun of watching them make my body and my arms and legs;
            and when they fastened on my head, at last, I felt very proud,
            for I thought I was just as good a man as anyone.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;&amp;lsquo;This fellow will scare the crows fast enough,&amp;rsquo; said the
            farmer. &amp;lsquo;He looks just like a man.&amp;rsquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;&amp;lsquo;Why, he is a man,&amp;rsquo; said the other, and I quite agreed with him.
            The farmer carried me under his arm to the cornfield, and set me up
            on a tall stick, where you found me. He and his friend soon after
            walked away and left me alone.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I did not like to be deserted this way. So I tried to walk
            after them. But my feet would not touch the ground, and I was
            forced to stay on that pole. It was a lonely life to lead, for I
            had nothing to think of, having been made such a little while before.
            Many crows and other birds flew into the cornfield, but as soon as
            they saw me they flew away again, thinking I was a Munchkin; and this
            pleased me and made me feel that I was quite an important person.
            By and by an old crow flew near me, and after looking at me carefully
            he perched upon my shoulder and said:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;&amp;lsquo;I wonder if that farmer thought to fool me in this clumsy
            manner. Any crow of sense could see that you are only stuffed
            with straw.&amp;rsquo; Then he hopped down at my feet and ate all the corn
            he wanted. The other birds, seeing he was not harmed by me, came
            to eat the corn too, so in a short time there was a great flock of
            them about me.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I felt sad at this, for it showed I was not such a good
            Scarecrow after all; but the old crow comforted me, saying,
        &amp;lsquo;If you only had brains in your head you would be as good a man
            as any of them, and a better man than some of them. Brains are
            the only things worth having in this world, no matter whether one
            is a crow or a man.&amp;rsquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;After the crows had gone I thought this over, and decided I
            would try hard to get some brains. By good luck you came along
            and pulled me off the stake, and from what you say I am sure the
            Great Oz will give me brains as soon as we get to the Emerald City.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I hope so,&amp;rdquo; said Dorothy earnestly, &amp;ldquo;since you seem anxious
            to have them.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, yes; I am anxious,&amp;rdquo; returned the Scarecrow. &amp;ldquo;It is such
            an uncomfortable feeling to know one is a fool.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Well,&amp;rdquo; said the girl, &amp;ldquo;let us go.&amp;rdquo; And she handed the basket
            to the Scarecrow.&lt;/p&gt;
        &lt;p&gt;There were no fences at all by the roadside now, and the land
            was rough and untilled. Toward evening they came to a great
            forest, where the trees grew so big and close together that their
            branches met over the road of yellow brick. It was almost dark
            under the trees, for the branches shut out the daylight; but the
            travelers did not stop, and went on into the forest.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;If this road goes in, it must come out,&amp;rdquo; said the Scarecrow,
        &amp;ldquo;and as the Emerald City is at the other end of the road, we must
            go wherever it leads us.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Anyone would know that,&amp;rdquo; said Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Certainly; that is why I know it,&amp;rdquo; returned the Scarecrow.
        &amp;ldquo;If it required brains to figure it out, I never should have said it.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;After an hour or so the light faded away, and they found
            themselves stumbling along in the darkness. Dorothy could not see
            at all, but Toto could, for some dogs see very well in the dark;
            and the Scarecrow declared he could see as well as by day. So she
            took hold of his arm and managed to get along fairly well.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;If you see any house, or any place where we can pass the
            night,&amp;rdquo; she said, &amp;ldquo;you must tell me; for it is very uncomfortable
            walking in the dark.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Soon after the Scarecrow stopped.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I see a little cottage at the right of us,&amp;rdquo; he said,
        &amp;ldquo;built of logs and branches. Shall we go there?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Yes, indeed,&amp;rdquo; answered the child. &amp;ldquo;I am all tired out.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So the Scarecrow led her through the trees until they reached
            the cottage, and Dorothy entered and found a bed of dried leaves
            in one corner. She lay down at once, and with Toto beside her
            soon fell into a sound sleep. The Scarecrow, who was never tired,
            stood up in another corner and waited patiently until morning came.
        &lt;/p&gt;
        
        
        &lt;h2&gt;The Rescue of the Tin Woodman&lt;/h2&gt;
        
        &lt;p&gt;When Dorothy awoke the sun was shining through the trees and
            Toto had long been out chasing birds around him and squirrels.
            She sat up and looked around her. Scarecrow, still standing
            patiently in his corner, waiting for her.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We must go and search for water,&amp;rdquo; she said to him.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Why do you want water?&amp;rdquo; he asked.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;To wash my face clean after the dust of the road, and to
            drink, so the dry bread will not stick in my throat.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;It must be inconvenient to be made of flesh,&amp;rdquo; said the
            Scarecrow thoughtfully, &amp;ldquo;for you must sleep, and eat and drink.
            However, you have brains, and it is worth a lot of bother to be
            able to think properly.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;They left the cottage and walked through the trees until they
            found a little spring of clear water, where Dorothy drank and
            bathed and ate her breakfast. She saw there was not much bread
            left in the basket, and the girl was thankful the Scarecrow did
            not have to eat anything, for there was scarcely enough for
            herself and Toto for the day.&lt;/p&gt;
        &lt;p&gt;When she had finished her meal, and was about to go back to the
            road of yellow brick, she was startled to hear a deep groan near by.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What was that?&amp;rdquo; she asked timidly.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I cannot imagine,&amp;rdquo; replied the Scarecrow; &amp;ldquo;but we can go and see.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Just then another groan reached their ears, and the sound
            seemed to come from behind them. They turned and walked through
            the forest a few steps, when Dorothy discovered something shining
            in a ray of sunshine that fell between the trees. She ran to the
            place and then stopped short, with a little cry of surprise.&lt;/p&gt;
        &lt;p&gt;One of the big trees had been partly chopped through, and
            standing beside it, with an uplifted axe in his hands, was a man
            made entirely of tin. His head and arms and legs were jointed
            upon his body, but he stood perfectly motionless, as if he could
            not stir at all.&lt;/p&gt;
        &lt;p&gt;Dorothy looked at him in amazement, and so did the Scarecrow,
            while Toto barked sharply and made a snap at the tin legs, which
            hurt his teeth.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Did you groan?&amp;rdquo; asked Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Yes,&amp;rdquo; answered the tin man, &amp;ldquo;I did. I&amp;rsquo;ve been groaning for more
            than a year, and no one has ever heard me before or come to help me.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What can I do for you?&amp;rdquo; she inquired softly, for she was
            moved by the sad voice in which the man spoke.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Get an oil&amp;#8208;can and oil my joints,&amp;rdquo; he answered. &amp;ldquo;They are
            rusted so badly that I cannot move them at all; if I am well oiled
            I shall soon be all right again. You will find an oil&amp;#8208;can on a
            shelf in my cottage.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Dorothy at once ran back to the cottage and found the oil&amp;#8208;can,
            and then she returned and asked anxiously, &amp;ldquo;Where are your joints?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oil my neck, first,&amp;rdquo; replied the Tin Woodman. So she oiled it,
            and as it was quite badly rusted the Scarecrow took hold of the tin
            head and moved it gently from side to side until it worked freely,
            and then the man could turn it himself.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Now oil the joints in my arms,&amp;rdquo; he said. And Dorothy oiled
            them and the Scarecrow bent them carefully until they were quite
            free from rust and as good as new.&lt;/p&gt;
        &lt;p&gt;The Tin Woodman gave a sigh of satisfaction and lowered his
            axe, which he leaned against the tree.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;This is a great comfort,&amp;rdquo; he said. &amp;ldquo;I have been holding that
            axe in the air ever since I rusted, and I&amp;rsquo;m glad to be able to put
            it down at last. Now, if you will oil the joints of my legs, I
            shall be all right once more.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So they oiled his legs until he could move them freely; and he
            thanked them again and again for his release, for he seemed a very
            polite creature, and very grateful.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I might have stood there always if you had not come along,&amp;rdquo; he said;
        &amp;ldquo;so you have certainly saved my life. How did you happen to be here?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We are on our way to the Emerald City to see the Great Oz,&amp;rdquo;
            she answered, &amp;ldquo;and we stopped at your cottage to pass the night.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Why do you wish to see Oz?&amp;rdquo; he asked.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I want him to send me back to Kansas, and the Scarecrow wants
            him to put a few brains into his head,&amp;rdquo; she replied.&lt;/p&gt;
        &lt;p&gt;The Tin Woodman appeared to think deeply for a moment. Then he said:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Do you suppose Oz could give me a heart?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Why, I guess so,&amp;rdquo; Dorothy answered. &amp;ldquo;It would be as easy as
            to give the Scarecrow brains.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;True,&amp;rdquo; the Tin Woodman returned. &amp;ldquo;So, if you will allow me
            to join your party, I will also go to the Emerald City and ask Oz
            to help me.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Come along,&amp;rdquo; said the Scarecrow heartily, and Dorothy added
            that she would be pleased to have his company. So the Tin Woodman
            shouldered his axe and they all passed through the forest until
            they came to the road that was paved with yellow brick.&lt;/p&gt;
        &lt;p&gt;The Tin Woodman had asked Dorothy to put the oil&amp;#8208;can in her basket.
        &amp;ldquo;For,&amp;rdquo; he said, &amp;ldquo;if I should get caught in the rain, and rust again,
            I would need the oil&amp;#8208;can badly.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;It was a bit of good luck to have their new comrade join the
            party, for soon after they had begun their journey again they came
            to a place where the trees and branches grew so thick over the
            road that the travelers could not pass. But the Tin Woodman set
            to work with his axe and chopped so well that soon he cleared a
            passage for the entire party.&lt;/p&gt;
        &lt;p&gt;Dorothy was thinking so earnestly as they walked along that
            she did not notice when the Scarecrow stumbled into a hole and
            rolled over to the side of the road. Indeed he was obliged to
            call to her to help him up again.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Why didn&amp;rsquo;t you walk around the hole?&amp;rdquo; asked the Tin Woodman.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I don&amp;rsquo;t know enough,&amp;rdquo; replied the Scarecrow cheerfully.
        &amp;ldquo;My head is stuffed with straw, you know, and that is why I am
            going to Oz to ask him for some brains.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, I see,&amp;rdquo; said the Tin Woodman. &amp;ldquo;But, after all, brains
            are not the best things in the world.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Have you any?&amp;rdquo; inquired the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;No, my head is quite empty,&amp;rdquo; answered the Woodman.
        &amp;ldquo;But once I had brains, and a heart also; so, having tried
            them both, I should much rather have a heart.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And why is that?&amp;rdquo; asked the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I will tell you my story, and then you will know.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So, while they were walking through the forest, the Tin Woodman
            told the following story:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I was born the son of a woodman who chopped down trees in the
            forest and sold the wood for a living. When I grew up, I too became
            a woodchopper, and after my father died I took care of my old mother
            as long as she lived. Then I made up my mind that instead of living
            alone I would marry, so that I might not become lonely.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;There was one of the Munchkin girls who was so beautiful
            that I soon grew to love her with all my heart. She, on her part,
            promised to marry me as soon as I could earn enough money to
            build a better house for her; so I set to work harder than ever.
            But the girl lived with an old woman who did not want her to marry
            anyone, for she was so lazy she wished the girl to remain with her
            and do the cooking and the housework. So the old woman went to
            the Wicked Witch of the East, and promised her two sheep and a cow
            if she would prevent the marriage. Thereupon the Wicked Witch
            enchanted my axe, and when I was chopping away at my best one day,
            for I was anxious to get the new house and my wife as soon as
            possible, the axe slipped all at once and cut off my left leg.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;This at first seemed a great misfortune, for I knew a
            one&amp;#8208;legged man could not do very well as a wood&amp;#8208;chopper. So I
            went to a tinsmith and had him make me a new leg out of tin. The
            leg worked very well, once I was used to it. But my action
            angered the Wicked Witch of the East, for she had promised the old
            woman I should not marry the pretty Munchkin girl. When I began
            chopping again, my axe slipped and cut off my right leg. Again I
            went to the tinsmith, and again he made me a leg out of tin.
            After this the enchanted axe cut off my arms, one after the
            other; but, nothing daunted, I had them replaced with tin ones.
            The Wicked Witch then made the axe slip and cut off my head, and
            at first I thought that was the end of me. But the tinsmith
            happened to come along, and he made me a new head out of tin.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I thought I had beaten the Wicked Witch then, and I worked
            harder than ever; but I little knew how cruel my enemy could be.
            She thought of a new way to kill my love for the beautiful
            Munchkin maiden, and made my axe slip again, so that it cut right
            through my body, splitting me into two halves. Once more the
            tinsmith came to my help and made me a body of tin, fastening my
            tin arms and legs and head to it, by means of joints, so that I
            could move around as well as ever. But, alas! I had now no
            heart, so that I lost all my love for the Munchkin girl, and did
            not care whether I married her or not. I suppose she is still
            living with the old woman, waiting for me to come after her.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;My body shone so brightly in the sun that I felt very proud
            of it and it did not matter now if my axe slipped, for it could
            not cut me. There was only one danger&amp;mdash;that my joints would
            rust; but I kept an oil&amp;#8208;can in my cottage and took care to oil
            myself whenever I needed it. However, there came a day when I
            forgot to do this, and, being caught in a rainstorm, before I
            thought of the danger my joints had rusted, and I was left to
            stand in the woods until you came to help me. It was a terrible
            thing to undergo, but during the year I stood there I had time to
            think that the greatest loss I had known was the loss of my heart.
            While I was in love I was the happiest man on earth; but no one
            can love who has not a heart, and so I am resolved to ask Oz to
            give me one. If he does, I will go back to the Munchkin maiden
            and marry her.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Both Dorothy and the Scarecrow had been greatly interested
            in the story of the Tin Woodman, and now they knew why he was so
            anxious to get a new heart.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;All the same,&amp;rdquo; said the Scarecrow, &amp;ldquo;I shall ask for brains
            instead of a heart; for a fool would not know what to do with a
            heart if he had one.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I shall take the heart,&amp;rdquo; returned the Tin Woodman; &amp;ldquo;for
            brains do not make one happy, and happiness is the best thing
            in the world.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Dorothy did not say anything, for she was puzzled to know
            which of her two friends was right, and she decided if she could
            only get back to Kansas and Aunt Em, it did not matter so much
            whether the Woodman had no brains and the Scarecrow no heart,
            or each got what he wanted.&lt;/p&gt;
        &lt;p&gt;What worried her most was that the bread was nearly gone, and
            another meal for herself and Toto would empty the basket. To be sure
            neither the Woodman nor the Scarecrow ever ate anything, but she was
            not made of tin nor straw, and could not live unless she was fed.
        &lt;/p&gt;
        
        
        &lt;h2&gt;The Cowardly Lion&lt;/h2&gt;
        
        &lt;p&gt;All this time Dorothy and her companions had been walking
            through the thick woods. The road was still paved with yellow
            brick, but these were much covered by dried branches and dead
            leaves from the trees, and the walking was not at all good.&lt;/p&gt;
        &lt;p&gt;There were few birds in this part of the forest, for birds
            love the open country where there is plenty of sunshine. But now
            and then there came a deep growl from some wild animal hidden
            among the trees. These sounds made the little girl&amp;rsquo;s heart beat
            fast, for she did not know what made them; but Toto knew, and he
            walked close to Dorothy&amp;rsquo;s side, and did not even bark in return.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;How long will it be,&amp;rdquo; the child asked of the Tin Woodman,
        &amp;ldquo;before we are out of the forest?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I cannot tell,&amp;rdquo; was the answer, &amp;ldquo;for I have never been to the
            Emerald City. But my father went there once, when I was a boy,
            and he said it was a long journey through a dangerous country,
            although nearer to the city where Oz dwells the country is beautiful.
            But I am not afraid so long as I have my oil&amp;#8208;can, and nothing can hurt
            the Scarecrow, while you bear upon your forehead the mark of the
            Good Witch&amp;rsquo;s kiss, and that will protect you from harm.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;But Toto!&amp;rdquo; said the girl anxiously. &amp;ldquo;What will protect him?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We must protect him ourselves if he is in danger,&amp;rdquo; replied
            the Tin Woodman.&lt;/p&gt;
        &lt;p&gt;Just as he spoke there came from the forest a terrible roar,
            and the next moment a great Lion bounded into the road. With one
            blow of his paw he sent the Scarecrow spinning over and over to
            the edge of the road, and then he struck at the Tin Woodman with
            his sharp claws. But, to the Lion&amp;rsquo;s surprise, he could make no
            impression on the tin, although the Woodman fell over in the road
            and lay still.&lt;/p&gt;
        &lt;p&gt;Little Toto, now that he had an enemy to face, ran barking
            toward the Lion, and the great beast had opened his mouth to bite
            the dog, when Dorothy, fearing Toto would be killed, and heedless
            of danger, rushed forward and slapped the Lion upon his nose as
            hard as she could, while she cried out:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Don&amp;rsquo;t you dare to bite Toto! You ought to be ashamed of
            yourself, a big beast like you, to bite a poor little dog!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I didn&amp;rsquo;t bite him,&amp;rdquo; said the Lion, as he rubbed his nose with
            his paw where Dorothy had hit it.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;No, but you tried to,&amp;rdquo; she retorted. &amp;ldquo;You are nothing but a
            big coward.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I know it,&amp;rdquo; said the Lion, hanging his head in shame. &amp;ldquo;I&amp;rsquo;ve
            always known it. But how can I help it?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I don&amp;rsquo;t know, I&amp;rsquo;m sure. To think of your striking a stuffed
            man, like the poor Scarecrow!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Is he stuffed?&amp;rdquo; asked the Lion in surprise, as he watched her
            pick up the Scarecrow and set him upon his feet, while she patted
            him into shape again.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Of course he&amp;rsquo;s stuffed,&amp;rdquo; replied Dorothy, who was still angry.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That&amp;rsquo;s why he went over so easily,&amp;rdquo; remarked the Lion.
        &amp;ldquo;It astonished me to see him whirl around so. Is the other one
            stuffed also?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;No,&amp;rdquo; said Dorothy, &amp;ldquo;he&amp;rsquo;s made of tin.&amp;rdquo; And she helped the
            Woodman up again.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That&amp;rsquo;s why he nearly blunted my claws,&amp;rdquo; said the Lion.
        &amp;ldquo;When they scratched against the tin it made a cold shiver run
            down my back. What is that little animal you are so tender of?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;He is my dog, Toto,&amp;rdquo; answered Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Is he made of tin, or stuffed?&amp;rdquo; asked the Lion.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Neither. He&amp;rsquo;s a&amp;mdash;a&amp;mdash;a meat dog,&amp;rdquo; said the girl.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh! He&amp;rsquo;s a curious animal and seems remarkably small,
            now that I look at him. No one would think of biting such a
            little thing, except a coward like me,&amp;rdquo; continued the Lion sadly.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What makes you a coward?&amp;rdquo; asked Dorothy, looking at the great
            beast in wonder, for he was as big as a small horse.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;It&amp;rsquo;s a mystery,&amp;rdquo; replied the Lion. &amp;ldquo;I suppose I was born
            that way. All the other animals in the forest naturally expect me
            to be brave, for the Lion is everywhere thought to be the King of
            Beasts. I learned that if I roared very loudly every living thing
            was frightened and got out of my way. Whenever I&amp;rsquo;ve met a man
            I&amp;rsquo;ve been awfully scared; but I just roared at him, and he has
            always run away as fast as he could go. If the elephants and the
            tigers and the bears had ever tried to fight me, I should have run
            myself&amp;mdash;I&amp;rsquo;m such a coward; but just as soon as they hear me roar
            they all try to get away from me, and of course I let them go.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;But that isn&amp;rsquo;t right. The King of Beasts shouldn&amp;rsquo;t be a coward,&amp;rdquo;
            said the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I know it,&amp;rdquo; returned the Lion, wiping a tear from his eye
            with the tip of his tail. &amp;ldquo;It is my great sorrow, and makes my
            life very unhappy. But whenever there is danger, my heart begins
            to beat fast.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Perhaps you have heart disease,&amp;rdquo; said the Tin Woodman.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;It may be,&amp;rdquo; said the Lion.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;If you have,&amp;rdquo; continued the Tin Woodman, &amp;ldquo;you ought to be glad,
            for it proves you have a heart. For my part, I have no heart; so I
            cannot have heart disease.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Perhaps,&amp;rdquo; said the Lion thoughtfully, &amp;ldquo;if I had no heart I should
            not be a coward.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Have you brains?&amp;rdquo; asked the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I suppose so. I&amp;rsquo;ve never looked to see,&amp;rdquo; replied the Lion.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I am going to the Great Oz to ask him to give me some,&amp;rdquo;
            remarked the Scarecrow, &amp;ldquo;for my head is stuffed with straw.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And I am going to ask him to give me a heart,&amp;rdquo; said the Woodman.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And I am going to ask him to send Toto and me back to Kansas,&amp;rdquo;
            added Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Do you think Oz could give me courage?&amp;rdquo; asked the Cowardly Lion.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Just as easily as he could give me brains,&amp;rdquo; said the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Or give me a heart,&amp;rdquo; said the Tin Woodman.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Or send me back to Kansas,&amp;rdquo; said Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Then, if you don&amp;rsquo;t mind, I&amp;rsquo;ll go with you,&amp;rdquo; said the Lion,
        &amp;ldquo;for my life is simply unbearable without a bit of courage.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;You will be very welcome,&amp;rdquo; answered Dorothy, &amp;ldquo;for you will help
            to keep away the other wild beasts. It seems to me they must be more
            cowardly than you are if they allow you to scare them so easily.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;They really are,&amp;rdquo; said the Lion, &amp;ldquo;but that doesn&amp;rsquo;t make me any braver,
            and as long as I know myself to be a coward I shall be unhappy.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So once more the little company set off upon the journey, the
            Lion walking with stately strides at Dorothy&amp;rsquo;s side. Toto did not
            approve this new comrade at first, for he could not forget how
            nearly he had been crushed between the Lion&amp;rsquo;s great jaws. But
            after a time he became more at ease, and presently Toto and the
            Cowardly Lion had grown to be good friends.&lt;/p&gt;
        &lt;p&gt;During the rest of that day there was no other adventure to
            mar the peace of their journey. Once, indeed, the Tin Woodman
            stepped upon a beetle that was crawling along the road, and killed
            the poor little thing. This made the Tin Woodman very unhappy,
            for he was always careful not to hurt any living creature; and as
            he walked along he wept several tears of sorrow and regret. These
            tears ran slowly down his face and over the hinges of his jaw, and
            there they rusted. When Dorothy presently asked him a question
            the Tin Woodman could not open his mouth, for his jaws were
            tightly rusted together. He became greatly frightened at this and
            made many motions to Dorothy to relieve him, but she could not
            understand. The Lion was also puzzled to know what was wrong.
            But the Scarecrow seized the oil&amp;#8208;can from Dorothy&amp;rsquo;s basket and
            oiled the Woodman&amp;rsquo;s jaws, so that after a few moments he could
            talk as well as before.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;This will serve me a lesson,&amp;rdquo; said he, &amp;ldquo;to look where I step.
            For if I should kill another bug or beetle I should surely cry again,
            and crying rusts my jaws so that I cannot speak.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Thereafter he walked very carefully, with his eyes on the road,
            and when he saw a tiny ant toiling by he would step over it, so as
            not to harm it. The Tin Woodman knew very well he had no heart, and
            therefore he took great care never to be cruel or unkind to anything.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;You people with hearts,&amp;rdquo; he said, &amp;ldquo;have something to guide you, and
            need never do wrong; but I have no heart, and so I must be very careful.
            When Oz gives me a heart of course I needn&amp;rsquo;t mind so much.&amp;rdquo;
        &lt;/p&gt;
        
        
        &lt;h2&gt;The Journey to the Great Oz&lt;/h2&gt;
        
        &lt;p&gt;They were obliged to camp out that night under a large tree in
            the forest, for there were no houses near. The tree made a good,
            thick covering to protect them from the dew, and the Tin Woodman
            chopped a great pile of wood with his axe and Dorothy built a
            splendid fire that warmed her and made her feel less lonely. She
            and Toto ate the last of their bread, and now she did not know
            what they would do for breakfast.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;If you wish,&amp;rdquo; said the Lion, &amp;ldquo;I will go into the forest and
            kill a deer for you. You can roast it by the fire, since your
            tastes are so peculiar that you prefer cooked food, and then you
            will have a very good breakfast.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Don&amp;rsquo;t! Please don&amp;rsquo;t,&amp;rdquo; begged the Tin Woodman. &amp;ldquo;I should
            certainly weep if you killed a poor deer, and then my jaws would
            rust again.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;But the Lion went away into the forest and found his own supper,
            and no one ever knew what it was, for he didn&amp;rsquo;t mention it. And the
            Scarecrow found a tree full of nuts and filled Dorothy&amp;rsquo;s basket with them,
            so that she would not be hungry for a long time. She thought this was
            very kind and thoughtful of the Scarecrow, but she laughed heartily at the
            awkward way in which the poor creature picked up the nuts. His padded
            hands were so clumsy and the nuts were so small that he dropped almost
            as many as he put in the basket. But the Scarecrow did not mind how long
            it took him to fill the basket, for it enabled him to keep away from the fire,
            as he feared a spark might get into his straw and burn him up. So he kept a
            good distance away from the flames, and only came near to cover Dorothy with
            dry leaves when she lay down to sleep. These kept her very snug and warm,
            and she slept soundly until morning.&lt;/p&gt;
        &lt;p&gt;When it was daylight, the girl bathed her face in a little rippling brook,
            and soon after they all started toward the Emerald City.&lt;/p&gt;
        &lt;p&gt;This was to be an eventful day for the travelers. They had
            hardly been walking an hour when they saw before them a great
            ditch that crossed the road and divided the forest as far as they
            could see on either side. It was a very wide ditch, and when they
            crept up to the edge and looked into it they could see it was also
            very deep, and there were many big, jagged rocks at the bottom.
            The sides were so steep that none of them could climb down, and
            for a moment it seemed that their journey must end.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What shall we do?&amp;rdquo; asked Dorothy despairingly.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I haven&amp;rsquo;t the faintest idea,&amp;rdquo; said the Tin Woodman, and the
            Lion shook his shaggy mane and looked thoughtful.&lt;/p&gt;
        &lt;p&gt;But the Scarecrow said, &amp;ldquo;We cannot fly, that is certain.
            Neither can we climb down into this great ditch. Therefore,
            if we cannot jump over it, we must stop where we are.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I think I could jump over it,&amp;rdquo; said the Cowardly Lion, after
            measuring the distance carefully in his mind.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Then we are all right,&amp;rdquo; answered the Scarecrow, &amp;ldquo;for you can
            carry us all over on your back, one at a time.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Well, I&amp;rsquo;ll try it,&amp;rdquo; said the Lion. &amp;ldquo;Who will go first?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I will,&amp;rdquo; declared the Scarecrow, &amp;ldquo;for, if you found that you
            could not jump over the gulf, Dorothy would be killed, or the Tin
            Woodman badly dented on the rocks below. But if I am on your back
            it will not matter so much, for the fall would not hurt me at all.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I am terribly afraid of falling, myself,&amp;rdquo; said the Cowardly
            Lion, &amp;ldquo;but I suppose there is nothing to do but try it. So get on
            my back and we will make the attempt.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The Scarecrow sat upon the Lion&amp;rsquo;s back, and the big beast
            walked to the edge of the gulf and crouched down.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Why don&amp;rsquo;t you run and jump?&amp;rdquo; asked the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Because that isn&amp;rsquo;t the way we Lions do these things,&amp;rdquo; he replied.
            Then giving a great spring, he shot through the air and landed safely
            on the other side. They were all greatly pleased to see how easily
            he did it, and after the Scarecrow had got down from his back the Lion
            sprang across the ditch again.&lt;/p&gt;
        &lt;p&gt;Dorothy thought she would go next; so she took Toto in her
            arms and climbed on the Lion&amp;rsquo;s back, holding tightly to his mane
            with one hand. The next moment it seemed as if she were flying
            through the air; and then, before she had time to think about it,
            she was safe on the other side. The Lion went back a third time
            and got the Tin Woodman, and then they all sat down for a few
            moments to give the beast a chance to rest, for his great leaps
            had made his breath short, and he panted like a big dog that has
            been running too long.&lt;/p&gt;
        &lt;p&gt;They found the forest very thick on this side, and it looked
            dark and gloomy. After the Lion had rested they started along the
            road of yellow brick, silently wondering, each in his own mind, if
            ever they would come to the end of the woods and reach the bright
            sunshine again. To add to their discomfort, they soon heard strange
            noises in the depths of the forest, and the Lion whispered to them
            that it was in this part of the country that the Kalidahs lived.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What are the Kalidahs?&amp;rdquo; asked the girl.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;They are monstrous beasts with bodies like bears and heads
            like tigers,&amp;rdquo; replied the Lion, &amp;ldquo;and with claws so long and sharp
            that they could tear me in two as easily as I could kill Toto.
            I&amp;rsquo;m terribly afraid of the Kalidahs.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I&amp;rsquo;m not surprised that you are,&amp;rdquo; returned Dorothy.
        &amp;ldquo;They must be dreadful beasts.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The Lion was about to reply when suddenly they came to another
            gulf across the road. But this one was so broad and deep that the
            Lion knew at once he could not leap across it.&lt;/p&gt;
        &lt;p&gt;So they sat down to consider what they should do, and after
            serious thought the Scarecrow said:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Here is a great tree, standing close to the ditch. If the
            Tin Woodman can chop it down, so that it will fall to the other
            side, we can walk across it easily.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That is a first&amp;#8208;rate idea,&amp;rdquo; said the Lion. &amp;ldquo;One would almost
            suspect you had brains in your head, instead of straw.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The Woodman set to work at once, and so sharp was his axe that
            the tree was soon chopped nearly through. Then the Lion put his
            strong front legs against the tree and pushed with all his might,
            and slowly the big tree tipped and fell with a crash across the
            ditch, with its top branches on the other side.&lt;/p&gt;
        &lt;p&gt;They had just started to cross this queer bridge when a sharp growl
            made them all look up, and to their horror they saw running toward them
            two great beasts with bodies like bears and heads like tigers.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;They are the Kalidahs!&amp;rdquo; said the Cowardly Lion, beginning to tremble.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Quick!&amp;rdquo; cried the Scarecrow. &amp;ldquo;Let us cross over.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So Dorothy went first, holding Toto in her arms, the Tin
            Woodman followed, and the Scarecrow came next. The Lion, although
            he was certainly afraid, turned to face the Kalidahs, and then he
            gave so loud and terrible a roar that Dorothy screamed and the
            Scarecrow fell over backward, while even the fierce beasts stopped
            short and looked at him in surprise.&lt;/p&gt;
        &lt;p&gt;But, seeing they were bigger than the Lion, and remembering
            that there were two of them and only one of him, the Kalidahs
            again rushed forward, and the Lion crossed over the tree and
            turned to see what they would do next. Without stopping an
            instant the fierce beasts also began to cross the tree.
            And the Lion said to Dorothy:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We are lost, for they will surely tear us to pieces with
            their sharp claws. But stand close behind me, and I will fight
            them as long as I am alive.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Wait a minute!&amp;rdquo; called the Scarecrow. He had been thinking
            what was best to be done, and now he asked the Woodman to chop
            away the end of the tree that rested on their side of the ditch.
            The Tin Woodman began to use his axe at once, and, just as the two
            Kalidahs were nearly across, the tree fell with a crash into the
            gulf, carrying the ugly, snarling brutes with it, and both were
            dashed to pieces on the sharp rocks at the bottom.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Well,&amp;rdquo; said the Cowardly Lion, drawing a long breath of
            relief, &amp;ldquo;I see we are going to live a little while longer, and I
            am glad of it, for it must be a very uncomfortable thing not to be
            alive. Those creatures frightened me so badly that my heart is
            beating yet.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Ah,&amp;rdquo; said the Tin Woodman sadly, &amp;ldquo;I wish I had a heart to beat.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;This adventure made the travelers more anxious than ever to
            get out of the forest, and they walked so fast that Dorothy became
            tired, and had to ride on the Lion&amp;rsquo;s back. To their great joy the
            trees became thinner the farther they advanced, and in the
            afternoon they suddenly came upon a broad river, flowing swiftly
            just before them. On the other side of the water they could see
            the road of yellow brick running through a beautiful country, with
            green meadows dotted with bright flowers and all the road bordered
            with trees hanging full of delicious fruits. They were greatly
            pleased to see this delightful country before them.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;How shall we cross the river?&amp;rdquo; asked Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That is easily done,&amp;rdquo; replied the Scarecrow. &amp;ldquo;The Tin Woodman
            must build us a raft, so we can float to the other side.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So the Woodman took his axe and began to chop down small trees
            to make a raft, and while he was busy at this the Scarecrow found
            on the riverbank a tree full of fine fruit. This pleased Dorothy,
            who had eaten nothing but nuts all day, and she made a hearty meal
            of the ripe fruit.&lt;/p&gt;
        &lt;p&gt;But it takes time to make a raft, even when one is as industrious
            and untiring as the Tin Woodman, and when night came the work was not done.
            So they found a cozy place under the trees where they slept well until the
            morning; and Dorothy dreamed of the Emerald City, and of the good Wizard Oz,
            who would soon send her back to her own home again.
        &lt;/p&gt;
        
        
        &lt;h2&gt;The Deadly Poppy Field&lt;/h2&gt;
        
        &lt;p&gt;Our little party of travelers awakened the next morning
            refreshed and full of hope, and Dorothy breakfasted like a
            princess off peaches and plums from the trees beside the river.
            Behind them was the dark forest they had passed safely through,
            although they had suffered many discouragements; but before them
            was a lovely, sunny country that seemed to beckon them on to the
            Emerald City.&lt;/p&gt;
        &lt;p&gt;To be sure, the broad river now cut them off from this
            beautiful land. But the raft was nearly done, and after the Tin
            Woodman had cut a few more logs and fastened them together with
            wooden pins, they were ready to start. Dorothy sat down in the
            middle of the raft and held Toto in her arms. When the Cowardly
            Lion stepped upon the raft it tipped badly, for he was big and
            heavy; but the Scarecrow and the Tin Woodman stood upon the other
            end to steady it, and they had long poles in their hands to push
            the raft through the water.&lt;/p&gt;
        &lt;p&gt;They got along quite well at first, but when they reached the
            middle of the river the swift current swept the raft downstream,
            farther and farther away from the road of yellow brick. And the
            water grew so deep that the long poles would not touch the bottom.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;This is bad,&amp;rdquo; said the Tin Woodman, &amp;ldquo;for if we cannot get to
            the land we shall be carried into the country of the Wicked Witch
            of the West, and she will enchant us and make us her slaves.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And then I should get no brains,&amp;rdquo; said the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And I should get no courage,&amp;rdquo; said the Cowardly Lion.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And I should get no heart,&amp;rdquo; said the Tin Woodman.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And I should never get back to Kansas,&amp;rdquo; said Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We must certainly get to the Emerald City if we can,&amp;rdquo;
            the Scarecrow continued, and he pushed so hard on his long pole
            that it stuck fast in the mud at the bottom of the river. Then,
            before he could pull it out again&amp;mdash;or let go&amp;mdash;the raft was swept
            away, and the poor Scarecrow left clinging to the pole in the
            middle of the river.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Good&amp;#8208;bye!&amp;rdquo; he called after them, and they were very sorry to leave him.
            Indeed, the Tin Woodman began to cry, but fortunately remembered that he
            might rust, and so dried his tears on Dorothy&amp;rsquo;s apron.&lt;/p&gt;
        &lt;p&gt;Of course this was a bad thing for the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I am now worse off than when I first met Dorothy,&amp;rdquo; he
            thought. &amp;ldquo;Then, I was stuck on a pole in a cornfield, where I
            could make&amp;#8208;believe scare the crows, at any rate. But surely there
            is no use for a Scarecrow stuck on a pole in the middle of a
            river. I am afraid I shall never have any brains, after all!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Down the stream the raft floated, and the poor Scarecrow was
            left far behind. Then the Lion said:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Something must be done to save us. I think I can swim to the
            shore and pull the raft after me, if you will only hold fast to
            the tip of my tail.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So he sprang into the water, and the Tin Woodman caught fast
            hold of his tail. Then the Lion began to swim with all his might
            toward the shore. It was hard work, although he was so big; but
            by and by they were drawn out of the current, and then Dorothy took
            the Tin Woodman&amp;rsquo;s long pole and helped push the raft to the land.&lt;/p&gt;
        &lt;p&gt;They were all tired out when they reached the shore at last
            and stepped off upon the pretty green grass, and they also knew
            that the stream had carried them a long way past the road of
            yellow brick that led to the Emerald City.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What shall we do now?&amp;rdquo; asked the Tin Woodman, as the Lion lay
            down on the grass to let the sun dry him.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We must get back to the road, in some way,&amp;rdquo; said Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;The best plan will be to walk along the riverbank until we
            come to the road again,&amp;rdquo; remarked the Lion.&lt;/p&gt;
        &lt;p&gt;So, when they were rested, Dorothy picked up her basket and
            they started along the grassy bank, to the road from which the
            river had carried them. It was a lovely country, with plenty of
            flowers and fruit trees and sunshine to cheer them, and had they
            not felt so sorry for the poor Scarecrow, they could have been
            very happy.&lt;/p&gt;
        &lt;p&gt;They walked along as fast as they could, Dorothy only stopping
            once to pick a beautiful flower; and after a time the Tin Woodman
            cried out: &amp;ldquo;Look!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Then they all looked at the river and saw the Scarecrow perched
            upon his pole in the middle of the water, looking very lonely and sad.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What can we do to save him?&amp;rdquo; asked Dorothy.&lt;/p&gt;
        &lt;p&gt;The Lion and the Woodman both shook their heads, for they did
            not know. So they sat down upon the bank and gazed wistfully at
            the Scarecrow until a Stork flew by, who, upon seeing them,
            stopped to rest at the water&amp;rsquo;s edge.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Who are you and where are you going?&amp;rdquo; asked the Stork.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I am Dorothy,&amp;rdquo; answered the girl, &amp;ldquo;and these are my friends,
            the Tin Woodman and the Cowardly Lion; and we are going to the
            Emerald City.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;This isn&amp;rsquo;t the road,&amp;rdquo; said the Stork, as she twisted her long
            neck and looked sharply at the queer party.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I know it,&amp;rdquo; returned Dorothy, &amp;ldquo;but we have lost the
            Scarecrow, and are wondering how we shall get him again.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Where is he?&amp;rdquo; asked the Stork.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Over there in the river,&amp;rdquo; answered the little girl.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;If he wasn&amp;rsquo;t so big and heavy I would get him for you,&amp;rdquo;
            remarked the Stork.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;He isn&amp;rsquo;t heavy a bit,&amp;rdquo; said Dorothy eagerly, &amp;ldquo;for he is
            stuffed with straw; and if you will bring him back to us, we shall
            thank you ever and ever so much.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Well, I&amp;rsquo;ll try,&amp;rdquo; said the Stork, &amp;ldquo;but if I find he is too
            heavy to carry I shall have to drop him in the river again.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So the big bird flew into the air and over the water till she
            came to where the Scarecrow was perched upon his pole. Then the
            Stork with her great claws grabbed the Scarecrow by the arm and
            carried him up into the air and back to the bank, where Dorothy
            and the Lion and the Tin Woodman and Toto were sitting.&lt;/p&gt;
        &lt;p&gt;When the Scarecrow found himself among his friends again, he
            was so happy that he hugged them all, even the Lion and Toto; and
            as they walked along he sang &amp;ldquo;Tol&amp;#8208;de&amp;#8208;ri&amp;#8208;de&amp;#8208;oh!&amp;rdquo; at every step, he
            felt so gay.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I was afraid I should have to stay in the river forever,&amp;rdquo;
            he said, &amp;ldquo;but the kind Stork saved me, and if I ever get any brains
            I shall find the Stork again and do her some kindness in return.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That&amp;rsquo;s all right,&amp;rdquo; said the Stork, who was flying along
            beside them. &amp;ldquo;I always like to help anyone in trouble. But I
            must go now, for my babies are waiting in the nest for me. I hope
            you will find the Emerald City and that Oz will help you.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Thank you,&amp;rdquo; replied Dorothy, and then the kind Stork flew
            into the air and was soon out of sight.&lt;/p&gt;
        &lt;p&gt;They walked along listening to the singing of the brightly
            colored birds and looking at the lovely flowers which now became
            so thick that the ground was carpeted with them. There were big
            yellow and white and blue and purple blossoms, besides great
            clusters of scarlet poppies, which were so brilliant in color they
            almost dazzled Dorothy&amp;rsquo;s eyes.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Aren&amp;rsquo;t they beautiful?&amp;rdquo; the girl asked, as she breathed in
            the spicy scent of the bright flowers.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I suppose so,&amp;rdquo; answered the Scarecrow. &amp;ldquo;When I have brains,
            I shall probably like them better.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;If I only had a heart, I should love them,&amp;rdquo; added the Tin Woodman.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I always did like flowers,&amp;rdquo; said the Lion. &amp;ldquo;They of seem so
            helpless and frail. But there are none in the forest so bright as these.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;They now came upon more and more of the big scarlet poppies,
            and fewer and fewer of the other flowers; and soon they found
            themselves in the midst of a great meadow of poppies. Now it is
            well known that when there are many of these flowers together
            their odor is so powerful that anyone who breathes it falls
            asleep, and if the sleeper is not carried away from the scent of
            the flowers, he sleeps on and on forever. But Dorothy did not
            know this, nor could she get away from the bright red flowers that
            were everywhere about; so presently her eyes grew heavy and she
            felt she must sit down to rest and to sleep.&lt;/p&gt;
        &lt;p&gt;But the Tin Woodman would not let her do this.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We must hurry and get back to the road of yellow brick before dark,&amp;rdquo;
            he said; and the Scarecrow agreed with him. So they kept walking until
            Dorothy could stand no longer. Her eyes closed in spite of herself and
            she forgot where she was and fell among the poppies, fast asleep.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What shall we do?&amp;rdquo; asked the Tin Woodman.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;If we leave her here she will die,&amp;rdquo; said the Lion. &amp;ldquo;The smell of
            the flowers is killing us all. I myself can scarcely keep my eyes open,
            and the dog is asleep already.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;It was true; Toto had fallen down beside his little mistress.
            But the Scarecrow and the Tin Woodman, not being made of flesh,
            were not troubled by the scent of the flowers.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Run fast,&amp;rdquo; said the Scarecrow to the Lion, &amp;ldquo;and get out of
            this deadly flower bed as soon as you can. We will bring the
            little girl with us, but if you should fall asleep you are too big
            to be carried.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So the Lion aroused himself and bounded forward as fast as he
            could go. In a moment he was out of sight.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Let us make a chair with our hands and carry her,&amp;rdquo; said the
            Scarecrow. So they picked up Toto and put the dog in Dorothy&amp;rsquo;s
            lap, and then they made a chair with their hands for the seat and
            their arms for the arms and carried the sleeping girl between them
            through the flowers.&lt;/p&gt;
        &lt;p&gt;On and on they walked, and it seemed that the great carpet of
            deadly flowers that surrounded them would never end. They followed
            the bend of the river, and at last came upon their friend the Lion,
            lying fast asleep among the poppies. The flowers had been too strong
            for the huge beast and he had given up at last, and fallen only a short
            distance from the end of the poppy bed, where the sweet grass spread in
            beautiful green fields before them.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We can do nothing for him,&amp;rdquo; said the Tin Woodman, sadly; &amp;ldquo;for
            he is much too heavy to lift. We must leave him here to sleep on
            forever, and perhaps he will dream that he has found courage at last.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I&amp;rsquo;m sorry,&amp;rdquo; said the Scarecrow. &amp;ldquo;The Lion was a very good
            comrade for one so cowardly. But let us go on.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;They carried the sleeping girl to a pretty spot beside the river,
            far enough from the poppy field to prevent her breathing any more of
            the poison of the flowers, and here they laid her gently on the soft
            grass and waited for the fresh breeze to waken her.
        &lt;/p&gt;
        
        
        &lt;h2&gt;The Queen of the Field Mice&lt;/h2&gt;
        
        &lt;p&gt;We cannot be far from the road of yellow brick, now,&amp;rdquo; remarked
            the Scarecrow, as he stood beside the girl, &amp;ldquo;for we have come
            nearly as far as the river carried us away.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The Tin Woodman was about to reply when he heard a low growl,
            and turning his head (which worked beautifully on hinges) he saw a
            strange beast come bounding over the grass toward them. It was,
            indeed, a great yellow Wildcat, and the Woodman thought it must
            be chasing something, for its ears were lying close to its head
            and its mouth was wide open, showing two rows of ugly teeth, while
            its red eyes glowed like balls of fire. As it came nearer the Tin
            Woodman saw that running before the beast was a little gray field
            mouse, and although he had no heart he knew it was wrong for the
            Wildcat to try to kill such a pretty, harmless creature.&lt;/p&gt;
        &lt;p&gt;So the Woodman raised his axe, and as the Wildcat ran by he gave
            it a quick blow that cut the beast&amp;rsquo;s head clean off from its body,
            and it rolled over at his feet in two pieces.&lt;/p&gt;
        &lt;p&gt;The field mouse, now that it was freed from its enemy, stopped short;
            and coming slowly up to the Woodman it said, in a squeaky little voice:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, thank you! Thank you ever so much for saving my life.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Don&amp;rsquo;t speak of it, I beg of you,&amp;rdquo; replied the Woodman.
        &amp;ldquo;I have no heart, you know, so I am careful to help all those
            who may need a friend, even if it happens to be only a mouse.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Only a mouse!&amp;rdquo; cried the little animal, indignantly.
        &amp;ldquo;Why, I am a Queen&amp;mdash;the Queen of all the Field Mice!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, indeed,&amp;rdquo; said the Woodman, making a bow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Therefore you have done a great deed, as well as a brave one,
            in saving my life,&amp;rdquo; added the Queen.&lt;/p&gt;
        &lt;p&gt;At that moment several mice were seen running up as fast as
            their little legs could carry them, and when they saw their Queen
            they exclaimed:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, your Majesty, we thought you would be killed! How did
            you manage to escape the great Wildcat?&amp;rdquo; They all bowed so low to
            the little Queen that they almost stood upon their heads.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;This funny tin man,&amp;rdquo; she answered, &amp;ldquo;killed the Wildcat and
            saved my life. So hereafter you must all serve him, and obey his
            slightest wish.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We will!&amp;rdquo; cried all the mice, in a shrill chorus. And then they
            scampered in all directions, for Toto had awakened from his sleep, and
            seeing all these mice around him he gave one bark of delight and jumped
            right into the middle of the group. Toto had always loved to chase mice
            when he lived in Kansas, and he saw no harm in it.&lt;/p&gt;
        &lt;p&gt;But the Tin Woodman caught the dog in his arms and held him tight,
            while he called to the mice, &amp;ldquo;Come back! Come back! Toto shall not hurt you.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;At this the Queen of the Mice stuck her head out from underneath a clump
            of grass and asked, in a timid voice, &amp;ldquo;Are you sure he will not bite us?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I will not let him,&amp;rdquo; said the Woodman; &amp;ldquo;so do not be afraid.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;One by one the mice came creeping back, and Toto did not bark again,
            although he tried to get out of the Woodman&amp;rsquo;s arms, and would have bitten
            him had he not known very well he was made of tin. Finally one of the
            biggest mice spoke.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Is there anything we can do,&amp;rdquo; it asked, &amp;ldquo;to repay you for
            saving the life of our Queen?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Nothing that I know of,&amp;rdquo; answered the Woodman; but the
            Scarecrow, who had been trying to think, but could not because his
            head was stuffed with straw, said, quickly, &amp;ldquo;Oh, yes; you can save
            our friend, the Cowardly Lion, who is asleep in the poppy bed.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;A Lion!&amp;rdquo; cried the little Queen. &amp;ldquo;Why, he would eat us all up.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, no,&amp;rdquo; declared the Scarecrow; &amp;ldquo;this Lion is a coward.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Really?&amp;rdquo; asked the Mouse.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;He says so himself,&amp;rdquo; answered the Scarecrow, &amp;ldquo;and he would
            never hurt anyone who is our friend. If you will help us to save
            him I promise that he shall treat you all with kindness.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Very well,&amp;rdquo; said the Queen, &amp;ldquo;we trust you. But what shall we do?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Are there many of these mice which call you Queen and are willing
            to obey you?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, yes; there are thousands,&amp;rdquo; she replied.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Then send for them all to come here as soon as possible,
            and let each one bring a long piece of string.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The Queen turned to the mice that attended her and told them
            to go at once and get all her people. As soon as they heard her
            orders they ran away in every direction as fast as possible.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Now,&amp;rdquo; said the Scarecrow to the Tin Woodman, &amp;ldquo;you must go to
            those trees by the riverside and make a truck that will carry the Lion.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So the Woodman went at once to the trees and began to work;
            and he soon made a truck out of the limbs of trees, from which he
            chopped away all the leaves and branches. He fastened it together
            with wooden pegs and made the four wheels out of short pieces of a
            big tree trunk. So fast and so well did he work that by the time
            the mice began to arrive the truck was all ready for them.&lt;/p&gt;
        &lt;p&gt;They came from all directions, and there were thousands of
            them: big mice and little mice and middle&amp;#8208;sized mice; and each
            one brought a piece of string in his mouth. It was about this
            time that Dorothy woke from her long sleep and opened her eyes.
            She was greatly astonished to find herself lying upon the grass,
            with thousands of mice standing around and looking at her timidly.
            But the Scarecrow told her about everything, and turning to the
            dignified little Mouse, he said:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Permit me to introduce to you her Majesty, the Queen.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Dorothy nodded gravely and the Queen made a curtsy, after
            which she became quite friendly with the little girl.&lt;/p&gt;
        &lt;p&gt;The Scarecrow and the Woodman now began to fasten the mice to
            the truck, using the strings they had brought. One end of a
            string was tied around the neck of each mouse and the other end to
            the truck. Of course the truck was a thousand times bigger than
            any of the mice who were to draw it; but when all the mice had
            been harnessed, they were able to pull it quite easily. Even the
            Scarecrow and the Tin Woodman could sit on it, and were drawn swiftly
            by their queer little horses to the place where the Lion lay asleep.&lt;/p&gt;
        &lt;p&gt;After a great deal of hard work, for the Lion was heavy, they
            managed to get him up on the truck. Then the Queen hurriedly gave
            her people the order to start, for she feared if the mice stayed
            among the poppies too long they also would fall asleep.&lt;/p&gt;
        &lt;p&gt;At first the little creatures, many though they were, could
            hardly stir the heavily loaded truck; but the Woodman and the
            Scarecrow both pushed from behind, and they got along better.
            Soon they rolled the Lion out of the poppy bed to the green fields,
            where he could breathe the sweet, fresh air again, instead of the
            poisonous scent of the flowers.&lt;/p&gt;
        &lt;p&gt;Dorothy came to meet them and thanked the little mice warmly
            for saving her companion from death. She had grown so fond of
            the big Lion she was glad he had been rescued.&lt;/p&gt;
        &lt;p&gt;Then the mice were unharnessed from the truck and scampered
            away through the grass to their homes. The Queen of the Mice was
            the last to leave.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;If ever you need us again,&amp;rdquo; she said, &amp;ldquo;come out into the
            field and call, and we shall hear you and come to your assistance.
            Good&amp;#8208;bye!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Good&amp;#8208;bye!&amp;rdquo; they all answered, and away the Queen ran, while
            Dorothy held Toto tightly lest he should run after her and
            frighten her.&lt;/p&gt;
        &lt;p&gt;After this they sat down beside the Lion until he should
            awaken; and the Scarecrow brought Dorothy some fruit from a tree
            near by, which she ate for her dinner.
        &lt;/p&gt;
        
        
        &lt;h2&gt;The Guardian of the Gate&lt;/h2&gt;
        
        &lt;p&gt;It was some time before the Cowardly Lion awakened, for he had
            lain among the poppies a long while, breathing in their deadly
            fragrance; but when he did open his eyes and roll off the truck
            he was very glad to find himself still alive.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I ran as fast as I could,&amp;rdquo; he said, sitting down and yawning,
        &amp;ldquo;but the flowers were too strong for me. How did you get me out?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Then they told him of the field mice, and how they had generously
            saved him from death; and the Cowardly Lion laughed, and said:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I have always thought myself very big and terrible; yet such
            little things as flowers came near to killing me, and such small
            animals as mice have saved my life. How strange it all is!
            But, comrades, what shall we do now?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We must journey on until we find the road of yellow brick again,&amp;rdquo;
            said Dorothy, &amp;ldquo;and then we can keep on to the Emerald City.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So, the Lion being fully refreshed, and feeling quite himself again,
            they all started upon the journey, greatly enjoying the walk through the soft,
            fresh grass; and it was not long before they reached the road of yellow brick
            and turned again toward the Emerald City where the Great Oz dwelt.&lt;/p&gt;
        &lt;p&gt;The road was smooth and well paved, now, and the country about
            was beautiful, so that the travelers rejoiced in leaving the
            forest far behind, and with it the many dangers they had met in
            its gloomy shades. Once more they could see fences built beside
            the road; but these were painted green, and when they came to a
            small house, in which a farmer evidently lived, that also was
            painted green. They passed by several of these houses during the
            afternoon, and sometimes people came to the doors and looked at
            them as if they would like to ask questions; but no one came near
            them nor spoke to them because of the great Lion, of which they
            were very much afraid. The people were all dressed in clothing of
            a lovely emerald&amp;#8208;green color and wore peaked hats like those of
            the Munchkins.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;This must be the Land of Oz,&amp;rdquo; said Dorothy, &amp;ldquo;and we are
            surely getting near the Emerald City.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Yes,&amp;rdquo; answered the Scarecrow. &amp;ldquo;Everything is green here,
            while in the country of the Munchkins blue was the favorite color.
            But the people do not seem to be as friendly as the Munchkins, and
            I&amp;rsquo;m afraid we shall be unable to find a place to pass the night.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I should like something to eat besides fruit,&amp;rdquo; said the girl,
        &amp;ldquo;and I&amp;rsquo;m sure Toto is nearly starved. Let us stop at the next
            house and talk to the people.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So, when they came to a good&amp;#8208;sized farmhouse, Dorothy walked
            boldly up to the door and knocked.&lt;/p&gt;
        &lt;p&gt;A woman opened it just far enough to look out, and said,
        &amp;ldquo;What do you want, child, and why is that great Lion with you?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We wish to pass the night with you, if you will allow us,&amp;rdquo;
            answered Dorothy; &amp;ldquo;and the Lion is my friend and comrade, and
            would not hurt you for the world.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Is he tame?&amp;rdquo; asked the woman, opening the door a little wider.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, yes,&amp;rdquo; said the girl, &amp;ldquo;and he is a great coward, too.
            He will be more afraid of you than you are of him.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Well,&amp;rdquo; said the woman, after thinking it over and taking
            another peep at the Lion, &amp;ldquo;if that is the case you may come in,
            and I will give you some supper and a place to sleep.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So they all entered the house, where there were, besides the
            woman, two children and a man. The man had hurt his leg, and was
            lying on the couch in a corner. They seemed greatly surprised to
            see so strange a company, and while the woman was busy laying the
            table the man asked:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Where are you all going?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;To the Emerald City,&amp;rdquo; said Dorothy, &amp;ldquo;to see the Great Oz.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, indeed!&amp;rdquo; exclaimed the man. &amp;ldquo;Are you sure that Oz will see you?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Why not?&amp;rdquo; she replied.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Why, it is said that he never lets anyone come into his presence.
            I have been to the Emerald City many times, and it is a beautiful and
            wonderful place; but I have never been permitted to see the Great Oz,
            nor do I know of any living person who has seen him.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Does he never go out?&amp;rdquo; asked the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Never. He sits day after day in the great Throne Room of his
            Palace, and even those who wait upon him do not see him face to face.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What is he like?&amp;rdquo; asked the girl.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That is hard to tell,&amp;rdquo; said the man thoughtfully. &amp;ldquo;You see,
            Oz is a Great Wizard, and can take on any form he wishes. So that
            some say he looks like a bird; and some say he looks like an
            elephant; and some say he looks like a cat. To others he appears
            as a beautiful fairy, or a brownie, or in any other form that
            pleases him. But who the real Oz is, when he is in his own form,
            no living person can tell.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That is very strange,&amp;rdquo; said Dorothy, &amp;ldquo;but we must try, in
            some way, to see him, or we shall have made our journey for nothing.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Why do you wish to see the terrible Oz?&amp;rdquo; asked the man.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I want him to give me some brains,&amp;rdquo; said the Scarecrow eagerly.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, Oz could do that easily enough,&amp;rdquo; declared the man.
        &amp;ldquo;He has more brains than he needs.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And I want him to give me a heart,&amp;rdquo; said the Tin Woodman.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That will not trouble him,&amp;rdquo; continued the man, &amp;ldquo;for Oz has a
            large collection of hearts, of all sizes and shapes.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And I want him to give me courage,&amp;rdquo; said the Cowardly Lion.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oz keeps a great pot of courage in his Throne Room,&amp;rdquo; said
            the man, &amp;ldquo;which he has covered with a golden plate, to keep it
            from running over. He will be glad to give you some.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And I want him to send me back to Kansas,&amp;rdquo; said Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Where is Kansas?&amp;rdquo; asked the man, with surprise.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I don&amp;rsquo;t know,&amp;rdquo; replied Dorothy sorrowfully, &amp;ldquo;but it is my home,
            and I&amp;rsquo;m sure it&amp;rsquo;s somewhere.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Very likely. Well, Oz can do anything; so I suppose he will
            find Kansas for you. But first you must get to see him, and that
            will be a hard task; for the Great Wizard does not like to see anyone,
            and he usually has his own way. But what do you want?&amp;rdquo; he continued,
            speaking to Toto. Toto only wagged his tail; for, strange to say,
            he could not speak.&lt;/p&gt;
        &lt;p&gt;The woman now called to them that supper was ready, so they
            gathered around the table and Dorothy ate some delicious porridge
            and a dish of scrambled eggs and a plate of nice white bread, and
            enjoyed her meal. The Lion ate some of the porridge, but did not
            care for it, saying it was made from oats and oats were food for
            horses, not for lions. The Scarecrow and the Tin Woodman ate
            nothing at all. Toto ate a little of everything, and was glad to
            get a good supper again.&lt;/p&gt;
        &lt;p&gt;The woman now gave Dorothy a bed to sleep in, and Toto lay
            down beside her, while the Lion guarded the door of her room so
            she might not be disturbed. The Scarecrow and the Tin Woodman
            stood up in a corner and kept quiet all night, although of course
            they could not sleep.&lt;/p&gt;
        &lt;p&gt;The next morning, as soon as the sun was up, they started on
            their way, and soon saw a beautiful green glow in the sky just
            before them.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That must be the Emerald City,&amp;rdquo; said Dorothy.&lt;/p&gt;
        &lt;p&gt;As they walked on, the green glow became brighter and brighter,
            and it seemed that at last they were nearing the end of their travels.
            Yet it was afternoon before they came to the great wall that surrounded
            the City. It was high and thick and of a bright green color.&lt;/p&gt;
        &lt;p&gt;In front of them, and at the end of the road of yellow brick,
            was a big gate, all studded with emeralds that glittered so in the
            sun that even the painted eyes of the Scarecrow were dazzled by
            their brilliancy.&lt;/p&gt;
        &lt;p&gt;There was a bell beside the gate, and Dorothy pushed the
            button and heard a silvery tinkle sound within. Then the big gate
            swung slowly open, and they all passed through and found
            themselves in a high arched room, the walls of which glistened
            with countless emeralds.&lt;/p&gt;
        &lt;p&gt;Before them stood a little man about the same size as the
            Munchkins. He was clothed all in green, from his head to his
            feet, and even his skin was of a greenish tint. At his side was a
            large green box.&lt;/p&gt;
        &lt;p&gt;When he saw Dorothy and her companions the man asked,
        &amp;ldquo;What do you wish in the Emerald City?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We came here to see the Great Oz,&amp;rdquo; said Dorothy.&lt;/p&gt;
        &lt;p&gt;The man was so surprised at this answer that he sat down to
            think it over.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;It has been many years since anyone asked me to see Oz,&amp;rdquo;
            he said, shaking his head in perplexity. &amp;ldquo;He is powerful and
            terrible, and if you come on an idle or foolish errand to bother
            the wise reflections of the Great Wizard, he might be angry and
            destroy you all in an instant.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;But it is not a foolish errand, nor an idle one,&amp;rdquo; replied the
            Scarecrow; &amp;ldquo;it is important. And we have been told that Oz is a
            good Wizard.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;So he is,&amp;rdquo; said the green man, &amp;ldquo;and he rules the Emerald City
            wisely and well. But to those who are not honest, or who approach
            him from curiosity, he is most terrible, and few have ever dared
            ask to see his face. I am the Guardian of the Gates, and since
            you demand to see the Great Oz I must take you to his Palace.
            But first you must put on the spectacles.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Why?&amp;rdquo; asked Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Because if you did not wear spectacles the brightness and
            glory of the Emerald City would blind you. Even those who live in
            the City must wear spectacles night and day. They are all locked
            on, for Oz so ordered it when the City was first built, and I have
            the only key that will unlock them.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;He opened the big box, and Dorothy saw that it was filled with
            spectacles of every size and shape. All of them had green glasses
            in them. The Guardian of the Gates found a pair that would just
            fit Dorothy and put them over her eyes. There were two golden
            bands fastened to them that passed around the back of her head,
            where they were locked together by a little key that was at the
            end of a chain the Guardian of the Gates wore around his neck.
            When they were on, Dorothy could not take them off had she wished,
            but of course she did not wish to be blinded by the glare of the
            Emerald City, so she said nothing.&lt;/p&gt;
        &lt;p&gt;Then the green man fitted spectacles for the Scarecrow and the
            Tin Woodman and the Lion, and even on little Toto; and all were
            locked fast with the key.&lt;/p&gt;
        &lt;p&gt;Then the Guardian of the Gates put on his own glasses and told
            them he was ready to show them to the Palace. Taking a big golden
            key from a peg on the wall, he opened another gate, and they all
            followed him through the portal into the streets of the Emerald City.
        &lt;/p&gt;
        
        
        &lt;h2&gt;The Wonderful City of Oz&lt;/h2&gt;
        
        &lt;p&gt;Even with eyes protected by the green spectacles, Dorothy
            and her friends were at first dazzled by the brilliancy of the
            wonderful City. The streets were lined with beautiful houses all
            built of green marble and studded everywhere with sparkling
            emeralds. They walked over a pavement of the same green marble,
            and where the blocks were joined together were rows of emeralds,
            set closely, and glittering in the brightness of the sun. The
            window panes were of green glass; even the sky above the City had
            a green tint, and the rays of the sun were green.&lt;/p&gt;
        &lt;p&gt;There were many people&amp;mdash;men, women, and children&amp;mdash;walking about,
            and these were all dressed in green clothes and had greenish skins.
            They looked at Dorothy and her strangely assorted company with
            wondering eyes, and the children all ran away and hid behind
            their mothers when they saw the Lion; but no one spoke to them.
            Many shops stood in the street, and Dorothy saw that everything
            in them was green. Green candy and green pop corn were offered
            for sale, as well as green shoes, green hats, and green clothes
            of all sorts. At one place a man was selling green lemonade,
            and when the children bought it Dorothy could see that they paid
            for it with green pennies.&lt;/p&gt;
        &lt;p&gt;There seemed to be no horses nor animals of any kind; the men
            carried things around in little green carts, which they pushed
            before them. Everyone seemed happy and contented and prosperous.&lt;/p&gt;
        &lt;p&gt;The Guardian of the Gates led them through the streets until
            they came to a big building, exactly in the middle of the City,
            which was the Palace of Oz, the Great Wizard. There was a soldier
            before the door, dressed in a green uniform and wearing a long
            green beard.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Here are strangers,&amp;rdquo; said the Guardian of the Gates to him,
        &amp;ldquo;and they demand to see the Great Oz.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Step inside,&amp;rdquo; answered the soldier, &amp;ldquo;and I will carry your
            message to him.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So they passed through the Palace Gates and were led into a
            big room with a green carpet and lovely green furniture set with
            emeralds. The soldier made them all wipe their feet upon a green
            mat before entering this room, and when they were seated he said
            politely:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Please make yourselves comfortable while I go to the door of
            the Throne Room and tell Oz you are here.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;They had to wait a long time before the soldier returned.
            When, at last, he came back, Dorothy asked:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Have you seen Oz?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, no,&amp;rdquo; returned the soldier; &amp;ldquo;I have never seen him.
            But I spoke to him as he sat behind his screen and gave him your
            message. He said he will grant you an audience, if you so desire;
            but each one of you must enter his presence alone, and he will
            admit but one each day. Therefore, as you must remain in the
            Palace for several days, I will have you shown to rooms where you
            may rest in comfort after your journey.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Thank you,&amp;rdquo; replied the girl; &amp;ldquo;that is very kind of Oz.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The soldier now blew upon a green whistle, and at once a young girl,
            dressed in a pretty green silk gown, entered the room. She had lovely
            green hair and green eyes, and she bowed low before Dorothy as she said,
        &amp;ldquo;Follow me and I will show you your room.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So Dorothy said good&amp;#8208;bye to all her friends except Toto, and
            taking the dog in her arms followed the green girl through seven
            passages and up three flights of stairs until they came to a room
            at the front of the Palace. It was the sweetest little room in
            the world, with a soft comfortable bed that had sheets of green
            silk and a green velvet counterpane. There was a tiny fountain in
            the middle of the room, that shot a spray of green perfume into
            the air, to fall back into a beautifully carved green marble basin.
            Beautiful green flowers stood in the windows, and there was a shelf
            with a row of little green books. When Dorothy had time to open
            these books she found them full of queer green pictures that made
            her laugh, they were so funny.&lt;/p&gt;
        &lt;p&gt;In a wardrobe were many green dresses, made of silk and satin
            and velvet; and all of them fitted Dorothy exactly.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Make yourself perfectly at home,&amp;rdquo; said the green girl,
        &amp;ldquo;and if you wish for anything ring the bell. Oz will send
            for you tomorrow morning.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;She left Dorothy alone and went back to the others. These she
            also led to rooms, and each one of them found himself lodged in a
            very pleasant part of the Palace. Of course this politeness was
            wasted on the Scarecrow; for when he found himself alone in his
            room he stood stupidly in one spot, just within the doorway, to
            wait till morning. It would not rest him to lie down, and he
            could not close his eyes; so he remained all night staring at a
            little spider which was weaving its web in a corner of the room,
            just as if it were not one of the most wonderful rooms in the world.
            The Tin Woodman lay down on his bed from force of habit, for he
            remembered when he was made of flesh; but not being able to sleep,
            he passed the night moving his joints up and down to make sure they
            kept in good working order. The Lion would have preferred a bed of
            dried leaves in the forest, and did not like being shut up in a room;
            but he had too much sense to let this worry him, so he sprang upon
            the bed and rolled himself up like a cat and purred himself asleep
            in a minute.&lt;/p&gt;
        &lt;p&gt;The next morning, after breakfast, the green maiden came to
            fetch Dorothy, and she dressed her in one of the prettiest gowns,
            made of green brocaded satin. Dorothy put on a green silk apron
            and tied a green ribbon around Toto&amp;rsquo;s neck, and they started
            for the Throne Room of the Great Oz.&lt;/p&gt;
        &lt;p&gt;First they came to a great hall in which were many ladies and
            gentlemen of the court, all dressed in rich costumes. These
            people had nothing to do but talk to each other, but they always
            came to wait outside the Throne Room every morning, although they
            were never permitted to see Oz. As Dorothy entered they looked at
            her curiously, and one of them whispered:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Are you really going to look upon the face of Oz the Terrible?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Of course,&amp;rdquo; answered the girl, &amp;ldquo;if he will see me.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, he will see you,&amp;rdquo; said the soldier who had taken her
            message to the Wizard, &amp;ldquo;although he does not like to have people
            ask to see him. Indeed, at first he was angry and said I should
            send you back where you came from. Then he asked me what you
            looked like, and when I mentioned your silver shoes he was very
            much interested. At last I told him about the mark upon your
            forehead, and he decided he would admit you to his presence.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Just then a bell rang, and the green girl said to Dorothy,
        &amp;ldquo;That is the signal. You must go into the Throne Room alone.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;She opened a little door and Dorothy walked boldly through and
            found herself in a wonderful place. It was a big, round room with
            a high arched roof, and the walls and ceiling and floor were covered
            with large emeralds set closely together. In the center of the roof
            was a great light, as bright as the sun, which made the emeralds
            sparkle in a wonderful manner.&lt;/p&gt;
        &lt;p&gt;But what interested Dorothy most was the big throne of green
            marble that stood in the middle of the room. It was shaped like a
            chair and sparkled with gems, as did everything else. In the
            center of the chair was an enormous Head, without a body to
            support it or any arms or legs whatever. There was no hair upon
            this head, but it had eyes and a nose and mouth, and was much
            bigger than the head of the biggest giant.&lt;/p&gt;
        &lt;p&gt;As Dorothy gazed upon this in wonder and fear, the eyes turned
            slowly and looked at her sharply and steadily. Then the mouth
            moved, and Dorothy heard a voice say:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I am Oz, the Great and Terrible. Who are you, and why do you
            seek me?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;It was not such an awful voice as she had expected to come
            from the big Head; so she took courage and answered:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I am Dorothy, the Small and Meek. I have come to you for help.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The eyes looked at her thoughtfully for a full minute.
            Then said the voice:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Where did you get the silver shoes?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I got them from the Wicked Witch of the East, when my house
            fell on her and killed her,&amp;rdquo; she replied.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Where did you get the mark upon your forehead?&amp;rdquo; continued the voice.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That is where the Good Witch of the North kissed me when she
            bade me good&amp;#8208;bye and sent me to you,&amp;rdquo; said the girl.&lt;/p&gt;
        &lt;p&gt;Again the eyes looked at her sharply, and they saw she was
            telling the truth. Then Oz asked, &amp;ldquo;What do you wish me to do?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Send me back to Kansas, where my Aunt Em and Uncle Henry are,&amp;rdquo;
            she answered earnestly. &amp;ldquo;I don&amp;rsquo;t like your country, although it is
            so beautiful. And I am sure Aunt Em will be dreadfully worried over
            my being away so long.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The eyes winked three times, and then they turned up to the
            ceiling and down to the floor and rolled around so queerly that
            they seemed to see every part of the room. And at last they
            looked at Dorothy again.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Why should I do this for you?&amp;rdquo; asked Oz.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Because you are strong and I am weak; because you are a Great
            Wizard and I am only a little girl.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;But you were strong enough to kill the Wicked Witch of the East,&amp;rdquo;
            said Oz.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That just happened,&amp;rdquo; returned Dorothy simply; &amp;ldquo;I could not help it.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Well,&amp;rdquo; said the Head, &amp;ldquo;I will give you my answer. You have no
            right to expect me to send you back to Kansas unless you do something
            for me in return. In this country everyone must pay for everything
            he gets. If you wish me to use my magic power to send you home again
            you must do something for me first. Help me and I will help you.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What must I do?&amp;rdquo; asked the girl.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Kill the Wicked Witch of the West,&amp;rdquo; answered Oz.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;But I cannot!&amp;rdquo; exclaimed Dorothy, greatly surprised.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;You killed the Witch of the East and you wear the silver shoes,
            which bear a powerful charm. There is now but one Wicked Witch left
            in all this land, and when you can tell me she is dead I will send
            you back to Kansas&amp;mdash;but not before.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The little girl began to weep, she was so much disappointed;
            and the eyes winked again and looked upon her anxiously, as if the
            Great Oz felt that she could help him if she would.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I never killed anything, willingly,&amp;rdquo; she sobbed. &amp;ldquo;Even if I
            wanted to, how could I kill the Wicked Witch? If you, who are Great
            and Terrible, cannot kill her yourself, how do you expect me to do it?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I do not know,&amp;rdquo; said the Head; &amp;ldquo;but that is my answer, and
            until the Wicked Witch dies you will not see your uncle and aunt
            again. Remember that the Witch is Wicked&amp;mdash;tremendously Wicked
        &amp;#8208;and ought to be killed. Now go, and do not ask to see me again
            until you have done your task.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Sorrowfully Dorothy left the Throne Room and went back where
            the Lion and the Scarecrow and the Tin Woodman were waiting to
            hear what Oz had said to her. &amp;ldquo;There is no hope for me,&amp;rdquo; she
            said sadly, &amp;ldquo;for Oz will not send me home until I have killed
            the Wicked Witch of the West; and that I can never do.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Her friends were sorry, but could do nothing to help her; so
            Dorothy went to her own room and lay down on the bed and cried
            herself to sleep.&lt;/p&gt;
        &lt;p&gt;The next morning the soldier with the green whiskers came to
            the Scarecrow and said:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Come with me, for Oz has sent for you.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So the Scarecrow followed him and was admitted into the great
            Throne Room, where he saw, sitting in the emerald throne, a most
            lovely Lady. She was dressed in green silk gauze and wore upon
            her flowing green locks a crown of jewels. Growing from her
            shoulders were wings, gorgeous in color and so light that they
            fluttered if the slightest breath of air reached them.&lt;/p&gt;
        &lt;p&gt;When the Scarecrow had bowed, as prettily as his straw stuffing would
            let him, before this beautiful creature, she looked upon him sweetly,
            and said:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I am Oz, the Great and Terrible. Who are you, and why do you seek me?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Now the Scarecrow, who had expected to see the great Head Dorothy had
            told him of, was much astonished; but he answered her bravely.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I am only a Scarecrow, stuffed with straw. Therefore I have
            no brains, and I come to you praying that you will put brains in
            my head instead of straw, so that I may become as much a man as
            any other in your dominions.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Why should I do this for you?&amp;rdquo; asked the Lady.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Because you are wise and powerful, and no one else can help me,&amp;rdquo;
            answered the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I never grant favors without some return,&amp;rdquo; said Oz; &amp;ldquo;but this
            much I will promise. If you will kill for me the Wicked Witch of
            the West, I will bestow upon you a great many brains, and such
            good brains that you will be the wisest man in all the Land of Oz.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I thought you asked Dorothy to kill the Witch,&amp;rdquo; said the Scarecrow,
            in surprise.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;So I did. I don&amp;rsquo;t care who kills her. But until she is dead
            I will not grant your wish. Now go, and do not seek me again
            until you have earned the brains you so greatly desire.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The Scarecrow went sorrowfully back to his friends and told
            them what Oz had said; and Dorothy was surprised to find that the
            Great Wizard was not a Head, as she had seen him, but a lovely Lady.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;All the same,&amp;rdquo; said the Scarecrow, &amp;ldquo;she needs a heart as much
            as the Tin Woodman.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;On the next morning the soldier with the green whiskers came
            to the Tin Woodman and said:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oz has sent for you. Follow me.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So the Tin Woodman followed him and came to the great Throne
            Room. He did not know whether he would find Oz a lovely Lady or a
            Head, but he hoped it would be the lovely Lady. &amp;ldquo;For,&amp;rdquo; he said to
            himself, &amp;ldquo;if it is the head, I am sure I shall not be given a
            heart, since a head has no heart of its own and therefore cannot
            feel for me. But if it is the lovely Lady I shall beg hard for a
            heart, for all ladies are themselves said to be kindly hearted.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;But when the Woodman entered the great Throne Room he saw
            neither the Head nor the Lady, for Oz had taken the shape of a
            most terrible Beast. It was nearly as big as an elephant, and the
            green throne seemed hardly strong enough to hold its weight. The
            Beast had a head like that of a rhinoceros, only there were five
            eyes in its face. There were five long arms growing out of its
            body, and it also had five long, slim legs. Thick, woolly hair
            covered every part of it, and a more dreadful&amp;#8208;looking monster
            could not be imagined. It was fortunate the Tin Woodman had no
            heart at that moment, for it would have beat loud and fast from
            terror. But being only tin, the Woodman was not at all afraid,
            although he was much disappointed.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I am Oz, the Great and Terrible,&amp;rdquo; spoke the Beast, in a voice
            that was one great roar. &amp;ldquo;Who are you, and why do you seek me?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I am a Woodman, and made of tin. Therefore I have no heart,
            and cannot love. I pray you to give me a heart that I may be as
            other men are.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Why should I do this?&amp;rdquo; demanded the Beast.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Because I ask it, and you alone can grant my request,&amp;rdquo;
            answered the Woodman.&lt;/p&gt;
        &lt;p&gt;Oz gave a low growl at this, but said, gruffly: &amp;ldquo;If you indeed
            desire a heart, you must earn it.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;How?&amp;rdquo; asked the Woodman.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Help Dorothy to kill the Wicked Witch of the West,&amp;rdquo; replied
            the Beast. &amp;ldquo;When the Witch is dead, come to me, and I will then
            give you the biggest and kindest and most loving heart in all the
            Land of Oz.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So the Tin Woodman was forced to return sorrowfully to his
            friends and tell them of the terrible Beast he had seen.
            They all wondered greatly at the many forms the Great Wizard
            could take upon himself, and the Lion said:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;If he is a Beast when I go to see him, I shall roar my
            loudest, and so frighten him that he will grant all I ask. And if
            he is the lovely Lady, I shall pretend to spring upon her, and so
            compel her to do my bidding. And if he is the great Head, he will
            be at my mercy; for I will roll this head all about the room until
            he promises to give us what we desire. So be of good cheer, my
            friends, for all will yet be well.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The next morning the soldier with the green whiskers led the
            Lion to the great Throne Room and bade him enter the presence of Oz.&lt;/p&gt;
        &lt;p&gt;The Lion at once passed through the door, and glancing around saw,
            to his surprise, that before the throne was a Ball of Fire, so fierce
            and glowing he could scarcely bear to gaze upon it. His first thought
            was that Oz had by accident caught on fire and was burning up; but when
            he tried to go nearer, the heat was so intense that it singed his whiskers,
            and he crept back tremblingly to a spot nearer the door.&lt;/p&gt;
        &lt;p&gt;Then a low, quiet voice came from the Ball of Fire, and these
            were the words it spoke:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I am Oz, the Great and Terrible. Who are you, and why do you seek me?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;And the Lion answered, &amp;ldquo;I am a Cowardly Lion, afraid of everything.
            I came to you to beg that you give me courage, so that in reality I may
            become the King of Beasts, as men call me.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Why should I give you courage?&amp;rdquo; demanded Oz.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Because of all Wizards you are the greatest, and alone have
            power to grant my request,&amp;rdquo; answered the Lion.&lt;/p&gt;
        &lt;p&gt;The Ball of Fire burned fiercely for a time, and the voice said,
        &amp;ldquo;Bring me proof that the Wicked Witch is dead, and that moment I will
            give you courage. But as long as the Witch lives, you must remain a coward.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The Lion was angry at this speech, but could say nothing in reply,
            and while he stood silently gazing at the Ball of Fire it became
            so furiously hot that he turned tail and rushed from the room.
            He was glad to find his friends waiting for him, and told them
            of his terrible interview with the Wizard.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What shall we do now?&amp;rdquo; asked Dorothy sadly.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;There is only one thing we can do,&amp;rdquo; returned the Lion, &amp;ldquo;and
            that is to go to the land of the Winkies, seek out the Wicked
            Witch, and destroy her.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;But suppose we cannot?&amp;rdquo; said the girl.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Then I shall never have courage,&amp;rdquo; declared the Lion.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And I shall never have brains,&amp;rdquo; added the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And I shall never have a heart,&amp;rdquo; spoke the Tin of Woodman.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And I shall never see Aunt Em and Uncle Henry,&amp;rdquo; said Dorothy,
            beginning to cry.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Be careful!&amp;rdquo; cried the green girl. &amp;ldquo;The tears will fall on
            your green silk gown and spot it.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So Dorothy dried her eyes and said, &amp;ldquo;I suppose we must try it;
            but I am sure I do not want to kill anybody, even to see Aunt Em again.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I will go with you; but I&amp;rsquo;m too much of a coward to kill the
            Witch,&amp;rdquo; said the Lion.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I will go too,&amp;rdquo; declared the Scarecrow; &amp;ldquo;but I shall not be
            of much help to you, I am such a fool.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I haven&amp;rsquo;t the heart to harm even a Witch,&amp;rdquo; remarked the Tin
            Woodman; &amp;ldquo;but if you go I certainly shall go with you.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Therefore it was decided to start upon their journey the next
            morning, and the Woodman sharpened his axe on a green grindstone
            and had all his joints properly oiled. The Scarecrow stuffed
            himself with fresh straw and Dorothy put new paint on his eyes
            that he might see better. The green girl, who was very kind to
            them, filled Dorothy&amp;rsquo;s basket with good things to eat, and
            fastened a little bell around Toto&amp;rsquo;s neck with a green ribbon.&lt;/p&gt;
        &lt;p&gt;They went to bed quite early and slept soundly until daylight,
            when they were awakened by the crowing of a green cock that lived
            in the back yard of the Palace, and the cackling of a hen that had
            laid a green egg.
        &lt;/p&gt;
        
        
        &lt;h2&gt;The Search for the Wicked Witch&lt;/h2&gt;
        
        &lt;p&gt;The soldier with the green whiskers led them through the
            streets of the Emerald City until they reached the room where the
            Guardian of the Gates lived. This officer unlocked their spectacles
            to put them back in his great box, and then he politely opened the
            gate for our friends.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Which road leads to the Wicked Witch of the West?&amp;rdquo; asked
            Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;There is no road,&amp;rdquo; answered the Guardian of the Gates.
        &amp;ldquo;No one ever wishes to go that way.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;How, then, are we to find her?&amp;rdquo; inquired the girl.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That will be easy,&amp;rdquo; replied the man, &amp;ldquo;for when she knows you
            are in the country of the Winkies she will find you, and make you
            all her slaves.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Perhaps not,&amp;rdquo; said the Scarecrow, &amp;ldquo;for we mean to destroy her.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, that is different,&amp;rdquo; said the Guardian of the Gates.
        &amp;ldquo;No one has ever destroyed her before, so I naturally thought she
            would make slaves of you, as she has of the rest. But take care;
            for she is wicked and fierce, and may not allow you to destroy her.
            Keep to the West, where the sun sets, and you cannot fail to find her.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;They thanked him and bade him good&amp;#8208;bye, and turned toward the West,
            walking over fields of soft grass dotted here and there with daisies
            and buttercups. Dorothy still wore the pretty silk dress she had put on
            in the palace, but now, to her surprise, she found it was no longer green,
            but pure white. The ribbon around Toto&amp;rsquo;s neck had also lost its green
            color and was as white as Dorothy&amp;rsquo;s dress.&lt;/p&gt;
        &lt;p&gt;The Emerald City was soon left far behind. As they advanced
            the ground became rougher and hillier, for there were no farms nor
            houses in this country of the West, and the ground was untilled.&lt;/p&gt;
        &lt;p&gt;In the afternoon the sun shone hot in their faces, for there
            were no trees to offer them shade; so that before night Dorothy
            and Toto and the Lion were tired, and lay down upon the grass and
            fell asleep, with the Woodman and the Scarecrow keeping watch.&lt;/p&gt;
        &lt;p&gt;Now the Wicked Witch of the West had but one eye, yet that was as
            powerful as a telescope, and could see everywhere. So, as she sat in
            the door of her castle, she happened to look around and saw Dorothy
            lying asleep, with her friends all about her. They were a long
            distance off, but the Wicked Witch was angry to find them in her
            country; so she blew upon a silver whistle that hung around her neck.&lt;/p&gt;
        &lt;p&gt;At once there came running to her from all directions a pack
            of great wolves. They had long legs and fierce eyes and sharp teeth.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Go to those people,&amp;rdquo; said the Witch, &amp;ldquo;and tear them to pieces.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Are you not going to make them your slaves?&amp;rdquo; asked the leader
            of the wolves.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;No,&amp;rdquo; she answered, &amp;ldquo;one is of tin, and one of straw; one is
            a girl and another a Lion. None of them is fit to work, so you
            may tear them into small pieces.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Very well,&amp;rdquo; said the wolf, and he dashed away at full speed,
            followed by the others.&lt;/p&gt;
        &lt;p&gt;It was lucky the Scarecrow and the Woodman were wide awake and
            heard the wolves coming.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;This is my fight,&amp;rdquo; said the Woodman, &amp;ldquo;so get behind me and I
            will meet them as they come.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;He seized his axe, which he had made very sharp, and as the
            leader of the wolves came on the Tin Woodman swung his arm and
            chopped the wolf&amp;rsquo;s head from its body, so that it immediately died.
            As soon as he could raise his axe another wolf came up, and he also
            fell under the sharp edge of the Tin Woodman&amp;rsquo;s weapon. There were
            forty wolves, and forty times a wolf was killed, so that at last
            they all lay dead in a heap before the Woodman.&lt;/p&gt;
        &lt;p&gt;Then he put down his axe and sat beside the Scarecrow, who said,
        &amp;ldquo;It was a good fight, friend.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;They waited until Dorothy awoke the next morning. The little
            girl was quite frightened when she saw the great pile of shaggy
            wolves, but the Tin Woodman told her all. She thanked him for
            saving them and sat down to breakfast, after which they started
            again upon their journey.&lt;/p&gt;
        &lt;p&gt;Now this same morning the Wicked Witch came to the door of her
            castle and looked out with her one eye that could see far off.
            She saw all her wolves lying dead, and the strangers still
            traveling through her country. This made her angrier than before,
            and she blew her silver whistle twice.&lt;/p&gt;
        &lt;p&gt;Straightway a great flock of wild crows came flying toward her,
            enough to darken the sky.&lt;/p&gt;
        &lt;p&gt;And the Wicked Witch said to the King Crow, &amp;ldquo;Fly at once to
            the strangers; peck out their eyes and tear them to pieces.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The wild crows flew in one great flock toward Dorothy and her
            companions. When the little girl saw them coming she was afraid.&lt;/p&gt;
        &lt;p&gt;But the Scarecrow said, &amp;ldquo;This is my battle, so lie down beside
            me and you will not be harmed.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So they all lay upon the ground except the Scarecrow, and he
            stood up and stretched out his arms. And when the crows saw him
            they were frightened, as these birds always are by scarecrows, and
            did not dare to come any nearer. But the King Crow said:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;It is only a stuffed man. I will peck his eyes out.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The King Crow flew at the Scarecrow, who caught it by the head
            and twisted its neck until it died. And then another crow flew at
            him, and the Scarecrow twisted its neck also. There were forty
            crows, and forty times the Scarecrow twisted a neck, until at last
            all were lying dead beside him. Then he called to his companions
            to rise, and again they went upon their journey.&lt;/p&gt;
        &lt;p&gt;When the Wicked Witch looked out again and saw all her crows
            lying in a heap, she got into a terrible rage, and blew three
            times upon her silver whistle.&lt;/p&gt;
        &lt;p&gt;Forthwith there was heard a great buzzing in the air, and a
            swarm of black bees came flying toward her.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Go to the strangers and sting them to death!&amp;rdquo; commanded
            the Witch, and the bees turned and flew rapidly until they came
            to where Dorothy and her friends were walking. But the Woodman
            had seen them coming, and the Scarecrow had decided what to do.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Take out my straw and scatter it over the little girl and the
            dog and the Lion,&amp;rdquo; he said to the Woodman, &amp;ldquo;and the bees cannot
            sting them.&amp;rdquo; This the Woodman did, and as Dorothy lay close beside
            the Lion and held Toto in her arms, the straw covered them entirely.&lt;/p&gt;
        &lt;p&gt;The bees came and found no one but the Woodman to sting, so
            they flew at him and broke off all their stings against the tin,
            without hurting the Woodman at all. And as bees cannot live when
            their stings are broken that was the end of the black bees, and
            they lay scattered thick about the Woodman, like little heaps of
            fine coal.&lt;/p&gt;
        &lt;p&gt;Then Dorothy and the Lion got up, and the girl helped the Tin
            Woodman put the straw back into the Scarecrow again, until he was
            as good as ever. So they started upon their journey once more.&lt;/p&gt;
        &lt;p&gt;The Wicked Witch was so angry when she saw her black bees in
            little heaps like fine coal that she stamped her foot and tore her
            hair and gnashed her teeth. And then she called a dozen of her
            slaves, who were the Winkies, and gave them sharp spears, telling
            them to go to the strangers and destroy them.&lt;/p&gt;
        &lt;p&gt;The Winkies were not a brave people, but they had to do as
            they were told. So they marched away until they came near to
            Dorothy. Then the Lion gave a great roar and sprang towards them,
            and the poor Winkies were so frightened that they ran back as fast
            as they could.&lt;/p&gt;
        &lt;p&gt;When they returned to the castle the Wicked Witch beat them
            well with a strap, and sent them back to their work, after which
            she sat down to think what she should do next. She could not
            understand how all her plans to destroy these strangers had failed;
            but she was a powerful Witch, as well as a wicked one, and she soon
            made up her mind how to act.&lt;/p&gt;
        &lt;p&gt;There was, in her cupboard, a Golden Cap, with a circle of
            diamonds and rubies running round it. This Golden Cap had a charm.
            Whoever owned it could call three times upon the Winged Monkeys,
            who would obey any order they were given. But no person
            could command these strange creatures more than three times.
            Twice already the Wicked Witch had used the charm of the Cap.
            Once was when she had made the Winkies her slaves, and set herself
            to rule over their country. The Winged Monkeys had helped her
            do this. The second time was when she had fought against the
            Great Oz himself, and driven him out of the land of the West.
            The Winged Monkeys had also helped her in doing this. Only once
            more could she use this Golden Cap, for which reason she did not
            like to do so until all her other powers were exhausted. But now
            that her fierce wolves and her wild crows and her stinging bees were
            gone, and her slaves had been scared away by the Cowardly Lion,
            she saw there was only one way left to destroy Dorothy and her friends.&lt;/p&gt;
        &lt;p&gt;So the Wicked Witch took the Golden Cap from her cupboard and
            placed it upon her head. Then she stood upon her left foot and
            said slowly:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Ep&amp;#8208;pe, pep&amp;#8208;pe, kak&amp;#8208;ke!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Next she stood upon her right foot and said:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Hil&amp;#8208;lo, hol&amp;#8208;lo, hel&amp;#8208;lo!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;After this she stood upon both feet and cried in a loud voice:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Ziz&amp;#8208;zy, zuz&amp;#8208;zy, zik!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Now the charm began to work. The sky was darkened, and a low
            rumbling sound was heard in the air. There was a rushing of many
            wings, a great chattering and laughing, and the sun came out of the
            dark sky to show the Wicked Witch surrounded by a crowd of monkeys,
            each with a pair of immense and powerful wings on his shoulders.&lt;/p&gt;
        &lt;p&gt;One, much bigger than the others, seemed to be their leader.
            He flew close to the Witch and said, &amp;ldquo;You have called us for the
            third and last time. What do you command?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Go to the strangers who are within my land and destroy them
            all except the Lion,&amp;rdquo; said the Wicked Witch. &amp;ldquo;Bring that beast to
            me, for I have a mind to harness him like a horse, and make him work.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Your commands shall be obeyed,&amp;rdquo; said the leader. Then, with
            a great deal of chattering and noise, the Winged Monkeys flew away
            to the place where Dorothy and her friends were walking.&lt;/p&gt;
        &lt;p&gt;Some of the Monkeys seized the Tin Woodman and carried him
            through the air until they were over a country thickly covered
            with sharp rocks. Here they dropped the poor Woodman, who fell a
            great distance to the rocks, where he lay so battered and dented
            that he could neither move nor groan.&lt;/p&gt;
        &lt;p&gt;Others of the Monkeys caught the Scarecrow, and with their
            long fingers pulled all of the straw out of his clothes and head.
            They made his hat and boots and clothes into a small bundle and
            threw it into the top branches of a tall tree.&lt;/p&gt;
        &lt;p&gt;The remaining Monkeys threw pieces of stout rope around
            the Lion and wound many coils about his body and head and legs,
            until he was unable to bite or scratch or struggle in any way.
            Then they lifted him up and flew away with him to the Witch&amp;rsquo;s castle,
            where he was placed in a small yard with a high iron fence around it,
            so that he could not escape.&lt;/p&gt;
        &lt;p&gt;But Dorothy they did not harm at all. She stood, with Toto in
            her arms, watching the sad fate of her comrades and thinking it
            would soon be her turn. The leader of the Winged Monkeys flew up
            to her, his long, hairy arms stretched out and his ugly face
            grinning terribly; but he saw the mark of the Good Witch&amp;rsquo;s kiss
            upon her forehead and stopped short, motioning the others not to
            touch her.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We dare not harm this little girl,&amp;rdquo; he said to them, &amp;ldquo;for she
            is protected by the Power of Good, and that is greater than the
            Power of Evil. All we can do is to carry her to the castle of the
            Wicked Witch and leave her there.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So, carefully and gently, they lifted Dorothy in their
            arms and carried her swiftly through the air until they came
            to the castle, where they set her down upon the front doorstep.
            Then the leader said to the Witch:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We have obeyed you as far as we were able. The Tin Woodman and
            the Scarecrow are destroyed, and the Lion is tied up in your yard.
            The little girl we dare not harm, nor the dog she carries in her arms.
            Your power over our band is now ended, and you will never see us again.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Then all the Winged Monkeys, with much laughing and chattering
            and noise, flew into the air and were soon out of sight.&lt;/p&gt;
        &lt;p&gt;The Wicked Witch was both surprised and worried when she saw
            the mark on Dorothy&amp;rsquo;s forehead, for she knew well that neither the
            Winged Monkeys nor she, herself, dare hurt the girl in any way.
            She looked down at Dorothy&amp;rsquo;s feet, and seeing the Silver Shoes,
            began to tremble with fear, for she knew what a powerful charm
            belonged to them. At first the Witch was tempted to run away from
            Dorothy; but she happened to look into the child&amp;rsquo;s eyes and saw
            how simple the soul behind them was, and that the little girl did
            not know of the wonderful power the Silver Shoes gave her. So the
            Wicked Witch laughed to herself, and thought, &amp;ldquo;I can still make
            her my slave, for she does not know how to use her power.&amp;rdquo;
            Then she said to Dorothy, harshly and severely:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Come with me; and see that you mind everything I tell you,
            for if you do not I will make an end of you, as I did of the Tin
            Woodman and the Scarecrow.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Dorothy followed her through many of the beautiful rooms in
            her castle until they came to the kitchen, where the Witch bade
            her clean the pots and kettles and sweep the floor and keep the
            fire fed with wood.&lt;/p&gt;
        &lt;p&gt;Dorothy went to work meekly, with her mind made up to work as
            hard as she could; for she was glad the Wicked Witch had decided
            not to kill her.&lt;/p&gt;
        &lt;p&gt;With Dorothy hard at work, the Witch thought she would go into
            the courtyard and harness the Cowardly Lion like a horse; it would
            amuse her, she was sure, to make him draw her chariot whenever she
            wished to go to drive. But as she opened the gate the Lion gave a
            loud roar and bounded at her so fiercely that the Witch was afraid,
            and ran out and shut the gate again.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;If I cannot harness you,&amp;rdquo; said the Witch to the Lion,
            speaking through the bars of the gate, &amp;ldquo;I can starve you.
            You shall have nothing to eat until you do as I wish.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So after that she took no food to the imprisoned Lion;
            but every day she came to the gate at noon and asked, &amp;ldquo;Are you
            ready to be harnessed like a horse?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;And the Lion would answer, &amp;ldquo;No. If you come in this yard, I
            will bite you.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The reason the Lion did not have to do as the Witch wished was
            that every night, while the woman was asleep, Dorothy carried him
            food from the cupboard. After he had eaten he would lie down on
            his bed of straw, and Dorothy would lie beside him and put her
            head on his soft, shaggy mane, while they talked of their troubles
            and tried to plan some way to escape. But they could find no way
            to get out of the castle, for it was constantly guarded by the
            yellow Winkies, who were the slaves of the Wicked Witch and
            too afraid of her not to do as she told them.&lt;/p&gt;
        &lt;p&gt;The girl had to work hard during the day, and often the Witch
            threatened to beat her with the same old umbrella she always
            carried in her hand. But, in truth, she did not dare to strike
            Dorothy, because of the mark upon her forehead. The child did not
            know this, and was full of fear for herself and Toto. Once the
            Witch struck Toto a blow with her umbrella and the brave little
            dog flew at her and bit her leg in return. The Witch did not
            bleed where she was bitten, for she was so wicked that the blood
            in her had dried up many years before.&lt;/p&gt;
        &lt;p&gt;Dorothy&amp;rsquo;s life became very sad as she grew to understand that
            it would be harder than ever to get back to Kansas and Aunt Em again.
            Sometimes she would cry bitterly for hours, with Toto sitting at her
            feet and looking into her face, whining dismally to show how sorry
            he was for his little mistress. Toto did not really care whether
            he was in Kansas or the Land of Oz so long as Dorothy was with him;
            but he knew the little girl was unhappy, and that made him unhappy too.&lt;/p&gt;
        &lt;p&gt;Now the Wicked Witch had a great longing to have for her own
            the Silver Shoes which the girl always wore. Her bees and her
            crows and her wolves were lying in heaps and drying up, and she
            had used up all the power of the Golden Cap; but if she could
            only get hold of the Silver Shoes, they would give her more power
            than all the other things she had lost. She watched Dorothy carefully,
            to see if she ever took off her shoes, thinking she might steal them.
            But the child was so proud of her pretty shoes that she never took
            them off except at night and when she took her bath. The Witch was
            too much afraid of the dark to dare go in Dorothy&amp;rsquo;s room at night
            to take the shoes, and her dread of water was greater than her
            fear of the dark, so she never came near when Dorothy was bathing.
            Indeed, the old Witch never touched water, nor ever let water
            touch her in any way.&lt;/p&gt;
        &lt;p&gt;But the wicked creature was very cunning, and she finally thought of
            a trick that would give her what she wanted. She placed a bar of iron
            in the middle of the kitchen floor, and then by her magic arts made the
            iron invisible to human eyes. So that when Dorothy walked across the floor
            she stumbled over the bar, not being able to see it, and fell at full length.
            She was not much hurt, but in her fall one of the Silver Shoes came off; and
            before she could reach it, the Witch had snatched it away and put it on her
            own skinny foot.&lt;/p&gt;
        &lt;p&gt;The wicked woman was greatly pleased with the success of her trick,
            for as long as she had one of the shoes she owned half the power of
            their charm, and Dorothy could not use it against her, even had she
            known how to do so.&lt;/p&gt;
        &lt;p&gt;The little girl, seeing she had lost one of her pretty shoes,
            grew angry, and said to the Witch, &amp;ldquo;Give me back my shoe!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I will not,&amp;rdquo; retorted the Witch, &amp;ldquo;for it is now my shoe, and
            not yours.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;You are a wicked creature!&amp;rdquo; cried Dorothy. &amp;ldquo;You have no right
            to take my shoe from me.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I shall keep it, just the same,&amp;rdquo; said the Witch, laughing at her,
        &amp;ldquo;and someday I shall get the other one from you, too.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;This made Dorothy so very angry that she picked up the bucket
            of water that stood near and dashed it over the Witch, wetting her
            from head to foot.&lt;/p&gt;
        &lt;p&gt;Instantly the wicked woman gave a loud cry of fear, and then, as
            Dorothy looked at her in wonder, the Witch began to shrink and fall away.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;See what you have done!&amp;rdquo; she screamed. &amp;ldquo;In a minute I shall melt away.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I&amp;rsquo;m very sorry, indeed,&amp;rdquo; said Dorothy, who was truly frightened to
            see the Witch actually melting away like brown sugar before her very eyes.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Didn&amp;rsquo;t you know water would be the end of me?&amp;rdquo; asked the
            Witch, in a wailing, despairing voice.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Of course not,&amp;rdquo; answered Dorothy. &amp;ldquo;How should I?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Well, in a few minutes I shall be all melted, and you will
            have the castle to yourself. I have been wicked in my day, but I
            never thought a little girl like you would ever be able to melt me
            and end my wicked deeds. Look out&amp;mdash;here I go!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;With these words the Witch fell down in a brown, melted,
            shapeless mass and began to spread over the clean boards of the
            kitchen floor. Seeing that she had really melted away to nothing,
            Dorothy drew another bucket of water and threw it over the mess.
            She then swept it all out the door. After picking out the silver
            shoe, which was all that was left of the old woman, she cleaned
            and dried it with a cloth, and put it on her foot again. Then,
            being at last free to do as she chose, she ran out to the
            courtyard to tell the Lion that the Wicked Witch of the West had
            come to an end, and that they were no longer prisoners in a
            strange land.
        &lt;/p&gt;
        
        
        &lt;h2&gt;The Rescue&lt;/h2&gt;
        
        &lt;p&gt;The Cowardly Lion was much pleased to hear that the Wicked
            Witch had been melted by a bucket of water, and Dorothy at once
            unlocked the gate of his prison and set him free. They went in
            together to the castle, where Dorothy&amp;rsquo;s first act was to call all
            the Winkies together and tell them that they were no longer slaves.&lt;/p&gt;
        &lt;p&gt;There was great rejoicing among the yellow Winkies, for they
            had been made to work hard during many years for the Wicked Witch,
            who had always treated them with great cruelty. They kept this
            day as a holiday, then and ever after, and spent the time in
            feasting and dancing.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;If our friends, the Scarecrow and the Tin Woodman, were only
            with us,&amp;rdquo; said the Lion, &amp;ldquo;I should be quite happy.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Don&amp;rsquo;t you suppose we could rescue them?&amp;rdquo; asked the girl anxiously.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We can try,&amp;rdquo; answered the Lion.&lt;/p&gt;
        &lt;p&gt;So they called the yellow Winkies and asked them if they would
            help to rescue their friends, and the Winkies said that they would
            be delighted to do all in their power for Dorothy, who had set them
            free from bondage. So she chose a number of the Winkies who looked
            as if they knew the most, and they all started away. They traveled
            that day and part of the next until they came to the rocky plain
            where the Tin Woodman lay, all battered and bent. His axe was near him,
            but the blade was rusted and the handle broken off short.&lt;/p&gt;
        &lt;p&gt;The Winkies lifted him tenderly in their arms, and carried him
            back to the Yellow Castle again, Dorothy shedding a few tears by
            the way at the sad plight of her old friend, and the Lion looking
            sober and sorry. When they reached the castle Dorothy said to the
            Winkies:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Are any of your people tinsmiths?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, yes. Some of us are very good tinsmiths,&amp;rdquo; they told her.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Then bring them to me,&amp;rdquo; she said. And when the tinsmiths came,
            bringing with them all their tools in baskets, she inquired,
        &amp;ldquo;Can you straighten out those dents in the Tin Woodman, and bend him
            back into shape again, and solder him together where he is broken?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The tinsmiths looked the Woodman over carefully and then
            answered that they thought they could mend him so he would be as
            good as ever. So they set to work in one of the big yellow rooms
            of the castle and worked for three days and four nights, hammering
            and twisting and bending and soldering and polishing and pounding
            at the legs and body and head of the Tin Woodman, until at last he
            was straightened out into his old form, and his joints worked as
            well as ever. To be sure, there were several patches on him, but
            the tinsmiths did a good job, and as the Woodman was not a vain
            man he did not mind the patches at all.&lt;/p&gt;
        &lt;p&gt;When, at last, he walked into Dorothy&amp;rsquo;s room and thanked her
            for rescuing him, he was so pleased that he wept tears of joy,
            and Dorothy had to wipe every tear carefully from his face with
            her apron, so his joints would not be rusted. At the same time
            her own tears fell thick and fast at the joy of meeting her old
            friend again, and these tears did not need to be wiped away. As
            for the Lion, he wiped his eyes so often with the tip of his tail
            that it became quite wet, and he was obliged to go out into the
            courtyard and hold it in the sun till it dried.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;If we only had the Scarecrow with us again,&amp;rdquo; said the
            Tin Woodman, when Dorothy had finished telling him everything
            that had happened, &amp;ldquo;I should be quite happy.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We must try to find him,&amp;rdquo; said the girl.&lt;/p&gt;
        &lt;p&gt;So she called the Winkies to help her, and they walked all that day
            and part of the next until they came to the tall tree in the branches of
            which the Winged Monkeys had tossed the Scarecrow&amp;rsquo;s clothes.&lt;/p&gt;
        &lt;p&gt;It was a very tall tree, and the trunk was so smooth that no
            one could climb it; but the Woodman said at once, &amp;ldquo;I&amp;rsquo;ll chop it
            down, and then we can get the Scarecrow&amp;rsquo;s clothes.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Now while the tinsmiths had been at work mending the Woodman
            himself, another of the Winkies, who was a goldsmith, had made an
            axe&amp;#8208;handle of solid gold and fitted it to the Woodman&amp;rsquo;s axe,
            instead of the old broken handle. Others polished the blade until
            all the rust was removed and it glistened like burnished silver.&lt;/p&gt;
        &lt;p&gt;As soon as he had spoken, the Tin Woodman began to chop, and in a
            short time the tree fell over with a crash, whereupon the Scarecrow&amp;rsquo;s
            clothes fell out of the branches and rolled off on the ground.&lt;/p&gt;
        &lt;p&gt;Dorothy picked them up and had the Winkies carry them back to
            the castle, where they were stuffed with nice, clean straw; and
            behold! here was the Scarecrow, as good as ever, thanking them
            over and over again for saving him.&lt;/p&gt;
        &lt;p&gt;Now that they were reunited, Dorothy and her friends spent a
            few happy days at the Yellow Castle, where they found everything
            they needed to make them comfortable.&lt;/p&gt;
        &lt;p&gt;But one day the girl thought of Aunt Em, and said, &amp;ldquo;We must go
            back to Oz, and claim his promise.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Yes,&amp;rdquo; said the Woodman, &amp;ldquo;at last I shall get my heart.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And I shall get my brains,&amp;rdquo; added the Scarecrow joyfully.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And I shall get my courage,&amp;rdquo; said the Lion thoughtfully.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And I shall get back to Kansas,&amp;rdquo; cried Dorothy, clapping her hands.
        &amp;ldquo;Oh, let us start for the Emerald City tomorrow!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;This they decided to do. The next day they called the Winkies
            together and bade them good&amp;#8208;bye. The Winkies were sorry to have
            them go, and they had grown so fond of the Tin Woodman that they
            begged him to stay and rule over them and the Yellow Land of the West.
            Finding they were determined to go, the Winkies gave Toto and the Lion
            each a golden collar; and to Dorothy they presented a beautiful bracelet
            studded with diamonds; and to the Scarecrow they gave a gold&amp;#8208;headed
            walking stick, to keep him from stumbling; and to the Tin Woodman they
            offered a silver oil&amp;#8208;can, inlaid with gold and set with precious jewels.&lt;/p&gt;
        &lt;p&gt;Every one of the travelers made the Winkies a pretty speech in
            return, and all shook hands with them until their arms ached.&lt;/p&gt;
        &lt;p&gt;Dorothy went to the Witch&amp;rsquo;s cupboard to fill her basket with
            food for the journey, and there she saw the Golden Cap. She tried
            it on her own head and found that it fitted her exactly. She did
            not know anything about the charm of the Golden Cap, but she saw
            that it was pretty, so she made up her mind to wear it and carry
            her sunbonnet in the basket.&lt;/p&gt;
        &lt;p&gt;Then, being prepared for the journey, they all started for the
            Emerald City; and the Winkies gave them three cheers and many good
            wishes to carry with them.
        &lt;/p&gt;
        
        
        &lt;h2&gt;The Winged Monkeys&lt;/h2&gt;
        
        &lt;p&gt;You will remember there was no road&amp;mdash;not even a
            pathway&amp;mdash;between the castle of the Wicked Witch and the Emerald City.
            When the four travelers went in search of the Witch she had seen
            them coming, and so sent the Winged Monkeys to bring them to her.
            It was much harder to find their way back through the big fields
            of buttercups and yellow daisies than it was being carried.
            They knew, of course, they must go straight east, toward the rising
            sun; and they started off in the right way. But at noon, when the
            sun was over their heads, they did not know which was east and
            which was west, and that was the reason they were lost in the
            great fields. They kept on walking, however, and at night the
            moon came out and shone brightly. So they lay down among the
            sweet smelling yellow flowers and slept soundly until
            morning&amp;mdash;all but the Scarecrow and the Tin Woodman.&lt;/p&gt;
        &lt;p&gt;The next morning the sun was behind a cloud, but they started
            on, as if they were quite sure which way they were going.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;If we walk far enough,&amp;rdquo; said Dorothy, &amp;ldquo;I am sure we shall
            sometime come to some place.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;But day by day passed away, and they still saw nothing before
            them but the scarlet fields. The Scarecrow began to grumble a bit.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We have surely lost our way,&amp;rdquo; he said, &amp;ldquo;and unless we find it
            again in time to reach the Emerald City, I shall never get my brains.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Nor I my heart,&amp;rdquo; declared the Tin Woodman. &amp;ldquo;It seems to me I
            can scarcely wait till I get to Oz, and you must admit this is a
            very long journey.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;You see,&amp;rdquo; said the Cowardly Lion, with a whimper, &amp;ldquo;I haven&amp;rsquo;t the
            courage to keep tramping forever, without getting anywhere at all.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Then Dorothy lost heart. She sat down on the grass and looked
            at her companions, and they sat down and looked at her, and Toto
            found that for the first time in his life he was too tired to
            chase a butterfly that flew past his head. So he put out his
            tongue and panted and looked at Dorothy as if to ask what they
            should do next.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Suppose we call the field mice,&amp;rdquo; she suggested. &amp;ldquo;They could
            probably tell us the way to the Emerald City.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;To be sure they could,&amp;rdquo; cried the Scarecrow. &amp;ldquo;Why didn&amp;rsquo;t we
            think of that before?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Dorothy blew the little whistle she had always carried about
            her neck since the Queen of the Mice had given it to her. In a
            few minutes they heard the pattering of tiny feet, and many of the
            small gray mice came running up to her. Among them was the Queen
            herself, who asked, in her squeaky little voice:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What can I do for my friends?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We have lost our way,&amp;rdquo; said Dorothy. &amp;ldquo;Can you tell us where
            the Emerald City is?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Certainly,&amp;rdquo; answered the Queen; &amp;ldquo;but it is a great way off,
            for you have had it at your backs all this time.&amp;rdquo; Then she
            noticed Dorothy&amp;rsquo;s Golden Cap, and said, &amp;ldquo;Why don&amp;rsquo;t you use the
            charm of the Cap, and call the Winged Monkeys to you? They will
            carry you to the City of Oz in less than an hour.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I didn&amp;rsquo;t know there was a charm,&amp;rdquo; answered Dorothy, in
            surprise. &amp;ldquo;What is it?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;It is written inside the Golden Cap,&amp;rdquo; replied the Queen of
            the Mice. &amp;ldquo;But if you are going to call the Winged Monkeys we
            must run away, for they are full of mischief and think it great
            fun to plague us.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Won&amp;rsquo;t they hurt me?&amp;rdquo; asked the girl anxiously.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, no. They must obey the wearer of the Cap. Good&amp;#8208;bye!&amp;rdquo;
            And she scampered out of sight, with all the mice hurrying after her.&lt;/p&gt;
        &lt;p&gt;Dorothy looked inside the Golden Cap and saw some words written
            upon the lining. These, she thought, must be the charm, so she read
            the directions carefully and put the Cap upon her head.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Ep&amp;#8208;pe, pep&amp;#8208;pe, kak&amp;#8208;ke!&amp;rdquo; she said, standing on her left foot.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What did you say?&amp;rdquo; asked the Scarecrow, who did not know what
            she was doing.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Hil&amp;#8208;lo, hol&amp;#8208;lo, hel&amp;#8208;lo!&amp;rdquo; Dorothy went on, standing this time
            on her right foot.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Hello!&amp;rdquo; replied the Tin Woodman calmly.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Ziz&amp;#8208;zy, zuz&amp;#8208;zy, zik!&amp;rdquo; said Dorothy, who was now standing on
            both feet. This ended the saying of the charm, and they heard a
            great chattering and flapping of wings, as the band of Winged
            Monkeys flew up to them.&lt;/p&gt;
        &lt;p&gt;The King bowed low before Dorothy, and asked, &amp;ldquo;What is your command?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We wish to go to the Emerald City,&amp;rdquo; said the child, &amp;ldquo;and we have
            lost our way.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We will carry you,&amp;rdquo; replied the King, and no sooner had he
            spoken than two of the Monkeys caught Dorothy in their arms and
            flew away with her. Others took the Scarecrow and the Woodman and
            the Lion, and one little Monkey seized Toto and flew after them,
            although the dog tried hard to bite him.&lt;/p&gt;
        &lt;p&gt;The Scarecrow and the Tin Woodman were rather frightened at
            first, for they remembered how badly the Winged Monkeys had
            treated them before; but they saw that no harm was intended, so
            they rode through the air quite cheerfully, and had a fine time
            looking at the pretty gardens and woods far below them.&lt;/p&gt;
        &lt;p&gt;Dorothy found herself riding easily between two of the biggest
            Monkeys, one of them the King himself. They had made a chair of
            their hands and were careful not to hurt her.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Why do you have to obey the charm of the Golden Cap?&amp;rdquo; she asked.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That is a long story,&amp;rdquo; answered the King, with a Winged laugh;
        &amp;ldquo;but as we have a long journey before us, I will pass the time by
            telling you about it, if you wish.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I shall be glad to hear it,&amp;rdquo; she replied.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Once,&amp;rdquo; began the leader, &amp;ldquo;we were a free people, living happily
            in the great forest, flying from tree to tree, eating nuts and fruit,
            and doing just as we pleased without calling anybody master. Perhaps
            some of us were rather too full of mischief at times, flying down to
            pull the tails of the animals that had no wings, chasing birds, and
            throwing nuts at the people who walked in the forest. But we were
            careless and happy and full of fun, and enjoyed every minute of the day.
            This was many years ago, long before Oz came out of the clouds to rule
            over this land.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;There lived here then, away at the North, a beautiful princess,
            who was also a powerful sorceress. All her magic was used to help
            the people, and she was never known to hurt anyone who was good.
            Her name was Gayelette, and she lived in a handsome palace built
            from great blocks of ruby. Everyone loved her, but her greatest
            sorrow was that she could find no one to love in return, since all
            the men were much too stupid and ugly to mate with one so beautiful
            and wise. At last, however, she found a boy who was handsome and
            manly and wise beyond his years. Gayelette made up her mind that
            when he grew to be a man she would make him her husband, so she
            took him to her ruby palace and used all her magic powers to
            make him as strong and good and lovely as any woman could wish.
            When he grew to manhood, Quelala, as he was called, was said to
            be the best and wisest man in all the land, while his manly beauty
            was so great that Gayelette loved him dearly, and hastened to make
            everything ready for the wedding.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;My grandfather was at that time the King of the Winged Monkeys
            which lived in the forest near Gayelette&amp;rsquo;s palace, and the old fellow
            loved a joke better than a good dinner. One day, just before the wedding,
            my grandfather was flying out with his band when he saw Quelala walking
            beside the river. He was dressed in a rich costume of pink silk and
            purple velvet, and my grandfather thought he would see what he could do.
            At his word the band flew down and seized Quelala, carried him in their
            arms until they were over the middle of the river, and then dropped him
            into the water.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;&amp;lsquo;Swim out, my fine fellow,&amp;rsquo; cried my grandfather, &amp;lsquo;and see if
            the water has spotted your clothes.&amp;rsquo; Quelala was much too wise
            not to swim, and he was not in the least spoiled by all his good
            fortune. He laughed, when he came to the top of the water, and
            swam in to shore. But when Gayelette came running out to him she
            found his silks and velvet all ruined by the river.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;The princess was angry, and she knew, of course, who did it.
            She had all the Winged Monkeys brought before her, and she said at
            first that their wings should be tied and they should be treated
            as they had treated Quelala, and dropped in the river. But my
            grandfather pleaded hard, for he knew the Monkeys would drown in
            the river with their wings tied, and Quelala said a kind word for
            them also; so that Gayelette finally spared them, on condition
            that the Winged Monkeys should ever after do three times the
            bidding of the owner of the Golden Cap. This Cap had been made
            for a wedding present to Quelala, and it is said to have cost the
            princess half her kingdom. Of course my grandfather and all the
            other Monkeys at once agreed to the condition, and that is how it
            happens that we are three times the slaves of the owner of the
            Golden Cap, whosoever he may be.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And what became of them?&amp;rdquo; asked Dorothy, who had been greatly
            interested in the story.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Quelala being the first owner of the Golden Cap,&amp;rdquo; replied
            the Monkey, &amp;ldquo;he was the first to lay his wishes upon us. As his
            bride could not bear the sight of us, he called us all to him in
            the forest after he had married her and ordered us always to keep
            where she could never again set eyes on a Winged Monkey, which we
            were glad to do, for we were all afraid of her.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;This was all we ever had to do until the Golden Cap fell into
            the hands of the Wicked Witch of the West, who made us enslave the
            Winkies, and afterward drive Oz himself out of the Land of the
            West. Now the Golden Cap is yours, and three times you have the
            right to lay your wishes upon us.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;As the Monkey King finished his story Dorothy looked down
            and saw the green, shining walls of the Emerald City before them.
            She wondered at the rapid flight of the Monkeys, but was glad the
            journey was over. The strange creatures set the travelers down
            carefully before the gate of the City, the King bowed low to
            Dorothy, and then flew swiftly away, followed by all his band.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That was a good ride,&amp;rdquo; said the little girl.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Yes, and a quick way out of our troubles,&amp;rdquo; replied the Lion.
        &amp;ldquo;How lucky it was you brought away that wonderful Cap!&amp;rdquo;
        &lt;/p&gt;
        
        
        &lt;h2&gt;The Discovery of Oz, the Terrible&lt;/h2&gt;
        
        &lt;p&gt;The four travelers walked up to the great gate of Emerald City
            and rang the bell. After ringing several times, it was opened by
            the same Guardian of the Gates they had met before.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What! are you back again?&amp;rdquo; he asked, in surprise.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Do you not see us?&amp;rdquo; answered the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;But I thought you had gone to visit the Wicked Witch of the West.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We did visit her,&amp;rdquo; said the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And she let you go again?&amp;rdquo; asked the man, in wonder.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;She could not help it, for she is melted,&amp;rdquo; explained the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Melted! Well, that is good news, indeed,&amp;rdquo; said the man.
        &amp;ldquo;Who melted her?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;It was Dorothy,&amp;rdquo; said the Lion gravely.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Good gracious!&amp;rdquo; exclaimed the man, and he bowed very low indeed
            before her.&lt;/p&gt;
        &lt;p&gt;Then he led them into his little room and locked the spectacles
            from the great box on all their eyes, just as he had done before.
            Afterward they passed on through the gate into the Emerald City.
            When the people heard from the Guardian of the Gates that Dorothy
            had melted the Wicked Witch of the West, they all gathered around
            the travelers and followed them in a great crowd to the Palace of Oz.&lt;/p&gt;
        &lt;p&gt;The soldier with the green whiskers was still on guard before
            the door, but he let them in at once, and they were again met by
            the beautiful green girl, who showed each of them to their old
            rooms at once, so they might rest until the Great Oz was ready to
            receive them.&lt;/p&gt;
        &lt;p&gt;The soldier had the news carried straight to Oz that Dorothy
            and the other travelers had come back again, after destroying the
            Wicked Witch; but Oz made no reply. They thought the Great Wizard
            would send for them at once, but he did not. They had no word
            from him the next day, nor the next, nor the next. The waiting
            was tiresome and wearing, and at last they grew vexed that Oz
            should treat them in so poor a fashion, after sending them to
            undergo hardships and slavery. So the Scarecrow at last asked the
            green girl to take another message to Oz, saying if he did not
            let them in to see him at once they would call the Winged Monkeys
            to help them, and find out whether he kept his promises or not.
            When the Wizard was given this message he was so frightened that he
            sent word for them to come to the Throne Room at four minutes after
            nine o&amp;rsquo;clock the next morning. He had once met the Winged Monkeys
            in the Land of the West, and he did not wish to meet them again.&lt;/p&gt;
        &lt;p&gt;The four travelers passed a sleepless night, each thinking of the
            gift Oz had promised to bestow on him. Dorothy fell asleep only once,
            and then she dreamed she was in Kansas, where Aunt Em was telling her
            how glad she was to have her little girl at home again.&lt;/p&gt;
        &lt;p&gt;Promptly at nine o&amp;rsquo;clock the next morning the green&amp;#8208;whiskered
            soldier came to them, and four minutes later they all went into
            the Throne Room of the Great Oz.&lt;/p&gt;
        &lt;p&gt;Of course each one of them expected to see the Wizard in the shape
            he had taken before, and all were greatly surprised when they looked
            about and saw no one at all in the room. They kept close to the door
            and closer to one another, for the stillness of the empty room was more
            dreadful than any of the forms they had seen Oz take.&lt;/p&gt;
        &lt;p&gt;Presently they heard a solemn Voice, that seemed to come from
            somewhere near the top of the great dome, and it said:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I am Oz, the Great and Terrible. Why do you seek me?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;They looked again in every part of the room, and then, seeing
            no one, Dorothy asked, &amp;ldquo;Where are you?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I am everywhere,&amp;rdquo; answered the Voice, &amp;ldquo;but to the eyes of
            common mortals I am invisible. I will now seat myself upon my
            throne, that you may converse with me.&amp;rdquo; Indeed, the Voice seemed
            just then to come straight from the throne itself; so they walked
            toward it and stood in a row while Dorothy said:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We have come to claim our promise, O Oz.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What promise?&amp;rdquo; asked Oz.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;You promised to send me back to Kansas when the Wicked Witch
            was destroyed,&amp;rdquo; said the girl.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And you promised to give me brains,&amp;rdquo; said the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And you promised to give me a heart,&amp;rdquo; said the Tin Woodman.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And you promised to give me courage,&amp;rdquo; said the Cowardly Lion.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Is the Wicked Witch really destroyed?&amp;rdquo; asked the Voice,
            and Dorothy thought it trembled a little.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Yes,&amp;rdquo; she answered, &amp;ldquo;I melted her with a bucket of water.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Dear me,&amp;rdquo; said the Voice, &amp;ldquo;how sudden! Well, come to me
            tomorrow, for I must have time to think it over.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;You&amp;rsquo;ve had plenty of time already,&amp;rdquo; said the Tin Woodman angrily.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We shan&amp;rsquo;t wait a day longer,&amp;rdquo; said the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;You must keep your promises to us!&amp;rdquo; exclaimed Dorothy.&lt;/p&gt;
        &lt;p&gt;The Lion thought it might be as well to frighten the Wizard,
            so he gave a large, loud roar, which was so fierce and dreadful
            that Toto jumped away from him in alarm and tipped over the screen
            that stood in a corner. As it fell with a crash they looked
            that way, and the next moment all of them were filled with wonder.
            For they saw, standing in just the spot the screen had hidden,
            a little old man, with a bald head and a wrinkled face, who seemed
            to be as much surprised as they were. The Tin Woodman, raising
            his axe, rushed toward the little man and cried out, &amp;ldquo;Who are you?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I am Oz, the Great and Terrible,&amp;rdquo; said the little man, in a
            trembling voice. &amp;ldquo;But don&amp;rsquo;t strike me&amp;mdash;please don&amp;rsquo;t&amp;mdash;and I&amp;rsquo;ll
            do anything you want me to.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Our friends looked at him in surprise and dismay.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I thought Oz was a great Head,&amp;rdquo; said Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And I thought Oz was a lovely Lady,&amp;rdquo; said the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And I thought Oz was a terrible Beast,&amp;rdquo; said the Tin Woodman.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And I thought Oz was a Ball of Fire,&amp;rdquo; exclaimed the Lion.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;No, you are all wrong,&amp;rdquo; said the little man meekly. &amp;ldquo;I have
            been making believe.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Making believe!&amp;rdquo; cried Dorothy. &amp;ldquo;Are you not a Great Wizard?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Hush, my dear,&amp;rdquo; he said. &amp;ldquo;Don&amp;rsquo;t speak so loud, or you will be
            overheard&amp;mdash;and I should be ruined. I&amp;rsquo;m supposed to be a Great Wizard.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And aren&amp;rsquo;t you?&amp;rdquo; she asked.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Not a bit of it, my dear; I&amp;rsquo;m just a common man.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;You&amp;rsquo;re more than that,&amp;rdquo; said the Scarecrow, in a grieved tone;
        &amp;ldquo;you&amp;rsquo;re a humbug.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Exactly so!&amp;rdquo; declared the little man, rubbing his hands
            together as if it pleased him. &amp;ldquo;I am a humbug.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;But this is terrible,&amp;rdquo; said the Tin Woodman. &amp;ldquo;How shall I
            ever get my heart?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Or I my courage?&amp;rdquo; asked the Lion.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Or I my brains?&amp;rdquo; wailed the Scarecrow, wiping the tears from
            his eyes with his coat sleeve.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;My dear friends,&amp;rdquo; said Oz, &amp;ldquo;I pray you not to speak of these
            little things. Think of me, and the terrible trouble I&amp;rsquo;m in at
            being found out.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Doesn&amp;rsquo;t anyone else know you&amp;rsquo;re a humbug?&amp;rdquo; asked Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;No one knows it but you four&amp;mdash;and myself,&amp;rdquo; replied Oz. &amp;ldquo;I
            have fooled everyone so long that I thought I should never be
            found out. It was a great mistake my ever letting you into the
            Throne Room. Usually I will not see even my subjects, and so they
            believe I am something terrible.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;But, I don&amp;rsquo;t understand,&amp;rdquo; said Dorothy, in bewilderment.
        &amp;ldquo;How was it that you appeared to me as a great Head?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That was one of my tricks,&amp;rdquo; answered Oz. &amp;ldquo;Step this way,
            please, and I will tell you all about it.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;He led the way to a small chamber in the rear of the Throne
            Room, and they all followed him. He pointed to one corner, in
            which lay the great Head, made out of many thicknesses of paper,
            and with a carefully painted face.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;This I hung from the ceiling by a wire,&amp;rdquo; said Oz. &amp;ldquo;I stood
            behind the screen and pulled a thread, to make the eyes move and
            the mouth open.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;But how about the voice?&amp;rdquo; she inquired.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, I am a ventriloquist,&amp;rdquo; said the little man. &amp;ldquo;I can throw
            the sound of my voice wherever I wish, so that you thought it was
            coming out of the Head. Here are the other things I used to
            deceive you.&amp;rdquo; He showed the Scarecrow the dress and the mask he
            had worn when he seemed to be the lovely Lady. And the Tin
            Woodman saw that his terrible Beast was nothing but a lot of
            skins, sewn together, with slats to keep their sides out. As for
            the Ball of Fire, the false Wizard had hung that also from the
            ceiling. It was really a ball of cotton, but when oil was poured
            upon it the ball burned fiercely.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Really,&amp;rdquo; said the Scarecrow, &amp;ldquo;you ought to be ashamed of
            yourself for being such a humbug.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I am&amp;mdash;I certainly am,&amp;rdquo; answered the little man sorrowfully;
        &amp;ldquo;but it was the only thing I could do. Sit down, please, there
            are plenty of chairs; and I will tell you my story.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So they sat down and listened while he told the following tale.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I was born in Omaha&amp;mdash;&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Why, that isn&amp;rsquo;t very far from Kansas!&amp;rdquo; cried Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;No, but it&amp;rsquo;s farther from here,&amp;rdquo; he said, shaking his head at
            her sadly. &amp;ldquo;When I grew up I became a ventriloquist, and at that
            I was very well trained by a great master. I can imitate any kind
            of a bird or beast.&amp;rdquo; Here he mewed so like a kitten that Toto
            pricked up his ears and looked everywhere to see where she was.
        &amp;ldquo;After a time,&amp;rdquo; continued Oz, &amp;ldquo;I tired of that, and became a
            balloonist.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What is that?&amp;rdquo; asked Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;A man who goes up in a balloon on circus day, so as to draw a
            crowd of people together and get them to pay to see the circus,&amp;rdquo;
            he explained.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh,&amp;rdquo; she said, &amp;ldquo;I know.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Well, one day I went up in a balloon and the ropes got
            twisted, so that I couldn&amp;rsquo;t come down again. It went way up above
            the clouds, so far that a current of air struck it and carried it
            many, many miles away. For a day and a night I traveled through
            the air, and on the morning of the second day I awoke and found
            the balloon floating over a strange and beautiful country.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;It came down gradually, and I was not hurt a bit. But I
            found myself in the midst of a strange people, who, seeing me come
            from the clouds, thought I was a great Wizard. Of course I let
            them think so, because they were afraid of me, and promised to do
            anything I wished them to.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Just to amuse myself, and keep the good people busy, I
            ordered them to build this City, and my Palace; and they did it
            all willingly and well. Then I thought, as the country was so
            green and beautiful, I would call it the Emerald City; and to make
            the name fit better I put green spectacles on all the people, so
            that everything they saw was green.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;But isn&amp;rsquo;t everything here green?&amp;rdquo; asked Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;No more than in any other city,&amp;rdquo; replied Oz; &amp;ldquo;but when you
            wear green spectacles, why of course everything you see looks
            green to you. The Emerald City was built a great many years ago,
            for I was a young man when the balloon brought me here, and I am a
            very old man now. But my people have worn green glasses on their
            eyes so long that most of them think it really is an Emerald City,
            and it certainly is a beautiful place, abounding in jewels and
            precious metals, and every good thing that is needed to make
            one happy. I have been good to the people, and they like me;
            but ever since this Palace was built, I have shut myself up
            and would not see any of them.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;One of my greatest fears was the Witches, for while I had no
            magical powers at all I soon found out that the Witches were
            really able to do wonderful things. There were four of them in
            this country, and they ruled the people who live in the North and
            South and East and West. Fortunately, the Witches of the North
            and South were good, and I knew they would do me no harm; but the
            Witches of the East and West were terribly wicked, and had they
            not thought I was more powerful than they themselves, they would
            surely have destroyed me. As it was, I lived in deadly fear of
            them for many years; so you can imagine how pleased I was when
            I heard your house had fallen on the Wicked Witch of the East.
            When you came to me, I was willing to promise anything if you
            would only do away with the other Witch; but, now that you have
            melted her, I am ashamed to say that I cannot keep my promises.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I think you are a very bad man,&amp;rdquo; said Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, no, my dear; I&amp;rsquo;m really a very good man, but I&amp;rsquo;m a very
            bad Wizard, I must admit.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Can&amp;rsquo;t you give me brains?&amp;rdquo; asked the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;You don&amp;rsquo;t need them. You are learning something every day.
            A baby has brains, but it doesn&amp;rsquo;t know much. Experience is the
            only thing that brings knowledge, and the longer you are on earth
            the more experience you are sure to get.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That may all be true,&amp;rdquo; said the Scarecrow, &amp;ldquo;but I shall be
            very unhappy unless you give me brains.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The false Wizard looked at him carefully.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Well,&amp;rdquo; he said with a sigh, &amp;ldquo;I&amp;rsquo;m not much of a magician,
            as I said; but if you will come to me tomorrow morning, I will
            stuff your head with brains. I cannot tell you how to use them,
            however; you must find that out for yourself.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, thank you&amp;mdash;thank you!&amp;rdquo; cried the Scarecrow. &amp;ldquo;I&amp;rsquo;ll find
            a way to use them, never fear!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;But how about my courage?&amp;rdquo; asked the Lion anxiously.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;You have plenty of courage, I am sure,&amp;rdquo; answered Oz. &amp;ldquo;All you need
            is confidence in yourself. There is no living thing that is not afraid
            when it faces danger. The True courage is in facing danger when you are
            afraid, and that kind of courage you have in plenty.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Perhaps I have, but I&amp;rsquo;m scared just the same,&amp;rdquo; said the Lion.
        &amp;ldquo;I shall really be very unhappy unless you give me the sort of
            courage that makes one forget he is afraid.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Very well, I will give you that sort of courage tomorrow,&amp;rdquo;
            replied Oz.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;How about my heart?&amp;rdquo; asked the Tin Woodman.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Why, as for that,&amp;rdquo; answered Oz, &amp;ldquo;I think you are wrong to
            want a heart. It makes most people unhappy. If you only knew it,
            you are in luck not to have a heart.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That must be a matter of opinion,&amp;rdquo; said the Tin Woodman.
        &amp;ldquo;For my part, I will bear all the unhappiness without a murmur,
            if you will give me the heart.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Very well,&amp;rdquo; answered Oz meekly. &amp;ldquo;Come to me tomorrow and you
            shall have a heart. I have played Wizard for so many years that I
            may as well continue the part a little longer.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And now,&amp;rdquo; said Dorothy, &amp;ldquo;how am I to get back to Kansas?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We shall have to think about that,&amp;rdquo; replied the little man.
        &amp;ldquo;Give me two or three days to consider the matter and I&amp;rsquo;ll try to
            find a way to carry you over the desert. In the meantime you
            shall all be treated as my guests, and while you live in the Palace
            my people will wait upon you and obey your slightest wish. There is
            only one thing I ask in return for my help&amp;mdash;such as it is. You must
            keep my secret and tell no one I am a humbug.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;They agreed to say nothing of what they had learned, and went
            back to their rooms in high spirits. Even Dorothy had hope that
        &amp;ldquo;The Great and Terrible Humbug,&amp;rdquo; as she called him, would find a
            way to send her back to Kansas, and if he did she was willing to
            forgive him everything.
        &lt;/p&gt;
        
        
        &lt;h2&gt;The Magic Art of the Great Humbug&lt;/h2&gt;
        
        &lt;p&gt;Next morning the Scarecrow said to his friends:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Congratulate me. I am going to Oz to get my brains at last.
            When I return I shall be as other men are.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I have always liked you as you were,&amp;rdquo; said Dorothy simply.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;It is kind of you to like a Scarecrow,&amp;rdquo; he replied. &amp;ldquo;But surely
            you will think more of me when you hear the splendid thoughts my new
            brain is going to turn out.&amp;rdquo; Then he said good&amp;#8208;bye to them all in a
            cheerful voice and went to the Throne Room, where he rapped upon the door.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Come in,&amp;rdquo; said Oz.&lt;/p&gt;
        &lt;p&gt;The Scarecrow went in and found the little man sitting down by
            the window, engaged in deep thought.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I have come for my brains,&amp;rdquo; remarked the Scarecrow, a little uneasily.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, yes; sit down in that chair, please,&amp;rdquo; replied Oz. &amp;ldquo;You must
            excuse me for taking your head off, but I shall have to do it in order
            to put your brains in their proper place.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That&amp;rsquo;s all right,&amp;rdquo; said the Scarecrow. &amp;ldquo;You are quite welcome to take
            my head off, as long as it will be a better one when you put it on again.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So the Wizard unfastened his head and emptied out the straw.
            Then he entered the back room and took up a measure of bran, which
            he mixed with a great many pins and needles. Having shaken them
            together thoroughly, he filled the top of the Scarecrow&amp;rsquo;s head with
            the mixture and stuffed the rest of the space with straw, to hold
            it in place.&lt;/p&gt;
        &lt;p&gt;When he had fastened the Scarecrow&amp;rsquo;s head on his body again he
            said to him, &amp;ldquo;Hereafter you will be a great man, for I have given
            you a lot of bran&amp;#8208;new brains.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The Scarecrow was both pleased and proud at the fulfillment of
            his greatest wish, and having thanked Oz warmly he went back to
            his friends.&lt;/p&gt;
        &lt;p&gt;Dorothy looked at him curiously. His head was quite bulged
            out at the top with brains.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;How do you feel?&amp;rdquo; she asked.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I feel wise indeed,&amp;rdquo; he answered earnestly. &amp;ldquo;When I get used
            to my brains I shall know everything.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Why are those needles and pins sticking out of your head?&amp;rdquo;
            asked the Tin Woodman.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That is proof that he is sharp,&amp;rdquo; remarked the Lion.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Well, I must go to Oz and get my heart,&amp;rdquo; said the Woodman.
            So he walked to the Throne Room and knocked at the door.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Come in,&amp;rdquo; called Oz, and the Woodman entered and said,
        &amp;ldquo;I have come for my heart.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Very well,&amp;rdquo; answered the little man. &amp;ldquo;But I shall have to cut
            a hole in your breast, so I can put your heart in the right place.
            I hope it won&amp;rsquo;t hurt you.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, no,&amp;rdquo; answered the Woodman. &amp;ldquo;I shall not feel it at all.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So Oz brought a pair of tinsmith&amp;rsquo;s shears and cut a small,
            square hole in the left side of the Tin Woodman&amp;rsquo;s breast.
            Then, going to a chest of drawers, he took out a pretty heart,
            made entirely of silk and stuffed with sawdust.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Isn&amp;rsquo;t it a beauty?&amp;rdquo; he asked.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;It is, indeed!&amp;rdquo; replied the Woodman, who was greatly pleased.
        &amp;ldquo;But is it a kind heart?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, very!&amp;rdquo; answered Oz. He put the heart in the Woodman&amp;rsquo;s
            breast and then replaced the square of tin, soldering it neatly
            together where it had been cut.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;There,&amp;rdquo; said he; &amp;ldquo;now you have a heart that any man might be
            proud of. I&amp;rsquo;m sorry I had to put a patch on your breast, but it
            really couldn&amp;rsquo;t be helped.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Never mind the patch,&amp;rdquo; exclaimed the happy Woodman. &amp;ldquo;I am
            very grateful to you, and shall never forget your kindness.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Don&amp;rsquo;t speak of it,&amp;rdquo; replied Oz.&lt;/p&gt;
        &lt;p&gt;Then the Tin Woodman went back to his friends, who wished him
            every joy on account of his good fortune.&lt;/p&gt;
        &lt;p&gt;The Lion now walked to the Throne Room and knocked at the door.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Come in,&amp;rdquo; said Oz.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I have come for my courage,&amp;rdquo; announced the Lion, entering the room.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Very well,&amp;rdquo; answered the little man; &amp;ldquo;I will get it for you.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;He went to a cupboard and reaching up to a high shelf took
            down a square green bottle, the contents of which he poured into
            a green&amp;#8208;gold dish, beautifully carved. Placing this before the
            Cowardly Lion, who sniffed at it as if he did not like it, the
            Wizard said:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Drink.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What is it?&amp;rdquo; asked the Lion.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Well,&amp;rdquo; answered Oz, &amp;ldquo;if it were inside of you, it would be courage.
            You know, of course, that courage is always inside one; so that this
            really cannot be called courage until you have swallowed it. Therefore
            I advise you to drink it as soon as possible.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The Lion hesitated no longer, but drank till the dish was empty.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;How do you feel now?&amp;rdquo; asked Oz.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Full of courage,&amp;rdquo; replied the Lion, who went joyfully back to
            his friends to tell them of his good fortune.&lt;/p&gt;
        &lt;p&gt;Oz, left to himself, smiled to think of his success in giving
            the Scarecrow and the Tin Woodman and the Lion exactly what they
            thought they wanted. &amp;ldquo;How can I help being a humbug,&amp;rdquo; he said,
        &amp;ldquo;when all these people make me do things that everybody knows
            can&amp;rsquo;t be done? It was easy to make the Scarecrow and the Lion
            and the Woodman happy, because they imagined I could do anything.
            But it will take more than imagination to carry Dorothy back
            to Kansas, and I&amp;rsquo;m sure I don&amp;rsquo;t know how it can be done.&amp;rdquo;
        &lt;/p&gt;
        
        
        &lt;h2&gt;How the Balloon Was Launched&lt;/h2&gt;
        
        &lt;p&gt;For three days Dorothy heard nothing from Oz. These were sad
            days for the little girl, although her friends were all quite
            happy and contented. The Scarecrow told them there were wonderful
            thoughts in his head; but he would not say what they were because
            he knew no one could understand them but himself. When the Tin
            Woodman walked about he felt his heart rattling around in his
            breast; and he told Dorothy he had discovered it to be a kinder
            and more tender heart than the one he had owned when he was made
            of flesh. The Lion declared he was afraid of nothing on earth,
            and would gladly face an army or a dozen of the fierce Kalidahs.&lt;/p&gt;
        
        &lt;p&gt;Thus each of the little party was satisfied except Dorothy,
            who longed more than ever to get back to Kansas.&lt;/p&gt;
        &lt;p&gt;On the fourth day, to her great joy, Oz sent for her, and when
            she entered the Throne Room he greeted her pleasantly:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Sit down, my dear; I think I have found the way to get you
            out of this country.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And back to Kansas?&amp;rdquo; she asked eagerly.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Well, I&amp;rsquo;m not sure about Kansas,&amp;rdquo; said Oz, &amp;ldquo;for I haven&amp;rsquo;t the
            faintest notion which way it lies. But the first thing to do is to
            cross the desert, and then it should be easy to find your way home.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;How can I cross the desert?&amp;rdquo; she inquired.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Well, I&amp;rsquo;ll tell you what I think,&amp;rdquo; said the little man.
        &amp;ldquo;You see, when I came to this country it was in a balloon. You also
            came through the air, being carried by a cyclone. So I believe
            the best way to get across the desert will be through the air.
            Now, it is quite beyond my powers to make a cyclone; but I&amp;rsquo;ve been
            thinking the matter over, and I believe I can make a balloon.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;How?&amp;rdquo; asked Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;A balloon,&amp;rdquo; said Oz, &amp;ldquo;is made of silk, which is coated with
            glue to keep the gas in it. I have plenty of silk in the Palace,
            so it will be no trouble to make the balloon. But in all this
            country there is no gas to fill the balloon with, to make it float.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;If it won&amp;rsquo;t float,&amp;rdquo; remarked Dorothy, &amp;ldquo;it will be of no use to us.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;True,&amp;rdquo; answered Oz. &amp;ldquo;But there is another way to make it
            float, which is to fill it with hot air. Hot air isn&amp;rsquo;t as good as
            gas, for if the air should get cold the balloon would come down in
            the desert, and we should be lost.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We!&amp;rdquo; exclaimed the girl. &amp;ldquo;Are you going with me?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Yes, of course,&amp;rdquo; replied Oz. &amp;ldquo;I am tired of being such a humbug.
            If I should go out of this Palace my people would soon discover I am not
            a Wizard, and then they would be vexed with me for having deceived them.
            So I have to stay shut up in these rooms all day, and it gets tiresome.
            I&amp;rsquo;d much rather go back to Kansas with you and be in a circus again.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I shall be glad to have your company,&amp;rdquo; said Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Thank you,&amp;rdquo; he answered. &amp;ldquo;Now, if you will help me sew the
            silk together, we will begin to work on our balloon.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So Dorothy took a needle and thread, and as fast as Oz cut the
            strips of silk into proper shape the girl sewed them neatly together.
            First there was a strip of light green silk, then a strip of dark green
            and then a strip of emerald green; for Oz had a fancy to make the balloon
            in different shades of the color about them. It took three days to sew
            all the strips together, but when it was finished they had a big bag of
            green silk more than twenty feet long.&lt;/p&gt;
        &lt;p&gt;Then Oz painted it on the inside with a coat of thin glue, to make
            it airtight, after which he announced that the balloon was ready.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;But we must have a basket to ride in,&amp;rdquo; he said. So he sent
            the soldier with the green whiskers for a big clothes basket,
            which he fastened with many ropes to the bottom of the balloon.&lt;/p&gt;
        &lt;p&gt;When it was all ready, Oz sent word to his people that he was
            going to make a visit to a great brother Wizard who lived in the clouds.
            The news spread rapidly throughout the city and everyone came to see the
            wonderful sight.&lt;/p&gt;
        &lt;p&gt;Oz ordered the balloon carried out in front of the Palace,
            and the people gazed upon it with much curiosity. The Tin Woodman
            had chopped a big pile of wood, and now he made a fire of it,
            and Oz held the bottom of the balloon over the fire so that the
            hot air that arose from it would be caught in the silken bag.
            Gradually the balloon swelled out and rose into the air, until
            finally the basket just touched the ground.&lt;/p&gt;
        &lt;p&gt;Then Oz got into the basket and said to all the people in a
            loud voice:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I am now going away to make a visit. While I am gone the
            Scarecrow will rule over you. I command you to obey him as you
            would me.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The balloon was by this time tugging hard at the rope that
            held it to the ground, for the air within it was hot, and this
            made it so much lighter in weight than the air without that it
            pulled hard to rise into the sky.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Come, Dorothy!&amp;rdquo; cried the Wizard. &amp;ldquo;Hurry up, or the balloon
            will fly away.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I can&amp;rsquo;t find Toto anywhere,&amp;rdquo; replied Dorothy, who did not
            wish to leave her little dog behind. Toto had run into the crowd
            to bark at a kitten, and Dorothy at last found him. She picked
            him up and ran towards the balloon.&lt;/p&gt;
        &lt;p&gt;She was within a few steps of it, and Oz was holding out his
            hands to help her into the basket, when, crack! went the ropes,
            and the balloon rose into the air without her.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Come back!&amp;rdquo; she screamed. &amp;ldquo;I want to go, too!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I can&amp;rsquo;t come back, my dear,&amp;rdquo; called Oz from the basket.
        &amp;ldquo;Good&amp;#8208;bye!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Good&amp;#8208;bye!&amp;rdquo; shouted everyone, and all eyes were turned upward
            to where the Wizard was riding in the basket, rising every moment
            farther and farther into the sky.&lt;/p&gt;
        &lt;p&gt;And that was the last any of them ever saw of Oz, the
            Wonderful Wizard, though he may have reached Omaha safely,
            and be there now, for all we know. But the people remembered
            him lovingly, and said to one another:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oz was always our friend. When he was here he built for us
            this beautiful Emerald City, and now he is gone he has left the
            Wise Scarecrow to rule over us.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Still, for many days they grieved over the loss of the
            Wonderful Wizard, and would not be comforted.
        &lt;/p&gt;
        
        
        &lt;h2&gt;Away to the South&lt;/h2&gt;
        
        &lt;p&gt;Dorothy wept bitterly at the passing of her hope to get home
            to Kansas again; but when she thought it all over she was glad she
            had not gone up in a balloon. And she also felt sorry at losing
            Oz, and so did her companions.&lt;/p&gt;
        
        &lt;p&gt;The Tin Woodman came to her and said:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Truly I should be ungrateful if I failed to mourn for the
            man who gave me my lovely heart. I should like to cry a little
            because Oz is gone, if you will kindly wipe away my tears, so that
            I shall not rust.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;With pleasure,&amp;rdquo; she answered, and brought a towel at once.
            Then the Tin Woodman wept for several minutes, and she watched the
            tears carefully and wiped them away with the towel. When he had
            finished, he thanked her kindly and oiled himself thoroughly with
            his jeweled oil&amp;#8208;can, to guard against mishap.&lt;/p&gt;
        &lt;p&gt;The Scarecrow was now the ruler of the Emerald City,
            and although he was not a Wizard the people were proud of him.
        &amp;ldquo;For,&amp;rdquo; they said, &amp;ldquo;there is not another city in all the world
            that is ruled by a stuffed man.&amp;rdquo; And, so far as they knew,
            they were quite right.&lt;/p&gt;
        &lt;p&gt;The morning after the balloon had gone up with Oz, the
            four travelers met in the Throne Room and talked matters over.
            The Scarecrow sat in the big throne and the others stood
            respectfully before him.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We are not so unlucky,&amp;rdquo; said the new ruler, &amp;ldquo;for this Palace
            and the Emerald City belong to us, and we can do just as we please.
            When I remember that a short time ago I was up on a pole in a farmer&amp;rsquo;s
            cornfield, and that now I am the ruler of this beautiful City, I am
            quite satisfied with my lot.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I also,&amp;rdquo; said the Tin Woodman, &amp;ldquo;am well&amp;#8208;pleased with my new heart;
            and, really, that was the only thing I wished in all the world.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;For my part, I am content in knowing I am as brave as any
            beast that ever lived, if not braver,&amp;rdquo; said the Lion modestly.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;If Dorothy would only be contented to live in the Emerald City,&amp;rdquo;
            continued the Scarecrow, &amp;ldquo;we might all be happy together.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;But I don&amp;rsquo;t want to live here,&amp;rdquo; cried Dorothy. &amp;ldquo;I want to go
            to Kansas, and live with Aunt Em and Uncle Henry.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Well, then, what can be done?&amp;rdquo; inquired the Woodman.&lt;/p&gt;
        &lt;p&gt;The Scarecrow decided to think, and he thought so hard that the
            pins and needles began to stick out of his brains. Finally he said:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Why not call the Winged Monkeys, and ask them to carry you
            over the desert?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I never thought of that!&amp;rdquo; said Dorothy joyfully. &amp;ldquo;It&amp;rsquo;s just
            the thing. I&amp;rsquo;ll go at once for the Golden Cap.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;When she brought it into the Throne Room she spoke the magic
            words, and soon the band of Winged Monkeys flew in through the
            open window and stood beside her.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;This is the second time you have called us,&amp;rdquo; said the Monkey
            King, bowing before the little girl. &amp;ldquo;What do you wish?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I want you to fly with me to Kansas,&amp;rdquo; said Dorothy.&lt;/p&gt;
        &lt;p&gt;But the Monkey King shook his head.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That cannot be done,&amp;rdquo; he said. &amp;ldquo;We belong to this country alone,
            and cannot leave it. There has never been a Winged Monkey in Kansas yet,
            and I suppose there never will be, for they don&amp;rsquo;t belong there. We shall
            be glad to serve you in any way in our power, but we cannot cross the desert.
            Good&amp;#8208;bye.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;And with another bow, the Monkey King spread his wings and
            flew away through the window, followed by all his band.&lt;/p&gt;
        &lt;p&gt;Dorothy was ready to cry with disappointment. &amp;ldquo;I have wasted
            the charm of the Golden Cap to no purpose,&amp;rdquo; she said, &amp;ldquo;for the
            Winged Monkeys cannot help me.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;It is certainly too bad!&amp;rdquo; said the tender&amp;#8208;hearted Woodman.&lt;/p&gt;
        &lt;p&gt;The Scarecrow was thinking again, and his head bulged out so
            horribly that Dorothy feared it would burst.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Let us call in the soldier with the green whiskers,&amp;rdquo; he said,
        &amp;ldquo;and ask his advice.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So the soldier was summoned and entered the Throne Room
            timidly, for while Oz was alive he never was allowed to come
            farther than the door.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;This little girl,&amp;rdquo; said the Scarecrow to the soldier,
        &amp;ldquo;wishes to cross the desert. How can she do so?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I cannot tell,&amp;rdquo; answered the soldier, &amp;ldquo;for nobody has ever
            crossed the desert, unless it is Oz himself.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Is there no one who can help me?&amp;rdquo; asked Dorothy earnestly.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Glinda might,&amp;rdquo; he suggested.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Who is Glinda?&amp;rdquo; inquired the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;The Witch of the South. She is the most powerful of all the
            Witches, and rules over the Quadlings. Besides, her castle stands
            on the edge of the desert, so she may know a way to cross it.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Glinda is a Good Witch, isn&amp;rsquo;t she?&amp;rdquo; asked the child.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;The Quadlings think she is good,&amp;rdquo; said the soldier, &amp;ldquo;and she
            is kind to everyone. I have heard that Glinda is a beautiful woman,
            who knows how to keep young in spite of the many years she has lived.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;How can I get to her castle?&amp;rdquo; asked Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;The road is straight to the South,&amp;rdquo; he answered, &amp;ldquo;but it is
            said to be full of dangers to travelers. There are wild beasts in
            the woods, and a race of queer men who do not like strangers to
            cross their country. For this reason none of the Quadlings ever
            come to the Emerald City.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The soldier then left them and the Scarecrow said:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;It seems, in spite of dangers, that the best thing Dorothy
            can do is to travel to the Land of the South and ask Glinda to
            help her. For, of course, if Dorothy stays here she will never
            get back to Kansas.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;You must have been thinking again,&amp;rdquo; remarked the Tin Woodman.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I have,&amp;rdquo; said the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I shall go with Dorothy,&amp;rdquo; declared the Lion, &amp;ldquo;for I am
            tired of your city and long for the woods and the country again.
            I am really a wild beast, you know. Besides, Dorothy will need
            someone to protect her.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That is true,&amp;rdquo; agreed the Woodman. &amp;ldquo;My axe may be of service
            to her; so I also will go with her to the Land of the South.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;When shall we start?&amp;rdquo; asked the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Are you going?&amp;rdquo; they asked, in surprise.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Certainly. If it wasn&amp;rsquo;t for Dorothy I should never have had brains.
            She lifted me from the pole in the cornfield and brought me to the
            Emerald City. So my good luck is all due to her, and I shall never
            leave her until she starts back to Kansas for good and all.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Thank you,&amp;rdquo; said Dorothy gratefully. &amp;ldquo;You are all very kind
            to me. But I should like to start as soon as possible.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We shall go tomorrow morning,&amp;rdquo; returned the Scarecrow. &amp;ldquo;So
            now let us all get ready, for it will be a long journey.&amp;rdquo;
        &lt;/p&gt;
        
        
        &lt;h2&gt;Attacked by the Fighting Trees&lt;/h2&gt;
        
        &lt;p&gt;The next morning Dorothy kissed the pretty green girl good&amp;#8208;bye,
            and they all shook hands with the soldier with the green whiskers,
            who had walked with them as far as the gate. When the Guardian of
            the Gate saw them again he wondered greatly that they could leave
            the beautiful City to get into new trouble. But he at once
            unlocked their spectacles, which he put back into the green box,
            and gave them many good wishes to carry with them.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;You are now our ruler,&amp;rdquo; he said to the Scarecrow;
        &amp;ldquo;so you must come back to us as soon as possible.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I certainly shall if I am able,&amp;rdquo; the Scarecrow replied;
        &amp;ldquo;but I must help Dorothy to get home, first.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;As Dorothy bade the good&amp;#8208;natured Guardian a last farewell she said:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I have been very kindly treated in your lovely City, and
            everyone has been good to me. I cannot tell you how grateful I am.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Don&amp;rsquo;t try, my dear,&amp;rdquo; he answered. &amp;ldquo;We should like to keep
            you with us, but if it is your wish to return to Kansas, I hope
            you will find a way.&amp;rdquo; He then opened the gate of the outer wall,
            and they walked forth and started upon their journey.&lt;/p&gt;
        &lt;p&gt;The sun shone brightly as our friends turned their faces
            toward the Land of the South. They were all in the best of spirits,
            and laughed and chatted together. Dorothy was once more filled with
            the hope of getting home, and the Scarecrow and the Tin Woodman were
            glad to be of use to her. As for the Lion, he sniffed the fresh air
            with delight and whisked his tail from side to side in pure joy at
            being in the country again, while Toto ran around them and chased
            the moths and butterflies, barking merrily all the time.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;City life does not agree with me at all,&amp;rdquo; remarked the Lion,
            as they walked along at a brisk pace. &amp;ldquo;I have lost much flesh
            since I lived there, and now I am anxious for a chance to show the
            other beasts how courageous I have grown.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;They now turned and took a last look at the Emerald City.
            All they could see was a mass of towers and steeples behind the
            green walls, and high up above everything the spires and dome
            of the Palace of Oz.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oz was not such a bad Wizard, after all,&amp;rdquo; said the Tin
            Woodman, as he felt his heart rattling around in his breast.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;He knew how to give me brains, and very good brains, too,&amp;rdquo;
            said the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;If Oz had taken a dose of the same courage he gave me,&amp;rdquo;
            added the Lion, &amp;ldquo;he would have been a brave man.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Dorothy said nothing. Oz had not kept the promise he made her,
            but he had done his best, so she forgave him. As he said, he was
            a good man, even if he was a bad Wizard.&lt;/p&gt;
        &lt;p&gt;The first day&amp;rsquo;s journey was through the green fields and
            bright flowers that stretched about the Emerald City on every side.
            They slept that night on the grass, with nothing but the stars
            over them; and they rested very well indeed.&lt;/p&gt;
        &lt;p&gt;In the morning they traveled on until they came to a thick wood.
            There was no way of going around it, for it seemed to extend to the
            right and left as far as they could see; and, besides, they did not
            dare change the direction of their journey for fear of getting lost.
            So they looked for the place where it would be easiest to get into
            the forest.&lt;/p&gt;
        &lt;p&gt;The Scarecrow, who was in the lead, finally discovered a big
            tree with such wide&amp;#8208;spreading branches that there was room for the
            party to pass underneath. So he walked forward to the tree, but
            just as he came under the first branches they bent down and twined
            around him, and the next minute he was raised from the ground and
            flung headlong among his fellow travelers.&lt;/p&gt;
        &lt;p&gt;This did not hurt the Scarecrow, but it surprised him, and he
            looked rather dizzy when Dorothy picked him up.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Here is another space between the trees,&amp;rdquo; called the Lion.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Let me try it first,&amp;rdquo; said the Scarecrow, &amp;ldquo;for it doesn&amp;rsquo;t hurt
            me to get thrown about.&amp;rdquo; He walked up to another tree, as he spoke,
            but its branches immediately seized him and tossed him back again.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;This is strange,&amp;rdquo; exclaimed Dorothy. &amp;ldquo;What shall we do?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;The trees seem to have made up their minds to fight us,
            and stop our journey,&amp;rdquo; remarked the Lion.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I believe I will try it myself,&amp;rdquo; said the Woodman, and
            shouldering his axe, he marched up to the first tree that had
            handled the Scarecrow so roughly. When a big branch bent down to
            seize him the Woodman chopped at it so fiercely that he cut it in two.
            At once the tree began shaking all its branches as if in pain, and the
            Tin Woodman passed safely under it.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Come on!&amp;rdquo; he shouted to the others. &amp;ldquo;Be quick!&amp;rdquo; They all
            ran forward and passed under the tree without injury, except Toto,
            who was caught by a small branch and shaken until he howled.
            But the Woodman promptly chopped off the branch and set the
            little dog free.&lt;/p&gt;
        &lt;p&gt;The other trees of the forest did nothing to keep them back,
            so they made up their minds that only the first row of trees could
            bend down their branches, and that probably these were the
            policemen of the forest, and given this wonderful power in order
            to keep strangers out of it.&lt;/p&gt;
        &lt;p&gt;The four travelers walked with ease through the trees until they
            came to the farther edge of the wood. Then, to their surprise, they
            found before them a high wall which seemed to be made of white china.
            It was smooth, like the surface of a dish, and higher than their heads.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What shall we do now?&amp;rdquo; asked Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I will make a ladder,&amp;rdquo; said the Tin Woodman, &amp;ldquo;for we certainly
            must climb over the wall.&amp;rdquo;
        &lt;/p&gt;
        
        
        &lt;h2&gt;The Dainty China Country&lt;/h2&gt;
        
        &lt;p&gt;While the Woodman was making a ladder from wood which he found
            in the forest Dorothy lay down and slept, for she was tired by the
            long walk. The Lion also curled himself up to sleep and Toto lay
            beside him.&lt;/p&gt;
        &lt;p&gt;The Scarecrow watched the Woodman while he worked, and said to him:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I cannot think why this wall is here, nor what it is made of.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Rest your brains and do not worry about the wall,&amp;rdquo; replied the Woodman.
        &amp;ldquo;When we have climbed over it, we shall know what is on the other side.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;After a time the ladder was finished. It looked clumsy, but
            the Tin Woodman was sure it was strong and would answer their purpose.
            The Scarecrow waked Dorothy and the Lion and Toto, and told them that
            the ladder was ready. The Scarecrow climbed up the ladder first, but
            he was so awkward that Dorothy had to follow close behind and keep him
            from falling off. When he got his head over the top of the wall the
            Scarecrow said, &amp;ldquo;Oh, my!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Go on,&amp;rdquo; exclaimed Dorothy.&lt;/p&gt;
        &lt;p&gt;So the Scarecrow climbed farther up and sat down on the top of
            the wall, and Dorothy put her head over and cried, &amp;ldquo;Oh, my!&amp;rdquo; just
            as the Scarecrow had done.&lt;/p&gt;
        &lt;p&gt;Then Toto came up, and immediately began to bark, but Dorothy
            made him be still.&lt;/p&gt;
        &lt;p&gt;The Lion climbed the ladder next, and the Tin Woodman came
            last; but both of them cried, &amp;ldquo;Oh, my!&amp;rdquo; as soon as they looked
            over the wall. When they were all sitting in a row on the top
            of the wall, they looked down and saw a strange sight.&lt;/p&gt;
        &lt;p&gt;Before them was a great stretch of country having a floor as
            smooth and shining and white as the bottom of a big platter.
            Scattered around were many houses made entirely of china and
            painted in the brightest colors. These houses were quite small,
            the biggest of them reaching only as high as Dorothy&amp;rsquo;s waist.
            There were also pretty little barns, with china fences around them;
            and many cows and sheep and horses and pigs and chickens, all made
            of china, were standing about in groups.&lt;/p&gt;
        &lt;p&gt;But the strangest of all were the people who lived in this
            queer country. There were milkmaids and shepherdesses, with
            brightly colored bodices and golden spots all over their gowns;
            and princesses with most gorgeous frocks of silver and gold and
            purple; and shepherds dressed in knee breeches with pink and
            yellow and blue stripes down them, and golden buckles on their
            shoes; and princes with jeweled crowns upon their heads, wearing
            ermine robes and satin doublets; and funny clowns in ruffled gowns,
            with round red spots upon their cheeks and tall, pointed caps.
            And, strangest of all, these people were all made of china, even to
            their clothes, and were so small that the tallest of them was no
            higher than Dorothy&amp;rsquo;s knee.&lt;/p&gt;
        &lt;p&gt;No one did so much as look at the travelers at first, except
            one little purple china dog with an extra&amp;#8208;large head, which came
            to the wall and barked at them in a tiny voice, afterwards running
            away again.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;How shall we get down?&amp;rdquo; asked Dorothy.&lt;/p&gt;
        &lt;p&gt;They found the ladder so heavy they could not pull it up, so
            the Scarecrow fell off the wall and the others jumped down upon him
            so that the hard floor would not hurt their feet. Of course they
            took pains not to light on his head and get the pins in their feet.
            When all were safely down they picked up the Scarecrow, whose body
            was quite flattened out, and patted his straw into shape again.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We must cross this strange place in order to get to the other side,&amp;rdquo;
            said Dorothy, &amp;ldquo;for it would be unwise for us to go any other way except
            due South.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;They began walking through the country of the china people,
            and the first thing they came to was a china milkmaid milking a
            china cow. As they drew near, the cow suddenly gave a kick and
            kicked over the stool, the pail, and even the milkmaid herself,
            and all fell on the china ground with a great clatter.&lt;/p&gt;
        &lt;p&gt;Dorothy was shocked to see that the cow had broken her leg
            off, and that the pail was lying in several small pieces, while
            the poor milkmaid had a nick in her left elbow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;There!&amp;rdquo; cried the milkmaid angrily. &amp;ldquo;See what you have done!
            My cow has broken her leg, and I must take her to the mender&amp;rsquo;s
            shop and have it glued on again. What do you mean by coming here
            and frightening my cow?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I&amp;rsquo;m very sorry,&amp;rdquo; returned Dorothy. &amp;ldquo;Please forgive us.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;But the pretty milkmaid was much too vexed to make any answer.
            She picked up the leg sulkily and led her cow away, the poor
            animal limping on three legs. As she left them the milkmaid cast
            many reproachful glances over her shoulder at the clumsy strangers,
            holding her nicked elbow close to her side.&lt;/p&gt;
        &lt;p&gt;Dorothy was quite grieved at this mishap.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We must be very careful here,&amp;rdquo; said the kind&amp;#8208;hearted Woodman,
        &amp;ldquo;or we may hurt these pretty little people so they will never get over it.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;A little farther on Dorothy met a most beautifully dressed
            young Princess, who stopped short as she saw the strangers and
            started to run away.&lt;/p&gt;
        &lt;p&gt;Dorothy wanted to see more of the Princess, so she ran after her.
            But the china girl cried out:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Don&amp;rsquo;t chase me! Don&amp;rsquo;t chase me!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;She had such a frightened little voice that Dorothy stopped
            and said, &amp;ldquo;Why not?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Because,&amp;rdquo; answered the Princess, also stopping, a safe
            distance away, &amp;ldquo;if I run I may fall down and break myself.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;But could you not be mended?&amp;rdquo; asked the girl.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, yes; but one is never so pretty after being mended, you know,&amp;rdquo;
            replied the Princess.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I suppose not,&amp;rdquo; said Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Now there is Mr. Joker, one of our clowns,&amp;rdquo; continued the
            china lady, &amp;ldquo;who is always trying to stand upon his head. He has
            broken himself so often that he is mended in a hundred places, and
            doesn&amp;rsquo;t look at all pretty. Here he comes now, so you can see for
            yourself.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Indeed, a jolly little clown came walking toward them, and
            Dorothy could see that in spite of his pretty clothes of red and
            yellow and green he was completely covered with cracks, running
            every which way and showing plainly that he had been mended in
            many places.&lt;/p&gt;
        &lt;p&gt;The Clown put his hands in his pockets, and after puffing out
            his cheeks and nodding his head at them saucily, he said:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;My lady fair,&lt;/p&gt;
        &lt;p&gt;Why do you stare&lt;/p&gt;
        &lt;p&gt;At poor old Mr. Joker?&lt;/p&gt;
        &lt;p&gt;You&amp;rsquo;re quite as stiff&lt;/p&gt;
        &lt;p&gt;And prim as if&lt;/p&gt;
        &lt;p&gt;You&amp;rsquo;d eaten up a poker!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Be quiet, sir!&amp;rdquo; said the Princess. &amp;ldquo;Can&amp;rsquo;t you see these are
            strangers, and should be treated with respect?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Well, that&amp;rsquo;s respect, I expect,&amp;rdquo; declared the Clown,
            and immediately stood upon his head.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Don&amp;rsquo;t mind Mr. Joker,&amp;rdquo; said the Princess to Dorothy. &amp;ldquo;He is
            considerably cracked in his head, and that makes him foolish.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, I don&amp;rsquo;t mind him a bit,&amp;rdquo; said Dorothy. &amp;ldquo;But you are so
            beautiful,&amp;rdquo; she continued, &amp;ldquo;that I am sure I could love you dearly.
            Won&amp;rsquo;t you let me carry you back to Kansas, and stand you on
            Aunt Em&amp;rsquo;s mantel? I could carry you in my basket.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That would make me very unhappy,&amp;rdquo; answered the china Princess.
        &amp;ldquo;You see, here in our country we live contentedly, and can talk and
            move around as we please. But whenever any of us are taken away our
            joints at once stiffen, and we can only stand straight and look pretty.
            Of course that is all that is expected of us when we are on mantels and
            cabinets and drawing&amp;#8208;room tables, but our lives are much pleasanter
            here in our own country.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I would not make you unhappy for all the world!&amp;rdquo; exclaimed Dorothy.
        &amp;ldquo;So I&amp;rsquo;ll just say good&amp;#8208;bye.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Good&amp;#8208;bye,&amp;rdquo; replied the Princess.&lt;/p&gt;
        &lt;p&gt;They walked carefully through the china country. The little
            animals and all the people scampered out of their way, fearing the
            strangers would break them, and after an hour or so the travelers
            reached the other side of the country and came to another china wall.&lt;/p&gt;
        &lt;p&gt;It was not so high as the first, however, and by standing upon
            the Lion&amp;rsquo;s back they all managed to scramble to the top. Then the
            Lion gathered his legs under him and jumped on the wall; but just
            as he jumped, he upset a china church with his tail and smashed it
            all to pieces.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That was too bad,&amp;rdquo; said Dorothy, &amp;ldquo;but really I think we were
            lucky in not doing these little people more harm than breaking a
            cow&amp;rsquo;s leg and a church. They are all so brittle!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;They are, indeed,&amp;rdquo; said the Scarecrow, &amp;ldquo;and I am thankful I
            am made of straw and cannot be easily damaged. There are worse
            things in the world than being a Scarecrow.&amp;rdquo;
        &lt;/p&gt;
        
        
        &lt;h2&gt;The Lion Becomes the King of Beasts&lt;/h2&gt;
        
        &lt;p&gt;After climbing down from the china wall the travelers found
            themselves in a disagreeable country, full of bogs and marshes and
            covered with tall, rank grass. It was difficult to walk without
            falling into muddy holes, for the grass was so thick that it hid
            them from sight. However, by carefully picking their way, they
            got safely along until they reached solid ground. But here the
            country seemed wilder than ever, and after a long and tiresome
            walk through the underbrush they entered another forest, where the
            trees were bigger and older than any they had ever seen.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;This forest is perfectly delightful,&amp;rdquo; declared the Lion, looking
            around him with joy. &amp;ldquo;Never have I seen a more beautiful place.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;It seems gloomy,&amp;rdquo; said the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Not a bit of it,&amp;rdquo; answered the Lion. &amp;ldquo;I should like to live
            here all my life. See how soft the dried leaves are under your
            feet and how rich and green the moss is that clings to these old
            trees. Surely no wild beast could wish a pleasanter home.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Perhaps there are wild beasts in the forest now,&amp;rdquo; said Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I suppose there are,&amp;rdquo; returned the Lion, &amp;ldquo;but I do not see
            any of them about.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;They walked through the forest until it became too dark to go
            any farther. Dorothy and Toto and the Lion lay down to sleep,
            while the Woodman and the Scarecrow kept watch over them as usual.&lt;/p&gt;
        &lt;p&gt;When morning came, they started again. Before they had gone
            far they heard a low rumble, as of the growling of many wild animals.
            Toto whimpered a little, but none of the others was frightened,
            and they kept along the well&amp;#8208;trodden path until they came to
            an opening in the wood, in which were gathered hundreds of
            beasts of every variety. There were tigers and elephants and
            bears and wolves and foxes and all the others in the natural
            history, and for a moment Dorothy was afraid. But the Lion
            explained that the animals were holding a meeting, and he judged
            by their snarling and growling that they were in great trouble.&lt;/p&gt;
        &lt;p&gt;As he spoke several of the beasts caught sight of him, and at
            once the great assemblage hushed as if by magic. The biggest of
            the tigers came up to the Lion and bowed, saying:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Welcome, O King of Beasts! You have come in good time to
            fight our enemy and bring peace to all the animals of the forest
            once more.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What is your trouble?&amp;rdquo; asked the Lion quietly.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We are all threatened,&amp;rdquo; answered the tiger, &amp;ldquo;by a fierce
            enemy which has lately come into this forest. It is a most
            tremendous monster, like a great spider, with a body as big as an
            elephant and legs as long as a tree trunk. It has eight of these
            long legs, and as the monster crawls through the forest he seizes
            an animal with a leg and drags it to his mouth, where he eats it
            as a spider does a fly. Not one of us is safe while this fierce
            creature is alive, and we had called a meeting to decide how to
            take care of ourselves when you came among us.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The Lion thought for a moment.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Are there any other lions in this forest?&amp;rdquo; he asked.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;No; there were some, but the monster has eaten them all. And,
            besides, there were none of them nearly so large and brave as you.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;If I put an end to your enemy, will you bow down to me and
            obey me as King of the Forest?&amp;rdquo; inquired the Lion.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We will do that gladly,&amp;rdquo; returned the tiger; and all the
            other beasts roared with a mighty roar: &amp;ldquo;We will!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Where is this great spider of yours now?&amp;rdquo; asked the Lion.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Yonder, among the oak trees,&amp;rdquo; said the tiger, pointing with
            his forefoot.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Take good care of these friends of mine,&amp;rdquo; said the Lion, &amp;ldquo;and
            I will go at once to fight the monster.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;He bade his comrades good&amp;#8208;bye and marched proudly away to do
            battle with the enemy.&lt;/p&gt;
        &lt;p&gt;The great spider was lying asleep when the Lion found him,
            and it looked so ugly that its foe turned up his nose in disgust.
            Its legs were quite as long as the tiger had said, and its body
            covered with coarse black hair. It had a great mouth, with a row
            of sharp teeth a foot long; but its head was joined to the pudgy
            body by a neck as slender as a wasp&amp;rsquo;s waist. This gave the Lion a
            hint of the best way to attack the creature, and as he knew it was
            easier to fight it asleep than awake, he gave a great spring and
            landed directly upon the monster&amp;rsquo;s back. Then, with one blow of
            his heavy paw, all armed with sharp claws, he knocked the spider&amp;rsquo;s
            head from its body. Jumping down, he watched it until the long
            legs stopped wiggling, when he knew it was quite dead.&lt;/p&gt;
        &lt;p&gt;The Lion went back to the opening where the beasts of the
            forest were waiting for him and said proudly:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;You need fear your enemy no longer.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Then the beasts bowed down to the Lion as their King, and he
            promised to come back and rule over them as soon as Dorothy was
            safely on her way to Kansas.
        &lt;/p&gt;
        
        
        &lt;h2&gt;The Country of the Quadlings&lt;/h2&gt;
        
        &lt;p&gt;The four travelers passed through the rest of the forest in
            safety, and when they came out from its gloom saw before them a
            steep hill, covered from top to bottom with great pieces of rock.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That will be a hard climb,&amp;rdquo; said the Scarecrow, &amp;ldquo;but we must
            get over the hill, nevertheless.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So he led the way and the others followed. They had nearly
            reached the first rock when they heard a rough voice cry out,
        &amp;ldquo;Keep back!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Who are you?&amp;rdquo; asked the Scarecrow.&lt;/p&gt;
        &lt;p&gt;Then a head showed itself over the rock and the same voice said,
        &amp;ldquo;This hill belongs to us, and we don&amp;rsquo;t allow anyone to cross it.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;But we must cross it,&amp;rdquo; said the Scarecrow. &amp;ldquo;We&amp;rsquo;re going to
            the country of the Quadlings.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;But you shall not!&amp;rdquo; replied the voice, and there stepped from
            behind the rock the strangest man the travelers had ever seen.&lt;/p&gt;
        &lt;p&gt;He was quite short and stout and had a big head, which was
            flat at the top and supported by a thick neck full of wrinkles.
            But he had no arms at all, and, seeing this, the Scarecrow did not
            fear that so helpless a creature could prevent them from climbing
            the hill. So he said, &amp;ldquo;I&amp;rsquo;m sorry not to do as you wish, but we
            must pass over your hill whether you like it or not,&amp;rdquo; and he
            walked boldly forward.&lt;/p&gt;
        &lt;p&gt;As quick as lightning the man&amp;rsquo;s head shot forward and his neck
            stretched out until the top of the head, where it was flat, struck
            the Scarecrow in the middle and sent him tumbling, over and over,
            down the hill. Almost as quickly as it came the head went back to
            the body, and the man laughed harshly as he said, &amp;ldquo;It isn&amp;rsquo;t as
            easy as you think!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;A chorus of boisterous laughter came from the other rocks, and
            Dorothy saw hundreds of the armless Hammer&amp;#8208;Heads upon the
            hillside, one behind every rock.&lt;/p&gt;
        &lt;p&gt;The Lion became quite angry at the laughter caused by the
            Scarecrow&amp;rsquo;s mishap, and giving a loud roar that echoed like thunder,
            he dashed up the hill.&lt;/p&gt;
        &lt;p&gt;Again a head shot swiftly out, and the great Lion went rolling
            down the hill as if he had been struck by a cannon ball.&lt;/p&gt;
        &lt;p&gt;Dorothy ran down and helped the Scarecrow to his feet, and the
            Lion came up to her, feeling rather bruised and sore, and said,
        &amp;ldquo;It is useless to fight people with shooting heads; no one can
            withstand them.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What can we do, then?&amp;rdquo; she asked.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Call the Winged Monkeys,&amp;rdquo; suggested the Tin Woodman. &amp;ldquo;You
            have still the right to command them once more.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Very well,&amp;rdquo; she answered, and putting on the Golden Cap she
            uttered the magic words. The Monkeys were as prompt as ever, and
            in a few moments the entire band stood before her.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What are your commands?&amp;rdquo; inquired the King of the Monkeys,
            bowing low.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Carry us over the hill to the country of the Quadlings,&amp;rdquo;
            answered the girl.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;It shall be done,&amp;rdquo; said the King, and at once the Winged Monkeys
            caught the four travelers and Toto up in their arms and flew away with them.
            As they passed over the hill the Hammer&amp;#8208;Heads yelled with vexation, and shot
            their heads high in the air, but they could not reach the Winged Monkeys,
            which carried Dorothy and her comrades safely over the hill and set them
            down in the beautiful country of the Quadlings.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;This is the last time you can summon us,&amp;rdquo; said the leader to
            Dorothy; &amp;ldquo;so good&amp;#8208;bye and good luck to you.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Good&amp;#8208;bye, and thank you very much,&amp;rdquo; returned the girl; and
            the Monkeys rose into the air and were out of sight in a twinkling.&lt;/p&gt;
        &lt;p&gt;The country of the Quadlings seemed rich and happy. There was
            field upon field of ripening grain, with well&amp;#8208;paved roads running
            between, and pretty rippling brooks with strong bridges across them.
            The fences and houses and bridges were all painted bright red,
            just as they had been painted yellow in the country of the Winkies
            and blue in the country of the Munchkins. The Quadlings themselves,
            who were short and fat and looked chubby and good&amp;#8208;natured, were
            dressed all in red, which showed bright against the green grass
            and the yellowing grain.&lt;/p&gt;
        &lt;p&gt;The Monkeys had set them down near a farmhouse, and the four
            travelers walked up to it and knocked at the door. It was opened
            by the farmer&amp;rsquo;s wife, and when Dorothy asked for something to eat
            the woman gave them all a good dinner, with three kinds of cake
            and four kinds of cookies, and a bowl of milk for Toto.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;How far is it to the Castle of Glinda?&amp;rdquo; asked the child.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;It is not a great way,&amp;rdquo; answered the farmer&amp;rsquo;s wife.
        &amp;ldquo;Take the road to the South and you will soon reach it.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Thanking the good woman, they started afresh and walked by the
            fields and across the pretty bridges until they saw before them a
            very beautiful Castle. Before the gates were three young girls,
            dressed in handsome red uniforms trimmed with gold braid; and as
            Dorothy approached, one of them said to her:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Why have you come to the South Country?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;To see the Good Witch who rules here,&amp;rdquo; she answered.
        &amp;ldquo;Will you take me to her?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Let me have your name, and I will ask Glinda if she will
            receive you.&amp;rdquo; They told who they were, and the girl soldier went
            into the Castle. After a few moments she came back to say that
            Dorothy and the others were to be admitted at once.
        &lt;/p&gt;
        
        
        &lt;h2&gt;Glinda The Good Witch Grants Dorothy&amp;rsquo;s Wish&lt;/h2&gt;
        
        &lt;p&gt;Before they went to see Glinda, however, they were taken to a
            room of the Castle, where Dorothy washed her face and combed her
            hair, and the Lion shook the dust out of his mane, and the
            Scarecrow patted himself into his best shape, and the Woodman
            polished his tin and oiled his joints.&lt;/p&gt;
        &lt;p&gt;When they were all quite presentable they followed the soldier
            girl into a big room where the Witch Glinda sat upon a throne of rubies.&lt;/p&gt;
        &lt;p&gt;She was both beautiful and young to their eyes. Her hair was
            a rich red in color and fell in flowing ringlets over her shoulders.
            Her dress was pure white but her eyes were blue, and they looked
            kindly upon the little girl.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What can I do for you, my child?&amp;rdquo; she asked.&lt;/p&gt;
        &lt;p&gt;Dorothy told the Witch all her story: how the cyclone had
            brought her to the Land of Oz, how she had found her companions,
            and of the wonderful adventures they had met with.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;My greatest wish now,&amp;rdquo; she added, &amp;ldquo;is to get back to Kansas,
            for Aunt Em will surely think something dreadful has happened to me,
            and that will make her put on mourning; and unless the crops are better
            this year than they were last, I am sure Uncle Henry cannot afford it.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Glinda leaned forward and kissed the sweet, upturned face of
            the loving little girl.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Bless your dear heart,&amp;rdquo; she said, &amp;ldquo;I am sure I can tell you
            of a way to get back to Kansas.&amp;rdquo; Then she added, &amp;ldquo;But, if I do,
            you must give me the Golden Cap.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Willingly!&amp;rdquo; exclaimed Dorothy; &amp;ldquo;indeed, it is of no use to
            me now, and when you have it you can command the Winged Monkeys
            three times.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And I think I shall need their service just those three times,&amp;rdquo;
            answered Glinda, smiling.&lt;/p&gt;
        &lt;p&gt;Dorothy then gave her the Golden Cap, and the Witch said to
            the Scarecrow, &amp;ldquo;What will you do when Dorothy has left us?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I will return to the Emerald City,&amp;rdquo; he replied, &amp;ldquo;for Oz has
            made me its ruler and the people like me. The only thing that
            worries me is how to cross the hill of the Hammer&amp;#8208;Heads.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;By means of the Golden Cap I shall command the Winged Monkeys
            to carry you to the gates of the Emerald City,&amp;rdquo; said Glinda, &amp;ldquo;for
            it would be a shame to deprive the people of so wonderful a ruler.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Am I really wonderful?&amp;rdquo; asked the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;You are unusual,&amp;rdquo; replied Glinda.&lt;/p&gt;
        &lt;p&gt;Turning to the Tin Woodman, she asked, &amp;ldquo;What will become of
            you when Dorothy leaves this country?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;He leaned on his axe and thought a moment. Then he said,
        &amp;ldquo;The Winkies were very kind to me, and wanted me to rule over them
            after the Wicked Witch died. I am fond of the Winkies, and if I
            could get back again to the Country of the West, I should like
            nothing better than to rule over them forever.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;My second command to the Winged Monkeys,&amp;rdquo; said Glinda &amp;ldquo;will
            be that they carry you safely to the land of the Winkies. Your
            brain may not be so large to look at as those of the Scarecrow,
            but you are really brighter than he is&amp;mdash;when you are well
            polished&amp;mdash;and I am sure you will rule the Winkies wisely and well.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Then the Witch looked at the big, shaggy Lion and asked, &amp;ldquo;When
            Dorothy has returned to her own home, what will become of you?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Over the hill of the Hammer&amp;#8208;Heads,&amp;rdquo; he answered, &amp;ldquo;lies a
            grand old forest, and all the beasts that live there have made me
            their King. If I could only get back to this forest, I would pass
            my life very happily there.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;My third command to the Winged Monkeys,&amp;rdquo; said Glinda, &amp;ldquo;shall
            be to carry you to your forest. Then, having used up the powers
            of the Golden Cap, I shall give it to the King of the Monkeys,
            that he and his band may thereafter be free for evermore.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The Scarecrow and the Tin Woodman and the Lion now thanked the
            Good Witch earnestly for her kindness; and Dorothy exclaimed:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;You are certainly as good as you are beautiful! But you have
            not yet told me how to get back to Kansas.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Your Silver Shoes will carry you over the desert,&amp;rdquo; replied Glinda.
        &amp;ldquo;If you had known their power you could have gone back to your Aunt Em
            the very first day you came to this country.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;But then I should not have had my wonderful brains!&amp;rdquo; cried the Scarecrow.
        &amp;ldquo;I might have passed my whole life in the farmer&amp;rsquo;s cornfield.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And I should not have had my lovely heart,&amp;rdquo; said the Tin Woodman.
        &amp;ldquo;I might have stood and rusted in the forest till the end of the world.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And I should have lived a coward forever,&amp;rdquo; declared the Lion,
        &amp;ldquo;and no beast in all the forest would have had a good word to say to me.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;This is all true,&amp;rdquo; said Dorothy, &amp;ldquo;and I am glad I was of use
            to these good friends. But now that each of them has had what he
            most desired, and each is happy in having a kingdom to rule besides,
            I think I should like to go back to Kansas.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;The Silver Shoes,&amp;rdquo; said the Good Witch, &amp;ldquo;have wonderful powers.
            And one of the most curious things about them is that they can carry
            you to any place in the world in three steps, and each step will be
            made in the wink of an eye. All you have to do is to knock the heels
            together three times and command the shoes to carry you wherever you
            wish to go.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;If that is so,&amp;rdquo; said the child joyfully, &amp;ldquo;I will ask them to
            carry me back to Kansas at once.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;She threw her arms around the Lion&amp;rsquo;s neck and kissed him,
            patting his big head tenderly. Then she kissed the Tin Woodman,
            who was weeping in a way most dangerous to his joints. But she
            hugged the soft, stuffed body of the Scarecrow in her arms instead
            of kissing his painted face, and found she was crying herself at
            this sorrowful parting from her loving comrades.&lt;/p&gt;
        &lt;p&gt;Glinda the Good stepped down from her ruby throne to give the
            little girl a good&amp;#8208;bye kiss, and Dorothy thanked her for all the
            kindness she had shown to her friends and herself.&lt;/p&gt;
        &lt;p&gt;Dorothy now took Toto up solemnly in her arms, and having said
            one last good&amp;#8208;bye she clapped the heels of her shoes together three
            times, saying:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Take me home to Aunt Em!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Instantly she was whirling through the air, so swiftly that
            all she could see or feel was the wind whistling past her ears.&lt;/p&gt;
        &lt;p&gt;The Silver Shoes took but three steps, and then she stopped so
            suddenly that she rolled over upon the grass several times before
            she knew where she was.&lt;/p&gt;
        &lt;p&gt;At length, however, she sat up and looked about her.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Good gracious!&amp;rdquo; she cried.&lt;/p&gt;
        &lt;p&gt;For she was sitting on the broad Kansas prairie, and just
            before her was the new farmhouse Uncle Henry built after the
            cyclone had carried away the old one. Uncle Henry was milking the
            cows in the barnyard, and Toto had jumped out of her arms and was
            running toward the barn, barking furiously.&lt;/p&gt;
        &lt;p&gt;Dorothy stood up and found she was in her stocking&amp;#8208;feet.
            For the Silver Shoes had fallen off in her flight through the air,
            and were lost forever in the desert.
        &lt;/p&gt;
        
        
        &lt;h2&gt;Home Again&lt;/h2&gt;
        
        &lt;p&gt;Aunt Em had just come out of the house to water the cabbages
            when she looked up and saw Dorothy running toward her.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;My darling child!&amp;rdquo; she cried, folding the little girl in her
            arms and covering her face with kisses. &amp;ldquo;Where in the world did
            you come from?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;From the Land of Oz,&amp;rdquo; said Dorothy gravely. &amp;ldquo;And here is
            Toto, too. And oh, Aunt Em! I&amp;rsquo;m so glad to be at home again!&amp;rdquo;
        &lt;/p&gt;
        
        
        &lt;p class=&quot;acknowledgements title&quot;&gt;Acknowledgements:&lt;/p&gt;
        &lt;p class=&quot;acknowledgements&quot;&gt;The novel &quot;The Wonderful Wizard of Oz&quot; (1900)
                              &lt;br /&gt;by L. Frank Baum (1856-1919)
                              &lt;br /&gt;in the public domain since 1956.&lt;/p&gt;
        &lt;p class=&quot;acknowledgements&quot;&gt;Blank page backgrounds based on
                              &lt;br /&gt;&quot;Decoline&quot;
                              &lt;br /&gt;designed by Nino Barbieri: 
                              &lt;br /&gt;&lt;a href=&quot;https://commons.wikimedia.org/wiki/File:Decoline01.svg&quot;&gt;
                                    https://commons.wikimedia.org/wiki/File:Decoline01.svg&lt;/a&gt;
                              &lt;br /&gt;licensed under:
                              &lt;br /&gt;&lt;a href=&quot;https://en.wikipedia.org/wiki/en:Creative_Commons&quot;&gt;Creative Commons&lt;/a&gt; &lt;a href=&quot;https://creativecommons.org/licenses/by-sa/3.0/deed.en&quot;&gt;Attribution-Share Alike 3.0 Unported&lt;/a&gt; license
                              &lt;br /&gt;&lt;a href=&quot;https://en.wikipedia.org/wiki/en:Creative_Commons&quot;&gt;Creative Commons&lt;/a&gt; &lt;a href=&quot;https://creativecommons.org/licenses/by/2.5/deed.en&quot;&gt;Attribution 2.5 Generic&lt;/a&gt; license&lt;/p&gt;
        
    &lt;/body&gt;
&lt;/html&gt;

        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_PDFreactor_Examples_novel_wizardOfOz.html.png) | ![typeset Preview](typeset__html_PDFreactor_Examples_novel_wizardOfOz.html.png) | ![PDFreactor Preview](pdfreactor__html_PDFreactor_Examples_novel_wizardOfOz.html.png) |
| [📕 mPDF Output](mpdf__html_PDFreactor_Examples_novel_wizardOfOz.html.pdf) | [📕 typeset Output](typeset__html_PDFreactor_Examples_novel_wizardOfOz.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_PDFreactor_Examples_novel_wizardOfOz.html.pdf) |

## 🔬 WIZARDOFOZXSLT

### Input HTML & CSS

[📄 Input HTML](https://raw.githubusercontent.com/azettl/compare.html2pdf.tools/master//html/PDFreactor%20Examples/novel/wizardOfOzXSLT.html)

<details>
    <summary>
        View WIZARDOFOZXSLT Code
    </summary>
    <pre>
        <code>
            &lt;?xml-stylesheet type=&quot;text/xsl&quot; href=&quot;toc.xsl&quot; ?&gt;
&lt;html lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;title&gt;Children's Novel&lt;/title&gt;
        &lt;style&gt;@font-face {
            src: url(&quot;fnt/Alegreya/Alegreya.woff&quot;);
            font-family: textFont;
        }
        
        @font-face {
            src: url(&quot;fnt/Alegreya/AlegreyaBold.woff&quot;);
            font-family: textFont;
            font-weight: bold;
        }
        
        @font-face {
            src: url(&quot;fnt/ChristensenCaps.ttf&quot;);
            font-family: dropCapFont;
        }
        
        @page:first {
            counter-increment: page 0;
            @bottom-center {
                content: none;
            }
        }
        
        @page:-ro-nth(2) {
            counter-increment: page 0;
            @bottom-center {
                content: none;
            }
        }
        
        @page {
            size: letter;
            margin: 1in;
            padding: 0.25in 0;
            font-size: 22pt;
            
            @bottom-center { 
                content: counter(page); 
                text-align: center; 
            }
            
            @top-center {
                padding-top: 0.5in;
                border-bottom: 2.5pt solid black;
            }
        }
        
        @page:left { 
            margin-left: 1.5in;
            margin-right: 0.75in;
            
            @top-center { 
                content: &quot;The Wonderful Wizard of Oz&quot;;
                text-align: left;
            } 
        }
        
        @page:right { 
            margin-left: 0.75in;
            margin-right: 1.5in;
            
            @top-center { 
                content: string(chapter, last); 
                text-align: right;
            } 
        }
        
        @page:blank {
            background-image: url('Decoline01.svg');
            background-size: 50% auto;
            background-repeat: no-repeat;
            background-position: calc(50% + 0.375in) 50%;
            
            @top-center {
                content: &quot;&quot;;
                border-bottom: none;
            }
        }
        
        @page title {
            margin: 0;
            @top-center { content: none }
            @bottom-center { content: none }
        }
        
        @-ro-preferences {
            first-page-side: right;
            page-layout: 2 column;
            initial-zoom: fit-page;
        }
        
        html {
            font-family: textFont, 'times new roman', serif;
            font-size: 16pt;
            line-height: 1.25;
            -ro-line-grid: create;
        }
        
        body {
            margin-left: 6pt;
            margin-right: 6pt;
        }
        
        p {
            text-align: justify;
            margin: 0;
            -ro-line-snap: baseline;
            text-indent: 1.75em;
            orphans: 3;
            widows: 3;
            hyphens: auto;
            hyphenate-before: 3;
            hyphenate-after: 3;
        }
        
        /* first paragraph of each chapter */
        h2 + p {
            text-indent: 0;
        }
        h2 + p::first-letter {
            float: left;
            font-family: dropCapFont;
            font-size: 3.6em;
            margin-right: 0.075em;
            line-height: 0.5;
        }
        
        /* chapter headings */
        h2 {
            line-height: 110%;
            string-set: chapter self;
            break-before: left;
            break-after: page;
            margin-top: 0;
            font-size: 50pt;
            padding-top: 1.5in;
            width: 55%;
        }
        
        /* chapter headings, except the first one (&quot;Introduction&quot;) */
        body &gt; h2:nth-of-type(n+2) {
            counter-increment: chapter;
            string-set: chapter before; 
        }
        body &gt; h2:nth-of-type(n+2)::before { 
            content: &quot;Chapter &quot; counter(chapter, &quot;-ro-spelled-out-en&quot;) &quot;\A&quot;;
            white-space: pre;
            text-transform: capitalize;
            font-size: 0.25em;
            font-weight: normal;
            letter-spacing: 0.5em;
        }
        
        /* author and title */
        h1 {
            padding-top: 3in;
            font-size: 1em;
            font-weight: normal;
            counter-reset: chapter;
            text-align: center;
            margin-top: 0;
            page: title;
        }
        
        h1 + h1 {
            -ro-bookmark-level: none;
            -ro-pdf-tag-type: &quot;P&quot;
        }
        
        /* title */
        h1:first-child {
            font-size: 65pt;
            font-weight: bold;
            line-height: 1.5;
            padding-top: 2in;
            padding-bottom: 1.2in;
        }
        
        div.tableOfContents {
            break-after: page;
        }
        
        div.tableOfContents div {
            margin-bottom: 1.5pt;
        }
        
        div.tableOfContents a {
            color: black;
            text-decoration: none;
        }
        
        div.tableOfContents a::after {
            content: leader(dotted) target-counter(-ro-attr(href url), page);
        }
        
        div.tableOfContents a::before {
            content: target-counter(-ro-attr(href url), chapter ) &quot;. &quot;;
            width: 1.5em;
            float: left;
            text-align: right;
            padding-right: 0.3em;
        }
        
        .acknowledgements {
            page: acknowledgements;
            text-indent: 0;
            text-align: left;
            margin: 1.5em 0;
        }
        
        .acknowledgements.title {
            font-weight: bold;
            letter-spacing: 0.1em;
        }
        
        @page acknowledgements {
            @top-center { content: none }
            @bottom-center { content: none }
            margin-left: 0.75in;
            margin-right: 0.75in;
        }
        
        a {
            color: inherit;
            text-decoration: inherit;
        }
&lt;/style&gt;        
    &lt;/head&gt;
    &lt;body&gt;
        
        &lt;h1&gt;The Wonderful Wizard of Oz&lt;/h1&gt;
        &lt;h1&gt;by L. Frank Baum&lt;/h1&gt;
        
        
        &lt;h2&gt;Introduction&lt;/h2&gt;
        
        &lt;p&gt;Folklore, legends, myths and fairy tales have followed childhood
            through the ages, for every healthy youngster has a wholesome and
            instinctive love for stories fantastic, marvelous and manifestly unreal.
            The winged fairies of Grimm and Andersen have brought more happiness to
            childish hearts than all other human creations.&lt;/p&gt;
        &lt;p&gt;Yet the old time fairy tale, having served for generations,
            may now be classed as &amp;ldquo;historical&amp;rdquo; in the children&amp;rsquo;s library; for
            the time has come for a series of newer &amp;ldquo;wonder tales&amp;rdquo; in which
            the stereotyped genie, dwarf and fairy are eliminated, together
            with all the horrible and blood&amp;#8208;curdling incidents devised by
            their authors to point a fearsome moral to each tale. Modern
            education includes morality; therefore the modern child seeks only
            entertainment in its wonder tales and gladly dispenses with all
            disagreeable incident.&lt;/p&gt;
        &lt;p&gt;Having this thought in mind, the story of &amp;ldquo;The Wonderful
            Wizard of Oz&amp;rdquo; was written solely to please children of today. It
            aspires to being a modernized fairy tale, in which the wonderment
            and joy are retained and the heartaches and nightmares are left out.&lt;/p&gt;
        &lt;p&gt;L. Frank Baum&lt;/p&gt;
        &lt;p&gt;Chicago, April, 1900.&lt;/p&gt;
        
        
        &lt;h2&gt;The Cyclone&lt;/h2&gt;
        
        &lt;p&gt;Dorothy lived in the midst of the great Kansas prairies, with
            Uncle Henry, who was a farmer, and Aunt Em, who was the farmer&amp;rsquo;s
            wife. Their house was small, for the lumber to build it had to be
            carried by wagon many miles. There were four walls, a floor and a
            roof, which made one room; and this room contained a rusty looking
            cookstove, a cupboard for the dishes, a table, three or four
            chairs, and the beds. Uncle Henry and Aunt Em had a big bed in
            one corner, and Dorothy a little bed in another corner. There was
            no garret at all, and no cellar&amp;mdash;except a small hole dug in the
            ground, called a cyclone cellar, where the family could go in case
            one of those great whirlwinds arose, mighty enough to crush any
            building in its path. It was reached by a trap door in the middle
            of the floor, from which a ladder led down into the small, dark hole.&lt;/p&gt;
        &lt;p&gt;When Dorothy stood in the doorway and looked around, she could
            see nothing but the great gray prairie on every side. Not a tree
            nor a house broke the broad sweep of flat country that reached to
            the edge of the sky in all directions. The sun had baked the
            plowed land into a gray mass, with little cracks running through it.
            Even the grass was not green, for the sun had burned the tops of
            the long blades until they were the same gray color to be seen
            everywhere. Once the house had been painted, but the sun
            blistered the paint and the rains washed it away, and now the
            house was as dull and gray as everything else.&lt;/p&gt;
        &lt;p&gt;When Aunt Em came there to live she was a young, pretty wife.
            The sun and wind had changed her, too. They had taken the sparkle
            from her eyes and left them a sober gray; they had taken the red
            from her cheeks and lips, and they were gray also. She was thin
            and gaunt, and never smiled now. When Dorothy, who was an orphan,
            first came to her, Aunt Em had been so startled by the child&amp;rsquo;s
            laughter that she would scream and press her hand upon her heart
            whenever Dorothy&amp;rsquo;s merry voice reached her ears; and she still
            looked at the little girl with wonder that she could find anything
            to laugh at.&lt;/p&gt;
        &lt;p&gt;Uncle Henry never laughed. He worked hard from morning till
            night and did not know what joy was. He was gray also, from his
            long beard to his rough boots, and he looked stern and solemn,
            and rarely spoke.&lt;/p&gt;
        &lt;p&gt;It was Toto that made Dorothy laugh, and saved her from
            growing as gray as her other surroundings. Toto was not gray; he
            was a little black dog, with long silky hair and small black eyes
            that twinkled merrily on either side of his funny, wee nose. Toto
            played all day long, and Dorothy played with him, and loved him dearly.&lt;/p&gt;
        &lt;p&gt;Today, however, they were not playing. Uncle Henry sat upon
            the doorstep and looked anxiously at the sky, which was even
            grayer than usual. Dorothy stood in the door with Toto in her
            arms, and looked at the sky too. Aunt Em was washing the dishes.&lt;/p&gt;
        &lt;p&gt;From the far north they heard a low wail of the wind, and
            Uncle Henry and Dorothy could see where the long grass bowed in
            waves before the coming storm. There now came a sharp whistling
            in the air from the south, and as they turned their eyes that way
            they saw ripples in the grass coming from that direction also.&lt;/p&gt;
        &lt;p&gt;Suddenly Uncle Henry stood up.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;There&amp;rsquo;s a cyclone coming, Em,&amp;rdquo; he called to his wife. &amp;ldquo;I&amp;rsquo;ll
            go look after the stock.&amp;rdquo; Then he ran toward the sheds where the
            cows and horses were kept.&lt;/p&gt;
        &lt;p&gt;Aunt Em dropped her work and came to the door. One glance
            told her of the danger close at hand.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Quick, Dorothy!&amp;rdquo; she screamed. &amp;ldquo;Run for the cellar!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Toto jumped out of Dorothy&amp;rsquo;s arms and hid under the bed, and
            the girl started to get him. Aunt Em, badly frightened, threw
            open the trap door in the floor and climbed down the ladder into
            the small, dark hole. Dorothy caught Toto at last and started to
            follow her aunt. When she was halfway across the room there came
            a great shriek from the wind, and the house shook so hard that she
            lost her footing and sat down suddenly upon the floor.&lt;/p&gt;
        &lt;p&gt;Then a strange thing happened.&lt;/p&gt;
        &lt;p&gt;The house whirled around two or three times and rose slowly
            through the air. Dorothy felt as if she were going up in a balloon.&lt;/p&gt;
        &lt;p&gt;The north and south winds met where the house stood, and made
            it the exact center of the cyclone. In the middle of a cyclone
            the air is generally still, but the great pressure of the wind on
            every side of the house raised it up higher and higher, until it
            was at the very top of the cyclone; and there it remained and was
            carried miles and miles away as easily as you could carry a feather.&lt;/p&gt;
        &lt;p&gt;It was very dark, and the wind howled horribly around her,
            but Dorothy found she was riding quite easily. After the first
            few whirls around, and one other time when the house tipped badly,
            she felt as if she were being rocked gently, like a baby in a cradle.&lt;/p&gt;
        &lt;p&gt;Toto did not like it. He ran about the room, now here, now
            there, barking loudly; but Dorothy sat quite still on the floor
            and waited to see what would happen.&lt;/p&gt;
        &lt;p&gt;Once Toto got too near the open trap door, and fell in; and at
            first the little girl thought she had lost him. But soon she saw
            one of his ears sticking up through the hole, for the strong
            pressure of the air was keeping him up so that he could not fall.
            She crept to the hole, caught Toto by the ear, and dragged him
            into the room again, afterward closing the trap door so that no
            more accidents could happen.&lt;/p&gt;
        &lt;p&gt;Hour after hour passed away, and slowly Dorothy got over her
            fright; but she felt quite lonely, and the wind shrieked so loudly
            all about her that she nearly became deaf. At first she had
            wondered if she would be dashed to pieces when the house fell again;
            but as the hours passed and nothing terrible happened, she stopped
            worrying and resolved to wait calmly and see what the future would bring.
            At last she crawled over the swaying floor to her bed, and lay down upon it;
            and Toto followed and lay down beside her.&lt;/p&gt;
        &lt;p&gt;In spite of the swaying of the house and the wailing of the
            wind, Dorothy soon closed her eyes and fell fast asleep.
        &lt;/p&gt;
        
        
        &lt;h2&gt;The Council with the Munchkins&lt;/h2&gt;
        
        &lt;p&gt;She was awakened by a shock, so sudden and severe that if
            Dorothy had not been lying on the soft bed she might have been hurt.
            As it was, the jar made her catch her breath and wonder what had happened;
            and Toto put his cold little nose into her face and whined dismally.
            Dorothy sat up and noticed that the house was not moving; nor was it dark,
            for the bright sunshine came in at the window, flooding the little room.
            She sprang from her bed and with Toto at her heels ran and opened the door.&lt;/p&gt;
        &lt;p&gt;The little girl gave a cry of amazement and looked about her,
            her eyes growing bigger and bigger at the wonderful sights she saw.&lt;/p&gt;
        &lt;p&gt;The cyclone had set the house down very gently&amp;mdash;for a
            cyclone&amp;mdash;in the midst of a country of marvelous beauty. There
            were lovely patches of greensward all about, with stately trees
            bearing rich and luscious fruits. Banks of gorgeous flowers were
            on every hand, and birds with rare and brilliant plumage sang and
            fluttered in the trees and bushes. A little way off was a small
            brook, rushing and sparkling along between green banks, and
            murmuring in a voice very grateful to a little girl who had lived
            so long on the dry, gray prairies.&lt;/p&gt;
        &lt;p&gt;While she stood looking eagerly at the strange and beautiful
            sights, she noticed coming toward her a group of the queerest
            people she had ever seen. They were not as big as the grown
            folk she had always been used to; but neither were they very small.
            In fact, they seemed about as tall as Dorothy, who was a well&amp;#8208;grown
            child for her age, although they were, so far as looks go, many
            years older.&lt;/p&gt;
        &lt;p&gt;Three were men and one a woman, and all were oddly dressed.
            They wore round hats that rose to a small point a foot above their
            heads, with little bells around the brims that tinkled sweetly as
            they moved. The hats of the men were blue; the little woman&amp;rsquo;s hat
            was white, and she wore a white gown that hung in pleats from her
            shoulders. Over it were sprinkled little stars that glistened in
            the sun like diamonds. The men were dressed in blue, of the same
            shade as their hats, and wore well&amp;#8208;polished boots with a deep roll
            of blue at the tops. The men, Dorothy thought, were about as old
            as Uncle Henry, for two of them had beards. But the little woman
            was doubtless much older. Her face was covered with wrinkles, her
            hair was nearly white, and she walked rather stiffly.&lt;/p&gt;
        &lt;p&gt;When these people drew near the house where Dorothy was
            standing in the doorway, they paused and whispered among themselves,
            as if afraid to come farther. But the little old woman walked up
            to Dorothy, made a low bow and said, in a sweet voice:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;You are welcome, most noble Sorceress, to the land of the Munchkins.
            We are so grateful to you for having killed the Wicked Witch of the East,
            and for setting our people free from bondage.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Dorothy listened to this speech with wonder. What could the
            little woman possibly mean by calling her a sorceress, and saying
            she had killed the Wicked Witch of the East? Dorothy was an innocent,
            harmless little girl, who had been carried by a cyclone many miles from home;
            and she had never killed anything in all her life.&lt;/p&gt;
        &lt;p&gt;But the little woman evidently expected her to answer; so Dorothy said,
            with hesitation, &amp;ldquo;You are very kind, but there must be some mistake.
            I have not killed anything.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Your house did, anyway,&amp;rdquo; replied the little old woman, with a
            laugh, &amp;ldquo;and that is the same thing. See!&amp;rdquo; she continued, pointing
            to the corner of the house. &amp;ldquo;There are her two feet, still sticking
            out from under a block of wood.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Dorothy looked, and gave a little cry of fright. There, indeed,
            just under the corner of the great beam the house rested on, two feet
            were sticking out, shod in silver shoes with pointed toes.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, dear! Oh, dear!&amp;rdquo; cried Dorothy, clasping her hands together
            in dismay. &amp;ldquo;The house must have fallen on her. Whatever shall we do?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;rdquo;There is nothing to be done,&amp;rdquo; said the little woman calmly.&lt;/p&gt;
        &lt;p&gt;&amp;rdquo;But who was she?&amp;rdquo; asked Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;She was the Wicked Witch of the East, as I said,&amp;rdquo; answered
            the little woman. &amp;ldquo;She has held all the Munchkins in bondage for
            many years, making them slave for her night and day. Now they are
            all set free, and are grateful to you for the favor.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Who are the Munchkins?&amp;rdquo; inquired Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;They are the people who live in this land of the East
         where the Wicked Witch ruled.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Are you a Munchkin?&amp;rdquo; asked Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;No, but I am their friend, although I live in the land of the
            North. When they saw the Witch of the East was dead the Munchkins
            sent a swift messenger to me, and I came at once. I am the Witch
            of the North.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, gracious!&amp;rdquo; cried Dorothy. &amp;ldquo;Are you a real witch?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Yes, indeed,&amp;rdquo; answered the little woman. &amp;ldquo;But I am a good witch,
            and the people love me. I am not as powerful as the Wicked Witch was
            who ruled here, or I should have set the people free myself.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;But I thought all witches were wicked,&amp;rdquo; said the girl, who
            was half frightened at facing a real witch. &amp;ldquo;Oh, no, that is a
            great mistake. There were only four witches in all the Land of
            Oz, and two of them, those who live in the North and the South,
            are good witches. I know this is true, for I am one of them
            myself, and cannot be mistaken. Those who dwelt in the East and
            the West were, indeed, wicked witches; but now that you have
            killed one of them, there is but one Wicked Witch in all the Land
            of Oz&amp;mdash;the one who lives in the West.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;But,&amp;rdquo; said Dorothy, after a moment&amp;rsquo;s thought, &amp;ldquo;Aunt Em has
            told me that the witches were all dead&amp;mdash;years and years ago.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Who is Aunt Em?&amp;rdquo; inquired the little old woman.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;She is my aunt who lives in Kansas, where I came from.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The Witch of the North seemed to think for a time, with her
            head bowed and her eyes upon the ground. Then she looked up and
            said, &amp;ldquo;I do not know where Kansas is, for I have never heard that
            country mentioned before. But tell me, is it a civilized country?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, yes,&amp;rdquo; replied Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Then that accounts for it. In the civilized countries I
            believe there are no witches left, nor wizards, nor sorceresses,
            nor magicians. But, you see, the Land of Oz has never been
            civilized, for we are cut off from all the rest of the world.
            Therefore we still have witches and wizards amongst us.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Who are the wizards?&amp;rdquo; asked Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oz himself is the Great Wizard,&amp;rdquo; answered the Witch, sinking
            her voice to a whisper. &amp;ldquo;He is more powerful than all the rest of
            us together. He lives in the City of Emeralds.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Dorothy was going to ask another question, but just then the
            Munchkins, who had been standing silently by, gave a loud shout and
            pointed to the corner of the house where the Wicked Witch had been lying.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What is it?&amp;rdquo; asked the little old woman, and looked, and
            began to laugh. The feet of the dead Witch had disappeared
            entirely, and nothing was left but the silver shoes.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;She was so old,&amp;rdquo; explained the Witch of the North, &amp;ldquo;that she
            dried up quickly in the sun. That is the end of her. But the
            silver shoes are yours, and you shall have them to wear.&amp;rdquo;
            She reached down and picked up the shoes, and after shaking
            the dust out of them handed them to Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;The Witch of the East was proud of those silver shoes,&amp;rdquo; said
            one of the Munchkins, &amp;ldquo;and there is some charm connected with them;
            but what it is we never knew.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Dorothy carried the shoes into the house and placed them on
            the table. Then she came out again to the Munchkins and said:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I am anxious to get back to my aunt and uncle, for I am sure
            they will worry about me. Can you help me find my way?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The Munchkins and the Witch first looked at one another, and
            then at Dorothy, and then shook their heads.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;At the East, not far from here,&amp;rdquo; said one, &amp;ldquo;there is a great
            desert, and none could live to cross it.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;It is the same at the South,&amp;rdquo; said another, &amp;ldquo;for I have been
            there and seen it. The South is the country of the Quadlings.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I am told,&amp;rdquo; said the third man, &amp;ldquo;that it is the same at the West.
            And that country, where the Winkies live, is ruled by the Wicked Witch
            of the West, who would make you her slave if you passed her way.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;The North is my home,&amp;rdquo; said the old lady, &amp;ldquo;and at its edge is
            the same great desert that surrounds this Land of Oz. I&amp;rsquo;m afraid,
            my dear, you will have to live with us.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Dorothy began to sob at this, for she felt lonely among all
            these strange people. Her tears seemed to grieve the kind&amp;#8208;hearted
            Munchkins, for they immediately took out their handkerchiefs and
            began to weep also. As for the little old woman, she took off her
            cap and balanced the point on the end of her nose, while she
            counted &amp;ldquo;One, two, three&amp;rdquo; in a solemn voice. At once the cap
            changed to a slate, on which was written in big, white chalk marks:
        
        &lt;/p&gt;&lt;p&gt;&amp;ldquo;LET DOROTHY GO TO THE CITY OF EMERALDS&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The little old woman took the slate from her nose, and having
            read the words on it, asked, &amp;ldquo;Is your name Dorothy, my dear?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Yes,&amp;rdquo; answered the child, looking up and drying her tears.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Then you must go to the City of Emeralds. Perhaps Oz will help you.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Where is this city?&amp;rdquo; asked Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;It is exactly in the center of the country, and is ruled by Oz,
            the Great Wizard I told you of.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Is he a good man?&amp;rdquo; inquired the girl anxiously.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;He is a good Wizard. Whether he is a man or not I cannot tell,
            for I have never seen him.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;How can I get there?&amp;rdquo; asked Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;You must walk. It is a long journey, through a country that
            is sometimes pleasant and sometimes dark and terrible. However,
            I will use all the magic arts I know of to keep you from harm.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Won&amp;rsquo;t you go with me?&amp;rdquo; pleaded the girl, who had begun to
            look upon the little old woman as her only friend.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;No, I cannot do that,&amp;rdquo; she replied, &amp;ldquo;but I will give you my
            kiss, and no one will dare injure a person who has been kissed by
            the Witch of the North.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;She came close to Dorothy and kissed her gently on the
            forehead. Where her lips touched the girl they left a round,
            shining mark, as Dorothy found out soon after.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;The road to the City of Emeralds is paved with yellow brick,&amp;rdquo;
            said the Witch, &amp;ldquo;so you cannot miss it. When you get to Oz do not
            be afraid of him, but tell your story and ask him to help you.
            Good&amp;#8208;bye, my dear.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The three Munchkins bowed low to her and wished her a pleasant
            journey, after which they walked away through the trees. The Witch
            gave Dorothy a friendly little nod, whirled around on her left heel
            three times, and straightway disappeared, much to the surprise of
            little Toto, who barked after her loudly enough when she had gone,
            because he had been afraid even to growl while she stood by.&lt;/p&gt;
        &lt;p&gt;But Dorothy, knowing her to be a witch, had expected her to
            disappear in just that way, and was not surprised in the least.
        &lt;/p&gt;
        
        
        &lt;h2&gt;How Dorothy Saved the Scarecrow&lt;/h2&gt;
        
        &lt;p&gt;When Dorothy was left alone she began to feel hungry. So she
            went to the cupboard and cut herself some bread, which she spread
            with butter. She gave some to Toto, and taking a pail from the
            shelf she carried it down to the little brook and filled it with
            clear, sparkling water. Toto ran over to the trees and began to
            bark at the birds sitting there. Dorothy went to get him, and saw
            such delicious fruit hanging from the branches that she gathered
            some of it, finding it just what she wanted to help out her breakfast.&lt;/p&gt;
        &lt;p&gt;Then she went back to the house, and having helped herself and
            Toto to a good drink of the cool, clear water, she set about
            making ready for the journey to the City of Emeralds.&lt;/p&gt;
        &lt;p&gt;Dorothy had only one other dress, but that happened to be
            clean and was hanging on a peg beside her bed. It was gingham,
            with checks of white and blue; and although the blue was somewhat
            faded with many washings, it was still a pretty frock. The girl
            washed herself carefully, dressed herself in the clean gingham,
            and tied her pink sunbonnet on her head. She took a little basket
            and filled it with bread from the cupboard, laying a white cloth
            over the top. Then she looked down at her feet and noticed how
            old and worn her shoes were.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;They surely will never do for a long journey, Toto,&amp;rdquo; she said.
            And Toto looked up into her face with his little black eyes and wagged
            his tail to show he knew what she meant.&lt;/p&gt;
        &lt;p&gt;At that moment Dorothy saw lying on the table the silver shoes
            that had belonged to the Witch of the East.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I wonder if they will fit me,&amp;rdquo; she said to Toto. &amp;ldquo;They would be
            just the thing to take a long walk in, for they could not wear out.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;She took off her old leather shoes and tried on the silver
            ones, which fitted her as well as if they had been made for her.&lt;/p&gt;
        &lt;p&gt;Finally she picked up her basket.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Come along, Toto,&amp;rdquo; she said. &amp;ldquo;We will go to the Emerald City
            and ask the Great Oz how to get back to Kansas again.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;She closed the door, locked it, and put the key carefully in
            the pocket of her dress. And so, with Toto trotting along soberly
            behind her, she started on her journey.&lt;/p&gt;
        &lt;p&gt;There were several roads near by, but it did not take her long
            to find the one paved with yellow bricks. Within a short time she
            was walking briskly toward the Emerald City, her silver shoes
            tinkling merrily on the hard, yellow road&amp;#8208;bed. The sun shone
            bright and the birds sang sweetly, and Dorothy did not feel
            nearly so bad as you might think a little girl would who had
            been suddenly whisked away from her own country and set down
            in the midst of a strange land.&lt;/p&gt;
        &lt;p&gt;She was surprised, as she walked along, to see how pretty the
            country was about her. There were neat fences at the sides of the
            road, painted a dainty blue color, and beyond them were fields of
            grain and vegetables in abundance. Evidently the Munchkins were
            good farmers and able to raise large crops. Once in a while she
            would pass a house, and the people came out to look at her and bow
            low as she went by; for everyone knew she had been the means of
            destroying the Wicked Witch and setting them free from bondage.
            The houses of the Munchkins were odd&amp;#8208;looking dwellings, for each
            was round, with a big dome for a roof. All were painted blue,
            for in this country of the East blue was the favorite color.&lt;/p&gt;
        &lt;p&gt;Toward evening, when Dorothy was tired with her long walk and
            began to wonder where she should pass the night, she came to a
            house rather larger than the rest. On the green lawn before it
            many men and women were dancing. Five little fiddlers played as
            loudly as possible, and the people were laughing and singing,
            while a big table near by was loaded with delicious fruits and
            nuts, pies and cakes, and many other good things to eat.&lt;/p&gt;
        &lt;p&gt;The people greeted Dorothy kindly, and invited her to supper and
            to pass the night with them; for this was the home of one of the
            richest Munchkins in the land, and his friends were gathered with
            him to celebrate their freedom from the bondage of the Wicked Witch.&lt;/p&gt;
        &lt;p&gt;Dorothy ate a hearty supper and was waited upon by the rich
            Munchkin himself, whose name was Boq. Then she sat upon a settee
            and watched the people dance.&lt;/p&gt;
        &lt;p&gt;When Boq saw her silver shoes he said, &amp;ldquo;You must be a great sorceress.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Why?&amp;rdquo; asked the girl.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Because you wear silver shoes and have killed the Wicked Witch.
            Besides, you have white in your frock, and only witches and sorceresses
            wear white.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;My dress is blue and white checked,&amp;rdquo; said Dorothy, smoothing
            out the wrinkles in it.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;It is kind of you to wear that,&amp;rdquo; said Boq. &amp;ldquo;Blue is the
            color of the Munchkins, and white is the witch color. So we know
            you are a friendly witch.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Dorothy did not know what to say to this, for all the people
            seemed to think her a witch, and she knew very well she was only
            an ordinary little girl who had come by the chance of a cyclone
            into a strange land.&lt;/p&gt;
        &lt;p&gt;When she had tired watching the dancing, Boq led her into
            the house, where he gave her a room with a pretty bed in it.
            The sheets were made of blue cloth, and Dorothy slept soundly in
            them till morning, with Toto curled up on the blue rug beside her.&lt;/p&gt;
        &lt;p&gt;She ate a hearty breakfast, and watched a wee Munchkin baby,
            who played with Toto and pulled his tail and crowed and laughed in
            a way that greatly amused Dorothy. Toto was a fine curiosity to
            all the people, for they had never seen a dog before.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;How far is it to the Emerald City?&amp;rdquo; the girl asked.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I do not know,&amp;rdquo; answered Boq gravely, &amp;ldquo;for I have never been
            there. It is better for people to keep away from Oz, unless they
            have business with him. But it is a long way to the Emerald City,
            and it will take you many days. The country here is rich and
            pleasant, but you must pass through rough and dangerous places
            before you reach the end of your journey.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;This worried Dorothy a little, but she knew that only the
            Great Oz could help her get to Kansas again, so she bravely
            resolved not to turn back.&lt;/p&gt;
        &lt;p&gt;She bade her friends good&amp;#8208;bye, and again started along the road
            of yellow brick. When she had gone several miles she thought she
            would stop to rest, and so climbed to the top of the fence beside
            the road and sat down. There was a great cornfield beyond the fence,
            and not far away she saw a Scarecrow, placed high on a pole to keep
            the birds from the ripe corn.&lt;/p&gt;
        &lt;p&gt;Dorothy leaned her chin upon her hand and gazed thoughtfully
            at the Scarecrow. Its head was a small sack stuffed with straw,
            with eyes, nose, and mouth painted on it to represent a face.
            An old, pointed blue hat, that had belonged to some Munchkin,
            was perched on his head, and the rest of the figure was a blue suit
            of clothes, worn and faded, which had also been stuffed with straw.
            On the feet were some old boots with blue tops, such as every man
            wore in this country, and the figure was raised above the stalks
            of corn by means of the pole stuck up its back.&lt;/p&gt;
        &lt;p&gt;While Dorothy was looking earnestly into the queer, painted
            face of the Scarecrow, she was surprised to see one of the eyes
            slowly wink at her. She thought she must have been mistaken at first,
            for none of the scarecrows in Kansas ever wink; but presently the
            figure nodded its head to her in a friendly way. Then she climbed
            down from the fence and walked up to it, while Toto ran around the
            pole and barked.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Good day,&amp;rdquo; said the Scarecrow, in a rather husky voice.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Did you speak?&amp;rdquo; asked the girl, in wonder.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Certainly,&amp;rdquo; answered the Scarecrow. &amp;ldquo;How do you do?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I&amp;rsquo;m pretty well, thank you,&amp;rdquo; replied Dorothy politely.
        &amp;ldquo;How do you do?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I&amp;rsquo;m not feeling well,&amp;rdquo; said the Scarecrow, with a smile,
        &amp;ldquo;for it is very tedious being perched up here night and day to
            scare away crows.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Can&amp;rsquo;t you get down?&amp;rdquo; asked Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;No, for this pole is stuck up my back. If you will please
            take away the pole I shall be greatly obliged to you.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Dorothy reached up both arms and lifted the figure off the pole,
            for, being stuffed with straw, it was quite light.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Thank you very much,&amp;rdquo; said the Scarecrow, when he had been
            set down on the ground. &amp;ldquo;I feel like a new man.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Dorothy was puzzled at this, for it sounded queer to hear a
            stuffed man speak, and to see him bow and walk along beside her.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Who are you?&amp;rdquo; asked the Scarecrow when he had stretched
            himself and yawned. &amp;ldquo;And where are you going?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;My name is Dorothy,&amp;rdquo; said the girl, &amp;ldquo;and I am going to the
            Emerald City, to ask the Great Oz to send me back to Kansas.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Where is the Emerald City?&amp;rdquo; he inquired. &amp;ldquo;And who is Oz?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Why, don&amp;rsquo;t you know?&amp;rdquo; she returned, in surprise.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;No, indeed. I don&amp;rsquo;t know anything. You see, I am stuffed,
            so I have no brains at all,&amp;rdquo; he answered sadly.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh,&amp;rdquo; said Dorothy, &amp;ldquo;I&amp;rsquo;m awfully sorry for you.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Do you think,&amp;rdquo; he asked, &amp;ldquo;if I go to the Emerald City with you,
            that Oz would give me some brains?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I cannot tell,&amp;rdquo; she returned, &amp;ldquo;but you may come with me,
            if you like. If Oz will not give you any brains you will be
            no worse off than you are now.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That is true,&amp;rdquo; said the Scarecrow. &amp;ldquo;You see,&amp;rdquo; he continued
            confidentially, &amp;ldquo;I don&amp;rsquo;t mind my legs and arms and body being
            stuffed, because I cannot get hurt. If anyone treads on my toes
            or sticks a pin into me, it doesn&amp;rsquo;t matter, for I can&amp;rsquo;t feel it.
            But I do not want people to call me a fool, and if my head stays
            stuffed with straw instead of with brains, as yours is, how am I
            ever to know anything?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I understand how you feel,&amp;rdquo; said the little girl, who was
            truly sorry for him. &amp;ldquo;If you will come with me I&amp;rsquo;ll ask Oz to
            do all he can for you.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Thank you,&amp;rdquo; he answered gratefully.&lt;/p&gt;
        &lt;p&gt;They walked back to the road. Dorothy helped him over the
            fence, and they started along the path of yellow brick for the
            Emerald City.&lt;/p&gt;
        &lt;p&gt;Toto did not like this addition to the party at first.
            He smelled around the stuffed man as if he suspected there
            might be a nest of rats in the straw, and he often growled
            in an unfriendly way at the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Don&amp;rsquo;t mind Toto,&amp;rdquo; said Dorothy to her new friend.
        &amp;ldquo;He never bites.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, I&amp;rsquo;m not afraid,&amp;rdquo; replied the Scarecrow. &amp;ldquo;He can&amp;rsquo;t hurt
            the straw. Do let me carry that basket for you. I shall not mind
            it, for I can&amp;rsquo;t get tired. I&amp;rsquo;ll tell you a secret,&amp;rdquo; he continued,
            as he walked along. &amp;ldquo;There is only one thing in the world I am
            afraid of.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What is that?&amp;rdquo; asked Dorothy; &amp;ldquo;the Munchkin farmer who made you?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;No,&amp;rdquo; answered the Scarecrow; &amp;ldquo;it&amp;rsquo;s a lighted match.&amp;rdquo;
        &lt;/p&gt;
        
        
        &lt;h2&gt;The Road Through the Forest&lt;/h2&gt;
        
        &lt;p&gt;After a few hours the road began to be rough, and the walking
            grew so difficult that the Scarecrow often stumbled over the
            yellow bricks, which were here very uneven. Sometimes, indeed,
            they were broken or missing altogether, leaving holes that Toto
            jumped across and Dorothy walked around. As for the Scarecrow,
            having no brains, he walked straight ahead, and so stepped into
            the holes and fell at full length on the hard bricks. It never hurt
            him, however, and Dorothy would pick him up and set him upon his
            feet again, while he joined her in laughing merrily at his own mishap.&lt;/p&gt;
        &lt;p&gt;The farms were not nearly so well cared for here as they were
            farther back. There were fewer houses and fewer fruit trees, and
            the farther they went the more dismal and lonesome the country became.&lt;/p&gt;
        &lt;p&gt;At noon they sat down by the roadside, near a little brook,
            and Dorothy opened her basket and got out some bread. She offered
            a piece to the Scarecrow, but he refused.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I am never hungry,&amp;rdquo; he said, &amp;ldquo;and it is a lucky thing I am not,
            for my mouth is only painted, and if I should cut a hole in it so
            I could eat, the straw I am stuffed with would come out, and that
            would spoil the shape of my head.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Dorothy saw at once that this was true, so she only nodded and
            went on eating her bread.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Tell me something about yourself and the country you came from,&amp;rdquo;
            said the Scarecrow, when she had finished her dinner. So she told him
            all about Kansas, and how gray everything was there, and how the cyclone
            had carried her to this queer Land of Oz.&lt;/p&gt;
        &lt;p&gt;The Scarecrow listened carefully, and said, &amp;ldquo;I cannot
            understand why you should wish to leave this beautiful country and
            go back to the dry, gray place you call Kansas.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That is because you have no brains&amp;rdquo; answered the girl.
        &amp;ldquo;No matter how dreary and gray our homes are, we people of
            flesh and blood would rather live there than in any other country,
            be it ever so beautiful. There is no place like home.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The Scarecrow sighed.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Of course I cannot understand it,&amp;rdquo; he said. &amp;ldquo;If your heads
            were stuffed with straw, like mine, you would probably all live in
            the beautiful places, and then Kansas would have no people at all.
            It is fortunate for Kansas that you have brains.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Won&amp;rsquo;t you tell me a story, while we are resting?&amp;rdquo; asked the child.&lt;/p&gt;
        &lt;p&gt;The Scarecrow looked at her reproachfully, and answered:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;My life has been so short that I really know nothing whatever.
            I was only made day before yesterday. What happened in the world
            before that time is all unknown to me. Luckily, when the farmer
            made my head, one of the first things he did was to paint my ears,
            so that I heard what was going on. There was another Munchkin with him,
            and the first thing I heard was the farmer saying, &amp;lsquo;How do you like
            those ears?&amp;rsquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;&amp;lsquo;They aren&amp;rsquo;t straight,&amp;rsquo;&amp;rdquo; answered the other.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;&amp;lsquo;Never mind,&amp;rsquo;&amp;rdquo; said the farmer. &amp;ldquo;&amp;lsquo;They are ears just the same,&amp;rsquo;&amp;rdquo;
            which was true enough.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;&amp;lsquo;Now I&amp;rsquo;ll make the eyes,&amp;rsquo;&amp;rdquo; said the farmer. So he painted my
            right eye, and as soon as it was finished I found myself looking
            at him and at everything around me with a great deal of curiosity,
            for this was my first glimpse of the world.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;&amp;lsquo;That&amp;rsquo;s a rather pretty eye,&amp;rsquo;&amp;rdquo; remarked the Munchkin who was
            watching the farmer. &amp;ldquo;&amp;lsquo;Blue paint is just the color for eyes.&amp;rsquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;&amp;lsquo;I think I&amp;rsquo;ll make the other a little bigger,&amp;rsquo;&amp;rdquo; said the
            farmer. And when the second eye was done I could see much better
            than before. Then he made my nose and my mouth. But I did not
            speak, because at that time I didn&amp;rsquo;t know what a mouth was for.
            I had the fun of watching them make my body and my arms and legs;
            and when they fastened on my head, at last, I felt very proud,
            for I thought I was just as good a man as anyone.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;&amp;lsquo;This fellow will scare the crows fast enough,&amp;rsquo; said the
            farmer. &amp;lsquo;He looks just like a man.&amp;rsquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;&amp;lsquo;Why, he is a man,&amp;rsquo; said the other, and I quite agreed with him.
            The farmer carried me under his arm to the cornfield, and set me up
            on a tall stick, where you found me. He and his friend soon after
            walked away and left me alone.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I did not like to be deserted this way. So I tried to walk
            after them. But my feet would not touch the ground, and I was
            forced to stay on that pole. It was a lonely life to lead, for I
            had nothing to think of, having been made such a little while before.
            Many crows and other birds flew into the cornfield, but as soon as
            they saw me they flew away again, thinking I was a Munchkin; and this
            pleased me and made me feel that I was quite an important person.
            By and by an old crow flew near me, and after looking at me carefully
            he perched upon my shoulder and said:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;&amp;lsquo;I wonder if that farmer thought to fool me in this clumsy
            manner. Any crow of sense could see that you are only stuffed
            with straw.&amp;rsquo; Then he hopped down at my feet and ate all the corn
            he wanted. The other birds, seeing he was not harmed by me, came
            to eat the corn too, so in a short time there was a great flock of
            them about me.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I felt sad at this, for it showed I was not such a good
            Scarecrow after all; but the old crow comforted me, saying,
        &amp;lsquo;If you only had brains in your head you would be as good a man
            as any of them, and a better man than some of them. Brains are
            the only things worth having in this world, no matter whether one
            is a crow or a man.&amp;rsquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;After the crows had gone I thought this over, and decided I
            would try hard to get some brains. By good luck you came along
            and pulled me off the stake, and from what you say I am sure the
            Great Oz will give me brains as soon as we get to the Emerald City.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I hope so,&amp;rdquo; said Dorothy earnestly, &amp;ldquo;since you seem anxious
            to have them.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, yes; I am anxious,&amp;rdquo; returned the Scarecrow. &amp;ldquo;It is such
            an uncomfortable feeling to know one is a fool.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Well,&amp;rdquo; said the girl, &amp;ldquo;let us go.&amp;rdquo; And she handed the basket
            to the Scarecrow.&lt;/p&gt;
        &lt;p&gt;There were no fences at all by the roadside now, and the land
            was rough and untilled. Toward evening they came to a great
            forest, where the trees grew so big and close together that their
            branches met over the road of yellow brick. It was almost dark
            under the trees, for the branches shut out the daylight; but the
            travelers did not stop, and went on into the forest.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;If this road goes in, it must come out,&amp;rdquo; said the Scarecrow,
        &amp;ldquo;and as the Emerald City is at the other end of the road, we must
            go wherever it leads us.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Anyone would know that,&amp;rdquo; said Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Certainly; that is why I know it,&amp;rdquo; returned the Scarecrow.
        &amp;ldquo;If it required brains to figure it out, I never should have said it.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;After an hour or so the light faded away, and they found
            themselves stumbling along in the darkness. Dorothy could not see
            at all, but Toto could, for some dogs see very well in the dark;
            and the Scarecrow declared he could see as well as by day. So she
            took hold of his arm and managed to get along fairly well.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;If you see any house, or any place where we can pass the
            night,&amp;rdquo; she said, &amp;ldquo;you must tell me; for it is very uncomfortable
            walking in the dark.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Soon after the Scarecrow stopped.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I see a little cottage at the right of us,&amp;rdquo; he said,
        &amp;ldquo;built of logs and branches. Shall we go there?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Yes, indeed,&amp;rdquo; answered the child. &amp;ldquo;I am all tired out.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So the Scarecrow led her through the trees until they reached
            the cottage, and Dorothy entered and found a bed of dried leaves
            in one corner. She lay down at once, and with Toto beside her
            soon fell into a sound sleep. The Scarecrow, who was never tired,
            stood up in another corner and waited patiently until morning came.
        &lt;/p&gt;
        
        
        &lt;h2&gt;The Rescue of the Tin Woodman&lt;/h2&gt;
        
        &lt;p&gt;When Dorothy awoke the sun was shining through the trees and
            Toto had long been out chasing birds around him and squirrels.
            She sat up and looked around her. Scarecrow, still standing
            patiently in his corner, waiting for her.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We must go and search for water,&amp;rdquo; she said to him.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Why do you want water?&amp;rdquo; he asked.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;To wash my face clean after the dust of the road, and to
            drink, so the dry bread will not stick in my throat.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;It must be inconvenient to be made of flesh,&amp;rdquo; said the
            Scarecrow thoughtfully, &amp;ldquo;for you must sleep, and eat and drink.
            However, you have brains, and it is worth a lot of bother to be
            able to think properly.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;They left the cottage and walked through the trees until they
            found a little spring of clear water, where Dorothy drank and
            bathed and ate her breakfast. She saw there was not much bread
            left in the basket, and the girl was thankful the Scarecrow did
            not have to eat anything, for there was scarcely enough for
            herself and Toto for the day.&lt;/p&gt;
        &lt;p&gt;When she had finished her meal, and was about to go back to the
            road of yellow brick, she was startled to hear a deep groan near by.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What was that?&amp;rdquo; she asked timidly.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I cannot imagine,&amp;rdquo; replied the Scarecrow; &amp;ldquo;but we can go and see.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Just then another groan reached their ears, and the sound
            seemed to come from behind them. They turned and walked through
            the forest a few steps, when Dorothy discovered something shining
            in a ray of sunshine that fell between the trees. She ran to the
            place and then stopped short, with a little cry of surprise.&lt;/p&gt;
        &lt;p&gt;One of the big trees had been partly chopped through, and
            standing beside it, with an uplifted axe in his hands, was a man
            made entirely of tin. His head and arms and legs were jointed
            upon his body, but he stood perfectly motionless, as if he could
            not stir at all.&lt;/p&gt;
        &lt;p&gt;Dorothy looked at him in amazement, and so did the Scarecrow,
            while Toto barked sharply and made a snap at the tin legs, which
            hurt his teeth.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Did you groan?&amp;rdquo; asked Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Yes,&amp;rdquo; answered the tin man, &amp;ldquo;I did. I&amp;rsquo;ve been groaning for more
            than a year, and no one has ever heard me before or come to help me.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What can I do for you?&amp;rdquo; she inquired softly, for she was
            moved by the sad voice in which the man spoke.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Get an oil&amp;#8208;can and oil my joints,&amp;rdquo; he answered. &amp;ldquo;They are
            rusted so badly that I cannot move them at all; if I am well oiled
            I shall soon be all right again. You will find an oil&amp;#8208;can on a
            shelf in my cottage.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Dorothy at once ran back to the cottage and found the oil&amp;#8208;can,
            and then she returned and asked anxiously, &amp;ldquo;Where are your joints?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oil my neck, first,&amp;rdquo; replied the Tin Woodman. So she oiled it,
            and as it was quite badly rusted the Scarecrow took hold of the tin
            head and moved it gently from side to side until it worked freely,
            and then the man could turn it himself.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Now oil the joints in my arms,&amp;rdquo; he said. And Dorothy oiled
            them and the Scarecrow bent them carefully until they were quite
            free from rust and as good as new.&lt;/p&gt;
        &lt;p&gt;The Tin Woodman gave a sigh of satisfaction and lowered his
            axe, which he leaned against the tree.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;This is a great comfort,&amp;rdquo; he said. &amp;ldquo;I have been holding that
            axe in the air ever since I rusted, and I&amp;rsquo;m glad to be able to put
            it down at last. Now, if you will oil the joints of my legs, I
            shall be all right once more.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So they oiled his legs until he could move them freely; and he
            thanked them again and again for his release, for he seemed a very
            polite creature, and very grateful.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I might have stood there always if you had not come along,&amp;rdquo; he said;
        &amp;ldquo;so you have certainly saved my life. How did you happen to be here?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We are on our way to the Emerald City to see the Great Oz,&amp;rdquo;
            she answered, &amp;ldquo;and we stopped at your cottage to pass the night.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Why do you wish to see Oz?&amp;rdquo; he asked.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I want him to send me back to Kansas, and the Scarecrow wants
            him to put a few brains into his head,&amp;rdquo; she replied.&lt;/p&gt;
        &lt;p&gt;The Tin Woodman appeared to think deeply for a moment. Then he said:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Do you suppose Oz could give me a heart?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Why, I guess so,&amp;rdquo; Dorothy answered. &amp;ldquo;It would be as easy as
            to give the Scarecrow brains.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;True,&amp;rdquo; the Tin Woodman returned. &amp;ldquo;So, if you will allow me
            to join your party, I will also go to the Emerald City and ask Oz
            to help me.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Come along,&amp;rdquo; said the Scarecrow heartily, and Dorothy added
            that she would be pleased to have his company. So the Tin Woodman
            shouldered his axe and they all passed through the forest until
            they came to the road that was paved with yellow brick.&lt;/p&gt;
        &lt;p&gt;The Tin Woodman had asked Dorothy to put the oil&amp;#8208;can in her basket.
        &amp;ldquo;For,&amp;rdquo; he said, &amp;ldquo;if I should get caught in the rain, and rust again,
            I would need the oil&amp;#8208;can badly.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;It was a bit of good luck to have their new comrade join the
            party, for soon after they had begun their journey again they came
            to a place where the trees and branches grew so thick over the
            road that the travelers could not pass. But the Tin Woodman set
            to work with his axe and chopped so well that soon he cleared a
            passage for the entire party.&lt;/p&gt;
        &lt;p&gt;Dorothy was thinking so earnestly as they walked along that
            she did not notice when the Scarecrow stumbled into a hole and
            rolled over to the side of the road. Indeed he was obliged to
            call to her to help him up again.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Why didn&amp;rsquo;t you walk around the hole?&amp;rdquo; asked the Tin Woodman.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I don&amp;rsquo;t know enough,&amp;rdquo; replied the Scarecrow cheerfully.
        &amp;ldquo;My head is stuffed with straw, you know, and that is why I am
            going to Oz to ask him for some brains.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, I see,&amp;rdquo; said the Tin Woodman. &amp;ldquo;But, after all, brains
            are not the best things in the world.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Have you any?&amp;rdquo; inquired the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;No, my head is quite empty,&amp;rdquo; answered the Woodman.
        &amp;ldquo;But once I had brains, and a heart also; so, having tried
            them both, I should much rather have a heart.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And why is that?&amp;rdquo; asked the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I will tell you my story, and then you will know.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So, while they were walking through the forest, the Tin Woodman
            told the following story:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I was born the son of a woodman who chopped down trees in the
            forest and sold the wood for a living. When I grew up, I too became
            a woodchopper, and after my father died I took care of my old mother
            as long as she lived. Then I made up my mind that instead of living
            alone I would marry, so that I might not become lonely.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;There was one of the Munchkin girls who was so beautiful
            that I soon grew to love her with all my heart. She, on her part,
            promised to marry me as soon as I could earn enough money to
            build a better house for her; so I set to work harder than ever.
            But the girl lived with an old woman who did not want her to marry
            anyone, for she was so lazy she wished the girl to remain with her
            and do the cooking and the housework. So the old woman went to
            the Wicked Witch of the East, and promised her two sheep and a cow
            if she would prevent the marriage. Thereupon the Wicked Witch
            enchanted my axe, and when I was chopping away at my best one day,
            for I was anxious to get the new house and my wife as soon as
            possible, the axe slipped all at once and cut off my left leg.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;This at first seemed a great misfortune, for I knew a
            one&amp;#8208;legged man could not do very well as a wood&amp;#8208;chopper. So I
            went to a tinsmith and had him make me a new leg out of tin. The
            leg worked very well, once I was used to it. But my action
            angered the Wicked Witch of the East, for she had promised the old
            woman I should not marry the pretty Munchkin girl. When I began
            chopping again, my axe slipped and cut off my right leg. Again I
            went to the tinsmith, and again he made me a leg out of tin.
            After this the enchanted axe cut off my arms, one after the
            other; but, nothing daunted, I had them replaced with tin ones.
            The Wicked Witch then made the axe slip and cut off my head, and
            at first I thought that was the end of me. But the tinsmith
            happened to come along, and he made me a new head out of tin.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I thought I had beaten the Wicked Witch then, and I worked
            harder than ever; but I little knew how cruel my enemy could be.
            She thought of a new way to kill my love for the beautiful
            Munchkin maiden, and made my axe slip again, so that it cut right
            through my body, splitting me into two halves. Once more the
            tinsmith came to my help and made me a body of tin, fastening my
            tin arms and legs and head to it, by means of joints, so that I
            could move around as well as ever. But, alas! I had now no
            heart, so that I lost all my love for the Munchkin girl, and did
            not care whether I married her or not. I suppose she is still
            living with the old woman, waiting for me to come after her.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;My body shone so brightly in the sun that I felt very proud
            of it and it did not matter now if my axe slipped, for it could
            not cut me. There was only one danger&amp;mdash;that my joints would
            rust; but I kept an oil&amp;#8208;can in my cottage and took care to oil
            myself whenever I needed it. However, there came a day when I
            forgot to do this, and, being caught in a rainstorm, before I
            thought of the danger my joints had rusted, and I was left to
            stand in the woods until you came to help me. It was a terrible
            thing to undergo, but during the year I stood there I had time to
            think that the greatest loss I had known was the loss of my heart.
            While I was in love I was the happiest man on earth; but no one
            can love who has not a heart, and so I am resolved to ask Oz to
            give me one. If he does, I will go back to the Munchkin maiden
            and marry her.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Both Dorothy and the Scarecrow had been greatly interested
            in the story of the Tin Woodman, and now they knew why he was so
            anxious to get a new heart.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;All the same,&amp;rdquo; said the Scarecrow, &amp;ldquo;I shall ask for brains
            instead of a heart; for a fool would not know what to do with a
            heart if he had one.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I shall take the heart,&amp;rdquo; returned the Tin Woodman; &amp;ldquo;for
            brains do not make one happy, and happiness is the best thing
            in the world.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Dorothy did not say anything, for she was puzzled to know
            which of her two friends was right, and she decided if she could
            only get back to Kansas and Aunt Em, it did not matter so much
            whether the Woodman had no brains and the Scarecrow no heart,
            or each got what he wanted.&lt;/p&gt;
        &lt;p&gt;What worried her most was that the bread was nearly gone, and
            another meal for herself and Toto would empty the basket. To be sure
            neither the Woodman nor the Scarecrow ever ate anything, but she was
            not made of tin nor straw, and could not live unless she was fed.
        &lt;/p&gt;
        
        
        &lt;h2&gt;The Cowardly Lion&lt;/h2&gt;
        
        &lt;p&gt;All this time Dorothy and her companions had been walking
            through the thick woods. The road was still paved with yellow
            brick, but these were much covered by dried branches and dead
            leaves from the trees, and the walking was not at all good.&lt;/p&gt;
        &lt;p&gt;There were few birds in this part of the forest, for birds
            love the open country where there is plenty of sunshine. But now
            and then there came a deep growl from some wild animal hidden
            among the trees. These sounds made the little girl&amp;rsquo;s heart beat
            fast, for she did not know what made them; but Toto knew, and he
            walked close to Dorothy&amp;rsquo;s side, and did not even bark in return.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;How long will it be,&amp;rdquo; the child asked of the Tin Woodman,
        &amp;ldquo;before we are out of the forest?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I cannot tell,&amp;rdquo; was the answer, &amp;ldquo;for I have never been to the
            Emerald City. But my father went there once, when I was a boy,
            and he said it was a long journey through a dangerous country,
            although nearer to the city where Oz dwells the country is beautiful.
            But I am not afraid so long as I have my oil&amp;#8208;can, and nothing can hurt
            the Scarecrow, while you bear upon your forehead the mark of the
            Good Witch&amp;rsquo;s kiss, and that will protect you from harm.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;But Toto!&amp;rdquo; said the girl anxiously. &amp;ldquo;What will protect him?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We must protect him ourselves if he is in danger,&amp;rdquo; replied
            the Tin Woodman.&lt;/p&gt;
        &lt;p&gt;Just as he spoke there came from the forest a terrible roar,
            and the next moment a great Lion bounded into the road. With one
            blow of his paw he sent the Scarecrow spinning over and over to
            the edge of the road, and then he struck at the Tin Woodman with
            his sharp claws. But, to the Lion&amp;rsquo;s surprise, he could make no
            impression on the tin, although the Woodman fell over in the road
            and lay still.&lt;/p&gt;
        &lt;p&gt;Little Toto, now that he had an enemy to face, ran barking
            toward the Lion, and the great beast had opened his mouth to bite
            the dog, when Dorothy, fearing Toto would be killed, and heedless
            of danger, rushed forward and slapped the Lion upon his nose as
            hard as she could, while she cried out:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Don&amp;rsquo;t you dare to bite Toto! You ought to be ashamed of
            yourself, a big beast like you, to bite a poor little dog!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I didn&amp;rsquo;t bite him,&amp;rdquo; said the Lion, as he rubbed his nose with
            his paw where Dorothy had hit it.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;No, but you tried to,&amp;rdquo; she retorted. &amp;ldquo;You are nothing but a
            big coward.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I know it,&amp;rdquo; said the Lion, hanging his head in shame. &amp;ldquo;I&amp;rsquo;ve
            always known it. But how can I help it?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I don&amp;rsquo;t know, I&amp;rsquo;m sure. To think of your striking a stuffed
            man, like the poor Scarecrow!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Is he stuffed?&amp;rdquo; asked the Lion in surprise, as he watched her
            pick up the Scarecrow and set him upon his feet, while she patted
            him into shape again.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Of course he&amp;rsquo;s stuffed,&amp;rdquo; replied Dorothy, who was still angry.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That&amp;rsquo;s why he went over so easily,&amp;rdquo; remarked the Lion.
        &amp;ldquo;It astonished me to see him whirl around so. Is the other one
            stuffed also?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;No,&amp;rdquo; said Dorothy, &amp;ldquo;he&amp;rsquo;s made of tin.&amp;rdquo; And she helped the
            Woodman up again.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That&amp;rsquo;s why he nearly blunted my claws,&amp;rdquo; said the Lion.
        &amp;ldquo;When they scratched against the tin it made a cold shiver run
            down my back. What is that little animal you are so tender of?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;He is my dog, Toto,&amp;rdquo; answered Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Is he made of tin, or stuffed?&amp;rdquo; asked the Lion.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Neither. He&amp;rsquo;s a&amp;mdash;a&amp;mdash;a meat dog,&amp;rdquo; said the girl.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh! He&amp;rsquo;s a curious animal and seems remarkably small,
            now that I look at him. No one would think of biting such a
            little thing, except a coward like me,&amp;rdquo; continued the Lion sadly.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What makes you a coward?&amp;rdquo; asked Dorothy, looking at the great
            beast in wonder, for he was as big as a small horse.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;It&amp;rsquo;s a mystery,&amp;rdquo; replied the Lion. &amp;ldquo;I suppose I was born
            that way. All the other animals in the forest naturally expect me
            to be brave, for the Lion is everywhere thought to be the King of
            Beasts. I learned that if I roared very loudly every living thing
            was frightened and got out of my way. Whenever I&amp;rsquo;ve met a man
            I&amp;rsquo;ve been awfully scared; but I just roared at him, and he has
            always run away as fast as he could go. If the elephants and the
            tigers and the bears had ever tried to fight me, I should have run
            myself&amp;mdash;I&amp;rsquo;m such a coward; but just as soon as they hear me roar
            they all try to get away from me, and of course I let them go.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;But that isn&amp;rsquo;t right. The King of Beasts shouldn&amp;rsquo;t be a coward,&amp;rdquo;
            said the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I know it,&amp;rdquo; returned the Lion, wiping a tear from his eye
            with the tip of his tail. &amp;ldquo;It is my great sorrow, and makes my
            life very unhappy. But whenever there is danger, my heart begins
            to beat fast.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Perhaps you have heart disease,&amp;rdquo; said the Tin Woodman.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;It may be,&amp;rdquo; said the Lion.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;If you have,&amp;rdquo; continued the Tin Woodman, &amp;ldquo;you ought to be glad,
            for it proves you have a heart. For my part, I have no heart; so I
            cannot have heart disease.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Perhaps,&amp;rdquo; said the Lion thoughtfully, &amp;ldquo;if I had no heart I should
            not be a coward.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Have you brains?&amp;rdquo; asked the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I suppose so. I&amp;rsquo;ve never looked to see,&amp;rdquo; replied the Lion.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I am going to the Great Oz to ask him to give me some,&amp;rdquo;
            remarked the Scarecrow, &amp;ldquo;for my head is stuffed with straw.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And I am going to ask him to give me a heart,&amp;rdquo; said the Woodman.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And I am going to ask him to send Toto and me back to Kansas,&amp;rdquo;
            added Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Do you think Oz could give me courage?&amp;rdquo; asked the Cowardly Lion.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Just as easily as he could give me brains,&amp;rdquo; said the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Or give me a heart,&amp;rdquo; said the Tin Woodman.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Or send me back to Kansas,&amp;rdquo; said Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Then, if you don&amp;rsquo;t mind, I&amp;rsquo;ll go with you,&amp;rdquo; said the Lion,
        &amp;ldquo;for my life is simply unbearable without a bit of courage.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;You will be very welcome,&amp;rdquo; answered Dorothy, &amp;ldquo;for you will help
            to keep away the other wild beasts. It seems to me they must be more
            cowardly than you are if they allow you to scare them so easily.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;They really are,&amp;rdquo; said the Lion, &amp;ldquo;but that doesn&amp;rsquo;t make me any braver,
            and as long as I know myself to be a coward I shall be unhappy.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So once more the little company set off upon the journey, the
            Lion walking with stately strides at Dorothy&amp;rsquo;s side. Toto did not
            approve this new comrade at first, for he could not forget how
            nearly he had been crushed between the Lion&amp;rsquo;s great jaws. But
            after a time he became more at ease, and presently Toto and the
            Cowardly Lion had grown to be good friends.&lt;/p&gt;
        &lt;p&gt;During the rest of that day there was no other adventure to
            mar the peace of their journey. Once, indeed, the Tin Woodman
            stepped upon a beetle that was crawling along the road, and killed
            the poor little thing. This made the Tin Woodman very unhappy,
            for he was always careful not to hurt any living creature; and as
            he walked along he wept several tears of sorrow and regret. These
            tears ran slowly down his face and over the hinges of his jaw, and
            there they rusted. When Dorothy presently asked him a question
            the Tin Woodman could not open his mouth, for his jaws were
            tightly rusted together. He became greatly frightened at this and
            made many motions to Dorothy to relieve him, but she could not
            understand. The Lion was also puzzled to know what was wrong.
            But the Scarecrow seized the oil&amp;#8208;can from Dorothy&amp;rsquo;s basket and
            oiled the Woodman&amp;rsquo;s jaws, so that after a few moments he could
            talk as well as before.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;This will serve me a lesson,&amp;rdquo; said he, &amp;ldquo;to look where I step.
            For if I should kill another bug or beetle I should surely cry again,
            and crying rusts my jaws so that I cannot speak.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Thereafter he walked very carefully, with his eyes on the road,
            and when he saw a tiny ant toiling by he would step over it, so as
            not to harm it. The Tin Woodman knew very well he had no heart, and
            therefore he took great care never to be cruel or unkind to anything.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;You people with hearts,&amp;rdquo; he said, &amp;ldquo;have something to guide you, and
            need never do wrong; but I have no heart, and so I must be very careful.
            When Oz gives me a heart of course I needn&amp;rsquo;t mind so much.&amp;rdquo;
        &lt;/p&gt;
        
        
        &lt;h2&gt;The Journey to the Great Oz&lt;/h2&gt;
        
        &lt;p&gt;They were obliged to camp out that night under a large tree in
            the forest, for there were no houses near. The tree made a good,
            thick covering to protect them from the dew, and the Tin Woodman
            chopped a great pile of wood with his axe and Dorothy built a
            splendid fire that warmed her and made her feel less lonely. She
            and Toto ate the last of their bread, and now she did not know
            what they would do for breakfast.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;If you wish,&amp;rdquo; said the Lion, &amp;ldquo;I will go into the forest and
            kill a deer for you. You can roast it by the fire, since your
            tastes are so peculiar that you prefer cooked food, and then you
            will have a very good breakfast.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Don&amp;rsquo;t! Please don&amp;rsquo;t,&amp;rdquo; begged the Tin Woodman. &amp;ldquo;I should
            certainly weep if you killed a poor deer, and then my jaws would
            rust again.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;But the Lion went away into the forest and found his own supper,
            and no one ever knew what it was, for he didn&amp;rsquo;t mention it. And the
            Scarecrow found a tree full of nuts and filled Dorothy&amp;rsquo;s basket with them,
            so that she would not be hungry for a long time. She thought this was
            very kind and thoughtful of the Scarecrow, but she laughed heartily at the
            awkward way in which the poor creature picked up the nuts. His padded
            hands were so clumsy and the nuts were so small that he dropped almost
            as many as he put in the basket. But the Scarecrow did not mind how long
            it took him to fill the basket, for it enabled him to keep away from the fire,
            as he feared a spark might get into his straw and burn him up. So he kept a
            good distance away from the flames, and only came near to cover Dorothy with
            dry leaves when she lay down to sleep. These kept her very snug and warm,
            and she slept soundly until morning.&lt;/p&gt;
        &lt;p&gt;When it was daylight, the girl bathed her face in a little rippling brook,
            and soon after they all started toward the Emerald City.&lt;/p&gt;
        &lt;p&gt;This was to be an eventful day for the travelers. They had
            hardly been walking an hour when they saw before them a great
            ditch that crossed the road and divided the forest as far as they
            could see on either side. It was a very wide ditch, and when they
            crept up to the edge and looked into it they could see it was also
            very deep, and there were many big, jagged rocks at the bottom.
            The sides were so steep that none of them could climb down, and
            for a moment it seemed that their journey must end.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What shall we do?&amp;rdquo; asked Dorothy despairingly.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I haven&amp;rsquo;t the faintest idea,&amp;rdquo; said the Tin Woodman, and the
            Lion shook his shaggy mane and looked thoughtful.&lt;/p&gt;
        &lt;p&gt;But the Scarecrow said, &amp;ldquo;We cannot fly, that is certain.
            Neither can we climb down into this great ditch. Therefore,
            if we cannot jump over it, we must stop where we are.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I think I could jump over it,&amp;rdquo; said the Cowardly Lion, after
            measuring the distance carefully in his mind.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Then we are all right,&amp;rdquo; answered the Scarecrow, &amp;ldquo;for you can
            carry us all over on your back, one at a time.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Well, I&amp;rsquo;ll try it,&amp;rdquo; said the Lion. &amp;ldquo;Who will go first?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I will,&amp;rdquo; declared the Scarecrow, &amp;ldquo;for, if you found that you
            could not jump over the gulf, Dorothy would be killed, or the Tin
            Woodman badly dented on the rocks below. But if I am on your back
            it will not matter so much, for the fall would not hurt me at all.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I am terribly afraid of falling, myself,&amp;rdquo; said the Cowardly
            Lion, &amp;ldquo;but I suppose there is nothing to do but try it. So get on
            my back and we will make the attempt.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The Scarecrow sat upon the Lion&amp;rsquo;s back, and the big beast
            walked to the edge of the gulf and crouched down.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Why don&amp;rsquo;t you run and jump?&amp;rdquo; asked the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Because that isn&amp;rsquo;t the way we Lions do these things,&amp;rdquo; he replied.
            Then giving a great spring, he shot through the air and landed safely
            on the other side. They were all greatly pleased to see how easily
            he did it, and after the Scarecrow had got down from his back the Lion
            sprang across the ditch again.&lt;/p&gt;
        &lt;p&gt;Dorothy thought she would go next; so she took Toto in her
            arms and climbed on the Lion&amp;rsquo;s back, holding tightly to his mane
            with one hand. The next moment it seemed as if she were flying
            through the air; and then, before she had time to think about it,
            she was safe on the other side. The Lion went back a third time
            and got the Tin Woodman, and then they all sat down for a few
            moments to give the beast a chance to rest, for his great leaps
            had made his breath short, and he panted like a big dog that has
            been running too long.&lt;/p&gt;
        &lt;p&gt;They found the forest very thick on this side, and it looked
            dark and gloomy. After the Lion had rested they started along the
            road of yellow brick, silently wondering, each in his own mind, if
            ever they would come to the end of the woods and reach the bright
            sunshine again. To add to their discomfort, they soon heard strange
            noises in the depths of the forest, and the Lion whispered to them
            that it was in this part of the country that the Kalidahs lived.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What are the Kalidahs?&amp;rdquo; asked the girl.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;They are monstrous beasts with bodies like bears and heads
            like tigers,&amp;rdquo; replied the Lion, &amp;ldquo;and with claws so long and sharp
            that they could tear me in two as easily as I could kill Toto.
            I&amp;rsquo;m terribly afraid of the Kalidahs.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I&amp;rsquo;m not surprised that you are,&amp;rdquo; returned Dorothy.
        &amp;ldquo;They must be dreadful beasts.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The Lion was about to reply when suddenly they came to another
            gulf across the road. But this one was so broad and deep that the
            Lion knew at once he could not leap across it.&lt;/p&gt;
        &lt;p&gt;So they sat down to consider what they should do, and after
            serious thought the Scarecrow said:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Here is a great tree, standing close to the ditch. If the
            Tin Woodman can chop it down, so that it will fall to the other
            side, we can walk across it easily.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That is a first&amp;#8208;rate idea,&amp;rdquo; said the Lion. &amp;ldquo;One would almost
            suspect you had brains in your head, instead of straw.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The Woodman set to work at once, and so sharp was his axe that
            the tree was soon chopped nearly through. Then the Lion put his
            strong front legs against the tree and pushed with all his might,
            and slowly the big tree tipped and fell with a crash across the
            ditch, with its top branches on the other side.&lt;/p&gt;
        &lt;p&gt;They had just started to cross this queer bridge when a sharp growl
            made them all look up, and to their horror they saw running toward them
            two great beasts with bodies like bears and heads like tigers.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;They are the Kalidahs!&amp;rdquo; said the Cowardly Lion, beginning to tremble.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Quick!&amp;rdquo; cried the Scarecrow. &amp;ldquo;Let us cross over.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So Dorothy went first, holding Toto in her arms, the Tin
            Woodman followed, and the Scarecrow came next. The Lion, although
            he was certainly afraid, turned to face the Kalidahs, and then he
            gave so loud and terrible a roar that Dorothy screamed and the
            Scarecrow fell over backward, while even the fierce beasts stopped
            short and looked at him in surprise.&lt;/p&gt;
        &lt;p&gt;But, seeing they were bigger than the Lion, and remembering
            that there were two of them and only one of him, the Kalidahs
            again rushed forward, and the Lion crossed over the tree and
            turned to see what they would do next. Without stopping an
            instant the fierce beasts also began to cross the tree.
            And the Lion said to Dorothy:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We are lost, for they will surely tear us to pieces with
            their sharp claws. But stand close behind me, and I will fight
            them as long as I am alive.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Wait a minute!&amp;rdquo; called the Scarecrow. He had been thinking
            what was best to be done, and now he asked the Woodman to chop
            away the end of the tree that rested on their side of the ditch.
            The Tin Woodman began to use his axe at once, and, just as the two
            Kalidahs were nearly across, the tree fell with a crash into the
            gulf, carrying the ugly, snarling brutes with it, and both were
            dashed to pieces on the sharp rocks at the bottom.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Well,&amp;rdquo; said the Cowardly Lion, drawing a long breath of
            relief, &amp;ldquo;I see we are going to live a little while longer, and I
            am glad of it, for it must be a very uncomfortable thing not to be
            alive. Those creatures frightened me so badly that my heart is
            beating yet.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Ah,&amp;rdquo; said the Tin Woodman sadly, &amp;ldquo;I wish I had a heart to beat.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;This adventure made the travelers more anxious than ever to
            get out of the forest, and they walked so fast that Dorothy became
            tired, and had to ride on the Lion&amp;rsquo;s back. To their great joy the
            trees became thinner the farther they advanced, and in the
            afternoon they suddenly came upon a broad river, flowing swiftly
            just before them. On the other side of the water they could see
            the road of yellow brick running through a beautiful country, with
            green meadows dotted with bright flowers and all the road bordered
            with trees hanging full of delicious fruits. They were greatly
            pleased to see this delightful country before them.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;How shall we cross the river?&amp;rdquo; asked Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That is easily done,&amp;rdquo; replied the Scarecrow. &amp;ldquo;The Tin Woodman
            must build us a raft, so we can float to the other side.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So the Woodman took his axe and began to chop down small trees
            to make a raft, and while he was busy at this the Scarecrow found
            on the riverbank a tree full of fine fruit. This pleased Dorothy,
            who had eaten nothing but nuts all day, and she made a hearty meal
            of the ripe fruit.&lt;/p&gt;
        &lt;p&gt;But it takes time to make a raft, even when one is as industrious
            and untiring as the Tin Woodman, and when night came the work was not done.
            So they found a cozy place under the trees where they slept well until the
            morning; and Dorothy dreamed of the Emerald City, and of the good Wizard Oz,
            who would soon send her back to her own home again.
        &lt;/p&gt;
        
        
        &lt;h2&gt;The Deadly Poppy Field&lt;/h2&gt;
        
        &lt;p&gt;Our little party of travelers awakened the next morning
            refreshed and full of hope, and Dorothy breakfasted like a
            princess off peaches and plums from the trees beside the river.
            Behind them was the dark forest they had passed safely through,
            although they had suffered many discouragements; but before them
            was a lovely, sunny country that seemed to beckon them on to the
            Emerald City.&lt;/p&gt;
        &lt;p&gt;To be sure, the broad river now cut them off from this
            beautiful land. But the raft was nearly done, and after the Tin
            Woodman had cut a few more logs and fastened them together with
            wooden pins, they were ready to start. Dorothy sat down in the
            middle of the raft and held Toto in her arms. When the Cowardly
            Lion stepped upon the raft it tipped badly, for he was big and
            heavy; but the Scarecrow and the Tin Woodman stood upon the other
            end to steady it, and they had long poles in their hands to push
            the raft through the water.&lt;/p&gt;
        &lt;p&gt;They got along quite well at first, but when they reached the
            middle of the river the swift current swept the raft downstream,
            farther and farther away from the road of yellow brick. And the
            water grew so deep that the long poles would not touch the bottom.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;This is bad,&amp;rdquo; said the Tin Woodman, &amp;ldquo;for if we cannot get to
            the land we shall be carried into the country of the Wicked Witch
            of the West, and she will enchant us and make us her slaves.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And then I should get no brains,&amp;rdquo; said the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And I should get no courage,&amp;rdquo; said the Cowardly Lion.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And I should get no heart,&amp;rdquo; said the Tin Woodman.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And I should never get back to Kansas,&amp;rdquo; said Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We must certainly get to the Emerald City if we can,&amp;rdquo;
            the Scarecrow continued, and he pushed so hard on his long pole
            that it stuck fast in the mud at the bottom of the river. Then,
            before he could pull it out again&amp;mdash;or let go&amp;mdash;the raft was swept
            away, and the poor Scarecrow left clinging to the pole in the
            middle of the river.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Good&amp;#8208;bye!&amp;rdquo; he called after them, and they were very sorry to leave him.
            Indeed, the Tin Woodman began to cry, but fortunately remembered that he
            might rust, and so dried his tears on Dorothy&amp;rsquo;s apron.&lt;/p&gt;
        &lt;p&gt;Of course this was a bad thing for the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I am now worse off than when I first met Dorothy,&amp;rdquo; he
            thought. &amp;ldquo;Then, I was stuck on a pole in a cornfield, where I
            could make&amp;#8208;believe scare the crows, at any rate. But surely there
            is no use for a Scarecrow stuck on a pole in the middle of a
            river. I am afraid I shall never have any brains, after all!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Down the stream the raft floated, and the poor Scarecrow was
            left far behind. Then the Lion said:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Something must be done to save us. I think I can swim to the
            shore and pull the raft after me, if you will only hold fast to
            the tip of my tail.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So he sprang into the water, and the Tin Woodman caught fast
            hold of his tail. Then the Lion began to swim with all his might
            toward the shore. It was hard work, although he was so big; but
            by and by they were drawn out of the current, and then Dorothy took
            the Tin Woodman&amp;rsquo;s long pole and helped push the raft to the land.&lt;/p&gt;
        &lt;p&gt;They were all tired out when they reached the shore at last
            and stepped off upon the pretty green grass, and they also knew
            that the stream had carried them a long way past the road of
            yellow brick that led to the Emerald City.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What shall we do now?&amp;rdquo; asked the Tin Woodman, as the Lion lay
            down on the grass to let the sun dry him.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We must get back to the road, in some way,&amp;rdquo; said Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;The best plan will be to walk along the riverbank until we
            come to the road again,&amp;rdquo; remarked the Lion.&lt;/p&gt;
        &lt;p&gt;So, when they were rested, Dorothy picked up her basket and
            they started along the grassy bank, to the road from which the
            river had carried them. It was a lovely country, with plenty of
            flowers and fruit trees and sunshine to cheer them, and had they
            not felt so sorry for the poor Scarecrow, they could have been
            very happy.&lt;/p&gt;
        &lt;p&gt;They walked along as fast as they could, Dorothy only stopping
            once to pick a beautiful flower; and after a time the Tin Woodman
            cried out: &amp;ldquo;Look!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Then they all looked at the river and saw the Scarecrow perched
            upon his pole in the middle of the water, looking very lonely and sad.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What can we do to save him?&amp;rdquo; asked Dorothy.&lt;/p&gt;
        &lt;p&gt;The Lion and the Woodman both shook their heads, for they did
            not know. So they sat down upon the bank and gazed wistfully at
            the Scarecrow until a Stork flew by, who, upon seeing them,
            stopped to rest at the water&amp;rsquo;s edge.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Who are you and where are you going?&amp;rdquo; asked the Stork.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I am Dorothy,&amp;rdquo; answered the girl, &amp;ldquo;and these are my friends,
            the Tin Woodman and the Cowardly Lion; and we are going to the
            Emerald City.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;This isn&amp;rsquo;t the road,&amp;rdquo; said the Stork, as she twisted her long
            neck and looked sharply at the queer party.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I know it,&amp;rdquo; returned Dorothy, &amp;ldquo;but we have lost the
            Scarecrow, and are wondering how we shall get him again.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Where is he?&amp;rdquo; asked the Stork.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Over there in the river,&amp;rdquo; answered the little girl.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;If he wasn&amp;rsquo;t so big and heavy I would get him for you,&amp;rdquo;
            remarked the Stork.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;He isn&amp;rsquo;t heavy a bit,&amp;rdquo; said Dorothy eagerly, &amp;ldquo;for he is
            stuffed with straw; and if you will bring him back to us, we shall
            thank you ever and ever so much.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Well, I&amp;rsquo;ll try,&amp;rdquo; said the Stork, &amp;ldquo;but if I find he is too
            heavy to carry I shall have to drop him in the river again.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So the big bird flew into the air and over the water till she
            came to where the Scarecrow was perched upon his pole. Then the
            Stork with her great claws grabbed the Scarecrow by the arm and
            carried him up into the air and back to the bank, where Dorothy
            and the Lion and the Tin Woodman and Toto were sitting.&lt;/p&gt;
        &lt;p&gt;When the Scarecrow found himself among his friends again, he
            was so happy that he hugged them all, even the Lion and Toto; and
            as they walked along he sang &amp;ldquo;Tol&amp;#8208;de&amp;#8208;ri&amp;#8208;de&amp;#8208;oh!&amp;rdquo; at every step, he
            felt so gay.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I was afraid I should have to stay in the river forever,&amp;rdquo;
            he said, &amp;ldquo;but the kind Stork saved me, and if I ever get any brains
            I shall find the Stork again and do her some kindness in return.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That&amp;rsquo;s all right,&amp;rdquo; said the Stork, who was flying along
            beside them. &amp;ldquo;I always like to help anyone in trouble. But I
            must go now, for my babies are waiting in the nest for me. I hope
            you will find the Emerald City and that Oz will help you.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Thank you,&amp;rdquo; replied Dorothy, and then the kind Stork flew
            into the air and was soon out of sight.&lt;/p&gt;
        &lt;p&gt;They walked along listening to the singing of the brightly
            colored birds and looking at the lovely flowers which now became
            so thick that the ground was carpeted with them. There were big
            yellow and white and blue and purple blossoms, besides great
            clusters of scarlet poppies, which were so brilliant in color they
            almost dazzled Dorothy&amp;rsquo;s eyes.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Aren&amp;rsquo;t they beautiful?&amp;rdquo; the girl asked, as she breathed in
            the spicy scent of the bright flowers.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I suppose so,&amp;rdquo; answered the Scarecrow. &amp;ldquo;When I have brains,
            I shall probably like them better.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;If I only had a heart, I should love them,&amp;rdquo; added the Tin Woodman.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I always did like flowers,&amp;rdquo; said the Lion. &amp;ldquo;They of seem so
            helpless and frail. But there are none in the forest so bright as these.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;They now came upon more and more of the big scarlet poppies,
            and fewer and fewer of the other flowers; and soon they found
            themselves in the midst of a great meadow of poppies. Now it is
            well known that when there are many of these flowers together
            their odor is so powerful that anyone who breathes it falls
            asleep, and if the sleeper is not carried away from the scent of
            the flowers, he sleeps on and on forever. But Dorothy did not
            know this, nor could she get away from the bright red flowers that
            were everywhere about; so presently her eyes grew heavy and she
            felt she must sit down to rest and to sleep.&lt;/p&gt;
        &lt;p&gt;But the Tin Woodman would not let her do this.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We must hurry and get back to the road of yellow brick before dark,&amp;rdquo;
            he said; and the Scarecrow agreed with him. So they kept walking until
            Dorothy could stand no longer. Her eyes closed in spite of herself and
            she forgot where she was and fell among the poppies, fast asleep.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What shall we do?&amp;rdquo; asked the Tin Woodman.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;If we leave her here she will die,&amp;rdquo; said the Lion. &amp;ldquo;The smell of
            the flowers is killing us all. I myself can scarcely keep my eyes open,
            and the dog is asleep already.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;It was true; Toto had fallen down beside his little mistress.
            But the Scarecrow and the Tin Woodman, not being made of flesh,
            were not troubled by the scent of the flowers.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Run fast,&amp;rdquo; said the Scarecrow to the Lion, &amp;ldquo;and get out of
            this deadly flower bed as soon as you can. We will bring the
            little girl with us, but if you should fall asleep you are too big
            to be carried.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So the Lion aroused himself and bounded forward as fast as he
            could go. In a moment he was out of sight.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Let us make a chair with our hands and carry her,&amp;rdquo; said the
            Scarecrow. So they picked up Toto and put the dog in Dorothy&amp;rsquo;s
            lap, and then they made a chair with their hands for the seat and
            their arms for the arms and carried the sleeping girl between them
            through the flowers.&lt;/p&gt;
        &lt;p&gt;On and on they walked, and it seemed that the great carpet of
            deadly flowers that surrounded them would never end. They followed
            the bend of the river, and at last came upon their friend the Lion,
            lying fast asleep among the poppies. The flowers had been too strong
            for the huge beast and he had given up at last, and fallen only a short
            distance from the end of the poppy bed, where the sweet grass spread in
            beautiful green fields before them.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We can do nothing for him,&amp;rdquo; said the Tin Woodman, sadly; &amp;ldquo;for
            he is much too heavy to lift. We must leave him here to sleep on
            forever, and perhaps he will dream that he has found courage at last.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I&amp;rsquo;m sorry,&amp;rdquo; said the Scarecrow. &amp;ldquo;The Lion was a very good
            comrade for one so cowardly. But let us go on.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;They carried the sleeping girl to a pretty spot beside the river,
            far enough from the poppy field to prevent her breathing any more of
            the poison of the flowers, and here they laid her gently on the soft
            grass and waited for the fresh breeze to waken her.
        &lt;/p&gt;
        
        
        &lt;h2&gt;The Queen of the Field Mice&lt;/h2&gt;
        
        &lt;p&gt;We cannot be far from the road of yellow brick, now,&amp;rdquo; remarked
            the Scarecrow, as he stood beside the girl, &amp;ldquo;for we have come
            nearly as far as the river carried us away.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The Tin Woodman was about to reply when he heard a low growl,
            and turning his head (which worked beautifully on hinges) he saw a
            strange beast come bounding over the grass toward them. It was,
            indeed, a great yellow Wildcat, and the Woodman thought it must
            be chasing something, for its ears were lying close to its head
            and its mouth was wide open, showing two rows of ugly teeth, while
            its red eyes glowed like balls of fire. As it came nearer the Tin
            Woodman saw that running before the beast was a little gray field
            mouse, and although he had no heart he knew it was wrong for the
            Wildcat to try to kill such a pretty, harmless creature.&lt;/p&gt;
        &lt;p&gt;So the Woodman raised his axe, and as the Wildcat ran by he gave
            it a quick blow that cut the beast&amp;rsquo;s head clean off from its body,
            and it rolled over at his feet in two pieces.&lt;/p&gt;
        &lt;p&gt;The field mouse, now that it was freed from its enemy, stopped short;
            and coming slowly up to the Woodman it said, in a squeaky little voice:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, thank you! Thank you ever so much for saving my life.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Don&amp;rsquo;t speak of it, I beg of you,&amp;rdquo; replied the Woodman.
        &amp;ldquo;I have no heart, you know, so I am careful to help all those
            who may need a friend, even if it happens to be only a mouse.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Only a mouse!&amp;rdquo; cried the little animal, indignantly.
        &amp;ldquo;Why, I am a Queen&amp;mdash;the Queen of all the Field Mice!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, indeed,&amp;rdquo; said the Woodman, making a bow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Therefore you have done a great deed, as well as a brave one,
            in saving my life,&amp;rdquo; added the Queen.&lt;/p&gt;
        &lt;p&gt;At that moment several mice were seen running up as fast as
            their little legs could carry them, and when they saw their Queen
            they exclaimed:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, your Majesty, we thought you would be killed! How did
            you manage to escape the great Wildcat?&amp;rdquo; They all bowed so low to
            the little Queen that they almost stood upon their heads.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;This funny tin man,&amp;rdquo; she answered, &amp;ldquo;killed the Wildcat and
            saved my life. So hereafter you must all serve him, and obey his
            slightest wish.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We will!&amp;rdquo; cried all the mice, in a shrill chorus. And then they
            scampered in all directions, for Toto had awakened from his sleep, and
            seeing all these mice around him he gave one bark of delight and jumped
            right into the middle of the group. Toto had always loved to chase mice
            when he lived in Kansas, and he saw no harm in it.&lt;/p&gt;
        &lt;p&gt;But the Tin Woodman caught the dog in his arms and held him tight,
            while he called to the mice, &amp;ldquo;Come back! Come back! Toto shall not hurt you.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;At this the Queen of the Mice stuck her head out from underneath a clump
            of grass and asked, in a timid voice, &amp;ldquo;Are you sure he will not bite us?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I will not let him,&amp;rdquo; said the Woodman; &amp;ldquo;so do not be afraid.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;One by one the mice came creeping back, and Toto did not bark again,
            although he tried to get out of the Woodman&amp;rsquo;s arms, and would have bitten
            him had he not known very well he was made of tin. Finally one of the
            biggest mice spoke.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Is there anything we can do,&amp;rdquo; it asked, &amp;ldquo;to repay you for
            saving the life of our Queen?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Nothing that I know of,&amp;rdquo; answered the Woodman; but the
            Scarecrow, who had been trying to think, but could not because his
            head was stuffed with straw, said, quickly, &amp;ldquo;Oh, yes; you can save
            our friend, the Cowardly Lion, who is asleep in the poppy bed.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;A Lion!&amp;rdquo; cried the little Queen. &amp;ldquo;Why, he would eat us all up.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, no,&amp;rdquo; declared the Scarecrow; &amp;ldquo;this Lion is a coward.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Really?&amp;rdquo; asked the Mouse.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;He says so himself,&amp;rdquo; answered the Scarecrow, &amp;ldquo;and he would
            never hurt anyone who is our friend. If you will help us to save
            him I promise that he shall treat you all with kindness.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Very well,&amp;rdquo; said the Queen, &amp;ldquo;we trust you. But what shall we do?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Are there many of these mice which call you Queen and are willing
            to obey you?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, yes; there are thousands,&amp;rdquo; she replied.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Then send for them all to come here as soon as possible,
            and let each one bring a long piece of string.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The Queen turned to the mice that attended her and told them
            to go at once and get all her people. As soon as they heard her
            orders they ran away in every direction as fast as possible.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Now,&amp;rdquo; said the Scarecrow to the Tin Woodman, &amp;ldquo;you must go to
            those trees by the riverside and make a truck that will carry the Lion.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So the Woodman went at once to the trees and began to work;
            and he soon made a truck out of the limbs of trees, from which he
            chopped away all the leaves and branches. He fastened it together
            with wooden pegs and made the four wheels out of short pieces of a
            big tree trunk. So fast and so well did he work that by the time
            the mice began to arrive the truck was all ready for them.&lt;/p&gt;
        &lt;p&gt;They came from all directions, and there were thousands of
            them: big mice and little mice and middle&amp;#8208;sized mice; and each
            one brought a piece of string in his mouth. It was about this
            time that Dorothy woke from her long sleep and opened her eyes.
            She was greatly astonished to find herself lying upon the grass,
            with thousands of mice standing around and looking at her timidly.
            But the Scarecrow told her about everything, and turning to the
            dignified little Mouse, he said:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Permit me to introduce to you her Majesty, the Queen.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Dorothy nodded gravely and the Queen made a curtsy, after
            which she became quite friendly with the little girl.&lt;/p&gt;
        &lt;p&gt;The Scarecrow and the Woodman now began to fasten the mice to
            the truck, using the strings they had brought. One end of a
            string was tied around the neck of each mouse and the other end to
            the truck. Of course the truck was a thousand times bigger than
            any of the mice who were to draw it; but when all the mice had
            been harnessed, they were able to pull it quite easily. Even the
            Scarecrow and the Tin Woodman could sit on it, and were drawn swiftly
            by their queer little horses to the place where the Lion lay asleep.&lt;/p&gt;
        &lt;p&gt;After a great deal of hard work, for the Lion was heavy, they
            managed to get him up on the truck. Then the Queen hurriedly gave
            her people the order to start, for she feared if the mice stayed
            among the poppies too long they also would fall asleep.&lt;/p&gt;
        &lt;p&gt;At first the little creatures, many though they were, could
            hardly stir the heavily loaded truck; but the Woodman and the
            Scarecrow both pushed from behind, and they got along better.
            Soon they rolled the Lion out of the poppy bed to the green fields,
            where he could breathe the sweet, fresh air again, instead of the
            poisonous scent of the flowers.&lt;/p&gt;
        &lt;p&gt;Dorothy came to meet them and thanked the little mice warmly
            for saving her companion from death. She had grown so fond of
            the big Lion she was glad he had been rescued.&lt;/p&gt;
        &lt;p&gt;Then the mice were unharnessed from the truck and scampered
            away through the grass to their homes. The Queen of the Mice was
            the last to leave.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;If ever you need us again,&amp;rdquo; she said, &amp;ldquo;come out into the
            field and call, and we shall hear you and come to your assistance.
            Good&amp;#8208;bye!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Good&amp;#8208;bye!&amp;rdquo; they all answered, and away the Queen ran, while
            Dorothy held Toto tightly lest he should run after her and
            frighten her.&lt;/p&gt;
        &lt;p&gt;After this they sat down beside the Lion until he should
            awaken; and the Scarecrow brought Dorothy some fruit from a tree
            near by, which she ate for her dinner.
        &lt;/p&gt;
        
        
        &lt;h2&gt;The Guardian of the Gate&lt;/h2&gt;
        
        &lt;p&gt;It was some time before the Cowardly Lion awakened, for he had
            lain among the poppies a long while, breathing in their deadly
            fragrance; but when he did open his eyes and roll off the truck
            he was very glad to find himself still alive.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I ran as fast as I could,&amp;rdquo; he said, sitting down and yawning,
        &amp;ldquo;but the flowers were too strong for me. How did you get me out?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Then they told him of the field mice, and how they had generously
            saved him from death; and the Cowardly Lion laughed, and said:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I have always thought myself very big and terrible; yet such
            little things as flowers came near to killing me, and such small
            animals as mice have saved my life. How strange it all is!
            But, comrades, what shall we do now?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We must journey on until we find the road of yellow brick again,&amp;rdquo;
            said Dorothy, &amp;ldquo;and then we can keep on to the Emerald City.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So, the Lion being fully refreshed, and feeling quite himself again,
            they all started upon the journey, greatly enjoying the walk through the soft,
            fresh grass; and it was not long before they reached the road of yellow brick
            and turned again toward the Emerald City where the Great Oz dwelt.&lt;/p&gt;
        &lt;p&gt;The road was smooth and well paved, now, and the country about
            was beautiful, so that the travelers rejoiced in leaving the
            forest far behind, and with it the many dangers they had met in
            its gloomy shades. Once more they could see fences built beside
            the road; but these were painted green, and when they came to a
            small house, in which a farmer evidently lived, that also was
            painted green. They passed by several of these houses during the
            afternoon, and sometimes people came to the doors and looked at
            them as if they would like to ask questions; but no one came near
            them nor spoke to them because of the great Lion, of which they
            were very much afraid. The people were all dressed in clothing of
            a lovely emerald&amp;#8208;green color and wore peaked hats like those of
            the Munchkins.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;This must be the Land of Oz,&amp;rdquo; said Dorothy, &amp;ldquo;and we are
            surely getting near the Emerald City.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Yes,&amp;rdquo; answered the Scarecrow. &amp;ldquo;Everything is green here,
            while in the country of the Munchkins blue was the favorite color.
            But the people do not seem to be as friendly as the Munchkins, and
            I&amp;rsquo;m afraid we shall be unable to find a place to pass the night.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I should like something to eat besides fruit,&amp;rdquo; said the girl,
        &amp;ldquo;and I&amp;rsquo;m sure Toto is nearly starved. Let us stop at the next
            house and talk to the people.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So, when they came to a good&amp;#8208;sized farmhouse, Dorothy walked
            boldly up to the door and knocked.&lt;/p&gt;
        &lt;p&gt;A woman opened it just far enough to look out, and said,
        &amp;ldquo;What do you want, child, and why is that great Lion with you?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We wish to pass the night with you, if you will allow us,&amp;rdquo;
            answered Dorothy; &amp;ldquo;and the Lion is my friend and comrade, and
            would not hurt you for the world.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Is he tame?&amp;rdquo; asked the woman, opening the door a little wider.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, yes,&amp;rdquo; said the girl, &amp;ldquo;and he is a great coward, too.
            He will be more afraid of you than you are of him.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Well,&amp;rdquo; said the woman, after thinking it over and taking
            another peep at the Lion, &amp;ldquo;if that is the case you may come in,
            and I will give you some supper and a place to sleep.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So they all entered the house, where there were, besides the
            woman, two children and a man. The man had hurt his leg, and was
            lying on the couch in a corner. They seemed greatly surprised to
            see so strange a company, and while the woman was busy laying the
            table the man asked:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Where are you all going?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;To the Emerald City,&amp;rdquo; said Dorothy, &amp;ldquo;to see the Great Oz.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, indeed!&amp;rdquo; exclaimed the man. &amp;ldquo;Are you sure that Oz will see you?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Why not?&amp;rdquo; she replied.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Why, it is said that he never lets anyone come into his presence.
            I have been to the Emerald City many times, and it is a beautiful and
            wonderful place; but I have never been permitted to see the Great Oz,
            nor do I know of any living person who has seen him.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Does he never go out?&amp;rdquo; asked the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Never. He sits day after day in the great Throne Room of his
            Palace, and even those who wait upon him do not see him face to face.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What is he like?&amp;rdquo; asked the girl.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That is hard to tell,&amp;rdquo; said the man thoughtfully. &amp;ldquo;You see,
            Oz is a Great Wizard, and can take on any form he wishes. So that
            some say he looks like a bird; and some say he looks like an
            elephant; and some say he looks like a cat. To others he appears
            as a beautiful fairy, or a brownie, or in any other form that
            pleases him. But who the real Oz is, when he is in his own form,
            no living person can tell.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That is very strange,&amp;rdquo; said Dorothy, &amp;ldquo;but we must try, in
            some way, to see him, or we shall have made our journey for nothing.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Why do you wish to see the terrible Oz?&amp;rdquo; asked the man.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I want him to give me some brains,&amp;rdquo; said the Scarecrow eagerly.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, Oz could do that easily enough,&amp;rdquo; declared the man.
        &amp;ldquo;He has more brains than he needs.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And I want him to give me a heart,&amp;rdquo; said the Tin Woodman.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That will not trouble him,&amp;rdquo; continued the man, &amp;ldquo;for Oz has a
            large collection of hearts, of all sizes and shapes.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And I want him to give me courage,&amp;rdquo; said the Cowardly Lion.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oz keeps a great pot of courage in his Throne Room,&amp;rdquo; said
            the man, &amp;ldquo;which he has covered with a golden plate, to keep it
            from running over. He will be glad to give you some.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And I want him to send me back to Kansas,&amp;rdquo; said Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Where is Kansas?&amp;rdquo; asked the man, with surprise.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I don&amp;rsquo;t know,&amp;rdquo; replied Dorothy sorrowfully, &amp;ldquo;but it is my home,
            and I&amp;rsquo;m sure it&amp;rsquo;s somewhere.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Very likely. Well, Oz can do anything; so I suppose he will
            find Kansas for you. But first you must get to see him, and that
            will be a hard task; for the Great Wizard does not like to see anyone,
            and he usually has his own way. But what do you want?&amp;rdquo; he continued,
            speaking to Toto. Toto only wagged his tail; for, strange to say,
            he could not speak.&lt;/p&gt;
        &lt;p&gt;The woman now called to them that supper was ready, so they
            gathered around the table and Dorothy ate some delicious porridge
            and a dish of scrambled eggs and a plate of nice white bread, and
            enjoyed her meal. The Lion ate some of the porridge, but did not
            care for it, saying it was made from oats and oats were food for
            horses, not for lions. The Scarecrow and the Tin Woodman ate
            nothing at all. Toto ate a little of everything, and was glad to
            get a good supper again.&lt;/p&gt;
        &lt;p&gt;The woman now gave Dorothy a bed to sleep in, and Toto lay
            down beside her, while the Lion guarded the door of her room so
            she might not be disturbed. The Scarecrow and the Tin Woodman
            stood up in a corner and kept quiet all night, although of course
            they could not sleep.&lt;/p&gt;
        &lt;p&gt;The next morning, as soon as the sun was up, they started on
            their way, and soon saw a beautiful green glow in the sky just
            before them.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That must be the Emerald City,&amp;rdquo; said Dorothy.&lt;/p&gt;
        &lt;p&gt;As they walked on, the green glow became brighter and brighter,
            and it seemed that at last they were nearing the end of their travels.
            Yet it was afternoon before they came to the great wall that surrounded
            the City. It was high and thick and of a bright green color.&lt;/p&gt;
        &lt;p&gt;In front of them, and at the end of the road of yellow brick,
            was a big gate, all studded with emeralds that glittered so in the
            sun that even the painted eyes of the Scarecrow were dazzled by
            their brilliancy.&lt;/p&gt;
        &lt;p&gt;There was a bell beside the gate, and Dorothy pushed the
            button and heard a silvery tinkle sound within. Then the big gate
            swung slowly open, and they all passed through and found
            themselves in a high arched room, the walls of which glistened
            with countless emeralds.&lt;/p&gt;
        &lt;p&gt;Before them stood a little man about the same size as the
            Munchkins. He was clothed all in green, from his head to his
            feet, and even his skin was of a greenish tint. At his side was a
            large green box.&lt;/p&gt;
        &lt;p&gt;When he saw Dorothy and her companions the man asked,
        &amp;ldquo;What do you wish in the Emerald City?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We came here to see the Great Oz,&amp;rdquo; said Dorothy.&lt;/p&gt;
        &lt;p&gt;The man was so surprised at this answer that he sat down to
            think it over.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;It has been many years since anyone asked me to see Oz,&amp;rdquo;
            he said, shaking his head in perplexity. &amp;ldquo;He is powerful and
            terrible, and if you come on an idle or foolish errand to bother
            the wise reflections of the Great Wizard, he might be angry and
            destroy you all in an instant.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;But it is not a foolish errand, nor an idle one,&amp;rdquo; replied the
            Scarecrow; &amp;ldquo;it is important. And we have been told that Oz is a
            good Wizard.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;So he is,&amp;rdquo; said the green man, &amp;ldquo;and he rules the Emerald City
            wisely and well. But to those who are not honest, or who approach
            him from curiosity, he is most terrible, and few have ever dared
            ask to see his face. I am the Guardian of the Gates, and since
            you demand to see the Great Oz I must take you to his Palace.
            But first you must put on the spectacles.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Why?&amp;rdquo; asked Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Because if you did not wear spectacles the brightness and
            glory of the Emerald City would blind you. Even those who live in
            the City must wear spectacles night and day. They are all locked
            on, for Oz so ordered it when the City was first built, and I have
            the only key that will unlock them.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;He opened the big box, and Dorothy saw that it was filled with
            spectacles of every size and shape. All of them had green glasses
            in them. The Guardian of the Gates found a pair that would just
            fit Dorothy and put them over her eyes. There were two golden
            bands fastened to them that passed around the back of her head,
            where they were locked together by a little key that was at the
            end of a chain the Guardian of the Gates wore around his neck.
            When they were on, Dorothy could not take them off had she wished,
            but of course she did not wish to be blinded by the glare of the
            Emerald City, so she said nothing.&lt;/p&gt;
        &lt;p&gt;Then the green man fitted spectacles for the Scarecrow and the
            Tin Woodman and the Lion, and even on little Toto; and all were
            locked fast with the key.&lt;/p&gt;
        &lt;p&gt;Then the Guardian of the Gates put on his own glasses and told
            them he was ready to show them to the Palace. Taking a big golden
            key from a peg on the wall, he opened another gate, and they all
            followed him through the portal into the streets of the Emerald City.
        &lt;/p&gt;
        
        
        &lt;h2&gt;The Wonderful City of Oz&lt;/h2&gt;
        
        &lt;p&gt;Even with eyes protected by the green spectacles, Dorothy
            and her friends were at first dazzled by the brilliancy of the
            wonderful City. The streets were lined with beautiful houses all
            built of green marble and studded everywhere with sparkling
            emeralds. They walked over a pavement of the same green marble,
            and where the blocks were joined together were rows of emeralds,
            set closely, and glittering in the brightness of the sun. The
            window panes were of green glass; even the sky above the City had
            a green tint, and the rays of the sun were green.&lt;/p&gt;
        &lt;p&gt;There were many people&amp;mdash;men, women, and children&amp;mdash;walking about,
            and these were all dressed in green clothes and had greenish skins.
            They looked at Dorothy and her strangely assorted company with
            wondering eyes, and the children all ran away and hid behind
            their mothers when they saw the Lion; but no one spoke to them.
            Many shops stood in the street, and Dorothy saw that everything
            in them was green. Green candy and green pop corn were offered
            for sale, as well as green shoes, green hats, and green clothes
            of all sorts. At one place a man was selling green lemonade,
            and when the children bought it Dorothy could see that they paid
            for it with green pennies.&lt;/p&gt;
        &lt;p&gt;There seemed to be no horses nor animals of any kind; the men
            carried things around in little green carts, which they pushed
            before them. Everyone seemed happy and contented and prosperous.&lt;/p&gt;
        &lt;p&gt;The Guardian of the Gates led them through the streets until
            they came to a big building, exactly in the middle of the City,
            which was the Palace of Oz, the Great Wizard. There was a soldier
            before the door, dressed in a green uniform and wearing a long
            green beard.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Here are strangers,&amp;rdquo; said the Guardian of the Gates to him,
        &amp;ldquo;and they demand to see the Great Oz.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Step inside,&amp;rdquo; answered the soldier, &amp;ldquo;and I will carry your
            message to him.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So they passed through the Palace Gates and were led into a
            big room with a green carpet and lovely green furniture set with
            emeralds. The soldier made them all wipe their feet upon a green
            mat before entering this room, and when they were seated he said
            politely:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Please make yourselves comfortable while I go to the door of
            the Throne Room and tell Oz you are here.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;They had to wait a long time before the soldier returned.
            When, at last, he came back, Dorothy asked:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Have you seen Oz?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, no,&amp;rdquo; returned the soldier; &amp;ldquo;I have never seen him.
            But I spoke to him as he sat behind his screen and gave him your
            message. He said he will grant you an audience, if you so desire;
            but each one of you must enter his presence alone, and he will
            admit but one each day. Therefore, as you must remain in the
            Palace for several days, I will have you shown to rooms where you
            may rest in comfort after your journey.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Thank you,&amp;rdquo; replied the girl; &amp;ldquo;that is very kind of Oz.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The soldier now blew upon a green whistle, and at once a young girl,
            dressed in a pretty green silk gown, entered the room. She had lovely
            green hair and green eyes, and she bowed low before Dorothy as she said,
        &amp;ldquo;Follow me and I will show you your room.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So Dorothy said good&amp;#8208;bye to all her friends except Toto, and
            taking the dog in her arms followed the green girl through seven
            passages and up three flights of stairs until they came to a room
            at the front of the Palace. It was the sweetest little room in
            the world, with a soft comfortable bed that had sheets of green
            silk and a green velvet counterpane. There was a tiny fountain in
            the middle of the room, that shot a spray of green perfume into
            the air, to fall back into a beautifully carved green marble basin.
            Beautiful green flowers stood in the windows, and there was a shelf
            with a row of little green books. When Dorothy had time to open
            these books she found them full of queer green pictures that made
            her laugh, they were so funny.&lt;/p&gt;
        &lt;p&gt;In a wardrobe were many green dresses, made of silk and satin
            and velvet; and all of them fitted Dorothy exactly.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Make yourself perfectly at home,&amp;rdquo; said the green girl,
        &amp;ldquo;and if you wish for anything ring the bell. Oz will send
            for you tomorrow morning.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;She left Dorothy alone and went back to the others. These she
            also led to rooms, and each one of them found himself lodged in a
            very pleasant part of the Palace. Of course this politeness was
            wasted on the Scarecrow; for when he found himself alone in his
            room he stood stupidly in one spot, just within the doorway, to
            wait till morning. It would not rest him to lie down, and he
            could not close his eyes; so he remained all night staring at a
            little spider which was weaving its web in a corner of the room,
            just as if it were not one of the most wonderful rooms in the world.
            The Tin Woodman lay down on his bed from force of habit, for he
            remembered when he was made of flesh; but not being able to sleep,
            he passed the night moving his joints up and down to make sure they
            kept in good working order. The Lion would have preferred a bed of
            dried leaves in the forest, and did not like being shut up in a room;
            but he had too much sense to let this worry him, so he sprang upon
            the bed and rolled himself up like a cat and purred himself asleep
            in a minute.&lt;/p&gt;
        &lt;p&gt;The next morning, after breakfast, the green maiden came to
            fetch Dorothy, and she dressed her in one of the prettiest gowns,
            made of green brocaded satin. Dorothy put on a green silk apron
            and tied a green ribbon around Toto&amp;rsquo;s neck, and they started
            for the Throne Room of the Great Oz.&lt;/p&gt;
        &lt;p&gt;First they came to a great hall in which were many ladies and
            gentlemen of the court, all dressed in rich costumes. These
            people had nothing to do but talk to each other, but they always
            came to wait outside the Throne Room every morning, although they
            were never permitted to see Oz. As Dorothy entered they looked at
            her curiously, and one of them whispered:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Are you really going to look upon the face of Oz the Terrible?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Of course,&amp;rdquo; answered the girl, &amp;ldquo;if he will see me.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, he will see you,&amp;rdquo; said the soldier who had taken her
            message to the Wizard, &amp;ldquo;although he does not like to have people
            ask to see him. Indeed, at first he was angry and said I should
            send you back where you came from. Then he asked me what you
            looked like, and when I mentioned your silver shoes he was very
            much interested. At last I told him about the mark upon your
            forehead, and he decided he would admit you to his presence.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Just then a bell rang, and the green girl said to Dorothy,
        &amp;ldquo;That is the signal. You must go into the Throne Room alone.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;She opened a little door and Dorothy walked boldly through and
            found herself in a wonderful place. It was a big, round room with
            a high arched roof, and the walls and ceiling and floor were covered
            with large emeralds set closely together. In the center of the roof
            was a great light, as bright as the sun, which made the emeralds
            sparkle in a wonderful manner.&lt;/p&gt;
        &lt;p&gt;But what interested Dorothy most was the big throne of green
            marble that stood in the middle of the room. It was shaped like a
            chair and sparkled with gems, as did everything else. In the
            center of the chair was an enormous Head, without a body to
            support it or any arms or legs whatever. There was no hair upon
            this head, but it had eyes and a nose and mouth, and was much
            bigger than the head of the biggest giant.&lt;/p&gt;
        &lt;p&gt;As Dorothy gazed upon this in wonder and fear, the eyes turned
            slowly and looked at her sharply and steadily. Then the mouth
            moved, and Dorothy heard a voice say:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I am Oz, the Great and Terrible. Who are you, and why do you
            seek me?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;It was not such an awful voice as she had expected to come
            from the big Head; so she took courage and answered:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I am Dorothy, the Small and Meek. I have come to you for help.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The eyes looked at her thoughtfully for a full minute.
            Then said the voice:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Where did you get the silver shoes?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I got them from the Wicked Witch of the East, when my house
            fell on her and killed her,&amp;rdquo; she replied.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Where did you get the mark upon your forehead?&amp;rdquo; continued the voice.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That is where the Good Witch of the North kissed me when she
            bade me good&amp;#8208;bye and sent me to you,&amp;rdquo; said the girl.&lt;/p&gt;
        &lt;p&gt;Again the eyes looked at her sharply, and they saw she was
            telling the truth. Then Oz asked, &amp;ldquo;What do you wish me to do?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Send me back to Kansas, where my Aunt Em and Uncle Henry are,&amp;rdquo;
            she answered earnestly. &amp;ldquo;I don&amp;rsquo;t like your country, although it is
            so beautiful. And I am sure Aunt Em will be dreadfully worried over
            my being away so long.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The eyes winked three times, and then they turned up to the
            ceiling and down to the floor and rolled around so queerly that
            they seemed to see every part of the room. And at last they
            looked at Dorothy again.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Why should I do this for you?&amp;rdquo; asked Oz.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Because you are strong and I am weak; because you are a Great
            Wizard and I am only a little girl.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;But you were strong enough to kill the Wicked Witch of the East,&amp;rdquo;
            said Oz.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That just happened,&amp;rdquo; returned Dorothy simply; &amp;ldquo;I could not help it.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Well,&amp;rdquo; said the Head, &amp;ldquo;I will give you my answer. You have no
            right to expect me to send you back to Kansas unless you do something
            for me in return. In this country everyone must pay for everything
            he gets. If you wish me to use my magic power to send you home again
            you must do something for me first. Help me and I will help you.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What must I do?&amp;rdquo; asked the girl.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Kill the Wicked Witch of the West,&amp;rdquo; answered Oz.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;But I cannot!&amp;rdquo; exclaimed Dorothy, greatly surprised.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;You killed the Witch of the East and you wear the silver shoes,
            which bear a powerful charm. There is now but one Wicked Witch left
            in all this land, and when you can tell me she is dead I will send
            you back to Kansas&amp;mdash;but not before.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The little girl began to weep, she was so much disappointed;
            and the eyes winked again and looked upon her anxiously, as if the
            Great Oz felt that she could help him if she would.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I never killed anything, willingly,&amp;rdquo; she sobbed. &amp;ldquo;Even if I
            wanted to, how could I kill the Wicked Witch? If you, who are Great
            and Terrible, cannot kill her yourself, how do you expect me to do it?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I do not know,&amp;rdquo; said the Head; &amp;ldquo;but that is my answer, and
            until the Wicked Witch dies you will not see your uncle and aunt
            again. Remember that the Witch is Wicked&amp;mdash;tremendously Wicked
        &amp;#8208;and ought to be killed. Now go, and do not ask to see me again
            until you have done your task.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Sorrowfully Dorothy left the Throne Room and went back where
            the Lion and the Scarecrow and the Tin Woodman were waiting to
            hear what Oz had said to her. &amp;ldquo;There is no hope for me,&amp;rdquo; she
            said sadly, &amp;ldquo;for Oz will not send me home until I have killed
            the Wicked Witch of the West; and that I can never do.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Her friends were sorry, but could do nothing to help her; so
            Dorothy went to her own room and lay down on the bed and cried
            herself to sleep.&lt;/p&gt;
        &lt;p&gt;The next morning the soldier with the green whiskers came to
            the Scarecrow and said:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Come with me, for Oz has sent for you.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So the Scarecrow followed him and was admitted into the great
            Throne Room, where he saw, sitting in the emerald throne, a most
            lovely Lady. She was dressed in green silk gauze and wore upon
            her flowing green locks a crown of jewels. Growing from her
            shoulders were wings, gorgeous in color and so light that they
            fluttered if the slightest breath of air reached them.&lt;/p&gt;
        &lt;p&gt;When the Scarecrow had bowed, as prettily as his straw stuffing would
            let him, before this beautiful creature, she looked upon him sweetly,
            and said:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I am Oz, the Great and Terrible. Who are you, and why do you seek me?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Now the Scarecrow, who had expected to see the great Head Dorothy had
            told him of, was much astonished; but he answered her bravely.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I am only a Scarecrow, stuffed with straw. Therefore I have
            no brains, and I come to you praying that you will put brains in
            my head instead of straw, so that I may become as much a man as
            any other in your dominions.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Why should I do this for you?&amp;rdquo; asked the Lady.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Because you are wise and powerful, and no one else can help me,&amp;rdquo;
            answered the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I never grant favors without some return,&amp;rdquo; said Oz; &amp;ldquo;but this
            much I will promise. If you will kill for me the Wicked Witch of
            the West, I will bestow upon you a great many brains, and such
            good brains that you will be the wisest man in all the Land of Oz.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I thought you asked Dorothy to kill the Witch,&amp;rdquo; said the Scarecrow,
            in surprise.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;So I did. I don&amp;rsquo;t care who kills her. But until she is dead
            I will not grant your wish. Now go, and do not seek me again
            until you have earned the brains you so greatly desire.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The Scarecrow went sorrowfully back to his friends and told
            them what Oz had said; and Dorothy was surprised to find that the
            Great Wizard was not a Head, as she had seen him, but a lovely Lady.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;All the same,&amp;rdquo; said the Scarecrow, &amp;ldquo;she needs a heart as much
            as the Tin Woodman.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;On the next morning the soldier with the green whiskers came
            to the Tin Woodman and said:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oz has sent for you. Follow me.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So the Tin Woodman followed him and came to the great Throne
            Room. He did not know whether he would find Oz a lovely Lady or a
            Head, but he hoped it would be the lovely Lady. &amp;ldquo;For,&amp;rdquo; he said to
            himself, &amp;ldquo;if it is the head, I am sure I shall not be given a
            heart, since a head has no heart of its own and therefore cannot
            feel for me. But if it is the lovely Lady I shall beg hard for a
            heart, for all ladies are themselves said to be kindly hearted.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;But when the Woodman entered the great Throne Room he saw
            neither the Head nor the Lady, for Oz had taken the shape of a
            most terrible Beast. It was nearly as big as an elephant, and the
            green throne seemed hardly strong enough to hold its weight. The
            Beast had a head like that of a rhinoceros, only there were five
            eyes in its face. There were five long arms growing out of its
            body, and it also had five long, slim legs. Thick, woolly hair
            covered every part of it, and a more dreadful&amp;#8208;looking monster
            could not be imagined. It was fortunate the Tin Woodman had no
            heart at that moment, for it would have beat loud and fast from
            terror. But being only tin, the Woodman was not at all afraid,
            although he was much disappointed.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I am Oz, the Great and Terrible,&amp;rdquo; spoke the Beast, in a voice
            that was one great roar. &amp;ldquo;Who are you, and why do you seek me?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I am a Woodman, and made of tin. Therefore I have no heart,
            and cannot love. I pray you to give me a heart that I may be as
            other men are.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Why should I do this?&amp;rdquo; demanded the Beast.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Because I ask it, and you alone can grant my request,&amp;rdquo;
            answered the Woodman.&lt;/p&gt;
        &lt;p&gt;Oz gave a low growl at this, but said, gruffly: &amp;ldquo;If you indeed
            desire a heart, you must earn it.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;How?&amp;rdquo; asked the Woodman.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Help Dorothy to kill the Wicked Witch of the West,&amp;rdquo; replied
            the Beast. &amp;ldquo;When the Witch is dead, come to me, and I will then
            give you the biggest and kindest and most loving heart in all the
            Land of Oz.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So the Tin Woodman was forced to return sorrowfully to his
            friends and tell them of the terrible Beast he had seen.
            They all wondered greatly at the many forms the Great Wizard
            could take upon himself, and the Lion said:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;If he is a Beast when I go to see him, I shall roar my
            loudest, and so frighten him that he will grant all I ask. And if
            he is the lovely Lady, I shall pretend to spring upon her, and so
            compel her to do my bidding. And if he is the great Head, he will
            be at my mercy; for I will roll this head all about the room until
            he promises to give us what we desire. So be of good cheer, my
            friends, for all will yet be well.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The next morning the soldier with the green whiskers led the
            Lion to the great Throne Room and bade him enter the presence of Oz.&lt;/p&gt;
        &lt;p&gt;The Lion at once passed through the door, and glancing around saw,
            to his surprise, that before the throne was a Ball of Fire, so fierce
            and glowing he could scarcely bear to gaze upon it. His first thought
            was that Oz had by accident caught on fire and was burning up; but when
            he tried to go nearer, the heat was so intense that it singed his whiskers,
            and he crept back tremblingly to a spot nearer the door.&lt;/p&gt;
        &lt;p&gt;Then a low, quiet voice came from the Ball of Fire, and these
            were the words it spoke:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I am Oz, the Great and Terrible. Who are you, and why do you seek me?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;And the Lion answered, &amp;ldquo;I am a Cowardly Lion, afraid of everything.
            I came to you to beg that you give me courage, so that in reality I may
            become the King of Beasts, as men call me.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Why should I give you courage?&amp;rdquo; demanded Oz.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Because of all Wizards you are the greatest, and alone have
            power to grant my request,&amp;rdquo; answered the Lion.&lt;/p&gt;
        &lt;p&gt;The Ball of Fire burned fiercely for a time, and the voice said,
        &amp;ldquo;Bring me proof that the Wicked Witch is dead, and that moment I will
            give you courage. But as long as the Witch lives, you must remain a coward.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The Lion was angry at this speech, but could say nothing in reply,
            and while he stood silently gazing at the Ball of Fire it became
            so furiously hot that he turned tail and rushed from the room.
            He was glad to find his friends waiting for him, and told them
            of his terrible interview with the Wizard.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What shall we do now?&amp;rdquo; asked Dorothy sadly.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;There is only one thing we can do,&amp;rdquo; returned the Lion, &amp;ldquo;and
            that is to go to the land of the Winkies, seek out the Wicked
            Witch, and destroy her.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;But suppose we cannot?&amp;rdquo; said the girl.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Then I shall never have courage,&amp;rdquo; declared the Lion.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And I shall never have brains,&amp;rdquo; added the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And I shall never have a heart,&amp;rdquo; spoke the Tin of Woodman.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And I shall never see Aunt Em and Uncle Henry,&amp;rdquo; said Dorothy,
            beginning to cry.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Be careful!&amp;rdquo; cried the green girl. &amp;ldquo;The tears will fall on
            your green silk gown and spot it.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So Dorothy dried her eyes and said, &amp;ldquo;I suppose we must try it;
            but I am sure I do not want to kill anybody, even to see Aunt Em again.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I will go with you; but I&amp;rsquo;m too much of a coward to kill the
            Witch,&amp;rdquo; said the Lion.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I will go too,&amp;rdquo; declared the Scarecrow; &amp;ldquo;but I shall not be
            of much help to you, I am such a fool.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I haven&amp;rsquo;t the heart to harm even a Witch,&amp;rdquo; remarked the Tin
            Woodman; &amp;ldquo;but if you go I certainly shall go with you.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Therefore it was decided to start upon their journey the next
            morning, and the Woodman sharpened his axe on a green grindstone
            and had all his joints properly oiled. The Scarecrow stuffed
            himself with fresh straw and Dorothy put new paint on his eyes
            that he might see better. The green girl, who was very kind to
            them, filled Dorothy&amp;rsquo;s basket with good things to eat, and
            fastened a little bell around Toto&amp;rsquo;s neck with a green ribbon.&lt;/p&gt;
        &lt;p&gt;They went to bed quite early and slept soundly until daylight,
            when they were awakened by the crowing of a green cock that lived
            in the back yard of the Palace, and the cackling of a hen that had
            laid a green egg.
        &lt;/p&gt;
        
        
        &lt;h2&gt;The Search for the Wicked Witch&lt;/h2&gt;
        
        &lt;p&gt;The soldier with the green whiskers led them through the
            streets of the Emerald City until they reached the room where the
            Guardian of the Gates lived. This officer unlocked their spectacles
            to put them back in his great box, and then he politely opened the
            gate for our friends.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Which road leads to the Wicked Witch of the West?&amp;rdquo; asked
            Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;There is no road,&amp;rdquo; answered the Guardian of the Gates.
        &amp;ldquo;No one ever wishes to go that way.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;How, then, are we to find her?&amp;rdquo; inquired the girl.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That will be easy,&amp;rdquo; replied the man, &amp;ldquo;for when she knows you
            are in the country of the Winkies she will find you, and make you
            all her slaves.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Perhaps not,&amp;rdquo; said the Scarecrow, &amp;ldquo;for we mean to destroy her.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, that is different,&amp;rdquo; said the Guardian of the Gates.
        &amp;ldquo;No one has ever destroyed her before, so I naturally thought she
            would make slaves of you, as she has of the rest. But take care;
            for she is wicked and fierce, and may not allow you to destroy her.
            Keep to the West, where the sun sets, and you cannot fail to find her.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;They thanked him and bade him good&amp;#8208;bye, and turned toward the West,
            walking over fields of soft grass dotted here and there with daisies
            and buttercups. Dorothy still wore the pretty silk dress she had put on
            in the palace, but now, to her surprise, she found it was no longer green,
            but pure white. The ribbon around Toto&amp;rsquo;s neck had also lost its green
            color and was as white as Dorothy&amp;rsquo;s dress.&lt;/p&gt;
        &lt;p&gt;The Emerald City was soon left far behind. As they advanced
            the ground became rougher and hillier, for there were no farms nor
            houses in this country of the West, and the ground was untilled.&lt;/p&gt;
        &lt;p&gt;In the afternoon the sun shone hot in their faces, for there
            were no trees to offer them shade; so that before night Dorothy
            and Toto and the Lion were tired, and lay down upon the grass and
            fell asleep, with the Woodman and the Scarecrow keeping watch.&lt;/p&gt;
        &lt;p&gt;Now the Wicked Witch of the West had but one eye, yet that was as
            powerful as a telescope, and could see everywhere. So, as she sat in
            the door of her castle, she happened to look around and saw Dorothy
            lying asleep, with her friends all about her. They were a long
            distance off, but the Wicked Witch was angry to find them in her
            country; so she blew upon a silver whistle that hung around her neck.&lt;/p&gt;
        &lt;p&gt;At once there came running to her from all directions a pack
            of great wolves. They had long legs and fierce eyes and sharp teeth.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Go to those people,&amp;rdquo; said the Witch, &amp;ldquo;and tear them to pieces.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Are you not going to make them your slaves?&amp;rdquo; asked the leader
            of the wolves.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;No,&amp;rdquo; she answered, &amp;ldquo;one is of tin, and one of straw; one is
            a girl and another a Lion. None of them is fit to work, so you
            may tear them into small pieces.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Very well,&amp;rdquo; said the wolf, and he dashed away at full speed,
            followed by the others.&lt;/p&gt;
        &lt;p&gt;It was lucky the Scarecrow and the Woodman were wide awake and
            heard the wolves coming.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;This is my fight,&amp;rdquo; said the Woodman, &amp;ldquo;so get behind me and I
            will meet them as they come.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;He seized his axe, which he had made very sharp, and as the
            leader of the wolves came on the Tin Woodman swung his arm and
            chopped the wolf&amp;rsquo;s head from its body, so that it immediately died.
            As soon as he could raise his axe another wolf came up, and he also
            fell under the sharp edge of the Tin Woodman&amp;rsquo;s weapon. There were
            forty wolves, and forty times a wolf was killed, so that at last
            they all lay dead in a heap before the Woodman.&lt;/p&gt;
        &lt;p&gt;Then he put down his axe and sat beside the Scarecrow, who said,
        &amp;ldquo;It was a good fight, friend.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;They waited until Dorothy awoke the next morning. The little
            girl was quite frightened when she saw the great pile of shaggy
            wolves, but the Tin Woodman told her all. She thanked him for
            saving them and sat down to breakfast, after which they started
            again upon their journey.&lt;/p&gt;
        &lt;p&gt;Now this same morning the Wicked Witch came to the door of her
            castle and looked out with her one eye that could see far off.
            She saw all her wolves lying dead, and the strangers still
            traveling through her country. This made her angrier than before,
            and she blew her silver whistle twice.&lt;/p&gt;
        &lt;p&gt;Straightway a great flock of wild crows came flying toward her,
            enough to darken the sky.&lt;/p&gt;
        &lt;p&gt;And the Wicked Witch said to the King Crow, &amp;ldquo;Fly at once to
            the strangers; peck out their eyes and tear them to pieces.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The wild crows flew in one great flock toward Dorothy and her
            companions. When the little girl saw them coming she was afraid.&lt;/p&gt;
        &lt;p&gt;But the Scarecrow said, &amp;ldquo;This is my battle, so lie down beside
            me and you will not be harmed.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So they all lay upon the ground except the Scarecrow, and he
            stood up and stretched out his arms. And when the crows saw him
            they were frightened, as these birds always are by scarecrows, and
            did not dare to come any nearer. But the King Crow said:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;It is only a stuffed man. I will peck his eyes out.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The King Crow flew at the Scarecrow, who caught it by the head
            and twisted its neck until it died. And then another crow flew at
            him, and the Scarecrow twisted its neck also. There were forty
            crows, and forty times the Scarecrow twisted a neck, until at last
            all were lying dead beside him. Then he called to his companions
            to rise, and again they went upon their journey.&lt;/p&gt;
        &lt;p&gt;When the Wicked Witch looked out again and saw all her crows
            lying in a heap, she got into a terrible rage, and blew three
            times upon her silver whistle.&lt;/p&gt;
        &lt;p&gt;Forthwith there was heard a great buzzing in the air, and a
            swarm of black bees came flying toward her.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Go to the strangers and sting them to death!&amp;rdquo; commanded
            the Witch, and the bees turned and flew rapidly until they came
            to where Dorothy and her friends were walking. But the Woodman
            had seen them coming, and the Scarecrow had decided what to do.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Take out my straw and scatter it over the little girl and the
            dog and the Lion,&amp;rdquo; he said to the Woodman, &amp;ldquo;and the bees cannot
            sting them.&amp;rdquo; This the Woodman did, and as Dorothy lay close beside
            the Lion and held Toto in her arms, the straw covered them entirely.&lt;/p&gt;
        &lt;p&gt;The bees came and found no one but the Woodman to sting, so
            they flew at him and broke off all their stings against the tin,
            without hurting the Woodman at all. And as bees cannot live when
            their stings are broken that was the end of the black bees, and
            they lay scattered thick about the Woodman, like little heaps of
            fine coal.&lt;/p&gt;
        &lt;p&gt;Then Dorothy and the Lion got up, and the girl helped the Tin
            Woodman put the straw back into the Scarecrow again, until he was
            as good as ever. So they started upon their journey once more.&lt;/p&gt;
        &lt;p&gt;The Wicked Witch was so angry when she saw her black bees in
            little heaps like fine coal that she stamped her foot and tore her
            hair and gnashed her teeth. And then she called a dozen of her
            slaves, who were the Winkies, and gave them sharp spears, telling
            them to go to the strangers and destroy them.&lt;/p&gt;
        &lt;p&gt;The Winkies were not a brave people, but they had to do as
            they were told. So they marched away until they came near to
            Dorothy. Then the Lion gave a great roar and sprang towards them,
            and the poor Winkies were so frightened that they ran back as fast
            as they could.&lt;/p&gt;
        &lt;p&gt;When they returned to the castle the Wicked Witch beat them
            well with a strap, and sent them back to their work, after which
            she sat down to think what she should do next. She could not
            understand how all her plans to destroy these strangers had failed;
            but she was a powerful Witch, as well as a wicked one, and she soon
            made up her mind how to act.&lt;/p&gt;
        &lt;p&gt;There was, in her cupboard, a Golden Cap, with a circle of
            diamonds and rubies running round it. This Golden Cap had a charm.
            Whoever owned it could call three times upon the Winged Monkeys,
            who would obey any order they were given. But no person
            could command these strange creatures more than three times.
            Twice already the Wicked Witch had used the charm of the Cap.
            Once was when she had made the Winkies her slaves, and set herself
            to rule over their country. The Winged Monkeys had helped her
            do this. The second time was when she had fought against the
            Great Oz himself, and driven him out of the land of the West.
            The Winged Monkeys had also helped her in doing this. Only once
            more could she use this Golden Cap, for which reason she did not
            like to do so until all her other powers were exhausted. But now
            that her fierce wolves and her wild crows and her stinging bees were
            gone, and her slaves had been scared away by the Cowardly Lion,
            she saw there was only one way left to destroy Dorothy and her friends.&lt;/p&gt;
        &lt;p&gt;So the Wicked Witch took the Golden Cap from her cupboard and
            placed it upon her head. Then she stood upon her left foot and
            said slowly:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Ep&amp;#8208;pe, pep&amp;#8208;pe, kak&amp;#8208;ke!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Next she stood upon her right foot and said:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Hil&amp;#8208;lo, hol&amp;#8208;lo, hel&amp;#8208;lo!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;After this she stood upon both feet and cried in a loud voice:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Ziz&amp;#8208;zy, zuz&amp;#8208;zy, zik!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Now the charm began to work. The sky was darkened, and a low
            rumbling sound was heard in the air. There was a rushing of many
            wings, a great chattering and laughing, and the sun came out of the
            dark sky to show the Wicked Witch surrounded by a crowd of monkeys,
            each with a pair of immense and powerful wings on his shoulders.&lt;/p&gt;
        &lt;p&gt;One, much bigger than the others, seemed to be their leader.
            He flew close to the Witch and said, &amp;ldquo;You have called us for the
            third and last time. What do you command?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Go to the strangers who are within my land and destroy them
            all except the Lion,&amp;rdquo; said the Wicked Witch. &amp;ldquo;Bring that beast to
            me, for I have a mind to harness him like a horse, and make him work.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Your commands shall be obeyed,&amp;rdquo; said the leader. Then, with
            a great deal of chattering and noise, the Winged Monkeys flew away
            to the place where Dorothy and her friends were walking.&lt;/p&gt;
        &lt;p&gt;Some of the Monkeys seized the Tin Woodman and carried him
            through the air until they were over a country thickly covered
            with sharp rocks. Here they dropped the poor Woodman, who fell a
            great distance to the rocks, where he lay so battered and dented
            that he could neither move nor groan.&lt;/p&gt;
        &lt;p&gt;Others of the Monkeys caught the Scarecrow, and with their
            long fingers pulled all of the straw out of his clothes and head.
            They made his hat and boots and clothes into a small bundle and
            threw it into the top branches of a tall tree.&lt;/p&gt;
        &lt;p&gt;The remaining Monkeys threw pieces of stout rope around
            the Lion and wound many coils about his body and head and legs,
            until he was unable to bite or scratch or struggle in any way.
            Then they lifted him up and flew away with him to the Witch&amp;rsquo;s castle,
            where he was placed in a small yard with a high iron fence around it,
            so that he could not escape.&lt;/p&gt;
        &lt;p&gt;But Dorothy they did not harm at all. She stood, with Toto in
            her arms, watching the sad fate of her comrades and thinking it
            would soon be her turn. The leader of the Winged Monkeys flew up
            to her, his long, hairy arms stretched out and his ugly face
            grinning terribly; but he saw the mark of the Good Witch&amp;rsquo;s kiss
            upon her forehead and stopped short, motioning the others not to
            touch her.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We dare not harm this little girl,&amp;rdquo; he said to them, &amp;ldquo;for she
            is protected by the Power of Good, and that is greater than the
            Power of Evil. All we can do is to carry her to the castle of the
            Wicked Witch and leave her there.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So, carefully and gently, they lifted Dorothy in their
            arms and carried her swiftly through the air until they came
            to the castle, where they set her down upon the front doorstep.
            Then the leader said to the Witch:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We have obeyed you as far as we were able. The Tin Woodman and
            the Scarecrow are destroyed, and the Lion is tied up in your yard.
            The little girl we dare not harm, nor the dog she carries in her arms.
            Your power over our band is now ended, and you will never see us again.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Then all the Winged Monkeys, with much laughing and chattering
            and noise, flew into the air and were soon out of sight.&lt;/p&gt;
        &lt;p&gt;The Wicked Witch was both surprised and worried when she saw
            the mark on Dorothy&amp;rsquo;s forehead, for she knew well that neither the
            Winged Monkeys nor she, herself, dare hurt the girl in any way.
            She looked down at Dorothy&amp;rsquo;s feet, and seeing the Silver Shoes,
            began to tremble with fear, for she knew what a powerful charm
            belonged to them. At first the Witch was tempted to run away from
            Dorothy; but she happened to look into the child&amp;rsquo;s eyes and saw
            how simple the soul behind them was, and that the little girl did
            not know of the wonderful power the Silver Shoes gave her. So the
            Wicked Witch laughed to herself, and thought, &amp;ldquo;I can still make
            her my slave, for she does not know how to use her power.&amp;rdquo;
            Then she said to Dorothy, harshly and severely:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Come with me; and see that you mind everything I tell you,
            for if you do not I will make an end of you, as I did of the Tin
            Woodman and the Scarecrow.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Dorothy followed her through many of the beautiful rooms in
            her castle until they came to the kitchen, where the Witch bade
            her clean the pots and kettles and sweep the floor and keep the
            fire fed with wood.&lt;/p&gt;
        &lt;p&gt;Dorothy went to work meekly, with her mind made up to work as
            hard as she could; for she was glad the Wicked Witch had decided
            not to kill her.&lt;/p&gt;
        &lt;p&gt;With Dorothy hard at work, the Witch thought she would go into
            the courtyard and harness the Cowardly Lion like a horse; it would
            amuse her, she was sure, to make him draw her chariot whenever she
            wished to go to drive. But as she opened the gate the Lion gave a
            loud roar and bounded at her so fiercely that the Witch was afraid,
            and ran out and shut the gate again.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;If I cannot harness you,&amp;rdquo; said the Witch to the Lion,
            speaking through the bars of the gate, &amp;ldquo;I can starve you.
            You shall have nothing to eat until you do as I wish.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So after that she took no food to the imprisoned Lion;
            but every day she came to the gate at noon and asked, &amp;ldquo;Are you
            ready to be harnessed like a horse?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;And the Lion would answer, &amp;ldquo;No. If you come in this yard, I
            will bite you.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The reason the Lion did not have to do as the Witch wished was
            that every night, while the woman was asleep, Dorothy carried him
            food from the cupboard. After he had eaten he would lie down on
            his bed of straw, and Dorothy would lie beside him and put her
            head on his soft, shaggy mane, while they talked of their troubles
            and tried to plan some way to escape. But they could find no way
            to get out of the castle, for it was constantly guarded by the
            yellow Winkies, who were the slaves of the Wicked Witch and
            too afraid of her not to do as she told them.&lt;/p&gt;
        &lt;p&gt;The girl had to work hard during the day, and often the Witch
            threatened to beat her with the same old umbrella she always
            carried in her hand. But, in truth, she did not dare to strike
            Dorothy, because of the mark upon her forehead. The child did not
            know this, and was full of fear for herself and Toto. Once the
            Witch struck Toto a blow with her umbrella and the brave little
            dog flew at her and bit her leg in return. The Witch did not
            bleed where she was bitten, for she was so wicked that the blood
            in her had dried up many years before.&lt;/p&gt;
        &lt;p&gt;Dorothy&amp;rsquo;s life became very sad as she grew to understand that
            it would be harder than ever to get back to Kansas and Aunt Em again.
            Sometimes she would cry bitterly for hours, with Toto sitting at her
            feet and looking into her face, whining dismally to show how sorry
            he was for his little mistress. Toto did not really care whether
            he was in Kansas or the Land of Oz so long as Dorothy was with him;
            but he knew the little girl was unhappy, and that made him unhappy too.&lt;/p&gt;
        &lt;p&gt;Now the Wicked Witch had a great longing to have for her own
            the Silver Shoes which the girl always wore. Her bees and her
            crows and her wolves were lying in heaps and drying up, and she
            had used up all the power of the Golden Cap; but if she could
            only get hold of the Silver Shoes, they would give her more power
            than all the other things she had lost. She watched Dorothy carefully,
            to see if she ever took off her shoes, thinking she might steal them.
            But the child was so proud of her pretty shoes that she never took
            them off except at night and when she took her bath. The Witch was
            too much afraid of the dark to dare go in Dorothy&amp;rsquo;s room at night
            to take the shoes, and her dread of water was greater than her
            fear of the dark, so she never came near when Dorothy was bathing.
            Indeed, the old Witch never touched water, nor ever let water
            touch her in any way.&lt;/p&gt;
        &lt;p&gt;But the wicked creature was very cunning, and she finally thought of
            a trick that would give her what she wanted. She placed a bar of iron
            in the middle of the kitchen floor, and then by her magic arts made the
            iron invisible to human eyes. So that when Dorothy walked across the floor
            she stumbled over the bar, not being able to see it, and fell at full length.
            She was not much hurt, but in her fall one of the Silver Shoes came off; and
            before she could reach it, the Witch had snatched it away and put it on her
            own skinny foot.&lt;/p&gt;
        &lt;p&gt;The wicked woman was greatly pleased with the success of her trick,
            for as long as she had one of the shoes she owned half the power of
            their charm, and Dorothy could not use it against her, even had she
            known how to do so.&lt;/p&gt;
        &lt;p&gt;The little girl, seeing she had lost one of her pretty shoes,
            grew angry, and said to the Witch, &amp;ldquo;Give me back my shoe!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I will not,&amp;rdquo; retorted the Witch, &amp;ldquo;for it is now my shoe, and
            not yours.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;You are a wicked creature!&amp;rdquo; cried Dorothy. &amp;ldquo;You have no right
            to take my shoe from me.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I shall keep it, just the same,&amp;rdquo; said the Witch, laughing at her,
        &amp;ldquo;and someday I shall get the other one from you, too.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;This made Dorothy so very angry that she picked up the bucket
            of water that stood near and dashed it over the Witch, wetting her
            from head to foot.&lt;/p&gt;
        &lt;p&gt;Instantly the wicked woman gave a loud cry of fear, and then, as
            Dorothy looked at her in wonder, the Witch began to shrink and fall away.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;See what you have done!&amp;rdquo; she screamed. &amp;ldquo;In a minute I shall melt away.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I&amp;rsquo;m very sorry, indeed,&amp;rdquo; said Dorothy, who was truly frightened to
            see the Witch actually melting away like brown sugar before her very eyes.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Didn&amp;rsquo;t you know water would be the end of me?&amp;rdquo; asked the
            Witch, in a wailing, despairing voice.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Of course not,&amp;rdquo; answered Dorothy. &amp;ldquo;How should I?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Well, in a few minutes I shall be all melted, and you will
            have the castle to yourself. I have been wicked in my day, but I
            never thought a little girl like you would ever be able to melt me
            and end my wicked deeds. Look out&amp;mdash;here I go!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;With these words the Witch fell down in a brown, melted,
            shapeless mass and began to spread over the clean boards of the
            kitchen floor. Seeing that she had really melted away to nothing,
            Dorothy drew another bucket of water and threw it over the mess.
            She then swept it all out the door. After picking out the silver
            shoe, which was all that was left of the old woman, she cleaned
            and dried it with a cloth, and put it on her foot again. Then,
            being at last free to do as she chose, she ran out to the
            courtyard to tell the Lion that the Wicked Witch of the West had
            come to an end, and that they were no longer prisoners in a
            strange land.
        &lt;/p&gt;
        
        
        &lt;h2&gt;The Rescue&lt;/h2&gt;
        
        &lt;p&gt;The Cowardly Lion was much pleased to hear that the Wicked
            Witch had been melted by a bucket of water, and Dorothy at once
            unlocked the gate of his prison and set him free. They went in
            together to the castle, where Dorothy&amp;rsquo;s first act was to call all
            the Winkies together and tell them that they were no longer slaves.&lt;/p&gt;
        &lt;p&gt;There was great rejoicing among the yellow Winkies, for they
            had been made to work hard during many years for the Wicked Witch,
            who had always treated them with great cruelty. They kept this
            day as a holiday, then and ever after, and spent the time in
            feasting and dancing.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;If our friends, the Scarecrow and the Tin Woodman, were only
            with us,&amp;rdquo; said the Lion, &amp;ldquo;I should be quite happy.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Don&amp;rsquo;t you suppose we could rescue them?&amp;rdquo; asked the girl anxiously.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We can try,&amp;rdquo; answered the Lion.&lt;/p&gt;
        &lt;p&gt;So they called the yellow Winkies and asked them if they would
            help to rescue their friends, and the Winkies said that they would
            be delighted to do all in their power for Dorothy, who had set them
            free from bondage. So she chose a number of the Winkies who looked
            as if they knew the most, and they all started away. They traveled
            that day and part of the next until they came to the rocky plain
            where the Tin Woodman lay, all battered and bent. His axe was near him,
            but the blade was rusted and the handle broken off short.&lt;/p&gt;
        &lt;p&gt;The Winkies lifted him tenderly in their arms, and carried him
            back to the Yellow Castle again, Dorothy shedding a few tears by
            the way at the sad plight of her old friend, and the Lion looking
            sober and sorry. When they reached the castle Dorothy said to the
            Winkies:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Are any of your people tinsmiths?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, yes. Some of us are very good tinsmiths,&amp;rdquo; they told her.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Then bring them to me,&amp;rdquo; she said. And when the tinsmiths came,
            bringing with them all their tools in baskets, she inquired,
        &amp;ldquo;Can you straighten out those dents in the Tin Woodman, and bend him
            back into shape again, and solder him together where he is broken?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The tinsmiths looked the Woodman over carefully and then
            answered that they thought they could mend him so he would be as
            good as ever. So they set to work in one of the big yellow rooms
            of the castle and worked for three days and four nights, hammering
            and twisting and bending and soldering and polishing and pounding
            at the legs and body and head of the Tin Woodman, until at last he
            was straightened out into his old form, and his joints worked as
            well as ever. To be sure, there were several patches on him, but
            the tinsmiths did a good job, and as the Woodman was not a vain
            man he did not mind the patches at all.&lt;/p&gt;
        &lt;p&gt;When, at last, he walked into Dorothy&amp;rsquo;s room and thanked her
            for rescuing him, he was so pleased that he wept tears of joy,
            and Dorothy had to wipe every tear carefully from his face with
            her apron, so his joints would not be rusted. At the same time
            her own tears fell thick and fast at the joy of meeting her old
            friend again, and these tears did not need to be wiped away. As
            for the Lion, he wiped his eyes so often with the tip of his tail
            that it became quite wet, and he was obliged to go out into the
            courtyard and hold it in the sun till it dried.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;If we only had the Scarecrow with us again,&amp;rdquo; said the
            Tin Woodman, when Dorothy had finished telling him everything
            that had happened, &amp;ldquo;I should be quite happy.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We must try to find him,&amp;rdquo; said the girl.&lt;/p&gt;
        &lt;p&gt;So she called the Winkies to help her, and they walked all that day
            and part of the next until they came to the tall tree in the branches of
            which the Winged Monkeys had tossed the Scarecrow&amp;rsquo;s clothes.&lt;/p&gt;
        &lt;p&gt;It was a very tall tree, and the trunk was so smooth that no
            one could climb it; but the Woodman said at once, &amp;ldquo;I&amp;rsquo;ll chop it
            down, and then we can get the Scarecrow&amp;rsquo;s clothes.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Now while the tinsmiths had been at work mending the Woodman
            himself, another of the Winkies, who was a goldsmith, had made an
            axe&amp;#8208;handle of solid gold and fitted it to the Woodman&amp;rsquo;s axe,
            instead of the old broken handle. Others polished the blade until
            all the rust was removed and it glistened like burnished silver.&lt;/p&gt;
        &lt;p&gt;As soon as he had spoken, the Tin Woodman began to chop, and in a
            short time the tree fell over with a crash, whereupon the Scarecrow&amp;rsquo;s
            clothes fell out of the branches and rolled off on the ground.&lt;/p&gt;
        &lt;p&gt;Dorothy picked them up and had the Winkies carry them back to
            the castle, where they were stuffed with nice, clean straw; and
            behold! here was the Scarecrow, as good as ever, thanking them
            over and over again for saving him.&lt;/p&gt;
        &lt;p&gt;Now that they were reunited, Dorothy and her friends spent a
            few happy days at the Yellow Castle, where they found everything
            they needed to make them comfortable.&lt;/p&gt;
        &lt;p&gt;But one day the girl thought of Aunt Em, and said, &amp;ldquo;We must go
            back to Oz, and claim his promise.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Yes,&amp;rdquo; said the Woodman, &amp;ldquo;at last I shall get my heart.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And I shall get my brains,&amp;rdquo; added the Scarecrow joyfully.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And I shall get my courage,&amp;rdquo; said the Lion thoughtfully.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And I shall get back to Kansas,&amp;rdquo; cried Dorothy, clapping her hands.
        &amp;ldquo;Oh, let us start for the Emerald City tomorrow!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;This they decided to do. The next day they called the Winkies
            together and bade them good&amp;#8208;bye. The Winkies were sorry to have
            them go, and they had grown so fond of the Tin Woodman that they
            begged him to stay and rule over them and the Yellow Land of the West.
            Finding they were determined to go, the Winkies gave Toto and the Lion
            each a golden collar; and to Dorothy they presented a beautiful bracelet
            studded with diamonds; and to the Scarecrow they gave a gold&amp;#8208;headed
            walking stick, to keep him from stumbling; and to the Tin Woodman they
            offered a silver oil&amp;#8208;can, inlaid with gold and set with precious jewels.&lt;/p&gt;
        &lt;p&gt;Every one of the travelers made the Winkies a pretty speech in
            return, and all shook hands with them until their arms ached.&lt;/p&gt;
        &lt;p&gt;Dorothy went to the Witch&amp;rsquo;s cupboard to fill her basket with
            food for the journey, and there she saw the Golden Cap. She tried
            it on her own head and found that it fitted her exactly. She did
            not know anything about the charm of the Golden Cap, but she saw
            that it was pretty, so she made up her mind to wear it and carry
            her sunbonnet in the basket.&lt;/p&gt;
        &lt;p&gt;Then, being prepared for the journey, they all started for the
            Emerald City; and the Winkies gave them three cheers and many good
            wishes to carry with them.
        &lt;/p&gt;
        
        
        &lt;h2&gt;The Winged Monkeys&lt;/h2&gt;
        
        &lt;p&gt;You will remember there was no road&amp;mdash;not even a
            pathway&amp;mdash;between the castle of the Wicked Witch and the Emerald City.
            When the four travelers went in search of the Witch she had seen
            them coming, and so sent the Winged Monkeys to bring them to her.
            It was much harder to find their way back through the big fields
            of buttercups and yellow daisies than it was being carried.
            They knew, of course, they must go straight east, toward the rising
            sun; and they started off in the right way. But at noon, when the
            sun was over their heads, they did not know which was east and
            which was west, and that was the reason they were lost in the
            great fields. They kept on walking, however, and at night the
            moon came out and shone brightly. So they lay down among the
            sweet smelling yellow flowers and slept soundly until
            morning&amp;mdash;all but the Scarecrow and the Tin Woodman.&lt;/p&gt;
        &lt;p&gt;The next morning the sun was behind a cloud, but they started
            on, as if they were quite sure which way they were going.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;If we walk far enough,&amp;rdquo; said Dorothy, &amp;ldquo;I am sure we shall
            sometime come to some place.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;But day by day passed away, and they still saw nothing before
            them but the scarlet fields. The Scarecrow began to grumble a bit.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We have surely lost our way,&amp;rdquo; he said, &amp;ldquo;and unless we find it
            again in time to reach the Emerald City, I shall never get my brains.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Nor I my heart,&amp;rdquo; declared the Tin Woodman. &amp;ldquo;It seems to me I
            can scarcely wait till I get to Oz, and you must admit this is a
            very long journey.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;You see,&amp;rdquo; said the Cowardly Lion, with a whimper, &amp;ldquo;I haven&amp;rsquo;t the
            courage to keep tramping forever, without getting anywhere at all.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Then Dorothy lost heart. She sat down on the grass and looked
            at her companions, and they sat down and looked at her, and Toto
            found that for the first time in his life he was too tired to
            chase a butterfly that flew past his head. So he put out his
            tongue and panted and looked at Dorothy as if to ask what they
            should do next.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Suppose we call the field mice,&amp;rdquo; she suggested. &amp;ldquo;They could
            probably tell us the way to the Emerald City.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;To be sure they could,&amp;rdquo; cried the Scarecrow. &amp;ldquo;Why didn&amp;rsquo;t we
            think of that before?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Dorothy blew the little whistle she had always carried about
            her neck since the Queen of the Mice had given it to her. In a
            few minutes they heard the pattering of tiny feet, and many of the
            small gray mice came running up to her. Among them was the Queen
            herself, who asked, in her squeaky little voice:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What can I do for my friends?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We have lost our way,&amp;rdquo; said Dorothy. &amp;ldquo;Can you tell us where
            the Emerald City is?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Certainly,&amp;rdquo; answered the Queen; &amp;ldquo;but it is a great way off,
            for you have had it at your backs all this time.&amp;rdquo; Then she
            noticed Dorothy&amp;rsquo;s Golden Cap, and said, &amp;ldquo;Why don&amp;rsquo;t you use the
            charm of the Cap, and call the Winged Monkeys to you? They will
            carry you to the City of Oz in less than an hour.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I didn&amp;rsquo;t know there was a charm,&amp;rdquo; answered Dorothy, in
            surprise. &amp;ldquo;What is it?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;It is written inside the Golden Cap,&amp;rdquo; replied the Queen of
            the Mice. &amp;ldquo;But if you are going to call the Winged Monkeys we
            must run away, for they are full of mischief and think it great
            fun to plague us.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Won&amp;rsquo;t they hurt me?&amp;rdquo; asked the girl anxiously.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, no. They must obey the wearer of the Cap. Good&amp;#8208;bye!&amp;rdquo;
            And she scampered out of sight, with all the mice hurrying after her.&lt;/p&gt;
        &lt;p&gt;Dorothy looked inside the Golden Cap and saw some words written
            upon the lining. These, she thought, must be the charm, so she read
            the directions carefully and put the Cap upon her head.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Ep&amp;#8208;pe, pep&amp;#8208;pe, kak&amp;#8208;ke!&amp;rdquo; she said, standing on her left foot.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What did you say?&amp;rdquo; asked the Scarecrow, who did not know what
            she was doing.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Hil&amp;#8208;lo, hol&amp;#8208;lo, hel&amp;#8208;lo!&amp;rdquo; Dorothy went on, standing this time
            on her right foot.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Hello!&amp;rdquo; replied the Tin Woodman calmly.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Ziz&amp;#8208;zy, zuz&amp;#8208;zy, zik!&amp;rdquo; said Dorothy, who was now standing on
            both feet. This ended the saying of the charm, and they heard a
            great chattering and flapping of wings, as the band of Winged
            Monkeys flew up to them.&lt;/p&gt;
        &lt;p&gt;The King bowed low before Dorothy, and asked, &amp;ldquo;What is your command?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We wish to go to the Emerald City,&amp;rdquo; said the child, &amp;ldquo;and we have
            lost our way.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We will carry you,&amp;rdquo; replied the King, and no sooner had he
            spoken than two of the Monkeys caught Dorothy in their arms and
            flew away with her. Others took the Scarecrow and the Woodman and
            the Lion, and one little Monkey seized Toto and flew after them,
            although the dog tried hard to bite him.&lt;/p&gt;
        &lt;p&gt;The Scarecrow and the Tin Woodman were rather frightened at
            first, for they remembered how badly the Winged Monkeys had
            treated them before; but they saw that no harm was intended, so
            they rode through the air quite cheerfully, and had a fine time
            looking at the pretty gardens and woods far below them.&lt;/p&gt;
        &lt;p&gt;Dorothy found herself riding easily between two of the biggest
            Monkeys, one of them the King himself. They had made a chair of
            their hands and were careful not to hurt her.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Why do you have to obey the charm of the Golden Cap?&amp;rdquo; she asked.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That is a long story,&amp;rdquo; answered the King, with a Winged laugh;
        &amp;ldquo;but as we have a long journey before us, I will pass the time by
            telling you about it, if you wish.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I shall be glad to hear it,&amp;rdquo; she replied.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Once,&amp;rdquo; began the leader, &amp;ldquo;we were a free people, living happily
            in the great forest, flying from tree to tree, eating nuts and fruit,
            and doing just as we pleased without calling anybody master. Perhaps
            some of us were rather too full of mischief at times, flying down to
            pull the tails of the animals that had no wings, chasing birds, and
            throwing nuts at the people who walked in the forest. But we were
            careless and happy and full of fun, and enjoyed every minute of the day.
            This was many years ago, long before Oz came out of the clouds to rule
            over this land.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;There lived here then, away at the North, a beautiful princess,
            who was also a powerful sorceress. All her magic was used to help
            the people, and she was never known to hurt anyone who was good.
            Her name was Gayelette, and she lived in a handsome palace built
            from great blocks of ruby. Everyone loved her, but her greatest
            sorrow was that she could find no one to love in return, since all
            the men were much too stupid and ugly to mate with one so beautiful
            and wise. At last, however, she found a boy who was handsome and
            manly and wise beyond his years. Gayelette made up her mind that
            when he grew to be a man she would make him her husband, so she
            took him to her ruby palace and used all her magic powers to
            make him as strong and good and lovely as any woman could wish.
            When he grew to manhood, Quelala, as he was called, was said to
            be the best and wisest man in all the land, while his manly beauty
            was so great that Gayelette loved him dearly, and hastened to make
            everything ready for the wedding.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;My grandfather was at that time the King of the Winged Monkeys
            which lived in the forest near Gayelette&amp;rsquo;s palace, and the old fellow
            loved a joke better than a good dinner. One day, just before the wedding,
            my grandfather was flying out with his band when he saw Quelala walking
            beside the river. He was dressed in a rich costume of pink silk and
            purple velvet, and my grandfather thought he would see what he could do.
            At his word the band flew down and seized Quelala, carried him in their
            arms until they were over the middle of the river, and then dropped him
            into the water.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;&amp;lsquo;Swim out, my fine fellow,&amp;rsquo; cried my grandfather, &amp;lsquo;and see if
            the water has spotted your clothes.&amp;rsquo; Quelala was much too wise
            not to swim, and he was not in the least spoiled by all his good
            fortune. He laughed, when he came to the top of the water, and
            swam in to shore. But when Gayelette came running out to him she
            found his silks and velvet all ruined by the river.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;The princess was angry, and she knew, of course, who did it.
            She had all the Winged Monkeys brought before her, and she said at
            first that their wings should be tied and they should be treated
            as they had treated Quelala, and dropped in the river. But my
            grandfather pleaded hard, for he knew the Monkeys would drown in
            the river with their wings tied, and Quelala said a kind word for
            them also; so that Gayelette finally spared them, on condition
            that the Winged Monkeys should ever after do three times the
            bidding of the owner of the Golden Cap. This Cap had been made
            for a wedding present to Quelala, and it is said to have cost the
            princess half her kingdom. Of course my grandfather and all the
            other Monkeys at once agreed to the condition, and that is how it
            happens that we are three times the slaves of the owner of the
            Golden Cap, whosoever he may be.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And what became of them?&amp;rdquo; asked Dorothy, who had been greatly
            interested in the story.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Quelala being the first owner of the Golden Cap,&amp;rdquo; replied
            the Monkey, &amp;ldquo;he was the first to lay his wishes upon us. As his
            bride could not bear the sight of us, he called us all to him in
            the forest after he had married her and ordered us always to keep
            where she could never again set eyes on a Winged Monkey, which we
            were glad to do, for we were all afraid of her.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;This was all we ever had to do until the Golden Cap fell into
            the hands of the Wicked Witch of the West, who made us enslave the
            Winkies, and afterward drive Oz himself out of the Land of the
            West. Now the Golden Cap is yours, and three times you have the
            right to lay your wishes upon us.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;As the Monkey King finished his story Dorothy looked down
            and saw the green, shining walls of the Emerald City before them.
            She wondered at the rapid flight of the Monkeys, but was glad the
            journey was over. The strange creatures set the travelers down
            carefully before the gate of the City, the King bowed low to
            Dorothy, and then flew swiftly away, followed by all his band.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That was a good ride,&amp;rdquo; said the little girl.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Yes, and a quick way out of our troubles,&amp;rdquo; replied the Lion.
        &amp;ldquo;How lucky it was you brought away that wonderful Cap!&amp;rdquo;
        &lt;/p&gt;
        
        
        &lt;h2&gt;The Discovery of Oz, the Terrible&lt;/h2&gt;
        
        &lt;p&gt;The four travelers walked up to the great gate of Emerald City
            and rang the bell. After ringing several times, it was opened by
            the same Guardian of the Gates they had met before.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What! are you back again?&amp;rdquo; he asked, in surprise.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Do you not see us?&amp;rdquo; answered the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;But I thought you had gone to visit the Wicked Witch of the West.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We did visit her,&amp;rdquo; said the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And she let you go again?&amp;rdquo; asked the man, in wonder.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;She could not help it, for she is melted,&amp;rdquo; explained the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Melted! Well, that is good news, indeed,&amp;rdquo; said the man.
        &amp;ldquo;Who melted her?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;It was Dorothy,&amp;rdquo; said the Lion gravely.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Good gracious!&amp;rdquo; exclaimed the man, and he bowed very low indeed
            before her.&lt;/p&gt;
        &lt;p&gt;Then he led them into his little room and locked the spectacles
            from the great box on all their eyes, just as he had done before.
            Afterward they passed on through the gate into the Emerald City.
            When the people heard from the Guardian of the Gates that Dorothy
            had melted the Wicked Witch of the West, they all gathered around
            the travelers and followed them in a great crowd to the Palace of Oz.&lt;/p&gt;
        &lt;p&gt;The soldier with the green whiskers was still on guard before
            the door, but he let them in at once, and they were again met by
            the beautiful green girl, who showed each of them to their old
            rooms at once, so they might rest until the Great Oz was ready to
            receive them.&lt;/p&gt;
        &lt;p&gt;The soldier had the news carried straight to Oz that Dorothy
            and the other travelers had come back again, after destroying the
            Wicked Witch; but Oz made no reply. They thought the Great Wizard
            would send for them at once, but he did not. They had no word
            from him the next day, nor the next, nor the next. The waiting
            was tiresome and wearing, and at last they grew vexed that Oz
            should treat them in so poor a fashion, after sending them to
            undergo hardships and slavery. So the Scarecrow at last asked the
            green girl to take another message to Oz, saying if he did not
            let them in to see him at once they would call the Winged Monkeys
            to help them, and find out whether he kept his promises or not.
            When the Wizard was given this message he was so frightened that he
            sent word for them to come to the Throne Room at four minutes after
            nine o&amp;rsquo;clock the next morning. He had once met the Winged Monkeys
            in the Land of the West, and he did not wish to meet them again.&lt;/p&gt;
        &lt;p&gt;The four travelers passed a sleepless night, each thinking of the
            gift Oz had promised to bestow on him. Dorothy fell asleep only once,
            and then she dreamed she was in Kansas, where Aunt Em was telling her
            how glad she was to have her little girl at home again.&lt;/p&gt;
        &lt;p&gt;Promptly at nine o&amp;rsquo;clock the next morning the green&amp;#8208;whiskered
            soldier came to them, and four minutes later they all went into
            the Throne Room of the Great Oz.&lt;/p&gt;
        &lt;p&gt;Of course each one of them expected to see the Wizard in the shape
            he had taken before, and all were greatly surprised when they looked
            about and saw no one at all in the room. They kept close to the door
            and closer to one another, for the stillness of the empty room was more
            dreadful than any of the forms they had seen Oz take.&lt;/p&gt;
        &lt;p&gt;Presently they heard a solemn Voice, that seemed to come from
            somewhere near the top of the great dome, and it said:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I am Oz, the Great and Terrible. Why do you seek me?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;They looked again in every part of the room, and then, seeing
            no one, Dorothy asked, &amp;ldquo;Where are you?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I am everywhere,&amp;rdquo; answered the Voice, &amp;ldquo;but to the eyes of
            common mortals I am invisible. I will now seat myself upon my
            throne, that you may converse with me.&amp;rdquo; Indeed, the Voice seemed
            just then to come straight from the throne itself; so they walked
            toward it and stood in a row while Dorothy said:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We have come to claim our promise, O Oz.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What promise?&amp;rdquo; asked Oz.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;You promised to send me back to Kansas when the Wicked Witch
            was destroyed,&amp;rdquo; said the girl.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And you promised to give me brains,&amp;rdquo; said the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And you promised to give me a heart,&amp;rdquo; said the Tin Woodman.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And you promised to give me courage,&amp;rdquo; said the Cowardly Lion.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Is the Wicked Witch really destroyed?&amp;rdquo; asked the Voice,
            and Dorothy thought it trembled a little.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Yes,&amp;rdquo; she answered, &amp;ldquo;I melted her with a bucket of water.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Dear me,&amp;rdquo; said the Voice, &amp;ldquo;how sudden! Well, come to me
            tomorrow, for I must have time to think it over.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;You&amp;rsquo;ve had plenty of time already,&amp;rdquo; said the Tin Woodman angrily.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We shan&amp;rsquo;t wait a day longer,&amp;rdquo; said the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;You must keep your promises to us!&amp;rdquo; exclaimed Dorothy.&lt;/p&gt;
        &lt;p&gt;The Lion thought it might be as well to frighten the Wizard,
            so he gave a large, loud roar, which was so fierce and dreadful
            that Toto jumped away from him in alarm and tipped over the screen
            that stood in a corner. As it fell with a crash they looked
            that way, and the next moment all of them were filled with wonder.
            For they saw, standing in just the spot the screen had hidden,
            a little old man, with a bald head and a wrinkled face, who seemed
            to be as much surprised as they were. The Tin Woodman, raising
            his axe, rushed toward the little man and cried out, &amp;ldquo;Who are you?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I am Oz, the Great and Terrible,&amp;rdquo; said the little man, in a
            trembling voice. &amp;ldquo;But don&amp;rsquo;t strike me&amp;mdash;please don&amp;rsquo;t&amp;mdash;and I&amp;rsquo;ll
            do anything you want me to.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Our friends looked at him in surprise and dismay.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I thought Oz was a great Head,&amp;rdquo; said Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And I thought Oz was a lovely Lady,&amp;rdquo; said the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And I thought Oz was a terrible Beast,&amp;rdquo; said the Tin Woodman.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And I thought Oz was a Ball of Fire,&amp;rdquo; exclaimed the Lion.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;No, you are all wrong,&amp;rdquo; said the little man meekly. &amp;ldquo;I have
            been making believe.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Making believe!&amp;rdquo; cried Dorothy. &amp;ldquo;Are you not a Great Wizard?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Hush, my dear,&amp;rdquo; he said. &amp;ldquo;Don&amp;rsquo;t speak so loud, or you will be
            overheard&amp;mdash;and I should be ruined. I&amp;rsquo;m supposed to be a Great Wizard.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And aren&amp;rsquo;t you?&amp;rdquo; she asked.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Not a bit of it, my dear; I&amp;rsquo;m just a common man.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;You&amp;rsquo;re more than that,&amp;rdquo; said the Scarecrow, in a grieved tone;
        &amp;ldquo;you&amp;rsquo;re a humbug.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Exactly so!&amp;rdquo; declared the little man, rubbing his hands
            together as if it pleased him. &amp;ldquo;I am a humbug.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;But this is terrible,&amp;rdquo; said the Tin Woodman. &amp;ldquo;How shall I
            ever get my heart?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Or I my courage?&amp;rdquo; asked the Lion.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Or I my brains?&amp;rdquo; wailed the Scarecrow, wiping the tears from
            his eyes with his coat sleeve.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;My dear friends,&amp;rdquo; said Oz, &amp;ldquo;I pray you not to speak of these
            little things. Think of me, and the terrible trouble I&amp;rsquo;m in at
            being found out.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Doesn&amp;rsquo;t anyone else know you&amp;rsquo;re a humbug?&amp;rdquo; asked Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;No one knows it but you four&amp;mdash;and myself,&amp;rdquo; replied Oz. &amp;ldquo;I
            have fooled everyone so long that I thought I should never be
            found out. It was a great mistake my ever letting you into the
            Throne Room. Usually I will not see even my subjects, and so they
            believe I am something terrible.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;But, I don&amp;rsquo;t understand,&amp;rdquo; said Dorothy, in bewilderment.
        &amp;ldquo;How was it that you appeared to me as a great Head?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That was one of my tricks,&amp;rdquo; answered Oz. &amp;ldquo;Step this way,
            please, and I will tell you all about it.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;He led the way to a small chamber in the rear of the Throne
            Room, and they all followed him. He pointed to one corner, in
            which lay the great Head, made out of many thicknesses of paper,
            and with a carefully painted face.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;This I hung from the ceiling by a wire,&amp;rdquo; said Oz. &amp;ldquo;I stood
            behind the screen and pulled a thread, to make the eyes move and
            the mouth open.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;But how about the voice?&amp;rdquo; she inquired.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, I am a ventriloquist,&amp;rdquo; said the little man. &amp;ldquo;I can throw
            the sound of my voice wherever I wish, so that you thought it was
            coming out of the Head. Here are the other things I used to
            deceive you.&amp;rdquo; He showed the Scarecrow the dress and the mask he
            had worn when he seemed to be the lovely Lady. And the Tin
            Woodman saw that his terrible Beast was nothing but a lot of
            skins, sewn together, with slats to keep their sides out. As for
            the Ball of Fire, the false Wizard had hung that also from the
            ceiling. It was really a ball of cotton, but when oil was poured
            upon it the ball burned fiercely.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Really,&amp;rdquo; said the Scarecrow, &amp;ldquo;you ought to be ashamed of
            yourself for being such a humbug.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I am&amp;mdash;I certainly am,&amp;rdquo; answered the little man sorrowfully;
        &amp;ldquo;but it was the only thing I could do. Sit down, please, there
            are plenty of chairs; and I will tell you my story.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So they sat down and listened while he told the following tale.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I was born in Omaha&amp;mdash;&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Why, that isn&amp;rsquo;t very far from Kansas!&amp;rdquo; cried Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;No, but it&amp;rsquo;s farther from here,&amp;rdquo; he said, shaking his head at
            her sadly. &amp;ldquo;When I grew up I became a ventriloquist, and at that
            I was very well trained by a great master. I can imitate any kind
            of a bird or beast.&amp;rdquo; Here he mewed so like a kitten that Toto
            pricked up his ears and looked everywhere to see where she was.
        &amp;ldquo;After a time,&amp;rdquo; continued Oz, &amp;ldquo;I tired of that, and became a
            balloonist.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What is that?&amp;rdquo; asked Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;A man who goes up in a balloon on circus day, so as to draw a
            crowd of people together and get them to pay to see the circus,&amp;rdquo;
            he explained.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh,&amp;rdquo; she said, &amp;ldquo;I know.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Well, one day I went up in a balloon and the ropes got
            twisted, so that I couldn&amp;rsquo;t come down again. It went way up above
            the clouds, so far that a current of air struck it and carried it
            many, many miles away. For a day and a night I traveled through
            the air, and on the morning of the second day I awoke and found
            the balloon floating over a strange and beautiful country.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;It came down gradually, and I was not hurt a bit. But I
            found myself in the midst of a strange people, who, seeing me come
            from the clouds, thought I was a great Wizard. Of course I let
            them think so, because they were afraid of me, and promised to do
            anything I wished them to.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Just to amuse myself, and keep the good people busy, I
            ordered them to build this City, and my Palace; and they did it
            all willingly and well. Then I thought, as the country was so
            green and beautiful, I would call it the Emerald City; and to make
            the name fit better I put green spectacles on all the people, so
            that everything they saw was green.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;But isn&amp;rsquo;t everything here green?&amp;rdquo; asked Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;No more than in any other city,&amp;rdquo; replied Oz; &amp;ldquo;but when you
            wear green spectacles, why of course everything you see looks
            green to you. The Emerald City was built a great many years ago,
            for I was a young man when the balloon brought me here, and I am a
            very old man now. But my people have worn green glasses on their
            eyes so long that most of them think it really is an Emerald City,
            and it certainly is a beautiful place, abounding in jewels and
            precious metals, and every good thing that is needed to make
            one happy. I have been good to the people, and they like me;
            but ever since this Palace was built, I have shut myself up
            and would not see any of them.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;One of my greatest fears was the Witches, for while I had no
            magical powers at all I soon found out that the Witches were
            really able to do wonderful things. There were four of them in
            this country, and they ruled the people who live in the North and
            South and East and West. Fortunately, the Witches of the North
            and South were good, and I knew they would do me no harm; but the
            Witches of the East and West were terribly wicked, and had they
            not thought I was more powerful than they themselves, they would
            surely have destroyed me. As it was, I lived in deadly fear of
            them for many years; so you can imagine how pleased I was when
            I heard your house had fallen on the Wicked Witch of the East.
            When you came to me, I was willing to promise anything if you
            would only do away with the other Witch; but, now that you have
            melted her, I am ashamed to say that I cannot keep my promises.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I think you are a very bad man,&amp;rdquo; said Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, no, my dear; I&amp;rsquo;m really a very good man, but I&amp;rsquo;m a very
            bad Wizard, I must admit.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Can&amp;rsquo;t you give me brains?&amp;rdquo; asked the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;You don&amp;rsquo;t need them. You are learning something every day.
            A baby has brains, but it doesn&amp;rsquo;t know much. Experience is the
            only thing that brings knowledge, and the longer you are on earth
            the more experience you are sure to get.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That may all be true,&amp;rdquo; said the Scarecrow, &amp;ldquo;but I shall be
            very unhappy unless you give me brains.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The false Wizard looked at him carefully.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Well,&amp;rdquo; he said with a sigh, &amp;ldquo;I&amp;rsquo;m not much of a magician,
            as I said; but if you will come to me tomorrow morning, I will
            stuff your head with brains. I cannot tell you how to use them,
            however; you must find that out for yourself.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, thank you&amp;mdash;thank you!&amp;rdquo; cried the Scarecrow. &amp;ldquo;I&amp;rsquo;ll find
            a way to use them, never fear!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;But how about my courage?&amp;rdquo; asked the Lion anxiously.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;You have plenty of courage, I am sure,&amp;rdquo; answered Oz. &amp;ldquo;All you need
            is confidence in yourself. There is no living thing that is not afraid
            when it faces danger. The True courage is in facing danger when you are
            afraid, and that kind of courage you have in plenty.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Perhaps I have, but I&amp;rsquo;m scared just the same,&amp;rdquo; said the Lion.
        &amp;ldquo;I shall really be very unhappy unless you give me the sort of
            courage that makes one forget he is afraid.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Very well, I will give you that sort of courage tomorrow,&amp;rdquo;
            replied Oz.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;How about my heart?&amp;rdquo; asked the Tin Woodman.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Why, as for that,&amp;rdquo; answered Oz, &amp;ldquo;I think you are wrong to
            want a heart. It makes most people unhappy. If you only knew it,
            you are in luck not to have a heart.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That must be a matter of opinion,&amp;rdquo; said the Tin Woodman.
        &amp;ldquo;For my part, I will bear all the unhappiness without a murmur,
            if you will give me the heart.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Very well,&amp;rdquo; answered Oz meekly. &amp;ldquo;Come to me tomorrow and you
            shall have a heart. I have played Wizard for so many years that I
            may as well continue the part a little longer.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And now,&amp;rdquo; said Dorothy, &amp;ldquo;how am I to get back to Kansas?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We shall have to think about that,&amp;rdquo; replied the little man.
        &amp;ldquo;Give me two or three days to consider the matter and I&amp;rsquo;ll try to
            find a way to carry you over the desert. In the meantime you
            shall all be treated as my guests, and while you live in the Palace
            my people will wait upon you and obey your slightest wish. There is
            only one thing I ask in return for my help&amp;mdash;such as it is. You must
            keep my secret and tell no one I am a humbug.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;They agreed to say nothing of what they had learned, and went
            back to their rooms in high spirits. Even Dorothy had hope that
        &amp;ldquo;The Great and Terrible Humbug,&amp;rdquo; as she called him, would find a
            way to send her back to Kansas, and if he did she was willing to
            forgive him everything.
        &lt;/p&gt;
        
        
        &lt;h2&gt;The Magic Art of the Great Humbug&lt;/h2&gt;
        
        &lt;p&gt;Next morning the Scarecrow said to his friends:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Congratulate me. I am going to Oz to get my brains at last.
            When I return I shall be as other men are.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I have always liked you as you were,&amp;rdquo; said Dorothy simply.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;It is kind of you to like a Scarecrow,&amp;rdquo; he replied. &amp;ldquo;But surely
            you will think more of me when you hear the splendid thoughts my new
            brain is going to turn out.&amp;rdquo; Then he said good&amp;#8208;bye to them all in a
            cheerful voice and went to the Throne Room, where he rapped upon the door.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Come in,&amp;rdquo; said Oz.&lt;/p&gt;
        &lt;p&gt;The Scarecrow went in and found the little man sitting down by
            the window, engaged in deep thought.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I have come for my brains,&amp;rdquo; remarked the Scarecrow, a little uneasily.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, yes; sit down in that chair, please,&amp;rdquo; replied Oz. &amp;ldquo;You must
            excuse me for taking your head off, but I shall have to do it in order
            to put your brains in their proper place.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That&amp;rsquo;s all right,&amp;rdquo; said the Scarecrow. &amp;ldquo;You are quite welcome to take
            my head off, as long as it will be a better one when you put it on again.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So the Wizard unfastened his head and emptied out the straw.
            Then he entered the back room and took up a measure of bran, which
            he mixed with a great many pins and needles. Having shaken them
            together thoroughly, he filled the top of the Scarecrow&amp;rsquo;s head with
            the mixture and stuffed the rest of the space with straw, to hold
            it in place.&lt;/p&gt;
        &lt;p&gt;When he had fastened the Scarecrow&amp;rsquo;s head on his body again he
            said to him, &amp;ldquo;Hereafter you will be a great man, for I have given
            you a lot of bran&amp;#8208;new brains.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The Scarecrow was both pleased and proud at the fulfillment of
            his greatest wish, and having thanked Oz warmly he went back to
            his friends.&lt;/p&gt;
        &lt;p&gt;Dorothy looked at him curiously. His head was quite bulged
            out at the top with brains.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;How do you feel?&amp;rdquo; she asked.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I feel wise indeed,&amp;rdquo; he answered earnestly. &amp;ldquo;When I get used
            to my brains I shall know everything.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Why are those needles and pins sticking out of your head?&amp;rdquo;
            asked the Tin Woodman.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That is proof that he is sharp,&amp;rdquo; remarked the Lion.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Well, I must go to Oz and get my heart,&amp;rdquo; said the Woodman.
            So he walked to the Throne Room and knocked at the door.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Come in,&amp;rdquo; called Oz, and the Woodman entered and said,
        &amp;ldquo;I have come for my heart.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Very well,&amp;rdquo; answered the little man. &amp;ldquo;But I shall have to cut
            a hole in your breast, so I can put your heart in the right place.
            I hope it won&amp;rsquo;t hurt you.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, no,&amp;rdquo; answered the Woodman. &amp;ldquo;I shall not feel it at all.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So Oz brought a pair of tinsmith&amp;rsquo;s shears and cut a small,
            square hole in the left side of the Tin Woodman&amp;rsquo;s breast.
            Then, going to a chest of drawers, he took out a pretty heart,
            made entirely of silk and stuffed with sawdust.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Isn&amp;rsquo;t it a beauty?&amp;rdquo; he asked.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;It is, indeed!&amp;rdquo; replied the Woodman, who was greatly pleased.
        &amp;ldquo;But is it a kind heart?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, very!&amp;rdquo; answered Oz. He put the heart in the Woodman&amp;rsquo;s
            breast and then replaced the square of tin, soldering it neatly
            together where it had been cut.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;There,&amp;rdquo; said he; &amp;ldquo;now you have a heart that any man might be
            proud of. I&amp;rsquo;m sorry I had to put a patch on your breast, but it
            really couldn&amp;rsquo;t be helped.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Never mind the patch,&amp;rdquo; exclaimed the happy Woodman. &amp;ldquo;I am
            very grateful to you, and shall never forget your kindness.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Don&amp;rsquo;t speak of it,&amp;rdquo; replied Oz.&lt;/p&gt;
        &lt;p&gt;Then the Tin Woodman went back to his friends, who wished him
            every joy on account of his good fortune.&lt;/p&gt;
        &lt;p&gt;The Lion now walked to the Throne Room and knocked at the door.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Come in,&amp;rdquo; said Oz.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I have come for my courage,&amp;rdquo; announced the Lion, entering the room.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Very well,&amp;rdquo; answered the little man; &amp;ldquo;I will get it for you.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;He went to a cupboard and reaching up to a high shelf took
            down a square green bottle, the contents of which he poured into
            a green&amp;#8208;gold dish, beautifully carved. Placing this before the
            Cowardly Lion, who sniffed at it as if he did not like it, the
            Wizard said:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Drink.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What is it?&amp;rdquo; asked the Lion.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Well,&amp;rdquo; answered Oz, &amp;ldquo;if it were inside of you, it would be courage.
            You know, of course, that courage is always inside one; so that this
            really cannot be called courage until you have swallowed it. Therefore
            I advise you to drink it as soon as possible.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The Lion hesitated no longer, but drank till the dish was empty.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;How do you feel now?&amp;rdquo; asked Oz.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Full of courage,&amp;rdquo; replied the Lion, who went joyfully back to
            his friends to tell them of his good fortune.&lt;/p&gt;
        &lt;p&gt;Oz, left to himself, smiled to think of his success in giving
            the Scarecrow and the Tin Woodman and the Lion exactly what they
            thought they wanted. &amp;ldquo;How can I help being a humbug,&amp;rdquo; he said,
        &amp;ldquo;when all these people make me do things that everybody knows
            can&amp;rsquo;t be done? It was easy to make the Scarecrow and the Lion
            and the Woodman happy, because they imagined I could do anything.
            But it will take more than imagination to carry Dorothy back
            to Kansas, and I&amp;rsquo;m sure I don&amp;rsquo;t know how it can be done.&amp;rdquo;
        &lt;/p&gt;
        
        
        &lt;h2&gt;How the Balloon Was Launched&lt;/h2&gt;
        
        &lt;p&gt;For three days Dorothy heard nothing from Oz. These were sad
            days for the little girl, although her friends were all quite
            happy and contented. The Scarecrow told them there were wonderful
            thoughts in his head; but he would not say what they were because
            he knew no one could understand them but himself. When the Tin
            Woodman walked about he felt his heart rattling around in his
            breast; and he told Dorothy he had discovered it to be a kinder
            and more tender heart than the one he had owned when he was made
            of flesh. The Lion declared he was afraid of nothing on earth,
            and would gladly face an army or a dozen of the fierce Kalidahs.&lt;/p&gt;
        
        &lt;p&gt;Thus each of the little party was satisfied except Dorothy,
            who longed more than ever to get back to Kansas.&lt;/p&gt;
        &lt;p&gt;On the fourth day, to her great joy, Oz sent for her, and when
            she entered the Throne Room he greeted her pleasantly:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Sit down, my dear; I think I have found the way to get you
            out of this country.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And back to Kansas?&amp;rdquo; she asked eagerly.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Well, I&amp;rsquo;m not sure about Kansas,&amp;rdquo; said Oz, &amp;ldquo;for I haven&amp;rsquo;t the
            faintest notion which way it lies. But the first thing to do is to
            cross the desert, and then it should be easy to find your way home.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;How can I cross the desert?&amp;rdquo; she inquired.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Well, I&amp;rsquo;ll tell you what I think,&amp;rdquo; said the little man.
        &amp;ldquo;You see, when I came to this country it was in a balloon. You also
            came through the air, being carried by a cyclone. So I believe
            the best way to get across the desert will be through the air.
            Now, it is quite beyond my powers to make a cyclone; but I&amp;rsquo;ve been
            thinking the matter over, and I believe I can make a balloon.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;How?&amp;rdquo; asked Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;A balloon,&amp;rdquo; said Oz, &amp;ldquo;is made of silk, which is coated with
            glue to keep the gas in it. I have plenty of silk in the Palace,
            so it will be no trouble to make the balloon. But in all this
            country there is no gas to fill the balloon with, to make it float.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;If it won&amp;rsquo;t float,&amp;rdquo; remarked Dorothy, &amp;ldquo;it will be of no use to us.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;True,&amp;rdquo; answered Oz. &amp;ldquo;But there is another way to make it
            float, which is to fill it with hot air. Hot air isn&amp;rsquo;t as good as
            gas, for if the air should get cold the balloon would come down in
            the desert, and we should be lost.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We!&amp;rdquo; exclaimed the girl. &amp;ldquo;Are you going with me?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Yes, of course,&amp;rdquo; replied Oz. &amp;ldquo;I am tired of being such a humbug.
            If I should go out of this Palace my people would soon discover I am not
            a Wizard, and then they would be vexed with me for having deceived them.
            So I have to stay shut up in these rooms all day, and it gets tiresome.
            I&amp;rsquo;d much rather go back to Kansas with you and be in a circus again.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I shall be glad to have your company,&amp;rdquo; said Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Thank you,&amp;rdquo; he answered. &amp;ldquo;Now, if you will help me sew the
            silk together, we will begin to work on our balloon.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So Dorothy took a needle and thread, and as fast as Oz cut the
            strips of silk into proper shape the girl sewed them neatly together.
            First there was a strip of light green silk, then a strip of dark green
            and then a strip of emerald green; for Oz had a fancy to make the balloon
            in different shades of the color about them. It took three days to sew
            all the strips together, but when it was finished they had a big bag of
            green silk more than twenty feet long.&lt;/p&gt;
        &lt;p&gt;Then Oz painted it on the inside with a coat of thin glue, to make
            it airtight, after which he announced that the balloon was ready.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;But we must have a basket to ride in,&amp;rdquo; he said. So he sent
            the soldier with the green whiskers for a big clothes basket,
            which he fastened with many ropes to the bottom of the balloon.&lt;/p&gt;
        &lt;p&gt;When it was all ready, Oz sent word to his people that he was
            going to make a visit to a great brother Wizard who lived in the clouds.
            The news spread rapidly throughout the city and everyone came to see the
            wonderful sight.&lt;/p&gt;
        &lt;p&gt;Oz ordered the balloon carried out in front of the Palace,
            and the people gazed upon it with much curiosity. The Tin Woodman
            had chopped a big pile of wood, and now he made a fire of it,
            and Oz held the bottom of the balloon over the fire so that the
            hot air that arose from it would be caught in the silken bag.
            Gradually the balloon swelled out and rose into the air, until
            finally the basket just touched the ground.&lt;/p&gt;
        &lt;p&gt;Then Oz got into the basket and said to all the people in a
            loud voice:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I am now going away to make a visit. While I am gone the
            Scarecrow will rule over you. I command you to obey him as you
            would me.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The balloon was by this time tugging hard at the rope that
            held it to the ground, for the air within it was hot, and this
            made it so much lighter in weight than the air without that it
            pulled hard to rise into the sky.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Come, Dorothy!&amp;rdquo; cried the Wizard. &amp;ldquo;Hurry up, or the balloon
            will fly away.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I can&amp;rsquo;t find Toto anywhere,&amp;rdquo; replied Dorothy, who did not
            wish to leave her little dog behind. Toto had run into the crowd
            to bark at a kitten, and Dorothy at last found him. She picked
            him up and ran towards the balloon.&lt;/p&gt;
        &lt;p&gt;She was within a few steps of it, and Oz was holding out his
            hands to help her into the basket, when, crack! went the ropes,
            and the balloon rose into the air without her.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Come back!&amp;rdquo; she screamed. &amp;ldquo;I want to go, too!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I can&amp;rsquo;t come back, my dear,&amp;rdquo; called Oz from the basket.
        &amp;ldquo;Good&amp;#8208;bye!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Good&amp;#8208;bye!&amp;rdquo; shouted everyone, and all eyes were turned upward
            to where the Wizard was riding in the basket, rising every moment
            farther and farther into the sky.&lt;/p&gt;
        &lt;p&gt;And that was the last any of them ever saw of Oz, the
            Wonderful Wizard, though he may have reached Omaha safely,
            and be there now, for all we know. But the people remembered
            him lovingly, and said to one another:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oz was always our friend. When he was here he built for us
            this beautiful Emerald City, and now he is gone he has left the
            Wise Scarecrow to rule over us.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Still, for many days they grieved over the loss of the
            Wonderful Wizard, and would not be comforted.
        &lt;/p&gt;
        
        
        &lt;h2&gt;Away to the South&lt;/h2&gt;
        
        &lt;p&gt;Dorothy wept bitterly at the passing of her hope to get home
            to Kansas again; but when she thought it all over she was glad she
            had not gone up in a balloon. And she also felt sorry at losing
            Oz, and so did her companions.&lt;/p&gt;
        
        &lt;p&gt;The Tin Woodman came to her and said:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Truly I should be ungrateful if I failed to mourn for the
            man who gave me my lovely heart. I should like to cry a little
            because Oz is gone, if you will kindly wipe away my tears, so that
            I shall not rust.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;With pleasure,&amp;rdquo; she answered, and brought a towel at once.
            Then the Tin Woodman wept for several minutes, and she watched the
            tears carefully and wiped them away with the towel. When he had
            finished, he thanked her kindly and oiled himself thoroughly with
            his jeweled oil&amp;#8208;can, to guard against mishap.&lt;/p&gt;
        &lt;p&gt;The Scarecrow was now the ruler of the Emerald City,
            and although he was not a Wizard the people were proud of him.
        &amp;ldquo;For,&amp;rdquo; they said, &amp;ldquo;there is not another city in all the world
            that is ruled by a stuffed man.&amp;rdquo; And, so far as they knew,
            they were quite right.&lt;/p&gt;
        &lt;p&gt;The morning after the balloon had gone up with Oz, the
            four travelers met in the Throne Room and talked matters over.
            The Scarecrow sat in the big throne and the others stood
            respectfully before him.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We are not so unlucky,&amp;rdquo; said the new ruler, &amp;ldquo;for this Palace
            and the Emerald City belong to us, and we can do just as we please.
            When I remember that a short time ago I was up on a pole in a farmer&amp;rsquo;s
            cornfield, and that now I am the ruler of this beautiful City, I am
            quite satisfied with my lot.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I also,&amp;rdquo; said the Tin Woodman, &amp;ldquo;am well&amp;#8208;pleased with my new heart;
            and, really, that was the only thing I wished in all the world.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;For my part, I am content in knowing I am as brave as any
            beast that ever lived, if not braver,&amp;rdquo; said the Lion modestly.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;If Dorothy would only be contented to live in the Emerald City,&amp;rdquo;
            continued the Scarecrow, &amp;ldquo;we might all be happy together.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;But I don&amp;rsquo;t want to live here,&amp;rdquo; cried Dorothy. &amp;ldquo;I want to go
            to Kansas, and live with Aunt Em and Uncle Henry.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Well, then, what can be done?&amp;rdquo; inquired the Woodman.&lt;/p&gt;
        &lt;p&gt;The Scarecrow decided to think, and he thought so hard that the
            pins and needles began to stick out of his brains. Finally he said:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Why not call the Winged Monkeys, and ask them to carry you
            over the desert?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I never thought of that!&amp;rdquo; said Dorothy joyfully. &amp;ldquo;It&amp;rsquo;s just
            the thing. I&amp;rsquo;ll go at once for the Golden Cap.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;When she brought it into the Throne Room she spoke the magic
            words, and soon the band of Winged Monkeys flew in through the
            open window and stood beside her.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;This is the second time you have called us,&amp;rdquo; said the Monkey
            King, bowing before the little girl. &amp;ldquo;What do you wish?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I want you to fly with me to Kansas,&amp;rdquo; said Dorothy.&lt;/p&gt;
        &lt;p&gt;But the Monkey King shook his head.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That cannot be done,&amp;rdquo; he said. &amp;ldquo;We belong to this country alone,
            and cannot leave it. There has never been a Winged Monkey in Kansas yet,
            and I suppose there never will be, for they don&amp;rsquo;t belong there. We shall
            be glad to serve you in any way in our power, but we cannot cross the desert.
            Good&amp;#8208;bye.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;And with another bow, the Monkey King spread his wings and
            flew away through the window, followed by all his band.&lt;/p&gt;
        &lt;p&gt;Dorothy was ready to cry with disappointment. &amp;ldquo;I have wasted
            the charm of the Golden Cap to no purpose,&amp;rdquo; she said, &amp;ldquo;for the
            Winged Monkeys cannot help me.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;It is certainly too bad!&amp;rdquo; said the tender&amp;#8208;hearted Woodman.&lt;/p&gt;
        &lt;p&gt;The Scarecrow was thinking again, and his head bulged out so
            horribly that Dorothy feared it would burst.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Let us call in the soldier with the green whiskers,&amp;rdquo; he said,
        &amp;ldquo;and ask his advice.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So the soldier was summoned and entered the Throne Room
            timidly, for while Oz was alive he never was allowed to come
            farther than the door.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;This little girl,&amp;rdquo; said the Scarecrow to the soldier,
        &amp;ldquo;wishes to cross the desert. How can she do so?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I cannot tell,&amp;rdquo; answered the soldier, &amp;ldquo;for nobody has ever
            crossed the desert, unless it is Oz himself.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Is there no one who can help me?&amp;rdquo; asked Dorothy earnestly.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Glinda might,&amp;rdquo; he suggested.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Who is Glinda?&amp;rdquo; inquired the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;The Witch of the South. She is the most powerful of all the
            Witches, and rules over the Quadlings. Besides, her castle stands
            on the edge of the desert, so she may know a way to cross it.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Glinda is a Good Witch, isn&amp;rsquo;t she?&amp;rdquo; asked the child.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;The Quadlings think she is good,&amp;rdquo; said the soldier, &amp;ldquo;and she
            is kind to everyone. I have heard that Glinda is a beautiful woman,
            who knows how to keep young in spite of the many years she has lived.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;How can I get to her castle?&amp;rdquo; asked Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;The road is straight to the South,&amp;rdquo; he answered, &amp;ldquo;but it is
            said to be full of dangers to travelers. There are wild beasts in
            the woods, and a race of queer men who do not like strangers to
            cross their country. For this reason none of the Quadlings ever
            come to the Emerald City.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The soldier then left them and the Scarecrow said:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;It seems, in spite of dangers, that the best thing Dorothy
            can do is to travel to the Land of the South and ask Glinda to
            help her. For, of course, if Dorothy stays here she will never
            get back to Kansas.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;You must have been thinking again,&amp;rdquo; remarked the Tin Woodman.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I have,&amp;rdquo; said the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I shall go with Dorothy,&amp;rdquo; declared the Lion, &amp;ldquo;for I am
            tired of your city and long for the woods and the country again.
            I am really a wild beast, you know. Besides, Dorothy will need
            someone to protect her.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That is true,&amp;rdquo; agreed the Woodman. &amp;ldquo;My axe may be of service
            to her; so I also will go with her to the Land of the South.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;When shall we start?&amp;rdquo; asked the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Are you going?&amp;rdquo; they asked, in surprise.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Certainly. If it wasn&amp;rsquo;t for Dorothy I should never have had brains.
            She lifted me from the pole in the cornfield and brought me to the
            Emerald City. So my good luck is all due to her, and I shall never
            leave her until she starts back to Kansas for good and all.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Thank you,&amp;rdquo; said Dorothy gratefully. &amp;ldquo;You are all very kind
            to me. But I should like to start as soon as possible.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We shall go tomorrow morning,&amp;rdquo; returned the Scarecrow. &amp;ldquo;So
            now let us all get ready, for it will be a long journey.&amp;rdquo;
        &lt;/p&gt;
        
        
        &lt;h2&gt;Attacked by the Fighting Trees&lt;/h2&gt;
        
        &lt;p&gt;The next morning Dorothy kissed the pretty green girl good&amp;#8208;bye,
            and they all shook hands with the soldier with the green whiskers,
            who had walked with them as far as the gate. When the Guardian of
            the Gate saw them again he wondered greatly that they could leave
            the beautiful City to get into new trouble. But he at once
            unlocked their spectacles, which he put back into the green box,
            and gave them many good wishes to carry with them.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;You are now our ruler,&amp;rdquo; he said to the Scarecrow;
        &amp;ldquo;so you must come back to us as soon as possible.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I certainly shall if I am able,&amp;rdquo; the Scarecrow replied;
        &amp;ldquo;but I must help Dorothy to get home, first.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;As Dorothy bade the good&amp;#8208;natured Guardian a last farewell she said:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I have been very kindly treated in your lovely City, and
            everyone has been good to me. I cannot tell you how grateful I am.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Don&amp;rsquo;t try, my dear,&amp;rdquo; he answered. &amp;ldquo;We should like to keep
            you with us, but if it is your wish to return to Kansas, I hope
            you will find a way.&amp;rdquo; He then opened the gate of the outer wall,
            and they walked forth and started upon their journey.&lt;/p&gt;
        &lt;p&gt;The sun shone brightly as our friends turned their faces
            toward the Land of the South. They were all in the best of spirits,
            and laughed and chatted together. Dorothy was once more filled with
            the hope of getting home, and the Scarecrow and the Tin Woodman were
            glad to be of use to her. As for the Lion, he sniffed the fresh air
            with delight and whisked his tail from side to side in pure joy at
            being in the country again, while Toto ran around them and chased
            the moths and butterflies, barking merrily all the time.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;City life does not agree with me at all,&amp;rdquo; remarked the Lion,
            as they walked along at a brisk pace. &amp;ldquo;I have lost much flesh
            since I lived there, and now I am anxious for a chance to show the
            other beasts how courageous I have grown.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;They now turned and took a last look at the Emerald City.
            All they could see was a mass of towers and steeples behind the
            green walls, and high up above everything the spires and dome
            of the Palace of Oz.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oz was not such a bad Wizard, after all,&amp;rdquo; said the Tin
            Woodman, as he felt his heart rattling around in his breast.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;He knew how to give me brains, and very good brains, too,&amp;rdquo;
            said the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;If Oz had taken a dose of the same courage he gave me,&amp;rdquo;
            added the Lion, &amp;ldquo;he would have been a brave man.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Dorothy said nothing. Oz had not kept the promise he made her,
            but he had done his best, so she forgave him. As he said, he was
            a good man, even if he was a bad Wizard.&lt;/p&gt;
        &lt;p&gt;The first day&amp;rsquo;s journey was through the green fields and
            bright flowers that stretched about the Emerald City on every side.
            They slept that night on the grass, with nothing but the stars
            over them; and they rested very well indeed.&lt;/p&gt;
        &lt;p&gt;In the morning they traveled on until they came to a thick wood.
            There was no way of going around it, for it seemed to extend to the
            right and left as far as they could see; and, besides, they did not
            dare change the direction of their journey for fear of getting lost.
            So they looked for the place where it would be easiest to get into
            the forest.&lt;/p&gt;
        &lt;p&gt;The Scarecrow, who was in the lead, finally discovered a big
            tree with such wide&amp;#8208;spreading branches that there was room for the
            party to pass underneath. So he walked forward to the tree, but
            just as he came under the first branches they bent down and twined
            around him, and the next minute he was raised from the ground and
            flung headlong among his fellow travelers.&lt;/p&gt;
        &lt;p&gt;This did not hurt the Scarecrow, but it surprised him, and he
            looked rather dizzy when Dorothy picked him up.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Here is another space between the trees,&amp;rdquo; called the Lion.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Let me try it first,&amp;rdquo; said the Scarecrow, &amp;ldquo;for it doesn&amp;rsquo;t hurt
            me to get thrown about.&amp;rdquo; He walked up to another tree, as he spoke,
            but its branches immediately seized him and tossed him back again.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;This is strange,&amp;rdquo; exclaimed Dorothy. &amp;ldquo;What shall we do?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;The trees seem to have made up their minds to fight us,
            and stop our journey,&amp;rdquo; remarked the Lion.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I believe I will try it myself,&amp;rdquo; said the Woodman, and
            shouldering his axe, he marched up to the first tree that had
            handled the Scarecrow so roughly. When a big branch bent down to
            seize him the Woodman chopped at it so fiercely that he cut it in two.
            At once the tree began shaking all its branches as if in pain, and the
            Tin Woodman passed safely under it.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Come on!&amp;rdquo; he shouted to the others. &amp;ldquo;Be quick!&amp;rdquo; They all
            ran forward and passed under the tree without injury, except Toto,
            who was caught by a small branch and shaken until he howled.
            But the Woodman promptly chopped off the branch and set the
            little dog free.&lt;/p&gt;
        &lt;p&gt;The other trees of the forest did nothing to keep them back,
            so they made up their minds that only the first row of trees could
            bend down their branches, and that probably these were the
            policemen of the forest, and given this wonderful power in order
            to keep strangers out of it.&lt;/p&gt;
        &lt;p&gt;The four travelers walked with ease through the trees until they
            came to the farther edge of the wood. Then, to their surprise, they
            found before them a high wall which seemed to be made of white china.
            It was smooth, like the surface of a dish, and higher than their heads.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What shall we do now?&amp;rdquo; asked Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I will make a ladder,&amp;rdquo; said the Tin Woodman, &amp;ldquo;for we certainly
            must climb over the wall.&amp;rdquo;
        &lt;/p&gt;
        
        
        &lt;h2&gt;The Dainty China Country&lt;/h2&gt;
        
        &lt;p&gt;While the Woodman was making a ladder from wood which he found
            in the forest Dorothy lay down and slept, for she was tired by the
            long walk. The Lion also curled himself up to sleep and Toto lay
            beside him.&lt;/p&gt;
        &lt;p&gt;The Scarecrow watched the Woodman while he worked, and said to him:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I cannot think why this wall is here, nor what it is made of.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Rest your brains and do not worry about the wall,&amp;rdquo; replied the Woodman.
        &amp;ldquo;When we have climbed over it, we shall know what is on the other side.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;After a time the ladder was finished. It looked clumsy, but
            the Tin Woodman was sure it was strong and would answer their purpose.
            The Scarecrow waked Dorothy and the Lion and Toto, and told them that
            the ladder was ready. The Scarecrow climbed up the ladder first, but
            he was so awkward that Dorothy had to follow close behind and keep him
            from falling off. When he got his head over the top of the wall the
            Scarecrow said, &amp;ldquo;Oh, my!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Go on,&amp;rdquo; exclaimed Dorothy.&lt;/p&gt;
        &lt;p&gt;So the Scarecrow climbed farther up and sat down on the top of
            the wall, and Dorothy put her head over and cried, &amp;ldquo;Oh, my!&amp;rdquo; just
            as the Scarecrow had done.&lt;/p&gt;
        &lt;p&gt;Then Toto came up, and immediately began to bark, but Dorothy
            made him be still.&lt;/p&gt;
        &lt;p&gt;The Lion climbed the ladder next, and the Tin Woodman came
            last; but both of them cried, &amp;ldquo;Oh, my!&amp;rdquo; as soon as they looked
            over the wall. When they were all sitting in a row on the top
            of the wall, they looked down and saw a strange sight.&lt;/p&gt;
        &lt;p&gt;Before them was a great stretch of country having a floor as
            smooth and shining and white as the bottom of a big platter.
            Scattered around were many houses made entirely of china and
            painted in the brightest colors. These houses were quite small,
            the biggest of them reaching only as high as Dorothy&amp;rsquo;s waist.
            There were also pretty little barns, with china fences around them;
            and many cows and sheep and horses and pigs and chickens, all made
            of china, were standing about in groups.&lt;/p&gt;
        &lt;p&gt;But the strangest of all were the people who lived in this
            queer country. There were milkmaids and shepherdesses, with
            brightly colored bodices and golden spots all over their gowns;
            and princesses with most gorgeous frocks of silver and gold and
            purple; and shepherds dressed in knee breeches with pink and
            yellow and blue stripes down them, and golden buckles on their
            shoes; and princes with jeweled crowns upon their heads, wearing
            ermine robes and satin doublets; and funny clowns in ruffled gowns,
            with round red spots upon their cheeks and tall, pointed caps.
            And, strangest of all, these people were all made of china, even to
            their clothes, and were so small that the tallest of them was no
            higher than Dorothy&amp;rsquo;s knee.&lt;/p&gt;
        &lt;p&gt;No one did so much as look at the travelers at first, except
            one little purple china dog with an extra&amp;#8208;large head, which came
            to the wall and barked at them in a tiny voice, afterwards running
            away again.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;How shall we get down?&amp;rdquo; asked Dorothy.&lt;/p&gt;
        &lt;p&gt;They found the ladder so heavy they could not pull it up, so
            the Scarecrow fell off the wall and the others jumped down upon him
            so that the hard floor would not hurt their feet. Of course they
            took pains not to light on his head and get the pins in their feet.
            When all were safely down they picked up the Scarecrow, whose body
            was quite flattened out, and patted his straw into shape again.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We must cross this strange place in order to get to the other side,&amp;rdquo;
            said Dorothy, &amp;ldquo;for it would be unwise for us to go any other way except
            due South.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;They began walking through the country of the china people,
            and the first thing they came to was a china milkmaid milking a
            china cow. As they drew near, the cow suddenly gave a kick and
            kicked over the stool, the pail, and even the milkmaid herself,
            and all fell on the china ground with a great clatter.&lt;/p&gt;
        &lt;p&gt;Dorothy was shocked to see that the cow had broken her leg
            off, and that the pail was lying in several small pieces, while
            the poor milkmaid had a nick in her left elbow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;There!&amp;rdquo; cried the milkmaid angrily. &amp;ldquo;See what you have done!
            My cow has broken her leg, and I must take her to the mender&amp;rsquo;s
            shop and have it glued on again. What do you mean by coming here
            and frightening my cow?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I&amp;rsquo;m very sorry,&amp;rdquo; returned Dorothy. &amp;ldquo;Please forgive us.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;But the pretty milkmaid was much too vexed to make any answer.
            She picked up the leg sulkily and led her cow away, the poor
            animal limping on three legs. As she left them the milkmaid cast
            many reproachful glances over her shoulder at the clumsy strangers,
            holding her nicked elbow close to her side.&lt;/p&gt;
        &lt;p&gt;Dorothy was quite grieved at this mishap.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We must be very careful here,&amp;rdquo; said the kind&amp;#8208;hearted Woodman,
        &amp;ldquo;or we may hurt these pretty little people so they will never get over it.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;A little farther on Dorothy met a most beautifully dressed
            young Princess, who stopped short as she saw the strangers and
            started to run away.&lt;/p&gt;
        &lt;p&gt;Dorothy wanted to see more of the Princess, so she ran after her.
            But the china girl cried out:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Don&amp;rsquo;t chase me! Don&amp;rsquo;t chase me!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;She had such a frightened little voice that Dorothy stopped
            and said, &amp;ldquo;Why not?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Because,&amp;rdquo; answered the Princess, also stopping, a safe
            distance away, &amp;ldquo;if I run I may fall down and break myself.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;But could you not be mended?&amp;rdquo; asked the girl.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, yes; but one is never so pretty after being mended, you know,&amp;rdquo;
            replied the Princess.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I suppose not,&amp;rdquo; said Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Now there is Mr. Joker, one of our clowns,&amp;rdquo; continued the
            china lady, &amp;ldquo;who is always trying to stand upon his head. He has
            broken himself so often that he is mended in a hundred places, and
            doesn&amp;rsquo;t look at all pretty. Here he comes now, so you can see for
            yourself.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Indeed, a jolly little clown came walking toward them, and
            Dorothy could see that in spite of his pretty clothes of red and
            yellow and green he was completely covered with cracks, running
            every which way and showing plainly that he had been mended in
            many places.&lt;/p&gt;
        &lt;p&gt;The Clown put his hands in his pockets, and after puffing out
            his cheeks and nodding his head at them saucily, he said:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;My lady fair,&lt;/p&gt;
        &lt;p&gt;Why do you stare&lt;/p&gt;
        &lt;p&gt;At poor old Mr. Joker?&lt;/p&gt;
        &lt;p&gt;You&amp;rsquo;re quite as stiff&lt;/p&gt;
        &lt;p&gt;And prim as if&lt;/p&gt;
        &lt;p&gt;You&amp;rsquo;d eaten up a poker!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Be quiet, sir!&amp;rdquo; said the Princess. &amp;ldquo;Can&amp;rsquo;t you see these are
            strangers, and should be treated with respect?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Well, that&amp;rsquo;s respect, I expect,&amp;rdquo; declared the Clown,
            and immediately stood upon his head.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Don&amp;rsquo;t mind Mr. Joker,&amp;rdquo; said the Princess to Dorothy. &amp;ldquo;He is
            considerably cracked in his head, and that makes him foolish.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Oh, I don&amp;rsquo;t mind him a bit,&amp;rdquo; said Dorothy. &amp;ldquo;But you are so
            beautiful,&amp;rdquo; she continued, &amp;ldquo;that I am sure I could love you dearly.
            Won&amp;rsquo;t you let me carry you back to Kansas, and stand you on
            Aunt Em&amp;rsquo;s mantel? I could carry you in my basket.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That would make me very unhappy,&amp;rdquo; answered the china Princess.
        &amp;ldquo;You see, here in our country we live contentedly, and can talk and
            move around as we please. But whenever any of us are taken away our
            joints at once stiffen, and we can only stand straight and look pretty.
            Of course that is all that is expected of us when we are on mantels and
            cabinets and drawing&amp;#8208;room tables, but our lives are much pleasanter
            here in our own country.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I would not make you unhappy for all the world!&amp;rdquo; exclaimed Dorothy.
        &amp;ldquo;So I&amp;rsquo;ll just say good&amp;#8208;bye.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Good&amp;#8208;bye,&amp;rdquo; replied the Princess.&lt;/p&gt;
        &lt;p&gt;They walked carefully through the china country. The little
            animals and all the people scampered out of their way, fearing the
            strangers would break them, and after an hour or so the travelers
            reached the other side of the country and came to another china wall.&lt;/p&gt;
        &lt;p&gt;It was not so high as the first, however, and by standing upon
            the Lion&amp;rsquo;s back they all managed to scramble to the top. Then the
            Lion gathered his legs under him and jumped on the wall; but just
            as he jumped, he upset a china church with his tail and smashed it
            all to pieces.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That was too bad,&amp;rdquo; said Dorothy, &amp;ldquo;but really I think we were
            lucky in not doing these little people more harm than breaking a
            cow&amp;rsquo;s leg and a church. They are all so brittle!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;They are, indeed,&amp;rdquo; said the Scarecrow, &amp;ldquo;and I am thankful I
            am made of straw and cannot be easily damaged. There are worse
            things in the world than being a Scarecrow.&amp;rdquo;
        &lt;/p&gt;
        
        
        &lt;h2&gt;The Lion Becomes the King of Beasts&lt;/h2&gt;
        
        &lt;p&gt;After climbing down from the china wall the travelers found
            themselves in a disagreeable country, full of bogs and marshes and
            covered with tall, rank grass. It was difficult to walk without
            falling into muddy holes, for the grass was so thick that it hid
            them from sight. However, by carefully picking their way, they
            got safely along until they reached solid ground. But here the
            country seemed wilder than ever, and after a long and tiresome
            walk through the underbrush they entered another forest, where the
            trees were bigger and older than any they had ever seen.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;This forest is perfectly delightful,&amp;rdquo; declared the Lion, looking
            around him with joy. &amp;ldquo;Never have I seen a more beautiful place.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;It seems gloomy,&amp;rdquo; said the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Not a bit of it,&amp;rdquo; answered the Lion. &amp;ldquo;I should like to live
            here all my life. See how soft the dried leaves are under your
            feet and how rich and green the moss is that clings to these old
            trees. Surely no wild beast could wish a pleasanter home.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Perhaps there are wild beasts in the forest now,&amp;rdquo; said Dorothy.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I suppose there are,&amp;rdquo; returned the Lion, &amp;ldquo;but I do not see
            any of them about.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;They walked through the forest until it became too dark to go
            any farther. Dorothy and Toto and the Lion lay down to sleep,
            while the Woodman and the Scarecrow kept watch over them as usual.&lt;/p&gt;
        &lt;p&gt;When morning came, they started again. Before they had gone
            far they heard a low rumble, as of the growling of many wild animals.
            Toto whimpered a little, but none of the others was frightened,
            and they kept along the well&amp;#8208;trodden path until they came to
            an opening in the wood, in which were gathered hundreds of
            beasts of every variety. There were tigers and elephants and
            bears and wolves and foxes and all the others in the natural
            history, and for a moment Dorothy was afraid. But the Lion
            explained that the animals were holding a meeting, and he judged
            by their snarling and growling that they were in great trouble.&lt;/p&gt;
        &lt;p&gt;As he spoke several of the beasts caught sight of him, and at
            once the great assemblage hushed as if by magic. The biggest of
            the tigers came up to the Lion and bowed, saying:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Welcome, O King of Beasts! You have come in good time to
            fight our enemy and bring peace to all the animals of the forest
            once more.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What is your trouble?&amp;rdquo; asked the Lion quietly.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We are all threatened,&amp;rdquo; answered the tiger, &amp;ldquo;by a fierce
            enemy which has lately come into this forest. It is a most
            tremendous monster, like a great spider, with a body as big as an
            elephant and legs as long as a tree trunk. It has eight of these
            long legs, and as the monster crawls through the forest he seizes
            an animal with a leg and drags it to his mouth, where he eats it
            as a spider does a fly. Not one of us is safe while this fierce
            creature is alive, and we had called a meeting to decide how to
            take care of ourselves when you came among us.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The Lion thought for a moment.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Are there any other lions in this forest?&amp;rdquo; he asked.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;No; there were some, but the monster has eaten them all. And,
            besides, there were none of them nearly so large and brave as you.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;If I put an end to your enemy, will you bow down to me and
            obey me as King of the Forest?&amp;rdquo; inquired the Lion.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;We will do that gladly,&amp;rdquo; returned the tiger; and all the
            other beasts roared with a mighty roar: &amp;ldquo;We will!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Where is this great spider of yours now?&amp;rdquo; asked the Lion.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Yonder, among the oak trees,&amp;rdquo; said the tiger, pointing with
            his forefoot.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Take good care of these friends of mine,&amp;rdquo; said the Lion, &amp;ldquo;and
            I will go at once to fight the monster.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;He bade his comrades good&amp;#8208;bye and marched proudly away to do
            battle with the enemy.&lt;/p&gt;
        &lt;p&gt;The great spider was lying asleep when the Lion found him,
            and it looked so ugly that its foe turned up his nose in disgust.
            Its legs were quite as long as the tiger had said, and its body
            covered with coarse black hair. It had a great mouth, with a row
            of sharp teeth a foot long; but its head was joined to the pudgy
            body by a neck as slender as a wasp&amp;rsquo;s waist. This gave the Lion a
            hint of the best way to attack the creature, and as he knew it was
            easier to fight it asleep than awake, he gave a great spring and
            landed directly upon the monster&amp;rsquo;s back. Then, with one blow of
            his heavy paw, all armed with sharp claws, he knocked the spider&amp;rsquo;s
            head from its body. Jumping down, he watched it until the long
            legs stopped wiggling, when he knew it was quite dead.&lt;/p&gt;
        &lt;p&gt;The Lion went back to the opening where the beasts of the
            forest were waiting for him and said proudly:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;You need fear your enemy no longer.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Then the beasts bowed down to the Lion as their King, and he
            promised to come back and rule over them as soon as Dorothy was
            safely on her way to Kansas.
        &lt;/p&gt;
        
        
        &lt;h2&gt;The Country of the Quadlings&lt;/h2&gt;
        
        &lt;p&gt;The four travelers passed through the rest of the forest in
            safety, and when they came out from its gloom saw before them a
            steep hill, covered from top to bottom with great pieces of rock.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;That will be a hard climb,&amp;rdquo; said the Scarecrow, &amp;ldquo;but we must
            get over the hill, nevertheless.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;So he led the way and the others followed. They had nearly
            reached the first rock when they heard a rough voice cry out,
        &amp;ldquo;Keep back!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Who are you?&amp;rdquo; asked the Scarecrow.&lt;/p&gt;
        &lt;p&gt;Then a head showed itself over the rock and the same voice said,
        &amp;ldquo;This hill belongs to us, and we don&amp;rsquo;t allow anyone to cross it.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;But we must cross it,&amp;rdquo; said the Scarecrow. &amp;ldquo;We&amp;rsquo;re going to
            the country of the Quadlings.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;But you shall not!&amp;rdquo; replied the voice, and there stepped from
            behind the rock the strangest man the travelers had ever seen.&lt;/p&gt;
        &lt;p&gt;He was quite short and stout and had a big head, which was
            flat at the top and supported by a thick neck full of wrinkles.
            But he had no arms at all, and, seeing this, the Scarecrow did not
            fear that so helpless a creature could prevent them from climbing
            the hill. So he said, &amp;ldquo;I&amp;rsquo;m sorry not to do as you wish, but we
            must pass over your hill whether you like it or not,&amp;rdquo; and he
            walked boldly forward.&lt;/p&gt;
        &lt;p&gt;As quick as lightning the man&amp;rsquo;s head shot forward and his neck
            stretched out until the top of the head, where it was flat, struck
            the Scarecrow in the middle and sent him tumbling, over and over,
            down the hill. Almost as quickly as it came the head went back to
            the body, and the man laughed harshly as he said, &amp;ldquo;It isn&amp;rsquo;t as
            easy as you think!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;A chorus of boisterous laughter came from the other rocks, and
            Dorothy saw hundreds of the armless Hammer&amp;#8208;Heads upon the
            hillside, one behind every rock.&lt;/p&gt;
        &lt;p&gt;The Lion became quite angry at the laughter caused by the
            Scarecrow&amp;rsquo;s mishap, and giving a loud roar that echoed like thunder,
            he dashed up the hill.&lt;/p&gt;
        &lt;p&gt;Again a head shot swiftly out, and the great Lion went rolling
            down the hill as if he had been struck by a cannon ball.&lt;/p&gt;
        &lt;p&gt;Dorothy ran down and helped the Scarecrow to his feet, and the
            Lion came up to her, feeling rather bruised and sore, and said,
        &amp;ldquo;It is useless to fight people with shooting heads; no one can
            withstand them.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What can we do, then?&amp;rdquo; she asked.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Call the Winged Monkeys,&amp;rdquo; suggested the Tin Woodman. &amp;ldquo;You
            have still the right to command them once more.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Very well,&amp;rdquo; she answered, and putting on the Golden Cap she
            uttered the magic words. The Monkeys were as prompt as ever, and
            in a few moments the entire band stood before her.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What are your commands?&amp;rdquo; inquired the King of the Monkeys,
            bowing low.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Carry us over the hill to the country of the Quadlings,&amp;rdquo;
            answered the girl.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;It shall be done,&amp;rdquo; said the King, and at once the Winged Monkeys
            caught the four travelers and Toto up in their arms and flew away with them.
            As they passed over the hill the Hammer&amp;#8208;Heads yelled with vexation, and shot
            their heads high in the air, but they could not reach the Winged Monkeys,
            which carried Dorothy and her comrades safely over the hill and set them
            down in the beautiful country of the Quadlings.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;This is the last time you can summon us,&amp;rdquo; said the leader to
            Dorothy; &amp;ldquo;so good&amp;#8208;bye and good luck to you.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Good&amp;#8208;bye, and thank you very much,&amp;rdquo; returned the girl; and
            the Monkeys rose into the air and were out of sight in a twinkling.&lt;/p&gt;
        &lt;p&gt;The country of the Quadlings seemed rich and happy. There was
            field upon field of ripening grain, with well&amp;#8208;paved roads running
            between, and pretty rippling brooks with strong bridges across them.
            The fences and houses and bridges were all painted bright red,
            just as they had been painted yellow in the country of the Winkies
            and blue in the country of the Munchkins. The Quadlings themselves,
            who were short and fat and looked chubby and good&amp;#8208;natured, were
            dressed all in red, which showed bright against the green grass
            and the yellowing grain.&lt;/p&gt;
        &lt;p&gt;The Monkeys had set them down near a farmhouse, and the four
            travelers walked up to it and knocked at the door. It was opened
            by the farmer&amp;rsquo;s wife, and when Dorothy asked for something to eat
            the woman gave them all a good dinner, with three kinds of cake
            and four kinds of cookies, and a bowl of milk for Toto.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;How far is it to the Castle of Glinda?&amp;rdquo; asked the child.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;It is not a great way,&amp;rdquo; answered the farmer&amp;rsquo;s wife.
        &amp;ldquo;Take the road to the South and you will soon reach it.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Thanking the good woman, they started afresh and walked by the
            fields and across the pretty bridges until they saw before them a
            very beautiful Castle. Before the gates were three young girls,
            dressed in handsome red uniforms trimmed with gold braid; and as
            Dorothy approached, one of them said to her:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Why have you come to the South Country?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;To see the Good Witch who rules here,&amp;rdquo; she answered.
        &amp;ldquo;Will you take me to her?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Let me have your name, and I will ask Glinda if she will
            receive you.&amp;rdquo; They told who they were, and the girl soldier went
            into the Castle. After a few moments she came back to say that
            Dorothy and the others were to be admitted at once.
        &lt;/p&gt;
        
        
        &lt;h2&gt;Glinda The Good Witch Grants Dorothy&amp;rsquo;s Wish&lt;/h2&gt;
        
        &lt;p&gt;Before they went to see Glinda, however, they were taken to a
            room of the Castle, where Dorothy washed her face and combed her
            hair, and the Lion shook the dust out of his mane, and the
            Scarecrow patted himself into his best shape, and the Woodman
            polished his tin and oiled his joints.&lt;/p&gt;
        &lt;p&gt;When they were all quite presentable they followed the soldier
            girl into a big room where the Witch Glinda sat upon a throne of rubies.&lt;/p&gt;
        &lt;p&gt;She was both beautiful and young to their eyes. Her hair was
            a rich red in color and fell in flowing ringlets over her shoulders.
            Her dress was pure white but her eyes were blue, and they looked
            kindly upon the little girl.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;What can I do for you, my child?&amp;rdquo; she asked.&lt;/p&gt;
        &lt;p&gt;Dorothy told the Witch all her story: how the cyclone had
            brought her to the Land of Oz, how she had found her companions,
            and of the wonderful adventures they had met with.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;My greatest wish now,&amp;rdquo; she added, &amp;ldquo;is to get back to Kansas,
            for Aunt Em will surely think something dreadful has happened to me,
            and that will make her put on mourning; and unless the crops are better
            this year than they were last, I am sure Uncle Henry cannot afford it.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Glinda leaned forward and kissed the sweet, upturned face of
            the loving little girl.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Bless your dear heart,&amp;rdquo; she said, &amp;ldquo;I am sure I can tell you
            of a way to get back to Kansas.&amp;rdquo; Then she added, &amp;ldquo;But, if I do,
            you must give me the Golden Cap.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Willingly!&amp;rdquo; exclaimed Dorothy; &amp;ldquo;indeed, it is of no use to
            me now, and when you have it you can command the Winged Monkeys
            three times.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And I think I shall need their service just those three times,&amp;rdquo;
            answered Glinda, smiling.&lt;/p&gt;
        &lt;p&gt;Dorothy then gave her the Golden Cap, and the Witch said to
            the Scarecrow, &amp;ldquo;What will you do when Dorothy has left us?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;I will return to the Emerald City,&amp;rdquo; he replied, &amp;ldquo;for Oz has
            made me its ruler and the people like me. The only thing that
            worries me is how to cross the hill of the Hammer&amp;#8208;Heads.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;By means of the Golden Cap I shall command the Winged Monkeys
            to carry you to the gates of the Emerald City,&amp;rdquo; said Glinda, &amp;ldquo;for
            it would be a shame to deprive the people of so wonderful a ruler.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Am I really wonderful?&amp;rdquo; asked the Scarecrow.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;You are unusual,&amp;rdquo; replied Glinda.&lt;/p&gt;
        &lt;p&gt;Turning to the Tin Woodman, she asked, &amp;ldquo;What will become of
            you when Dorothy leaves this country?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;He leaned on his axe and thought a moment. Then he said,
        &amp;ldquo;The Winkies were very kind to me, and wanted me to rule over them
            after the Wicked Witch died. I am fond of the Winkies, and if I
            could get back again to the Country of the West, I should like
            nothing better than to rule over them forever.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;My second command to the Winged Monkeys,&amp;rdquo; said Glinda &amp;ldquo;will
            be that they carry you safely to the land of the Winkies. Your
            brain may not be so large to look at as those of the Scarecrow,
            but you are really brighter than he is&amp;mdash;when you are well
            polished&amp;mdash;and I am sure you will rule the Winkies wisely and well.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Then the Witch looked at the big, shaggy Lion and asked, &amp;ldquo;When
            Dorothy has returned to her own home, what will become of you?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Over the hill of the Hammer&amp;#8208;Heads,&amp;rdquo; he answered, &amp;ldquo;lies a
            grand old forest, and all the beasts that live there have made me
            their King. If I could only get back to this forest, I would pass
            my life very happily there.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;My third command to the Winged Monkeys,&amp;rdquo; said Glinda, &amp;ldquo;shall
            be to carry you to your forest. Then, having used up the powers
            of the Golden Cap, I shall give it to the King of the Monkeys,
            that he and his band may thereafter be free for evermore.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;The Scarecrow and the Tin Woodman and the Lion now thanked the
            Good Witch earnestly for her kindness; and Dorothy exclaimed:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;You are certainly as good as you are beautiful! But you have
            not yet told me how to get back to Kansas.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Your Silver Shoes will carry you over the desert,&amp;rdquo; replied Glinda.
        &amp;ldquo;If you had known their power you could have gone back to your Aunt Em
            the very first day you came to this country.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;But then I should not have had my wonderful brains!&amp;rdquo; cried the Scarecrow.
        &amp;ldquo;I might have passed my whole life in the farmer&amp;rsquo;s cornfield.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And I should not have had my lovely heart,&amp;rdquo; said the Tin Woodman.
        &amp;ldquo;I might have stood and rusted in the forest till the end of the world.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;And I should have lived a coward forever,&amp;rdquo; declared the Lion,
        &amp;ldquo;and no beast in all the forest would have had a good word to say to me.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;This is all true,&amp;rdquo; said Dorothy, &amp;ldquo;and I am glad I was of use
            to these good friends. But now that each of them has had what he
            most desired, and each is happy in having a kingdom to rule besides,
            I think I should like to go back to Kansas.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;The Silver Shoes,&amp;rdquo; said the Good Witch, &amp;ldquo;have wonderful powers.
            And one of the most curious things about them is that they can carry
            you to any place in the world in three steps, and each step will be
            made in the wink of an eye. All you have to do is to knock the heels
            together three times and command the shoes to carry you wherever you
            wish to go.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;If that is so,&amp;rdquo; said the child joyfully, &amp;ldquo;I will ask them to
            carry me back to Kansas at once.&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;She threw her arms around the Lion&amp;rsquo;s neck and kissed him,
            patting his big head tenderly. Then she kissed the Tin Woodman,
            who was weeping in a way most dangerous to his joints. But she
            hugged the soft, stuffed body of the Scarecrow in her arms instead
            of kissing his painted face, and found she was crying herself at
            this sorrowful parting from her loving comrades.&lt;/p&gt;
        &lt;p&gt;Glinda the Good stepped down from her ruby throne to give the
            little girl a good&amp;#8208;bye kiss, and Dorothy thanked her for all the
            kindness she had shown to her friends and herself.&lt;/p&gt;
        &lt;p&gt;Dorothy now took Toto up solemnly in her arms, and having said
            one last good&amp;#8208;bye she clapped the heels of her shoes together three
            times, saying:&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Take me home to Aunt Em!&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;Instantly she was whirling through the air, so swiftly that
            all she could see or feel was the wind whistling past her ears.&lt;/p&gt;
        &lt;p&gt;The Silver Shoes took but three steps, and then she stopped so
            suddenly that she rolled over upon the grass several times before
            she knew where she was.&lt;/p&gt;
        &lt;p&gt;At length, however, she sat up and looked about her.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;Good gracious!&amp;rdquo; she cried.&lt;/p&gt;
        &lt;p&gt;For she was sitting on the broad Kansas prairie, and just
            before her was the new farmhouse Uncle Henry built after the
            cyclone had carried away the old one. Uncle Henry was milking the
            cows in the barnyard, and Toto had jumped out of her arms and was
            running toward the barn, barking furiously.&lt;/p&gt;
        &lt;p&gt;Dorothy stood up and found she was in her stocking&amp;#8208;feet.
            For the Silver Shoes had fallen off in her flight through the air,
            and were lost forever in the desert.
        &lt;/p&gt;
        
        
        &lt;h2&gt;Home Again&lt;/h2&gt;
        
        &lt;p&gt;Aunt Em had just come out of the house to water the cabbages
            when she looked up and saw Dorothy running toward her.&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;My darling child!&amp;rdquo; she cried, folding the little girl in her
            arms and covering her face with kisses. &amp;ldquo;Where in the world did
            you come from?&amp;rdquo;&lt;/p&gt;
        &lt;p&gt;&amp;ldquo;From the Land of Oz,&amp;rdquo; said Dorothy gravely. &amp;ldquo;And here is
            Toto, too. And oh, Aunt Em! I&amp;rsquo;m so glad to be at home again!&amp;rdquo;
        &lt;/p&gt;
        
        &lt;p class=&quot;acknowledgements title&quot;&gt;Acknowledgements:&lt;/p&gt;
        &lt;p class=&quot;acknowledgements&quot;&gt;The novel &quot;The Wonderful Wizard of Oz&quot; (1900)
                              &lt;br /&gt;by L. Frank Baum (1856-1919)
                              &lt;br /&gt;in the public domain since 1956.&lt;/p&gt;
        &lt;p class=&quot;acknowledgements&quot;&gt;Blank page backgrounds based on
                              &lt;br /&gt;&quot;Black floral ornaments&quot;
                              &lt;br /&gt;designed by Freepik: 
                              &lt;br /&gt;&lt;a href=&quot;http://www.freepik.com/free-vector/black-floral-ornaments_719300.htm&quot;&gt;
                                    http://www.freepik.com/free-vector/black-floral-ornaments_719300.htm&lt;/a&gt;&lt;/p&gt;
        
    &lt;/body&gt;
&lt;/html&gt;

        </code>
    </pre>
</details>

### Output PDF

| mPDF | typeset.sh | PDFreactor |
|---------|---------|---------|
| ![mPDF Preview](mpdf__html_PDFreactor_Examples_novel_wizardOfOzXSLT.html.png) | ![typeset Preview](typeset__html_PDFreactor_Examples_novel_wizardOfOzXSLT.html.png) | ![PDFreactor Preview](pdfreactor__html_PDFreactor_Examples_novel_wizardOfOzXSLT.html.png) |
| [📕 mPDF Output](mpdf__html_PDFreactor_Examples_novel_wizardOfOzXSLT.html.pdf) | [📕 typeset Output](typeset__html_PDFreactor_Examples_novel_wizardOfOzXSLT.html.pdf) | [📕 PDFreactor Output](pdfreactor__html_PDFreactor_Examples_novel_wizardOfOzXSLT.html.pdf) |


