

<div class="wrapper-form">
  <form action="https://leashtime.com/prospect-request.php" method="post" name="prospectinforequest" >
    <input type='hidden' id='pbid' name='pbid' value='448'>
      <input type='hidden' id='goback' name='goback' value='https://houstonsbestpetsitters.com/thank-you/'> 
      <input type='text' style='display:none' id='address3' name='address3' value=''> 
      <input type='hidden' id='modelnum' name='modelnum' value=''> 
        <label for='fname' class="bodyText">First Name:</label>
            <input name='fname' class="formGrey" id='fname' size="30" maxlength="45" />
         
            <label for='lname' class="bodyText">Last Name:</label>
            <input name='lname' class="formGrey" id='lname' size="30" maxlength="45" />
         

            <label for='phone' class="bodyText" >Phone:</label>
            <input name='phone' class="formGrey" id='phone' size="30" maxlength="45" />
          
            <label for='whentocall' class="bodyText">Best time for us to call:</label>
            <input name='whentocall' class="formGrey" id='whentocall' size="30" maxlength="45" />
          

            <label for='email' class="bodyText" required>Email:</label>
            <input name='email' class="formGrey" id='email' size="30" maxlength="60" />

            <label for='email' class="bodyText" required>Please Confirm Your Email Address:</label>
            <input name='email2' class="formGrey" id='confirm_email' size="30" maxlength="60" />
            <span id='message'></span>
        
            <label for='street1' class="bodyText">Address:</label>
            <input name="street1" type="text" class="formGrey" id="street1" value="" size="30" />
          
            <label for='street2' class="bodyText">Address2:</label>
            <input name="street2" type="text" class="formGrey" id="street2" value="" size="30" />
          
            <label for='city' class="bodyText">City</label>
            <input name="city" type="text" class="formGrey" id="city" value="" size="20" />
            <label for='city' class="bodyText">State</label>
            <select name="state" class="petform"> 
              <option value="" selected="selected">Select a State</option> 
              <option value="AL">Alabama</option> 
              <option value="AK">Alaska</option> 
              <option value="AZ">Arizona</option> 
              <option value="AR">Arkansas</option> 
              <option value="CA">California</option> 
              <option value="CO">Colorado</option> 
              <option value="CT">Connecticut</option> 
              <option value="DE">Delaware</option> 
              <option value="DC">District Of Columbia</option> 
              <option value="FL">Florida</option> 
              <option value="GA">Georgia</option> 
              <option value="HI">Hawaii</option> 
              <option value="ID">Idaho</option> 
              <option value="IL">Illinois</option> 
              <option value="IN">Indiana</option> 
              <option value="IA">Iowa</option> 
              <option value="KS">Kansas</option> 
              <option value="KY">Kentucky</option> 
              <option value="LA">Louisiana</option> 
              <option value="ME">Maine</option> 
              <option value="MD">Maryland</option> 
              <option value="MA">Massachusetts</option> 
              <option value="MI">Michigan</option> 
              <option value="MN">Minnesota</option> 
              <option value="MS">Mississippi</option> 
              <option value="MO">Missouri</option> 
              <option value="MT">Montana</option> 
              <option value="NE">Nebraska</option> 
              <option value="NV">Nevada</option> 
              <option value="NH">New Hampshire</option> 
              <option value="NJ">New Jersey</option> 
              <option value="NM">New Mexico</option> 
              <option value="NY">New York</option> 
              <option value="NC">North Carolina</option> 
              <option value="ND">North Dakota</option> 
              <option value="OH">Ohio</option> 
              <option value="OK">Oklahoma</option> 
              <option value="OR">Oregon</option> 
              <option value="PA">Pennsylvania</option> 
              <option value="RI">Rhode Island</option> 
              <option value="SC">South Carolina</option> 
              <option value="SD">South Dakota</option> 
              <option value="TN">Tennessee</option> 
              <option value="TX">Texas</option> 
              <option value="UT">Utah</option> 
              <option value="VT">Vermont</option> 
              <option value="VA">Virginia</option> 
              <option value="WA">Washington</option> 
              <option value="WV">West Virginia</option> 
              <option value="WI">Wisconsin</option> 
              <option value="WY">Wyoming</option>
            </select> 
          <label for='city' class="bodyText">Zip</label>    
              <input name="zip" type="text" class="formGrey" id="zip" value="" size="10"required/>
          
            <label for='pets' class="bodyText">Tell us about your pets (names, kind):</label>
         
           <textarea name='pets' cols="50" rows="3" class="formGrey" id='pets'></textarea>
         
            <label for='note' class="bodyText">How can we help you?</label>

          
           <textarea name='note' cols="50" rows="4" class="formGrey" id='note'></textarea>
         
        <label for='x-std-referralcode' class="bodyText">How did you hear about us?</label>



        <select name='x-std-referralcode' id='x-std-referralcode' onChange='checkReferral(this)' class='standardInput'>

      <option value=''>Choose One</option>
      <option style="color:black" value='22'>Angie's List</option>
      <option style="color:black" value='23'>Web Search</option>
      <option style="color:black" value='25'>NAPPS</option>
      <option style="color:black" value='26'>Vet</option>
      <option style="color:black" value='27'>Friend</option>
      <option style="color:black" value='34'>Other</option>
      <option style="color:black" value='35'>Yelp</option>

      </select>
      
       <label for='x-std-referralnote' class="bodyText">If you were referred by a veterinarian or one of our clients, please give us their name so we can say thank you.:</label>
       <input  class="formGrey" id='x-std-referralnote' name='x-std-referralnote' value=''  autocomplete='off'>

          <!-- <label for='note' class="bodyText">Three favorite movies?</label>

          <textarea name='x-multiline-Favorite Movies' cols="50" rows="4" class="formGrey" id='x-multiline-Favorite Movies'></textarea> -->
        <!--  <label for='note' class="bodyText">Underwear?</label> -->

         <!--  <div class="radios">
              <input type="radio" name="x-radio-Underwear" value="briefs" class="radio" /> <span class="spacer">briefs</span>
              <input type="radio" name="x-radio-Underwear" value="boxers" class="radio" /> <span class="spacer">boxers</span>
              <input type="radio" name="x-radio-Underwear" value="bloomers"  class="radio"/> <span class="spacer">bloomers</span>
              </div> -->
          <!--   <label for='note' class="bodyText">Birthday?</label>

         
              <input name="x-oneline-Birthday"  size="30" maxlength="60" class="formGrey"/> -->
         
         <div class="hide"  style='display:none'>
           Would you like to schedule a meeting with us? <input name='meet' id='yesmeet' type='radio' onChange='toggleMeeting(this)'> <label for='yesmeet'>yes</label> <input id='nomeet' name='meet' type='radio' onclick='toggleMeeting(this)' CHECKED> <label for='nomeet'>no</label>
         </div>   
          

          <div id='meetingdatetr0' style='display:none'>
          Please tell us when is convenient for you:</div>
          <div id='meetingdatetr1' style='display:none'>
          
          Date: <input DISABLED class="dateInput" id="meetingdate1" name="x-oneline-meetingdate1" autocomplete="off" size=12 
                    value='' onFocus='if(this.value=="Click there ===>") this.value="";'> 
                <img src="https://leashtime.com/art/popcalendar.gif" 
                    onclick='dateButtonAction(this,document.getElementById("meetingdate1"),"1","15","2005")'>
          
          
           at what time? <input DISABLED id="meetingtime1" name="x-oneline-meetingtime1" size=10>
          
          </div>
          <div id='meetingdatetr2' style='display:none'>
          
          Date: <input DISABLED class="dateInput" id="meetingdate2" name="x-oneline-meetingdate2" autocomplete="off" size=12 
                    value='' onFocus='if(this.value=="Click there ===>") this.value="";'> 
                <img src="https://leashtime.com/art/popcalendar.gif" 
                    onclick='dateButtonAction(this,document.getElementById("meetingdate2"),"1","15","2005")'>

          
          
           at what time? <input DISABLED id="meetingtime2" name="x-oneline-meetingtime2" size=10>
          
          </div>
          <div id='meetingdatetr3' style='display:none'>
          
          Date: <input DISABLED class="dateInput" id="meetingdate3" name="x-oneline-meetingdate3" autocomplete="off" size=12 
                    value='' onFocus='if(this.value=="Click there ===>") this.value="";'> 
                <img src="https://leashtime.com/art/popcalendar.gif" 
                    onclick='dateButtonAction(this,document.getElementById("meetingdate3"),"1","15","2005")'>
          
          
           at what time? <input DISABLED id="meetingtime3" name="x-oneline-meetingtime3" size=10>

          
          </div>
          
          
            <noscript>
            <span style='font-size:2em;font-weight:bold;color:red;'>This form will not work unless you enable Javascript on this device!</span>
            <p>Here&apos;s how: <ul>
            <li>on the <a target=help href='http://timeread.hubpages.com/hub/How-to-disable-or-enable-JavaScript-on-the-iPad-iPhone-or-any-iOS-device'>iPad</a>
            <li>on the <a target=help href='http://timeread.hubpages.com/hub/How-to-disable-or-enable-JavaScript-on-the-iPad-iPhone-or-any-iOS-device'>iPhone</a>
            <li>on an <a target=help href='http://timeread.hubpages.com/hub/How-to-enable-disable-JavaScript-on-the-Droid-Android-phone'>Android Phone</a>
            <li>in <a target=help href='http://enable-javascript.com/'>Internet Explorer</a>
            <li>in <a target=help href='http://enable-javascript.com/'>Google Chrome</a>
            <li>in <a target=help href='http://enable-javascript.com/'>Firefox</a>
            </ul>
            </noscript>

            <div class="formfooter">
              <input class="button" type="button" value='Send Request' onclick='checkAndSend()' />
              <!-- <input class="button" type="submit" value='Send Request' /> -->

            </div>
            
                                
  </form>
