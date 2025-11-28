# t10-code-2
## Summary
In this Coding Challenge you will use JavaScript to write the contents of a table listing the top ranked movies on the IMDb website. The names of the movies, descriptions, scores, and links to pages describing the movies have been stored in arrays. You will use a for loop to write the individual rows of the table. *Figure 10&ndash;35*shows a preview of the completed page.

![A page titled, I M D b top movie list displays the list of 10 movies with its description and score in the form of table. It has three columns and the column headers reads, movie, description and score.](https://cdn.filestackcontent.com/8k3oUFjxSqy9DgOr7OF6)

*Figure 10-35*

Do the following:

## Tasks
Open the files *code10-2.html* and *list10-2.js* and in the comment section enter your **name** (First + Last) and the **date** (MM/DD/YYYY) into the ```Author:``` and ```Date:``` fields of each file.

Open the *code10-2.html* file and within the ```head``` section insert a ```script``` element connecting the page to the *list10-2.js* file. Add the ```defer``` attribute to the ```script``` element.

Open the *list10-2.js* file and directly below the code populating the links array, declare the ```htmlCode``` variable. Store within the variable the following text:

```html
<table>
    <thead>
        <tr>
            <th>Movie</th>
            <th>Description</th>
            <th>Score</th>
        </tr>
    </thead>
    
    <tbody>
```

Open the *list10-2.js* file and directly below your previous code create a ```for``` loop with a counter variable ```i``` that goes from **0** to **9**. Each time through the ```for``` loop add the following text to the ```htmlCode``` variable:

```html
        <tr>
            <td><a href='links_i'>titles_i</a></td>
            <td>summaries_i</td>
            <td>ratings_i</td>
        </tr>
```
where ```i``` is the value of the counter variable, and **links_i**, **titles_i**, **summaries_i**, and **ratings_i** are the values from the ```links```, ```titles```, ```summaries```, and ```ratings``` array with index number ```i```.

After the ```for``` loop add the following text to the ```htmlCode``` variable:

```html
    </tbody>
</table>
```
Store the value of the ```htmlCode``` variable in the inner HTML of the element with the ID **list**.

Open the website in the browser preview. Verify that the page displays the table describing the ten movies from the IMDb movie list. Also verify that when you click the links in the Movie column you are redirected to a page providing information about the selected movie.

