
 <!-- Quiz Question -->
<p>Which escape character is for new line?</p>
<form class="form-group" method="POST" action="index.php">
    <!-- we use hidden input field to send the question number to track which question we need to answer next -->
    <input type="hidden" name="q" value='<?php echo  $q ; ?>'>
    
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answer" id="a1" value="1" checked>
        <label class="form-check-label" for="a1">
             <!-- Answer 1 -->
        &lt;\f&gt;
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answer" id="a2" value="2">
        <label class="form-check-label" for="a2">
             <!-- Answer 2 -->
        &lt;\t&gt;
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answer" id="a3" value="3">
        <label class="form-check-label" for="a3">
             <!-- Answer 3-->
        &lt;\n&gt;
        </label>
    </div>
    <button class="btn btn-primary btn-block mt-4" name="submit">Next</button>
</form>