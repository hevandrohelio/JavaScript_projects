function reverse() {
    str = document.getElementById('text_box').value;
    let astr = str.split("");
    let rastr = astr.reverse();
    let jastr = rastr.join("")
    document.getElementById("text_reversed").innerHTML=jastr;
}