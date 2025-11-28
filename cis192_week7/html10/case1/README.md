# t10-case-1
Trophy Case Sports
<h2>Summary</h2>
<p><strong>Trophy Case Sports</strong> - Sarah Nordheim manages the website for Trophy Case Sports, a sports memorabilia store located in Beavercreek, Ohio. She has asked you to work on creating a script for the shopping cart page. The script should take information on the items that the customer has purchased and present it in table form, calculating the total cost of the order. A preview of the page you will create is shown in <strong>Figure 10&ndash;39</strong>.</p>
<p>&nbsp;</p>
<figure>
    <a class="markdown-image-link" title="Open image in a new tab" href="https://cdn.filestackcontent.com/1CfqULIbRHmB6kQau2Kg" target="_blank" rel="noopener noreferrer">
        <img src="https://cdn.filestackcontent.com/1CfqULIbRHmB6kQau2Kg" alt="A home page of Trophy Case Sports website is displayed. An image of baseball and three bats are displayed on the top left corner. Four options displayed on the top right corner are: Daily Specials, Shipping and Returns, View My Account, and a Cart Symbol. Seven tabs listed below the heading, Trophy Case Sports are: N F L, N B A, M L B, N H L, College, Others, and Search. The sub-heading, Shopping Cart below the tabs displays four items with their description, price, quantity, total, and the subtotal amount. " />
    </a>
</figure>
<p>Figure 10-39</p>
<p>
    <span>Sarah has already designed the page layout. Your job will be to use JavaScript to enter the order information (this task will later be handled by a script running on the website) and to write a script that generates the HTML code for the shopping cart table.</span>
</p>
<h2>Document Setup</h2>
<p>Open the <em>tc_cart.html</em>, <em>tc_cart.js</em> and <em>tc_order.js</em> files and enter your <strong>name</strong> and the <strong>date</strong> in the comment section of each file. Next, go to the <em>tc_cart.html</em> file in your editor. Directly above the closing <code>&lt;/head&gt;</code>tag, insert <code>script</code> elements to link the page to the <em>tc_order.js</em> and <em>tc_cart.js</em> files in that order. Defer the loading and running of both script files until after the page has loaded.</p>
<h2>Create the Shopping Cart</h2>
<p>Scroll down the file and directly below the <code>h1</code> heading titled <strong>Shopping Cart</strong> insert a <code>div</code> element with the ID <code>cart</code>.</p>
<p>Within the <em>tc_order.js</em> file, you will create arrays containing information on a sample customer order. Create an array named <code>item</code> that will contain the ID numbers of the items purchased by the customer. Add the following four item numbers to the array: <strong>10582</strong>, <strong>23015</strong>, <strong>41807</strong>, and <strong>10041</strong>. Create an array named <code>itemDescription</code>containing the following item descriptions:</p>
<ul>
    <li>1975 Green Bay Packers Football (signed), Item 10582</li>
    <li>Tom Landry 1955 Football Card (unsigned), Item 23015</li>
    <li>1916 Army-Navy Game, Framed Photo (signed), Item 41807</li>
    <li>Protective Card Sheets, Item 10041</li>
