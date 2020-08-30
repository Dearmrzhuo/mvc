$(".o-add").click(function () {
    $(window.parent.document).find("#main").css("min-height","800px");
    $(".pannel-con").css("border", "5px solid rgba(53, 52, 52, 0.7) ")
    var cid = $(this).attr("attr");
    //console.log(cid);
    $(".cid").val(cid);
    //console.log($(".cid").val());
    $(".addpannel").css("display", "block");
    setTimeout(function () {
        $(".addpannel-con").css("opacity", "1");
    }, 200)

})
$(".addclose").click(function () {
    $(".addpannel-con").css("opacity", 0);
    setTimeout(function () {
        $(".addpannel").css("display", "none");
    }, 800)
    $(window.parent.document).find("#main").css("min-height","650px");
})

function randomColor(num) {
    setInterval(function () {
        $(".table-title").css("color", "rgb(" + (Math.random() * 255) + "," + (Math.random() * 255) + "," + (Math.random() * 255) + ")")
    }, num);
}
randomColor(1000);
//修改
$(".o-edit").click(function () {
    $(window.parent.document).find("#main").css("min-height","800px");
    $(".pannel-con").css("border", "5px solid rgba(53, 52, 52, 0.7) ")
    var cid = $(this).attr("attr");
    var pid = $(this).attr("pid");
    //console.log(cid);
    $(".cidEdit").val(cid);
    $(".editpannel").css("display", "block");
    setTimeout(function () {
        $(".editpannel-con").css("opacity", "1");
    }, 200)

    var EIDTURL = $(".ENTRY_ADD").html() + "/admin/category/show";
    //console.log(EIDTURL);
    $.ajax({
        url: EIDTURL,
        data: {
            cid
        },
        dataType: "json",
        success: function (e) {
            //console.log(e);
            $(".cnameEdit").val(e["cname"]);
            $(".isshowEdit").val(e["isshow"]);
            $(".infoEdit").val(e["info"]);
            $(".tpl_nameEdit").val(e["tpl_name"]);
        }
    })
    var EIDTSHOW = $(".ENTRY_ADD").html() + "/admin/category/getOption";
    $.ajax({
        url: EIDTSHOW,
        dataType: "json",
        success: function (e) {
            tree(e, 1, cid, pid);
            //console.log(str);
            $("#opts").html(str);
            str = "";
        }
    })
    //修改内容
    var EIDTLOG = $(".ENTRY_ADD").html() + "/admin/category/editcon";
    // console.log(EIDTLOG);
    $(".o-edit-btn").click(function () {
        //1.名字 //2.cid ->pid
        var data = ($(".editpannel form").serialize());//采集表单内容序列化
        console.log(data);
        $.ajax({
            url: EIDTLOG,
            data: data,
            success: function (e) {
                $(window.parent.document).find("#main").css("min-height","650px");
                if ($.trim(e) == "ok") { //去掉空格
                    location.reload();
                }
            }
        })
    })
})
var str = "";

function tree(data, $i, cid, pid) {
    for (var i = 0; i < data.length; i++) {
        if (data[i].child) {
            if (data[i].cid != cid) {
                if (data[i].cid == pid) {
                    str += "<option value='" + data[i].cid + "'selected>" + str_repeat("&nbsp;&nbsp;", $i) + data[i].cname + "</option>";
                } else {
                    str += "<option value='" + data[i].cid + "'>" + str_repeat("&nbsp;&nbsp;", $i) + data[i].cname + "</option>";
                }
            }
            tree(data[i].child, $i + 1, cid, pid);
        } else {
            if (data[i].cid != cid) {
                if (data[i].cid == pid) {
                    str += "<option value='" + data[i].cid + "'selected>" + str_repeat("&nbsp;&nbsp;", $i) + data[i].cname + "</option>";
                } else {
                    str += "<option value='" + data[i].cid + "'>" + str_repeat("&nbsp;&nbsp;", $i) + data[i].cname + "</option>";
                }
            }
        }
    }
}

function str_repeat(str, num) {
    var result = "";
    for (var i = 0; i < num; i++) {
        result += str;
    }
    return result;
}
$(".editclose").click(function () {
    $(".editpannel-con").css("opacity", 0);
    setTimeout(function () {
        $(".editpannel").css("display", "none");
    }, 800)
    $(window.parent.document).find("#main").css("min-height","650px");
})
$(".pannel-con").click(function () {
    $(this).css("border", "5px solid rgba(255, 215, 0,0.7) ")
})