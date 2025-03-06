let selectedQuestions = [];
let answeredQuestions = 0;
let correctAnswers = 0;

function initializeQuiz(quizData) {
  selectedQuestions = quizData.sort(() => Math.random() - 0.5).slice(0, 5);
  loadQuiz();
}

function loadQuiz() {
  const quizContainer = document.getElementById("quiz-container");
  quizContainer.innerHTML = "";

  selectedQuestions.forEach((item, index) => {
    const questionElem = document.createElement("div");
    questionElem.classList.add("quiz-question");
    questionElem.innerHTML = `<h3>${index + 1}. ${item.question}</h3>`;

    item.options.forEach((option, optionIndex) => {
      const optionElem = document.createElement("div");
      optionElem.classList.add("quiz-option");
      optionElem.innerHTML = `${option} <span class="icon"></span>`;

      optionElem.addEventListener("click", () => {
        handleOptionClick(optionElem, item.correct, optionIndex, item, index);
      });
      questionElem.appendChild(optionElem);
    });
    quizContainer.appendChild(questionElem);
  });
}

function handleOptionClick(optionElem, correctIndex, selectedIndex, item, questionIndex) {
  const options = optionElem.parentElement.querySelectorAll(".quiz-option");
  options.forEach((option, index) => {
    option.classList.remove("correct", "incorrect");
    const icon = option.querySelector(".icon");
    icon.innerHTML = "";
  });

  if (selectedIndex === correctIndex) {
    optionElem.classList.add("correct");
    optionElem.querySelector(".icon").innerHTML = "✔";
    correctAnswers++;
  } else {
    optionElem.classList.add("incorrect");
    optionElem.querySelector(".icon").innerHTML = "✘";
    options[correctIndex].classList.add("correct");
  }

  answeredQuestions++;
  options.forEach((option) => {
    option.style.pointerEvents = "none";
  });

  if (answeredQuestions === selectedQuestions.length) {
    showFeedback();
  }
}

function showFeedback() {
  const feedbackElem = document.getElementById("feedback");
  const scorePercentage = (correctAnswers / selectedQuestions.length) * 100;
  let feedbackMessage;

  if (scorePercentage === 100) {
    feedbackMessage = "Excellent! You got all answers correct!";
  } else if (scorePercentage >= 75) {
    feedbackMessage = "Great job! You have a strong understanding of Variables in C.";
  } else if (scorePercentage >= 50) {
    feedbackMessage = "Good effort! You might want to review some concepts.";
  } else {
    feedbackMessage = "Keep practicing! Variable concepts could be tricky at first.";
  }

  feedbackElem.innerHTML = `You scored ${correctAnswers} out of ${selectedQuestions.length}. ${feedbackMessage}`;
}
