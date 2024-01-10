class QuestionAndAnswer {

    constructor() {
        const listOfQuestions = document.getElementsByClassName(".question");
       listOfQuestions.forEach((question) => {
           new QuestionAndAnswerElement(question);
       })

    }
}
class QuestionAndAnswerElement {
    constructor(question) {
        const questionHeader = question.getElementsByClassName("question-header")[0];
        console.log(questionHeader)
        const questionAnswer = question.getElementsByClassName("question-answer")[0];
        console.log('questionAnswer', questionAnswer)


        const ths = this;
        questionHeader.addEventListener("click", function () {
            if (ths.state === ths.CLOSED) {
                ths.state = ths.OPENED;
                questionAnswer.style.height = "200px";
                questionAnswer.style.opacity = "1";
            } else if (ths.state === ths.OPENED) {
                ths.state = ths.CLOSED;
                questionAnswer.style.height = "0";
                questionAnswer.style.opacity = "0";
            }

            console.log("click")


        })


    }
    OPENED = "OPENED";
    CLOSED = "CLOSED";
    state = this.CLOSED;
}