</div><!-- wrapper form -->

<script language='javascript'>var pathHome = "./";</script>
<script language='javascript' src='https://leashtime.com/popcalendar.js'></script>
<script language='javascript' src='https://leashtime.com/check-form.js'></script>
<script language='javascript'>


        
function jstrim(str) {
  return str.replace(/^\s\s*/, '').replace(/\s\s*$/, '');
}

function validEmail(src) {
  var regex = /^[a-zA-Z0-9._%+-`'`]+@(?:[a-zA-Z0-9-]+\.)+[a-zA-Z]{2,4}$/;  // checks for ' character
  return regex.test(src);

}
// function checkEmail(theForm) {
//     if (theForm.EMAIL_1.value != theForm.EMAIL_2.value)
//     {
//         alert('Those emails don\'t match!');
//         return false;
//     } else {
//         return true;
//     }
// }
function checkAndSend() {
    setPrettynames('meetingdate', 'Meeting Date', 'meetingtime', 'Meeting Time','fname','First name', 'lname', 'Last name');
    var mincontactmsg, args;
    var args = new Array('fname','','R','lname','','R');   
    
  if(!validEmail(document.prospectinforequest.email.value) &&
     jstrim(document.prospectinforequest.phone.value) == '') {
         args[args.length] = 'Please supply an email address or phone number where we can reach you.';
         args[args.length] = '';
         args[args.length] = 'MESSAGE';
    }
  if(document.getElementById("yesmeet") && document.getElementById("yesmeet").checked &&
          !(jstrim(document.getElementById("meetingdate1").value)
          || jstrim(document.getElementById("meetingdate2").value)
          || jstrim(document.getElementById("meetingdate3").value))) {
         args[args.length] = 'At least one meeting date is required if you want a meeting.';
         args[args.length] = '';
         args[args.length] = 'MESSAGE';
    }
  if(document.getElementById("yesmeet") && document.getElementById("yesmeet")) {
        args[args.length] = 'meetingdate1';
        args[args.length] = '';
        args[args.length] = 'isDate';
        args[args.length] = 'meetingdate1';
        args[args.length] = 'NOT';
        args[args.length] = 'isPastDate';
        args[args.length] = 'meetingdate2';
        args[args.length] = '';
        args[args.length] = 'isDate';
        args[args.length] = 'meetingdate2';
        args[args.length] = 'NOT';
        args[args.length] = 'isPastDate';
        args[args.length] = 'meetingdate3';
        args[args.length] = '';
        args[args.length] = 'isDate';
        args[args.length] = 'meetingdate3';
        args[args.length] = 'NOT';
        args[args.length] = 'isPastDate';
        args[args.length] = 'meetingtime1';
        args[args.length] = 'meetingdate1';
        args[args.length] = 'RIFF';
        args[args.length] = 'meetingtime2';
        args[args.length] = 'meetingdate2';
        args[args.length] = 'RIFF';
        args[args.length] = 'meetingtime3';
        args[args.length] = 'meetingdate3';
        args[args.length] = 'RIFF';
    }
  if(MM_validateEnhancedForm(args)) {
    if(document.getElementById('modelnum')) document.getElementById("modelnum").value = "448";
    document.prospectinforequest.submit();
  }
}

