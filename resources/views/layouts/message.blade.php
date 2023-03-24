@if(Session::has('success'))
<div class="fixed top-10 right-10">
    <p id="message" class="bg-green-700 rounded-lg text-white px-8 py-3 text-xl font-bold">{{session('success')}}</p>

    <script>
        $(function() {
            setTimeout(function() {
                $("#message").fadeOut(1000);
            }, 1500);
        });
    </script>
</div>
@endif