function HttpCall()
{
    this.load = function (method, url, async, contentType, params, callback)
    {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open(method, url, true);
        xmlhttp.setRequestHeader("Content-Type", contentType);
        xmlhttp.send(params);
        xmlhttp.onreadystatechange = function () {
            callback(xmlhttp);
        };
    };
}