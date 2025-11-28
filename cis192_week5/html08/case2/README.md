# t8-case-2
<h2>Summary</h2>
<p><em>Pixal Arts and Entertainment</em> - Heather Neidell manages the website for Pixal Arts and Entertainment, a company specializing in games and entertainment apps. She has asked you to work on the initial page for the company&rsquo;s new game, Frustrated Fox. To make the page come alive, she wants you to enhance the page with animation using sprites from several characters in the game. A preview of the page you will create is shown in <em>Figure 8&ndash;65</em>.</p>
<p>&nbsp;</p>
<figure>
    <a class="markdown-image-link" title="Open image in a new tab" href="https://cdn.filestackcontent.com/uhEnn7lR5OSXfSiE5N5g" target="_blank" rel="noopener">
        <img src="https://cdn.filestackcontent.com/uhEnn7lR5OSXfSiE5N5g" alt="A homepage preview of &ldquo;Frustrated Fox&rdquo; website. The page displays the animation of a fox jumping towards a tree followed by a description about the animation.  " />
    </a>
</figure>
<p>&nbsp;</p>
<p><sup><em>Figure 8-65</em></sup></p>
<h2>Document Setup</h2>
<p>Open the <em>paa_game.html</em> and <em>paa_animate.css</em> files and enter your <strong>name</strong>and the <strong>date</strong> in the comment section of each file. Next, go to the <em>paa_game.html</em> file and add a <code>link</code> to the <em>paa_animate.css</em>style sheet file to the document <code>head</code>.</p>
<p>Scroll down to the <code>gameBox</code> <code>div</code>element. Within this element, insert three <code>div</code> elements with the ids <code>butterfly</code>, <code>bat</code>, and <code>fox</code> and belonging to the <code>sprite</code> class. These <code>div</code> elements will contain animated backgrounds showing three characters from the game.</p>
<h2>Transition Effects</h2>
<p>Open the <em>paa_animate.css</em> file and within the "Transition Effects" section, insert a style rule for the <code>nav#gameLinks a</code>selector that:</p>
<ol>
    <li>places the links using relative positioning,</li>
    <li>sets the font color to <strong>white</strong>, and</li>
    <li>transitions the font color over a <strong>0.5&nbsp;</strong>second interval.</li>
</ol>
<p>Insert a style rule for the <code>nav#gameLinks a:hover</code> selector that sets the font color to <strong>rgb(255, 194, 99)</strong>.</p>
<h2>Create the <code>gameLinks</code>Transition Effects</h2>
<p>Heather wants a transition effect applied to the links in the <code>gameLinks</code> list in which a gradient-colored bar gradually expands under each link during the hover event. To create this effect, you will use the <code>::after</code> pseudo-element and the content property to insert the bar. Create a style rule for the <code>nav#gameLinks a::after</code> selector that:</p>
<ol>
    <li>places an empty text string as the value of the content property,</li>
    <li>places the content with absolute positioning with a top value of <strong>100%</strong>and a left value of <strong>0</strong> pixels,</li>
    <li>sets the <code>width</code> to <strong>0%</strong> and the <code>height</code> to <strong>8</strong> pixels,</li>
    <li>changes the background to a linear gradient that moves to right from the color value <strong>rgb(237, 243, 71)</strong> to <strong>rgb(188, 74, 0)</strong>,</li>
    <li>sets the border radius to <strong>4</strong> pixels, and</li>
    <li>hides the bar by setting the opacity to <strong>0</strong>.</li>
