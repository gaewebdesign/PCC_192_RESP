<html>
<h2></h2>
<meta content="text/html; charset=UTF-8" http-equiv="content-type" />
<head>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>

<script language="javascript">


function SingleSelect(regex,current)
{

 re = new RegExp(regex);
 forms =  document.forms.length;
 len =  document.forms[0].elements.length;

 if( current.checked == true){
//     alert("checked");
//     current.checked = false;
//   return
 }

 for(i=0 ; i<forms; i++)
         for(j = 0; j < len; j++) {
                elm = document.forms[i].elements[j];

               if (elm.type == 'checkbox') {
                        if (re.test(elm.name)) {
                                   elm.checked = false;
                                }
               }
          }
  
  current.checked = true;

  if(current.value=="RF" | current.value=="NRF") 
     $( "#dialog" ).show();
  else
     $( "#dialog" ).hide();


// Removes error message which comes up when Waiver button is selected
// can only do this on the checkboxes (but not when filling out text)
  $("#ERROR").hide("" );

}
function Debug(t){

  $("#Debug").text(t)


}

var mode = "pay"

function Initialize(){

  // use .htaccess to hide FREE mode via
  // either membership.php?mode=free

  //javascript returns  -1 (no mode)
/*
   var r =  window.location.search.indexOf("mode")  

  var js = '<?php echo "".$_GET["mode"]; ?>'

  var text = " Please fill out a  membership form for each additional family member. For each family member at a single address, "  
  text += " $.99 is charged (via Paypal). Be sure to use the same exact address as previously entered"

  $('#dialog').text(text);
  
  if(js.includes("free")){
            Debug(".")
  }else{
            Debug("..")
  }

*/
// ********************************************************

//    defaultParameters()
      clearParameters()
}


function clearParameters(){

/*
  $('#FIRST').val("")
  $('#LAST').val("")
  $('#ADDRESS').val("")
  $('#CITY').val("")
  $('#EMAIL').val("")
  $('#URL').val("")
  $('#ZIP').val("")
  $('#MALE').attr('checked',false)
  $('#FEMALE').attr('checked',false)
  $('#NTRP').val("")
  $('#_phonecode').val("")
  $('#_phonepre').val("")
  $('#_phonepost').val("")
*/

  $('#NEW').attr('checked',false)
  $('#RENEW').attr('checked',false)
  $('#paypal').attr('checked', false)

  $('#RS').attr('checked', true )
  $('#RF').attr('checked', false )
  $('#RJ').attr('checked', false )

  $('#NRS').attr('checked', false )
  $('#NRF').attr('checked', false )
  $('#NRJ').attr('checked', false )

}


function defaultParameters(){

  $('#FIRST').val("Josie")
  $('#LAST').val("Bell")

  $('#RENEW').attr('checked',true)
  $('#FEMALE').attr('checked',true)


  $('#NTRP').val("4.0")

  $('#ADDRESS').val("1244 Mary Drive")
  $('#CITY').val("Santa Clara")
  $('#EMAIL').val("josie.bell")
  $('#URL').val("gmail.com")
  $('#ZIP').val("95051")


  $('#_phonecode').val("408")
  $('#_phonepre').val("883")
  $('#_phonepost').val("8231")

//  $('#Debug').text("Josie")
}


function validateEmail(email) { 
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
} 

function CheckFields(){
 fname = $("#FIRST").val();
 lname = $("#LAST").val();
 gender = $("#GENDER").val();
 ntrp = $("#NTRP").val();         //optional
 address = $("#ADDRESS").val();    //optional
 city = $("#CITY").val();
 zip = $("#ZIP").val();
 email = $("#EMAIL").val();
 url = $("#URL").val();

 mtype = $("#RS").prop("checked");


 err=0;
 if( fname.length<2 | (lname.length < 2)  )                        err |= 1
 if( $("#MALE").prop("checked") ==  $("#FEMALE").prop("checked") ) err |= 2
// if(( address.length<2) | (city.length < 2) |  (zip.length<2 )  )  err |= 4
 if(email.length < 2 | url.length<2)                               err |= 8

// TODO check email address (.net, etc)
 if( !validateEmail( email+"@"+url))  err |=0x8;

 if(!mtype)  err |= 16

/*
// Santa Francisco resident  (single,family,junior)
if(  $("#RS").prop("checked")  ||   $("#RF").prop("checked")  || $("#RJ").prop("checked")  ){
        san = city.match(/san/i)
        francisco= city.match(/fran/i)
        if( (san == null) && (francisco==null) ) err |= 32 
}

*/

   message = ""
   if(err ) message = "ERROR "
   if(err & 1) message += " Name "
   if(err & 2) message += " Gender "
   if(err & 4) message += " Address "
   if(err & 8) message += " Email "
   if(err & 16) message += " Membership type "
   if(err & 32) message += " Santa Clara address "


//   message = "PLEASE COMPLETE MEMBERSHIP FORM FOR THE PAYPAL BUTTON TO APPEAR"

   if(err){
         $("#ERROR").text(message + " required");
         $("#ERROR").show();

         $("#paypal").prop("checked", false);
         $("#PaypalButton").hide()
         $("#Signature").show()


   }else{
         $("#ERROR").text("" );
         $("#ERROR").hide("" );
   }

        return err
   
}

