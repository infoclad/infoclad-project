/**
 * User: Ivan
 * Date: 27.01.2011.
 * Time: 21.35.37
 * To change this template use File | Settings | File Templates.
 */
function Background(flashID) {
    this.flashID = flashID;
    this.swfRef = null;
	this.onReady = function() { };

    this.registerswfRef = function() {
      if (this.swfRef == null)
        this.swfRef = swfobject.getObjectById(this.flashID);
    };
    this.start= function() {
      this.registerswfRef();
      this.swfRef.start();
    };
     this.resume= function() {
      this.registerswfRef();
      this.swfRef.resume();
    };
    this.pause = function() {
      this.registerswfRef();
      this.swfRef.pause();
    };
    this.next = function() {
      this.registerswfRef();
      this.swfRef.nextMovie();
    };
    this.prev = function() {
      this.registerswfRef();
      this.swfRef.previousMovie();
    };
    this.playMovieByNum = function(movieID) {
      this.registerswfRef();
      this.swfRef.playMovieByNum(movieID);
    };
    this.muteCurrentVideo = function(muteIt) {
      this.registerswfRef();
      this.swfRef.muteVideo(muteIt);
    };
}