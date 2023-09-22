<!DOCTYPE html>
<html>
<head>
    <title>Music Player</title>
</head>
<body>
    <audio id="audioPlayer" src="{{ asset('final-chapter.mp3') }}"></audio>

    <button type="button" class="btn bg-gradient-primary-to-secondary text-light fw-bolder" style="width: 140px;" onclick="playAudio()">
        MAU
    </button>

    <script>
        function playAudio() {
            var audioPlayer = document.getElementById("audioPlayer");
            if (audioPlayer.paused) {
                audioPlayer.play();
            } else {
                audioPlayer.pause();
                audioPlayer.currentTime = 0;
            }
        }
    </script>
</body>
</html>
