function HiDevWeAreYourFriends() {
  if (navigator.userAgent.toLowerCase().indexOf('chrome') > -1) {
    var args = ['\n %c Made with ♥ by Blue Terrier Studio %c %c %c https://www.blueterrier.mx/ %c %c \n', 'color: #fff; background: #0988f4; padding:5px 0;', 'background: #dadada; padding:5px 0;', 'background: #dadada; padding:5px 0;', 'color: #fff; background: #dadada; padding:5px 0;', 'background: #dadada; padding:5px 0;', 'color: #0988f4; background: #dadada; padding:5px 0;'];
    window.console.log.apply(console, args);
  } else if (window.console) {
    window.console.log('Made with love ♥ Blue Terrier Studio - https://www.blueterrier.mx/');
  }
}

HiDevWeAreYourFriends();



