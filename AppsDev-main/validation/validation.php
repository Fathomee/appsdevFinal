<?php
	$Write="<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('UIDContainer.php',$Write);
?>

<script src="jquery.min.js"></script>
<script>
			$(document).ready(function(){
				 $("#getUID").load("mock/UIDContainer.php");
				setInterval(function() {
					$("#getUID").load("mock/UIDContainer.php");
				}, 500);
			});
		</script>

<dialog id="dialog" class="dialog">
 <div class="dialog-handler">
  <div class="close-button">
   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="close-svg">
    <path d="M18 6 6 18" />
    <path d="m6 6 12 12" />
   </svg>
  </div>
  <div class="mid-content">
   <span>Please Tap your ID for access.</span>
  </div>
  <div class="bottom-content">
   <form action="insertDB.php" method="post" class="form">
    <textarea name="id" id="getUID" placeholder="Please Tag your Card / Key Chain to display ID" rows="1" cols="1" required></textarea>
    <button type="submit" class="submits">
     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="submits-svg">
      <path d="M5 12h14" />
      <path d="m12 5 7 7-7 7" />
     </svg>
    </button>
   </form>
  </div>
 </div>
</dialog>
<dialog id="timer-dialog" class="timer-dialog">
 <div class="timer-dialog-handler">
  <div class="timer-dialog-top">
   <div class="name-container">
    <div class="name-text"><span>NAME</span></div>
    <div class="name-value" id="$name"></div>
   </div>
  </div>
  <div class="timer-dialog-mid">
   <div class="teacher-container">
    <div class="teacher-text">
     <span>CLASSROOM</span>
    </div>
    <div class="teacher-value"></div>
   </div>
  </div>
  <div class="timer-dialog-bottom">
   <select id="timeSelect" class="timeSelect">
    <option value="60">60 minutes</option>
    <option value="30">30 minutes</option>
    <option value="90">1 hour and 30 minutes</option>
   </select>
   <button class="send" id="startButton">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
     stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="submit-timer">
     <path d="M5 12h14" />
     <path d="m12 5 7 7-7 7" />
    </svg>
   </button>
  </div>
 </div>
 </div>
</dialog>