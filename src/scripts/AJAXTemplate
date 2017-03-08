//HTTP Request state codes
var READY_STATE_UNINITIALIZED = 0;
var READY_STATE_LOADING = 1;
var READY_STATE_LOADED = 2;
var READY_STATE_INTERACTIVE = 3;
var READY_STATE_COMPLETE = 4;

//20x Indicates success
var HTTP_STATUS_OK = 200;
var HTTP_STATUS_CREATED = 201;
var HTTP_STATUS_ACCEPTED = 202;
var HTTP_STATUS_PARTIAL_INFORMATION = 203;
var HTTP_STATUS_NO_RESPONSE = 204;

//30x Indicate redirections
var HTTP_STATUS_MOVED = 301;
var HTTP_STATUS_FOUND = 302;
var HTTP_STATUS_METHOD = 303;
var HTTP_STATUS_NOT_MODIFIED = 304;

//40x, 50x Indicate errors
var HTTP_STATUS_BAD_REQUEST = 400;
var HTTP_STATUS_UNAUTHORIZED = 401;
var HTTP_STATUS_PAYMENT_REQUIRED = 402;
var HTTP_STATUS_FORBIDDEN = 403;
var HTTP_STATUS_NOT_FOUND = 404;

var HTTP_STATUS_INTERNAL_ERROR = 500;
var HTTP_STATUS_NOT_IMPLEMENTED = 501;
var HTTP_STATUS_SERVICE_TEMPORALY_OVERLOADED = 502;
var HTTP_STATUS_GATEWAY_TIMEOUT = 503;

//AJAX-SERVER
function createPetition()
{
    if(window.XMLHttpRequest)
    {
        xhr = new XMLHttpRequest();
    }
    else if(window.ActiveXObject)
    {
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }
    return xhr;
}

//Optional first petition to request information on load
function firstPetition()
{
    xhr = createPetition();
    var _params = "option=01";
    var _file = "file.php";
    var _type = "POST";
    var _query = "01";
    doPetition(_type, _params, _query, _file);
}

/* HOW TO USE
 * Add petitions to the switch structures
 * Create the function to asign how to process the data
 * Call doPetition function with the params needed
 * 
 * PHP Files are stored by default in php/
 * 
 *  */
function doPetition(_type, _params, _query, _file)
{
    var xhr = createPetition();
    switch(_type)
    {
        case "POST":
            switch(_query)
            {
                case "01":
                    xhr.onreadystatechange = process01;
                    sendPetitionPOST(_file, _params);
                break;
                case "02":
                    xhr.onreadystatechange = process02;
                    sendPetitionPOST(_file, _params);
                break;
                case "03":
                    xhr.onreadystatechange = process03;
                    sendPetitionPOST(_file, _params);
                break;
            }
            break;

        case "GET":
             switch(_query)
             {
                case "01":
                    xhr.onreadystatechange = process01;
                    sendPetitionGET(_file);
                break;
                case "02":
                    xhr.onreadystatechange = process02;
                    sendPetitionGET(_file);
                break;
                case "03":
                    xhr.onreadystatechange = process03;
                    sendPetitionGET(_file);
                break;
             }
            break;
    }

    function sendPetitionPOST(_file, _params)
    {
        xhr.open("POST", 'php/' + _file);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send(_params);
    }

    function sendPetitionGET(_file)
    {
        xhr.open("GET", 'php/' + _file);
        xhr.send(null);
    }
}


//Petition answers
function process01()
{
    if(xhr.readyState == READY_STATE_COMPLETE)
    {
        if(xhr.status == HTTP_STATUS_OK)
        {
            try
            {
                var jsonData = JSON.parse(xhr.responseText);
                useJSON(jsonData);
            }
            catch(_er)
            {
                console.log("Error: " + _er);
            }
        }
    }
}

function useJSON(_data)
{
    //Logic to use JSON, build tables, menus...
    document.body.innerHTML = _data;
}

//Optional first petition
//window.onload = firstPetition;


//AJAX-CLIENT
function onClickPetition(_x)
{

}
