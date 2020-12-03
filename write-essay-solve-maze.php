<?php
require_once 'header.php';

?>
<body class="container maze-page-container">
    <div id="essay-container" class="align-self-center" style="margin: auto">

        <form action="apis/save-timestamp-essay-maze.php" method="post">
            <label>Please write a short essay of around 150 words on the subject: </label><br>
            <h4> If you were to create a robot, what would that robot do?</h4>
            <textarea name="essay" maxlength="500" rows="20" cols="100"></textarea><br><br>
            <input name="pageName" style="display: none" value="essayMazePage">
            <button name="timestamp" class="btn-info click">Finish</button>
        </form>
    </div>
    <div id="maze-container">
        <div id="page">
            <!--     <div id="Message-Container">
                <div id="message">
                    <h1>Congratulations!</h1>
                    <p>You are done.</p>
                    <p id="moves"></p>
                    <input id="okBtn" type="button" onclick="toggleVisablity('Message-Container')" value="Cool!" />
                </div>
                </div>-->
            <div id="menu">
                <div class="custom-select">
                    <select id="diffSelect">
                        <!--<option value="10">Easy</option>-->
                        <option value="15">Medium</option>
                        <option value="25">Hard</option>
                        <!--<option value="38">Extreme</option> -->
                    </select>
                </div>
                <input id="startMazeBtn" type="button" onclick="makeMaze()" value="Start" />
            </div>
            <div id="view">
                <div id="mazeContainer">
                    <canvas id="mazeCanvas" class="border" height="400" width="400"></canvas>
                </div>
            </div>
        </div>
    </div>

    </body>

    <script>
        let intervalID = window.setInterval(toggleEvery30s, 30000);

        function toggleEvery30s () {
            let x = document.querySelector("#maze-container");
            let y = document.querySelector("#essay-container");

            if (x.style.visibility === "hidden") {
                x.style.visibility = "visible";
                y.style.visibility = "hidden";
            } else {
                x.style.visibility = "hidden";
                y.style.visibility = "visible";
            }
        }

        // toggleEvery30s();
    </script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.18/jquery.touchSwipe.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.18/jquery.touchSwipe.min.js'></script>
<script src="js/maze.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>