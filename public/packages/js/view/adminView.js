(function(){
    //首页视图生成页
    var adminView=Backbone.View.extend({
        el:"#adminPage",
        events:{
        },
        models:null,
        template:ADMIN.JST,//模板
        //初始化应用
        initialize:function(){
            this.models=this.collection;
            this.render();
        },
        render:function(){
            this.$el.html(this.template['adminHome']());
            this.insertLeftNav();

        },
        insertLeftNav:function(){
           var self=this;
           var $ul=this.$el.find('.leftNav>ul');
           var li='';
            //遍历导航列表数据
            this.models.each(function(value,key){
            li+=self.template['navListUI'](value.attributes);
            });
            $ul.append(li);
        }

    });
    window.ADMIN.V.adminView=adminView;
}())
