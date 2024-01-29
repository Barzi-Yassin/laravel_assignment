<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product View</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: whitesmoke;
            padding: 20px;
            height: 100vh;
        }

        .p-details {
            margin-bottom: 20px;
        }

        .login-btn {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .login-btn:hover {
            background-color: #45a049;
        }
    </style>
    <script>
        // alert("Welcome to the product page");

        let i = 0;

        function changeColor() {
            document.getElementById("toGreen").style.color = i % 2 == 0 ? "green" : "brown";
            i++;
        }
    </script>
</head>

<body id="toGreen" onclick="changeColor()" title="Click to change color">
    <div class="container border border-dark col-md-6 col-x-12">
        <h2 id="toGreen" class="container-fluid text-center" onclick="changeColor()">TechPro X500</h2>
        <div class="container row">
            <div class="col-md-6 border border-secondary">
                <div class="p-details">
                    <h3>Description</h3>
                    <p>Experience cutting-edge performance with the TechPro X500 laptop. Whether you're a professional on the go or a creative enthusiast, this laptop delivers powerful features in a sleek and portable design.</p>
                </div>
            </div>
            <div class="col-md-6 border border-secondary">
                <div class="p-details">
                    <h3>Specifications</h3>
                    <ul>
                        <li><strong>Processor:</strong> Intel Core i7-10th Gen</li>
                        <li><strong>Memory:</strong> 16GB DDR4 RAM</li>
                        <li><strong>Storage:</strong> 512GB SSD</li>
                        <li><strong>Display:</strong> 15.6-inch Full HD IPS</li>
                        <li><strong>Graphics:</strong> NVIDIA GeForce GTX 1650</li>
                        <li><strong>Operating System:</strong> Windows 10</li>
                        <li><strong>Battery Life:</strong> Up to 8 hours</li>
                        <li><strong>Weight:</strong> 3.5 lbs</li>
                        <li><strong>Price:</strong> $1000</li>
                    </ul>
                </div>
            </div>
        </div>
        <br><br>
        <div class="container-fluid row text-center">
            <div class="col">
                <a href="/login" class="login-btn" style="color: white">Logout</a>
            </div>
        </div>

        <div class="text-center">
            <br>
            <cite> &copy;
                <small>developed by </small>Barzi Yassin
            </cite>
            <br><br>
        </div>
    </div>



</body>

</html>