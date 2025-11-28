# t8-case-1
<h2>Summary</h2>
<p><strong>Rhetoric in the United States</strong> - Professor Annie Cho teaches rhetoric and history at White Sands College. She has asked for your help in designing a companion website for her course. The page you will work on contains portions of the inaugural address delivered by President John F. Kennedy in 1961. She has obtained a video excerpt of the speech that she wants you to augment with captions. A preview of the page you will create is shown in <em>Figure 8&ndash;64</em>.</p>
<p>&nbsp;</p>
<figure>
    <a class="markdown-image-link" title="Open image in a new tab" href="https://cdn.filestackcontent.com/rf973cGSW2KvmFm2T8h1" target="_blank" rel="noopener">
        <img src="https://cdn.filestackcontent.com/rf973cGSW2KvmFm2T8h1" alt="A homepage preview of &ldquo;Rhetoric in the United States&rdquo; website. The page displays a video grab of the president John F. Kennedy delivering a speech. " />
    </a>
</figure>
<p><sup><em>Figure 8-64</em></sup></p>
<h2>Document Setup</h2>
<p>Open the <em>ws_jfk.html</em> and <em>ws_media.css</em> files and enter your <strong>name</strong> and the <strong>date</strong> in the comment section of each file. Next, go to the <em>ws_jfk.html</em> file and insert a <code>link</code> to the <em>ws_media.css</em> style sheet file. Take some time to study the content and structure of the document.</p>
<h2>Insert the Video Clip</h2>
<p>Scroll down to the <code>article</code> element and directly below the <code>h1</code> heading, insert a video clip with the controls enabled, displaying the poster image <em>ws_jfk_poster.png</em> file. Add two possible sources to the video clip: <em>ws_jfk_speech.mp4</em> and <em>ws_jfk_speech.webm</em>, including the <strong>mime-type</strong> for each video source.</p>
<p>After the two video sources, add a captions track with the <code>label</code> <strong>Speech Captions</strong>using the source file <em>ws_captions.vtt</em>. If a browser does not support embedded video, display the paragraph: <strong>To play this video clip, your browser needs to support HTML5</strong>.</p>
<h2>Add Track Cues</h2>
<p>Open the <em>ws_captions.vtt</em> file and add an initial line to the text file indicating that this file is in WEBVTT format. Add the following track cues to the <em>ws_captions.vtt</em> file, labeling the captions <strong>1</strong> through <strong>12</strong> (times are in parenthesis):</p>
<ol>
    <li><strong>(00:01.00 - 00:004.000) We observe today</strong>,</li>
    <li><strong>(00:04.000 - 00:06.000) not a victory of party</strong>,</li>
    <li><strong>(00:06.000 - 00:10.000) but a celebration of freedom &ndash;</strong></li>
    <li><strong>(00:10.000 - 00:12.000) symbolizing an end</strong>,</li>
    <li><strong>(00:12.000 - 00:15.000) as well as a beginning &ndash;</strong></li>
    <li><strong>(00:15.000 - 00:17.000) signifying renewal</strong>,</li>
    <li><strong>(00:17.000 - 00:19.000) as well as change.</strong></li>
    <li><strong>(00:19.000 - 00:22.000) For I have sworn before you</strong></li>
    <li><strong>(00:22.000 - 00:24.000) and Almighty God</strong></li>
    <li><strong>(00:24.000 - 00:27.000) the same solemn oath</strong></li>
    <li><strong>(00:27.000 - 00:30.000) our forebears prescribed</strong></li>
    <li><strong>(00:30.000 - 00:33.000) nearly a century and three-quarters ago.</strong></li>
</ol>
<h2>Video Player Styles</h2>
<p>Next, go to the <em>ws_media.css</em> file and within the "Video Player" Styles section, insert a style rule that displays <code>video</code> elements as blocks with a <code>width</code> of <strong>90%</strong> and horizontally centered by setting the top/bottom margins to <strong>5</strong> pixels and the left/right margins to <strong>auto</strong>.</p>
<p>Create a media query for screen devices with a minimum <code>width</code> of <strong>521</strong> pixels. Within the media query, create a style for <code>video</code> elements that sets the <code>width</code> of the player to <strong>360</strong> pixels, floated on the right margin with a margin width of <strong>10</strong>pixels.</p>
<h2>Track Styles</h2>
<p>Within the "Track Styles" section, create a style rule for caption cues that displays the text in a <strong>1.3em</strong> <strong>sans-serif</strong> font with a text color of <strong>rgb(221, 128, 160)</strong>, and a background color of <strong>rgba(255, 255, 255, 0.8)</strong>.</p>
<p>Load the <em>ws_jfk.html</em> file in the browser preview. Test the page by playing the video clip of Kennedy&rsquo;s speech. Verify that captions are added to the speech, matching the words uttered by the president.</p>
<blockquote class="info">
    <p>If your captions appear white on a gray background, move the mouse pointer away from the video player so that the video slider is not showing.</p>
</blockquote>
<blockquote class="info">
    <p>The audio will not be audible using the browser preview in the lab environment.</p>
</blockquote>
