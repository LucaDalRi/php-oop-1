<?php


class Movie
{
    public $name;
    public $language;
    public $length;
    public $breakTime;

    function __construct(string $_name, string $_language, $_length)
    {
        $this->name = $_name;
        $this->language = $_language;
        $this->length = $_length;
    }

    public function setBreakTime($length)
    {
        if ($length >= 180) {
            $this->breakTime = 2;
        } else {
            $this->breakTime = 1;
        }
    }

    public function getBreakTime()
    {
        return $this->breakTime;
    }
}

$avatarTwo = new Movie('Avatar 2 ', ' Italiano ', 210);
$avatarTwo->setBreakTime(210);

$fastAndFurious = new Movie('Fast And Furious 10', 'Italiano', 175);
$fastAndFurious->setBreakTime(175)

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP OOP</title>
</head>

<body>

    <table>
        <tbody>
            <th>
            <td>
                <h1>
                    Movie
                </h1>
            </td>
            </th>
            <tr>
                <td>
                    <h2>
                        Titolo
                    </h2>
                </td>
                <td>
                    <h2>
                        Lingua
                    </h2>
                </td>
                <td>
                    <h2>
                        Nr. Pause
                    </h2>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>
                        <?php echo $avatarTwo->name; ?>
                    </h3>
                </td>
                <td>
                    <h3>
                        <?php echo $avatarTwo->language; ?>
                    </h3>

                </td>
                <td>
                    <h3>
                        <?php echo $avatarTwo->breakTime; ?>
                    </h3>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>
                        <?php echo $fastAndFurious->name; ?>
                    </h3>
                </td>
                <td>
                    <h3>
                        <?php echo $fastAndFurious->language; ?>
                    </h3>

                </td>
                <td>
                    <h3>
                        <?php echo $fastAndFurious->breakTime; ?>
                    </h3>
                </td>
            </tr>
        </tbody>
    </table>


</body>

</html>