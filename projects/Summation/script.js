function summation(n) {
    let sum = 0;
    for (let index = 0; index <= n; index++) {
        sum += index;
    }
    return sum
}
console.log(summation(8));