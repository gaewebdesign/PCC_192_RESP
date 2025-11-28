<html>
<input type="hidden" id="hdnSession" data-value="@Request.RequestContext.HttpContext.Session['URL']" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="javascript/jquery.tablesort.js"></script>

<!--
https://ourcodeworld.com/articles/read/619/top-7-best-table-sorter-javascript-and-jquery-plugins

-->




<style>


input{

  background-color: #ccebff

}


tr{

     line-height: 1.8em;
}

h1{

   font-size: 2.5em;       

}

#message {

   font-size: 2.7em;

}

</style>

<script>


function Initialize(){


  var request = $.ajax({
    url: "ajax.php",
    type:  "GET",
    dataType: "html",
    async: false
   });

  request.done( function(msg){

      theURL = msg

  });

   $('table').tablesort();

   var count = $('table').children().length;

   if(count >1 ) return


   $.ajax({

          type: 'GET',
          url:  theURL,

          data: { },
          success: function (data){

          var obj = JSON.parse( data )

          obj.forEach( function(key,index){

              year = key['year']
              fname = key['fname']
              lname = key['lname']
              ntrp = key['ntrp']
              date= key['date']

              dt = new Date( date*1000)
              y = dt.getFullYear()
              m = 1 + dt.getMonth()
              d = dt.getDate()

              date = m + "/" + d + "/" + y 
              html = "<tr style='font-size:18px'  bgcolor='#9CBFF4'><td>"+ year +"<td>" + fname+ "<td>" + lname + "<td>" + ntrp + " <td>" + date + "</tr>"
//<tr style="font-size:18px" bgcolor="#4B8DF2">

              $("table").append( html  );


             })

         }

   })




}

$(document).ready(function(){
    $("#but_submit").click(function(){
        var username = $("#txt_uname").val().trim();
        var password = $("#txt_pwd").val().trim();


        if( username != "" && password != "" ){

            $.ajax({
                url:'checkUser.php',
                type:'post',
                data:{username:username,password:password},
                success:function(response){
                    var msg = "";

		    if(response == 1){
                     $("#message").html("");
               
                     $("#image").css("display","none");
                     Initialize();

                    }else{
                        msg = "Invalid username and password<p>";
                        $("#message").html(msg);

                    }

                }
            });
        }
    });
});


</script>


<center>
<div class="container">

    <div id="div_login">
        <h1>Golden Gate Tennis Club Membership List</h1>
        <h1>Login<br>
        (request username/password from membership(@)goldengatetennisclub.org)</h1>


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
<br>
 <div id="message">
 </div>


</center>

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
<div id="display" ></div>

</table>

<center>
<div id="image" >
<?php

function get( ){
      $dir = @scandir("images");

      $len =  count($dir)-3;  // includes ./../.DSSTORE (3 extra

      $ar = array();
      foreach ($dir as $f){
//           if (strpos( $f , "png") !== false ||  strpos( $f , "jpg") !== false )
           if( preg_match("/png/i" , $f  ) ||  preg_match("/jpg/i", $f ) )
                 $ar[]=  $f;

      }

      $r = rand(21,0);
      return $ar[$r % $len];

}

$photo = get(); 
echo( "<p><img src='images/$photo'  width='600' >)");

?>




</div>




</html>



