# t8-code-3

## Summary
Animation can be used with 3D objects to create the illusion of objects moving and spinning in 3D space. *Figure 8-61* shows the opening page of the Artist Sketchbook web page in which six drawings from Renaissance masters have been combined in a 3D cube. You will use CSS animation to spin the cube, showing all faces of the cube during the animation.

![](t8-3.gif)

*Figure 8-61*

Do the following:
## Tasks

Open the file *code8-3.html* and *code8-3_anim.css* and in the comment section enter your **name** (First + Last) and the **date** (MM/DD/YYYY) into the ```Author:``` and ```Date:``` fields of each file.

Open the *code8-3.html* file and within the ```head``` section insert a ```link``` element that links the page to the *code8-3_anim.css* style sheet file. Take some time to review the contents of the file.

Open the *code8-3_anim.css* file. Several keyframe animations have already been created for you. Add a keyframe animation named ```spinCube``` that contains the following frames:

1. At **0%** apply the transform property with the ```rotateX()``` function set to **24deg** and the ```rotateY()``` function set to **40deg**.
2. At **50%** change the value of the ```rotateX()``` function to **204deg** and the ```rotateY()``` function to **220deg**
3. At **100%**, change the value of the ```rotateX()``` function to **384** and the ```rotateY()``` function to **400deg**.

When the page is initially opened you want it to display animation of the six faces of the cube being assembled. 

Create a style rule that applies the ```moveFront```
keyframe animation to the ```#faceFront``` object. Set the duration of the animation to **3** seconds and set the ```animation- fill-mode``` property to **forwards**.

Repeat the previous step for the ```#faceBack```, ```#faceBottom```, ```#faceLeft```, ```#faceTop```, and ```#faceRight``` objects using the ```moveBack```, ```moveBottom```, ```moveLeft```, ```moveTop```, and ```moveRight``` animations.

After the cube is assembled you want it to rotate. Create a style rule that applies the ```spinCube``` animation to the ```#cube``` object, running the animation over a **3** second duration after a delay of **3** seconds. Use the linear timing function and have the animation loop without ending.

Open the website in the browser preview. Verify that in the first 3 seconds the cube is assembled by moving the six faces into position and that after 3 seconds, the cube begins spinning to show all the faces of the cube.
