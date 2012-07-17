var kwg = new KWGProvider();

function KWGProvider ()
{
  var sig = "";
  var playerKey = "";
  var url = "";
  var div = "";
  var width;
  var height;
  
  this.init = function(pSig, pPlayerKey, pDiv, pWidth, pHeight) {
    var _this = this;
    this.sig = pSig;
    this.playerKey = pPlayerKey;
    this.div = pDiv;
    this.width = pWidth;
    this.height = pHeight;
    
    $.getJSON("http://api.kewego.com/video/getStreamURL/?jsonp=?",
      {playerKey: this.playerKey, sig: this.sig, format: "ipadHQ", APIFormat: "jsonp"},
      function(data) {
        _this.url = data.kewego_response.message.videoStream;
        _this.startPlayer();
      }
    );
  };
  
  this.startPlayer = function() {
    var configobj = {
      "controls":{'src_img':'images/pixel.png'},
      "players": {
		    "Flash":{"src":"ovp.swf","minver":"9","controls":true, "plugins":[]},
		    "Silverlight":{"src":"ovp.xap","minver":"4.0","controls":true, "plugins":[]},
        "HTML5":{"minver":"0","controls":true}
		  },
      "strategy":{"order":["HTML5","Flash","Silverlight"]}
    };
    
    ovp.init(configobj);
    
    var videoconf = {
      "sources":[
        {'src':'../../vid/intro.m4v', 'type':'video/m4v'}],
      'posterimg':'http://api.kewego.com/video/getHTML5Thumbnail/?playerKey='+this.playerKey+'&sig='+this.sig,
      'autobuffer':true,
      'controls':true,
      'id':this.div+'_video',
      'width':this.width,
      'height':this.height
    };
    
    ovp.render(this.div,videoconf);
  };
}