---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general
<!-- START_8ae5d428da27b2b014dc767c2f19a813 -->
## api/v1/register

> Example request:

```bash
curl -X POST "http://localhost/api/v1/register" \
-H "Accept: application/json" \
    -d "name"="dolor" \
    -d "email"="dolor" \
    -d "password"="dolor" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/register",
    "method": "POST",
    "data": {
        "name": "dolor",
        "email": "dolor",
        "password": "dolor"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/register`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 
    email | string |  required  | Maximum: `255`
    password | string |  required  | Minimum: `3`

<!-- END_8ae5d428da27b2b014dc767c2f19a813 -->

<!-- START_8c0e48cd8efa861b308fc45872ff0837 -->
## api/v1/login

> Example request:

```bash
curl -X POST "http://localhost/api/v1/login" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/login",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/login`


<!-- END_8c0e48cd8efa861b308fc45872ff0837 -->

<!-- START_0f374ce1a5f14a916acc9b78d46c8b35 -->
## api/v1/guests

> Example request:

```bash
curl -X GET "http://localhost/api/v1/guests" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/guests",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "Token is required"
}
```

### HTTP Request
`GET api/v1/guests`

`HEAD api/v1/guests`


<!-- END_0f374ce1a5f14a916acc9b78d46c8b35 -->

<!-- START_cc4408d55428956ddb519e528a68303e -->
## api/v1/guests/get-all

> Example request:

```bash
curl -X GET "http://localhost/api/v1/guests/get-all" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/guests/get-all",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "Token is required"
}
```

### HTTP Request
`GET api/v1/guests/get-all`

`HEAD api/v1/guests/get-all`


<!-- END_cc4408d55428956ddb519e528a68303e -->

<!-- START_38cbfa022fad170554321c8add80e1f4 -->
## api/v1/guests/{guest}

> Example request:

```bash
curl -X GET "http://localhost/api/v1/guests/{guest}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/guests/{guest}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "Token is required"
}
```

### HTTP Request
`GET api/v1/guests/{guest}`

`HEAD api/v1/guests/{guest}`


<!-- END_38cbfa022fad170554321c8add80e1f4 -->

<!-- START_31530248d2530713255c8770ae6cbd61 -->
## api/v1/guests

> Example request:

```bash
curl -X POST "http://localhost/api/v1/guests" \
-H "Accept: application/json" \
    -d "name"="recusandae" \
    -d "lead_name"="recusandae" \
    -d "address"="recusandae" \
    -d "telephone"="recusandae" \
    -d "email"="recusandae" \
    -d "arrival"="recusandae" \
    -d "departure"="recusandae" \
    -d "children"="recusandae" \
    -d "adult"="recusandae" \
    -d "car_registration"="recusandae" \
    -d "note"="recusandae" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/guests",
    "method": "POST",
    "data": {
        "name": "recusandae",
        "lead_name": "recusandae",
        "address": "recusandae",
        "telephone": "recusandae",
        "email": "recusandae",
        "arrival": "recusandae",
        "departure": "recusandae",
        "children": "recusandae",
        "adult": "recusandae",
        "car_registration": "recusandae",
        "note": "recusandae"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/guests`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 
    lead_name | string |  required  | 
    address | string |  required  | 
    telephone | string |  required  | 
    email | string |  required  | Maximum: `255`
    arrival | string |  required  | 
    departure | string |  required  | 
    children | string |  required  | 
    adult | string |  required  | 
    car_registration | string |  required  | 
    note | string |  required  | 

<!-- END_31530248d2530713255c8770ae6cbd61 -->

