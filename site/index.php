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
      <p id="status"></p> <!-- Status message will be displayed here -->
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
    // Wait for the DOM to fully load
    window.addEventListener('DOMContentLoaded', (event) => {
        const connectButton = document.getElementById('connect-wallet');
        const statusElement = document.getElementById('status');

        // Check if MetaMask is installed
        if (typeof window.ethereum !== 'undefined') {
            connectButton.addEventListener('click', async () => {
                try {
                    // Request account access from MetaMask
                    const accounts = await window.ethereum.request({ method: 'eth_requestAccounts' });

                    // If successful, update UI to show the connected wallet
                    statusElement.innerText = `Connected to MetaMask: ${accounts[0]}`;
                    connectButton.style.display = 'none'; // Hide the button once connected
                } catch (error) {
                    // If the user denies the connection or any other error occurs
                    statusElement.innerText = "User denied account access or error occurred.";
                    console.error("Error connecting to MetaMask:", error);
                }
            });
        } else {
            // If MetaMask is not installed
            statusElement.innerText = 'Please install MetaMask!';
        }
    });
  </script>
</body>
</html>
