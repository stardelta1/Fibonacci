
//[0,1,1,2,3,5,8,13,21,34]

let fibonacci = (limit) => {
    var fibArr = [0,1];
    for (var i =1; i < limit; i++) {
        var nex = fibArr[i] + fibArr[i-1];
        fibArr.push(nex);
    }
    return fibArr;
}
fibonacci(15);