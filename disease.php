<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farm ease</title>
    <link rel="stylesheet" href="style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Assistant&family=Jacquard+12+Charted&family=Sulphur+Point&display=swap');
    </style>
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
        <p>Enter the crop disease you want info about :</p>
        <form action="disease.php" method="post">
            <input type="text" name="disease" ><br>
            <button class="btn">Submit</button>
        </form>
    </div>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $disease = $_POST['disease'];
            
            switch ($disease) {
                case 'blast disease':
                    echo "<div class='ans'>Blast Disease (Rice):<br><br>
                    Description: Blast disease affects rice plants, causing lesions on leaves, stems, and grains. It can lead to significant yield losses.<br>
                    Cause: Caused by the fungus Magnaporthe oryzae, which thrives in warm and humid conditions.<br>
                    Precautions: Rotate crops, practice proper field hygiene, use resistant varieties, and apply fungicides when necessary.<br></div>";
                    break;
                
                case 'late blight':
                    echo "<div class='ans'>Late Blight (Potato and Tomato):<br><br>
                    Description: Late blight manifests as water-soaked lesions on leaves, stems, and fruits of potato and tomato plants, eventually leading to plant death.<br>
                    Cause: Caused by the oomycete pathogen Phytophthora infestans, favored by cool and moist conditions.<br>
                    Precautions: Plant resistant varieties, practice crop rotation, maintain good airflow in fields, and apply fungicides preventively.<br></div>";
                    break;

                case 'early blight':
                    echo "<div class='ans'>Early Blight (Tomato and Potato):<br><br>
                    Description: Early blight causes dark, concentric lesions on lower leaves of tomato and potato plants, leading to defoliation and reduced yields.<br>
                    Cause: Caused by the fungus Alternaria solani, thriving in warm and humid conditions.<br>
                    Precautions: Practice crop rotation, use disease-free seeds, remove infected plant debris, and apply fungicides as a preventive measure.<br></div>";
                    break;

                case 'powdery mildew':
                    echo "<div class='ans'>Powdery Mildew (Various Crops):<br><br>
                    Description: Powdery mildew appears as white, powdery patches on leaves, stems, and fruits of various crops, inhibiting photosynthesis and stunting growth.<br>
                    Cause: Caused by different fungal species like Erysiphe spp. and Oidium spp., favored by high humidity and moderate temperatures.<br>
                    Precautions: Plant resistant varieties, maintain proper spacing between plants, prune infected parts, and apply fungicides early in the season.<br></div>";
                    break;

                case 'downy mildew':
                    echo "<div class='ans'>Downy Mildew (Various Crops):<br><br>
                    Description: Downy mildew results in yellow lesions on leaves, often accompanied by a grayish-purple fuzz on the undersides. It affects various crops like grapes, cucumbers, and lettuce.<br>
                    Cause: Caused by various species of oomycete pathogens, favored by cool and moist conditions.<br>
                    Precautions: Plant resistant varieties, provide proper drainage, avoid overhead irrigation, and apply fungicides preventively.<br></div>";
                    break;

                case 'fusarium wilt':
                    echo "<div class='ans'>Fusarium Wilt (Tomato, Banana, and Chickpea):<br><br>
                    Description: Fusarium wilt causes wilting, yellowing, and eventual death of affected plants. It affects a wide range of crops, including tomato, banana, and chickpea.<br>
                    Cause: Caused by the soil-borne fungus Fusarium oxysporum, which infects plants through roots and vascular tissues.<br>
                    Precautions: Practice crop rotation, use disease-free seeds and planting material, maintain soil health, and apply fungicides or biocontrol agents.<br></div>";
                    break;

                case 'rust diseases':
                    echo "<div class='ans'>Rust Diseases (Various Crops):<br><br>
                    Description: Rust diseases manifest as orange, yellow, or brown powdery pustules on leaves, stems, and fruits of various crops like wheat, barley, and coffee.<br>
                    Cause: Caused by different species of rust fungi, favored by moderate temperatures and high humidity.<br>
                    Precautions: Plant resistant varieties, practice crop rotation, remove and destroy infected plant material, and apply fungicides preventively.<br></div>";
                    break;

                case 'charcoal rot':
                    echo "<div class='ans'>Charcoal Rot (Soybean and Other Legumes):<br><br>
                    Description: Charcoal rot causes dark discoloration of stems and roots, leading to wilting and eventual death of affected plants, particularly in soybean and other legumes.<br>
                    Cause: Caused by the fungus Macrophomina phaseolina, which thrives in warm and dry conditions.<br>
                    Precautions: Rotate crops with non-host plants, maintain soil moisture levels, use disease-free seeds, and apply fungicides or biocontrol agents.<br></div>";
                    break;

                case 'anthracnose':
                    echo "<div class='ans'>Anthracnose (Chili, Mango, and Beans):<br><br>
                    Description: Anthracnose presents as sunken, dark lesions on leaves, stems, and fruits, leading to premature fruit drop and yield losses in crops like chili, mango, and beans.<br>
                    Cause: Caused by various species of Colletotrichum fungi, favored by warm and humid conditions.<br>
                    Precautions: Plant resistant varieties, practice crop rotation, maintain field hygiene, and apply fungicides preventively.<br></div>";
                    break;

                case 'yellow rust':
                    echo "<div class='ans'>Yellow Rust (Wheat):<br><br>
                    Description: Yellow rust causes yellow-orange pustules on leaves of wheat plants, leading to reduced photosynthesis, stunted growth, and yield losses.<br>
                    Cause: Caused by the fungus Puccinia striiformis, favored by cool and moist conditions.<br>
                    Precautions: Plant resistant wheat varieties, practice crop rotation, remove volunteer wheat plants, and apply fungicides preventively.<br></div>";
                    break;

                default:
                    echo "<div class='ans'>Disease data not available. We will add soon. <div>";
                    break;
            }
        }
    ?>
</body>
</html>