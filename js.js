

let numsRe = nums.replace(/\s/ig , "1").replace(/h/ig , "!").replace(/l/ig , "@").replace(/p/ig , "#").replace(/E/ig , "$").replace(/m/ig , "%").replace(/y/ig , "^").replace(/f/ig , "&").replace(/r/ig , "*").replace(/i/ig , "(").replace(/n/ig , ")").replace(/d/ig , "~");

console.log(numsRe);

let numsReg = numsRe.replace(/1/ig , " ").replace(/!/ig , "h").replace(/@/ig , "l").replace(/#/ig , "p").replace(/\$/ig , "e").replace(/%/ig , "m").replace(/\^/ig , "y").replace(/&/ig , "f").replace(/\*/ig , "r").replace(/\(/ig , "i").replace(/\)/ig , "n").replace(/~/ig , "d");

console.log(numsReg);