<!-- START_a1a0ead400ab49376b5863608eff7ea0 -->
## api/v1/guests/{guest}

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/guests/{guest}" \
-H "Accept: application/json" \
    -d "name"="sed" \
    -d "lead_name"="sed" \
    -d "address"="sed" \
    -d "telephone"="sed" \
    -d "email"="sed" \
    -d "arrival"="sed" \
    -d "departure"="sed" \
    -d "children"="sed" \
    -d "adult"="sed" \
    -d "car_registration"="sed" \
    -d "note"="sed" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/guests/{guest}",
    "method": "PUT",
    "data": {
        "name": "sed",
        "lead_name": "sed",
        "address": "sed",
        "telephone": "sed",
        "email": "sed",
        "arrival": "sed",
        "departure": "sed",
        "children": "sed",
        "adult": "sed",
        "car_registration": "sed",
        "note": "sed"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/guests/{guest}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 
    lead_name | string |  required  | 
    address | string |  required  | 
    telephone | string |  required  | 
    email | string |  required  | Maximum: `255`
    arrival | string |  required  | 
    departure | string |  required  | 
    children | string |  required  | 
    adult | string |  required  | 
    car_registration | string |  required  | 
    note | string |  required  | 

<!-- END_a1a0ead400ab49376b5863608eff7ea0 -->

<!-- START_817b26df734293e85ed31041cc4fccdb -->
## api/v1/guests/{guest}

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/guests/{guest}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/guests/{guest}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/guests/{guest}`


<!-- END_817b26df734293e85ed31041cc4fccdb -->

<!-- START_5934eb3897df3ee8ff8c252072b1fc81 -->
## api/v1/key-logs

> Example request:

```bash
curl -X GET "http://localhost/api/v1/key-logs" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/key-logs",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "Token is required"
}
```

### HTTP Request
`GET api/v1/key-logs`

`HEAD api/v1/key-logs`


<!-- END_5934eb3897df3ee8ff8c252072b1fc81 -->

<!-- START_2b34b280b0a173a360d77d03fe1fe5f2 -->
## api/v1/key-logs/get-all

> Example request:

```bash
curl -X GET "http://localhost/api/v1/key-logs/get-all" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/key-logs/get-all",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "Token is required"
}
```

### HTTP Request
`GET api/v1/key-logs/get-all`

`HEAD api/v1/key-logs/get-all`


<!-- END_2b34b280b0a173a360d77d03fe1fe5f2 -->

<!-- START_18fb89254cd7e33043ec39596f0586e2 -->
## api/v1/key-logs/{key_logs}

> Example request:

```bash
curl -X GET "http://localhost/api/v1/key-logs/{key_logs}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/key-logs/{key_logs}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "Token is required"
}
```

### HTTP Request
`GET api/v1/key-logs/{key_logs}`

`HEAD api/v1/key-logs/{key_logs}`


<!-- END_18fb89254cd7e33043ec39596f0586e2 -->

<!-- START_63291690d5c3c9a1a9148a0e95c07402 -->
## api/v1/key-logs

> Example request:

```bash
curl -X POST "http://localhost/api/v1/key-logs" \
-H "Accept: application/json" \
    -d "park"="nesciunt" \
    -d "plot_number"="nesciunt" \
    -d "type"="nesciunt" \
    -d "key_in"="nesciunt" \
    -d "key_out"="nesciunt" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/key-logs",
    "method": "POST",
    "data": {
        "park": "nesciunt",
        "plot_number": "nesciunt",
        "type": "nesciunt",
        "key_in": "nesciunt",
        "key_out": "nesciunt"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/key-logs`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    park | string |  required  | 
    plot_number | string |  required  | 
    type | string |  required  | 
    key_in | string |  required  | 
    key_out | string |  required  | 

<!-- END_63291690d5c3c9a1a9148a0e95c07402 -->

<!-- START_d1eb32af51f0585a5c09065c79966acc -->
## api/v1/key-logs/{key_logs}

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/key-logs/{key_logs}" \
-H "Accept: application/json" \
    -d "park"="voluptatem" \
    -d "plot_number"="voluptatem" \
    -d "type"="voluptatem" \
    -d "key_in"="voluptatem" \
    -d "key_out"="voluptatem" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/key-logs/{key_logs}",
    "method": "PUT",
    "data": {
        "park": "voluptatem",
        "plot_number": "voluptatem",
        "type": "voluptatem",
        "key_in": "voluptatem",
        "key_out": "voluptatem"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/key-logs/{key_logs}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    park | string |  required  | 
    plot_number | string |  required  | 
    type | string |  required  | 
    key_in | string |  required  | 
    key_out | string |  required  | 

<!-- END_d1eb32af51f0585a5c09065c79966acc -->

<!-- START_2bcc4a4cfe41a255916661e8ea8e0f3d -->
## api/v1/key-logs/{key_logs}

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/key-logs/{key_logs}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/key-logs/{key_logs}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/key-logs/{key_logs}`


<!-- END_2bcc4a4cfe41a255916661e8ea8e0f3d -->

<!-- START_398256862afdb6da114b415ab83019b7 -->
## api/v1/guests/{guest}/key_logs

> Example request:

```bash
curl -X GET "http://localhost/api/v1/guests/{guest}/key_logs" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/guests/{guest}/key_logs",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "A token is required",
    "exception": "Tymon\\JWTAuth\\Exceptions\\JWTException",
    "file": "\/var\/www\/html\/test_api\/vendor\/tymon\/jwt-auth\/src\/JWTAuth.php",
    "line": 299,
    "trace": [
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/tymon\/jwt-auth\/src\/JWTAuth.php",
            "line": 188,
            "function": "requireToken",
            "class": "Tymon\\JWTAuth\\JWTAuth",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/tymon\/jwt-auth\/src\/JWTAuth.php",
            "line": 74,
            "function": "getPayload",
            "class": "Tymon\\JWTAuth\\JWTAuth",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/laravel\/framework\/src\/Illuminate\/Support\/Facades\/Facade.php",
            "line": 221,
            "function": "toUser",
            "class": "Tymon\\JWTAuth\\JWTAuth",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/app\/Http\/Controllers\/version1\/Key_logController.php",
            "line": 53,
            "function": "__callStatic",
            "class": "Illuminate\\Support\\Facades\\Facade",
            "type": "::"
        },
        {
            "function": "index",
            "class": "App\\Http\\Controllers\\version1\\Key_logController",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Controller.php",
            "line": 54,
            "function": "call_user_func_array"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/ControllerDispatcher.php",
            "line": 45,
            "function": "callAction",
            "class": "Illuminate\\Routing\\Controller",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
            "line": 212,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
            "line": 169,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 658,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/SubstituteBindings.php",
            "line": 41,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 660,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 635,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 601,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 590,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 56,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/CheckForMaintenanceMode.php",
            "line": 46,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 149,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 102,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Generators\/LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Mpociot\/ApiDoc\/Commands\/GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 549,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 183,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 252,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 170,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/symfony\/console\/Application.php",
            "line": 936,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/symfony\/console\/Application.php",
            "line": 240,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/symfony\/console\/Application.php",
            "line": 148,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 88,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 121,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/var\/www\/html\/test_api\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/v1/guests/{guest}/key_logs`

`HEAD api/v1/guests/{guest}/key_logs`


<!-- END_398256862afdb6da114b415ab83019b7 -->

