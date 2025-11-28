# t5-case-1
## Summary
**Golden Pulps** - Devan Ryan manages the website Golden Pulps, where he shares tips on collecting and fun stories from the "golden age of comic books"-a period of time covering 1938 through the early 1950s. Devan wants to provide online versions of several classic comic books, which are now in the public domain. He's scanned the images from the golden age comic book, America's Greatest Comics 001, published in March, 1941, by Fawcett Comics and featuring Captain Marvel. He's written the code for the HTML file and wants you to help him develop a layout design that will be compatible with mobile and desktop devices. 
*Figure 5-63* shows a preview of the mobile and desktop version of a page you'll create.

![Two screenshots display a webpage of Golden Pulps in mobile and desktop versions. In the mobile version, three panel cartoons are arranged one below the other. At the bottom of the page, the description about Captain Marvel and the navigation links are displayed. In the desktop version, the navigation bar is displayed below the page header. In the page, the grid of the three panel cartoons and the description about Captain Marvel are displayed beside each other.](https://cdn.filestackcontent.com/Vqj2VLXSt2eIuKO2ZBLK)

*Figure 5-63*

## Document Setup
Open the *gp_cover.html*, *gp_page1.html*, *gp_page2.html*, *gp_page3.html*, *gp_layout.css*, and *gp_print.css* files and enter your **name** and the **date** in the comment section of each file. Next, go to the *gp_cover.html* file and add a <code>viewport</code> <code>meta</code> tag to the document <code>head</code>, setting the <code>width</code> of the layout viewport to the device width and setting the initial scale of the viewport to **1.0**.
Create links to the following style sheets:

1. the *gp_reset.css* file to be used with all devices,
2. the *gp_layout.css* file to be used with screen devices, and
3. the *gp_print.css* file to be used for printed output.

Take some time to study the contents and structure of the file. Note each panel from the comic book is stored as a separate inline image with the class name panel along with class names of <code>size1</code> to <code>size4</code> indicating the size of the <code>panel</code>. <code>Size1</code> is the largest panel down to <code>size4</code>, which is the smallest panel.

Repeat the above step, adding the stylesheet links and the viewport information to each of the *gp_page1.html*, *gp_page2.html*, and *gp_page3.html* files. Finally, go to the *gp_layout.css* file and create the layout styles for mobile and desktop devices. Note that Devan has used the <code>@import</code> rule to import the *gp_designs.css* file, which contains several graphical and typographical style rules.

## Flex Layout Styles
Go to the "Flex Layout Styles" section and insert a style rule to display the <code>body</code> element as a <code>flexbox</code> oriented as rows with wrapping. The page <code>body</code> content has two <code>main</code> elements. The <code>section</code> element with the ID <code>sheet</code> contains the panels from the comic book page. The <code>article</code> element contains information about the comic book industry during the Golden Age. 
Devan wants more of the page width to be given to the comic book sheet. Add a style rule that sets the flex growth and shrink rate of the <code>section#sheet</code> selector to **3** and **1** respectively and set its flex basis size to **301** pixels.

Less page width will be given to the <code>article</code> element. Create a style rule to set its flex growth and shrink values to **1**and **3** respectively and set its flex basis size to **180** pixels.

## Mobile Devices
Go to the "Mobile Devices" section and create a media query for screen devices with a maximum width of **480** pixels.
With mobile devices, Devan wants each comic book panel image to occupy a single row. 

Create a style rule that sets the <code>width</code> of <code>img</code> elements belonging to the <code>panel</code> class to **100%**. Devan wants the horizontal navigation links to other pages on the Golden Pulps website to be displayed near the bottom of the page. Within the media query, set the flex order of the <code>nav.horizontal</code> selector to **99**. Create a style rule to set the flex order of the <code>body &gt; footer</code> selector to **100**.

## Tablet and Desktop Devices
Go to the "Tablet and Desktop Devices: Greater than 480 pixels" section and create a media query that matches screen devices with widths greater than **480** pixels. For tablet and desktop devices, you'll lay out the horizontal navigation list as a single row of links. Within the media query, create a style rule for the <code>nav.horizontal ul</code> selector that displays that element as a <code>flexbox</code>, oriented in the row direction with no wrapping. Set the <code>height</code> of the element to **40** pixels.

For the <code>nav.horizontal ul li</code> selector set the flex growth shrink, and basis size values to **1**, **1**, and **auto** respectively so that each list items grows and shrinks at the same rate.

With wider screens, Devan does not want the panels to occupy their own rows as is the case with mobile devices. Instead, within the media query create style rules, define the <code>width</code> of the different classes of comic book panel images as follows:
            
1. Set the <code>width</code> of <code>size1</code> <code>img</code>elements to **100%**.
2. Set the <code>width</code> of <code>size2</code> <code>img</code>elements to **60%**.
3. Set the <code>width</code> of <code>size3</code> <code>img</code>elements to **40%**.
4. Set the <code>width</code> of <code>size4</code> <code>img</code>elements to **30%**.
            
Open the website in the preview pane to the right and click the navigation links to view the contents of the cover and first three pages. Verify that with a narrow screen the panels occupy their own rows and with a wider screen the sheets are laid out with several panels per row. Further verify that the horizontal navigation list is placed at the bottom of the page for mobile devices.

## Print Style
Devan also wants a print style that displays each comic book sheet on its own page and with none of the navigation links. Go to the *gp_print.css* style sheet in your editor. Add style rules to:
            
1. In the section marked "Hidden Objects", hide the <code>nav</code>, <code>footer</code>, and <code>article</code> elements.</li>
2. In the section marked "Comic Book Sheet Styles", set the <code>width</code> of the element referenced by the <code>section#sheet</code> selector to **6** inches. Set the top/ bottom margin of that element to **0** inches and the left/right margin to **auto** in order to center it within the printed page.</li>
3. Set the <code>width</code> of <code>img</code> elements belong to the <code>size1</code> class to **5** inches, <code>size2</code> images to **3** inches, <code>size3</code> images to **2** inches, and <code>size4</code> images to **1.5** inches.</li>
