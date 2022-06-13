<!-- Footer START -->
<footer class="footer">
    <div class="footer-content">

        <p class="m-b-0">Copyright &copy; {{ \Carbon\Carbon::now()->year . ' ' . Config::get('app.name')}}. All rights reserved.</p>
        <span>
            <a href="{{ route('main.terms-conditions') }}" class="text-gray m-r-15">Term &amp; Conditions</a>
            <a href="{{ route('main.privacy-policy') }}" target="_blank" class="text-gray">Privacy &amp; Policy</a>
        </span>
    </div>
</footer>
<!-- Footer END -->