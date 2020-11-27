<?php
require_once 'header.php';

?>

<h3>
    Here you write an essay
</h3>

<body class="container">
<div class="align-self-center" style="margin: auto">

    <form action="apis/save-timestamp-essay.php" method="post">
        <label>Write an essay of 200 words</label><br>
            <textarea rows="20" cols="100"></textarea><br><br>
        <button name="timestamp" class="btn-info click">Next</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>