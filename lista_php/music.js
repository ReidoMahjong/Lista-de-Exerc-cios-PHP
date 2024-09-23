let aud = document.getElementById("lofi_back")

function vol_f() {
    if(aud.muted == true) {
        aud.muted = false;
        document.getElementById("vol_b").src='../img/sound.png';
    } else {
        aud.muted = true;
        document.getElementById("vol_b").src='../img/mute.png';
    }
}
let state = 'pause'
function p_f() {
    if (state == 'pause') {
        state = 'play';
        document.getElementById("p_b").src='../img/pause.png';
        aud.play()
    } else {
        state = 'pause';
        document.getElementById("p_b").src='../img/play.png';
        aud.pause()
    }
}