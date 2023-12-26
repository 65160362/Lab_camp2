<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Thasadith" rel="stylesheet">
</head>

<body>
    <?php $multi_x = 2; ?>
    <h1 style="text-align: center;">ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>

    <div style="width: 200px; height: 270px; overflow: auto; margin: 0 auto; text-align: center; font-size: 40px">
        <table style="margin: auto;">
            <tbody>
                <?php for ($i = 1; $i < 25; $i++) : ?>
                    <tr>
                        <td><?php echo $multi_x ?></td>
                        <td>x</td>
                        <td><?php echo $i ?></td>
                        <td>=</td>
                        <td><?php echo $multi_x * $i ?></td>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>

    <style>
        div {
            background-image: url('blackBoard.png');
        }
        h1{
            padding: 20px;
            font-family: 'Thasadith', sans-serif;
        }
        body{
            background-color: #ffffff;
            background-image: url('blackBoard.png');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            min-height: 100vh;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            backdrop-filter: blur(7px);
            background-color: rgba(255, 255, 255, 0.4);;
        }

        td {
            text-align: center;
            padding: 5px;
            border: 0px solid #ccc;
        }
    </style>
</body>

</html>