function maps(x){
    let y = [];
    for (let i = 0; i < x.length; i++) {
        const element = x[i];
        e = element*2;
        y.push(e);
    }
    return y;
}
console.log(maps([1,2,3]));


function maps(x){
    return x.map(n => n * 2);
}