</ol>
<p>When the links are hovered over, change the appearance of the bar by adding a style rule for the <code>nav#gameLinks a:hover::after</code>selector that changes the opacity to <strong>1</strong> and the <code>width</code> to <strong>100%</strong>.</p>
<p>Return to the style rule for the <code>nav#gameLinks a::after</code> selector and add a transition style that applies the opacity and width changes over a <strong>0.5</strong>second interval.</p>
<p>To create animated cartoons, Heather has stored frames of the images in the <em>paa_bat.png</em>, <em>paa_bfly.png</em>, and <em>paa_fox.png</em>image files. View these files to see the different frames to be displayed in the animation.</p>
<h2>Sprite Styles</h2>
<p>Return to the <em>paa_animate.css</em> file and, within the "Sprite Styles" section, create a style rule that displays all <code>div</code> elements of the <code>sprite</code> class with absolute positioning.</p>
<p>For the <code>div</code> element with the ID <code>bat</code>, create a style rule that:</p>
<ol>
    <li>sets the <code>width</code> and <code>height</code> to <strong>40</strong>pixels by <strong>50</strong> pixels,</li>
    <li>sets the top and left coordinates to <strong>100</strong>pixels and <strong>&ndash;50</strong> pixels, and</li>
    <li>displays the <em>paa_bat.png</em> as the background image placed at the left center of the background with no tiling and sized to cover the background.</li>
</ol>
<p>Create a similar style rule for the <code>div</code>element with the ID <code>butterfly</code>, setting the <code>width</code> and <code>height</code> at <strong>35</strong> pixels, the top-left coordinates at <strong>60</strong> pixels and <strong>&ndash;50</strong>pixels, and using the <em>paa_bfly.png</em> as the background image. Create another style rule for the <code>div</code> element with the ID <code>fox</code>, setting the <code>width</code> and <code>height</code> at <strong>280</strong>and <strong>260</strong> pixels, the bottom and right coordinates at <strong>10</strong> pixels, and the <em>paa_fox.png</em> file as the background image.</p>
<blockquote class="info">
    <p>The background image in all aminations should place the image at the left center with no tiling and sized to cover the background.</p>
</blockquote>
<p>Sprites are animated by moving the background image file across the background of the object. Go to the Animation Styles section and create an animation named <code>playSprite</code> that sets the background image position to right center at <strong>100%</strong> time.</p>
<h2>Create the Flutter Animation</h2>
<p>Heather wants the bat and butterfly to flutter as they move across the animation box. Create an animation named <code>flyRight</code> with the following key frames:</p>
<ol>
    <li>at <strong>25%</strong> time, set the top coordinate to <strong>150</strong> pixels;</li>
    <li>at <strong>50%</strong> time, set the top coordinate to <strong>55</strong> pixels;</li>
    <li>at <strong>65%</strong> time, set the top coordinate to <strong>120</strong> pixels;</li>
    <li>at <strong>90%</strong> time, set the top coordinate to <strong>50</strong> pixels; and</li>
    <li>at <strong>100%</strong> time, set the top and left coordinates to <strong>80</strong> pixels and <strong>100%</strong>.</li>
</ol>
<h2>Apply the <code>playSprite</code>Animations</h2>
<p>Sprites achieve the animation effect by changing the background image in <code>n &ndash; 1</code>discrete steps, where <code>n</code> is the number of frames in the sprite. Apply the <code>playSprite</code> animation to the <code>fox</code> <code>div</code>element after a <strong>4</strong> second delay over a time interval of <strong>3.5</strong> seconds and a steps value of <strong>27</strong>. Set the animation to loop infinitely.</p>
<p>Apply the <code>playSprite</code> animation to the <code>bat</code> <code>div</code> element over a <strong>2</strong> second interval with <strong>39</strong> steps. Apply the <code>flyRight</code> animation over an <strong>8</strong> second interval with linear timing. Set both animations to loop infinitely.</p>
<p>Apply the <code>playSprite</code> animation to the <code>butterfly</code> <code>div</code> element after a <strong>3</strong>second delay, with a playing time of <strong>1</strong>second spaced out in <strong>33</strong> steps. Apply the <code>flyRight</code> animation over a <strong>6</strong> second interval. Make the butterfly appear to hover by applying a <strong>Cubic B&eacute;zier</strong> curve to the <code>flyRight</code> timing with the function <code>cubic-bezier(0,1,0.73,0)</code>. Set both animations to loop infinitely.</p>
<p>Open <em>paa_game.html</em> file in the browser preview and hover your mouse pointer over the four links below the <em>Frustrated Fox</em> logo and verify that a gradient-filled bar grows beneath the links in response to the hover event. Verify that the animation box shows an animated bat and then a butterfly moving across the sky and that, after a short delay, an animated fox jumps up toward the bat and butterfly trying to catch them.</p>
