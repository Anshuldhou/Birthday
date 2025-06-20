<!-- Laravel Birthday Surprise Project – Now with Love Quiz! -->
<!-- Built with ❤️ by ChatGPT + Anshul Dhoundiyal -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Happy Birthday My Love 💖</title>
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Raleway&display=swap" rel="stylesheet">
  <style>
    :root {
      --main-bg: #ffe6f0;
    }
    body {
      margin: 0;
      font-family: 'Raleway', sans-serif;
      background: var(--main-bg);
      color: #333;
      text-align: center;
      padding: 20px;
    }
    h1 {
      font-family: 'Great Vibes', cursive;
      font-size: 3rem;
      color: #ff3399;
    }
    .button {
      padding: 10px 25px;
      background: #ff69b4;
      color: white;
      border: none;
      border-radius: 15px;
      margin: 10px;
      cursor: pointer;
      text-decoration: none;
    }
    .gallery {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 10px;
    }
    .gallery img {
      width: 180px;
      height: 180px;
      border-radius: 10px;
      object-fit: cover;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .timeline {
      text-align: left;
      margin: auto;
      max-width: 500px;
    }
    .timeline p {
      background: white;
      padding: 10px;
      margin: 10px 0;
      border-left: 5px solid #ff69b4;
    }
    .theme-switcher {
      display: flex;
      justify-content: center;
      gap: 10px;
      margin: 20px 0;
    }
    .theme-color {
      width: 30px;
      height: 30px;
      border-radius: 50%;
      cursor: pointer;
    }
  </style>
</head>
<body>

  <h1>Happy Birthday, My Love 🎉</h1>
  <audio autoplay loop>
    <source src="https://www.bensound.com/bensound-music/bensound-love.mp3" type="audio/mpeg">
  </audio>

  <div class="theme-switcher">
    <div class="theme-color" style="background: #ffe6f0;" onclick="document.documentElement.style.setProperty('--main-bg','#ffe6f0')"></div>
    <div class="theme-color" style="background: #f0e5ff;" onclick="document.documentElement.style.setProperty('--main-bg','#f0e5ff')"></div>
    <div class="theme-color" style="background: #e0f7fa;" onclick="document.documentElement.style.setProperty('--main-bg','#e0f7fa')"></div>
  </div>

  <p id="counter">❤️ I Love You for <span id="days">0</span> days and <span id="seconds">0</span> seconds!</p>

  <div class="gallery">
    <img src="/images/pic1.jpg">
    <img src="/images/pic2.jpg">
    <img src="/images/pic3.jpg">
    <img src="/images/pic4.jpg">
    <img src="/images/pic5.jpg">
    <img src="/images/pic6.jpg">
    <img src="/images/pic7.jpg">
    <img src="/images/pic8.jpg">
    <img src="/images/pic9.jpg">
    <img src="/images/pic10.jpg">
    <img src="/images/pic11.jpg">
    <img src="/images/pic12.jpg">
    <img src="/images/pic13.jpg">
  </div>

  <div class="timeline">
    <h2>💫 Our Timeline</h2>
    <p><strong>27 March 2023:</strong> We fell in love</p>
    <p><strong>1 May 2023:</strong> First cute argument</p>
    <p><strong>14 July 2023:</strong> Our first trip together</p>
    <p><strong>27 March 2024:</strong> First anniversary ❤️</p>
  </div>

  <button class="button" onclick="showProposal()">💍 Will You Be Mine Always?</button>

  <form action="/send-message" method="POST">
  @csrf
  <h3>Send me a sweet message 💌</h3>
  <input type="text" name="name" placeholder="Your Name" required><br><br>
  <textarea name="message" placeholder="Your Message" required></textarea><br><br>
  <button type="submit" class="button">Send 💘</button>
</form>

  <div class="wheel-container">
    <div id="pointer"></div>
    <div id="wheel"></div>
    <button class="button" onclick="spinLoveWheel()">🎲 Spin the Wheel of Love</button>
    <p id="wheel-result" style="font-size: 1.5rem; color: #d63384; margin-top: 20px;"></p>
  </div>
  <div class="voice-player">
    <h3>🔊 Listen to My Heart</h3>
    <audio controls>
      <source src="/voice/voice-note.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
    </audio>
  </div>
  <!-- 💬 Love Chatbot Feature -->
  <div class="chatbot-box">
    <h3>💬 Talk to My Love Bot</h3>
    <input type="text" id="chatInput" placeholder="Say something...">
    <button onclick="respondToLove()">Send</button>
    <p id="chatResponse"></p>
  </div>

  <!-- 🐻 Walking Bear Animation -->
  <img src="https://img.icons8.com/clouds/100/teddy-bear.png" alt="Walking Bear" class="bear-animation">

  <!-- 🧩 Puzzle Your Love Section -->
<div class="puzzle-section">
  <h2>🧩 Puzzle Your Love</h2>
  <p>Here's a piece of our love... Put it together! 💞</p>
  <img src="/images/puzzle.jpg" alt="Puzzle Image" style="max-width: 300px; width: 90%; height: auto;">
  <p style="font-style: italic; color: #777;">(This will be a real puzzle in future update 😉)</p>
</div>

  <script src="https://cdn.jsdelivr.net/npm/fireworks-js@2.1.2/dist/fireworks.min.js"></script>
  <script>
    const container = document.body;
    const fireworks = new Fireworks.default(container, { speed: 2 });
    fireworks.start();

    const start = new Date("2023-03-27").getTime();
    setInterval(() => {
      const now = new Date().getTime();
      const diff = now - start;
      const days = Math.floor(diff / (1000 * 60 * 60 * 24));
      const seconds = Math.floor((diff / 1000) % 86400);
      document.getElementById("days").innerText = days;
      document.getElementById("seconds").innerText = seconds;
    }, 1000);

    function showProposal() {
      alert("💍 I promise to be yours forever. Will you be mine always? 💖");
    }

  function spinLoveWheel() {
      const outcomes = ["💋 A Kiss", "💖 I Love You", "🧸 Hug Time!", "🎵 Your Favorite Song", "🍫 Chocolate Shower", "🌹 A Rose for You"];
      const result = outcomes[Math.floor(Math.random() * outcomes.length)];
      document.getElementById("wheel-result").innerText = result;
      const wheel = document.getElementById("wheel");
      const degrees = 720 + Math.floor(Math.random() * 360);
      wheel.style.transition = "transform 4s ease-out";
      wheel.style.transform = `rotate(${degrees}deg)`;
    }
    function respondToLove() {
      const input = document.getElementById("chatInput").value.toLowerCase();
      let response = "You're the love of my life! 💖";
      if (input.includes("hello") || input.includes("hi")) response = "Hi sweetheart! 😘";
      else if (input.includes("miss")) response = "I miss you more, jaan! 💕";
      else if (input.includes("love")) response = "I love you forever and always. 💞";
      else if (input.includes("thank")) response = "Aww, anything for you cutie! 🌸";
      document.getElementById("chatResponse").innerText = response;
    }
  
  </script>

</body>
</html>
