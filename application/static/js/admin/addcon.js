var EIDTSHOW = $(".ENTRY_ADD").html() + "/admin/category/getOption";
$.ajax({
    url: EIDTSHOW,
    dataType: "json",
    success: function (e) {
        tree(e, 1);
        //console.log(str);
        $("#cid").html(str);
        str = "";
    }
})

var str = "   <option value=\"\">请选择分类</option>";

function tree(data, $i, cid, pid) {
    for (var i = 0; i < data.length; i++) {
        if (data[i].child) {
            str += "<option value='" + data[i].cid + "'>" + str_repeat("&nbsp;&nbsp;", $i) + data[i].cname + "</option>";

            tree(data[i].child, $i + 1, cid, pid);
        } else {

            str += "<option value='" + data[i].cid + "'>" + str_repeat("&nbsp;&nbsp;", $i) + data[i].cname + "</option>";

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