<?php
require_once 'header.php';

?>
<body class="container">

    <div id="container">

    <div>
        <h2 class="container-title">Listening Task</h2>
        <p class="body-font">Please listen carefully to the sound recording.</p>
        <p class="body-font"></p>
    </div>

    <audio id="audio">
        <source src="ai.mp3" type="audio/mp3" onended="showNextBtn()">
    </audio>        
    
    <button style="display: none" onload="setTimeout(myFunction, 95000)"></button>
        
        
        <div id='alrt' style="fontWeight = 'bold'"></div>

        <div class="wrapper">

            <div class="player circle">
                <div class="buffering circle animated"></div>
                <div class="triangle"></div>
            </div>

            <form action="apis/save-timestamp-listening.php" method="post">
                <input name="pageName" style="display: none" value="listeningPage">
                <!-- <button id="btnTimestamp" name="timestamp" class="btn-info click">Next</button> -->
                <div class = "button-wrap">
                    <button id="btnTimestamp" name="timestamp" class="btn-info click rad-button good flat btn-next-listening">Next</button>
                </div>
            </form>

        </div> 


            <!-- Trigger/Open The Modal -->
            <!-- <button id="myBtn">Open Modal</button> -->

            <!-- The Modal -->
            <div id="myModal1" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span>To close this AD, click the X on the right.</span>
                <span class="close">&times;</span>
                <div class="ad-container">
                    <img src='imgs/bank-ads.jpeg' />
                </div>
            </div>

        </div>

        </div> 

        <div id="myModal2" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span>To close this AD, click the X on the right.</span>
                <span class="close">&times;</span>
                <div class="ad-container">
                    <img src='imgs/bike.jpg' />
                </div>
            </div>
        </div>

        <div id="myModal3" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span>To close this AD, click the X on the right.</span>
                <span class="close">&times;</span>
                <div class="ad-container">
                    <img src='imgs/remedii.jpg' />
                </div>
            </div>
        </div>

        <div id="myModal4" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span>To close this AD, click the X on the right.</span>
                <span class="close">&times;</span>
                <div class="ad-container">
                    <img src='imgs/vegan.jpg' />
                </div>
            </div>
        </div>


        <div id="myModal5" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span>To close this AD, click the X on the right.</span>
                <span class="close">&times;</span>
                <div class="ad-container">
                    <img src='imgs/movie.jpg' />
                </div>
            </div>
        </div>

        
        <div id="myModal6" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span>To close this AD, click the X on the right.</span>
                <span class="close">&times;</span>
                <div class="ad-container">
                    <img src='imgs/mouthwash.jpg' />
                </div>
            </div>
        </div>


        <div id="myModal7" class="modal">
            <div class="modal-content">
                <span>To close this AD, click the X on the right.</span>
                <span class="close">&times;</span>
                <div class="ad-container">
                    <img src='imgs/stop.jpg' />
                </div>
            </div>
        </div>

        <div id="myModal8" class="modal">
            <div class="modal-content">
                <span>To close this AD, click the X on the right.</span>
                <span class="close">&times;</span>
                <div class="ad-container">
                    <img src='imgs/greencoffee.jpg' />
                </div>
            </div>
        </div>


        <div id="myModal9" class="modal">
            <div class="modal-content">
                <span>To close this AD, click the X on the right.</span>
                <span class="close">&times;</span>
                <div class="ad-container">
                    <p>Hold on, a little more left of the audio.</p>
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

            // 2sec
            setTimeout(function(){
                showAlertModal('myModal1', 1);
            }, 2000);

            // 3sec
            setTimeout(function(){
                showAlertModal('myModal2', 2);
            }, 3000);



            // 22sec
            setTimeout(showAlert, 22000);     

            // 23sec
            setTimeout(function(){
                showAlertModal('myModal3', 3);
            }, 23000);



            // 42sec
            setTimeout(function(){
                showAlertModal('myModal4', 4);
            }, 42000);

            // 43sec
            setTimeout(function(){
                showAlertModal('myModal5', 5);
            }, 43000);



            // 62sec
            setTimeout(function(){
                showAlert2();
            }, 62000);

            // 63sec
            setTimeout(function(){
                showAlertModal('myModal6', 6);
            }, 63000);



            // 82sec
            setTimeout(function(){
                showAlertModal('myModal7', 7);
            }, 82000);


            // 85sec
            setTimeout(function(){
                showAlertModal('myModal8', 8);
            }, 85000);




            // 102
            setTimeout(function(){
                showAlertModal('myModal9', 9);
            }, 102000);

            // 105
            setTimeout(showAlert3, 105000);    


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