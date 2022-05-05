const input = [1, 2, 3, 4, 5, 6 ,7 ,8 ,9];

const getOdds = arr => arr.filter(num => num % 2 !== 0);

console.log(getOdds(input)); // logs [1, 3, 5, 7, 9]