function toggleMeeting(el) {
    var rowShow = navigator.appName.indexOf('Internet Explorer') >= 0 ? 'block' : 'table-row';
    var display = el.id == 'yesmeet' ? rowShow : 'none';
    var disabled = el.id == 'nomeet';
    document.getElementById("meetingdatetr0").style.display = display;
    document.getElementById("meetingdatetr1").style.display = display;
    document.getElementById("meetingdatetr2").style.display = display;
    document.getElementById("meetingdatetr3").style.display = display;
    document.getElementById("meetingdate1").disabled = disabled;
    document.getElementById("meetingtime1").disabled = disabled;
    document.getElementById("meetingdate2").disabled = disabled;
    document.getElementById("meetingtime2").disabled = disabled;
    document.getElementById("meetingdate3").disabled = disabled;
    document.getElementById("meetingtime3").disabled = disabled;
}

var localDateFormat = 'mm/dd/yyyy';

function dateButtonAction(ctl, date, month, day, year) {
  var datePosition = getAbsolutePosition(document.getElementById(date.id));
  var offset = addOffsets(getTabPageOffset(date), getContainerOffset(date, 'Sheet'), getContainerOffset(date, 'contentLayout'));
  showCalendar(ctl, date, localDateFormat,"en",1,datePosition.x-offset.x, datePosition.y-offset.y);
}

