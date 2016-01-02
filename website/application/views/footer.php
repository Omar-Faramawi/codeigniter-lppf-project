<div class="container-fluid FooterWrapper">
   <div class="container">
      <div class="row">
         <div class="col-md-3 col-sm-4">
            <div class="col-xs-12">
               <img src="<?php echo base_url(); ?>public/img/footer-logo.png">
            </div>
            <div class="col-xs-12">
               <p>2015 © All Rights Reserved To Lppf</p>
            </div>
            <p class="clear"></p>
         </div>
         <div class="col-md-3 col-sm-4 FooterMenu">
            <ul>
               <li><a href="<?php echo base_url(); ?>about">About LPPF</a>
               </li>
               <li><a href="<?php echo base_url(); ?>mission">LPPF Mission</a>
               </li>
            </ul>
         </div>
         <!--<div class="col-md-3 col-sm-4">
            <ul>
               <li><a href="<?php echo base_url(); ?>publications">Publications</a>
               </li>
               <li><a href="<?php echo base_url(); ?>calendar">Calendar</a>
               </li>
            </ul>
         </div>-->
         <div class="col-md-3 col-sm-4">
            <ul>
               <li><a href="<?php echo base_url();?>terms">Terms of services</a>
               </li>
               <li><a href="<?php echo base_url();?>privacy">Privacy Policy</a>
               </li>
            </ul>
         </div>
         <div class="col-md-3 col-sm-12 ">
            <div class="col-sm-12 Subscribe">
               <p class="WhiteColor">Stay Tuned</p>
            </div>
            <div class="col-sm-12">
            </div>
            <div class="col-sm-12">
               <input type="email" class="form-control" id="subscribe" placeholder="Subscribe Now, enter your email">
            </div>
            <div class="col-sm-12">
               <p class="Rights">Proudly Created By Shetewy-Tech</p>
            </div>
         </div>
      </div>
   </div>
</div>
<script type="text/javascript">
   $(document).ready(function(){
      $(".fancybox").fancybox();
   

      var date = new Date();
      $.post('calendar/get_events', function(data){
         console.log(data);
         var events = jQuery.parseJSON(data);
         $('#calendar').fullCalendar({
         theme: true,
         header: {
            left: 'prev,next today',
            center: 'title',
            right: ''
         },
         defaultDate: date.toISOString(),
         editable: false,
         eventLimit: true, // allow "more" link when too many events
         events: events
      });
   });
      

      $('.submitPoll').click(function(){ 
         var radioButtonsDiv = $(this).parent().prev();
         var checkedChoice = radioButtonsDiv.find(".radio input:checked");
         var checkedChoiceQuestionId = checkedChoice.attr('id');
         var checkedChoiceText = checkedChoice.parent().text();
         if(checkedChoiceText != ""){
            $.post("polls/choose", {qId: checkedChoiceQuestionId, cText: checkedChoiceText}, function(result){
               console.log(result); 
               if(result == "Done"){
                  alert("Thank very much :)");
               }else{
                  alert("Sorry, Something went wrong, please try again later");
               }
               checkedChoice.prop('checked', false);
            });
         }else{
            alert("Please choose !");
         }
         
      });
      $('.submitResult').click(function(){
         var radioButtonsDiv = $(this).parent().prev().prev();
         var radioButtonsDivhtml = radioButtonsDiv.html();
         var backbtn = $(this).parent().parent().find(".back-btn");
         $(this).parent().prev().hide();
         $(this).parent().hide();
         backbtn.show();
         $.post("polls/getAnswers", {qId: $(this).attr('id')}, function(result){
            var answers = jQuery.parseJSON(result);
            radioButtonsDiv.empty();
            for(var i = 0; i < answers.length; i++){
               radioButtonsDiv.append( (i+1) + " - " + answers[i].choice + " : " + answers[i].counter + " hits<br><br>");
            }
         });
       });
      $('.back-btn').click(function(){
         location.reload();
      });

      $('#subscribe').keyup(function(e){
         if(e.keyCode == 13){
            var email = jQuery.trim($(this).val());
            var that = $(this);
            if(email != ""){
               $.post("home/subscribe", {email: email}, function(result){
                  alert(result);
                  that.val("");
               });
            }else{
               alert("Please enter a valid email address");
            }

         }
      });

      $('#search-input').keyup(function(e){
         if(e.keyCode == 13){
            window.location.href = $(this).attr('postto') + "?q=" + $(this).val();
         }
      });

   });
</script>
</body>
</html>