<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chatbot</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style>
    /* Chatbot Styles */
    #chatbot-container {
      z-index: 999;
      color: #2c2325;
      position: fixed;
      bottom: 5rem; /* Position above the open button */
      right: 1rem; /* Position from the right edge */
      width: 350px; /* Smaller width */
      height: 500px; /* Smaller height */
      display: none; /* Hidden by default */
      flex-direction: column;
      background-color: #2c2325;
      border-radius: 1rem;
      opacity: 0.8;
      background-image: radial-gradient(#444cf7 0.5px, #2c2325 0.5px);
      background-size: 10px 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    #chatbot-interface {
      display: flex;
      flex-direction: column;
      height: 100%;
    }

    #chatbot-header {
      font-weight: 600;
      border-top-left-radius: 1rem;
      border-top-right-radius: 1rem;
      background: radial-gradient(ellipse farthest-corner at right bottom, #FEDB37 0%, #FDB931 8%, #9f7928 30%, #8A6E2F 40%, transparent 80%),
        radial-gradient(ellipse farthest-corner at left top, #D1B464 25%, #5d4a1f 62.5%, #5d4a1f 100%);
      padding: 0.5rem 1.5rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    #chatbot-chat {
      flex: 1;
      padding: 1rem;
      overflow-y: auto;
      display: flex;
      flex-direction: column;
      gap: 0.5rem;
    }

    .chatbot-messages {
      padding: 0.5rem 1rem;
      border-radius: 1rem;
      max-width: 70%;
    }

    .chatbot-received-messages {
      background: radial-gradient(ellipse farthest-corner at right bottom, #FDB931 8%, #9f7928 30%, #8A6E2F 40%, transparent 80%),
        radial-gradient(ellipse farthest-corner at left top, #D1B464 25%, #5d4a1f 62.5%, #5d4a1f 100%);
      filter: grayscale(0.3);
      align-self: flex-start;
    }

    .chatbot-sent-messages {
      background-color: #574449;
      color: white;
      align-self: flex-end;
    }

    #chatbot-footer {
      padding: 1rem;
      display: flex;
      gap: 0.5rem;
      align-items: center;
      border-top: 1px solid #444cf7;
    }

    #chatbot-input {
      flex: 1;
      padding: 0.5rem;
      background-color: #574449;
      border: 1px solid #574449;
      border-radius: 1rem;
      color: white;
    }

    #chatbot-input:focus {
      outline: none;
      border: 1px solid #FDB931;
      box-shadow: 0 0 5px #FDB931;
    }

    #chatbot-new-message-send-button {
      cursor: pointer;
      color: white;
    }

    #chatbot-open-container {
      position: fixed;
      bottom: 1rem;
      right: 1rem;
      background: radial-gradient(ellipse farthest-corner at right bottom, #FEDB37 0%, #FDB931 8%, #9f7928 30%, #8A6E2F 40%, transparent 80%),
        radial-gradient(ellipse farthest-corner at left top, #D1B464 25%, #5d4a1f 62.5%, #5d4a1f 100%);
      padding: 1rem;
      border-radius: 50%;
      width: 3.5rem;
      height: 3.5rem;
      text-align: center;
      cursor: pointer;
      z-index: 1000;
    }

    #chatbot-open-container i {
      font-size: 1.5rem;
      color: #2c2325;
    }
  </style>
</head>
<body>
  <!-- Chatbot Container -->
  <div id="chatbot-container">
    <div id="chatbot-interface">
      <!-- Chatbot Header -->
      <div id="chatbot-header">
        <p>Chat with Us</p>
      </div>
      <!-- Chatbot Chat Area -->
      <div id="chatbot-chat">
        <div class="chatbot-messages chatbot-received-messages">
          <p>Hello! How can I help you today?</p>
        </div>
      </div>
      <!-- Chatbot Footer (Input Area) -->
      <div id="chatbot-footer">
        <div id="chatbot-input-container">
          <input type="text" id="chatbot-input" name="chatbot-input" placeholder="Type a message...">
        </div>
        <div id="chatbot-new-message-send-button">
          <i class="material-icons" id="send-icon">send</i>
        </div>
      </div>
    </div>
  </div>

  <!-- Chatbot Open/Close Button -->
  <div id="chatbot-open-container">
    <i class="material-icons" id="open-chat-button">chat</i>
    <i class="material-icons" id="close-chat-button" style="display: none">close</i>
  </div>

  <!-- JavaScript for Chatbot -->
  <script>
    // Toggle Chatbot Visibility
    const chatbotContainer = document.getElementById('chatbot-container');
    const openChatButton = document.getElementById('open-chat-button');
    const closeChatButton = document.getElementById('close-chat-button');

    openChatButton.addEventListener('click', () => {
      chatbotContainer.style.display = 'flex';
      openChatButton.style.display = 'none';
      closeChatButton.style.display = 'block';
    });

    closeChatButton.addEventListener('click', () => {
      chatbotContainer.style.display = 'none';
      openChatButton.style.display = 'block';
      closeChatButton.style.display = 'none';
    });

    // Chatbot Message Handling
    const chatInput = document.getElementById('chatbot-input');
    const chatSendButton = document.getElementById('chatbot-new-message-send-button');
    const chatMessages = document.getElementById('chatbot-chat');

    chatSendButton.addEventListener('click', sendMessage);
    chatInput.addEventListener('keypress', (e) => {
      if (e.key === 'Enter') sendMessage();
    });

    function sendMessage() {
      const userMessage = chatInput.value.trim();
      if (userMessage === '') return;

      // Append User Message
      const userMessageDiv = document.createElement('div');
      userMessageDiv.className = 'chatbot-messages chatbot-sent-messages';
      userMessageDiv.innerHTML = `<p>${userMessage}</p>`;
      chatMessages.appendChild(userMessageDiv);

      // Clear Input
      chatInput.value = '';

      // Scroll to Bottom
      chatMessages.scrollTop = chatMessages.scrollHeight;

      // Simulate Bot Response
      setTimeout(() => {
        const botMessageDiv = document.createElement('div');
        botMessageDiv.className = 'chatbot-messages chatbot-received-messages';
        botMessageDiv.innerHTML = `<p>This is a response from the bot.</p>`;
        chatMessages.appendChild(botMessageDiv);

        // Scroll to Bottom
        chatMessages.scrollTop = chatMessages.scrollHeight;
      }, 1000);
    }
  </script>
</body>
</html>