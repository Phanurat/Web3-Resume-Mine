<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web3 Template</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <!-- Header Section -->
  <header class="header">
    <div class="logo">Web3App</div>
    <div class="wallet-connection">
      <button id="connect-wallet" class="btn">Connect Wallet</button>
    </div>
  </header>

  <!-- Main Content Section -->
  <main class="main-content">
    <h1>Welcome to Web3</h1>
    <p>Interact with the decentralized web.</p>
    <div class="features">
      <div class="feature">
        <h3>Feature 1</h3>
        <p>Explore decentralized applications and smart contracts.</p>
      </div>
      <div class="feature">
        <h3>Feature 2</h3>
        <p>Secure your assets with blockchain technology.</p>
      </div>
      <div class="feature">
        <h3>Feature 3</h3>
        <p>Own and control your data on the web.</p>
      </div>
    </div>
  </main>

  <!-- Footer Section -->
  <footer class="footer">
    <p>&copy; 2025 Web3App. All rights reserved.</p>
  </footer>

  <script>
    document.getElementById("connect-wallet").addEventListener("click", function() {
      alert("Connecting Wallet..."); 
      // You can integrate Web3.js or Ethers.js for actual wallet connection logic here.
    });
  </script>
</body>
</html>