function Paypal(){

    err = CheckFields();

    if(err) return

    $("#familymembers").hide() ;


    if( $("#paypal:checked").val() != undefined ){
             $("#PaypalButton").show() 
             $("#Signature").hide() 

             fn = $("#FIRST").val();
             ln = $("#LAST").val();


             $("#WAIVER #NAME").text(fn + "  " + ln);
             $("#WAIVER #NAME").show();


       }else{
             $("#PaypalButton").hide() ;
             $("#Signature").show() 
             $("#WAIVER #NAME").hide();
           }

}


window.onload = Initialize;

</script>

</head>


<style>

html{
    zoom: 100%;
}

body,html{
      margin-top:5;
      margin-left:30;
      margin-right:20;
      margin-bottom:2;

      background-color: #ffeeff;
      background-color: #e1e3e2;
      background-color: #5cc5da;
      background-color: #768f6f;
      background-color: #aee3e9;


}

#title { font-size:24 px; font-weight: bold;}
#app   { font-size:22 px; font-weight: bold;}
#inst  { font-size:16 px; }

.eline{
        font-family: "Comic Sans MS", "Brush Script MT", cursive;
        font-size:18 px;
        background: #fefefe;
        background-color: #ffeeff;
        background-color: rgb(255,255,255);
        background-color: #5cc5da;
        background-color: #768f6f;
        background-color: #aee3e9;

        border: none;
        border-bottom: 1px solid black;
        height : 75 px;
        width: 20%;
}


#bar_tr{ border-top: 2px solid black;}

.pntrp  { width : 7%; }
.paddress  { width : 35%; }
.pphone  { width : 10%; }
.pzip  { width : 10%; }
.pteam  { width : 11.5%; }
.paddress  { width : 35%; }
.psign  { width : 30%; }
.pwhite  { 
        width : 35%; 
        background-color: #ffff00;
}

