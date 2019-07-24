<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Chat Room</title>
    <link rel="stylesheet" href=" {{asset('css/app.css')}} ">
    <style>
        #app{
            padding-top: 20px;
        }

        .list-group{
            overflow-y: scroll;
            height: 200px;
            background-color: #313e4b;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row" id="app">
            <div class="col-md-6 offset-md-3">
                <li class="list-group-item active">Chat Room</li>
                <ul v-chat-scroll class="list-group">
                    <message v-for="msg in chat.messages" v-bind:key="msg.index" color="success">
                        @{{msg}}
                    </message>

                </ul>
                <input type="text" v-model="message" class="form-control" placeholder="Write your message..." @keyup.enter="sendMsg">
            </div>
        </div>
    </div>


    <script src=" {{asset('js/app.js')}} "></script>
</body>
</html>