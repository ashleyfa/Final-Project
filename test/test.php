<<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<script type="text/javascript" src="passtest.js"></script>
<div class="tutorialWrapper">
    <form>
        <div class="fieldWrapper">
            <label for="pass1">Password:</label>
            <input type="password" name="pass1" id="pass1">
        </div>
        <div class="fieldWrapper">
            <label for="pass2">Confirm Password:</label>
            <input type="password" name="pass2" id="pass2" onkeyup="checkPass(); return false;">
            <span id="confirmMessage" class="confirmMessage"></span>
        </div>
    </form>
</div>
</body>
</html>