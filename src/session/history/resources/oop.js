const arr = [1, 2, 3, 4, 5, 6 ,7 ,8 ,9]

function getOdds(arr) {
    let odds = [ ];

    for(let i = 0; i < arr.length + 1; i++){
        if ( i % 2 !== 0 ){
            odds.push( i )
        };
    };

    return odds
};

console.log(getOdds(arr)) // logs [1, 3, 5, 7, 9]
