<?php

$leaderboard = [ 
    "Dominique",
    "Ingrid",
    "Rodrigo",
    "Rafael",
    "Lutero"
];

// echo $leaderboard[0] . " is the leader";

$isTheLeader = " is the Leader!";

// if ($leaderboard[0] === "Dominique"){
//     echo $leaderboard[0].$isTheLeader;
// } else if ($leaderboard[0] === "Ingrid"){
//     echo $leaderboard[0].$isTheLeader;
// } else if ($leaderboard[0] === "Rodrigo"){
//     echo $leaderboard[0].$isTheLeader;
// } else if ($leaderboard[0] === "Rafael"){
//     echo $leaderboard[0].$isTheLeader;
// } else if ($leaderboard[0] === "Ingrid"){
//     echo $leaderboard[0].$isTheLeader;
// } else if ($leaderboard[0] === "Lutero"){
//     echo $leaderboard[0].$isTheLeader;
// } else {
//     echo "Jesus" . $isTheLeader;
// }

switch ($leaderboard[0]) {
    case 'Dominique':
        echo $leaderboard[0].$isTheLeader;
        break;
    case 'Ingrid':
        echo $leaderboard[0].$isTheLeader;
        break;
    case 'Rodrigo':
        echo $leaderboard[0].$isTheLeader;
        break;
    case 'Rafael':
        echo $leaderboard[0].$isTheLeader;
        break;
    case 'Lutero':
        echo $leaderboard[0].$isTheLeader;
        break;    
    default:
        echo "none" . $isTheLeader;
        break;
}