@if (session()->has('message'))
    <div class="flash container text-light text-center position-fixed top-0 end-0 px-4 py-2 w-25 " style="background: forestgreen; transform:translatex(100%);">
        <p> {{ session('message') }} </p>
    </div>
@endif

<script>
    let flash = document.querySelector('.flash');
    setTimeout(() => {
        flash.style.transition = 'all 0.9s linear';
        flash.style.transform = 'translateX(0)';
    }, 500);
    setTimeout(() => {
        flash.style.transform = 'translateX(100%)';
    }, 2000);
</script>