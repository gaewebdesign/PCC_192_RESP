# t3-case-2
## Summary
**A Soldier's Scrapbook** - Jakob Bauer is a curator at the Veteran's Museum in Raleigh, North Carolina. Currently he is working on an exhibit called A Soldier's Scrapbook containing mementos, artifacts, journals, and other historic items from the Second World War. You've been asked to work on a page for an interactive kiosk used by visitors to the exhibit. Jakob has already supplied much of the text and graphics for the kiosk pages but he wants you to complete the job by working on the page layout. The page you will work on provides an overview of the Normandy beach landings on June 6th, 1944. Since this page will be displayed only on the kiosk monitor, whose screen dimensions are known, you'll employ a fixed layout based on a screen width of 1152 pixels. Jakob also wants you to include an interactive map of the Normandy coast where the user can hover a mouse pointer over location markers to view information associated with each map point. To create this effect, you'll mark each map point as a hypertext link so that you can apply the hover pseudo-class to the location. In addition to the interactive map, Jakob wants you to create a drop cap for the first letter of the first paragraph in the article describing the Normandy invasion. *Figure 3-85* shows a preview of the page you'll create.

![A webpage of Normandy Invasion Kiosk.  The page header displays the heading A soldier's scrapbook with a photo behind.  Six navigation links Blitzkrieg, Battle of Britain, Normandy Invasion, Market Garden, Fall of Berlin, and Postwar Upheaval are given below the page header. A pane at the left displays a section with the heading, The Normandy Invasion with three descriptive paragraphs below it. A pane at the right displays an interactive map in which the pointer is hovered above the map marker. Two paragraphs below the map display the information about the location.](https://cdn.filestackcontent.com/mO3FqTiQvOMjVR6ZjKzR)

*Figure 3-85*

## Document Setup
Save ss_dday_txt.html as ss_dday.html. Save ss_layout_txt.css as ss_layout.css. Open the *ss_dday.html* and *ss_layout.css* files and enter your **name** and the **date** in the comment section of each file. Next, go to the *ss_dday.html* file and within the document ```head```, create links to the *ss_styles.css* and *ss_layout.css* style sheet files. Study the content and structure of the document. Note that within the ```aside``` element is an image for the battle map with the id ```mapImage```. Also note that there are six marker images enclosed within hypertext links with IDs ranging from ```marker1``` to ```marker6```. After each marker image are ```div``` elements of the ```mapInfo``` class with IDs ranging from ```info1``` to ```info6```. Part of your style sheet will include style rules to display these ```div``` elements in response to the mouse pointer hovering over each of the six marker images.

## Article Styles
Open the *ss_layout.css* file and go to the "Article Styles" section. Within this section, you'll lay out the article describing the Normandy Invasion. Create a style rule to float the ```article``` element on the left margin and set its ```width``` to **384** pixels.

## First Line and Drop Cap Styles
Jakob wants the first line from the article to be displayed in small capital letters. Go to the "First Line and Drop Cap Styles" section and create a style rule for the first paragraph of the ```article``` element and the first line of that paragraph, setting the font size to **1.25em** and the font variant to small-caps.

Use the ```first-of-type``` pseudo-class for the paragraph and the ```first-line``` pseudo-element for the first line of that paragraph.

Jakob also wants the first letter of the first line in the article's opening paragraph to be displayed as a drop cap. Create a style rule for the article's first paragraph and first letter that applies the following styles:

1. Sets the size of the first letter to **4em** in a **serif** font and floats it on the left,
2. Sets the line height to **0.8em**, and
3. Sets the right and bottom margins to **5** pixels.

Use the ```first-letter``` pseudo-element for the first letter of that paragraph.

## Aside Styles
The interactive map is placed within an ```aside``` element that Jakob wants displayed alongside the Normandy Invasion article. Go the "Aside Styles" section and create a style rule that sets the ```width``` of the ```aside``` element to **768** pixels and floats it on the left margin.

## Map Styles
Next, you will lay out the interactive map. The interactive map is placed within a ```div``` element with the ID ```battleMap```. Go to the "Map Styles" section and create a style rule for this element that sets its ```width``` to **688** pixels. Center the map by setting its top/bottom margins to **20** pixels and its left/right margins to **auto**. Place the map using relative positioning. The actual map image is placed within an ```img```element with the ID ```mapImage```. Create a style rule for this element that displays it as a block with a ```width``` of **100%**.

## Interactive Map Styles
Go to the "Interactive Map Styles" section. Within this section, you'll create style rules that position each of the six map markers onto the battle map. The markers are placed within hypertext links. Create a style rule for every a element of the ```battleMarkers``` class that places the hypertext link using absolute positioning. Create style rules for the six a elements with IDs ranging from ```marker1``` to ```marker6```, placing them at the following (top, left) coordinates:

1. ```marker1``` **(220, 340)**,
2. ```marker2``` **(194, 358)**,
3. ```marker3``` **(202, 400)**,
4. ```marker4``` **(217, 452)**,
5. ```marker5``` **(229, 498)**,
6. ```marker6``` **(246, 544)**.

## Map Information Styles
The information associated with each map marker has been placed in ```div``` elements belonging to the ```mapInfo``` class. Go to the "Map Information Styles" section and create a style rule that hides this class of elements so that this information is not initially visible on the page.

To display the information associated with each map maker, you need to create a style rule that changes the map information's display property in response to the mouse pointer hovering over the corresponding map marker. Since the map information follows the map marker in the HTML file, use the following selector to select the map information corresponding to the hovered map marker: ```a.battleMarkers:hover + div.mapInfo```. Write a style rule for this selector that sets its display property to block.

Test the interactive map by first verifying that none of the information about the six battle locations appears on the page unless you hover your mouse pointer over the marker on the battle map. Further verify that when you are not hovering over the battle marker, the information is once again not visible on the page.
