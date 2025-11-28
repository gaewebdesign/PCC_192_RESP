# t8-review

## Summary
Maxine has been working on new pages at the Cinema Penguin website. She has returned for help on a page featuring a profile of Fred Astaire. Maxine created a sound clip from one of Astaire's songs in the Royal Wedding and a video clip of a dance in that movie featuring Astaire's duet with a hat rack. She wants both clips embedded on the page. In addition, Maxine wants you to try a new hover transition for the links at the top of the page. Finally, she wants you to create an animation that displays a scrolling marquee of the Fred Astaire filmography. **Figure 8-63** shows a preview of the final page.

![A homepage preview of Fred Astaire biography page.](https://cdn.filestackcontent.com/u5ecj4sSpqG5JcTusVCx)

*Figure 8-63*
## Document Setup
Open the *cp_astaire.html*, *cp_media2.css*, and *cp_animate2.css* files and enter your **name** and the **date** in the comment section of each file. Go to the *cp_astaire.html* file and insert links to the *cp_media2.css* and *cp_animate2.css* files. Take some time to study the contents and structure of the document.

## Insert the Audio Clip
Scroll down to the ```aside``` element titled &ldquo;Listen up&rdquo;. Directly after the introductory paragraph, insert an audio clip with the audio controls displayed in the browser. Add two possible source files to the audio clip: *cp_song.mp3* and *cp_song.ogg*. Identify the **mime-type** of each audio source. In case a browser does not support HTML5 audio, display a paragraph with the message **Upgrade your browser to HTML5**.

The audio will not be audible using the browser preview in the lab environment.

## Insert the Video Clip
Scroll down to the ```aside``` element titled &ldquo;In Focus&rdquo; and after the introductory paragraph insert a video clip with the video controls enabled and display the poster image *cp_poster.png*. Add two possible sources to the video clip: *cp_hatrack.mp4*and *cp_hatrack.webm*. Include the **mime-type** for each video source. If the user's browser does not support HTML5 video, display a paragraph with the message **Upgrade your browser to HTML5**.

Directly after the two video sources in the ```video``` element you created in the last step, insert a caption track using the captions you will specify in the *cp_captions2.vtt* file in later steps. Set the value of the ```kind``` attribute to **captions** and give the caption track the ```label``` **Movie Captions** and set it as the default track for the video clip.

## Add Track Cues
Open the *cp_captions2.vtt* file and add an initial line to the text file indicating that this file is in WEBVTT format. Next, add the following track cues to the *cp_caption2.vtt*file:

1. A **Title** cue appearing in the **0.5** seconds to **5** second interval containing the text **The Hat Rack Dance** enclosed in a class tag with the name ```Title```. Set the ```line``` and ```align``` attributes for the caption to **10%** and **middle** respectively to place the caption centered and near the top of the video window.
2. A **Subtitle** cue in the **5.5** to **9** second interval with the text from **Royal Wedding (1951)**. Enclose &ldquo;Royal Wedding (1951)&rdquo; within ```<>``` tags to italicize it. Place the caption at the **10%** ```line``` and ```align``` the caption text in the **middle**.
3. A **Finish** cue displayed from the **65** second mark (1 minute and 5 seconds) to the **71** second mark (1 minute and 11 seconds) and containing the text **See more videos at Cinema Penguin**. Enclose &ldquo;Cinema Penguin&rdquo; within ```<>``` tags and place the caption at the **80%** ```line``` and **90%** position with the caption text aligned at the **end**.

## Track Styles
Next, open the *cp_media2.css* file and within the "Media Styles" section, insert a style rule for all ```audio``` and ```video```elements that displays them as blocks with a ```width``` of **95%**. Center the ```audio``` and ```video``` elements by setting the top/bottom margins to **20** pixels and left/right margins set to **auto**. Go to the "Track Styles" section and create a style rule for track cues that:

1. sets the background color to **transparent**,
2. adds a **black** text shadow with horizontal and vertical offsets of **1** pixel and a blur of **2** pixels,
3. sets the text color to **rgb(255, 177, 66)**, and
4. sets the font size to **1.2em** using the **sans serif** font family.

Create a style rule for track cues belonging to the ```Title``` class that sets the font size to **2em** and font family to **serif**.

Open the *cp_astaire.html* file in the browser preview. Verify that you can play the audio and video clips and the layout matches that shown in *Figure 8-63*. Verify that captions are added to the video clip providing the title and subtitle of the clip at the start of the video and a message about Cinema Penguin at the end.

## Transition Styles
Maxine wants to create a transition for the links at the top of the page that enlarges the link text and moves it out and above its default position. Return to the *cp_animate2.css* file and go to the "Transition Styles" section and create a style rule for the ```nav#topLinks``` a selector that:

1. sets the text color to **rgb(255, 255, 255)**,
2. adds a text shadow with the color **rgba(0, 0, 0, 1)**, a horizontal offset of **1**pixel, a vertical offset of **-1** pixel, and a blur of **1** pixel, and
3. uses the transform style to apply the functions **scale(1,1)** and **translateY(0px)**. Within the style rule you created above, add a transition that applies to all of the properties of the selected element over an interval of **1.2** seconds using linear timing.

Create a style rule for the ```nav#topLinks a:hover``` selector that:

1. sets the text color to **rgb(255, 183, 25)**,
2. sets the text shadow to the color **rgba(0, 0, 0, 0.5)** with a horizontal offset of **0** pixels, a vertical offset of **15**pixels, and a blur of **4** pixels, and
3. uses the transform style with **scale(2,2)**and **translateY(-15px)** to double the scale of the object and translate it **-15** pixels in the vertical direction.
Reload *cp_astaire.html* in the browser preview. Hover your mouse pointer over the links at the top of the page and verify that your browser applies a transition over a **1.2** second duration as each link increases in size and appears to move upward and outward from the page in response to the hover event.

The list of Fred Astaire's films has been stored within a table nested within a ```div```element with the ID ```Marquee```. The table is long and Maxine wants to only display a portion of it at a time, allowing the contents of the table to automatically scroll upward as in a theater marquee. To create this animated effect, you change the top position style of the table over a specified time interval, moving the table upward through the marquee.

## Marquee Styles
Return to the *cp_animate2.css* file and go to the "Marquee Styles" section and insert a style rule that places the marquee ```div```element with relative positioning. Add a style rule for the ```table``` nested within the marquee ```div``` element that places the ```table``` using absolute positioning. Do not specify any coordinates for either element.

## Keyframe Styles
Go to the "Keyframe Styles" section and create an animation named scroll with the following two key frames:

1. at **0%**, set the value of the top property to **250px** and,
2. at **100%**, set the value of the top property to **-1300px**.

## Animation Styles
Go to the "Animation Styles" section and apply the scroll animation to the table within the marquee ```div``` element over a duration of **50** seconds using linear timing within infinite looping. Maxine wants the marquee to stop scrolling whenever the user hovers the mouse pointer over it. Add a style rule for the ```div#marquee:hover table``` selector that pauses the animation during the hover event.

Reload the *cp_astaire.html* file in the browser preview. Verify that the marquee listing the Fred Astaire films starts scrolling automatically when the page loads, goes back to the beginning after the last film is listed, and stops whenever the user hovers the mouse pointer over the marquee.

On touchscreen devices, tap the marquee to initiate the hover event and pause the scrolling text, and then tap elsewhere on the page to remove the hover and restart the marquee.
