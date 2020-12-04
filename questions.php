<?php
require_once 'header.php';
ini_set('display_errors', 1);
?>
<body class="container questions-container">
<div>
    <h2 class="container-title container-title-recollection">Recollection - Superhuman Powers</h2>
    <p class="body-font no-space">Please fill in the blanks as accurately as you can with one word. If you do not remember the information, just leave the space blank.</p>
</div>


<form action="apis/save-timestamp-questions-answers.php" method="post">
    <!-- <h5 class="container-title listening-title"> - Robots Smarter than Humans by 2029 - </h5> -->

    <p>1. Technology trailblazer Elon Musk has <input class="questions-input" name="answer1"> a pig with a computer chip implanted in her brain that could pave the way to computer-to-brain interfaces in humans.</p>

    <p>2. Mr Musk has a near-unrivalled record in <input class="questions-input" name="answer2"> technology, from electric cars and hyperloop travel to space tourism. Gertrude the pig showcases his latest ambition - to allow us to control computers with our brains.</p>

    <p>3. Conversely, computers could <input class="questions-input" name="answer3"> our brainpower and abilities. The interface is part of a tech startup called Neuralink.</p>

    <p>4. Mr Musk announced that <input class="questions-input" name="answer4"> would soon begin on humans.</p>

    <p>5. He believes the technology represents a giant <input class="questions-input" name="answer5"> into the future and will considerably change our lives by giving us superhuman powers.</p>

    <p>6. The results shown in Gertrude the pig were somewhat <input class="questions-input" name="answer6"> in comparison to the potential Mr Musk envisages the technology will one day deliver.</p>

    <p>7. He hopes Neuralink will help people with neurological conditions like <input class="questions-input" name="answer7">, dementia and headaches.</p>

    <input name="pageName" style="display: none" value="questionsPage">
    <!-- <p>8. His thinking has stayed the same but everyone <input class="questions-input" name="answer8"> has changed the way they think.</p>

    <p>9. He said: "My views are not <input class="questions-input" name="answer9"> anymore. I've actually stayed consistent. It's the rest of the world that's changing its view."</p>

    <p>10. He highlighted examples of <input class="questions-input" name="answer10">  things we use, see or read about every day. These things make us believe that computers have intelligence.</p>

    <p>11. He said people think differently now: "Because the public has seen things like Siri [the iPhone's voice-recognition technology] where you talk to a computer; they've seen the Google's <input class="questions-input" name="answer11">  cars."</p>



<button id="btnTimestamp" name="timestamp" class="btn-info click">Next</button> -->


    <div class="button-wrap-questions no-fixed">
        <button id="btnTimestamp" name="timestamp" class="btn-info click rad-button good flat questions-page-next-btn">Finish</button>
    </div>
</form>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>