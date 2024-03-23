<div id="gameDashboard" class="container-fluid">
        <div class="row text-center">   
            <div class="col-md-4 qz-hud">
                <!--Player name and high score-->
                <h2>Player Name</h2>
                <i class="fas fa-user-tag"></i>
                <p id="userName"></p>
                <h2>High Score</h2>
                <p><i class="fas fa-trophy"></i></p>
                <p id="highScore" class="hScore">
                </p>
                <p class="pb-3 hScore">Points<p>
            </div>
        </div>
    </div>
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col mt-4">
                <button class="btn btn-dark" id="start">Start game</button>
            </div>
        </div>
    </div>

<!-- Game live porogress bar and current question-->
<div class="container-fluid mt-5 text-center align-self-center hide" id="wrapper">
    <h2 class="title"><span>GAME PROGRESS</span></h2>
    <div class="progress progress-wraper align-self-center text-center">
        <div class="progress-bar 
            qz-progress-bar " role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="10"
            aria-label="progress bar"></div>
    </div>
    <div class="row justify-content-center ">
            <div class="col-12 col-sm-6 col-md-4 order-fist text-center align-self-center " id="score">
                <div class=" text-center qz-score--box">
                    <p>SCORE</p>
                    <p id="currentScore"></p>
                </div>
            </div>
            <div class="col-12 col-md-9 " id="qz-game">
                <h2><span>QUESTION</span></h2>
                <img class="img-fluid img-thumbnail" id="questionImage" src="" alt="Question Image">
                <h1 id="question"></h1>
                <div class="container-fluid">
                    <div class="row justify-content-center" id="answers"></div>
                </div>
            </div>
        </div>
</div>
<!--Section for three modals- Username,info modal, and Win modal  -->
<section>
    <!--username Modal-->
    <div class="modal" id="playerModal" tabindex="-1" aria-labelledby="playerModal" aria-hidden="true"
        data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content qz-Modal--bg" id="#usernameContent">
                <div class="modal-body qz-Modal--content">
                    <form>
                        <div class="mb-3 text-center">
                            <label for="user" class="col-form-label">PLAYER NAME</label>
                            <input type="text" class="form-control" id="user" name="user" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="submitName">CONFIRM</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Final Score Modal-->
    <div class="modal fade" id="finalModal" tabindex="-1" aria-labelledby="finalModal" aria-hidden="true"
        data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-dialog-center modal-fullscreen-sm-down">
            <div class="modal-content qz-Modal--bg">
                <div class="modal-header ">
                    <h2 class="modal-title" id="finalModalLabel">CONGRATULATIONS</h2>
                    <button type="button" class="btn close closeHighScore" data-bs-dismiss="modal"
                        aria-label="Close"><span aria-hidden="true">X</span></button>
                </div>
                <div class="modal-body qz-Modal--content" id="finalScore">
                </div>
            </div>
        </div>
    </div>
</section>
</main>