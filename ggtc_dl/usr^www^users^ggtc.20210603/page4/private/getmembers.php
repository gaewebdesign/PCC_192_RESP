
<html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="javascript/jquery.tablesort.js"></script>

<script>

function Initialize(){

   theURL = "http://www.sctennisclub.org/ggtc_/current";

   $('table').tablesort();

   var count = $('table').children().length;

   if(count >1 ) return


   $.ajax({

          type: 'GET',
          url:  theURL,


          data: { },
          success: function (data){

          var obj = JSON.parse( data )



        <h1>Enter username/password to access (send request to membership [ @ ] goldengatetennisclub.org)</h1>

        <div id="message"></div>
        <div>
            <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
        </div>
        <div>
            <input type="password" class="textbox" id="txt_pwd" name="txt_pwd" placeholder="Password"/>
        </div>
<p>
        <div>
            <input type="button" value="Submit" name="but_submit" id="but_submit" />
        </div>
    </div>


</div>


<p>

<table align="center" class="sortable" width="50%" style="border-collapse:collapse">


<thead>
<tr style="font-size:18px" bgcolor="#4B8DF2">
<th scope="col">Year</th>
<th scope="col">First Name</th>
<th scope="col">Last Name</th>
<th scope="col">NTRP</th>
<th scope="col">Date</th>
</thead>
<p>


<div id="display" >
</div>


</table>
</html>



