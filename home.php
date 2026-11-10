<?php include 'header.php'; ?>

<!-- Hero Section -->
<header class=" bg-cover bg-center h-screen flex items-center justify-center relative ">
    <div class="absolute inset-0 "></div>
    <div class="text-center relative z-10 animate-fadeInUp">
        <h1 class="text-4xl md:text-6xl font-bold text-[#497D74] mb-6">Find Skilled Workers Near You</h1>
        <p class="text-lg text-[#497D74] mb-8">Carpenters, Plumbers, Electricians, and More</p>
        <a href="#services">
            <button type="submit" class="flex justify-center gap-2 items-center mx-auto shadow-xl text-lg bg-gray-50 backdrop-blur-md lg:font-semibold isolation-auto border-gray-50 before:absolute before:w-full before:transition-all before:duration-700 before:hover:w-full before:-left-full before:hover:left-0 before:rounded-full before:bg-emerald-500 hover:text-gray-50 before:-z-10 before:aspect-square before:hover:scale-150 before:hover:duration-700 relative z-10 px-4 py-2 overflow-hidden border-2 rounded-full group">
                Explore Services
                <svg
                    class="w-8 h-8 justify-end group-hover:rotate-90 group-hover:bg-gray-50 text-gray-50 ease-linear duration-300 rounded-full border border-gray-700 group-hover:border-none p-2 rotate-45"
                    viewBox="0 0 16 19"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                    d="M7 18C7 18.5523 7.44772 19 8 19C8.55228 19 9 18.5523 9 18H7ZM8.70711 0.292893C8.31658 -0.0976311 7.68342 -0.0976311 7.29289 0.292893L0.928932 6.65685C0.538408 7.04738 0.538408 7.68054 0.928932 8.07107C1.31946 8.46159 1.95262 8.46159 2.34315 8.07107L8 2.41421L13.6569 8.07107C14.0474 8.46159 14.6805 8.46159 15.0711 8.07107C15.4616 7.68054 15.4616 7.04738 15.0711 6.65685L8.70711 0.292893ZM9 18L9 1H7L7 18H9Z"
                    class="fill-gray-800 group-hover:fill-gray-800"
                    ></path>
                </svg>
            </button>
        </a>
    </div>
</header>

<!-- Services Section -->
 <div class="bg-white relative z-10 p-8">
<section id="services" class="py-16">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12 animate-fadeInUp">Our Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Carpenter -->
            <div class="bg-gray-50 p-6 rounded-lg shadow-md text-center hover-scale animate-scaleIn flex flex-col justify-center items-center h-full">
                <h3 class="text-xl font-semibold mb-2">Carpenter</h3>
                <p class="text-gray-600">Skilled carpenters for furniture, repairs, and custom woodwork.</p>
            </div>
            <!-- Plumber -->
            <div class="bg-gray-50 p-6 rounded-lg shadow-md text-center hover-scale animate-scaleIn flex flex-col justify-center items-center h-full">
                <h3 class="text-xl font-semibold mb-2">Plumber</h3>
                <p class="text-gray-600">Expert plumbers for leaks, installations, and maintenance.</p>
            </div>
            <!-- Electrician -->
            <div class="bg-gray-50 p-6 rounded-lg shadow-md text-center hover-scale animate-scaleIn flex flex-col justify-center items-center h-full">
                <h3 class="text-xl font-semibold mb-2">Electrician</h3>
                <p class="text-gray-600">Certified electricians for wiring, repairs, and installations.</p>
            </div>
        </div>
        <!-- Button Container with Margin Top -->
        <div class="mt-10 flex justify-center">
            <a href="services.php">
                <button
                    type="submit"
                    class="flex justify-center gap-2 items-center mx-auto shadow-xl text-lg bg-gray-50 backdrop-blur-md lg:font-semibold isolation-auto border-gray-50 before:absolute before:w-full before:transition-all before:duration-700 before:hover:w-full before:-left-full before:hover:left-0 before:rounded-full before:bg-emerald-500 hover:text-gray-50 before:-z-10 before:aspect-square before:hover:scale-150 before:hover:duration-700 relative z-10 px-4 py-2 overflow-hidden border-2 rounded-full group"
                >
                    All Services
                    <svg
                        class="w-8 h-8 justify-end group-hover:rotate-90 group-hover:bg-gray-50 text-gray-50 ease-linear duration-300 rounded-full border border-gray-700 group-hover:border-none p-2 rotate-45"
                        viewBox="0 0 16 19"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M7 18C7 18.5523 7.44772 19 8 19C8.55228 19 9 18.5523 9 18H7ZM8.70711 0.292893C8.31658 -0.0976311 7.68342 -0.0976311 7.29289 0.292893L0.928932 6.65685C0.538408 7.04738 0.538408 7.68054 0.928932 8.07107C1.31946 8.46159 1.95262 8.46159 2.34315 8.07107L8 2.41421L13.6569 8.07107C14.0474 8.46159 14.6805 8.46159 15.0711 8.07107C15.4616 7.68054 15.4616 7.04738 15.0711 6.65685L8.70711 0.292893ZM9 18L9 1H7L7 18H9Z"
                            class="fill-gray-800 group-hover:fill-gray-800"
                        ></path>
                    </svg>
                </button>
            </a>
        </div>
    </div>
