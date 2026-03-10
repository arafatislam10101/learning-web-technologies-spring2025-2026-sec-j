const cells = document.querySelectorAll(".cell");
const statusText = document.getElementById("status");
const resetBtn = document.getElementById("resetBtn");

const xScoreDisplay = document.getElementById("xScore");
const oScoreDisplay = document.getElementById("oScore");

let board = ["","","","","","","","",""];
let currentPlayer = "X";
let gameActive = true;

let xScore = 0;
let oScore = 0;

const winConditions = [
[0,1,2],
[3,4,5],
[6,7,8],
[0,3,6],
[1,4,7],
[2,5,8],
[0,4,8],
[2,4,6]
];

cells.forEach(cell => cell.addEventListener("click", handleCellClick));
resetBtn.addEventListener("click", resetGame);

function handleCellClick(){

    const index = this.getAttribute("data-index");

    if(board[index] !== "" || !gameActive){
        return;
    }

    board[index] = currentPlayer;
    this.textContent = currentPlayer;

    checkWinner();
}

function checkWinner(){

    let roundWon = false;

    for(let i=0;i<winConditions.length;i++){

        const [a,b,c] = winConditions[i];

        if(board[a] === "" || board[b] === "" || board[c] === ""){
            continue;
        }

        if(board[a] === board[b] && board[b] === board[c]){

            roundWon = true;

            cells[a].classList.add("win");
            cells[b].classList.add("win");
            cells[c].classList.add("win");

            break;
        }
    }

    if(roundWon){

        statusText.textContent = `Player ${currentPlayer} Wins!`;

        if(currentPlayer === "X"){
            xScore++;
            xScoreDisplay.textContent = xScore;
        }else{
            oScore++;
            oScoreDisplay.textContent = oScore;
        }

        gameActive = false;
        return;
    }

    if(!board.includes("")){
        statusText.textContent = "It's a Draw!";
        gameActive = false;
        return;
    }

    currentPlayer = currentPlayer === "X" ? "O" : "X";
    statusText.textContent = `Player ${currentPlayer}'s Turn`;
}

function resetGame(){

    board = ["","","","","","","","",""];
    gameActive = true;
    currentPlayer = "X";

    cells.forEach(cell=>{
        cell.textContent = "";
        cell.classList.remove("win");
    });

    statusText.textContent = "Player X's Turn";
}