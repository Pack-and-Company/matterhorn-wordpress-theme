$(document).ready(function(){
	
	//------------------------
	$("#tweet-box").tweet({
          username: "TheMatterhorn",
          page: 1,
          avatar_size: 38,
          count: 4,
          loading_text: "loading ..."
        }).bind("loaded", function() {
          var ul = $(this).find(".tweet_list");
          var ticker = function() {
            setTimeout(function() {
              ul.find('li:first').animate( {marginTop: '-80px'}, 500, function() {
                $(this).detach().appendTo(ul).removeAttr('style');
              });
              ticker();
            }, 8000);
          };
          ticker();
        });
	//------------------------
});