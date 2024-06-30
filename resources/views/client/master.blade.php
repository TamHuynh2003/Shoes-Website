<!DOCTYPE html>
<html lang="en">

@include('client.designs.master_css')

<body class="animsition">

    @include('client.layout.header')


    @yield('content')


    @include('client.layout.footer')

    @include('client.designs.master_js')

    <div class="btn-social">
        <ul class="ft-menu-cl">
            <li class="menu-click"><i class="fa fa-comments btn" aria-hidden="true"></i>
                <div class="modal">
                    <div class="modal-content">

                        <span class="close">&times;</span>
                        {{-- <h3 class="align-items-center" style="color: black">Tư vấn hỗ trợ </h3>
                        <textarea name="ChatBox" id="chatbox" cols="30" rows="10" placeholder="CSKH"></textarea>
                        <input type="text" placeholder="Mời nhập" class="user_message" name="user_message" />
                        <button>Gửi</button> --}}
                        @include('client.ChatBoxAI.chat')
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <script>
        $(document).ready(function() {
        var modal = $('.modal');
        var btn = $('.btn');
        var span = $('.close');

        btn.click(function() {
            modal.show();
        });

        span.click(function() {
            modal.hide();
        });

        $(window).on('click', function(e) {
            if ($(e.target).is('.modal')) {
                modal.hide();
            }
        });
    });
    </script>
</body>

</html>