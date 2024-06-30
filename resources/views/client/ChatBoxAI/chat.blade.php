<style>
    /* body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    } */

    .chatbox {
        width: 100%;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        flex: 1;
        line-height: normal;
        font-size: 20px;
    }

    .chatbox-header {
        background-color: #007bff;
        color: #fff;
        padding: 10px 0;
        margin: 0;
        height: 50px;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .chatbox-body {
        overflow-y: scroll;
        padding: 10px;
        scroll-behavior: smooth;
        flex-shrink: 0;
        height: 390px;
    }

    .message {
        margin: 5px;
        margin-bottom: 5px;
        font-size: 15px;

    }

    .message.sent {
        text-align: right;
        margin-left: 20px;

    }

    .message.received {
        text-align: left;
        margin-right: 20px;

    }

    .message pre {
        padding: 8px;
        border-radius: 5px;
        margin: 0;
        display: inline-block;
        white-space: pre-wrap;
        max-width: 100%;
        line-height: 20px;
        font-size: 18px;
    }

    .message.sent pre {
        background-color: #d4edda;
        /* align-self: flex-end; */
        margin-left: 5px;
    }

    .message.received pre {
        background-color: #cce5ff;
        /* align-self: flex-start; */
        margin-right: 5px;

    }

    .chatbox-footer {
        display: flex;
        align-items: center;
        /* padding-top: 150px; */
        justify-content: space-between;
        flex: 1;
        font-size: 18px;

    }

    .input-message {
        padding: 8px;
        border: 3px solid #ced4da;
        border-radius: 5px;
        width: 80%;
        flex-shrink: 0;

    }

    .btn-send {
        margin-left: 10px;
        padding: 10px 16px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-left: 10px;
        flex: 1;
    }
</style>


<div class="chatbox">
    <div class="chatbox-header">
        Trung Tâm Hỗ Trợ
    </div>
    <div class="chatbox-body" id="chatboxBody">
        <div class="message received">
            <pre>Xin chào ! Tôi có thể giúp gì cho bạn?</pre>
        </div>
    </div>
    <div class="chatbox-footer">
        <input class="input-message" id="messageInput" placeholder="Type a message..." type="text" />
        <button class="btn-send" id="sendButton">
            Gửi
        </button>
    </div>
</div>



<script type="importmap">
          {
            "imports": {
              "@google/generative-ai": "https://esm.run/@google/generative-ai"
            }
          }
     </script>


<script type="module">
    import {
        GoogleGenerativeAI
    } from "@google/generative-ai";

    // Fetch your API_KEY
    const API_KEY = "AIzaSyB9C78SACfEcxSqDS8TMILCT9G6ICp-VIs";

    //
    let history = []

    let updateHistory = (user, model) => {
        history.push({
            role: "user",
            parts: [{
                text: user
            }],
        }, {
            role: "model",
            parts: [{
                text: model
            }],
        })
    }
    //

    // Access your API key (see "Set up your API key" above)
    const genAI = new GoogleGenerativeAI(API_KEY);

    async function run(mess) {
        // The Gemini 1.5 models are versatile and work with both text-only and multimodal prompts
        const model = genAI.getGenerativeModel({
            model: "gemini-1.5-flash"
        });

        const chat = model.startChat({
            history: history,

        })

        const result = await chat.sendMessage(mess);

        const response = await result.response;
        let text = response.text();
        // console.log('text', text);
        text = text.replaceAll('**', '')
        // console.log(text)
        return text

    }

    function scrollChatToBottom() {
        var chatboxBody = document.getElementById('chatboxBody');
        chatboxBody.scrollTop = chatboxBody.scrollHeight;
    }

    const callChatbox = async () => {

        var message = document.getElementById('messageInput').value;
        // console.log('mes', message)
        if (message.trim() !== '') {
            let newMessage = document.createElement('div');
            let contentMessage = document.createElement('pre');
            contentMessage.textContent = message


            newMessage.classList.add('message', 'sent');
            newMessage.appendChild(contentMessage);
            document.getElementById('chatboxBody').appendChild(newMessage);

            document.getElementById('messageInput').value = '';

            let loadMess = document.createElement('div');
            loadMess.innerHTML = `<pre> Loading... </pre>`;
            loadMess.classList.add('message', 'received');
            loadMess.id = 'loadMess';
            document.getElementById('chatboxBody').appendChild(loadMess);
            scrollChatToBottom();

            let text = await run(message)

            document.getElementById('loadMess').remove();


            let newReceived = document.createElement('div');
            let contentReceived = document.createElement('pre');
            contentReceived.textContent = text

            newReceived.classList.add('message', 'received');
            newReceived.appendChild(contentReceived)
            document.getElementById('chatboxBody').appendChild(newReceived);

            updateHistory(message, text)

        }

        scrollChatToBottom();
    }

    document.getElementById('sendButton').addEventListener('click', (e) => {
        callChatbox()

    });

    const inputField = document.getElementById('messageInput');

    inputField.addEventListener('keypress', function(event) {
        if (event.key === 'Enter' || event.keyCode === 13) {
            // Xử lý sự kiện click nút Enter trên inputField
            callChatbox()
        }
    });
</script>
