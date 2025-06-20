<!DOCTYPE html>
<html>
<head>
    <title>💕 Memory Quiz</title>
    <style>
        body { font-family: 'Raleway', sans-serif; background: #fff0f5; text-align: center; padding: 50px; }
        input, button { padding: 10px; margin: 10px; width: 300px; }
        .question { margin-bottom: 20px; }
    </style>
</head>
<body>
    <h2>💕 Let's See How Well You Remember!</h2>
    <form method="POST" action="/quiz-check">
        @csrf
        <div class="question">
            <label>1. When did we first fall in love? 💘</label><br>
            <input type="text" name="q1"  required>
        </div>
        <div class="question">
            <label>2. What is your favorite sweet I gift you always? 🍫</label><br>
            <input type="text" name="q2" required>
        </div>
        <div class="question">
            <label>3. What is my favorite color? 🎨</label><br>
            <input type="text" name="q3"  required>
        </div>
        <button type="submit">Check My Score! 🎯</button>
    </form>
</body>
</html>
