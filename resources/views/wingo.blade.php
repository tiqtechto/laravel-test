@extends('layout')

@section('title', 'Royal Trading Login')
@section('description', 'Royal Trading Login page')
@section('keywords', 'login page, royal trading login page')

@section('content')  
<style>
    .body-bg-color{
        background: linear-gradient(90deg, rgba(204,233,0,1) 1%, rgba(214,227,0,1) 49%, rgba(223,207,0,1) 99%);
    } 

    .wallet-section {
        background-color: white;
        color: black;
        border-radius: 10px;
        padding: 10px;
        margin: 10px;
    }

    .btn-custom {
        border-radius: 20px;
        padding: 5px 20px;
    }

    .bet-buttons button {
        flex: 1;
        margin: 0 5px;
    }

    .number-grid button {
        padding: 0 !important;
        background: transparent !important;
        margin: 5px;
        font-weight: bold;
    }

    .number-grid img{
        width: 50px;
        height: 50px;
    }

    .game-history {
        background-color: white;
        color: black;
        border-radius: 10px 10px 0 0;
    }

    .history-item {
        border-bottom: 1px solid #eee;
        padding: 5px 0;
    }

    .btn-violet{
        background: rgb(255, 52, 255) !important;
        color: #fff;
    } 

    .btn-green{
        background: rgb(22, 191, 0) !important;
        color: #fff;
    } 
    .btn-red{
        background: rgb(255, 37, 37) !important;
        color: #fff;
    } 
    .clockimg{
        width: 55px !important;
    }

    /* bet place modal css */
    .placeBetModal .modal.fade .modal-dialog {
            transform: translate(0, 100%);
        }
        .placeBetModal .modal.show .modal-dialog {
            transform: none;
        }
        .placeBetModal .modal-content {
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }

        .betPlacedButtons .btn:visited{
            color: var(--bs-btn-active-color);
            background-color: var(--bs-btn-active-bg);
            border-color: var(--bs-btn-active-border-color);
        }

        .placeBetModal .btn-circle {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            text-align: center;
            padding: 0;
            line-height: 1.42857;
        } 

        .quantity_selected{
            width: 20% !important;
        }

        @media (max-width: 576px) {
           .placeBetModal .modal-dialog {
                margin: 0;
                position: fixed;
                bottom: 0;
                left: 0;
                right: 0;
                max-width: none;
            }
        }
    /* bet place modal css */
</style> 

