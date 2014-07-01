(function(){
   var JST = {};
    //首页视图
          JST['homeUI'] = _.template('' +
              '<section>' +
                  '<div id="navList">' +
                      '<div class="searchBox">' +
                      '<em class="icon-search"></em>' +
                      '<input type="search" placeholder="Search" autocomplete="off"class="searchKeyWord" x-webkit-speech x-webkit-grammar="bUIltin:search" onwebkitspeechchange/> ' +
                      '</div>' +
                      '<div id="navMark">' +
                      '<ul></ul>' +
                      '</div>' +
                  '</div>' +
                  '<div id="content">' +
                      '<div class="header"></div>' +
                      '<div class="category"></div>' +
                      '<article id="article">' +
                          '<p class="articleTitle icon-file4"> 信息列表</p>' +
                          '<div id="articleContent">' +
                          '<div id="chapter"></div>' +
                          '</div>' +
                      '</article>' +
                  '</div>' +
              '</section>' +
              '<footer>' +
                  '<p>COPYRIGHT © PHPBOOK DEVELOPMENT CENTER | QIU GE</p>' +
                  '<p></p>' +
              '</footer>');



    //左边的文章列表导航视图
          JST['navListUI']= _.template("<li status='close' class='<%= tag %>' " +
              "chapter_id='<%= chapter_id %>'>" +
              "<em class='icon-book'>&nbsp;</em>" +
              "<%= title %>" +
              "</li>"
          );


   //中间的分类按钮视图
          JST['cateListUI']= _.template("<nav class='<%= category %>' type='<%= type %>'><%= title %></nav>");


    //中间分章忙碌加载视图

          JST['iconBusyUI']= _.template("<p class='tempBusy icon-busy'>内容加载中...........</p>");
          window.APP.JST=JST;

}).call(this)