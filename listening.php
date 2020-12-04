<?php
require_once 'header.php';

?>
<body class="container">

<div id="container">

    <div>
        <h2 class="container-title">Listening Task</h2>
        <p class="body-font">Please listen carefully to the sound recording. To start the recording, click on the PLAY button.</p>
        <p class="body-font"></p>
    </div>

    <audio id="audio">
        <source src="ai.mp3" type="audio/mp3" onended="showNextBtn()">
    </audio>

    <button style="display: none" onload="setTimeout(myFunction, 95000)"></button>
   <div class="wrapper">

        <div class="player circle">
            <div class="buffering circle animated"></div>
            <div class="triangle"></div>
        </div>

        <form action="questions.php" method="post">
            <input name="pageName" style="display: none" value="listeningPage">
            <!-- <button id="btnTimestamp" name="timestamp" class="btn-info click">Next</button> -->
            <div class = "button-wrap">
                <button id="btnTimestamp" name="timestamp" class="btn-info click rad-button good flat btn-next-listening">Next</button>
            </div>
        </form>

    </div>


    </div>

</div>



</div>

<script>
    const audio = document.getElementById("audio");
    let audioPlaying = false;

    document.querySelector(".player").addEventListener('click', () => {
        audio.play();
        audioPlaying = true;
        document.querySelector(".buffering").style.visibility = 'visible';

        // 20sec
        setTimeout(function(){
            showAlertModal('myModal1', 1);
        }, 20000);

        // 21sec
        setTimeout(function(){
            showAlertModal('myModal2', 2);
        }, 21000);



        // 40sec
        setTimeout(function(){
            showAlertModal('myModal3', 3);
        }, 40000);

        // 41sec
        setTimeout(function(){
            showAlertModal('myModal4', 4);
        }, 41000);



        // 60sec
        setTimeout(function(){
            showAlertModal('myModal6', 6);
        }, 60000);

        // 61sec
        setTimeout(function(){
            showAlertModal('myModal5', 5);
        }, 61000);



        // 80sec
        setTimeout(function(){
            showAlertModal('myModal7', 7);
        }, 80000);


        // 81sec
        setTimeout(function(){
            showAlertModal('myModal8', 8);
        }, 81000);



        // 100sec (1'40)
        setTimeout(function(){
            showAlertModal('myModal9', 9);
        }, 100000);



        // 101sec (2min)
        setTimeout(function(){
            showAlertModal('myModal10', 10);
        }, 101000);


        // 120sec
        setTimeout(function(){
            showAlertModal('myModal11', 11);
        }, 120000);


        // 121sec
        setTimeout(function(){
            showAlertModal('myModal12', 12);
        }, 121000);

    });

    audio.addEventListener("ended", function() {
        document.querySelector(".buffering").style.visibility = 'hidden';
        document.querySelector(".player").style.backgroundColor = 'lightgray';
        document.querySelector(".btn-next-listening").style.backgroundColor = '#259B24';
    });

    function showAlertModal(modalId, modalNumber) {
        // Get the modal
        var modal = document.getElementById(modalId);
        console.log(modal)
        // var span = document.querySelector(`#${modalId} .close`);
        var span = document.getElementsByClassName("close")[modalNumber - 1];
        console.log(span)

        modal.style.display = "block";

        span.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    }

    function showAlert() {
        alert('Keep an eye on the time.');
    }

    function showAlert2() {
        let today = new Date();
        let time = today.getHours() + ":" + today.getMinutes();
        alert(`It is ${time} o'clock.`);
    }

    function showAlert3() {
        alert('Audio is almost over.');
    }

</script>

</script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>