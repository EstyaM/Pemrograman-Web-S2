let btnRef = document.querySelectorAll(".button-option");
let popupRef = document.querySelector(".popup");
let restartBtn = document.getElementById("restart");

let winningPattern = [
  [0, 1, 2],
  [3, 4, 5],
  [6, 7, 8],
  [0, 3, 6],
  [1, 4, 7],
  [2, 5, 8],
  [0, 4, 8],
  [2, 4, 6],
];

// player X play first
let xTurn = true;
let count = 0;

// disable all buttons
const disableButton = () => {
  btnRef.forEach((element) => (element.disabled = true));
  // enable popup
  popupRef.classList.remove("hidden");
};

// enable all buttons
const enableButton = () => {
  btnRef.forEach((element) => {
    element.disabled = false;
    element.innerText = "";
  });
  // disable popup
  popupRef.classList.add("hidden");
};

// check if there is a winner
const winFunction = (letter) => {
  disableButton();
  if (letter === "X") {
    msgRef.innerText = "Player X wins";
  } else {
    msgRef.innerText = "Player O wins";
  }
};

// check if there is a draw
const drawFunction = () => {
  disableButton();
  msgRef.innerText = "Draw";
};

// newgame
newgameBtn.addEventListener("click", () => {
  enableButton();
  xTurn = true;
  count = 0;
});
restartBtn.addEventListener("click", () => {
  enableButton();
  xTurn = true;
  count = 0;
});

// win logic
const winChecker = () => {
  // loop through winning pattern
  for (let i of winningPattern) {
    let [element1, element2, element3] = [
      btnRef[i[0]].innerText,
      btnRef[i[1]].innerText,
      btnRef[i[2]].innerText,
    ];
    if (element1 != "" && element2 != "" && element3 != "") {
      if (element1 === element2 && element2 === element3) {
        winFunction(element1);
      }
    }
  }
};

// display X or O
btnRef.forEach((element) => {
  element.addEventListener("click", () => {
    if (xTurn) {
      element.innerText = "X";
      element.disabled = true;
      xTurn = false;
    } else {
      element.innerText = "O";
      element.disabled = true;
      xTurn = true;
    }
    count += 1;
    winChecker();
    if (count === 9) {
      drawFunction();
    }
    winChecker();
  });
});

window.onload = enableButtons();