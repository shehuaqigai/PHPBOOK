(function(){
    var JST = {};
    //首页视图
    JST['adminHome'] = _.template('' +
        '<header class="header"></header>' +
        '<div class="padding"></div>'+
        '<article id="container">' +
            '<div class="leftNav">' +
                '<ul></ul>' +
            '</div>' +
            '<div class="showContent"></div>' +
        '</article>' +
        '<footer class="footer"></footer>'+
    '');

//左边的设置列表导航视图
    JST['navListUI']= _.template(
        "<li>" +
            "<dl>" +
                "<dt><%= category %></dt>" +
                "<% _.each(contentSet,function(value,key){ %><dd class='<%= key %>'><%= value %></dd><% }) %>"+
            "</dl>" +
        "</li>"+
    "");
    window.ADMIN.JST=JST;
}).call(this)
