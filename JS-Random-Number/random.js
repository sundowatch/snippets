function randomNumber(max = 1, min = 0) {
    if(min >= max) {
        return max;
    }
    return Math.floor(Math.random() * Math.floor((max - min) + 1) + min);
}