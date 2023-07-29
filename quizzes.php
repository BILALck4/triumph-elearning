<?php require "header.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Quiz - Production</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        p {
            margin-bottom: 10px;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Quiz - Production</h1>
    <form method="post" action="quizzes.php" id="quizForm">
        <?php
        // Quiz questions data
        $data = [
            // Add more quiz questions here...
            [
                'question' => 'What does JIT stand for in production?',
                'incorrectAnswers' => [
                    'Just In Time',
                    'Jump Into Technology',
                    'JavaScript Integration Technique',
                ],
                'correctAnswer' => 'Just In Time',
            ],
            [
                'question' => 'What is the primary goal of lean production?',
                'incorrectAnswers' => [
                    'Maximize resource utilization',
                    'Increase production volume',
                    'Minimize product quality control',
                ],
                'correctAnswer' => 'Minimize waste',
            ],
            [
                'question' => 'Which production method focuses on producing in small batches?',
                'incorrectAnswers' => ['Mass production', 'Job production', 'Flow production'],
                'correctAnswer' => 'Batch production',
            ],
            // Add more questions...
        ];

        function getRandomQuizQuestions($data, $numQuestions)
        {
            shuffle($data);
            return array_slice($data, 0, $numQuestions);
        }

        // Select 5 random quiz questions
        $numQuestions = 5;
        $selectedQuestions = getRandomQuizQuestions($data, $numQuestions);

        // Display the selected quiz questions and options
        foreach ($selectedQuestions as $index => $question) {
            echo '<p>' . ($index + 1) . '. ' . $question['question'] . '</p>';
            foreach ($question['incorrectAnswers'] as $answer) {
                echo '<label><input type="radio" name="q' . ($index + 1) . '" value="' . $answer . '"> ' . $answer . '</label><br>';
            }
            echo '<label><input type="radio" name="q' . ($index + 1) . '" value="' . $question['correctAnswer'] . '"> ' . $question['correctAnswer'] . '</label><br><br>';
        }
        ?>

        <input type="submit" name="submit" value="Submit Quiz">
    </form>

    <?php
    // Check if the form has been submitted
    if (isset($_POST['submit'])) {
        $score = 0;

        // Check the user's answers
        foreach ($selectedQuestions as $index => $question) {
            $userAnswer = $_POST['q' . ($index + 1)];
            if ($userAnswer === $question['correctAnswer']) {
                $score++;
            }
        }

        // Display the user's score
        echo '<p>Your score: ' . $score . '/' . $numQuestions . '</p>';
    }
    ?>
</body>
</html>
