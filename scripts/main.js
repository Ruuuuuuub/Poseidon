document.getElementById("navbar").innerHTML = `
        <div class="navbarContainer">
            <div class="navbarMenu">
                <div class="navbarTime">
                    <p class="date"><span id="date"></span></p>
                    <p class="time">
                        <span id="time"></span>
                        <span id="timeZulu"></span>
                        <br>
                        <span class="timeText">Local Zulu</span>
                    </p>
                </div>
            </div>
        </div>`;
