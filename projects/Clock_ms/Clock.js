function past(h, m, s){
    return parseInt(((h*3.6*10**6)+(m*6*10**4)+(s*1000)).toFixed(0));
}
console.log(past(0,1,1));