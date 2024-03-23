const question = document.querySelector("#question");
const currentScore = document.querySelector("#currentScore");
const progressBar = document.querySelector(".qz-progress-bar");
const gameDashboard = document.querySelector("#gameDashboard");

let displayedQuestion = [];
let acceptAnswer = false; //set to false so user can't answer before new question loaded
let score = 0;
let counterQuestion = 0;

let questions = [];


const MAX_QUESTIONS = 2;

// Buttons

// Sounds
const incorrectSound = document.querySelector("#incorrect");
const correctSound = document.querySelector("#correct");
const finalSound = document.querySelector("#finalSound");
const fanfare = document.querySelector('#fanfare');
const noPoints = document.querySelector('#noPoints');


// Bonus point will depend on the level of quiz difficulty the player will chose
let bonus;
const startGame = () => {
    counterQuestion = 0;
    score = 0;
    availableQuestions = [...questions]; // creating full copy of questions
    const answers = document.querySelector("#answers");

        bonus = 10;
        answers.innerHTML = "";
        location.href = "#start";
        gameProgress.classList.remove("hide");
        gameDashboard.classList.add("display");
        getNextQuestion();
    

};

const getNextQuestion = () => {
    if (availableQuestions.length === 0) {
        question.innerHTML = "";
        $('#finalModal').modal('show');
        setHighScore();
        gameDashboard.classList.remove("display");
        return;
    }

    counterQuestion++;
    // Update progress bar
    progressBar.innerText = `${counterQuestion}/${MAX_QUESTIONS}`;

    // Display the question text
    const currentQuestion = availableQuestions.shift(); // Ambil pertanyaan pertama dari array
    question.innerHTML = `${counterQuestion}. ${currentQuestion.question}`;

    // Display answer choices
    const choicesContainer = document.getElementById("answers");
    choicesContainer.innerHTML = "";
    const choices = Object.entries(currentQuestion.choices);
    for (let i = 0; i < choices.length; i++) {
        const choiceNumber = String.fromCharCode(65 + i); // A, B, C, D
        const [key, valueObj] = choices[i];
        const { key: choiceKey, value: choiceValue } = valueObj; // Menyimpan key dan value dari objek pilihan jawaban
        const answerContainer = document.createElement("div");
        answerContainer.classList.add("answers-container", "col-12", "col-sm-5");
        const prefixElement = document.createElement("p");
        prefixElement.classList.add("answer-prefix");
        prefixElement.textContent = choiceNumber;
        const choiceContent = document.createElement("p");
        choiceContent.classList.add("answer-choice");
        choiceContent.textContent = choiceValue;
        answerContainer.appendChild(prefixElement);
        answerContainer.appendChild(choiceContent);
        choicesContainer.appendChild(answerContainer);
        if (choiceKey === currentQuestion.correct_answer) {
            choiceContent.classList.add("correct-answer");
        }
    }

    progressBar.style.width = `${(counterQuestion / MAX_QUESTIONS) * 100}%`;

    // Enable answer selection
    acceptAnswer = true;
    selectingChoice();
};


const selectingChoice = () => {
    const choices = document.querySelectorAll(".answer-choice");
    choices.forEach((choice) => {
        choice.addEventListener("click", (e) => {
            if (!acceptAnswer) return;
            acceptAnswer = false;
            const selectedChoice = e.target;
            const correctAnswer = document.querySelector('.correct-answer');
            const answerClass = selectedChoice.classList.contains("correct-answer") ? "correct" : "incorrect";

            if (answerClass === "correct") {
                score += bonus;
                currentScore.innerText = score;
                if (document.querySelector(".fa-volume-up ")) {
                    if (!incorrectSound || !correctSound) return;
                    correctSound.currentTime = 0;
                    correctSound.play();
                }
            } else {
                if (document.querySelector(".fa-volume-up ")) {
                    if (!incorrectSound || !correctSound) return;
                    incorrectSound.currentTime = 0;
                    incorrectSound.play();
                }
            }
            correctAnswer.parentElement.classList.add('correct');
            setTimeout(() => {
                correctAnswer.parentElement.classList.remove('correct');
                getNextQuestion();
            }, 600);
        });
    });
};
