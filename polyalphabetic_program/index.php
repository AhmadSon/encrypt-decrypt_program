<?php
if (isset($_POST["submit"])) {
    $str = $_POST["plaintext"];
    $key1 = $_POST["keytext1"];
    $key2 = $_POST["keytext2"];
    $key3 = $_POST["keytext3"];

    $cod1 = encipher($str, $key1, true);
    $cod2 = encipher($str, $key2, true);
    $cod3 = encipher($str, $key3, true);

    // Use the last encryption result
    $result = $cod3;
}

function encipher($src, $key, $is_encode)
{
    $key = strtoupper($key);
    $src = strtoupper($src);
    $dest = '';

    /* strip out non-letters */
    for ($i = 0; $i < strlen($src); $i++) {
        $char = substr($src, $i, 1);
        if (ctype_upper($char)) {
            $dest .= $char;
        }
    }

    for ($i = 0; $i < strlen($dest); $i++) {
        $char = substr($dest, $i, 1);
        if (!ctype_upper($char)) {
            continue;
        }
        $dest = substr_replace(
            $dest,
            chr(
                ord('A') +
                    ($is_encode
                        ? (ord($char) - ord('A') + ord($key[$i % strlen($key)]) - ord('A')) % 26
                        : (ord($char) - ord('A') - (ord($key[$i % strlen($key)]) - ord('A')) + 26) % 26
                    )
            ),
            $i,
            1
        );
    }

    return $dest;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Polalphabetic Cipher - Encryption</title>
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Polalphabetic Cipher</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Encrypt <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="decrypt.php">Decrypt</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <br>
        <form action="" method="post">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Plain text</label>
                <textarea class="form-control" required="required" name="plaintext" id="exampleFormControlTextarea1" rows="3" placeholder="Enter plain text"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Key 1</label>
                <input type="text" class="form-control" required="required" name="keytext1" id="keytext1" aria-describedby="emailHelp" placeholder="Enter key text">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Key 2</label>
                <input type="text" class="form-control" required="required" name="keytext2" id="keytext2" aria-describedby="emailHelp" placeholder="Enter key text">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Key 3</label>
                <input type="text" class="form-control" required="required" name="keytext3" id="keytext3" aria-describedby="emailHelp" placeholder="Enter key text">
            </div>

            <div class="form-group">
                <input type="submit" name="submit" value="Encrypt" class="btn btn-info">
            </div>
        </form>

        <div class="card text-center">
            <div class="card-header">
                Encryption Results
            </div>
            <div class="card-body">
                <p class="card-text">
                    <?php
                    if (isset($result)) {
                        echo "Plain Text: <b>" . $_POST["plaintext"] . "</b><br>";
                        echo "Key 1: <b>" . $_POST["keytext1"] . "</b><br>";
                        echo "Key 2: <b>" . $_POST["keytext2"] . "</b><br>";
                        echo "Key 3: <b>" . $_POST["keytext3"] . "</b><br>";
                        echo "Encrypted Text: <b>" . $result . "</b><br>";
                    }
                    ?>
                </p>
            </div>
            <div class="card-footer text-muted">
                Coded with <span style="color: dark;"> <i class="fa fa-krw"></i> </span> by Ahsyura
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>