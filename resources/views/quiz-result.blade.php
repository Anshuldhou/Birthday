<!DOCTYPE html>
<html>
<head>
    <title>🎉 Quiz Results</title>
    <style>
        body { font-family: 'Raleway', sans-serif; background: #f0fff0; text-align: center; padding: 50px; }
        h2 { color: #ff3399; }
    </style>
</head>
<body>
    <h2>🎉 You Scored {{ $score }} out of {{ $total }}!</h2>

    @if($score == $total)
        <p>You're perfect! 💯💖 You remember everything!</p>
        <img src="/images/surprise.png" width="300">
    @elseif($score >= 2)
        <p>Almost perfect! 😍 You know me really well!</p>
    @else
        <p>Hehe... we’ll revise our love story together! 🥺❤️</p>
    @endif

    <a href=\"/\">⬅️ Go Back to Home</a>
</body>
</html>
