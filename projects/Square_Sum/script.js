function squareSum(numbers){
    let number_s = [];
    let sum = 0;
    for (let i = 0; i < numbers.length; i++) {
        const element = numbers[i]**2;
        number_s.push(element);
    }
    for (let i = 0; i < number_s.length; i++) {
        sum += number_s[i];
    }
    return sum
}
console.log(squareSum([1,2,2]));