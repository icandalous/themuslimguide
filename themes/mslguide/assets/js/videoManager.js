
var MSLM = MSLM || {};

MSLM.VideoManager = {
    token : "AIzaSyDRbd4qCqOEhI3XortpA5C3XzrvUJtvePk",
    channelId : "UCZxwMYonXweR9tiVRqCmhUA",
    maxResults : 50,
    
    getPlayList : function(fnCallback){
        var urlPlyalist = "https://www.googleapis.com/youtube/v3/playlists?part=snippet&channelId="+this.channelId+"&key="+this.token;
        $.ajax({
        	url: urlPlyalist,
        	method: "GET",
        	success: function(response) {
        		return fnCallback(response);
        	}
        });
    },
    
    getVideosFromPlayList : function(playlistId, playlistTitle, fnCallback){
        var urlVideos = "https://www.googleapis.com/youtube/v3/playlistItems?part=snippet%2CcontentDetails&maxResults="+this.maxResults+"&playlistId="+playlistId+"&key="+this.token;
        $.ajax({
        	url: urlVideos,
        	method: "GET",
        	success: function(response) {
        		var htmlContent = fnCallback(playlistTitle, response);
        		console.log(htmlContent);
        		$("#playlist-content").append(htmlContent);
        	}
        });
    },
    
    loadChannelDatas : function(){
        return this.getPlayList(this.fetchChannelPlaylists);
    },
    
    fetchChannelPlaylists : function(data){
         return data.items.map(function (item) {
            var idPlayList= item["id"];
            var playlistTitle = item["snippet"].title;
            MSLM.VideoManager.getVideosFromPlayList(idPlayList, playlistTitle, MSLM.VideoManager.renderVideos);          
        });
        
    },
    
    renderVideos : function(playlistTitle, data){
          return `<section class="Material-carousel-section section-padding">
            <div class="container yb-videos">
              <h3 class="small-title">${playlistTitle}</h3>
              <div class="row">
              
                   ${data.items.map(function (item) {
                        return MSLM.VideoManager.fetchVideoItem(item);          
                    }).join("")} 
        
            </div>
          </section>`
    },
    
    fetchVideoItem : function (data){
       return `<div class="col-12 col-lg-4">
            <div class="features-block">
                <div class="features-btn">
                    <span class="title">${data["snippet"]["title"]}</span>
                </div>
                <div class="features-content">
                    <iframe src="http://www.youtube.com/embed/${data["contentDetails"].videoId}" height="250" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>`
    }
}

var htmlContent = MSLM.VideoManager.loadChannelDatas();
console.log();

