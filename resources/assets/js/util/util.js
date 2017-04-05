var isRoute = function(route) {
    if( route[0] != "/" ) {
        route = "/" + route;
    }
    var expression = route;
    while( route.indexOf('{') > 0 ) {
        expression = route.replace( /\{[0-9a-zA-Z_]+\}/g, "[0-9a-zA-Z]+" );
        route = route.replace( /\{[0-9a-zA-Z_]+\}/g, "" );
    }
    expression = new RegExp( expression );
    if( typeof route === "string" ) {
        return  expression.test( window.location.pathname );
    } else {
        return false;
    }
}

function ajaxPost ( dataList, callback, url, extraVariables ) {
	var getString = "";
	var xhr = new XMLHttpRequest();

	if(typeof url != "string") {
		url = window.location.pathname;
	}
	if ( typeof dataList === "string" ) {
		getString = dataList;
	} else if (dataList instanceof NodeList) {
		dataList = Array.prototype.slice.call(dataList) ? Array.prototype.slice.call(dataList) : dataList;
	} else {
		getString = encodeURIComponent(dataList.name) + "=" +  encodeURIComponent(dataList.value) + "&";
	}
	if ( dataList instanceof Array ) {
		for ( var i = 0; i < dataList.length; i++ ) {
			getString = getString + encodeURIComponent(dataList[i].name) + "=" + encodeURIComponent(dataList[i].value) + "&";
		}
	}
	for (var key in extraVariables) {
		if (extraVariables.hasOwnProperty(key)) {
			getString = getString + encodeURIComponent(key) + "=" +  encodeURIComponent(extraVariables[key]) + "&";
		}
	}


	xhr.open('POST', url);
	xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhr.setRequestHeader("X-CSRF-TOKEN", window.Laravel.csrfToken);
	xhr.send(getString);

	xhr.onreadystatechange = function() {
		if(xhr.readyState == 4 && xhr.status == 200) {
			try {
				response = JSON.parse(xhr.response);
			} catch ( err ) {
				response = xhr.response;
			}
			callback(response);
		}
	}
}

function tryEventListener( el, ev, func, capture ) {
	if (typeof capture === "undefined") {
		capture = false;
	}
	if ( ev.indexOf(' ') > -1 ) {
		let events = ev.split(' ');
		for(let i = 0; i < events.length; ++i) {
			this.tryEventListener(el, events[i], func, capture);
		}
	}

    if ( el !== null && el !== undefined ) {
        if( /\[object Array\]/.test( Object.prototype.toString.call( el ) ) || /\[object HTMLCollection\]/.test( Object.prototype.toString.call( el ) ) || /\[object NodeList\]/.test( Object.prototype.toString.call( el ) ) ) {
            for( let i = 0; i < el.length; i++ ) {
                this.tryEventListener(el[i], ev, func, capture);
            }
          // Check if the element is a HTMLElement, Window or Document.
        } else if( /\[object HTML[a-zA-Z]+Element\]/.test( Object.prototype.toString.call( el ) ) || /\[object HTMLDocument\]/.test( Object.prototype.toString.call( el ) ) || Object.prototype.toString.call( el )) {
            el.addEventListener(ev, func, capture);
            return true;
        }
    }
    return false;
}


module.exports = {
		tryEventListener: tryEventListener,
		isRoute: isRoute,
		ajaxPost: ajaxPost,
}