<?php
require_once 'header.php';

?>
<body class="container">
    <h2>Please answer Questions 1 to 6:</h2>
      <form action="apis/save-timestamp-questions-answers.php" method="post">
          <p>Complete the sentences below.</p>
          <p>Write NO MORE THAN THREE WORDS for each answer.</p>
          <h3>Museum of the History of Science</h3>

          <p>1. He works for <input name="answer1"> as Director of Engineering.</p>

          <p>2. He is one of the world's leading <input name="answer2"> on artificial intelligence (A.I.). Mr Kurzweil believes computers will be able to learn from experiences, just like humans.</p>

          <p>3. He also thinks they will be able to tell <input name="answer3"> and stories, and even flirt.</p>

          <p>4. Kurzweil's 2029 prediction is a lot <input name="answer4"> than many people thought.</p>

          <p>5. The scientist said that in 1999, many A.I. experts said it would be hundreds of <input name="answer5"> before a computer was more intelligent than a human.</p>

          <p>6. He said that it would not be long before computer intelligence is one billion times more powerful than the human <input name="answer6"></p>
          
          <p>7. Mr Kurzweil <input name="answer7"> that many years ago, people thought he was a little crazy for predicting computers would be as intelligent as humans.</p>

          <p>8. His thinking has stayed the same but everyone <input name="answer8"> has changed the way they think.</p>

          <p>9. He said: "My views are not <input name="answer9"> anymore. I've actually stayed consistent. It's the rest of the world that's changing its view."</p>

          <p>10. He highlighted examples of <input name="answer10">  things we use, see or read about every day. These things make us believe that computers have intelligence.</p>

          <p>11. He said people think differently now: "Because the public has seen things like Siri [the iPhone's voice-recognition technology] where you talk to a computer; they've seen the Google's <input name="answer11">  cars."</p>

          
          <input name="pageName" style="display: none" value="questionsPage">
        <!-- <button id="btnTimestamp" name="timestamp" class="btn-info click">Next</button> -->


        <div class = "button-wrap button-wrap-questions">
            <button id="btnTimestamp" name="timestamp" class="btn-info click rad-button good flat questions-page-next-btn">Next</button>
        </div>
    </form>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>