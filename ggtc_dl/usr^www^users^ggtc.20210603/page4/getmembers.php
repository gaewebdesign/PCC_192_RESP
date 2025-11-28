
<html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="javascript/jquery.tablesort.js"></script>

<script>

function Initialize(){

   theURL = "http://www.sctennisclub.org/ggtc_/current";

   $('table').tablesort();


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
              html = "<tr style='font-size:18px'  bgcolor='#9CBFF4'><td>" +  year +"<td>" + fname+ "<td>" + lname + "<td>" + ntrp + " <td>" + date + "</tr>"

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

                     url = "www.sctennisclub.org/ggtc_/current";

                     Initialize();


/*
                     document.write("url= " + url);



                     $.getJSON(url, function(err, data){
                        document.write("JSON data ");
                        document.write(data );

                        alert("getJSON");

                      })


                     document.write("passing by " );
*/

                    }else{
                        msg = "Invalid username and password!";
                    }
                    $("#message").html(msg);
                }
            });
        }
    });
});


</script>


<div class="container">

    <div id="div_login">
        <h1>Login</h1>
        <div id="message"></div>
        <div>
            <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
        </div>
        <div>
            <input type="password" class="textbox" id="txt_pwd" name="txt_pwd" placeholder="Password"/>
        </div>
        <div>
            <input type="button" value="Submit" name="but_submit" id="but_submit" />
        </div>
    </div>


</div>

<style>
tr{

  height: 30px;

}

</style>

<table align="center" class="sortable" width="50%" style="border-collapse:collapse">

<thead>
<tr style="font-size:18px" bgcolor="#4B8DF2">
<th scope="col">Year</th>
<th scope="col">First Name</th>
<th scope="col">Last Name</th>
<th scope="col">NTRP</th>
<th scope="col">Date</th>
</thead>

<div id="display" >

</table>
</html>



