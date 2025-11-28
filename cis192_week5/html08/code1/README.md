# t8-code-1

## Summary
You are working on a skateboard website that provides instruction in various skateboarding techniques. In this coding challenge you will complete a web page detailing how to perform a trick known as a High Ollie in which the skateboarder jumps over high obstacles. You will augment the page with a video of the trick being performed. See *Figure 8&ndash;59*.

![A web page titled learning the high Ollie. The page consists of the detailed instruction on how to perform the nigh Ollie and a video illustration. In the video, a skateboarder jumps over high obstacles and demonstrates on how the high Ollie is performed.](https://cdn.filestackcontent.com/3HpuChMzQWOZgmw3nFOQ)

*Figure 8-59*

Do the following:
## Tasks

Open the files *code8-1.html* and *code8-1_video.css* and in the comment section enter your **name** (First + Last) and the **date** (MM/DD/YYYY) into the ```Author:``` and ```Date:``` fields of each file.

Go to the *code8-1.html* file and within the ```head``` section insert a ```link``` element linking the page to the *code8-1_video.css* style sheet file.

Below the ordered list insert a ```video``` element with the following features:

1. Add the controls attribute to the ```video``` element to show player controls.
2. Add the source files *ollie.mp4* and *ollie.webm* to the video element. Include the ```mime-type``` for both video files.
3. If a browser doesn't support HTML video, display a paragraph containing the text **Upgrade your browser to view embedded videos**.
4. Add a track using the contents of the *captions8-1.vtt* file. Set the value of the ```kind``` attribute to captions and add the label **Video Captions**.

Go to the *code8-1_video.css* file and add a style rule for the ```video``` element that:

1. Displays the video player as a block element,
2. Sets the ```width``` of the player to **75%**, and
3. Sets the top/bottom margin to **10** pixels and the left/right margins to **auto**.

Open the *captions8-1.vtt* file in your editor and create a cue with the ```label``` **Caption** going from **3** to **6** seconds of the video and displaying the text **A High Ollie** during that interval. Link the *captions8-1.vtt* file to the video using the ```track``` element.

Test your page in the browser preview, verifying that you can play the video clip of the High Ollie and that a caption appears from 3 to 6 seconds of the video.