</section>
</div>

<!-- Featured Workers Section -->
<section id="workers" class="relative mb-56 sm:mb-20 py-24 bg-[url('images/bgbg.jpg')] bg-fixed bg-cover h-auto">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12 animate-fadeInUp">Featured Workers</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Worker 1 -->
            <div class="bg-[#00ADB5] p-6 border-4 border-[#EEEEEE] rounded-lg shadow-lg text-center text-white font-poppins transition-all duration-300 hover:-translate-y-2.5">
                <!-- User Picture -->
                <div class="w-20 h-20 border-4 border-[#EEEEEE] rounded-full overflow-hidden mx-auto flex items-center justify-center">
                    <svg viewBox="0 0 448 512" class="w-10 fill-current">
                        <img src="images/carpenter1.avif" alt="">
                    </svg>
                </div>
                <!-- Client Name -->
                <p class="mt-5 font-semibold text-lg">
                    Jhon Doe
                    <span class="block font-light text-base">CEO of WritBook</span>
                </p>
                <!-- Rating -->
                <div class="relative my-5">
                    <div class="w-full h-0.5 bg-[#EEEEEE]"></div>
                    <p class="text-gray-600">⭐️⭐️⭐️⭐️⭐️ (5.0/5)</p>
                </div>
            </div>
            <!-- Worker 2 -->
            <div class="bg-[#00ADB5] p-6 border-4 border-[#EEEEEE] rounded-lg shadow-lg text-center text-white font-poppins transition-all duration-300 hover:-translate-y-2.5">
                <!-- User Picture -->
                <div class="w-20 h-20 border-4 border-[#EEEEEE] rounded-full overflow-hidden mx-auto flex items-center justify-center">
                    <svg viewBox="0 0 448 512" class="w-10 fill-current">
                        <img src="images/plumber1.jpg" alt="">
                    </svg>
                </div>
                <!-- Client Name -->
                <p class="mt-5 font-semibold text-lg">
                    Jane Smith
                    <span class="block font-light text-base">Homeowner</span>
                </p>
                <!-- Rating -->
                <div class="relative my-5">
                    <div class="w-full h-0.5 bg-[#EEEEEE]"></div>
                    <p class="text-gray-600">⭐️⭐️⭐️⭐️⭐️ (5.0/5)</p>
                </div>
            </div>
            <!-- Worker 3 -->
            <div class="bg-[#00ADB5] p-6 border-4 border-[#EEEEEE] rounded-lg shadow-lg text-center text-white font-poppins transition-all duration-300 hover:-translate-y-2.5">
                <!-- User Picture -->
                <div class="w-20 h-20 border-4 border-[#EEEEEE] rounded-full overflow-hidden mx-auto flex items-center justify-center">
                    <svg viewBox="0 0 448 512" class="w-10 fill-current">
                        <img src="images/electrician1.jpg" alt="">
                    </svg>
                </div>
                <!-- Client Name -->
                <p class="mt-5 font-semibold text-lg">
                    Mike Johnson
                    <span class="block font-light text-base">Business Owner</span>
                </p>
                <!-- Rating -->
                <div class="relative my-5">
                    <div class="w-full h-0.5 bg-[#EEEEEE]"></div>
                    <p class="text-gray-600">⭐️⭐️⭐️⭐️⭐️ (5.0/5)</p>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-16 bg-white">
        <div class="max-w-6xl mx-auto ">
            <h2 class="text-3xl font-bold text-center mb-12 animate-fadeInUp">Testimonials</h2>
            <div class="grid lg:grid-cols-2 xl:grid-cols-3 gap-y-14 gap-x-12">

              <!-- Testimonial 1 -->
              <div class="shadow-lg p-3 mr-8 lg:mr-0 relative rounded-md lg:mx-0 mx-5 btn-hover" style="width: 300px;">
                  <img class="h-48 w-[80%] object-cover rounded-lg absolute -top-6 -right-4 lg:mx-0" src="images/plumber1.jpg" alt="">
                  <div class="text-[#525560] flex flex-col">
                      <i class="ri-facebook-circle-fill rounded-full bg-white p-1 text-xl"></i>
                      <i class="ri-twitter-fill rounded-full bg-white p-1 text-xl my-2"></i>
                      <i class="ri-linkedin-box-fill rounded-full bg-white p-1 text-xl"></i>
                  </div>
                  <div class="pl-12 md:pl-20 lg:pl-12 pt-24">
                      <p class="text-xl">Sabina Karki</p>
                      <p class="text-md">CEO</p>
                      <p class="text-[#525560] text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit reprehenderit error quis aliquam saepe totam vero rem?</p>
                  </div>
              </div>

              <!-- Testimonial 2 -->
              <div class="shadow-lg p-3 mr-8 lg:mr-0 relative rounded-md lg:mx-0 mx-5 btn-hover" style="width: 300px;">
                  <img class="h-48 w-[80%] object-cover rounded-lg absolute -top-6 -right-4 lg:mx-0" src="images/electrician1.jpg" alt="">
                  <div class="text-[#525560] flex flex-col">
                      <i class="ri-facebook-circle-fill rounded-full bg-white p-1 text-xl"></i>
                      <i class="ri-twitter-fill rounded-full bg-white p-1 text-xl my-2"></i>
                      <i class="ri-linkedin-box-fill rounded-full bg-white p-1 text-xl"></i>
                  </div>
                  <div class="pl-12 md:pl-20 lg:pl-12 pt-24">
                      <p class="text-xl">Sabina Karki</p>
                      <p class="text-md">CEO</p>
                      <p class="text-[#525560] text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit reprehenderit error quis aliquam saepe totam vero rem?</p>
                  </div>
              </div>

              <!-- Testimonial 3 -->
              <div class="shadow-lg p-3 mr-8 lg:mr-0 relative rounded-md lg:mx-0 mx-5 btn-hover" style="width: 300px;">
                  <img class="h-48 w-[80%] object-cover rounded-lg absolute -top-6 -right-4 lg:mx-0" src="images/plumber2.jpg" alt="">
                  <div class="text-[#525560] flex flex-col">
                      <i class="ri-facebook-circle-fill rounded-full bg-white p-1 text-xl"></i>
                      <i class="ri-twitter-fill rounded-full bg-white p-1 text-xl my-2"></i>
                      <i class="ri-linkedin-box-fill rounded-full bg-white p-1 text-xl"></i>
                  </div>
                  <div class="pl-12 md:pl-20 lg:pl-12 pt-24">
                      <p class="text-xl">Sabina Karki</p>
                      <p class="text-md">CEO</p>
                      <p class="text-[#525560] text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit reprehenderit error quis aliquam saepe totam vero rem?</p>
                  </div>
              </div>

              <!-- Testimonial 4 -->
              <div class="shadow-lg p-3 mr-8 lg:mr-0 relative rounded-md lg:mx-0 mx-5 btn-hover" style="width: 300px;">
                  <img class="h-48 w-[80%] object-cover rounded-lg absolute -top-6 -right-4 lg:mx-0" src="images/electrician2.jpg" alt="">
                  <div class="text-[#525560] flex flex-col">
                      <i class="ri-facebook-circle-fill rounded-full bg-white p-1 text-xl"></i>
                      <i class="ri-twitter-fill rounded-full bg-white p-1 text-xl my-2"></i>
                      <i class="ri-linkedin-box-fill rounded-full bg-white p-1 text-xl"></i>
                  </div>
                  <div class="pl-12 md:pl-20 lg:pl-12 pt-24">
                      <p class="text-xl">Sabina Karki</p>
                      <p class="text-md">CEO</p>
                      <p class="text-[#525560] text-sm">"FixIt helped me find a great carpenter for my custom furniture. Highly recommended!"</p>
                  </div>
              </div>

              <!-- Testimonial 5 -->
              <div class="shadow-lg p-3 mr-8 lg:mr-0 relative rounded-md lg:mx-0 mx-5 btn-hover" style="width: 300px;">
                  <img class="h-48 w-[80%] object-cover rounded-lg absolute -top-6 -right-4 lg:mx-0" src="images/plumber3.jpg" alt="">
                  <div class="text-[#525560] flex flex-col">
                      <i class="ri-facebook-circle-fill rounded-full bg-white p-1 text-xl"></i>
                      <i class="ri-twitter-fill rounded-full bg-white p-1 text-xl my-2"></i>
                      <i class="ri-linkedin-box-fill rounded-full bg-white p-1 text-xl"></i>
                  </div>
                  <div class="pl-12 md:pl-20 lg:pl-12 pt-24">
                      <p class="text-xl">Sabina Karki</p>
                      <p class="text-md">CEO</p>
                      <p class="text-[#525560] text-sm">"The plumber was professional and fixed my leaky faucet in no time. Great service!"</p>
                  </div>
              </div>

            </div>
        </div>
    </section>


