(function(){
//分类表中的一行
    var categoryRow=Backbone.Model.extend({
        defaults:{
            category: "",
            title: "",
            type: ""
        }
      //  validate:function(attrs){
      //  },
      //  initialize:function(){

      //  }

    });
//内容表中的一行
    var contentRow=Backbone.Model.extend({
        defaults:{
            chapter_id: "",
            id: "",
            mark: "",
            title: "",
            type: ""
        }
       // initialize:function(){

      //  }

    });
//章节表中的一行
    var chapterRow=Backbone.Model.extend({
        defaults:{
            chapter_id: "",
            id: "",
            tag: "",
            title: "",
            type: ""
        }
       // initialize:function(){

       // }

    });
//分类表
//内容表
//章节表
function factoryTable(modelName,table){
    var tables=Backbone.Collection.extend({
        model:modelName,
        initialize:function(){
            var mode='';
            var self=this;
            var curmodel=new this.model();

            _.each(bookData[table],function(value){
                mode=curmodel.clone();
                mode.set(value)
                self.push(mode);

            })

        }
    });
    var tableObj=new tables();
      return tableObj;
}
   //创建三张表数据
    window.APP.M.collections=function(){
      var tables={
          category:factoryTable(categoryRow,'category'),
          content:factoryTable(contentRow,'content'),
          chapter:factoryTable(chapterRow,'chapter')
      };
      //清除数据
      window.bookData=undefined;
      return tables;
  }

})()





