<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farm ease</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navigation">
        <div class="logo">
            <img src="logo.jpg" alt="">
        </div>
        <h1>Farm Ease</h1>

        <div class="buttons">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="info.php">Info</a></li>
                <li><a href="disease.php">Disease</a></li>
            </ul>
        </div>
    </div>

    <div class="middlearea">
        <p>Enter the name of crop you want info about :</p>
        <form action="info.php" method="post">
            <input type="text" name="crop" ><br>
            <button class="btn">Submit</button>
        </form>
    </div>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $crop = $_POST['crop'];

            switch ($crop) {
                case 'rice':
                    echo "<div class='ans'>Rice (Oryza sativa)<br><br>
                    Description: Rice is a staple food in India, widely cultivated for its edible grains. It is a grass species and one of the most important cereal crops.<br>
                    Preferable Weather: Rice requires hot and humid weather conditions with abundant rainfall, especially during the growing season.<br>
                    Preferable Soil Type: Clayey loam soil with good water retention is preferable for rice cultivation.<br></div>";
                    break;
                
                case 'wheat':
                    echo "<div class='ans'>Wheat (Triticum aestivum)<br><br>
                    Description: Wheat is another staple food in India, known for its high nutritional value. It is a cereal grain and one of the primary sources of carbohydrates.<br>
                    Preferable Weather: Wheat grows best in cool temperatures with moderate rainfall during the growing season and dry weather during harvest.<br>
                    Preferable Soil Type: Well-drained loamy soil is ideal for wheat cultivation.<br></div>";
                    break;

                case 'maize':
                    echo "<div class='ans'>Maize (Zea mays)<br><br>
                    Description: Maize, also known as corn, is a cereal grain that is widely cultivated for its edible kernels. It is used for human consumption as well as animal feed.<br>
                    Preferable Weather: Maize requires warm weather with adequate rainfall or irrigation during the growing season.<br>
                    Preferable Soil Type: Well-drained fertile soil with good organic content is suitable for maize cultivation.<br></div>";
                    break;

                case 'sugarcane':
                    echo "<div class='ans'>Sugarcane (Saccharum officinarum)<br><br>
                    Description: Sugarcane is a tall perennial grass cultivated for its sugary sap, which is used to produce sugar and other by-products.<br>
                    Preferable Weather: Sugarcane thrives in hot and humid climates with ample rainfall throughout the year.<br>
                    Preferable Soil Type: Deep, fertile, and well-drained soil with good moisture retention is preferred for sugarcane cultivation.<br></div>";
                    break;

                case 'cotton':
                    echo "<div class='ans'>Cotton (Gossypium spp.)<br><br>
                    Description: Cotton is a soft, fluffy fiber that grows around the seeds of the cotton plant. It is a major cash crop used in textile industries.<br>
                    Preferable Weather: Cotton requires warm weather with plenty of sunshine and moderate rainfall during the growing season.<br>
                    Preferable Soil Type: Well-drained loamy soil with good moisture retention is suitable for cotton cultivation.<br></div>";
                    break;

                case 'soyabean':
                    echo "<div class='ans'>Soybean (Glycine max)<br><br>
                    Description: Soybean is a leguminous crop known for its high protein content. It is used for various purposes including human consumption, animal feed, and oil extraction.<br>
                    Preferable Weather: Soybean grows well in warm temperatures with adequate rainfall or irrigation during the growing season.<br>
                    Preferable Soil Type: Well-drained fertile soil with good organic matter content is suitable for soybean cultivation.<br></div>";
                    break;

                case 'pulses':
                    echo "<div class='ans'>Pulses (Various species like chickpea, pigeon pea, lentil, etc.)<br><br>
                    Description: Pulses are leguminous crops rich in protein and used as an essential part of Indian cuisine. They include chickpea, pigeon pea, lentil, etc.<br>
                    Preferable Weather: Pulses generally prefer moderate temperatures with well-distributed rainfall during the growing season.<br>
                    Preferable Soil Type: Well-drained loamy soil with good fertility is suitable for pulse cultivation.<br></div>";
                    break;

                case 'potato':
                    echo "<div class='ans'>Potato (Solanum tuberosum)<br><br>
                    Description: Potato is an underground tuber crop widely consumed as a vegetable. It is a rich source of carbohydrates and nutrients.<br>
                    Preferable Weather: Potatoes grow best in cool temperatures with well-distributed rainfall or irrigation during the growing season.<br>
                    Preferable Soil Type: Well-drained sandy loam soil with good organic matter content is ideal for potato cultivation.<br></div>";
                    break;

                case 'tea':
                    echo "<div class='ans'>Tea (Camellia sinensis)<br><br>
                    Description: Tea is an evergreen shrub cultivated for its leaves, which are processed to produce the beverage known as tea.<br>
                    Preferable Weather: Tea requires moderate temperatures with well-distributed rainfall throughout the year, along with high humidity.<br>
                    Preferable Soil Type: Acidic, well-drained soil rich in organic matter is preferred for tea cultivation.<br></div>";
                    break;

                case 'coffee':
                    echo "<div class='ans'>Coffee (Coffea arabica, Coffea robusta)<br><br>
                    Description: Coffee is a tropical evergreen shrub cultivated for its beans, which are roasted and ground to produce the popular beverage known as coffee.<br>
                    Preferable Weather: Coffee plants thrive in warm temperatures with regular rainfall and moderate shade.<br>
                    Preferable Soil Type: Well-drained, fertile soil with good organic matter content is suitable for coffee cultivation.<br></div>";
                    break;

                    default:
                    echo "<div class='ans'>Crop data not available. We will add soon. <div>";
                    break;
            }
            
        }
    ?>
</body>
</html>