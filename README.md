# Laravel Rest API

> A simple demonstration on api handle in laravel framework

## Usage

  We have the api built in on the back end folder which is a complete laravel app. We send our request from the front end the server accepts the request which is the back end and it saves on the database. 


## Config

  - To have the **api** functionality we created **ItemsController** inside the back end folder which returns our data as json. This controller enables the data to be fetched as json object. 

  - We need to enable **laravel cors** which will allow request to come in from separate domain. 

  ```php

    public function index()
    {
        // we want to grab all the items and output
        // them as json
        $items = Item::all();
        return response()->json($items);
    }

  ```

  ```php
    public function store(Request $request)
    {
        // to post any kind if item
        // following code represent normal post method for our api
        // but this can not handle error handling
        // $this->validate($request), [
        //   'text' => 'required'
        // ]
        $validator = Validator::make($request->all(), [
          'text' => 'required'
        ]);

        if($validator->fails()){
          $response = array('response' => $validator->messages(), 'success' => false);
          return $response;
        } else {
          // create item
          $item = new Item;
          $item->text = $request->input('text');
          $item->body = $request->input('body');
          $item->save();

          return response()->json($item);
        }
    }

  ```

  - On our front end we are making ajax request to get the data from the database. 

  ```js

      function getItems() {
        $.ajax({url: 'http://localhost/itemapi/back-end/public/api/items'}).done    (function(items) { let output = '';
          $.each(items, function(key, item) { output +=
          ` <li class="list-group-item">
              <strong>${item.text}: </strong>${item.body} <a href="#" class="deleteLink" data-id="${item.id}">Delete</a>
            </li>
          ` ;
          });
            $('#items').append(output);
          });
      }

  ```