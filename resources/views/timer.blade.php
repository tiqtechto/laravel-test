<style> 
    .ticket {
        background-color: #181800;
        border-radius: 10px;
        color: white;
        padding: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .how-to-play {
        background-color: rgba(255, 255, 255, 0.2);
        border-radius: 20px;
        padding: 5px 15px;
        font-size: 0.9rem;
    }
    .lottery-numbers {
        display: flex; 
        margin-top: 6px;
    }
    .lottery-numbers .number {
        width: 30px;
        height: 30px;
        background-color: white;
        color: #ff6b6b;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
    }
    .time-remaining {
        font-size: 1.5rem;
        font-weight: bold;
    }
    .ticket-number {
        font-size: 0.8rem;
        opacity: 0.8;
    } 

    .flip-clock {
        display: flex;
        justify-content: center;
        font-size: 9rem;
        font-weight: bold;
    }

    .flip-card {
        background-color: #333;
        color: #fff;
        padding: 10px 26px;
        border-radius: 10px;
        margin: 0 5px;
    }

    .timerModalbg {
        background: transparent;
        border: transparent;
    }
</style> 

<div class="row justify-content-center">
    <div class="my-1 px-3">
        <div class="ticket">
            <div class="d-flex justify-content-between align-items-center">
                <span class="how-to-play cursor-pointer">
                    <i class="bi bi-question-circle"></i> How to play
                </span>
                <div>
                    <small>Time remaining</small>
                    <div class="time-remaining"><span class="time-remainingMinute">00</span>:<span class="time-remainingSecond">00</span></div>
                </div>
            </div>
            <div class="">
                <strong>Win Go 1Min</strong>
                <div class="lottery-numbers">
                    <div class="number me-1">7</div>
                    <div class="number me-1">3</div>
                    <div class="number me-1">8</div>
                    <div class="number me-1">6</div>
                    <div class="number me-1">6</div>
                </div>
            </div>
            <div class="mt-3 ticket-number">
                202402130104018
            </div>
        </div>
    </div>
</div> 

<div class="modal fade" id="flipClockModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="flipClockModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content timerModalbg">
            <div class="modal-body">
                <div class="flip-clock">
                    <div class="flip-card flip-remainingMinute">0</div>
                    <div class="flip-card flip-remainingSecond">0</div>
                </div>
            </div>
        </div>
    </div>
</div>