<div class="app-container py-3 body-bg-color"> 
    <div class="wallet-section">
        <div class="d-flex justify-content-between align-items-center">
            <span>Wallet balance</span>
            <span>₹0.00</span>
        </div>
    </div>
    
    <div class="d-flex justify-content-between m-2">
        <button class="btn btn-danger btn-custom flex-grow-1 me-2">Withdraw</button>
        <button class="btn btn-success btn-custom flex-grow-1">Deposit</button>
    </div>

    <div class="btn-group w-100 px-1" role="group" aria-label="Basic radio toggle button group">
        <input type="radio" class="btn-check" name="btnradioTimer" id="btnradio1" value='1' checked>
        <label class="btn btn-outline-primary w-100 px-0" for="btnradio1"> 
            <img class="clockimg" src="{{asset('images/clock.png')}}" alt="clock1" /> 
            <br>
            Win Go <br> 1Min
        </label>

        <input type="radio" class="btn-check" name="btnradioTimer" id="btnradio2" value='3'>
        <label class="btn btn-outline-primary w-100 px-0" for="btnradio2"> 
            <img class="clockimg" src="{{asset('images/clock.png')}}" alt="clock1" /> 
            <br>
            Win Go <br> 3Min
        </label>

        <input type="radio" class="btn-check" name="btnradioTimer" id="btnradio3" value='5'>
        <label class="btn btn-outline-primary w-100 px-0" for="btnradio3">
            <img class="clockimg" src="{{asset('images/clock.png')}}" alt="clock1" /> 
            <br>
            Win Go <br> 5Min
        </label>

        <input type="radio" class="btn-check" name="btnradioTimer" id="btnradio4" value='10'>
        <label class="btn btn-outline-primary w-100 px-0" for="btnradio4"> 
            <img class="clockimg" src="{{asset('images/clock.png')}}" alt="clock1" /> 
            <br>
            Win Go <br> 10Min
        </label>
    </div>
    
    @include('timer') 
    
    <div class="bet-buttons d-flex justify-content-around m-2 selectNumbers">
        <button class="btn btn-green btn-custom fw-bold" data-bs-toggle="modal" data-bs-target="#congratulationsModal" >Green</button>
        <button class="btn btn-violet btn-custom fw-bold">Violet</button>
        <button class="btn btn-red btn-custom fw-bold">Red</button>
    </div>
    
    <div class="number-grid text-center my-3">
        <div class="selectNumbers">
            <button class="btn btn-light" onclick="openPlaceBetModal(0)">
                <img src="{{asset('images/wingo/c0.png')}}" alt="0" />
            </button>
            <button class="btn btn-light" onclick="openPlaceBetModal(1)">
                <img src="{{asset('images/wingo/c1.png')}}" alt="1" />
            </button>
            <button class="btn btn-light" onclick="openPlaceBetModal(2)">
                <img src="{{asset('images/wingo/c2.png')}}" alt="2" />
            </button>
            <button class="btn btn-light" onclick="openPlaceBetModal(3)">
                <img src="{{asset('images/wingo/c3.png')}}" alt="3" />
            </button>
            <button class="btn btn-light" onclick="openPlaceBetModal(4)">
                <img src="{{asset('images/wingo/c4.png')}}" alt="4" />
            </button>
        </div>
        <div class="selectNumbers">
            <button class="btn btn-light" onclick="openPlaceBetModal(5)">
                <img src="{{asset('images/wingo/c5.png')}}" alt="5" />
            </button>
            <button class="btn btn-light" onclick="openPlaceBetModal(6)">
                <img src="{{asset('images/wingo/c6.png')}}" alt="6" />
            </button>
            <button class="btn btn-light" onclick="openPlaceBetModal(7)">
                <img src="{{asset('images/wingo/c7.png')}}" alt="7" />
            </button>
            <button class="btn btn-light" onclick="openPlaceBetModal(8)">
                <img src="{{asset('images/wingo/c8.png')}}" alt="8" />
            </button>
            <button class="btn btn-light" onclick="openPlaceBetModal(9)">
                <img src="{{asset('images/wingo/c9.png')}}" alt="9" />
            </button>
        </div>
    </div>
    
    <div class="game-history p-3">
        <h6 class="mb-3">Game History</h6>
        <div class="history-item d-flex justify-content-between">
            <span>20240806017</span>
            <span>6</span>
            <span>Big</span>
            <span class="text-danger">●</span>
        </div>
        <div class="history-item d-flex justify-content-between">
            <span>20240806016</span>
            <span>9</span>
            <span>Big</span>
            <span class="text-success">●</span>
        </div>
        <!-- Add more history items as needed -->
    </div> 

    <!-- Modal -->
    <div class="modal fade congratulationsModal" id="congratulationsModal" tabindex="-1"
        aria-labelledby="congratulationsModalLabel" aria-hidden="true" data-bs-backdrop="static"
        data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content congratsColor">
                <div class="modal-header position-relative"> 
                    <img src="{{asset('images/congratsRibbon.png')}}" class="position-absolute top-0 start-50 translate-middle modalRibbon" alt="ribbon" /> 
                    <button type="button" class="btn-close d-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body"> 
                    <div class="congratulations-icon">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <h2>Congratulations</h2>
                    <p class="results">Lottery result: Red 6 Big</p>
                    <div class="amount">₹19.60</div>
                    <div class="card text-black">
                        <small>Period Id:20240213009</small>
                    </div>
                </div>

                <div class="modal-footer position-relative">
                    <div class="form-check text-white">
                        <input class="" type="checkbox" id="autoCloseCheck">
                        <label class="" for="autoCloseCheck">
                            5 seconds auto close
                        </label>
                    </div> <br>
                    <button type="button"
                        class="btn border border-3 border-danger text-danger rounded-circle position-absolute top-100 start-50 translate-middle bg-danger"
                        data-bs-dismiss="modal">
                        <i class="fa-solid fa-x text-white"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- bet place modal --}}
    <div class="modal fade placeBetModal" id="placeBetModal" tabindex="-1" aria-labelledby="placeBetModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-top">
                <div class="modal-header">
                    <h5 class="modal-title" id="placeBetModalLabel">Win Go <span class="modalMin">0</span>min &nbsp; <span class="modalTimerMin"></span>:<span class="modalTimerSec"></span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="userSelected text-center"> 
                        <span class="fw-bold text-white">Select <span id="userSelectedVal">6</span></span>
                    </div> 
                    <input type="hidden" class="form-control" name="selectedVal" id="selectedVal" value="6" /> 
                    <div class="mt-3 betPlacedAmountButtons">
                        <input type="hidden" name='selectedAmount' id="selectedAmount" value="1" />
                        <button class="btn btn-outline-secondary btn-circle border border-secondary fw-bold me-1 active">1</button>
                        <button class="btn btn-outline-secondary btn-circle border border-secondary fw-bold me-1">10</button>
                        <button class="btn btn-outline-secondary btn-circle border border-secondary fw-bold me-1">100</button> 
                        <button class="btn btn-outline-secondary btn-circle border border-secondary fw-bold me-1">100</button>
                        <button class="btn btn-outline-secondary btn-circle border border-secondary fw-bold me-1">1000</button>
                    </div>
                    <div class="mt-3 d-flex align-items-center">
                        <span>Quantity</span>
                        <button class="btn btn-outline-secondary ms-2 border border-secondary fw-bold" id="decrementButton">-</button>
                        <input class="form-control p-0 text-center quantity_selected" type="number" value="1" id="quantity_selected" name="quantity_selected" /> 
                        <button class="btn btn-outline-secondary border border-secondary fw-bold" id="incrementButton">+</button>
                    </div>
                    <div class="mt-3 betPlacedButtons">
                        <button id="x1btn" class="btn btn-outline-secondary border border-secondary fw-bold me-1 active">X1</button>
                        <button id="x5btn" class="btn btn-outline-secondary border border-secondary fw-bold me-1">X5</button>
                        <button id="x10btn" class="btn btn-outline-secondary border border-secondary fw-bold me-1">X10</button>
                        <button id="x20btn" class="btn btn-outline-secondary border border-secondary fw-bold me-1">X20</button>
                        <button id="x50btn" class="btn btn-outline-secondary border border-secondary fw-bold me-1">X50</button>
                        <button id="x100btn" class="btn btn-outline-secondary border border-secondary fw-bold me-1">X100</button>
                    </div>
                    <div class="mt-3">
                        <input class="" type="checkbox" id="agreeCheck" />
                        <label class="form-check-label" for="agreeCheck">
                            I agree <a href="#" class="text-danger">(Pre-sale rules)</a>
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success">Total amount ₹<span id="betAmount">1.00</span></button>
                </div>
            </div>
        </div>
    </div>
    {{-- bet place modal --}}

</div> 

@endsection 

@section('scripts') 
<script src="{{asset('js/jquery.min.js')}}"></script> 
<script src="{{asset('js/wingo.js')}}"></script> 
@endsection 

