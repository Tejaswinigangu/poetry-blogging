<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poetry Collection</title>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #FFE6E6;
            overflow-y: scroll; /* Enable vertical scrolling */
        }
        
        .poem {
            padding: 20px;
            margin: 10px;
            background-color:#E1AFD1 ;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .poet {
            font-style: italic;
            margin-bottom: 10px;
        }

        .like-btn {
            background-color: transparent;
            color: white;
            padding: 0;
            border: none;
            cursor: pointer;
            font-size: 24px;
            position: absolute;
            top: 10px;
            right: 10px;
            transition: color 0.3s; /* Add transition for color change */
        }

        .like-btn.active {
            color: red; /* Change color to red when active */
        }

        .comment-box {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: 2px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
            background-color: #FFF7F1;
            
        }

        .comment-btn {
            background-color: #F7DED0;
            color:  ;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            margin-top: 5px;
        }
        .rating {
            margin-top: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .rating label {
            font-size: 24px;
            color: #333;
            margin: 0 5px;
            cursor: pointer;
        }

        .rating label:hover,
        .rating label:hover ~ label {
            color: blue; /* Change color on hover */
        }

        .rating input[type="radio"] {
            display: none; /* Hide the radio buttons */
        }

        .rating input[type="radio"]:checked ~ label {
            color: blue; /* Change color of checked star */
        }

        

    </style>
    </head>
<body>
    <div class="pi">
        <a href="index.php">Back</a>
    </div>
    
    <div class="poem">
        <div class="poet">
            <strong>Title:</strong> The Voice of Nature<br>
            <strong>Author:</strong> Rabindranath Tagore<br>
            <strong>Pen Name:</strong> Gurudev <br>
            <strong>Inspriation:</strong> The beauty and harmony of nature
        </div>
        <p>
           "The voice of Nature is never spent; <br>
            Her music echoes through the hills,<br>
            And whispers in the rustling leaves,<br>
            A song that every heart fulfills." <br>

        </p>

        <div class="rating">
        <input type="radio" id="star1" name="rating" value="1">
        <label for="star1">&#9733;</label>
        <input type="radio" id="star2" name="rating" value="2">
        <label for="star2">&#9733;</label>
        <input type="radio" id="star3" name="rating" value="3">
        <label for="star3">&#9733;</label>
        <input type="radio" id="star4" name="rating" value="4">
        <label for="star4">&#9733;</label>
        <input type="radio" id="star5" name="rating" value="5">
        <label for="star5">&#9733;</label>
    </div>

        <button class="like-btn">&#10084;</button>
        <textarea class="comment-box" placeholder="Leave a comment"></textarea>
        <button class="comment-btn">Comment</button>
    </div>
    
    
    <div class="poem">
        <div class="poet">
            <strong>Title:</strong> Echoes of Solitude<br>
            <strong>Author:</strong>  Kamala Das<br>
            <strong>Pen Name:</strong> Madhavikutty<br>
            <strong>Inspriation:</strong>Self-love, sadness, unrequited love
        </div>
        <p>
           "In the depths of my solitude, I find solace, <br>
            Embracing the echoes of my own voice, <br>
            No longer seeking validation from another's gaze, <br>
            I bask in the warmth of self-love's embrace. <br>
 <br>
            Yet, beneath this façade of strength, lies a heart, <br>
            Heavy with the weight of unspoken desires, <br>
            Forlorn in the shadows of one-sided affection,<br>
            Yearning for a love that remains forever unattained." <br>
        </p>
         <div class="rating">
        <input type="radio" id="star1" name="rating" value="1">
        <label for="star1">&#9733;</label>
        <input type="radio" id="star2" name="rating" value="2">
        <label for="star2">&#9733;</label>
        <input type="radio" id="star3" name="rating" value="3">
        <label for="star3">&#9733;</label>
        <input type="radio" id="star4" name="rating" value="4">
        <label for="star4">&#9733;</label>
        <input type="radio" id="star5" name="rating" value="5">
        <label for="star5">&#9733;</label>
    </div>
        <button class="like-btn">&#10084;</button>
        <textarea class="comment-box" placeholder="Leave a comment"></textarea>
        <button class="comment-btn">Comment</button>

    </div>
    <div class="poem">
        <div class="poet">
            <strong>Title:</strong> Virah Ke Alfaaz<br>
            <strong>Author:</strong> Sre Sree<br>
            <strong>Pen Name:</strong>Sre Sree <br>
            <strong>Inspriation:</strong> Breakup, heartache, emotions
        </div>
        <p>
           "तेरे जाने के बाद, दिल मेरा उदास है, <br>
            खोयी हुई बातें, यादें तेरी साथ है। <br>
          <br>
            खुद से भी मुलाक़ातें, अब अजनबी सी हैं, <br>
            तेरे जाने के बाद, ये ज़िन्दगी अधूरी सी है। <br>
<br>
            तेरी खुशी के लिए, मैंने जो कुछ भी किया, <br>
            मेरी तक़दीर में अब, सिर्फ रूठा हुआ है। <br>
<br>
            जैसे फूलों का साथ, खुशबू का होता है, <br>
            तेरे जाने के बाद, मेरा दिल तन्हा है।"   <br>
        </p>
         <div class="rating">
        <input type="radio" id="star1" name="rating" value="1">
        <label for="star1">&#9733;</label>
        <input type="radio" id="star2" name="rating" value="2">
        <label for="star2">&#9733;</label>
        <input type="radio" id="star3" name="rating" value="3">
        <label for="star3">&#9733;</label>
        <input type="radio" id="star4" name="rating" value="4">
        <label for="star4">&#9733;</label>
        <input type="radio" id="star5" name="rating" value="5">
        <label for="star5">&#9733;</label>
    </div>
        <button class="like-btn">&#10084;</button>
        <textarea class="comment-box" placeholder="Leave a comment"></textarea>
        <button class="comment-btn">Comment</button>
    </div>
    <div class="poem">
        <div class="poet">
            <strong>Title:</strong>Dark Corners <br>
            <strong>Author:</strong> Gulzar<br>
            <strong>Pen Name:</strong>Gulzar<br>
            <strong>Inspriation:</strong> complexities of human emotions and the intricacies of life
        </div>
        <p>
            "In the dark corners of my mind, <br>
            Where shadows dance and fears unwind, <br>
            I search for solace, I seek the light, <br>
            To banish the darkness and end the night" <br>
        </p>
         <div class="rating">
        <input type="radio" id="star1" name="rating" value="1">
        <label for="star1">&#9733;</label>
        <input type="radio" id="star2" name="rating" value="2">
        <label for="star2">&#9733;</label>
        <input type="radio" id="star3" name="rating" value="3">
        <label for="star3">&#9733;</label>
        <input type="radio" id="star4" name="rating" value="4">
        <label for="star4">&#9733;</label>
        <input type="radio" id="star5" name="rating" value="5">
        <label for="star5">&#9733;</label>
    </div>
        <button class="like-btn">&#10084;</button>
        <textarea class="comment-box" placeholder="Leave a comment"></textarea>
        <button class="comment-btn">Comment</button>

    </div>
        

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form submissions if needed
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM poem";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='poem'>
                <div class='poet'>
                    <strong>Title:</strong> " . $row["Title"] . "<br>
                    <strong>Author:</strong> " . $row["Author"] . "<br>
                    <strong>Pen Name:</strong> " . $row["Pen_Name"] . "<br>
                    <strong>Inspiration:</strong> " . $row["Inspiration"] . "<br>
                </div>
                <p>" . $row["poem"] . "</p>
                <div class='rating'>
                    <input type='radio' id='star1' name='rating' value='1'>
                    <label for='star1'>&#9733;</label>
                    <input type='radio' id='star2' name='rating' value='2'>
                    <label for='star2'>&#9733;</label>
                    <input type='radio' id='star3' name='rating' value='3'>
                    <label for='star3'>&#9733;</label>
                    <input type='radio' id='star4' name='rating' value='4'>
                    <label for='star4'>&#9733;</label>
                    <input type='radio' id='star5' name='rating' value='5'>
                    <label for='star5'>&#9733;</label>
                </div>
                <button class='like-btn'>&#10084;</button>
                <textarea class='comment-box' placeholder='Leave a comment'></textarea>
                <button class='comment-btn'>Comment</button>
              </div>";
    }
} else {
    echo "No poems found.";
}
$conn->close();
?> 




<script>
    const likeBtns = document.querySelectorAll('.like-btn');
    likeBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            console.log('Like button clicked');
            btn.classList.toggle('active'); 
        });
    });

    const commentBtns = document.querySelectorAll('.comment-btn');
    commentBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const commentBox = btn.previousElementSibling;
            const comment = commentBox.value;
            alert('Commented: ' + comment);
            commentBox.value = ''; 
        });
    });
</script>


    
</body>
</html>