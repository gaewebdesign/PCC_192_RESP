# t10-code-1

## Summary
You are working on a JavaScript app to create a gallery of slide images. To create the gallery, you will apply a for loop that loops through an array of images and captions to create the HTML code for the figure elements. *Figure 10&ndash;34* shows a preview of the gallery.

![A page titled, International Space Station Images displays fourteen images with their names as follows: International Space Station fourth expansion [2009], Assembling the International Space Station [1998], The Atlantis docks with the I S S [2001], The Atlantis approaches the I S S [2000], The Atlantis approaches the I S S [2000], International Space Station over Earth [2002], The International Space Station first expansion [2002], Hurricane Ivan from the I S S [2008], The Soyuz spacecraft approaches the I S S [2005], The International Space Station from above [2006], Maneuvering in space with the Canadarm 2 [2006], The International Space Station second expansion [2006], The International Space Station third expansion [2007], The I S S over the Ionian Sea [2007].](https://cdn.filestackcontent.com/iElCnBbQUCquNv7iq0LX)

*Figure 10-34*

Do the following:
## Tasks
Open the files *code10-1.html* and *gallery10-1.js* and in the comment section enter your **name** (First + Last) and the **date** (MM/DD/YYYY) into the ```Author:``` and ```Date:``` fields of each file.

Open the *code10-1.html* file and within the ```head``` section insert a ```script``` element connecting the page to the *gallery10-1.js* file. Add the ```defer``` attribute to the ```script``` element to defer the loading of the script until after the contents of the page loads.

Open the *gallery10-1.js* file and below the code that creates and populates the captions array, declare the ```htmlCode``` variable, setting its initial value to an empty text string.

Create a ```for``` loop with a counter variable ```i``` that goes from **0** to **13** in increments of **1**. Each time through the ```for``` loop, add the following code to the value of the ```htmlCode``` variable:
```html
<figure>
    <img alt='' src='slide' + i + '.jpg' />
    <figcaption>captions[i]</figcaption>
</figure>
```

where ```i``` is the value of the counter variable and *caption_i* is the value from the captions array with index number ```i```.
After the ```for``` loop, change the inner HTML of the document element by the ID **gallery** to the value of the ```htmlCode``` variable.

Open the website in the browser preview. Verify that the page displays the 14 images in the slide gallery.