function getAbsolutePosition(element) {
    var r = { x: element.offsetLeft, y: element.offsetTop };
    if (element.offsetParent) {
      var tmp = getAbsolutePosition(element.offsetParent);
      r.x += tmp.x;
      r.y += tmp.y;
    }
    return r;
}

function addOffsets() {
    var r = {x: 0, y: 0};
    for(var i=0; i < addOffsets.arguments.length; i++) {
        r.x += addOffsets.arguments[i].x;
        r.y += addOffsets.arguments[i].y;
    }
    return r;
}

function getTabPageOffset(element) {
    // since tabs hide divs, the Y coord is thrown off by their hidden heights.  return their heights.
    while(element.offsetParent) {
        var parent = element.offsetParent;
    if(parent.id && parent.id.indexOf('tabpage_') == 0) return {x: parent.offsetLeft, y: parent.offsetTop-23}; // 23 for tab height
    element = parent;
    }
    return {x: 0, y: 0};
}

function getContainerOffset(element, containerClassName) {
    // since tabs hide divs, the Y coord is thrown off by their hidden heights.  return their heights.
    while(element.offsetParent) {
        var parent = element.offsetParent;
    if(parent.className == containerClassName) return {x: parent.offsetLeft, y: parent.offsetTop};
    element = parent;
    }
    return {x: 0, y: 0};
}

function checkReferral(el) {
  if(el.options[el.selectedIndex].value == -1) {
    el.selectedIndex = 0;
    alert('Please select a more specific option.');
  }
  var referralnote = document.getElementById('x-std-referralnote');
  if(referralnote) referralnote.disabled = el.selectedIndex == 0;
}


window.onload = onWindowLoad;

function onWindowLoad() {
  init();
  if(document.getElementById('x-std-referralnote')) document.getElementById('x-std-referralnote').title = 'A referral option must be chosen to enter a note here.';
  if(document.getElementById('x-std-referralcode')) checkReferral(document.getElementById('x-std-referralcode'));
}
</script>