$(function () {
    var userFlag = 0;
    var logFlag = 0;
    var lanmuFlag = 0;
    var projectFlag = 0;
    var contentFlag = 0;
    $(".n-user").click(function () {
        //console.log(1);
        if (userFlag == 0) {
            $(".s-user").animate({
                left: "20px"
            });
            userFlag = 1;
        } else {
            $(".s-user").animate({
                left: "-250px"
            });
            userFlag = 0;
        }

    })
    $(".n-log").click(function () {
        //console.log(1);
        if (logFlag == 0) {
            $(".s-log").animate({
                left: "20px"
            });
            logFlag = 1;
        } else {
            $(".s-log").animate({
                left: "-250px"
            });
            logFlag = 0;
        }
    })
    $(".n-lanmu").click(function () {
        //console.log(1);
        if (lanmuFlag == 0) {
            $(".s-lanmu").animate({
                left: "20px"
            });
            lanmuFlag = 1;
        } else {
            $(".s-lanmu").animate({
                left: "-250px"
            });
            lanmuFlag = 0;
        }
    })
    $(".n-project").click(function () {
        //console.log(1);
        if (projectFlag == 0) {
            $(".s-project").animate({
                left: "20px"
            });
            projectFlag = 1;
        } else {
            $(".s-project").animate({
                left: "-250px"
            });
            projectFlag = 0;
        }
    })
    $(".n-content").click(function () {
        //console.log(1);
        if (contentFlag == 0) {
            $(".s-content").animate({
                left: "20px"
            });
            contentFlag = 1;
        } else {
            $(".s-content").animate({
                left: "-250px"
            });
            contentFlag = 0;
        }
    })

    $(".s-title1").click(function () {
        $(".s-title1").parent([0]).animate({
            left: "-250px"
        });
    })

})