.button{ background-color: #ffeeff; width:50% ; height:2em ; font-size:12px; font-weight:bold}
.dialog{ background-color: #99ccff; width:85% ; height:3.5em ; font-weight:bold}
.ERROR{ background-color: #99ccff; width:85% ; height:20px ; font-weight:bold}

p.B{
  margin:30px 0;
}

.CLASSIC{
   border: 1px solid blue;
   table-layout: fixed;
   width:  90%;
   background: url("images/ggtc2.png");
}

</style>

<body>


<p class="a">

<center>
<table class="CLASSIC" >
<!--
<img src = "./images/ggtc2.png">
-->

<thead>
</thead>
<tr height="40" >&nbsp;
<!--
<td style="color:white; font-size:24px; text-align:right; text-align:top">
-->

<td>

  <div style="color:white; font-size:24px; text-align:right; text-align:top;"> GOLDEN GATE TENNIS CLUB </div><br>
  <div style="color:white; text-align:center; font-size:13px;">A USTA MEMBER ORGANIZATION: ESTABLISHED 1901 GOLDEN GATE PARK:SAN FRANCISCO, CALIFORNIA <div>
</tr>

<tr><td></tr>
<tr><td></tr>
</table>

</center>


<center>
<!--
<p><p><p>
<div id="title"> Golden Gate Tennis Club</div>
<div id="app"> 
<?php 
    include("environment.inc");
    echo($KOTOSHI); 

?>
 Membership Application</div>

-->

</center>
<p style="height:8px;">
     INSTRUCTIONS:
<div id="inst" style="font-size:15px;">
 <ol>
  <li> Please completely fill out the application below. </li> 
  <li> Submit your <?php echo(KOTOSHI); ?> GGTC membership via Paypal. 
    <br>
     <ul>
       <li> Note that using Paypal  does not require an account to submit your application  </li>
        <li> Fill in the information and click the Waiver button which will bring up the Paypal button.</li>
        <li> You may also print out a copy, fill in the information, sign and date it , include payment and mail in the application. </li>
        <li> Contact the club for the address to mail in your application</li>
     </ul>
  <li> Membership runs January through December</li>

      </ul>
<!--  <li> For any questions or for more information email to memb@goldengatetennisclub.org</li> -->
 </ol>
  </div >

<table width="800"><td id="bar_tr"></td></table>

<font size = "+0">

<form id="_FORM" name="signup" action="check", method="post">

<div>
<?php

  echo "<p> "; //KOTOSHI;
?>
</div>


<!--
 <span>
  <input id = "NEW" type="checkbox" name="renew" value="N" onclick="SingleSelect('renew',this);"/> 
  New 
  <input id = "RENEW" type="checkbox" name="renew" value="R" onclick="SingleSelect('renew',this);"/>  
  Renewal 
 </span>
-->

 <p>

  First Name: <input  required value="" class="eline" name="fname" placeholder="" type="text" id="FIRST"/> &nbsp;&nbsp;&nbsp;&nbsp; 
  Last Name:  <input  required value="" class="eline e200" name="lname" type="text" id="LAST"/>  <br>
  <p>
  M<input type="checkbox" id="MALE" value="M" name="gender" onclick="SingleSelect('gender',this);"/>  
  F<input type="checkbox" id="FEMALE" value ="W" name="gender" onclick="SingleSelect('gender',this);"/> 
  &nbsp;&nbsp;&nbsp;&nbsp;
  NTRP: <input value="" class="eline pntrp" name="ntrp" maxlength="5" type="text" id = "NTRP"/> &nbsp;&nbsp;
  (2.5/3.0/3.5/4.0/4.5/5.0) (optional)
  <p>
  Address: <input  value="" class="eline paddress" name="address" type="text" id="ADDRESS"/>  
  <br>
  City:  <input value="" class="eline" name = "city" type="text" id="CITY"/> 
  &nbsp;&nbsp;&nbsp;&nbsp;
  Zip: <input value="" class="eline pzip" name="zip" maxlength="5" type="text" id ="ZIP"/>   
  <br>
  Contact Phone: (<input id="_phonecode" value = "" class="eline pphone" name="code" maxlength="3" type="text"/>)    
  <input id="_phonepre" value = "" class="eline pphone" name="phonepre"  maxlength="3" type="text"/> -   
  <input id="_phonepost" value = "" class="eline pphone" name="phonepost" maxlength="4" type="text"/>    
  <br>
  Email Address: <input class="eline" name="email" type="text" id="EMAIL"/>@<input id="URL" value="" class="eline" name="url" type="text" /> 
<!--
  <p>
  USTA Team/Captain's Name: <input value="" class="eline pteam" name="team" type="text" maxlength="9"/> 
  / <input value="" class="eline e150" name="captain" type="text"/> (if you are joining a sponsored USTA team)
-->

  <p>
  <div id="dialog" class="dialog" style="display:none">
  <!-- place holder for free or 0.99 dialog  -->
  </div>

  <b>MEMBERSHIP FEE:</b>  <br>
  General 1 year (Jan-Dec)&nbsp;
  <span style="position: relative; left: 1em">
  <input type="checkbox" id="RS" name="membership" value="RS" onclick="SingleSelect('memb',this);"/> $<?php echo RS ?>&nbsp;

  </span>
  <br>


  <p>
  <b>I am interested in helping with club activities:</b><br>
  <input type="checkbox" name="help[]" value="C"/> Club Day&nbsp;&nbsp;&nbsp;
  <input type="checkbox" name="help[]" value="T"/> Tournaments &nbsp;
  <input type="checkbox" name="help[]" value="R"/> Refreshments for Events&nbsp;
  <input type="checkbox" name="help[]" value="B"/> Board&nbsp;&nbsp;&nbsp;

  Other  <input class="eline" name="other" type="text", value=""/>
  <p>

  <div id="ERROR" style="display:none; background-color: #7bbcee; height:20px">
  </div>

  <span id="WAIVER">
      <input type="checkbox" id="paypal" value="Y" onclick="Paypal(this);" /> 
      <b>WAIVER:</b> <br>
      By checking this box, and submitting this application to Golden Gate Tennis Club, the signee above 
      <span id="NAME" style="display:none; font-weight:bold; background-color: #99cff; "></span>
      hereby agrees to 
      indemnify and hold harmless the City of San Francisco and the Golden Gate Tennis Club,
      from and against any and all liabilities for any injury which may be incurred by
      the undersigned arising out of, or in any way connected in any event sponsored by the aforenamed.
      <p>
  </span>

  <div id="PaypalButton" style="display:none">
    <input id="pptext" type="submit" class="button" value="Submit Application " /> &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="hidden" name="mode" value='<?php echo($_GET["mode"]) ?>' >
  </div>

  <p>


  <div id="Signature">Signature: <input value="" class="eline psign" name="signature" type="text"/> 
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Date: <input value="" class="eline" name="SignedDate" type="text"/> &nbsp;&nbsp;&nbsp;&nbsp;
    <div style="position:absolute; right:70; width: 20%; text-align: right; font-size:14px;">
     Rev 12/30/2018 (ro)
    </div>
  </div>  

  </form>


  <div id = "Debug"  style="margin-left !important;">
  </div>

<!--
  <table width="800"><td id="bar_tr"></td></table>
-->
</body>

</html>
