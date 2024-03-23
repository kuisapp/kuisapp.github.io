const fetchingData = async () => {
    try {
        const response = await fetch('questions.json'); // Ganti dengan nama file JSON Anda
        if (!response.ok) {
            throw new Error('Failed to fetch data');
        }
        const data = await response.json();
        questions = data.map((importedQuestion) => {
            const formattedQuestion = {
                question: importedQuestion.question,
                correct_answer: importedQuestion.correct_answer,
                image: importedQuestion.image,
                choices: Object.entries(importedQuestion.choices).map(([key, value]) => ({ key, value }))
            };
            return formattedQuestion;
        });
        startGame();
    } catch (error) {
        console.error('Error fetching data:', error);
    }
};

const start = document.querySelector("#start");
start.addEventListener("click", fetchingData);
