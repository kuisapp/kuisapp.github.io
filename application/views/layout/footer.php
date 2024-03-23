<footer class="footer mt-auto py-3" >
            <div class="container-fluid">
                <div class="row ">
                </div>
            </div>
        </footer>
    <!--Audio-->  
    <audio id="btnClick" src="assets/audio/click.mp3"></audio>
    <audio id="incorrect" src="assets/audio/incorrect.wav"></audio>
    <audio id="correct" src="assets/audio/correct.wav"></audio>
    <audio id="finalSound" src="assets/audio/final_success.wav"></audio>
    <audio id="fanfare" src="assets/audio/tada.mp3"></audio>
    <audio id="noPoints" src="assets/audio/noPoints.wav"></audio>
    <!--Scripts-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>
    <script src="<?= _assets() ?>/js/settings.js"></script>
    <script src="<?= _assets() ?>/js/user.js"></script>
    <script src="<?= _assets() ?>/js/fetch.js"></script>
    <script src="<?= _assets() ?>/js/game.js"></script>
    <script>
            var BASE_URL = '<?= base_url() ?>';
            document.addEventListener('DOMContentLoaded', init, false);

            function init() {
                if ('serviceWorker' in navigator && navigator.onLine) {
                    navigator.serviceWorker.register( BASE_URL + 'service-worker.js')
                    .then((reg) => {
                        console.log('Registrasi service worker Berhasil', reg);
                    }, (err) => {
                        console.error('Registrasi service worker Gagal', err);
                    });
                }
            }
</script>
</body>
</html>