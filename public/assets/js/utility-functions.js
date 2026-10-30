//---JS utility functions

// function to calculate the year difference between the given date and the current date
function calculateYearDiff(date) {
    let givenDate = new Date(date);
    let currentDate = new Date();
    let timeDiff = currentDate.getTime() - givenDate.getTime();
    let years = Math.floor(timeDiff / (1000 * 3600 * 24 * 365.25));
    return years;
}