<!-- chatbot section  -->
<div id="chatbot-container">
    <div id="chatbot-interface">
      <!-- Chatbot Header -->
      <div id="chatbot-header">
        <p>Chat with Gorkhey</p>
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

    function addMessage(text, type, links = []) {
      const div = document.createElement('div');
      div.className = 'chatbot-messages ' + (type === 'sent' ? 'chatbot-sent-messages' : 'chatbot-received-messages');
      const p = document.createElement('p');
      p.textContent = text; // textContent, never innerHTML, so typed HTML can't run
      div.appendChild(p);
      links.forEach(link => {
        const a = document.createElement('a');
        a.href = link.url;
        a.textContent = '→ ' + link.label;
        a.style.display = 'block';
        a.style.textDecoration = 'underline';
        a.style.marginTop = '4px';
        div.appendChild(a);
      });
      chatMessages.appendChild(div);
      chatMessages.scrollTop = chatMessages.scrollHeight;
    }

    async function sendMessage() {
      const userMessage = chatInput.value.trim();
      if (userMessage === '') return;

      addMessage(userMessage, 'sent');
      chatInput.value = '';

      try {
        const response = await fetch('chatbot.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
          body: new URLSearchParams({ message: userMessage }),
        });
        const data = await response.json();
        addMessage(data.reply, 'received', data.links || []);
      } catch (error) {
        addMessage('Sorry, I could not connect. Please try again.', 'received');
      }
    }
  </script>


<?php include 'footer.php'; ?>