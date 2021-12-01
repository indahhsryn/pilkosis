<script>
    var timeDisplay = document.getElementById("time");


    function refreshTime() {
        var dateString = new Date().toLocaleString("en-US", {
            timeZone: "Asia/Jakarta"
        });
        var formattedString = dateString.replace(", ", " - ");
        timeDisplay.innerHTML = formattedString;
    }

    setInterval(refreshTime, 1000);

    //program hitung mundur
    const tujuan = new Date('Sept 30, 2021 09:00:00').getTime();

    const hitung_mundur = setInterval(function(){

        const sekarang = new Date().getTime();
    const selisih = tujuan - sekarang;

    const hari = Math.floor(selisih / (1000 * 60 * 60 * 24));
    const jam = Math.floor(selisih % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
    const menit = Math.floor(selisih % (1000 * 60 * 60) / (1000 * 60));
    const detik = Math.floor(selisih % (1000 * 60) / 1000);
    const teks = document.getElementById('text');
    teks.innerHTML = 'Pemilihan akan dimulai pada:' + ' ' + hari + ' ' + 'hari' + ' ' + jam + ' ' + 'jam' + ' ' + menit + ' ' + 'menit' + ' ' + detik + ' ' +' ' + 'detik lagi!';

    if( selisih < 0) {
        clearInterval(hitung_mundur);
        teks.innerHTML = 'Pilkosis Dimulai! <br> Silahkan pilih sesuai hati nurani anda!'
    }

    }, 1000);

</script>
</body>

</html>