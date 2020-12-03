<?php
require_once 'header.php';

?>
<body class="container">

    <div id="container">

    <div>
        <h2 class="container-title">Listening Task</h2>
        <p class="body-font">Please listen carefully to the sound recording.</p>
    </div>
        
       

    <audio id="audio">
        <source src="listening.mp3" type="audio/mp3" onended="showNextBtn()">
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
        <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Some text in the Modal..</p>
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
            setTimeout(showAlertModal, 3000); 
            setTimeout(showAlert, 5000);       
        });

        audio.addEventListener("ended", function() {
            document.querySelector(".buffering").style.visibility = 'hidden';
            document.querySelector(".player").style.backgroundColor = 'lightgray';
            document.querySelector(".btn-next-listening").style.backgroundColor = '#259B24';
        });

        function showAlertModal() {
             // Get the modal
             var modal = document.getElementById("myModal");

            // Get the button that opens the modal
            // var btn = document.getElementById("myBtn");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks the button, open the modal 
            // btn.onclick = function() {
            modal.style.display = "block";
            // }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        }

        function showAlert() {
            alert('Keep an eye on the time.');
        }
    
    </script>

    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>