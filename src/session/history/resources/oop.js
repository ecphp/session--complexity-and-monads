const input = [1, 2, 3, 4, 5, 6 ,7 ,8 ,9];
let odds = [];

for (let i = 0; i <= input.length; i++) {
    if (i % 2 !== 0) {
        odds.push(i);
    }
}

console.log(odds); // logs [1, 3, 5, 7, 9]