</ul>
<p>Create an array named <code>itemPrice</code>containing the following item prices: <strong>149.93</strong>, <strong>89.98</strong>, <strong>334.93</strong>, and <strong>22.67</strong>.</p>
<p>Create an array named <code>itemQty</code>containing the following quantities that the customer ordered of each item: <strong>1</strong>, <strong>1</strong>, <strong>1</strong>, and <strong>4</strong>.</p>
<h2>Create the <code>table</code> to Display the Total Cost</h2>
<p>Open the <em>tc_cart.js</em> file and in your script begin the logic for calculating a running total of the cost of the order. Start by declaring a variable named <code>orderTotal</code>and set its initial value to <strong>0</strong>. Then declare a variable named <code>cartHTML</code> that will contain the HTML code for the contents of the shopping cart, which will be displayed as a table. Set its initial value to the text string:</p>
<pre class="cmh-pre light"><code class="cmh" data-language="html"><span><span class="mtk1">&lt;</span><span class="mtk15">table</span><span class="mtk1">&gt;</span></span><br /><span><span class="mtk1">&lt;</span><span class="mtk15">tr</span><span class="mtk1">&gt;</span></span><br /><span><span class="mtk1">&lt;</span><span class="mtk15">th</span><span class="mtk1">&gt;Item&lt;/</span><span class="mtk15">th</span><span class="mtk1">&gt;&lt;</span><span class="mtk15">th</span><span class="mtk1">&gt;Description&lt;/</span><span class="mtk15">th</span><span class="mtk1">&gt;&lt;</span><span class="mtk15">th</span><span class="mtk1">&gt;Price&lt;/</span><span class="mtk15">th</span><span class="mtk1">&gt;&lt;</span><span class="mtk15">th</span><span class="mtk1">&gt;Qty&lt;/</span><span class="mtk15">th</span><span class="mtk1">&gt;&lt;</span><span class="mtk15">th</span><span class="mtk1">&gt;Total&lt;/</span><span class="mtk15">th</span><span class="mtk1">&gt;</span></span><br /><span><span class="mtk1">&lt;/</span><span class="mtk15">tr</span><span class="mtk1">&gt;</span></span><br /></code></pre>
<h2>Calculate the Total Cost of the Order</h2>
<p>Create a <code>for</code> loop that loops through the entries in the <code>item</code> array. Each time through the loop, execute the commands described in <em>steps 1</em> through <em>5</em> listed below:</p>
<ol>
    <li>Add the following HTML code to the value of the <code>cartHTML</code> variable:
        <pre class="cmh-pre light"><code class="cmh" data-language="html"><span><span class="mtk1">&lt;</span><span class="mtk15">tr</span><span class="mtk1">&gt;</span></span><br /><span><span class="mtk1">&lt;</span><span class="mtk15">td</span><span class="mtk1">&gt;&lt;</span><span class="mtk15">img</span><span class="mtk1">&nbsp;</span><span class="mtk15">src</span><span class="mtk1">=</span><span class="mtk29">'tc_item.png'</span><span class="mtk1">&nbsp;</span><span class="mtk15">alt</span><span class="mtk1">=</span><span class="mtk29">'item'</span><span class="mtk1">&nbsp;/&gt;&lt;/</span><span class="mtk15">td</span><span class="mtk1">&gt;</span></span><br /></code></pre>
        where <strong>item</strong> is the current value from the <code>item</code> array.
    </li>
    <li>Add the following HTML code to the <code>cartHTML</code> variable to display the <strong>description</strong>, <strong>price</strong>, and <strong>quantity</strong>ordered of the item:
        <pre class="cmh-pre light"><code class="cmh" data-language="html"><span><span class="mtk1">&lt;</span><span class="mtk15">td</span><span class="mtk1">&gt;description&lt;/</span><span class="mtk15">td</span><span class="mtk1">&gt;&nbsp;</span></span><br /><span><span class="mtk1">&lt;</span><span class="mtk15">td</span><span class="mtk1">&gt;$price&lt;/</span><span class="mtk15">td</span><span class="mtk1">&gt;</span></span><br /><span><span class="mtk1">&lt;</span><span class="mtk15">td</span><span class="mtk1">&gt;quantity&lt;/</span><span class="mtk15">td</span><span class="mtk1">&gt;</span></span><br /></code></pre>
        where <strong>description</strong> is the current value from the <code>itemDescription</code> array, <strong>price</strong> is the current value from the <code>itemPrice</code> array preceded by a <strong>$</strong>symbol, and <strong>quantity</strong> is the current value from the <code>itemQty</code> array.
    </li>
    <li>Declare a variable named <code>itemCost</code>equal to the price value multiplied by the quantity value for the current item.</li>
    <li>Add the following HTML code to the <code>cartHTML</code> variable to display the cost for the item(s) ordered, completing the table row:
        <pre class="cmh-pre light"><code class="cmh" data-language="html"><span><span class="mtk1">&lt;</span><span class="mtk15">td</span><span class="mtk1">&gt;$cost&lt;/</span><span class="mtk15">td</span><span class="mtk1">&gt;&lt;/</span><span class="mtk15">tr</span><span class="mtk1">&gt;</span></span><br /></code></pre>
        where <strong>cost</strong> is the value of the <code>itemCost</code> variable, preceded by a <strong>$</strong>symbol.
    </li>
    <li>Add the value of the <code>itemCost</code>variable to the <code>orderTotal</code> variable to keep a running total of the total cost of the customer order.</li>
</ol>
<p>After the <code>for</code> loop has completed, add the following HTML code to the value of the <code>cartHTML</code> variable, completing the shopping cart table:</p>
<pre class="cmh-pre light"><code class="cmh" data-language="html"><span><span class="mtk1">&lt;</span><span class="mtk15">tr</span><span class="mtk1">&gt;</span></span><br /><span><span class="mtk1">&lt;</span><span class="mtk15">td</span><span class="mtk1">&nbsp;</span><span class="mtk15">colspan</span><span class="mtk1">=</span><span class="mtk29">'4'</span><span class="mtk1">&gt;Subtotal&lt;/</span><span class="mtk15">td</span><span class="mtk1">&gt;</span></span><br /><span><span class="mtk1">&lt;</span><span class="mtk15">td</span><span class="mtk1">&gt;$total&lt;/</span><span class="mtk15">td</span><span class="mtk1">&gt;</span></span><br /><span><span class="mtk1">&lt;/</span><span class="mtk15">tr</span><span class="mtk1">&gt;</span></span><br /><span><span class="mtk1">&lt;/</span><span class="mtk15">table</span><span class="mtk1">&gt;</span></span><br /></code></pre>
<p>where <strong>total</strong> is the value of the <code>orderTotal</code> variable, preceded by a <strong>$</strong>symbol.</p>
<p>Apply the <code>cartHTML</code> value to the inner HTML of the <code>div</code> element with the ID <code>cart</code>. Document your script file with appropriate comments.</p>
<p>Open the website in the browser preview and verify that the page now shows the shopping cart data for the sample customer order.</p>
