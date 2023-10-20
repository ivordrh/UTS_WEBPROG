<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Tugas Project Web Programming </title>
</head>

<body>
    <h1> <b> Tugas Project Web Progamming</b> </h1>
    <br>
    <br>
    <form method="post" enctype="multipart/form-data">
        <label for="width"> Width :</label>
        <input type="text" name="tWidth"> <select id="size" name="size">
            <option value="px">px</option>
            <option value="cm">cm</option>
            <option value="m">m</option>
        </select><br>
        <br>
        <label for="text-align"> Text - Align :</label>
        <select id="text-align" name="tAlign">
            <option value="right">right</option>
            <option value="left">left</option>
            <option value="mid">mid</option>
        </select><br>
        <br>
        <label for="background"> Background : # </label>
        <input type="text" name="tBackground"><br>
        <br>
        <label for="font-family"> Font - Family :</label>
        <select id="font-family" name="tFontFam">
            <option value="Arial, sans-serif">Arial</option>
            <option value="Times New Roman, serif">Times New Roman</option>
        </select>
        <br>
        <br>
        <label for="font-weight"> Font - Weight :</label>
        <select id="font-weight" name="tFontWeight">
            <option value="lighter">Lighter</option>
            <option value="bold">Bold</option>
        </select><br>
        <br>
        <label for="text-decoration"> Text - Decoration :</label><br>
        <input type="radio" id="text-decoration" name="tFontDecor" value="underline">
        <label for="underline">Underline</label><br>
        <input type="radio" id="text-decoration" name="tFontDecor" value="line-through">
        <label for="line-trough">Line - Through</label><br>
        <input type="radio" id="text-decoration" name="tFontDecor" value="overline">
        <label for="overline">Overline</label><br>
        <br>
        <br>
        <label for="text-transform"> Text - Transform :</label><br>
        <input type="radio" id="text-transform" name="tFontTrans" value="none">
        <label for="none">None</label><br>
        <input type="radio" id="text-transform" name="tFontTrans" value="uppercase">
        <label for="uppercase">Uppercase</label><br>
        <input type="radio" id="text-transform" name="tFontTrans" value="lowercase">
        <label for="lowercase">Lowercase</label><br>
        <input type="radio" id="text-transform" name="tFontTrans" value="capitalize">
        <label for="capitalize">Capitalize</label><br>
        <br>
        <br>
        <label for="border"> Border Width :</label>
        <input type="text" name="tBorderWidth"> px
        <br><br>
        <label for="opacity"> Opacity :</label>
        <select id="opacity" name="tOpacity">
            <option value="1">1.0/Normal</option>
            <option value="0.6">0.6</option>
            <option value="0.3">0.3</option>
            <option value="0.1">0.1</option>
        </select>
        <br>
        <input type="submit" name="submit" value="Proses"><br>
    </form>

    <h2> Css : </h2><br>
    <textarea id="myelement" name="myelement" style="width: 370px; height: 110px;">
        <?php
        if (isset($_POST['submit'])) {
            $width = $_POST['tWidth'];
            $align = $_POST['tAlign'];
            $background = $_POST['tBackground'];
            $fontFam = $_POST['tFontFam'];
            $fontWei = $_POST['tFontWeight'];
            $fontDecor = $_POST['tFontDecor'];
            $fontTrans = $_POST['tFontTrans'];
            $borderWidth = $_POST['tBorderWidth'];
            $opacity = $_POST['tOpacity'];
            echo "input[type=text] #myelement {";
            echo " 
			";
            echo "width:" . $width . "";
            echo " 
			";
            echo "text align:" . $align . "";
            echo " 
			";
            echo "background:" . $background . "";
            echo " 
			";
            echo "font - family:" . $fontFam . "";
            echo "
            ";
            echo "font - weight:" . $fontWei . "";
            echo "
            ";
            echo "font - decoration:" . $fontDecor . "";
            echo "
            ";
            echo "font - transform:" . $fontTrans . "";
            echo "
            ";
            echo "border - width:" . $borderWidth . "px" . "";
            echo "
            ";
            echo "opacity: " . $opacity . "";
            echo "
            ";
            echo "}";
        }
        ?>
        </textarea>
    <!-- Part C: Styled Element -->
    <h2>Preview:</h2>
    <div style="
	<?php
    if (isset($_POST['submit'])) {
        $width = $_POST['tWidth'];
        $align = $_POST['tAlign'];
        $background = $_POST['tBackground'];
        $fontFam = $_POST['tFontFam'];
        $fontWei = $_POST['tFontWeight'];
        $fontDecor = $_POST['tFontDecor'];
        $fontTrans = $_POST['tFontTrans'];
        $borderWidth = $_POST['tBorderWidth'];
        $opacity = $_POST['tOpacity'];
        echo "width: " . $width . $_POST['size'] . ";";
        echo "text-align: " . $align . ";";
        echo "background: #" . $background . ";";
        echo "font-family: " . $fontFam . ";";
        echo "font-weight: " . $fontWei . ";";
        echo "border: " . $borderWidth . "px solid #000" . ";";
        echo "opacity: " . $opacity . ";";
        if (isset($fontDecor)) {
            if ($fontDecor == 'underline') {
                echo "text-decoration: " . $fontDecor . ";";
            }
            if ($fontDecor == 'line-through') {
                echo "text-decoration: " . $fontDecor . ";";
            }
            if ($fontDecor == 'overline') {
                echo "text-decoration: " . $fontDecor . ";";
            }
        }

        echo "}";

        if (isset($fontTrans)) {
            if ($fontTrans == 'none') {
                echo "text-transform: " . $fontTrans . ";";
            }
            if ($fontTrans == 'lowercase') {
                echo "text-transform: " . $fontTrans . ";";
            }
            if ($fontTrans == 'uppercase') {
                echo "text-transform: " . $fontTrans . ";";
            }
            if ($fontTrans == 'capitalize') {
                echo "text-transform: " . $fontTrans . ";";
            }
        }

        echo "}";
    }
    ?>
	">
        <?php
        if (isset($_POST['submit'])) {
            echo "Lorem ipsum";
        }
        ?>
    </div>

</body>

</html>