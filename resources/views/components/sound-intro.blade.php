    <div id="textToSpeak" class="mb-4 hidden">
        Selamat datang di website resmi bidang pembinaan pendidikan khusus
    </div>

    <button id="playSoundButton"
        class="bg-[#FA8F21]/[0.20] btn border-none hover:bg-[#D87815] text-white font-bold py-2 px-4 rounded fixed z-50 mt-[30%]">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 16">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M1.75 5.75v4.5h2.5l4 3V2.75l-4 3zm9 .5s1 .5 1 1.75s-1 1.75-1 1.75m1-6.5c2 1 3 2.5 3 4.75s-1 3.75-3 4.75" />
        </svg>
    </button>

    <script>
        document.getElementById('playSoundButton').addEventListener('click', function() {
            var text = document.getElementById('textToSpeak').innerText.trim();
            var speech = new SpeechSynthesisUtterance(text);
            var voices = window.speechSynthesis.getVoices();
            speech.voice = voices.find(function(voice) {
                return voice.name ===
                    'Google Bahasa Indonesia'; // Ganti dengan suara perempuan bahasa Indonesia yang tersedia di browser Anda
            });
            speechSynthesis.speak(speech);
        });
    </script>
