- [API](#api)
  - [CREATE](#create)
  - [READ](#read)
  - [UPDATE](#update)
  - [DELETE](#delete)

# API 
## CREATE
LINK:http://localhost/CS_Elective_3/Assessment_Activity/api/create
Request Body: 
Method: POST
```JSON
{
  "list_title":"testing meow",
  "list_desc":"testing desc"
}
```
Response Body:
```JSON
{
  "status": {
    "remarks": "testing",
    "message": "Created List"
  },
  "payload": {
    "queryString": "INSERT INTO list (list_title, list_desc) VALUES (?,?)"
  },
  "timestamp": {
    "date": "2023-01-31 01:12:01.930862",
    "timezone_type": 3,
    "timezone": "Asia/Manila"
  },
  "prepared_by": "Albert John B. Santos"
}
```
## READ
Link: http://localhost/CS_Elective_3/Assessment_Activity/api/lists
Method: GET
Response Body:
```JSON
{
  "status": {
    "remarks": "Success",
    "message": "Successfully read list"
  },
  "payload": [
    {
      "list_id": 3,
      "list_title": "testing meow",
      "list_desc": "testing desc"
    },
    {
      "list_id": 4,
      "list_title": "testing meow",
      "list_desc": "testing desc"
    }
  ],
  "timestamp": {
    "date": "2023-01-31 01:12:42.211310",
    "timezone_type": 3,
    "timezone": "Asia/Manila"
  },
  "prepared_by": "Albert John B. Santos"
}
```

## UPDATE
Link: http://localhost/CS_Elective_3/Assessment_Activity/api/update
Method: POST
Request Body:
```JSON
{
  "list_id":2,
  "list_title": "meow testy",
  "list_desc":"meow desc"
}
```
Response Body:
```JSON
{
  "status": {
    "remarks": "Success",
    "message": "Successfully read list "
  },
  "payload": {
    "queryString": "UPDATE list SET list_title = ? ,list_desc = ? where list_id = ?"
  },
  "timestamp": {
    "date": "2023-01-31 01:13:59.116582",
    "timezone_type": 3,
    "timezone": "Asia/Manila"
  },
  "prepared_by": "Albert John B. Santos"
}
```
## DELETE
Link: http://localhost/CS_Elective_3/Assessment_Activity/api/list/2
Method: DELETE
Response Body:
```JSON
{
  "status": {
    "remarks": "Success",
    "message": "Successfully Delete list "
  },
  "payload": {
    "queryString": "DELETE from list WHERE list_id = ?"
  },
  "timestamp": {
    "date": "2023-01-31 01:14:43.267642",
    "timezone_type": 3,
    "timezone": "Asia/Manila"
  },
  "prepared_by": "Albert John B. Santos"
}
```