var EIDTSHOW = $(".ENTRY_ADD").html() + "/admin/category/getOption";
$.ajax({
    url: EIDTSHOW,
    dataType: "json",
    success: function (e) {
        var cid = $("#cid").attr("cid");
        tree(e, 1, cid);
        //console.log(str);
        $("#cid").html(str);
        str = "";
    }
})

var str = "";

function tree(data, $i, cid, pid) {
    for (var i = 0; i < data.length; i++) {
        if (data[i].child) {
            if (cid !== undefined) {
                if (cid == data[i].cid) {
                    str += "<option value='" + data[i].cid + "'se;lected>" + str_repeat("&nbsp;&nbsp;", $i) + data[i].cname + "</option>";
                } else {
                    str += "<option value='" + data[i].cid + "'>" + str_repeat("&nbsp;&nbsp;", $i) + data[i].cname + "</option>";
                }
            } else {
                str += "<option value='" + data[i].cid + "'>" + str_repeat("&nbsp;&nbsp;", $i) + data[i].cname + "</option>";
            }
            tree(data[i].child, $i + 1, cid, pid);
        } else {
            if (cid !== undefined) {
                if (cid == data[i].cid) {
                    str += "<option value='" + data[i].cid + "'se;lected>" + str_repeat("&nbsp;&nbsp;", $i) + data[i].cname + "</option>";
                } else {
                    str += "<option value='" + data[i].cid + "'>" + str_repeat("&nbsp;&nbsp;", $i) + data[i].cname + "</option>";
                }
            } else {
                str += "<option value='" + data[i].cid + "'>" + str_repeat("&nbsp;&nbsp;", $i) + data[i].cname + "</option>";
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