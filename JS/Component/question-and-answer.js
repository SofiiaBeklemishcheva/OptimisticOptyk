class QuestionAndAnswer {
    constructor() {
        this.root = document.querySelectorAll(".question:last-of-type") [0];
        const questionHeader = this.root.getElementsByClassName("question-header") [0];
        console.log(questionHeader)
        questionHeader.addEventListener("click",function (){console.log("click")})

    }
    OPENED = "OPENED";
    CLOSED = "CLOSED";
    state = null;

    root = null;

}
