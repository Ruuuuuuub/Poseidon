
getTime();
getTimeZulu();
getDate()

function getDate() {
    const date = new Date();
    let day = date.getDate();
    let month = date.getMonth() + 1;
    let year = date.getFullYear();
    let formattedDate = day + "/" + month + "/" + year;

    document.getElementById("date").innerHTML = formattedDate;
}

function getTime() {
    const today = new Date();
    let h = today.getHours();
    let m = today.getMinutes();
    m = checkTime(m);
    h = checkTime(h);
    document.getElementById('time').innerHTML = h + ":" + m;
    setTimeout(getTime, 1000);
}

function getTimeZulu() {
    const todayZulu = new Date();
    let h = todayZulu.getUTCHours();
    let m = todayZulu.getUTCMinutes();
    m = checkTime(m);
    h = checkTime(h);
    document.getElementById('timeZulu').innerHTML = h + ":" + m;
    setTimeout(getTimeZulu, 1000);
}

function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}



