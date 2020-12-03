<?php
require_once 'header.php';

?>

<body class="container pink">
      <h2 class="container-title">Sustained Attention Task</h2>
      <div class="container-description">
        <p class="body-font">In this experiment you will be presented with the digits 1 to 9 in the center of the screen.
          Your task is to press the spacebar in response to each digit, except for when the digit is '3'. 
        </p>
        <p class="body-font">E.g. if you see the digit '1', press the spacebar. If you see a digit '3', DO NOT press the spacebar.
        </p>
        <p class="body-font"> Speed and accuracy are of equal importance. Place your finger on the spacebar and click START.</p>
    </div>
        
    <div id="numbers-container">
    </div>
    <div id="number-of-space-pressed">
    </div>
    <!-- <button id="number-of-space-pressed-btn">PRESS ME</button> -->

    <!-- <div class="button-wrap attention-page-btn-wrap">
        <button id="btnTimestamp" name="timestamp" class="btn-info click rad-button attention-page-start-btn">Start</button>
    </div> -->

    <form action="apis/save-timestamp-attention.php" method="post">
        <input name="pageName" style="display: none" value="attentionPage">
        <div class = "button-wrap">
            <button id="btnTimestamp" name="timestamp" class="btn-info click rad-button good flat btn-next-listening attention-page-next-btn">Next</button>
        </div>
    </form>

    <div class="button-wrap attention-page-btn-wrap">
      <button id="start" class="btn-info click rad-button attention-page-start-btn">Start</button>
    </div>

    <div id="timer"></div>

    <script>
        let arrayOfNumbers = [];
        let numbersContainer = document.getElementById("numbers-container");
        let noOfSpacePressed = 0;
        let count;
        let seconds = 45;
        let timer;

        document.addEventListener('keyup', (e) => {
          if(e.keyCode == 32) {
            noOfSpacePressed++;
            console.log('pressed', noOfSpacePressed, 'times');
          }
        });

        // INITIALIZE ARRAY OF NUMBERS

        for (let i=0; i<10; i++) {
          arrayOfNumbers.push(Math.floor(i));
        }

        function shuffleArray(arr) {
          arr.sort(() => Math.random() - 0.5);
        }

        document.querySelector("#start").addEventListener('click', () => {
          document.querySelector(".container-description").style.visibility = 'hidden';
          document.querySelector(".attention-page-start-btn").style.visibility = 'hidden';

          startTimer();

          setTimeout(() => {
            startNumbers();
          }, 1500);
        });

        function startNumbers() {

          shuffleArray(arrayOfNumbers);
          

          for (let i=0; i<arrayOfNumbers.length; i++) {
            (function(ind) {
                document.getElementById('start').style.visibility = 'hidden';
                // setTimeout(function(){console.log(arrayOfNumbers[ind]);}, 1000 * ind);
                setTimeout(function(){
                  showNumber(arrayOfNumbers[ind]);
                  if(ind === arrayOfNumbers.length-1)
                  // count++;
                    showNextBtn();
                }, 500 * ind);
            })(i);
          }
        }


        function showNextBtn() {
          document.querySelector('.attention-page-next-btn').style.visibility = 'visible';
          document.querySelector('.attention-page-next-btn').style.backgroundColor = '#259B24';
          document.querySelector('#numbers-container').style.visibility = 'hidden';
        }


        function showNumber(number) {
          numbersContainer.innerHTML = '';
          console.log(number);

          let numberNode = document.createElement("p");
          numberNode.classList.add("number-font-size");
          numberNode.style.color = getRandomColor();
          let textnode = document.createTextNode(number);

          numberNode.appendChild(textnode);
          document.getElementById("numbers-container").appendChild(numberNode);
        }


        function getRandomColor() {
          var letters = '0123456789ABCDEF';
          var color = '#';
          for (var i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
          }
          return color;
        }

        // TIMER


        function myFunction() {
            if(seconds <= 45) { //I want it to say 1:00, not 60
              if(seconds<10)
                document.getElementById("timer").innerHTML = '00:0' + seconds;
              else
                document.getElementById("timer").innerHTML = '00:' + +seconds;
            }
            if (seconds > 0 ) { // so it doesn't go to -1
                seconds--;
            } else {
                clearInterval(timer);
                document.getElementById('btnTimestamp').click();
            }
        }
        
        function startTimer() {
          {
              timer = window.setInterval(function() {
                  myFunction();
              }, 1000); // every second
            }
        }

    </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
